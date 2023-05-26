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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Registration Form</title>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12 text-center">
                <a class="btn btn-primary" href="add.php">Add</a>
            </div>
        </div>
        <div class="row mt-3 table-responsive">
            <div class="col-12">
                <table class="table table-striped text-center">
                    <thead>
                        <tr>

                            <th>Name</th>
                            <th>Email</th>
                            <th>Department</th>
                            <th>Position</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $con = new mysqli("localhost", "root", "", "projects");

                        $query = "SELECT * FROM `faculty`";

                        $result = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                            $uid = $row['uid'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $dept = $row['dept'];
                            $pos = $row['pos'];

                            echo '
                            <tr>
                            <td>' . $name . '</td>
                            <td>' . $email . '</td>
                            <td>' . $dept . '</td>
                            <td>' . $pos . '</td>
                            <td><a href="update.php?uid=' . $uid . '"><i class="fa-solid fa-pen-to-square"></i></a>   <a href="delete.php?uid=' . $uid . '"><i class="fa-solid fa-trash" style="margin-left:15px"></i></a></td>
                            </tr>
                            ';
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>