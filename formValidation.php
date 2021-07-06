<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>
<h1>Create an Account: REGISTER</h1>

<form action="welcome.php" method="post">

First Name:
<input type="text" name="Fname">
<span class="error"><?php $FnameErr; ?></span>
<br>
Last Name:
<input type="text" name="Lname">
<span class="error"><?php $LnameErr; ?></span>
<br>
Email:
<input type="email" name="email">
<span class="error"><?php $emailErr; ?></span>
<br>
Password:
<input type="password" name="password">
<br>
RE-TYPE Password:
<input type="password" name="REpassword">
<br>

<input type="submit">
<br>

<h3>Already Have an Account?<a href="SignIn.php" target="_blank"> Sign In</a></h3>
</form>



</body>


</html>

<?php
$FnameErr = $emailErr  = LnameErr =" ";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    //checking if a field is empty
    if($empty($_POST[Fname])){
        $FnameErr = "First Name is Required";
    }else{
        $Fname = test_input($_POST[Fname]);
    }

    if($empty($_POST[Lname])){
        $LnameErr = "Last Name is Required";
    }else{
        $Lname = test_input($_POST[Lname]);
    }

    if($empty($_POST[email])){
        $emailErr = "Email is Required";
    }else{
        $email = test_input($_POST[email]);
    }
       
    
}

//validation method
function test_input($data){
    $data =trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}


?>