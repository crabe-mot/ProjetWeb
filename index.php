<?php

if(!empty($_POST['username']) && !empty($_POST['password'])) {
	  $database = new DBConnect;
	  $sql = "select firstname, lastname from customers where email='".$_POST['username']."' and password='".$_POST['password']."';";
	  $_SESSION['email'] = $_POST['username'];
	  $sth = $database->getInstance()->prepare($sql);
	  $sth->execute();
	  $result = $sth->fetchColumn();

	  if(empty($result))
		  echo 'erreur mot de passe';

	  $_SESSION['firstname'] = $result;
	  $result = $sth->fetchColumn();
	  $_SESSION['lastname'] = $result;
  }

  if (isset($_GET['controller']) && isset($_GET['action'])){
   $controller= $_GET['controller'];
   $action=$_GET['action'];

  } else {
   $controller='products';
   $action='index';
  }

  //echo 'hello';
  require_once('views/lay.php');
