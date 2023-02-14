<?php
session_start();
$con=mysqli_connect('localhost','root','','loginform') or die('Unable to connect');

    if (isset($_POST['login'])){
        $Username=$_POST['Username'];
        $Password=$_POST['Password'];

        $select=mysqli_query($con,"SELECT * FROM logindetails WHERE Username='$Username' AND Password='$Password'");
        $row=mysqli_fetch_array($select);

        if(is_array($row)){
            $_SESSION['Username']=$row['Username'];
            $_SESSION['Password']=$row['Password'];
        }else{
            echo '<script>';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';
        }
    }
    if(isset($_SESSION['Username'])){
        header("Location:dashboardpage.php");
    }

    ?>