<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
if (isset($_POST['btn'])){
    $host="localhost";
    $user="root";
    $password="";
    $db="register";
    

    $conn=mysqli_connect($host,$user,$password,$db);
    $insert=insert into register_list values('name','email');
    mysqli_query($conn,$insert);
    if($conn){
        echo("your registration is done");
    }else{
        ("your rigisteration is faild");
    }

}