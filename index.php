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
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>
    <title>Registration Form</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-5 mt-5">Register Here</h2>
                        <form onsubmit="return validateForm()" method="post" action="register.php">
                            <div class="mb-3">
                                <label for="uname" class="form-label">User Name</label>
                                <input type="text" class="form-control" id="uname" placeholder="Enter your user name"
                                    name="uname" required>
                            </div>
                            <div class="mb-3 row">
                                <div class="col">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName"
                                        placeholder="Enter your first name" name="fname" required>
                                </div>
                                <div class="col">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastName"
                                        placeholder="Enter your last name" name="lname" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="Enter your email address" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone"
                                    placeholder="Enter your phone number" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="pass" name="psw" class="form-control" id="password"
                                    required />
                            </div>
                            <div class="mb-3">
                                <label for="confirm-password" class="form-label">Confirm password</label>
                                <input type="password" id="confpass" class="form-control" id="confirm-password"
                                    required />
                            </div>
                            <div class="invalid-feedback" id="password-mismatch-msg">
                                Passwords do not match
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" name="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const password = document.getElementById("pass");
        const confirmPassword = document.getElementById("confpass");
        const passwordMismatchMsg = document.getElementById(
            "password-mismatch-msg"
        );

        confirmPassword.addEventListener("input", () => {
            if (password.value !== confirmPassword.value) {
                confirmPassword.setCustomValidity("Passwords do not match");
                passwordMismatchMsg.style.display = "block";
            } else {
                confirmPassword.setCustomValidity("");
                passwordMismatchMsg.style.display = "none";
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>