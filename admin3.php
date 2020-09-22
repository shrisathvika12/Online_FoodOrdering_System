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
        $sql1="SELECT * FROM `ordering1`";
        $res=mysqli_query($conn,$sql1);
        $res1=mysqli_num_rows($res);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ORDERS</title>
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
    <h3>ORDERS:</h3>
    <br>
    <table>
        <tr>
            <th>ID</th>
            <th>ITEM</th>
            <th>PRICE</th>
        </tr>
        <?php
            if($res1>0){
                $qty=0;
                while($row=mysqli_fetch_assoc($res)){
                    $price=$row['price1'];
                    $qty=$qty+$price;
                ?>
                <tr>
                    <td><?php echo $row['id1']; ?></td>
                    <td><?php echo $row['pizza1']; ?></td>
                    <td><?php echo $row['price1']; ?></td>
                </tr>
            <?php
        }
    }  
    
?>
</table>
<?php 
    echo "<br><br>";
    echo "The total no. of orders placed is: ".$res1;
    echo "<br><hr>";
    echo "The amount gained is: Rs.".$qty;
?>
<hr>
<a href="admin.php">BACK</a>
<hr>
<a href="home.html">LOG OUT</a>
<hr>
</body>
</html>

