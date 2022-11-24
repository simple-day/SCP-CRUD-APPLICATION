<?php

  //database credentials
  $user = "a30061864_scp_user";
  $pw = "Toiohomai1234";
  $db = "a30061864_scp_database";

  //connection
  $conn = new mysqli('localhost', $user, $pw, $db);

  //checking connection
  if($conn->connect_error)
  {
    die("Connection failed!" . $conn->connect_error);
  }
  else
  {
    echo "askdjfhaksdhf";
  }

?>