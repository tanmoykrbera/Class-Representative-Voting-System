<?php
    session_start();
    include("connect.php");

    $votes = $_POST['cvotes'];
    $total_votes= $votes+1;
    $cid = $_POST['cid'];
    $uid = $_SESSION['id'];

    $update_votes = mysqli_query($connect, "update user set votes='$total_votes' where id='$cid'");
    $update_status = mysqli_query($connect, "update user set status=1 where id='$uid'");

    
    
?>
