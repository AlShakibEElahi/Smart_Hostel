<?php
    require_once 'db.php';
        
    function checkexistance($roomno){
        $con = getconnection();
        $sql = "SELECT COUNT(roomno) FROM room WHERE `roomno`='$roomno'";
        $result = mysqli_query($con, $sql);
        $existance = mysqli_fetch_assoc($result);
        return $existance;
    }

    function addbranch($branch){
        $con = getconnection();
        $sql2 = "INSERT INTO `branch`(`id`, `branchname`, `address`, `type`) VALUES ('{$branch['id']}','{$branch['name']}','{$branch['address']}','{$branch['type']}')";
        $result2 = mysqli_query($con, $sql2);
        
        if($result2){
            return $_SESSION['insertbranch']="Branch Added Successfully";
        }
    }
    function editbranch($user){
        $con = getconnection();
        $sql = "UPDATE `branch` SET `id`='[value-1]',`name`='[value-2]',`email`='[value-3]',`phonenumber`='[value-4]',`username`='[value-5]',`password`='[value-6]',`role`='[value-7]' WHERE username='{$user['username']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return $_SESSION['user']=$user;
        }
    }
    function deletebranch($user){
        $con = getconnection();
        $sql = "DELETE FROM `branch` WHERE  `id`={$user['id']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return $_SESSION['user']=$user;
        }
    }
    function showallbranch(){
        $con = getconnection();
        $sql = "select * from branch";
        $result = mysqli_query($con, $sql);
        return $result;
    }
    function showallbranchbyname($name){
        $con = getconnection();
        $sql = "SELECT * FROM branch WHERE `branchname` LIKE '".$name."' ORDER BY id ASC;";
        $result = mysqli_query($con, $sql);
        return $result;
    }
?>