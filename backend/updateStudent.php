<?php
     require_once('connect.php');

     $input = file_get_contents('file://input');
     $data = json_decode($input,true);
     $message = array();

     $student_no = $data['student_no'];
     $student_name = $data['student_name'];
     $student_add = $data['student_add'];
     $id = $_GET['id'];

     $query = mysqli_query($con, "UPDATE students SET student_no ='$student_no',
     student_name ='$studentname', student_add ='$student_add' WHERE id ='$id' LIMIT 1");

     if($query){
         http_response_code(201);
         $message['status'] = "Success";
     }else{
         http_response_code(422);
         $message['status'] = "Error";
     }

     echo json_encode($message);
     echo mysqli_error($con);
?>
    
     }