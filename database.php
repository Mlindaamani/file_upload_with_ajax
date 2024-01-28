<!-- DATABASE CONNECTION -->

<?php
function connection()
{
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_name = 'ajax_upload_db';
  return new mysqli($db_host, $db_user, $db_password, $db_name);
}

function uploadFile(string $file_path)
{
  return connection()->query("INSERT INTO  ajax_upload(img_url) VALUE('$file_path')");
}