<?php

if (isset($_POST['update'])) {
	$username = $_POST['firstaname'];
    $userid = $_POST['id'];
    $lastname = $_POST['lastaname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];

    $sql =" UPDATE `users2` SET id=$id , firstname='$firstname' ,email='$email', password='$password',$gender = '$gender';  WHERE id=$userid";

    $results = mysqli_query($con,$sql);
    if(result == TRUE){
        echo"Record updated successfully";
        header ('location: welcome.php');
    }
    
    else{
			die(mysqli_error($conn));
		}
    
}