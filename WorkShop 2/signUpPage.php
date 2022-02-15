<?php
$server = "localhost";
$user = "root";
$passw = "";
$dataBase = "signuppage";

$link = mysqli_connect($server,$user,$passw,$dataBase);
if(!$link){
    echo"Error connected to data base";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <center>
    <h2>Sign Up Page </h2>
    </center>
</head>
<body> 
    <form method = "POST">
        <center>
        <label for="fName">First name:</label><br>
        <input type="text" name = "fName"><br>

        <label for="sName">Second name:</label><br>
        <input type="text" name = "sName"><br>

        <label for="lastName">Last name:</label><br>
        <input type="text" name = "lName"><br>

        <label for="iD">Id number:</label><br>
        <input type="text" name = "idNumber"><br><br>

        <input type = "submit" name = "inputData" value = "Input data">
        </center>
    </form>


</body>
</html>
<?php
    if (isset($_POST["inputData"])) {
        $fName = $_POST["fName"];
        $sName = $_POST["sName"];
        $lName = $_POST["lName"];
        $idNumber = $_POST["idNumber"];
        $iD = rand(1,99);

        $insertData = "INSERT INTO personaldata VALUES('$fName','$sName','$lName','$idNumber','$iD')";
        $executeInsert = mysqli_query($link, $insertData );

        if (!$executeInsert){
            echo "Error executing the insert";  
        }
    }
    
    $query = "SELECT * FROM personaldata";
    $excutingQuery = mysqli_query($link,$query);
    $array = mysqli_fetch_array($excutingQuery);
    for($i=0; $i<=$array; $i++){

        echo "$array[0] $array[1] $array[2] $array[3] <br> ";
        
    $array = mysqli_fetch_array($excutingQuery);
    
    }

?>


