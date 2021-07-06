<?php 
session_start();
?>

<html>
<body>
<form action="welcome.php" method="post">

username: <input type="text" name="username"><br>

Password: <input type="password" name="password"><br>

<input type="submit">



</form>
<?php> 
sessioo_unset();

session_destroy();

?>

</body>


</html>