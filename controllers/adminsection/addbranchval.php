<?php
    require_once '../../models/branchmodel.php';
    $name = $_POST["branchname"];
    $house= $_POST["houseno"];
    $roadno= $_POST["roadno"];
    $city = $_POST["city"];
    $area = $_POST["area"];
    $branchtype=$_POST["branchtype"];
    
    $address="House#$house, Road#$roadno, $area, $city";
    $id=searchforID();
    echo $id;
    $branch=['id'=>$id,'name'=>$name,'address'=>$address,'type'=>$branchtype];
    $status=addbranch($branch);

    if(isset($_SESSION['insertbranch'])){
        header('location: ../../views/admindashboards/addnewbranch.php');
    }
    else{
        $_SESSION['insertbrancherr']="Branch couldnot added";
        header('location: ../../views/admindashboards/addnewbranch.php');
    }
?>