<?php
require_once __DIR__ . "/database.php";
require_once __DIR__ . "/utils/functions.php";

if (is_request_methos_post() && is_files_array_empty('file')) {
  $file = $_FILES["file"];

  $file_name = $file["name"];

  $file_temp_name = $file["tmp_name"];

  $destination_dir = "uploads/";
  
  $destination_file_path = $destination_dir . basename($file["name"]);

  if (uploadFile($file_name)) {
    move_uploaded_file($file_temp_name, $destination_file_path);
    echo "File uploaded successfully on the server!";
  } else {
    echo "Failed to upload the file on the server!";
  }
}