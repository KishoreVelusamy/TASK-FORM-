<html>
<body>


<?php

$nameErr=$emailErr=$passwordErr="";
$name=$email=$password="";

if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(empty($_POST['name']))
    {
        $nameErr="The Field is required";
    }
    else{
        $pattern="/^[a-zA-Z]/";
        $check=preg_match_all($pattern,$_POST['name']);
    if($check){
        $name=$_POST['name'];
    }else{
        $nameErr;
    }
}
if(empty($_POST['email']))
    {
        $emailErr="The Field is required";
    }
    else{
        $check=filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
        if($check){
            $email=$_POST['email'];
        }
        else{
            $emailErr="Enter correct Email format";
        }
}
}

?>

<form action="" method="post">
Name: <input type="text" name="name">
<span>*<?php echo $nameErr;?></span><br>
E-mail: <input type="text" name="email">
<span>*<?php echo $emailErr;?></span><br>
Password: <input type="password" name="password"><br>
<input type="submit">
</form>

</body>
</html>