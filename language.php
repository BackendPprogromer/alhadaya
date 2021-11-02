<?php
include_once("db.php");

// categoriylarni olib kelish


// menu
$zapros = "SELECT * FROM `menu`";
$req = mysqli_query($connect, $zapros);




// productlarni olib kelish
$zapros_product = "SELECT * FROM `products`";
$res_product = mysqli_query($connect, $zapros_product);

$title_uz = $row['title_uz'];
$description_uz = $row['description_uz'];


// team
$zapros_team = "SELECT * FROM `team`";
$res_team = mysqli_query($connect, $zapros_team);



$language = [
    "uz"=>[
        
    ],
    "ru"=>[
        
    ],    
    "en"=>[
        
    ],

];

$language_name = [
    [
        "name_link"=>"uz",
        "name"=>"O'zbek tili",
    ],
    [
        "name_link"=>"ru",
        "name"=>"Русский",
    ],    
    [
        "name_link"=>"en",
        "name"=>"English",
    ],
]






?>