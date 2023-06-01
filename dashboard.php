<?php
$lh = "localhost";
$uname = "root";
$psw = "";
$db = "Projects";

$con = new mysqli($lh, $uname, $psw, $db);

if (!$con) {
    die(mysqli_error($con));

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Responsive Sidebar</title>
    <!-- Link Styles -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> -->
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="sidebar">
        <div class="logo_details">
            <i class="bx bxl-audible icon"></i>
            <div class="logo_name">Library</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nlist">
            <li>
                <i class="bx bx-search"></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-grid-alt"></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="fac.php">
                    <i class="bx bx-user"></i>
                    <span class="link_name">Faculties</span>
                </a>
                <span class="tooltip">Faculties</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-chat"></i>
                    <span class="link_name">Message</span>
                </a>
                <span class="tooltip">Message</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-pie-chart-alt-2"></i>
                    <span class="link_name">Analytics</span>
                </a>
                <span class="tooltip">Analytics</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-folder"></i>
                    <span class="link_name">File Manger</span>
                </a>
                <span class="tooltip">File Manger</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-cart-alt"></i>
                    <span class="link_name">Order</span>
                </a>
                <span class="tooltip">Order</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-cog"></i>
                    <span class="link_name">Settings</span>
                </a>
                <span class="tooltip">Settings</span>
            </li>
            <li class="profile">
                <div class="profile_details">
                    <!-- <img src="profile.jpeg" alt="profile image"> -->
                    <div class="profile_content">
                        <div class="name">
                            <?php
                            $uid = $_GET['uid'];
                            $q1 = "SELECT uname FROM `USERREGISTER` WHERE uid=$uid";

                            $result = mysqli_query($con, $q1);


                            $row = mysqli_fetch_assoc($result);
                            $admin = $row['uname'];
                            echo "$admin";

                            ?>
                        </div>
                        <div class="designation">Admin</div>
                    </div>
                </div>
                <i class="bx bx-log-out" id="log_out"></i>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="text">
            Welcome To Dashboard

        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card" id="myCard">

                        <div class="card-body">
                            <h5 class="card-title">Logged in user</h5>
                            <p class="card-text">Count</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card" id="myCard">

                        <div class="card-body">
                            <h5 class="card-title">Total Books</h5>
                            <p class="card-text">Count</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card" id="myCard">

                        <div class="card-body">
                            <h5 class="card-title">Total Faculties</h5>
                            <p class="card-text">Count</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card" id="myCard">

                        <div class="card-body">
                            <h5 class="card-title">Borrowed</h5>
                            <p class="card-text">Count</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="container mt-5">

            <div id="fb">

                <a href="add.php" class="btn btn-primary" style="padding-top: 10px;">


                    <i class="fa-solid fa-plus"></i> Add Faculty

                </a>

                <div class="mb-3">
                    <input type="text" class="" id="searchInput" placeholder="Search..." onkeyup="searchTable()">
                </div>
            </div>

            <div class="table-responsive mt-3">
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>Sr no.</th>
                            <th>Designation</th>
                            <th>Faculty Name</th>
                            <th>Department</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php



                        $query = "SELECT * FROM `FACULTY`";

                        $result = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_assoc($result)) {

                            $id = $row['uid'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $contact = $row['contact'];
                            $dept = $row['dept'];
                            $pos = $row['pos'];
                            $bio = $row['bio'];
                            $img = $row['img'];

                            echo '<tr>
                    <td class="serial-number">1</td>
                    <td>' . $pos . '</td>
                    <td>' . $name . '</td>
                    <td> ' . $dept . '</td>
                    <td> ' . $email . '</td>
                    <td><a href="update.php?uid=' . $id . '"><i class="fa-solid fa-pen-to-square"></i></a> <a href="delete.php?uid=' . $id . '"><i class="fa-solid fa-trash"></i></a></td>
                </tr>';
                        }

                        ?>
                    </tbody>
                </table>
            </div>

        </div>


    </section>


    <!-- Scripts -->
    <script>
        function searchTable() {
            var input = document.getElementById("searchInput");
            var filter = input.value.toUpperCase();
            var table = document.querySelector("table");
            var rows = table.getElementsByTagName("tr");

            for (var i = 1; i < rows.length; i++) {
                var nameColumn = rows[i].getElementsByTagName("td")[2];
                if (nameColumn) {
                    var name = nameColumn.innerText.toUpperCase();
                    if (name.includes(filter)) {
                        rows[i].style.display = "";
                    } else {
                        rows[i].style.display = "none";
                    }
                }
            }
        }

        var table = document.getElementById("myTable");
        var tbody = table.getElementsByTagName("tbody")[0];

        // Get all the serial number cells in the table
        var serialNumberCells = tbody.getElementsByClassName("serial-number");

        // Loop through each serial number cell and update the number
        for (var i = 0; i < serialNumberCells.length; i++) {
            serialNumberCells[i].textContent = i + 1;
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



    <!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
    <script src="script.js"></script>
</body>

</html>