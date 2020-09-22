
<html>
        <head>
            <title>Registration</title>
            <style type="text/css">
                div 
                {
                    border-radius: 5px;
                    background-color: #f2f2f2;
                    padding: 20px;
                    float:right;
                    margin-right: 50px;
                }
                body{
                    background-image: url("food2.jpeg");
                    background-repeat: no-repeat;
                    background-position: left;
                    background-position-x: 150px;
                    background-position-y: 150px;
                    background-size: 500px;
                    border-color: #111;
                }
                input[type=submit]
                {
                    width: 100%;
                    background-color:#4CAF50;
                    color: white;
                    cursor: pointer;
                    border-radius: 4px;
                    padding: 12px 16px;
                    text-align: center;
                    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                    font-size: 20px;
                }
                input[type=text]
                {
                    border: 1px solid #ccc;
                    padding: 12px 20px;
                    font-size: 20px;
                    border-radius: 4px;
                }
                input[type=password]
                {
                    border: 1px solid #ccc;
                    padding: 12px 20px;
                    font-size: 20px;
                    border-radius: 4px;
                }
                h1
                {
                    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                    font-size: 30px;
                }
    
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
                h2{
                    margin-right:60px;
                }                      
            </style>
        </head>
        <body>
            <ul>
                <li><a class="active" href="sameera.html">HOME</a></li>
                <li><a href="o.html">MENU</a></li>
                <li><a href="admin1.php">ADMIN</a></li>
                <li><a href="form1.html">REGISTER</a></li>
                <li><a href="loginform.html">LOGIN</a></li>
            </ul>
            <br><br><br>
            <h2 style="text-align:right;padding-right:70px">SIGN IN TO PROCEED</h2>
            <div style="text-align:right; padding-right:50px; font-size:20px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif'">
                    <form action="admin2.php" method="post">
                            Username: <input type="text" name="uname" class="textInput" required>
                            <br><br>
                            Password: <input type="password" name="pword" class="textInput" required>
                            <br><br>
                            <input type="submit" name="submit" value="login">
                        </form>
                
            </div>
        </body>
    </html>