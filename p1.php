<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="mydb";
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error)
    {
        die("Connection failed:".$conn->connect_error);
    }
    if(isset($_POST['p1']))
    {
        $sql="INSERT INTO ordering1(pizza1,price1) VALUES ('dosai',70.00)";
        $result=mysqli_query($conn,$sql);
        header("location:delivery.html");
    }
    if(isset($_POST['p2']))
    {
        $sql="INSERT INTO ordering1(pizza1,price1) VALUES ('eggcurry',150.00)";
        $result=mysqli_query($conn,$sql);
        header("location:delivery.html");
    }
    if(isset($_POST['p3']))
    {
        $sql="INSERT INTO ordering1(pizza1,price1) VALUES ('chickenmanchurian',200.00)";
        $result=mysqli_query($conn,$sql);
        header("location:delivery.html");
    }
    if(isset($_POST['p4']))
    {
        $sql="INSERT INTO ordering1(pizza1,price1) VALUES ('karaputtu',100.00)";
        $result=mysqli_query($conn,$sql);
        header("location:delivery.html");
    }
    if(isset($_POST['p5']))
    {
        $sql="INSERT INTO ordering1(pizza1,price1) VALUES ('lemonrice',100.00)";
        $result=mysqli_query($conn,$sql);
        header("location:delivery.html");
    }
    if(isset($_POST['p6']))
    {
        $sql="INSERT INTO ordering1(pizza1,price1) VALUES ('masalidli',100.00)";
        $result=mysqli_query($conn,$sql);
        header("location:delivery.html");
    }
    if(isset($_POST['p7']))
    {
        $sql="INSERT INTO ordering1(pizza1,price1) VALUES (mutton ghee roasr,300.00)";
        $result=mysqli_query($conn,$sql);
        header("location:delivery.html");
    }
    if(isset($_POST['p8']))
    {
        $sql="INSERT INTO ordering1(pizza1,price1) VALUES ('mutton sukha',300.00)";
        $result=mysqli_query($conn,$sql);
        header("location:delivery.html");
    }
    if(isset($_POST['p9']))
    {
        $sql="INSERT INTO ordering1(pizza1,price1) VALUES ('palkatti',200.00)";
        $result=mysqli_query($conn,$sql);
        header("location:delivery.html");
    }
    if(isset($_POST['p10']))
    {
        $sql="INSERT INTO ordering1(pizza1,price1) VALUES ('pancake',250.00)";
        $result=mysqli_query($conn,$sql);
        header("location:delivery.html");
    }
    if(isset($_POST['p11']))
    {
        $sql="INSERT INTO ordering1(pizza1,price1) VALUES ('pulao',200.00)";
        $result=mysqli_query($conn,$sql);
        header("location:delivery.html");
    }
    if(isset($_POST['p12']))
    {
        $sql="INSERT INTO ordering1(pizza1,price1) VALUES ('puttu',100.00)";
        $result=mysqli_query($conn,$sql);
        header("location:delivery.html");
    }
?>