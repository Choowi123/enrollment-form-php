<?php
session_start();
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "db_forms";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    $date = $_POST["date"];
    $na = $_POST["na"];
    $ca = $_POST["ca"];
    $ln = $_POST["ln"];
    $fn = $_POST["fn"];
    $mn = $_POST["mn"];
    $bd = $_POST["bd"];
    $age = $_POST["age"];
    $gen = $_POST["gen"];
    $cs = $_POST["cs"];
    $pb = $_POST["pb"];
    $ny = $_POST["ny"];
    $rn = $_POST["rn"];
    $mobilenum = $_POST["mobilenum"];
    $email = $_POST["email"];
    $resadd = $_POST["resadd"];
    $schadd = $_POST["schadd"];
    $awards = $_POST["awards"];
    $sig = $_POST["sig"];
    $fathername = $_POST["fathername"];
    $fatheroccu = $_POST["fatheroccu"];
    $mothername = $_POST["mothername"];
    $motheroccu = $_POST["motheroccu"];
    $ng = $_POST["ng"];
    $contactnum = $_POST["contactnum"];
    $salary = $_POST["salary"];
 
        $sql = "INSERT INTO tbl_student_information VALUES ('', '$ln','$fn', '$mn', '$bd', '$age', '$gen', '$cs', '$pb', '$ny', '$rn', '$mobilenum', '$email', '$resadd', '$schadd', '$awards', '$sig')";
        if ($conn->query($sql) === TRUE) {
            echo "";
        } else {
            echo "error" .$sql . "<br>" . $conn->error;
        }
        $sql = "INSERT INTO tbl_guardian VALUES('', '$fathername','$fatheroccu','$mothername','$motheroccu','$ng','$contactnum','$salary')";
        if ($conn->query($sql) === TRUE) {
            echo "Recorded";
        } else {
            echo "error" .$sql . "<br>" . $conn->error;
        }
        $sql = "INSERT INTO tbl_admission VALUES ('', '$date','$na', '$ca')";
        if ($conn->query($sql) === TRUE) {
            echo "";
        } else {
            echo "error" .$sql . "<br>" . $conn->error;
        }
        
        $conn->close();
?>
