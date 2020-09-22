
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
        $query = mysqli_query($conn,"SELECT * FROM signup WHERE username='".$user."' AND  password = '".$pass."' ");
        $numrows = mysqli_num_rows($query);
        if($numrows>0){
            session_start();
            $_SESSION['username']=$_POST['uname'];
            $_SESSION['password']=$_POST['pword'];
            echo 'login done';
            header("location:member.php");
        }
    }
    else{
        echo 'login failed';
    }
?>
<html>
    <head>
        <style>
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
                position: fixed;
                top: 0;
                width: 100%;
            }

            li {
               float: left;
            }

            li a {
               display: block;
               color: white;
               text-align: center;
               padding: 17px 16px;
               text-decoration: none;
            }

            li a:hover:not(.active) {
               background-color: #111;
            }

            .active {
               background-color:#800000 ;
            }            
        </style>
    </head>
    <body>
        <ul>
            <li><a class="home.html" href="#home">HOME</a></li>
            <li><a href="menu.html">MENU</a></li>
            <li><a href="form1.html">REGISTER</a></li>
            <li><a href="login.html">LOGIN</a></li>
        </ul>
        
    </body>
</html>
