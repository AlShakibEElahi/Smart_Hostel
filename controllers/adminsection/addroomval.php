<?php
    require_once '../../models/branchmodel.php';
    $roomno = $_POST["roomno"];
    $branchid= $_POST["branch"];
    $roomtype= $_POST["branchtype"];
    $totaluser=0;
    $room=['roomno'=>$roomno,'branchid'=>$branchid,'branchtype'=>$branchtype,'totaluser'=>$totaluser];
    
?>