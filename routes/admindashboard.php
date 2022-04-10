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
        <title>Class Representative Election System - Admin</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body>
        <div class = "dashboard-body">
            <center>
            <div id="headerSection">
                <h1>ADMIN PAGE</h1>  
                <a href="logout.php"><button id="logout-button">Logout</button></a>
                <a href="../"><button id="back-button"> Back</button></a>
            </div>
           

            <div id="mainSection">
                <div id="profileSection">
                    <center><img src="../uploads/<?php echo $data['photo']?>" height="100" width="100"></center><br>
                    <b>Name : </b><?php echo $data['name'] ?><br><br>
                    <b>Mobile : </b><?php echo $data['mobile'] ?><br><br>
                    <b>Address : </b><?php echo $data['address'] ?><br><br>
                    
                </div>
                <hr>
                <div id="candidateSection">
                    <?php

                    if(isset($_SESSION['candidates'])){
                        $candidates = $_SESSION['candidates'];
                        for($i=0; $i<count($candidates); $i++){
                            ?>
                                <div class = "candidateDiv">
                                    <img  src="../uploads/<?php echo $candidates[$i]['photo']?>" height="80" width="80">
                                    <b>candidate Name : </b><?php echo $candidates[$i]['name']?>
                                    <b>Votes :</b> <?php echo $candidates[$i]['votes']?>
                                    <form method="POST" action="../api/vote.php">
                                    <input type="hidden" name="cvotes" value="<?php echo $candidates[$i]['votes'] ?>">
                                    <input type="hidden" name = "cid" value="<?php echo $candidates[$i]['id'] ?>">
                                <?php

                                if($_SESSION['status']==1){
                                    ?>
                                    <button style = "cursor : not-allowed; background-image: linear-gradient(to right, #90d1ff 0%, #a5f1fe  51%, #aadbff  100%)" disabled  type="button">Voted</button>
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
                            <div class = "candidateDiv">
                                <b>No candidates available right now.</b>    
                            </div>
                        <?php
                    }  
                    ?>
                </div>
            </div> 
            </center>
        </div>
    </body>
</html>