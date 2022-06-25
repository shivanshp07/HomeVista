<?php
    session_start();

    //inatializing variables
    $username = "";
    $email = "";

    $errors = array();

    //connect to database
    $db = mysqli_connect('localhost', 'root', '', 'meta_estate') or die("Could not connect to database !!!");

    //sign-up users

    if(isset($_POST['sign-up'])) 
    {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $cpassword = mysqli_real_escape_string($db, $_POST['cpassword']);
        
        //form validation: ensure that the form is correctly filled 
    
        if(empty($username)) {array_push($errors, "Name is required");}
        if(empty($email)) {array_push($errors, "Email is required");}
        if(empty($phone)) {array_push($errors, "Phone is required");}
        if(empty($password)) {array_push($errors, "Password is required");}
    
        if($password != $cpassword){array_push($errors, "Password not matched");}
    
        //check db for existing user for same username
    
        $user_check_query = "SELECT * FROM user_info WHERE username = '$username' or email = '$email' LIMIT 1";
    
        $results = mysqli_query($db, $user_check_query);
        $user_info = mysqli_fetch_assoc($results);
    
        if($user_info) 
        {
            if($user_info['username'] === $username){array_push($errors, "Username already exists");}
            if($user_info['email'] === $email){array_push($errors, "Email ID already exists");}
        }
    
        //Register user if no error
    
        if(count($errors) == 0)
        {
            $password = md5($password); //this will encrypt the password
            print $password;
            $query = "INSERT INTO user_info (username, email, phone, password)
                VALUES('$username', '$email', '$phone', '$password')";
    
            mysqli_query($db, $query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are logged in";
    
            header('Location: welcome.php');
        }
    }

    //Log In User
    if(isset($_POST['login']))
    {
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(empty($email))
        {
            array_push($errors, "Username is required");
        }
        if(empty($password))
        {
            array_push($errors, "Password is required");
        }
        if(count($errors) == 0)
        {
            $password =md5($password);

            $query = "SELECT * FROM user_info WHERE email = '$email' AND password ='$password' ";
            $results = mysqli_query($db, $query);

            if(mysqli_num_rows($results))
            {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "Logged in successfully";
                header('location: welcome.php');
            }
            else
            {
                array_push($errors, "Wrong username or password. Please try again.");
            }
        }
    }


?>