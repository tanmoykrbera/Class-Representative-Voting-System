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

            <div id="mainSection">
                <div id="profileSection">
                    <center><img src="../uploads/<?php echo $data['photo']?>" height="100" width="100"></center><br>
                    <b>Name : </b><?php echo $data['name'] ?><br><br>
                    <b>Mobile : </b><?php echo $data['mobile'] ?><br><br>
                    <b>Address : </b><?php echo $data['address'] ?><br><br>
                    <b>Status : </b><?php echo $status ?>
                </div>
                <div id="candidateSection">
                    <?php

                    if(isset($_SESSION['candidates'])){
                        $candidates = $_SESSION['candidates'];
                        for($i=0; $i<count($candidates); $i++){
                            ?>
                                <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                                <img style="float: right" src="../uploads/<?php echo $candidates[$i]['photo']?>" height="80" width="80">
                                <b>candidate Name : </b><?php echo $candidates[$i]['name']?><br><br>
                                <b>Votes :</b> <?php echo $candidates[$i]['votes']?><br><br>
                                <form method="POST" action="../api/vote.php">
                                <input type="hidden" name="cvotes" value="<?php echo $candidates[$i]['votes'] ?>">
                                <input type="hidden" name = "cid" value="<?php echo $candidates[$i]['id'] ?>">
                                <?php

                                if($_SESSION['status']==1){
                                    ?>
                                    <button disabled style="padding: 5px; font-size: 15px; background-color: #27ae60; color: white; border-radius: 5px;" type="button">Voted</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button style="padding: 5px; font-size: 15px; background-color: #3498db; color: white; border-radius: 5px;" type="submit">Vote</button>
                                    <?php
                                }
                                ?>
                                </form>
                                </div>
                            <?php
                        }
                    }
                    else{
                        ?>
                            <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                                <b>No candidates available right now.</b>    
                            </div>
                        <?php
                    }  
                    ?>
                </div>
            </div> 
    </body>
</html>