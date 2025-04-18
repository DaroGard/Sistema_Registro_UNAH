<?php

include_once __DIR__ . '/../../../../utils/classes/Request.php';
include_once __DIR__ . '/../../../../config/database/Database.php';
include_once __DIR__ . '/../../../../services/students/types/StudentResponse.php';

session_start();
Request::isWrongRequestMethod('GET');
header("Content-Type: application/json");

if (empty($_SESSION) || !isset($_SESSION["ID_STUDENT"])) {
    echo json_encode(new StudentResponse("failure", error: new ErrorResponse(401, "Unauthorized")));
    return;
}

$studentId = (int) $_SESSION["ID_STUDENT"];
$receiverId = $_GET['receiverId'] ?? null;
$receiverType = isset($_GET['receiverType']) ? strtoupper($_GET['receiverType']) : null;
$lastMessageId = isset($_GET['lastMessageId']) ? (int) $_GET['lastMessageId'] : null;
$limit = 20;

if (!$receiverId || !is_numeric($receiverId) || !in_array($receiverType, ['STUDENT', 'GROUP'])) {
    echo json_encode(new StudentResponse("failure", error: new ErrorResponse(400, "Missing or invalid parameters")));
    return;
}

$receiverId = (int) $receiverId;

$db = Database::getDatabaseInstace();
$mysqli = $db->getConnection();

try {
    $query = "CALL SP_GET_CONVERSATION(?, ?, ?, ?, ?)";
    $params = [$studentId, $receiverId, $receiverType, $lastMessageId, $limit];
    $result = $db->callStoredProcedure($query, "iisii", $params, $mysqli);

    $messages = [];
    while ($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }

    $hasMore = count($messages) === $limit;

    $mysqli->close();
    echo json_encode([
        "status" => "success",
        "data" => $messages,
        "hasMore" => $hasMore
    ]);
} catch (Throwable $err) {
    $mysqli->close();
    echo json_encode(new StudentResponse("failure", error: new ErrorResponse(500, $err->getMessage())));
}