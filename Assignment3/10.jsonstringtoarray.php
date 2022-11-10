<?php
  
  // Create an array that contains another
  // array with key value pair
  $arr = array (
  
      // Every array will be converted
      // to an object
      array(
          "name" => "Pankaj Singh",
          "age" => "20"
      ),
      array(
          "name" => "Arun Yadav",
          "age" => "21"
      ),
      array(
          "name" => "Apeksha Jaiswal",
          "age" => "20"
      )
  );
  
  // Function to convert array into JSON
  echo json_encode($arr);
?>