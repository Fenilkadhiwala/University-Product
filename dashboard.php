<?php

if (!isset($_COOKIE['uid'])) {
  // User is not logged in, redirect to the login page
  header('Location: index.php');
  exit();

}

$lh = "localhost";
$uname = "root";
$psw = "";
$db = "Projects";

$con = new mysqli($lh, $uname, $psw, $db);

if (!$con) {
  die(mysqli_error($con));

}

$uid = $_COOKIE['uid'];
$q1 = "SELECT uname FROM `USERREGISTER` WHERE uid=$uid";

$result = mysqli_query($con, $q1);
$row = mysqli_fetch_assoc($result);

$admin = $row['uname'];

?>

<!DOCTYPE html>
<!-- Coding by CodingNepal || www.codingnepalweb.com -->
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Boxicons CSS -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <title>Side Navigation Bar in HTML CSS JavaScript</title>
  <link rel="stylesheet" href="stylesb.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar">
    <div class="logo_item">
      <i class="bx bx-menu" id="sidebarOpen"></i>
      <iconify-icon icon="twemoji:books"></iconify-icon>Library

    </div>

    <!-- <div class="search_bar">
        <input type="text" placeholder="Search" />
      </div> -->

    <div class="navbar_content">
      <i class="bi bi-grid"></i>
      <i class="bx bx-sun" id="darkLight"></i>
      <!-- <i class="bx bx-bell"></i> -->
      <img src="pro.jpg" alt="" class="profile" />

      <?php
      echo "$admin";
      ?>


    </div>
  </nav>

  <section>


    <table border="1">
      <th>
      <td>Sr no.</td>
      <td>Sr no.</td>
      <td>Sr no.</td>
      </th>
    </table>

  </section>

  <!-- sidebar -->
  <nav class="sidebar">
    <div class="menu_content">
      <ul class="menu_items">
        <div class="menu_title menu_dahsboard"></div>
        <!-- duplicate or remove this li tag if you want to add or remove navlink with submenu -->
        <!-- start -->
        <li class="item">
          <div href="#" class="nav_link submenu_item">
            <span class="navlink_icon">
              <i class="bx bx-home-alt"></i>
            </span>
            <span class="navlink">Home</span>
            <i class="bx bx-chevron-right arrow-left"></i>
          </div>

          <ul class="menu_items submenu">
            <a href="#" class="nav_link sublink">Nav Sub Link</a>
            <a href="#" class="nav_link sublink">Nav Sub Link</a>
            <a href="#" class="nav_link sublink">Nav Sub Link</a>
            <a href="#" class="nav_link sublink">Nav Sub Link</a>
          </ul>
        </li>
        <!-- end -->

        <!-- duplicate this li tag if you want to add or remove  navlink with submenu -->
        <!-- start -->
        <li class="item">
          <div href="#" class="nav_link submenu_item">
            <span class="navlink_icon">
              <i class="bx bx-grid-alt"></i>
            </span>
            <span class="navlink">Overview</span>
            <i class="bx bx-chevron-right arrow-left"></i>
          </div>

          <ul class="menu_items submenu">
            <a href="#" class="nav_link sublink">Nav Sub Link</a>
            <a href="#" class="nav_link sublink">Nav Sub Link</a>
            <a href="#" class="nav_link sublink">Nav Sub Link</a>
            <a href="#" class="nav_link sublink">Nav Sub Link</a>
          </ul>
        </li>
        <!-- end -->
      </ul>

      <ul class="menu_items">
        <div class="menu_title menu_editor"></div>
        <!-- duplicate these li tag if you want to add or remove navlink only -->
        <!-- Start -->
        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bxs-magic-wand"></i>
            </span>
            <span class="navlink">Magic build</span>
          </a>
        </li>
        <!-- End -->

        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-loader-circle"></i>
            </span>
            <span class="navlink">Filters</span>
          </a>
        </li>
        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-filter"></i>
            </span>
            <span class="navlink">Filter</span>
          </a>
        </li>
        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-cloud-upload"></i>
            </span>
            <span class="navlink">Upload new</span>
          </a>
        </li>
      </ul>
      <ul class="menu_items">
        <div class="menu_title menu_setting"></div>
        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-flag"></i>
            </span>
            <span class="navlink">Notice board</span>
          </a>
        </li>
        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-medal"></i>
            </span>
            <span class="navlink">Award</span>
          </a>
        </li>
        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-cog"></i>
            </span>
            <span class="navlink">Setting</span>
          </a>
        </li>
        <li class="item">
          <a href="#" class="nav_link">
            <span class="navlink_icon">
              <i class="bx bx-layer"></i>
            </span>
            <span class="navlink">Features</span>
          </a>
        </li>
      </ul>

      <!-- Sidebar Open / Close -->
      <div class="bottom_content">
        <div class="bottom expand_sidebar">
          <span> Expand</span>
          <i class="bx bx-log-in"></i>
        </div>
        <div class="bottom collapse_sidebar">
          <span> Collapse</span>
          <i class="bx bx-log-out"></i>
        </div>
      </div>
    </div>
  </nav>





  <script src="indexsb.js"></script>
</body>

</html>