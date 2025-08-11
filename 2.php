<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $project=$_POST['project'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

         $conn=mysqli_connect("localhost","root","","lekisatradingltd");
        $ins="INSERT INTO `contact` (`id`, `Name`, `Email`, `Phone`, `Project`, `Subject`, `Message`) VALUES (NULL, '$name', '$email', '$phone', '$project', '$subject', '$message')";
        mysqli_query($conn,$ins);

        header("Location:contact.html");
    }


?>