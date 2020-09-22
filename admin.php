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
    $sql1="SELECT * FROM `ordering`";
    $res=mysqli_query($conn,$sql1);
    $res1=mysqli_num_rows($res);
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADDRESS</title>
    <style>
        table,td,th{
            border:1px solid black;
            text-align:center;
        }
        table{
            border-collapse:collapse;
            width:100%;
        }
        th{
            height:50px;
        }
        body{
            text-align:center;
        }
    </style>    
</head>
<body>
    <h3>ADDRESS FOR DELIVERY WITH ID NUMBER:</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>E-MAIL</th>
            <th>MOBILE-NUM</th>
            <th>ADDRESS</th>
            <th>DESCRIPTION</th>
        <?php
            if($res1>0){
                while($row=mysqli_fetch_assoc($res)){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['mobilenum']; ?></td>
                    <td><?php echo $row['doorno'].", ".$row['street'].", ".$row['locality'].", ".$row['landmark']."."; ?></td>
                    <td><?php echo $row['description']; ?></td>
                </tr>
            <?php    
        }
    }
?>  
</table>
    <hr>
    <a href="admin3.php">NEXT</a>
    <hr>
</body>
</html>
