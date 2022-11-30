<?php
    session_start();
    require_once '../models/loginmodel.php';
    $uid = $_POST["uid"];
    $password = $_POST["password"];
    
    if(empty($uid) || empty($password)){
        if(empty($uid)){
            $_SESSION["emtuid"] ="*Must fill up user id";
        }
        if(empty($password)){
            $_SESSION["emtpass"] ="*Must fill up password";
        }
        header("location: ../views/login.php");
    }
    else{
        $user=['uid'=>$uid, 'password'=>$password];
        $status=login($user);
        if(isset($_SESSION['user'])){
            $role=$_SESSION['user']['role'];
            $name=searchbyID($user);
            $_SESSION['user']['name']=$name;
            setcookie('logstatus', 'true', time()+3600, '/');
            if($role=="admin"){
                header('location: ../views/admindashboard.php');
            }
            if($role=="employee"){
                header('location: ../views/employeedashboard.php');
            }
            if($role=="user"){
                header('location: ../views/userdashboard.php');
            }
            if($role=="general"){
                header('location: ../views/home.php');
            }
        }
        else{
            $_SESSION['logerr']="Invalid User or Password";
            header('location: ../views/login.php');
        }
    }
?>