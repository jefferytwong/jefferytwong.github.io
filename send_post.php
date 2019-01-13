<?php
//Connecting to sql db.
$connect = mysqli_connect("35.236.23.230","root","","businesses");
//Sending form data to sql db.
mysqli_query($connect,"INSERT INTO data (name, phone, email, EId, cal, menu)
VALUES ('$_POST[name]', '$_POST[phone]', '$_POST[email]', '$_POST[EID]', 'None', '$_POST[menu]')";
?>