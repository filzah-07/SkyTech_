           <!-- ========== pie chart starts ========== -->
           <?php
                  include 'connect.php';

                  $query = "SELECT status, COUNT(*) as count FROM defects GROUP BY status";
                  $result = $mysqli->query($query);

                  $data = [];
                  while ($row = mysqli_fetch_assoc($result)) {
                      $data[$row['status']] = $row['count'];
                  }

                  // Prepare data for Chart.js
                  $chartCategories = ['OPEN', 'CLOSED'];
                  $chartCounts = [];

                  foreach ($chartCategories as $category) {
                      $chartCounts[] = isset($data[$category]) ? $data[$category] : 0;
                  }
                  ?>


    <div class="card-style mb-10">
        <h6 class="mb-25">Pie Chart</h6>
        <canvas id="myChart" width="20" height="10"></canvas>
    </div>

    <!-- Add your JavaScript links here -->
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
        // ==== PIE CHART === //
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($chartCategories); ?>,
                datasets: [{
                    label: 'Status',
                    data: <?php echo json_encode($chartCounts); ?>,
                    backgroundColor: [
                      'rgb(255, 99, 132)',
                      'rgb(54, 162, 235)',
                    ],
                    hoverOffset: 4
                }],
            },
        });
    </script>