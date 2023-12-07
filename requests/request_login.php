<?php
include_once('..')


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $connection = connectDatabase();

    // Usar prepared statements para proteger contra SQL injection
    $name = mysqli_real_escape_string($connection, $name);
    $email = mysqli_real_escape_string($connection, $email);
    $password= mysqli_real_escape_string($connection, $password);


    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    $query = "SELECT * FROM users WHERE email = '$email'";

    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result) > 0){
     $row = mysqli_fetch_assoc($result);

     if(password_verify(password, $row['password'])){
          $_SESSION['user_id'] = $frow['id'];
          $_SESSION['user_name'] = $frow['name'];

          header("location: ../admin/index.php");
     }else{
          $_SESSION['login_error'] = 'Senha'
     }
    }
}

?>