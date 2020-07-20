<?php

$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = $_POST['senha'];

$connect = mysql_connect('localhost','root','usbw');
$db = mysql_select_db('facilita');
  if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM `conta` WHERE email =
    '$login' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("login",$login);
        echo"<script language='javascript' type='text/javascript'>
        alert('Deu certo!');window.location
        .href='login.html';</script>";
      }
  }
?>
