<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>SkyTech</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  </head>
  <body>
    <!-- ======== Preloader =========== -->
    <div id="preloader">
      <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->

 <!-- ======== sidebar-nav start =========== -->
 <aside class="sidebar-nav-wrapper">
    <div class="navbar-logo">
      <a href="inventory.php">
        <div class="logo-container">
          <span class="material-icons-outlined large-icon">school </span>
          <span class="large-text bold-text"> SkyTech</span>
        </div>          
      </a>
    </div>
    <nav class="sidebar-nav">    
      <ul>
        <!-- Dashboard Starts -->
         <li class="nav-item">
          <a
            href="mainMenu.php"
          >
              <span class="icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M8.74999 18.3333C12.2376 18.3333 15.1364 15.8128 15.7244 12.4941C15.8448 11.8143 15.2737 11.25 14.5833 11.25H9.99999C9.30966 11.25 8.74999 10.6903 8.74999 10V5.41666C8.74999 4.7263 8.18563 4.15512 7.50586 4.27556C4.18711 4.86357 1.66666 7.76243 1.66666 11.25C1.66666 15.162 4.83797 18.3333 8.74999 18.3333Z" />
                  <path
                    d="M17.0833 10C17.7737 10 18.3432 9.43708 18.2408 8.75433C17.7005 5.14918 14.8508 2.29947 11.2457 1.75912C10.5629 1.6568 10 2.2263 10 2.91665V9.16666C10 9.62691 10.3731 10 10.8333 10H17.0833Z" />
                </svg>
              </span>
            <span class="text">Issues</span>
          </a>
        </li>
        <!-- Dashboard Starts -->  
      
      <!-- Inventory Starts -->
        <li class="nav-item">
          <a href="inventory.php">
            <span class="icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M11.8097 1.66667C11.8315 1.66667 11.8533 1.6671 11.875 1.66796V4.16667C11.875 5.43232 12.901 6.45834 14.1667 6.45834H16.6654C16.6663 6.48007 16.6667 6.50186 16.6667 6.5237V16.6667C16.6667 17.5872 15.9205 18.3333 15 18.3333H5.00001C4.07954 18.3333 3.33334 17.5872 3.33334 16.6667V3.33334C3.33334 2.41286 4.07954 1.66667 5.00001 1.66667H11.8097ZM6.66668 7.70834C6.3215 7.70834 6.04168 7.98816 6.04168 8.33334C6.04168 8.67851 6.3215 8.95834 6.66668 8.95834H10C10.3452 8.95834 10.625 8.67851 10.625 8.33334C10.625 7.98816 10.3452 7.70834 10 7.70834H6.66668ZM6.04168 11.6667C6.04168 12.0118 6.3215 12.2917 6.66668 12.2917H13.3333C13.6785 12.2917 13.9583 12.0118 13.9583 11.6667C13.9583 11.3215 13.6785 11.0417 13.3333 11.0417H6.66668C6.3215 11.0417 6.04168 11.3215 6.04168 11.6667ZM6.66668 14.375C6.3215 14.375 6.04168 14.6548 6.04168 15C6.04168 15.3452 6.3215 15.625 6.66668 15.625H13.3333C13.6785 15.625 13.9583 15.3452 13.9583 15C13.9583 14.6548 13.6785 14.375 13.3333 14.375H6.66668Z" />
                  <path
                    d="M13.125 2.29167L16.0417 5.20834H14.1667C13.5913 5.20834 13.125 4.74197 13.125 4.16667V2.29167Z" />
                </svg>
              </span>
            <span class="text">Inventory</span>
          </a>
        </li>
        <!-- Inventory Ends -->

        <!-- Expenses Starts -->
      <li class="nav-item">
        <a href="expenses.php">
          <span class="icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M3.33334 3.35442C3.33334 2.4223 4.07954 1.66666 5.00001 1.66666H15C15.9205 1.66666 16.6667 2.4223 16.6667 3.35442V16.8565C16.6667 17.5519 15.8827 17.9489 15.3333 17.5317L13.8333 16.3924C13.537 16.1673 13.1297 16.1673 12.8333 16.3924L10.5 18.1646C10.2037 18.3896 9.79634 18.3896 9.50001 18.1646L7.16668 16.3924C6.87038 16.1673 6.46298 16.1673 6.16668 16.3924L4.66668 17.5317C4.11731 17.9489 3.33334 17.5519 3.33334 16.8565V3.35442ZM4.79168 5.04218C4.79168 5.39173 5.0715 5.6751 5.41668 5.6751H10C10.3452 5.6751 10.625 5.39173 10.625 5.04218C10.625 4.69264 10.3452 4.40927 10 4.40927H5.41668C5.0715 4.40927 4.79168 4.69264 4.79168 5.04218ZM5.41668 7.7848C5.0715 7.7848 4.79168 8.06817 4.79168 8.41774C4.79168 8.76724 5.0715 9.05066 5.41668 9.05066H10C10.3452 9.05066 10.625 8.76724 10.625 8.41774C10.625 8.06817 10.3452 7.7848 10 7.7848H5.41668ZM4.79168 11.7932C4.79168 12.1428 5.0715 12.4262 5.41668 12.4262H10C10.3452 12.4262 10.625 12.1428 10.625 11.7932C10.625 11.4437 10.3452 11.1603 10 11.1603H5.41668C5.0715 11.1603 4.79168 11.4437 4.79168 11.7932ZM13.3333 4.40927C12.9882 4.40927 12.7083 4.69264 12.7083 5.04218C12.7083 5.39173 12.9882 5.6751 13.3333 5.6751H14.5833C14.9285 5.6751 15.2083 5.39173 15.2083 5.04218C15.2083 4.69264 14.9285 4.40927 14.5833 4.40927H13.3333ZM12.7083 8.41774C12.7083 8.76724 12.9882 9.05066 13.3333 9.05066H14.5833C14.9285 9.05066 15.2083 8.76724 15.2083 8.41774C15.2083 8.06817 14.9285 7.7848 14.5833 7.7848H13.3333C12.9882 7.7848 12.7083 8.06817 12.7083 8.41774ZM13.3333 11.1603C12.9882 11.1603 12.7083 11.4437 12.7083 11.7932C12.7083 12.1428 12.9882 12.4262 13.3333 12.4262H14.5833C14.9285 12.4262 15.2083 12.1428 15.2083 11.7932C15.2083 11.4437 14.9285 11.1603 14.5833 11.1603H13.3333Z" />
            </svg>
          </span>
          <span class="text">Expenses</span>
        </a>
      </li>
      <!-- Expenses Ends -->

        <!-- Activity Starts -->
        <li class="nav-item">
          <a href="toDo.php">
              <span class="icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M4.16666 3.33335C4.16666 2.41288 4.91285 1.66669 5.83332 1.66669H14.1667C15.0872 1.66669 15.8333 2.41288 15.8333 3.33335V16.6667C15.8333 17.5872 15.0872 18.3334 14.1667 18.3334H5.83332C4.91285 18.3334 4.16666 17.5872 4.16666 16.6667V3.33335ZM6.04166 5.00002C6.04166 5.3452 6.32148 5.62502 6.66666 5.62502H13.3333C13.6785 5.62502 13.9583 5.3452 13.9583 5.00002C13.9583 4.65485 13.6785 4.37502 13.3333 4.37502H6.66666C6.32148 4.37502 6.04166 4.65485 6.04166 5.00002ZM6.66666 6.87502C6.32148 6.87502 6.04166 7.15485 6.04166 7.50002C6.04166 7.8452 6.32148 8.12502 6.66666 8.12502H13.3333C13.6785 8.12502 13.9583 7.8452 13.9583 7.50002C13.9583 7.15485 13.6785 6.87502 13.3333 6.87502H6.66666ZM6.04166 10C6.04166 10.3452 6.32148 10.625 6.66666 10.625H9.99999C10.3452 10.625 10.625 10.3452 10.625 10C10.625 9.65485 10.3452 9.37502 9.99999 9.37502H6.66666C6.32148 9.37502 6.04166 9.65485 6.04166 10ZM9.99999 16.6667C10.9205 16.6667 11.6667 15.9205 11.6667 15C11.6667 14.0795 10.9205 13.3334 9.99999 13.3334C9.07949 13.3334 8.33332 14.0795 8.33332 15C8.33332 15.9205 9.07949 16.6667 9.99999 16.6667Z" />
                    </svg>
              </span>
            <span class="text">Activity</span>
          </a>
        </li>
        <!-- Activity Ends -->

      </ul>
    </nav>
  </aside>
  <div class="overlay"></div>
  <!-- ======== sidebar-nav end =========== -->



    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
      <header class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-7 col-md-7 col-6">
              <div class="header-left d-flex align-items-center">
                <div class="menu-toggle-btn mr-15">
                  <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                    <i class="lni lni-chevron-left me-2"></i> Menu
                  </button>
                </div>
                <div class="header-search d-none d-md-flex flex-grow-1 d-flex justify-content-end">
                    <div class="logo-container text-center">
                        <img class="logo-primary-img" src="https://www.malaysiaairlines.com/content/dam/mh/my/en/header-footer/mh-logo-light-theme-142x35px.png" alt="mh-logo-dark-theme" data-v-8c703a7d="">
                    </div>
                </div>
            </div>
          </div>
            <div class="col-lg-5 col-md-5 col-6">
              <div class="header-right">        
                <!-- profile start -->
                <div class="profile-box ml-15">
                  <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="profile-info">
                      <div class="info">
                        <div>
                          <h6 class="fw-500">User</h6>
                        </div>
                      </div>
                    </div>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                    <li>
                      <div class="author-info flex items-center !p-1">
                        <div class="content">
                          <h4 class="text-sm">User</h4>
                        </div>
                      </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="#" onclick="logoutConfirmation('logout.php')">
                        <i class="lni lni-exit"></i> Sign Out
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- profile end -->
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== header end ========== -->

      <!-- ========== section start ========== -->
      <section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>Expenses</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#0">Expenses</a>
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->

          <!-- ========== EXPENSES LABEL ========== -->
          <?php
            include 'connect.php';

            // Function to format the currency as RM
            function formatCurrency($amount) {
                return 'RM ' . number_format($amount, 2);
            }

            // Years to display
            $years = [2021, 2022, 2023];

            foreach ($years as $year) {
              // Query to get the sum of average_price for the specific year
              $query = "SELECT SUM(average_price) AS total_price FROM expenses WHERE YEAR(date) = $year";
              $result = $mysqli->query($query);

              // Check if the query was successful
              if ($result) {
                  $row = $result->fetch_assoc();
                  $sumAveragePrice = $row['total_price'];

                  // Format the sum as RM
                  $formattedSum = formatCurrency($sumAveragePrice);

                  // Check the current year and display the result accordingly
                  if ($year == 2021) {
                      echo '<div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="icon-card mb-30">
                                    <div class="icon orange">
                                        <i class="lni lni-money-location"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="mb-10">Total Expenses (' . $year . ')</h6>
                                        <h3 class="text-bold mb-10">' . $formattedSum . '</h3>
                                    </div>
                                </div> 
                            </div>';
                  } elseif ($year == 2022) {
                      echo '
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="icon-card mb-30">
                                    <div class="icon purple">
                                        <i class="lni lni-money-location"></i>
                                    </div>
                                    <div class="content">
                                        <h6 class="mb-10">Total Expenses (' . $year . ')</h6>
                                        <h3 class="text-bold mb-10">' . $formattedSum . '</h3>
                                    </div>
                                </div>             
                            </div>';
                  } elseif ($year == 2023) {
                      echo '
                          <div class="col-lg-4 col-md-6 col-sm-12">
                              <div class="icon-card mb-30">
                                  <div class="icon blue">
                                      <i class="lni lni-money-location"></i>
                                  </div>
                                  <div class="content">
                                      <h6 class="mb-10">Total Expenses (' . $year . ')</h6>
                                      <h3 class="text-bold mb-10">' . $formattedSum . '</h3>
                                  </div>
                              </div>
                          </div> 
                          </div>';
                  }
              } else {
                  echo "Error: " . $mysqli->error;
              }
            }

            // Close the connection
            $mysqli->close();
            ?>
            <!-- ========== EXPENSES LABEL END ========== -->

            <!-- ========== EXPENSES LINE CHART ========== -->
            <?php
            include 'connect.php';

            // Array to store data for each year
            $dataByYear = [];

            // Query to get the sum of average_price for each year
            $query = "SELECT YEAR(date) AS year, SUM(average_price) AS total_price FROM expenses GROUP BY YEAR(date)";
            $result = $mysqli->query($query);

            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    // Store the data in the array
                    $dataByYear[$row['year']] = $row['total_price'];
                }

                // Close the result set
                $result->close();
            } else {
                echo "Error: " . $mysqli->error;
            }

            // Close the connection
            $mysqli->close();
            ?>

          
          <div class="row">
            <div class="col-lg-6">
              <div class="card-style mb-30">
                <div class="title d-flex flex-wrap justify-content-between">
                  <div class="left">
                  <h6 class="text-medium mb-10"></h6>
                    <h3 class="text-bold">Overall Expenses (Yearly)</h3>
                  </div>
                  <div class="right">
                    <div class="select-style-1">
                      <div class="select-position select-sm">
                        <select class="light-bg">
                          <option value="">All</option>
                          <option value="">Rotable</option>
                        </select>
                      </div>
                    </div>
                    <!-- end select -->
                  </div>
                </div>
                <!-- End Title -->
                <div class="chart">
                  <canvas id="Chart1" style="width: 100%; height: 400px; margin-left: -35px;"></canvas>
                </div>
                <!-- End Chart -->
              </div>
            </div>
            <!-- End Col -->
            <!-- ========== EXPENSES LINE CHART ENDS ========== -->

            <!-- ========== EXPENSES BAR CHART ========== -->
            <?php
            $host = 'localhost';
            $dbname = 'fyp';
            $username = 'root';
            $password = '';

            try {
                $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error: " . $e->getMessage());
            }

            // SQL query to get monthly sum of average_price
            $sql = "
                SELECT
                    MONTH(date) AS month,
                    YEAR(date) AS year,
                    SUM(average_price) AS total_average_price
                FROM
                    expenses
                GROUP BY
                    YEAR(date),
                    MONTH(date)
                ORDER BY
                    YEAR(date) DESC,
                    MONTH(date) ASC;
            ";

            // Execute the query
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Convert the result to JSON
            $jsonData = json_encode($result);
            ?>

            <div class="col-lg-6">
              <div class="card-style mb-30">
                <div class="title d-flex flex-wrap align-items-center justify-content-between">
                  <div class="left">
                  <h3 class="text-bold">Overall Expenses (Monthly)</h3>
                    <h6 class="text-medium mb-10"></h6>
                  </div>
                  <div class="right">
                    <div class="select-style-1">
                      <div class="select-position select-sm">
                        <select id="yearSelect" class="light-bg">
                            <option value=""disabled>Select a year</option>
                            <option value="2023" selected>2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                        </select>
                      </div>
                    </div>
                    <!-- end select -->
                  </div>
                </div>
                <!-- End Title -->
                <div class="chart">
                  <canvas id="Chart2" style="width: 100%; height: 400px; margin-left: -45px;"></canvas>
                </div>
                <!-- End Chart -->
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
          

            <div class="row">
                <div class="col-lg-12">
                  <div class="card-style mb-30">
                    <div class="title d-flex flex-wrap align-items-center justify-content-between">
                      <div class="left">
                        <h6 class="text-medium mb-2">Expenses Forecast</h6>
                      </div>
                      <div class="right">
                        <div class="select-style-1 mb-2">
                          <div class="select-position select-sm">
                            <select class="light-bg">
                              <option value="">Last Month</option>
                              <option value="">Last 3 Months</option>
                              <option value="">Last Year</option>
                            </select>
                          </div>
                        </div>
                        <!-- end select -->
                      </div>
                    </div>
                    <!-- End Title -->
                    <div class="chart">
                      <div id="legend3">
                        <ul class="legend3 d-flex flex-wrap align-items-center mb-30">
                          <li>
                            <div class="d-flex">
                              <span class="bg-color primary-bg"> </span>
                              <div class="text">
                                <p class="text-sm text-success">
                                  <span class="text-dark">Prediction (RM)</span>
                                </p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="d-flex">
                              <span class="bg-color orange-bg"></span>
                              <div class="text">
                                <p class="text-sm text-danger">
                                  <span class="text-dark">Actual (RM)</span>
                                </p>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <canvas id="Chart3" style="width: 100%; height: 450px; margin-left: -35px;"></canvas>
                    </div>
                  </div>
                </div>
                <!-- End Col -->

        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->

      
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/dynamic-pie-chart.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/fullcalendar.js"></script>
    <script src="assets/js/jvectormap.min.js"></script>
    <script src="assets/js/world-merc.js"></script>
    <script src="assets/js/polyfill.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
       // ==== Log Out === //
         function logoutConfirmation(logoutURL) {
        if (confirm("Are you sure you want to log out?")) {
          // User clicked "Yes", perform logout action
          window.location.href = logoutURL;
        } else {
          // User clicked "Cancel", do nothing
            }
      }
 
      // =========== chart one start
      const ctx1 = document.getElementById("Chart1").getContext("2d");
      const chart1 = new Chart(ctx1, {
        type: "line",
        data: {
        labels: Object.keys(<?php echo json_encode($dataByYear); ?>),
        datasets: [
          {
            label: "RM",
            backgroundColor: "transparent",
            borderColor: "#365CF5",
            data: Object.values(<?php echo json_encode($dataByYear); ?>),
            pointBackgroundColor: "transparent",
            pointHoverBackgroundColor: "#365CF5",
            pointBorderColor: "transparent",
            pointHoverBorderColor: "#fff",
            pointHoverBorderWidth: 5,
            borderWidth: 5,
            pointRadius: 8,
            pointHoverRadius: 8,
            cubicInterpolationMode: "monotone",
          },
        ],
      },
        options: {
          plugins: {
            tooltip: {
              callbacks: {
                labelColor: function (context) {
                  return {
                    backgroundColor: "#ffffff",
                    color: "#171717"
                  };
                },
              },
              intersect: false,
              backgroundColor: "#f9f9f9",
              title: {
                fontFamily: "Plus Jakarta Sans",
                color: "#8F92A1",
                fontSize: 12,
              },
              body: {
                fontFamily: "Plus Jakarta Sans",
                color: "#171717",
                fontStyle: "bold",
                fontSize: 16,
              },
              multiKeyBackground: "transparent",
              displayColors: false,
              padding: {
                x: 30,
                y: 10,
              },
              bodyAlign: "center",
              titleAlign: "center",
              titleColor: "#8F92A1",
              bodyColor: "#171717",
              bodyFont: {
                family: "Plus Jakarta Sans",
                size: "16",
                weight: "bold",
              },
            },
            legend: {
              display: false,
            },
          },
          responsive: true,
          maintainAspectRatio: false,
          title: {
            display: false,
          },
          scales: {
            y: {
              grid: {
                display: false,
                drawTicks: false,
                drawBorder: false,
              },
              ticks: {
                padding: 35,
                max: 1200,
                min: 500,
              },
            },
            x: {
              grid: {
                drawBorder: false,
                color: "rgba(143, 146, 161, .1)",
                zeroLineColor: "rgba(143, 146, 161, .1)",
              },
              ticks: {
                padding: 20,
              },
            },
          },
        },
      });
      // =========== chart one end

      // =========== chart two start (LOAD BACKEND)
      document.addEventListener('DOMContentLoaded', function () {
      // Use the JSON data fetched from PHP
      var chartData = <?php echo $jsonData; ?>;

      // Process the data to match your Chart.js structure
      var chartLabels = chartData.map(item => item.month);
      var chartValues = chartData.map(item => item.total_average_price);

      // Convert numerical month values to string representations
      var monthNames = [
          "Jan", "Feb", "Mar", "Apr", "May", "Jun",
          "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
      ];

      // Map numerical month values to string representations
      chartLabels = chartLabels.map(month => monthNames[month - 1]);

      // =========== chart two start (LOAD CONTENT)
      const ctx2 = document.getElementById("Chart2").getContext("2d");
      const chart2 = new Chart(ctx2, {
          type: "bar",
          data: {
              labels: chartLabels,
              datasets: [
                  {
                      label: "Total Spent (RM)",
                      backgroundColor: "#a8ec0c",
                      borderRadius: 30,
                      barThickness: 6,
                      maxBarThickness: 8,
                      data: chartValues,
                  },
              ],
          },
          options: {
            plugins: {
              tooltip: {
                callbacks: {
                  titleColor: function (context) {
                    return "#8F92A1";
                  },
                  label: function (context) {
                    let label = context.dataset.label || "";

                    if (label) {
                      label += ": ";
                    }
                    label += context.parsed.y;
                    return label;
                  },
                },
                backgroundColor: "#F3F6F8",
                titleAlign: "center",
                bodyAlign: "center",
                titleFont: {
                  size: 12,
                  weight: "bold",
                  color: "#8F92A1",
                },
                bodyFont: {
                  size: 16,
                  weight: "bold",
                  color: "#171717",
                },
                displayColors: false,
                padding: {
                  x: 30,
                  y: 10,
                },
            },
            },
            legend: {
              display: false,
              },
            legend: {
              display: false,
            },
            layout: {
              padding: {
                top: 15,
                right: 15,
                bottom: 15,
                left: 15,
              },
            },
            responsive: true,
            maintainAspectRatio: false,
            scales: {
              y: {
                grid: {
                  display: false,
                  drawTicks: false,
                  drawBorder: false,
                },
                ticks: {
                  padding: 35,
                  max: 1200,
                  min: 0,
                },
              },
              x: {
                grid: {
                  display: false,
                  drawBorder: false,
                  color: "rgba(143, 146, 161, .1)",
                  drawTicks: false,
                  zeroLineColor: "rgba(143, 146, 161, .1)",
                },
                ticks: {
                  padding: 20,
                },
              },
            },
            plugins: {
              legend: {
                display: false,
              },
              title: {
                display: false,
              },
            },
          },
        });
        // =========== chart two end   

        // Set the default value of the yearSelect dropdown to "2023"
        document.getElementById('yearSelect').value = "2023";

        // Trigger the change event to update the chart based on the default value
        updateChart("2023");

        // Add an event listener to the yearSelect dropdown
        document.getElementById('yearSelect').addEventListener('change', function () {
            var selectedYear = this.value;

            // Update the chart based on the selected year
            updateChart(selectedYear);
        });

        // Function to update the chart based on the selected year
        function updateChart(selectedYear) {
            // Filter the chartData based on the selected year
            var filteredData = chartData.filter(item => item.year == selectedYear);

            // Update the chart labels and values
            var chartLabels = filteredData.map(item => item.month);
            var chartValues = filteredData.map(item => item.total_average_price);

            // Convert numerical month values to string representations
            chartLabels = chartLabels.map(month => monthNames[month - 1]);

            // Update the chart data
            chart2.data.labels = chartLabels;
            chart2.data.datasets[0].data = chartValues;

            // Update the chart
            chart2.update();
        }
        });

      // =========== chart three start
      const ctx3 = document.getElementById("Chart3").getContext("2d");
      const chart3 = new Chart(ctx3, {
        type: "line",
        data: {
          labels: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          datasets: [
            {
              label: "Prediction (RM)",
              backgroundColor: "transparent",
              borderColor: "#365CF5",
              data: [80, 120, 110, 100, 130, 150, 115, 145, 140, 130, 160, 210],
              pointBackgroundColor: "transparent",
              pointHoverBackgroundColor: "#365CF5",
              pointBorderColor: "transparent",
              pointHoverBorderColor: "#365CF5",
              pointHoverBorderWidth: 3,
              pointBorderWidth: 5,
              pointRadius: 5,
              pointHoverRadius: 8,
              fill: false,
              tension: 0.4,
            }, 
            {
              label: "Actual (RM)",
              backgroundColor: "transparent",
              borderColor: "#f2994a",
              data: [180, 110, 140, 135, 100, 90, 145, 115, 100, 110, 115, 150],
              pointBackgroundColor: "transparent",
              pointHoverBackgroundColor: "#f2994a",
              pointBorderColor: "transparent",
              pointHoverBorderColor: "#f2994a",
              pointHoverBorderWidth: 3,
              pointBorderWidth: 5,
              pointRadius: 5,
              pointHoverRadius: 8,
              fill: false,
              tension: 0.4,
            },
          ],
        },
        options: {
          plugins: {
            tooltip: {
              intersect: false,
              backgroundColor: "#fbfbfb",
              titleColor: "#8F92A1",
              bodyColor: "#272727",
              titleFont: {
                size: 16,
                family: "Plus Jakarta Sans",
                weight: "400",
              },
              bodyFont: {
                family: "Plus Jakarta Sans",
                size: 16,
              },
              multiKeyBackground: "transparent",
              displayColors: false,
              padding: {
                x: 30,
                y: 15,
              },
              borderColor: "rgba(143, 146, 161, .1)",
              borderWidth: 1,
              enabled: true,
            },
            title: {
              display: false,
            },
            legend: {
              display: false,
            },
          },
          layout: {
            padding: {
              top: 0,
            },
          },
          responsive: true,
          // maintainAspectRatio: false,
          legend: {
            display: false,
          },
          scales: {
            y: {
              grid: {
                display: false,
                drawTicks: false,
                drawBorder: false,
              },
              ticks: {
                padding: 35,
              },
              max: 350,
              min: 50,
            },
            x: {
              grid: {
                drawBorder: false,
                color: "rgba(143, 146, 161, .1)",
                drawTicks: false,
                zeroLineColor: "rgba(143, 146, 161, .1)",
              },
              ticks: {
                padding: 20,
              },
            },
          },
        },
      });
      // =========== chart three end

      // ================== chart four start
      const ctx4 = document.getElementById("Chart4").getContext("2d");
      const chart4 = new Chart(ctx4, {
        type: "bar",
        data: {
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
          datasets: [
            {
              label: "",
              backgroundColor: "#365CF5",
              borderColor: "transparent",
              borderRadius: 20,
              borderWidth: 5,
              barThickness: 20,
              maxBarThickness: 20,
              data: [600, 700, 1000, 700, 650, 800],
            },
            {
              label: "",
              backgroundColor: "#d50100",
              borderColor: "transparent",
              borderRadius: 20,
              borderWidth: 5,
              barThickness: 20,
              maxBarThickness: 20,
              data: [690, 740, 720, 1120, 876, 900],
            },
          ],
        },
        options: {
          plugins: {
            tooltip: {
              backgroundColor: "#F3F6F8",
              titleColor: "#8F92A1",
              titleFontSize: 12,
              bodyColor: "#171717",
              bodyFont: {
                weight: "bold",
                size: 16,
              },
              multiKeyBackground: "transparent",
              displayColors: false,
              padding: {
                x: 30,
                y: 10,
              },
              bodyAlign: "center",
              titleAlign: "center",
              enabled: true,
            },
            legend: {
              display: false,
            },
          },
          layout: {
            padding: {
              top: 0,
            },
          },
          responsive: true,
          // maintainAspectRatio: false,
          title: {
            display: false,
          },
          scales: {
            y: {
              grid: {
                display: false,
                drawTicks: false,
                drawBorder: false,
              },
              ticks: {
                padding: 35,
                max: 1200,
                min: 0,
              },
            },
            x: {
              grid: {
                display: false,
                drawBorder: false,
                color: "rgba(143, 146, 161, .1)",
                zeroLineColor: "rgba(143, 146, 161, .1)",
              },
              ticks: {
                padding: 20,
              },
            },
          },
        },
      });
        // =========== chart four end
    </script>
  </body>
</html>
