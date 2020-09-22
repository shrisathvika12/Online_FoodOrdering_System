<html>
    <body>
        <br>
        <br>
        <br>
    </body>
</html>
<?php
    session_start();
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="mydb";
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error)
    {
        die("Connection failed:".$conn->connect_error);
    }
    if(isset($_POST['submit1']))
    {           
        $username=$_POST['uname'];
        $email=$_POST['email'];
        $password=$_POST['pword'];
        $password1=$_POST['pword1'];
        if ($password == $password1)
        {
            $password=md5($password);
            $sql="INSERT INTO signup(username,email,password) VALUES ('$username','$email','$password')";
            $result=mysqli_query($conn,$sql);
        }  
        else{
            $_SESSION['message']="The two passwords do not match";
        }
    }
    if($result){
        echo 'Account created successfully!';
    }
    else{
        echo 'Failure';
    }
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="navi.css">           
    </head>
    <body>
        <ul>
            <li><a class="active" href="sameera.html">HOME</a></li>
            <li><a href="menu.html">MENU</a></li>
            <li><a href="admin.php">ADMIN</a></li>
        </ul>
        <form action='menu.html' method='post'>
            <input type='submit' name='submit' value='OK'>
        </form>
    </body>
</html>
