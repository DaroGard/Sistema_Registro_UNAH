<?php

  include_once __DIR__ . '/../../../../utils/classes/Request.php';
  include_once __DIR__ . '/../../../../services/teachers/types/DataResponse.php';
  include_once __DIR__ . '/../../../../services/teachers/services/Teachers.php';


  session_start();

  Request::isWrongRequestMethod('GET');
  
  if (empty($_SESSION)) {
    echo json_encode(new DataResponse("failure", error: new ErrorResponse(401, "Unathorized")));
    return;
  }

  $teacherNumber = $_GET['teacher-number'] ?? $_SESSION["TEACHER_NUMBER"];
  if (!$teacherNumber){
    echo json_encode(new DataResponse("failure", error: new ErrorResponse(401, "Unathorized")));
    return;
  }
  $teacherResponse = TeacherService::getCurrentSections((int) $teacherNumber);
  echo json_encode($teacherResponse);
