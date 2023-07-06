<?php
session_start();

if (isset($_SESSION['uid'])) {

    header('Location: dashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f1f1f1;
        }

        .formContainer {
            box-shadow: 4px 8px 16px #d7d7d7;
            margin: 20vh auto;
            padding: 20px;
            border-radius: 0px 0px 4px 4px;
        }

        input {
            box-shadow: none !important;
            outline: none;
        }

        #formHeading {
            background: #63cd9c;
            margin: -20px;
            border-radius: 4px 4px 0px 0px;

        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>
    <link rel="icon" type="image" href="fi1.png">
    <title>Admin | Log In</title>
</head>

<body>
    <div class="p-4">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6 col-lg-6 mx-auto">
                    <div class="formContainer">
                        <h2 class="p-2 text-center mb-4 h4" id="formHeading">Admin Login</h2>
                        <?php
                        // session_start();
                        if (isset($_SESSION['msg'])) {
                            $msg = $_SESSION['msg'];

                            echo '<h6 class="card-title text-center mb-5 mt-5 style=" style="color:red;">' . $msg . '</h6>';
                            unset($_SESSION['msg']);
                        }
                        ?>
                        <form action="login.php" method="post">
                            <div class="form-group mt-3">
                                <label class="mb-2" for="uname">Username</label>
                                <input class="form-control" id="username" name="uname" type="text"
                                    placeholder="username" required />
                            </div>
                            <div class="form-group mt-3">
                                <label class="mb-2" for="psw">Password</label>
                                <input class="form-control" id="password" name="psw" placeholder="password"
                                    type="password" required />
                            </div>

                            <button class="btn btn-success btn-lg w-100 mt-4">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>