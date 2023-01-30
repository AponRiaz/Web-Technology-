<?php 

    require_once('db.php');

function login( $username, $password){
    $conn = getConnection();
	$sql = "select * from user where ID='{$username}' and Password='{$password}'";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);

    if($count >0 ){
        return true;
    }else{
        return false;
    }
}

function signup($users){
    $conn = getConnection();
   //$sql = "INSERT INTO user  VALUES ('', '{$user['username']}', '{$user['id']}', '{$user['Pnumber']}', '{$user['email']}', '{$user['dob']}')";
	$sql = "insert into `user` (`User_Type`,`Name`, `ID`, `Password`, `Phone_Number`, `Email`, `DOB` ) values('','{$users['username']}','{$users['id']}','{$users['password']}','{$users['Pnumber']}','{$users['email']}','{$users['dob']}')";
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}
function Addseller($users){
    $conn = getConnection();

   //$sql = "INSERT INTO user  VALUES ('', '{$user['username']}', '{$user['id']}', '{$user['Pnumber']}', '{$user['email']}', '{$user['dob']}')";
    $sql = "insert into `user` (`User_Type`,`Name`, `ID`,`Password` , `Phone_Number`, `Email`, `DOB` ) values('Seller','{$users['username']}','{$users['id']}','{$users['password']}','{$users['Pnumber']}','{$users['email']}','{$users['dob']}')";
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}
function Addmanager($users){
    $conn = getConnection();

   //$sql = "INSERT INTO user  VALUES ('', '{$user['username']}', '{$user['id']}', '{$user['Pnumber']}', '{$user['email']}', '{$user['dob']}')";
    $sql = "insert into `user` (`User_Type`,`Name`, `ID`,`Password` , `Phone_Number`, `Email`, `DOB` ) values('Manager','{$users['username']}','{$users['id']}','{$users['password']}','{$users['Pnumber']}','{$users['email']}','{$users['dob']}')";
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}

function Addbuyer($users){
    $conn = getConnection();

   //$sql = "INSERT INTO user  VALUES ('', '{$user['username']}', '{$user['id']}', '{$user['Pnumber']}', '{$user['email']}', '{$user['dob']}')";
    $sql = "insert into `buyer` (`User_Type`,`Name`,`Age`,`National_ID`,`Password` , `Phone_Number`, `Email`, `DOB` ) values('Buyer','{$users['username']}','{$users['age']}','{$users['id']}','{$users['password']}','{$users['Pnumber']}','{$users['email']}','{$users['dob']}')";
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}
function update_seller($username,$id,$password,$phonenumber,$email,$dob){
        $con = getConnection();
        $sql = "update user set  Name ='{$username}',Password='{$password}',Phone_Number='{$phonenumber}', Email='{$email}', DOB='{$dob}' where Id='{$id}'";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }   
    }
    function block($Name,$ID,$Password,$Phone_Number,$Email,$dob){
        $con = getConnection();
        $sql = "INSERT into block_list (User_Type,Name,ID,Password,Phone_Number,Email,DOB) values ('Seller','{$Name}','{$ID}','{$Password}','{$Phone_Number}','{$Email}','{$dob}')";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }   
    }
    function blockBUYER($Name,$Age,$National_ID,$Password,$Phone_Number,$Email,$dob){
        $con = getConnection();
        $sql = "INSERT into blockbuyer (User_Type,Name,Age,National_ID,Password,Phone_Number,Email,DOB) values ('Buyer','{$Name}','{$Age}','{$National_ID}','{$Password}','{$Phone_Number}','{$Email}','{$dob}')";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }   
    }
function delete_user($ID){
        $con = getConnection();
        $sql = "DELETE FROM user  WHERE ID ='{$ID}'";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }
function delete_buyer($National_ID){
        $con = getConnection();
        $sql = "DELETE FROM buyer  WHERE National_ID ='{$National_ID}'";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }
    function unblock($id){
        $con = getConnection();
        $sql = "DELETE FROM block_list WHERE ID ='{$id}'";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }
     function unblockBUYER($id){
        $con = getConnection();
        $sql = "DELETE FROM blockbuyer WHERE National_ID ='{$id}'";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }
    function add_user($Name,$ID,$Password,$Phone_Number,$Email,$dob){
        $con = getConnection();
        $sql = "insert into `user` (`User_Type`,`Name`, `ID`,`Password` , `Phone_Number`, `Email`, `DOB` ) values('Seller','{$Name}','{$ID}','{$Password}','{$Phone_Number}','{$Email}','{$dob}')";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }
     function ADDUNBLOCKBUYER($Name,$Age,$National_ID,$Password,$Phone_Number,$Email,$dob){
        $con = getConnection();
        $sql = "INSERT into buyer (User_Type,Name,Age,National_ID,Password,Phone_Number,Email,DOB) values ('Buyer','{$Name}','{$Age}','{$National_ID}','{$Password}','{$Phone_Number}','{$Email}','{$dob}')";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }   
    }
?>
