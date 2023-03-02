<?php
session_start();
$con=mysqli_connect('localhost','root','','userregisteration') or die('Unable to connect');

    if (isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $select=mysqli_query($con,"SELECT * FROM details WHERE email='$email' AND password='$password'");
        $row=mysqli_fetch_array($select);

        if($select->num_rows > 0){
            $_SESSION['email']=$row['email'];
            $_SESSION['password']=$row['password'];
            header("Location:dashboardpage11.php");
        }else{
            echo '<script>';
            echo 'alert("Invalid email or Password")';
            echo '</script>';
            echo'<script>location.href="login.php"</script>';
        }
    }

    ?>