<?php
function is_request_methos_post()
{
  return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function is_files_array_empty(string $file)
{
  return isset($_FILES[$file]);
}

