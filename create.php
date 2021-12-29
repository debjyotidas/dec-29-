<?php
    include "config.php";

    if(isset($_POST['submit'])){
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
    }

    $sql = "INSERT INTO 'users2' ('firstname','lastname','email','password','gender') VALUES('$first_name','$lastname','$email','$password','$gender')";
    
    $result = $con->query($sql);

    if($result == TRUE){
        echo "new record created successfully";
    }
    else{
        echo "error" . $sql . "<br>".$con->error;
    }
    $con->close();

    ?>
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/20c5629a29.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .container{
            display: flex;
            flex-direction:column;
            align-items:center;
        }
        /* form{
            background-color:#9fe695;
        } */
    </style>
  </head>
  <body>
    <?php require 'nav.php'?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sucess!</strong> Your account is created.You can login.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <h1 class="text-center">Signup To Our Website</h1>
    <div class="container my-4">
    
        <div class="row">
            <div class="col-lg-11 my-3">
            <h1 class="text-left">SignUp</h1>
                <form action="" method="post">
                    <div class="form-group ">
                        <label for="username">Firstname</label>
                        <input type="name" class="form-control" name ="firstname" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="form-group ">
                        <label for="username">Lastname</label>
                        <input type="name" class="form-control" name ="lastname" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="form-group ">
                        <label for="username">email</label>
                        <input type="email" class="form-control" name ="email" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
                    </div>
                    <div class="form-group ">
                        Gender:<br><br>
                        <input type="radio"  name ="gender" value="Male"aria-describedby="emailHelp">Male
                        <input type="radio"  name ="gender" value="Female"aria-describedby="emailHelp">Female
                        
                    </div>
                    
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary col-md-6">Login</button>
                </form>
            </div>
            
            
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>