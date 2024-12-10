<?php

require './php_functions/function.php';

if(isset($_POST['loginBtn']))
{
    $emailInput = validate($_POST['email']);
    $passwordInput = validate($_POST['password']);

    $email = filter_var($emailInput, FILTER_SANITIZE_EMAIL);
    $password = filter_var($passwordInput, FILTER_SANITIZE_STRING);

    if($email != '' && $password != ''){
        $query = "SELECT * FROM user_account WHERE email='$email' AND password='$password' LIMIT 1";
        $result = mysqli_query($conn, $query);
        if($result){
            if(mysqli_num_rows($result) == 1)
            {
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                if($row['role'] == 'admin')
                {
                    $_SESSION['auth'] = true;
                    $_SESSION['loggedInUserRole'] = $row['role'];
                    $_SESSION['loggedInUser'] = [
                        'name' => $row['name'],
                        'email' => $row['email']
                    ];
                    
                    redirect('home_page.php', 'Logged In Successfully');
                }
                else{
                    redirect('index.php', 'Ok');
                }
            }else{
                redirect('index.php','Invalid Email or Password');
            }
        }
        else{
            redirect('index.php','Something Went Wrong!');
        }
    }
    else{
        redirect('index.php','All fields are mandatory');
    }
}


