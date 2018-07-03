<?php
class OrganigramAPI extends SensotecAPI {

    function json() { 
	
			$school_arr['items'][0] = array("name" => "School 1", "online" => "", "sessions" => "30", "time_spent" => "1d 7h 6min", "level" => "");
			$school_arr['items'][0]['instructor'][0] = array("name" => "Instructor 1", "image" => "http://172.22.0.79/syntra/api/images/star2.png", "online" => "", "sessions" => "20", "time_spent" => "1d 0h 55min", "level" => "");
			$school_arr['items'][0]['instructor'][0]['students'][0] = array("name" => "Student 1", "image" => "http://172.22.0.79/syntra/api/images/star.jpg", "online" => "12/06/2018", "sessions" => "3", "time_spent" => "8h 20m", "level" => "1.1a");
			$school_arr['items'][0]['instructor'][0]['students'][1] = array("name" => "Student 2", "image" => "http://172.22.0.79/syntra/api/images/star3.png", "online" => "", "sessions" => "5", "time_spent" => "14h 6m", "level" => "1.0a");
			$school_arr['items'][0]['instructor'][0]['students'][2] = array("name" => "Student 3", "image" => "http://172.22.0.79/syntra/api/images/star4.jpg", "online" => "1/06/2018", "sessions" => "4", "time_spent" => "2h 24m", "level" => "2.1a");
			$school_arr['items'][0]['instructor'][0]['students'][3] = array("name" => "Student 4", "image" => "http://172.22.0.79/syntra/api/images/star5.jpg", "online" => "", "sessions" => "6", "time_spent" => "5 min", "level" => "2.2a");
			
			$school_arr['items'][0]['instructor'][1] = array("name" => "Instructor 2", "image" => "http://172.22.0.79/syntra/api/images/star2.png", "online" => "", "sessions" => "10", "time_spent" => "6h 21min", "level" => "");
			$school_arr['items'][0]['instructor'][1]['students'][0] = array("name" => "Student 1", "image" => "http://172.22.0.79/syntra/api/images/star.jpg", "online" => "12/06/2018", "sessions" => "7", "time_spent" => "3h 20m", "level" => "1.2a");
			$school_arr['items'][0]['instructor'][1]['students'][1] = array("name" => "Student 2", "image" => "http://172.22.0.79/syntra/api/images/star5.jpg", "online" => "", "sessions" => "1", "time_spent" => "6m", "level" => "1.0a");
			$school_arr['items'][0]['instructor'][1]['students'][2] = array("name" => "Student 3", "image" => "http://172.22.0.79/syntra/api/images/star4.jpg", "online" => "1/06/2018", "sessions" => "2", "time_spent" => "1h 0m", "level" => "1.1a");
			$school_arr['items'][0]['instructor'][1]['students'][3] = array("name" => "Student 4", "image" => "http://172.22.0.79/syntra/api/images/star3.png", "online" => "", "sessions" => "0", "time_spent" => "1h 55min", "level" => "2.2a"); 
			
			$school_arr['items'][1] = array("name" => "School 2", "online" => "", "sessions" => "30", "time_spent" => "1d 7h 6min", "level" => "");
			$school_arr['items'][1]['instructor'][0] = array("name" => "Instructor 2.1", "image" => "http://172.22.0.79/syntra/api/images/star2.png", "online" => "", "sessions" => "20", "time_spent" => "1d 0h 55min", "level" => "");
			$school_arr['items'][1]['instructor'][0]['students'][0] = array("name" => "Student 2.1.1", "image" => "http://172.22.0.79/syntra/api/images/star.jpg", "online" => "12/06/2018", "sessions" => "3", "time_spent" => "8h 20m", "level" => "1.1a");
			$school_arr['items'][1]['instructor'][0]['students'][1] = array("name" => "Student 2.1.2", "image" => "http://172.22.0.79/syntra/api/images/star3.png", "online" => "", "sessions" => "5", "time_spent" => "14h 6m", "level" => "1.0a");
			$school_arr['items'][1]['instructor'][0]['students'][2] = array("name" => "Student 2.1.3", "image" => "http://172.22.0.79/syntra/api/images/star4.jpg", "online" => "1/06/2018", "sessions" => "4", "time_spent" => "2h 24m", "level" => "2.1a");
			$school_arr['items'][1]['instructor'][0]['students'][3] = array("name" => "Student 2.1.4", "image" => "http://172.22.0.79/syntra/api/images/star5.jpg", "online" => "", "sessions" => "6", "time_spent" => "5 min", "level" => "2.2a");
			
			$school_arr['items'][1]['instructor'][1] = array("name" => "Instructor 2.2", "image" => "http://172.22.0.79/syntra/api/images/star2.png", "online" => "", "sessions" => "10", "time_spent" => "6h 21min", "level" => "");
			$school_arr['items'][1]['instructor'][1]['students'][0] = array("name" => "Student 2.2.1", "image" => "http://172.22.0.79/syntra/api/images/star.jpg", "online" => "12/06/2018", "sessions" => "7", "time_spent" => "3h 20m", "level" => "1.2a");
			$school_arr['items'][1]['instructor'][1]['students'][1] = array("name" => "Student 2.2.2", "image" => "http://172.22.0.79/syntra/api/images/star5.jpg", "online" => "", "sessions" => "1", "time_spent" => "6m", "level" => "1.0a");
			$school_arr['items'][1]['instructor'][1]['students'][2] = array("name" => "Student 2.2.3", "image" => "http://172.22.0.79/syntra/api/images/star4.jpg", "online" => "1/06/2018", "sessions" => "2", "time_spent" => "1h 0m", "level" => "1.1a");
			$school_arr['items'][1]['instructor'][1]['students'][3] = array("name" => "Student 2.2.4", "image" => "http://172.22.0.79/syntra/api/images/star3.png", "online" => "", "sessions" => "0", "time_spent" => "1h 55min", "level" => "2.2a"); 
			
			sendResponse(200, json_encode($school_arr));
			return true;
			
	}

	  
}
 

$action = isset($_POST["action"]) ? $_POST["action"] : $_GET["action"]; 
$organigramAPI = new OrganigramAPI;


switch ($action) {
	 case 'json':
        $organigramAPI->json();
        break; 
}
?>