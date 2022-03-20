<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: ../");
    }  // if user is not logged in dashboard.php wont work/open

    $data = $_SESSION['data'];

    if($_SESSION['status']==1){
        $status = '<b style="color: green">Voted</b>';
    }
    else{
        $status = '<b style="color: red">Not Voted</b>';
    }
?>


<html>
    <head>
        <title>Class Representative Election System - Dashboard</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body>
        
            <center>
            <div id="headerSection">
            <a href="../"><button id="back-button"> Back</button></a>
            <a href="logout.php"><button id="logout-button">Logout</button></a>
            <h1>Class Representative Election System</h1>  
            </div>
            </center>
            <hr>

            
    </body>
</html>