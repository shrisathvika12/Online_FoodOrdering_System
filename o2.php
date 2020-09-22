<html>
    <head>
        <style>
            body{
                background-image: url("images5.jpg");
                background-repeat:repeat;
            }
            div{
                margin: 10px auto;
                background-color:#ffffe6;
                width: 420px;
                height: 500px;
                padding: 30px;
                border: 3px solid #CCC;
                border-radius: 10px;
                color: #000;
                border-color:#994d00;
            }
            .button{
                padding-left: 100px;
            }
            button[type=submit]{
                background-color:#bfbfbf;
                text-align:center;
                border-radius:3px;
                padding:10px 10px;
            }
            button[type=submit]:hover{
                background-color:#4CAF50;
            }
        </style>
    </head>
    <body>
        <div>
            <h2>DELIVERY ADDRESS:</h2>
            <br>
            <?php
            {
                session_start();
                $servername="localhost";
                $username="root";
                $password="";
                $dbname="myDB";
                $conn=new mysqli($servername,$username,$password,$dbname);
                if($conn->connect_error)
                {
                    die("Connection failed:".$conn->connect_error);
                }
                $name=$_POST['name'];
                $email=$_POST['email'];
                $mobile=$_POST['number'];
                $door=$_POST['doorno'];
                $street=$_POST['street'];
                $locality=$_POST['area'];
                $landmark=$_POST['landmark'];
                $description=$_POST['user_msg'];
                if(isset($_POST['submit']))
                {
                    $sql="INSERT INTO ordering(name,email,mobilenum,doorno,street,locality,landmark,description) 
                    VALUES ('$name','$email','$mobile','$door','$street','$locality','$landmark','$description')";
                    $result=mysqli_query($conn,$sql);
                    echo 'Your order will be delivered to the following address:<br><br>';
                    echo 'NAME: '.$name.'<br>';
                    echo 'E-MAIL ID: '.$email.'<br>';
                    echo 'MOBILE NUMBER: '.$mobile.'<br>';
                    echo 'ADDRESS:<br> '.$door.',<br>'.$street.',<br>'.$locality.',<br>('.$landmark.').<br>';
                }
            }
            ?>
            <br>
            <form action="o3.php" method="post">
                <button type="submit" name="submit1">PLACE ORDER</button>
            </form>
            <form action="delivery.html" method="post">
                <button type="submit" name="submit2">CHANGE DETAILS</button>
            </form>
            <br>
            <br>
            <p><b>PAYMENT METHOD:</b> Cash on delivery</p>
        </div>
    </body>