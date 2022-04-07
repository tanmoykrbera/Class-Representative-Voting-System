<?php
    session_start();
    include("connect.php");

    $votes = $_POST['cvotes'];
    $total_votes= $votes+1;
    $cid = $_POST['cid'];
    $uid = $_SESSION['id'];

    $update_votes = mysqli_query($connect, "update user set votes='$total_votes' where id='$cid'");
    $update_status = mysqli_query($connect, "update user set status=1 where id='$uid'");

    if($update_status and $update_votes){
        $getCandidates = mysqli_query($connect, "select name, photo, votes, id from user where role=2 ");
        $candidates = mysqli_fetch_all($getCandidates, MYSQLI_ASSOC);
        $_SESSION['candidates'] = $candidates;
        $_SESSION['status'] = 1;
        echo '<script>
                    alert("Voting successfull!");
                    window.location = "../routes/dashboard.php";
                </script>';
    }
    else{
        echo '<script>
                    alert("Voting failed!.. Try again.");
                    window.location = "../routes/dashboard.php";
                </script>';
    }
    
?>
