
<script src='https://www.google.com/recaptcha/api.js'></script>

<html>
    <head>
        <title>CR voting system - Registratrion</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body>
        <div class = "register-body">
                <center>
                <div id="headerSection">
                    <h1>Class Representative Election System</h1>  
                </div>
                <div id="loginSection">
                    <p class = "login-text">Registration</p>
                    <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="number" name="mob" placeholder="Mobile" required>
                        <input type="password" name="pass" placeholder="Password" required>
                        <input type="password" name="cpass" placeholder="Confirm Password" required>
                        <input type="text" name="add" placeholder="Address" required>
                        <div id="upload">
                            Upload image: <input type="file" id="profile" name="image" required>
                        </div><br>
                        <div id="upload">
                            Select your role:
                            <select name="role">
                                <option value="1">Voter</option>
                                <option value="2">Candidate</option>
                            </select><br>                   
                        </div><br>
                        <div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div> 
                        <button id="loginbtn" type="submit" name="registerbtn">Register</button>
                        <p>Already user? <a href="../">Login here</a></p>
                    </form>
                    </div>
                </center>
            </div>
    </body>
</html>