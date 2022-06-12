<?php

if (!function_exists('delete_file')) {
  function delete_file($path, $filename) {
    $path = rtrim($path, '/\\');
    $fullpath = $path.DIRECTORY_SEPARATOR.$filename;

    if (!is_file($fullpath)) {
      echo "File Not Found";
      return FALSE;
    }

    if (!unlink($fullpath)) {
      return FALSE;
    }

    return TRUE;
  }
}