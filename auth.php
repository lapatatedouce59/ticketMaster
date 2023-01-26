<?php      
    include('dbcon.php');  
    $username = $_POST['id'];  
    $password = $_POST['pass'];  
    
    //to prevent from mysqli injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  

    $sql = "select *from users where uid = '$username' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    
    if($count == 1){  
        echo "<h1><center> Login successful. Creating session and redirecting... </center></h1>";
        session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];

        header("Location: home.php");
        die();
    }  
    else{  
        echo "<h1> Login failed. Invalid username or password.</h1>";
        header("Location: index.php?error=invalid");
        die();
    }     
?>