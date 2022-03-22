<?php
    session_start();
    include("connect.php");

    $mobile = $_POST['mob'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];
    
    //query to check user is in the database or not
    $check = mysqli_query($connect, "select * from user where mobile='$mobile' and password='$pass' and role='$role' ");

    if(mysqli_num_rows($check)>0){
        $getCandidates = mysqli_query($connect, "select name, photo, votes, id from user where role=2 ");
        if(mysqli_num_rows($getCandidates)>0){
            $candidates = mysqli_fetch_all($getCandidates, MYSQLI_ASSOC);
            $_SESSION['candidates'] = $candidates;
        }
        $data = mysqli_fetch_array($check);
        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['data'] = $data;
        echo '<script>
                window.location = "../routes/dashboard.php";
            </script>';
    }
    else{
        echo '<script>
                alert("Invalid credentials!");
                window.location = "../";
            </script>';
    }
    
?>