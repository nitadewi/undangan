<?php
require_once "koneksi.php";
   if(function_exists($_GET['function'])) {
         $_GET['function']();
      }   
   function getData()
   {
      global $connect;      
      $query = $connect->query("SELECT * FROM komentar");            
      while($row=mysqli_fetch_object($query))
      {
         $data[] =$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Success',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
   }   
   
   
   function insert()
      {
         global $connect;   
         $check = array('nama' => '', 'komentar' => '');
         $check_match = count(array_intersect_key($_POST, $check));
         if($check_match == count($check)){
         
               $result = mysqli_query($connect, "INSERT INTO komentar SET
               nama = '$_POST[nama]',
               komentar = '$_POST[komentar]'");
               
               if($result)
               {
                  $response=array(
                     'status' => 1,
                     'message' =>'Insert Success'
                  );
               }
               else
               {
                  $response=array(
                     'status' => 0,
                     'message' =>'Insert Failed.'
                  );
               }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'salah'
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }

 ?>