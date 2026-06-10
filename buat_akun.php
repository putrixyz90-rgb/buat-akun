<?php
include "../config/koneksi.php";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn,
    "SELECT * FROM users
     WHERE username='$username'
     AND password='$password'");

    if(mysqli_num_rows($query) > 0){
        echo "<script>alert('Login Berhasil!');</script>";
    } else {
        echo "<script>alert('Username atau Password Salah!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PPDB</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .btn-login{
       background-color: #14532d !important;   
       color: white;     
       border: none;
       
    }
</style>
</head>
<body class="bg-light">

<div class="container">
    <div class="row justify-content-center align-items-center vh-100">

        <div class="col-md-4">

            <div class="card shadow">
                <div class="card-body p-4">

                    <h2 class="text-center mb-4">
                        Login PPDB
                    </h2>

                    <form method="POST">

                        <div class="mb-3">
                            <label class="form-label">
                                Username
                            </label>
                            <input type="text"
                                   name="username"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Password
                            </label>
                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   required>
                        </div>
                        <div class= "text-center">
                        <button type="submit"
                                name="login"
                                class="btn btn-login">
                            Login
                        </button>

                    </form>

                </div>
            </div>

        </div>

    </div>
</div>
</div>

</body>
</html>