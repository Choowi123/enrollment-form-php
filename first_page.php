<!DOCTYPE html>
<!--
DEVELOPERS:
PONCE, MARC RAYVEN G.
SIMON, TRISHA MAE N.
VALENCIA, NIKKA JOY V.
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>First Page</title>
</head>
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
<body>
    <div class="container">
        <center><h4>REGISTRATION & ADMISSION SECTION</h4>
            <h3>NOTICE OF ADMISSION</h3></center>
            <form action="second_page.php" method="POST">
            <div class="date">
                <h4>Date: <input type="date"name="date"><br></h4>
            </div>
            <div class="na">
            <h4>Name of Applicant: <input type="text"name="na" required></h4>
            </div>
            <div class="ca">
            <h4>Course Applied or Course where you are Qualified to Enroll: <input type="text"name="ca" required></h4>
            </div>
            <p style="text-indent:50px;">
                Please be informed that you are considered as Qualified applicant for Admission this SY 2020-2021
                in the course you applied or to the course where you are qualified to enroll based from the
                evaluation and ranking of your Gen. Weighted Average in the SHS Grade 11 & 12.<br><br>
            </p>
            <p style="text-indent:50px;">
                If you are interested to enroll in this University and avail the <b>FREE TERTIARY EDUCATION</b>,
                you may fill out this Admission Form and the attached Student’s Health Declaration and Interview
                questionnaire. Submit it to TUP – Taguig Campus together with other requirements mentioned below.
                Incomplete requirements shall not be entertained. <br><br>
            
                <i><b>Note: Failure to submit this form and the requirements on the specified date could mean
                    forfeiture of your right to enroll in your chosen course or to the course where you are
                    considered to enroll. However, you may opt to choose another course if it is still open or
                    if there is/are still slots available.</b></i>
            </p><br>
            <div class="next">
            <input type="submit" name="next" value="Next">
            </div>
    </div>
</body>
</html>