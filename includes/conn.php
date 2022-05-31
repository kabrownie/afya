<?php      
    $host = "localhost: 3306";  
    $user = "newuser";  
    $password = "Karanja_019";  
    $db_name = "afya";  
      
    $db = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  