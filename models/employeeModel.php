<?php
    require_once 'db.php';
        
    function searchforid(){
        $con = getconnection();
        $sql = "SELECT max(id) FROM `employee`";
        $result = mysqli_query($con, $sql);
        $users = mysqli_fetch_assoc($result);
        $user=$users['max(id)'];
        if($user != null){
            $lastint=(int)$user;
            $format=substr($user,0,(strlen($user)-1));
            $lastint=(int)substr($user,strrpos($user,'-')+1,(strlen($user)));
            $newid=$format.($lastint+1);
            return $newid;
        }
        else{
            return "E-2022-1";
        }
    }

    function addemployee($user){
        $con = getconnection();
        $sql2 = "INSERT INTO `employee`(`id`, `name`, `fathername`, `mothername`, `dob`, `gender`, `designation`, `salary`, `branch`) VALUES ('{$user['id']}','{$user['name']}','{$user['fname']}','{$user['mname']}','{$user['dob']}','{$user['gender']}','{$user['designation']}','{$user['salary']}','{$user['branch']}')";
        $result2 = mysqli_query($con, $sql2);
        if($result2){
            return $_SESSION['insertemployee']="Insert Employee Successfull";
        }
    }

    function editemployee($user){
        $con = getconnection();
        $sql = "UPDATE `login` SET `id`='[value-1]',`name`='[value-2]',`email`='[value-3]',`phonenumber`='[value-4]',`username`='[value-5]',`password`='[value-6]',`role`='[value-7]' WHERE username='{$user['username']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return $_SESSION['user']=$user;
        }
    }
    function deleteemployee($user){
        $con = getconnection();
        $sql = "DELETE FROM `login` WHERE  `id`={$user['id']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return $_SESSION['user']=$user;
        }
    }
    function searchemployee($user){
        $con = getconnection();
        $sql = "select * from login where username='{$user['username']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return $_SESSION['user']=$user;
        }
    }
    function showallemp(){
        $con = getconnection();
        $sql = "select * from employee";
        $result = mysqli_query($con, $sql);
        return $result;
    }
?>