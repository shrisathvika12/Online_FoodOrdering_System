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
            h1{
                text-align: center;
            }
            a{
                text-align:center;
            }
        </style>
    </head>
    <body>
        <div>
            <h2>YOUR ORDER DETAILS:</h2>
            <br>
            <?php
            {
                if(isset($_POST['submit1']))
                {
                    echo 'Your order has been placed successfully!<br>';
                    echo '<b>YOUR DELICIOUS FOOD</b> WILL REACH YOU IN AN HOUR!';
                }
            }
            ?>
            <br><br><br><br><br><br>
            <hr>
            <h1>THANK YOU!</h1>
            <hr>
            <a href="home.html">LOG OUT</a>

        </div>
    </body>