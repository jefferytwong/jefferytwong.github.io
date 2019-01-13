<?php
echo '<script>console.log('.$name_form')</script>';
//Connecting to sql db.
$connect = mysqli_connect("35.236.23.230","root","","businesses");
echo '<script>console.log('.$phone_form')</script>';
//Sending form data to sql db.
mysqli_query($connect,"INSERT INTO data (name, phone, email, EId, cal, menu)
VALUES ('$_POST[name_form]', '$_POST[phone_form]', '$_POST[email_form]', '$_POST[EID_form]', NULL, '$_POST[menu_form]')";
?>