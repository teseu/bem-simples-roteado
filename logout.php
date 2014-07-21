<?php
 session_start();
 unset($_SESSION['logado']);
 unset($_SESSION['login']);
 unset($_SESSION['usuario']);
 header("location: inicio")
 ?>