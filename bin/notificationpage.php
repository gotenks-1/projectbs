<?php
  session_start();
  echo session_id();
  echo $_SESSION["userid"];
  echo $_SESSION["type"];
  echo $_SESSION["branch"];
?>
