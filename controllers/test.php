<?php
    $name = $_POST["username"];
    $password = $_POST["password"];
    $name="Sah";
    $password="00090909@";
    $valname1=0;
    $valusername1=0;
    $valusername2=0;
    $valpassword=0;
    //name validation: can contain a-z, A-Z,'space'
    for($i=0;$i<strlen($name);$i++){
        if(($name[$i]>='a' && $name[$i]<='z')||($name[$i]>='A' && $name[$i]<='Z')|| $name[$i]<=' '){
            continue;
        }
        else{
            $valname1=1;
            break;
        }
    }
    //username validation: can contain a-z, A-Z, 0-9, . , - , _
    //check username in database for duplicasy
    for($i=0;$i<strlen($username);$i++){
        if(($username[$i]>='a' && $username[$i]<='z')||($username[$i]>='A' && $username[$i]<='Z')|| ctype_digit($username[$i]) || ($username[$i]<='.' ||$username[$i]<='-'||$username[$i]<='_')){
            continue;
        }
        else{
            $valusername1=1;
            break;
        }
    }
    $it1=substr_count($username,'.');
    $it2=substr_count($username,'_');
    $it3=substr_count($username,'-');
    if($it1>='1' || $it2>='1' || $it3>='1'){
        $valusername2=1;
    }
    //password validation: must contain special keywords @,#,$,%
    
    $it5=substr_count($password,'@');
    $it6=substr_count($password,'#');
    $it7=substr_count($password,'$');
    $it8=substr_count($password,'%');
    $z=0;
    for($i=0;i<strlen($email);$i++){  
        if(($email[$i]>='a' && $email[$i]<='z')||($email[$i]>='A' && $email[$i]<='Z')|| ctype_digit($email[$i]) || ($email[$i]<='.')){
            $z++;
            continue;
        }
        else if($email=='@'){
            if($z>1) {
                $z=0;
                continue;
            }
            else{
                echo "-> Email err";
                break;
            }
        }
    }

    if($it5>='1' || $it6>='1' || $it7>='1' || $it8>='1'){
        $valpassword=1;
    }

    if(strlen($name)<2 && $valname1==1 && $valname2==0){
        echo "->Name error";
    }
    else if(strlen($password)<8 && $valpassword==0){
        echo "-> pass err";
    }
    else{
        echo "success";
    }
?>