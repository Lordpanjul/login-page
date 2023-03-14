<?php      
    include('connection.php');  
    $nim = $_POST['nim'];  
    $pass = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $nim = stripcslashes($nim);  
        $pass = stripcslashes($pass);  
        $nim = mysqli_real_escape_string($con, $nim);  
        $pass = mysqli_real_escape_string($con, $pass);  
      
        $sql = "select *from profil where nim = '$nim' and pass = '$pass'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1><center>Login failed, Invalid username or password.</center></h1>";  
        }     
?>  