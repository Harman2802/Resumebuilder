<?php
require './assest/class/database.class.php';
require './assest/class/function.class.php';
?>
<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=@$title?></title>





    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        

    <link rel="icon" href="./assest/images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


<style>
body {
  background: linear-gradient(135deg, #dbeafe, #f0f9ff);
  background-size: cover;
  background-repeat: no-repeat;
  font-family: 'Segoe UI', sans-serif;
}

.form-signin {
  max-width: 450px;
  padding: 2rem 2.5rem;
  background-color: #ffffff;
  border-radius: 12px;
  box-shadow: 0 12px 35px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
}

.form-signin:hover {
  box-shadow: 0 16px 45px rgba(0, 0, 0, 0.12);
}

.form-signin h1 {
  font-size: 24px;
  font-weight: 700;
  color: #0d6efd;
}

.form-signin p {
  font-size: 14px;
  color: #555;
}

.form-floating {
  margin-bottom: 1.2rem;
}

.form-control {
  padding-left: 2.5rem;
  border-radius: 8px;
  border: 1px solid #ced4da;
  background-color: #f9f9f9;
  transition: all 0.3s ease-in-out;
}

.form-control:focus {
  border-color: #0d6efd;
  box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.2);
  background-color: #fff;
}

.form-floating label {
  padding-left: 2.5rem;
  color: #666;
}

.form-floating i {
  position: absolute;
  left: 15px;
  top: 50%;
  transform: translateY(-50%);
  color: #6c757d;
}

button[type="submit"] {
  background-color: #0d6efd;
  font-weight: 600;
  border-radius: 8px;
  font-size: 16px;
  transition: background 0.3s ease;
}

button[type="submit"]:hover {
  background-color: #0b5ed7;
}

.d-flex.justify-content-between a {
  font-size: 13px;
  color: #0d6efd;
  transition: color 0.3s ease;
}

.d-flex.justify-content-between a:hover {
  color: #084298;
  text-decoration: underline;
}

img.mb-4 {
  margin-right: 10px;
}



</style>


</head>

<body class="">