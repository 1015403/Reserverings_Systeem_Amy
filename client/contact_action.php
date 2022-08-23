<?php

// define variables and set to empty values
$fNameErr = $lNameErr = $opleidingErr = $subjectErr = "";
$fName = $lName = $opleiding = $subject = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fName"])) {
        $fNameErr = "First name is required";
    } else {
        $fName = test_input($_POST["fName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $fName)) {
            $fNameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["lName"])) {
        $lNameErr = "Last name is required";
    } else {
        $lName = test_input($_POST["lName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lName)) {
            $lNameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["opleiding"])) {
        $opleidingErr = "Opleiding is required";
    } else {
        $opleiding = test_input($_POST["opleiding"]);
    }

    if (empty($_POST["subject"])) {
        $subject = "";
    } else {
        $subject = test_input($_POST["subject"]);
    }


}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

echo "<h2>Your Input:</h2>";
echo $fName;
echo "<br>";
echo $lName;
echo "<br>";
echo $opleiding;
echo "<br>";
echo $subject;
