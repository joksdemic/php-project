<?php
    session_start();

    if(isset($_SESSION['username'])){
        header("Location: index.php");
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        if($_POST['username'] == "admin" && $_POST['password'] == '12345'){
            $_SESSION['username'] = "admin";
    
            header("Location: index.php");
        } else {
            $error = "Username ili password nisu tacni!";
        }
    }
?>
<!doctype html>
<html lang="en" class="w-100 h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body class="w-100 h-100">
        <main class="container-fluid d-flex justify-content-center align-items-center w-100 h-100">
            <form action="login.php" method="POST" class="border p-3 rounded">
                <div class="mb-3">
                    <label for="input-username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="input-username" name="username">
                </div>
                <div class="mb-3">
                    <label for="input-password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="input-password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                
                    <?php
                        if(isset($error))
                            echo '<div class="alert alert-danger mt-2 mb-0" role="alert">'.$error.'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                    ?>
                
            </form>
        </main>
        
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>
