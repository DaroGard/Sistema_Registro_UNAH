<?php 

  include_once __DIR__ . '/../../../../utils/classes/Request.php';
  include_once __DIR__ . '/../../../../services/coordinator/CoordinatorService.php';

  session_start();

  header('Content-Type: application/json');

  if (!Request::haveRol('COORDINATOR')) {
    return;
  }

  Request::isWrongRequestMethod('GET');

  $campus = $_GET['campus'] ?? 0;
  $major = $_GET['major'] ?? 0;
  $coordinatorServiceResponse = CoordinatorService::getStudentsByFilter($campus, $major);
  if ($coordinatorServiceResponse->status == 'failure') {
    http_response_code($coordinatorServiceResponse->error->errorCode);
    echo json_encode($coordinatorServiceResponse);
    return;
  }

  http_response_code(200);
  echo json_encode($coordinatorServiceResponse);





