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
        <a href="all_expenses.php">
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
                          <h4 class="text-sm">Nurul Filzah</h4>
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
                  <h2>Inventory</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#0"> Inventory</a>
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


          <?php
          // Include database connection
          include 'connect.php';

          // Query to get counts for each material class
          $query = "SELECT material_class, COUNT(*) as count FROM parts GROUP BY material_class";

          // Perform the query
          $result = $mysqli->query($query);

          // Check if the query was successful
          if ($result) {
              // Initialize an array to store the counts
              $counts = [
                  'ROTABLE' => 0,
                  'EXPANDABLE' => 0,
                  'CONSUMABLE' => 0
              ];

              // Fetch each row from the result set
              while ($row = $result->fetch_assoc()) {
                  // Assign the count to the respective material class
                  $counts[$row['material_class']] = $row['count'];
              }

              // Close the result set
              $result->close();
          } else {
              // Handle the query error
              echo "Error: " . $query . "<br>" . $mysqli->error;
          }

          // Close the database connection
          $mysqli->close();
          ?>

          <!-- ========== form-elements-wrapper start ========== -->
          <div class="form-elements-wrapper">
            <div class="row">
              <div class="col-lg-4">
                <!-- input style start -->
                <div class="icon-card mb-30">
                        <div class="content">
                            <h6 class="mb-10">ROTABLE</h6>
                            <h3 class="text-bold mb-10"><?php echo $counts['ROTABLE']; ?></h3>
                        </div>
                  <!-- end input -->
                </div>
                <!-- end card -->
                <!-- ======= input style end ======= -->

                <!-- ======= select style start ======= -->
                <div class="icon-card mb-30">
                        <div class="content">
                            <h6 class="mb-10">EXPANDABLE</h6>
                            <h3 class="text-bold mb-10"><?php echo $counts['EXPANDABLE']; ?></h3>
                        </div>
                  <!-- end select -->
                </div>
                <!-- end card -->
                <!-- ======= select style end ======= -->

                <!-- ======= select style start ======= -->
                <div class="card-style mb-30">
                        <div class="content">
                            <h6 class="mb-10">CONSUMABLE</h6>
                            <h3 class="text-bold mb-10"><?php echo $counts['CONSUMABLE']; ?></h3>
                        </div>
                  <!-- end input -->
                </div>
                <!-- end card -->
              <!-- ======= div class="form-elements-wrapper ======= -->
              </div>

              <!-- bar chart shape -->
              <div class="col-lg-8">

            <!-- ========== bar chart starts ========== -->
            <?php
            include 'connect.php';

            $query = "SELECT material_class, COUNT(*) as count FROM parts GROUP BY material_class";
            $result = $mysqli->query($query);

            $data = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $data[$row['material_class']] = $row['count'];
            }

            // Prepare data for Chart.js
            $chartCategories = ['ROTABLE', 'EXPANDABLE', 'CONSUMABLE'];
            $chartCounts = [];

            foreach ($chartCategories as $category) {
                $chartCounts[] = $counts[$category];
            }
            ?>
                <div class="card-style mb-30">
                  <h6 class="mb-25">Material Class</h6>
                  <canvas id="myChart" width="800" height="400"></canvas>
                </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== form-elements-wrapper end ========== -->
        </div>
        <!-- end container -->

          
          <!-- ========== tables-wrapper start ========== -->
          <div class="tables-wrapper">
          <div class="row">
          <div class="col-lg-12">
              <div class="card-style mb-30">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h6 class="mb-10">List of Parts</h6>
                  <p class="text-sm mb-20">
                  This is the list of available parts.
                  </p>
                </div>
                  <div class="right">
                    <div class="select-style-1">
                      <div class="select-position select-sm">
                        <select class="light-bg" onchange="filterTable(this.value)">
                          <option value="">MATERIAL CLASS</option>
                          <option value="ROTABLE">ROTABLE</option>
                          <option value="EXPANDABLE">EXPANDABLE</option>
                          <option value="CONSUMABLE">CONSUMABLE</option>
                        </select>
                      </div>
                    </div>
                    <!-- end select -->
                </div>
              </div>

                  <div class="table-wrapper table-responsive">
                  <div class="table-scroll-x">
                      <table id="inventoryTable" class="table" style="width:100%">
                          <thead>
                              <tr>
                                  <th style="width: 20%;" >
                                      <h6>PART NO</h6>
                                  </th>
                                  <th style="width: 20%;" >
                                      <h6>PART MATCH</h6>
                                  </th>
                                  <th style="width: 40%;" >
                                      <h6>DESCRIPTION</h6>
                                  </th>
                                  <th style="width: 20%;" >
                                      <h6>MATERIAL CLASS</h6>
                                  </th>
                                  <th>
                                      <h6>ACTION</h6>
                                  </th>
                              </tr>
                          </thead>

                          <tbody id="tableBody">
                              <?php
                              // Database connection code
                              include 'connect.php';

                              // Query to retrieve data from the parts table
                              $query = "SELECT part_id, part_no, part_match, description, material_class FROM parts";
                              $result = $mysqli->query($query);

                              // Check if the query was successful
                              if ($result) {
                                  // Fetch each row from the result set
                                  while ($row = $result->fetch_assoc()) {
                                      echo '<tr>';
                                      echo '<td class="min-width">';
                                      echo '<p><a href="#0">' . $row['part_no'] . '</a></p>';
                                      echo '</td>';
                                      echo '<td class="min-width">';
                                      echo '<p><a href="#0">' . $row['part_match'] . '</a></p>';
                                      echo '</td>';
                                      echo '<td class="min-width">';
                                      echo '<p>' . $row['description'] . '</p>';
                                      echo '</td>';
                                      echo '<td class="min-width">';
                                      echo '<p>' . $row['material_class'] . '</p>';
                                      echo '</td>';
                                      echo '<td>';
                                      echo '<button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="false">';
                                      echo '<i class="lni lni-more-alt"></i>';
                                      echo '</button>';
                                      echo '<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">';
                                      echo '<li class="dropdown-item">';
                                      echo '<a href="editPart.php?part_id=' . $row['part_id'] . '" class="text-gray">Edit</a>';
                                      echo '</li>';
                                      echo '<li class="dropdown-item">';
                                      echo '<a href="deletePart.php?part_id=' . $row['part_id'] . '" onclick="return confirmDelete()" class="text-gray">Remove</a>';
                                      echo '</li>';
                                      echo '</ul>';
                                      echo '</td>';
                                      echo '</tr>';
                                  }

                                  // Close the result set
                                  $result->close();
                              } else {
                                  // Handle the query error
                                  echo "Error: " . $query . "<br>" . $mysqli->error;
                              }

                              // Close the database connection
                              $mysqli->close();
                              ?>
                          </tbody>
                      </table>
                  </div>
              </div>
        </div>
        </div>
        </div>


                      <!-- end table row -->
                      </tbody>
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- End Row -->
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
      // ==== Filter material class === //
      function filterTable(selectedMaterialClass) {
        $.ajax({
            url: 'filter_matclass.php', 
            type: 'POST',
            data: { material_class: selectedMaterialClass },
            success: function(response) {
                // Update the table body with the filtered data
                $('#tableBody').html(response);
            },
            error: function(error) {
                console.error('Error fetching filtered data:', error);
            }
        });
    }
      // ==== Log Out === //
      function logoutConfirmation(logoutURL) {
        if (confirm("Are you sure you want to log out?")) {
          // User clicked "Yes", perform logout action
            window.location.href = logoutURL;
        } else {
          // User clicked "Cancel", do nothing
              }
      }

      // ==== BAR CHART === //
      var ctx = document.getElementById('myChart').getContext('2d');
              var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                      labels: <?php echo json_encode($chartCategories); ?>,
                      datasets: [{
                          label: 'Total',
                          data: <?php echo json_encode($chartCounts); ?>,
                          backgroundColor: [
                              'rgba(77, 206, 255)',
                              'rgba(0, 204, 68)',
                              'rgba(255, 179, 25)',
                          ],
                          borderColor: [
                              'rgba(77, 206, 255, 1)',
                              'rgba(0, 204, 68, 1)',
                              'rgba(255, 179, 25, 1)',
                          ],
                          borderWidth: 1,
                      }],
                  },
                  options: {
                      scales: {
                          y: {
                              beginAtZero: true,
                          },
                      },
                  },
              });

        // ======== delete action ======== //
        function confirmDelete() {
        return confirm("Are you sure you want to delete this entry?");
      }

            //scroll data table
      new DataTable('#inventoryTable', {
          scrollX: true
      });
  
      //static data table
    //   $(document).ready(function () {
    //     // Initialize DataTable
    //     $('#inventory').DataTable();
    // });

      // ======== jvectormap activation
      var markers = [
        { name: "Egypt", coords: [26.8206, 30.8025] },
        { name: "Russia", coords: [61.524, 105.3188] },
        { name: "Canada", coords: [56.1304, -106.3468] },
        { name: "Greenland", coords: [71.7069, -42.6043] },
        { name: "Brazil", coords: [-14.235, -51.9253] },
      ];

      var jvm = new jsVectorMap({
        map: "world_merc",
        selector: "#map",
        zoomButtons: true,

        regionStyle: {
          initial: {
            fill: "#d1d5db",
          },
        },

        labels: {
          markers: {
            render: (marker) => marker.name,
          },
        },

        markersSelectable: true,
        selectedMarkers: markers.map((marker, index) => {
          var name = marker.name;

          if (name === "Russia" || name === "Brazil") {
            return index;
          }
        }),
        markers: markers,
        markerStyle: {
          initial: { fill: "#4A6CF7" },
          selected: { fill: "#ff5050" },
        },
        markerLabelStyle: {
          initial: {
            fontWeight: 400,
            fontSize: 14,
          },
        },
      });
      // ====== calendar activation
      document.addEventListener("DOMContentLoaded", function () {
        var calendarMiniEl = document.getElementById("calendar-mini");
        var calendarMini = new FullCalendar.Calendar(calendarMiniEl, {
          initialView: "dayGridMonth",
          headerToolbar: {
            end: "today prev,next",
          },
        });
        calendarMini.render();
      });

    </script>
  </body>
</html>
