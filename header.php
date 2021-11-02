<?php
session_start();
include_once("language.php");
include_once("db.php");

$select_lang = "uz";

if($_GET['lang']){
  $select_lang = $_GET['lang'];
  $_SESSION['user_lang'] = $_GET['lang'];
}
$language = $language[$select_lang];

if(!$_SESSION['user_lang']){
  $_SESSION['user_lang'] = $select_lang ;
}



$zapros = "SELECT * FROM `menu`";
$req = mysqli_query($connect, $zapros);

$script_name =  str_replace("/", "",$_SERVER['SCRIPT_NAME']);

?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php">
          <h2>Sixteen <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

<?php

while($res = mysqli_fetch_assoc($req)){
$under = "";
if($script_name == $res['link']){
  $under = "active";
}

  echo '<li class="nav-item '.$under.'">
                <a class="nav-link" href="'.$res['link'].'">'.$res['name_uz'].'</a></li>';
}
echo'<h1>til</h1>';
for($i=0; $i<count($language_name); $i++){
  $name_link = $language_name[$i]["name_link"];
  $name = $language_name[$i]["name"];

  echo '<a href="" ?lang="'.$name_link.'" class="tillar">'.$name.'</a> ';
}

?>
              

            </ul>
          </div>
          
        </div>
      </nav>
    </header>