<?php
include 'connect.php';

$query = "SELECT material_class, COUNT(*) as count FROM parts GROUP BY material_class";
$result = $mysqli->query($query);

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[$row['material_class']] = $row['count'];
}

// Prepare data for Chart.js
$categories = [];
$counts = [];

foreach ($data as $category => $count) {
    $categories[] = $category;
    $counts[] = $count;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Material Class Chart</title>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>


    <div class="row">
        <!-- Bar Chart (8 columns) -->
        <div class="col-xl-8 col-lg-8 col-sm-12">
            <!-- Bar Chart Canvas -->

                    <canvas id="myChart" width="800" height="400"></canvas>
                </div>
            </div>

            <script>
                // ... (your bar chart script) ...
            </script>
        </div>
    </div>
</div>


    <canvas id="myChart" width="100" height="200"></canvas>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($categories); ?>,
                datasets: [{
                    label: 'Material Class Counts',
                    data: <?php echo json_encode($counts); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
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
    </script>

</body>
</html>
