<?php

function credentials (){
$server = "localhost";
$user = "root";
$passw = "";
$dataBase = "crudcategories";

$link = mysqli_connect($server,$user,$passw,$dataBase);
return $link;
}

function saveCategories ($link, $name, $description){
    $cName = $_POST["$name"];
    $cDescription = $_POST["$description"];
    $iD = rand(1,99);

    $insertData = "INSERT INTO information VALUES('$cName','$cDescription','$iD')";
    return $executeInsert = mysqli_query($link, $insertData );

}
function showCategories ($link){
    $query = "SELECT * FROM information";
    $excutingQuery = mysqli_query($link,$query);
    $array = mysqli_fetch_array($excutingQuery);
    for($i=0; $i<=$array; $i++){

        echo "<br><br> Category Name: $array[0] <br> Description: $array[1] <br> Id: $array[2] <br> <br> <br>";
    $array = mysqli_fetch_array($excutingQuery);
}}
function deleteCategories($link,$iD){
$idDelete = $_POST["$iD"];
$deleteInfo="DELETE FROM information WHERE Id=$idDelete";
mysqli_query($link,$deleteInfo);
}