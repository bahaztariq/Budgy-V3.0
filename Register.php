<?php
require 'db_connect.php';
require './classes/User.php';
session_start();




if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $user = new User($connect);
    $result = $user->Register($username,$email,$password);
    $status = $result['status'];
    $message = $result['message'];
    if($status){
        echo $message;
        header('location:Dashboard.php');
    }else{
        echo $message;  
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budgy - Login To Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@flaticon/flaticon-uicons@3.3.1/css/all/all.min.css">
    <link rel="icon" href="imgs/icon.png">

</head>
<body class="bg-gray-100">
    <main class="w-full h-screen flex items-center">
        <div class="w-full h-screen flex flex-col justify-center items-center gap-4 px-4 ">
            <div class="w-full md:w-3/5 h-1/8 flex justify-start items-center" >
                <a href="index.php" class="flex justify-center items-center gap-2 text-gray-500"> 
                    <i class="fi fi-ts-angle-left flex justify-center items-center" ></i>
                    <span>Back To Home </span>
                </a>
            </div>
            <form action="" method="POST" class="w-full md:w-3/5 h-7/8 rounded-xl p-2 flex flex-col gap-6 ">
                <h1 class=" text-black font-bold text-5xl" >Sign Up</h1>
                <div class="flex gap-2">
                    <div class=" w-full flex flex-col gap-2">
                      <label for="">FullName :</label>
                      <input type="text" name="Fullname" placeholder="Enter Your userName" class="w-full p-2 bg-gray-200 rounded-md">
                    </div>
                    <div class="w-full flex flex-col gap-2">
                      <label for="">UserName :</label>
                      <input type="text" name="username" placeholder="Enter Your  email" class="w-full p-2 bg-gray-200 rounded-md">
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="">Email :</label>
                    <input type="email" name="email" placeholder="Enter Your userName Or email" class="w-full p-2 bg-gray-200 rounded-md">
                </div>
                <div class="flex flex-col gap-2">
                    <label for="">Password :</label>
                    <input type="Password" name="password" placeholder="Enter Your userName Or email" class="w-full p-2 bg-gray-200 rounded-md">
                </div>
                <div class="flex flex-col gap-2">
                <input type="submit" name='submit' value="Register Now" class="w-full p-2 bg-[#70E000] rounded-md">
                <p>Already Have Account?<a href="login.php" class="text-[#70E000]"> Sign in</a></p>
                </div>
            </form>
        </div>
        
        <img src="imgs/heroBanner.png" alt="" class="hero-banner w-1/2 h-screen hidden lg:block ">
    </main>
    
</body>
</html>