<?php
  $mime_type = mime_content_type("../../cover_images/{$_GET['file']}");
  header('Content-Type: '.$mime_type);

  readfile("../../cover_images/{$_GET['file']}");
?>
