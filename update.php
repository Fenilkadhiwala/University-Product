<?php
$con = new mysqli("localhost", "root", "", "projects");

$uid = $_GET['uid'];

$query = "SELECT * FROM `faculty` WHERE uid=$uid";

$result = mysqli_query($con, $query);

if ($row = mysqli_fetch_assoc($result)) {
    $myName = $row['name'];
    $myEmail = $row['email'];
    $myContact = $row['contact'];
    $myDept = $row['dept'];
    $myPos = $row['pos'];
    $myBio = $row['bio'];
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
    <div class="container">
        <h1>Update Faculty Record</h1>
        <form action="modify.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name"
                    value="<?php echo "$myName" ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"
                    value="<?php echo "$myEmail" ?>">
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label">Contact</label>
                <input type="text" class="form-control" id="contact" placeholder="Enter contact number" name="contact"
                    value="<?php echo "$myContact" ?>">
            </div>
            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <select class="form-select" id="department" name="dept">
                    <!-- <option selected>Select department</option>
                 -->
                    <option selected="selected">

                        <?php echo "$myDept" ?>
                    </option>
                    <option value="CO">CO</option>
                    <option value="IT">IT</option>
                    <option value="ME">ME</option>
                    <option value="CE">CE</option>
                    <option value="CH">CH</option>
                    <option value="EC">EC</option>
                    <option value="TX">TX</option>
                    <option value="IC">IC</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control" id="position" placeholder="Enter position" name="pos"
                    value="<?php echo "$myPos" ?>">
            </div>
            <div class="mb-3">
                <label for="bio" class="form-label">Bio</label>
                <textarea class="form-control" id="bio" rows="3" placeholder="Enter bio" name="bio"
                    value="<?php echo "$myBio" ?>"></textarea>
                <input type="hidden" name="uid" id="" value="<?php echo "$uid" ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>