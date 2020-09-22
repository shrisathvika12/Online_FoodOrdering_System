
<?php
    if(isset($_POST['submit']))
    {
        $user=$_POST['uname'];
        $pass=($_POST['pword']);
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="mydb";
        $conn=new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error)
        {
            die("Connection failed:".$conn->connect_error);
        }
        $query = mysqli_query($conn,"SELECT * FROM admin WHERE username='".$user."' AND  password = '".$pass."' ");
        $numrows = mysqli_num_rows($query);
        if($numrows>0){
            session_start();
            $_SESSION['username']=$_POST['uname'];
            $_SESSION['password']=$_POST['pword'];
            echo '<br><br><br>login done';
            header("location:admin.php");
        }
    }
    else{
        echo 'login failed';
    }
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="navi.css">
    </head>
    <body>
        <br><br><br>
        <p>Only admin can sign in!</p>
        <ul>
            <li><a class="sameera.html" href="#home">HOME</a></li>
            <li><a href="menu.html">MENU</a></li>
            <li><a href="admin1.php">ADMIN</a></li>
            <li><a href="form1.html">REGISTER</a></li>
            <li><a href="login.html">LOGIN</a></li>
        </ul>
        
    </body>
</html>
