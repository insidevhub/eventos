<?php
  session_start();
  unset(
    $_SESSION['usuario'],
    $_SESSION['senha']
  );
//  $_SESSION['logindeslogado']="<center><font color='red'> Você saiu</center></font> ";

  header("location: ../login.html");

 ?>
