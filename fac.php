<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>

<body>
    <?php

    $lh = "localhost";
    $uname = "root";
    $psw = "";
    $db = "Projects";

    $con = new mysqli($lh, $uname, $psw, $db);

    if (!$con) {
        die(mysqli_error($con));

    }

    $query = "SELECT * FROM `FACULTY`";

    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_assoc($result)) { ?>

        <div>
            <img src="uploads/<?= $row['img'] ?>" alt="hello" height="100px" width="100px">
        </div>
        <?php
    }
    ?>
</body>

</html>