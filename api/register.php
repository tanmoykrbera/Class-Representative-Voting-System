<?php
    include("connect.php");

    $name = $_POST['name'];
    $mobile = $_POST['mob'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $add = $_POST['add'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $role = $_POST['role'];



    //query to check duplicate mobile no registration

    $check_duplicate_mobile = "SELECT mobile FROM user WHERE mobile = '$mobile' ";
    $result = mysqli_query($connect, $check_duplicate_mobile);
    $count= mysqli_num_rows($result);

    if($count>0){
        echo '<script>
                alert("Mobile Number already exists. Please login");
                window.location = "../";
            </script>';
            return false;

    }

    if($cpass!=$pass){
        echo '<script>
                alert("Passwords do not match!");
                window.location = "../routes/register.php";
            </script>';
            
    }
    else{
        move_uploaded_file($tmp_name,"../uploads/$image");
        $insert = mysqli_query($connect, "insert into user (name, mobile, address, password, photo, role, status, votes) values('$name', '$mobile', '$add', '$pass', '$image', '$role', 0, 0) ");
        if($insert){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "../";
                </script>';
        }
    }
    
?>