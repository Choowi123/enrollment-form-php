<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
    .container {
        font-family: Arial;
        font-size: 18px;
    }
</style>
<header>
    <table class="center">
        <tr>
            <th><p>
                <h3><img src="TUP Logo.png">
                <b><center>Republic of the Philippines</center></b>
                <div class="zxc">
                <b><center>TECHNOLOGICAL UNIVERSITY OF THE PHILIPPINES</center></b>
                <b><center>TAGUIG</center></b>
                </div>
                <div class="qwe">
                <center>The Technological University of the Philippines shall be a premier state university with 
                    recognized excellence in engineering and technology education at par with the leading 
                    universities in the ASEAN region.</center></h3>
                </div>
            </p></th>
            <th><p>
                <div class="ad">
                <b>ADMISSION FORM</b>
                </div>
                <div class="fm">
                <center>FM-REG- REV 0 JUNE 2020</center>
                </div>
            </p></th>
        </tr>
    </table>
</header>
<?php
    $date = $_POST["date"];
    $na = $_POST["na"];
    $ca = $_POST["ca"];
    $pic = $_POST["pic"];
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
    $fathername = $_POST["fathername"];
    $fatheroccu = $_POST["fatheroccu"];
    $mothername = $_POST["mothername"];
    $motheroccu = $_POST["motheroccu"];
    $ng = $_POST["ng"];
    $contactnum = $_POST["contactnum"];
    $salary = $_POST["salary"];
    $sig = $_POST["sig"];

?>
<body>
<div class="container">
    <form action="database.php" method="POST">
            <center><h3>Student's Personal Information</h3></center><br>
            Date: <input type="text"name="date" value="<?php echo $date;?>" readonly><br><br>
            Name of Applicant: <input type="text"name="na" value="<?php echo $na;?>" readonly><br><br>
            Course Applied:<input type="text"name="ca" value="<?php echo $ca;?>" readonly><br><br>
            Picture:<input type="text"name="pic" value="<?php echo $pic;?>" readonly><br><br>
            Last Name:<input type="text"name="ln" value="<?php echo $ln;?>" readonly>
            First Name:<input type="text"name="fn" value="<?php echo $fn;?>" readonly>
            Middle Name:<input type="text"name="mn" value="<?php echo $mn;?>" readonly><br><br>
            Birthday:<input type="text"name="bd" value="<?php echo $bd;?>" readonly>
            Age:<input type="text"name="age" value="<?php echo $age;?>" readonly>
            Gender:<input type="text"name="gen" value="<?php echo $gen;?>" readonly>
            Civil Status:<input type="text"name="cs" value="<?php echo $cs;?>" readonly><br><br>
            Place of Birth:<input type="text"name="pb" value="<?php echo $pb;?>" readonly>
            Nationality:<input type="text"name="ny" value="<?php echo $ny;?>" readonly>
            Religion:<input type="text"name="rn" value="<?php echo $rn;?>" readonly><br><br>
            Mobile Number:<input type="text"name="mobilenum" value="<?php echo $mobilenum;?>" readonly>
            Email:<input type="text"name="email" value="<?php echo $email;?>" readonly><br><br>
            Residence Address:<input type="text"name="resadd" value="<?php echo $resadd;?>" readonly>
            School Last Attended/Address:<input type="text"name="schadd" value="<?php echo $schadd;?>" readonly>
            Honors/Awards Received:<input type="text"name="awards" value="<?php echo $awards;?>" readonly><br><br>
            Father's Name:<input type="text"name="fathername" value="<?php echo $fathername;?>" readonly>
            Father's Occupation:<input type="text"name="fatheroccu" value="<?php echo $fatheroccu;?>" readonly><br><br>
            Mother's Name:<input type="text"name="mothername" value="<?php echo $mothername;?>" readonly>
            Mother's Occupation:<input type="text"name="motheroccu" value="<?php echo $motheroccu;?>" readonly><br><br>
            Name of Guardian:<input type="text"name="ng" value="<?php echo $ng;?>" readonly>
            Contact Number:<input type="text"name="contactnum" value="<?php echo $contactnum;?>" readonly><br><br>
            Income Bracket of Parents/Guardian Per Year:
            <input type="text"name="salary" value="<?php echo $salary;?>" readonly><br><br>
            Student's Signature:
            <input type="text"name="sig" value="<?php echo $sig;?>" readonly><br><br>
            <input type="submit" name="submit"><br><br>

    </form>
</div>
</body>
</html>