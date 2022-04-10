<html>
    <head>
        <title>CR voting system - Home</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
        <link rel="stylesheet" href="css/stylesheet.css">

    </head>
    <body>  
        <div class = "login-body">
            <center>
                <div id="headerSection">
                    <h1>👩🏻‍🏫 Class Representative Election System</h1>  
                </div>
                <div id="loginSection">
                    <p class = "login-text">Login</p>
                    <form action="api/login.php" method="POST">
                        <input type="number" name="mob" placeholder="Enter mobile" required>
                        <input type="password" name="pass" placeholder="Enter password" required>
                        <br>
                        <br>
                        <select name="role" >
                            <option value="1">Voter</option>
                            <option value="2">Candidate</option>
                            <option value="3">Admin</option>
                        </select><br><br>                  
                        <button id="loginbtn" type="submit" name="loginbtn">Login</button><br>
                        <p>New user? <a href="routes/register.php">Register here</a></p><br>
                    </form>
                </div>
            </center>
        <div>
    </body>
</html>