<?php

function credentials (){
$server = "localhost";
$user = "root";
$passw = "";
$dataBase = "sessions";

$link = mysqli_connect($server,$user,$passw,$dataBase);
return $link;
}

function saveUser ($link, $userName, $password, $role){
    $uName = $_POST["$userName"];
    $password = $_POST["$password"];
    $rolee = $_POST["$role"];
    $iD = rand(1,99);

    $insertData = "INSERT INTO users VALUES('$uName','$password','$rolee','$iD')";
    return $executeInsert = mysqli_query($link, $insertData );

}

function authenticate($link, $username, $passw){
    $userNamee = $_POST["$username"];
    $passwo = $_POST["$passw"];
    $query = "SELECT * FROM users WHERE `user` = '$userNamee' AND `password` = '$passwo'";
    $excutingQuery = mysqli_query($link,$query);
    $array = mysqli_fetch_array($excutingQuery);
  
    if(empty($array)){
        return false;
    } else {
        return $array;
    }



  }