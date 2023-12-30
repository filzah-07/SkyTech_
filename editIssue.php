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

<body class="bg-light">

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-lg-9">

            <?php
            include "connect.php";

            $defect_id = "";
            $aircraft_id = "";
            $defect_type = "";
            $issue_date = "";
            $issue_time = "";
            $status = "";
            $defect_description = "";

            $error = "";
            $success = "";

            // Check if the defect_id is provided in the URL
            if (!isset($_GET['defect_id'])) {
                header("Location: raiseIssue.php");
                exit;
            }

            // Retrieve defect_id from the URL
            $defect_id = $_GET['defect_id'];

            // Fetch data from the database based on defect_id
            $sql = "SELECT 
                        defect_id, aircraft_id, defect_type, defect_description, status,
                        DATE(issueDateTime) AS issue_date,
                        TIME(issueDateTime) AS issue_time
                    FROM defects
                    WHERE defect_id = '$defect_id'";
            $result = $mysqli->query($sql);

            // Check if a valid row is retrieved
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                // Assign values to variables
                $defect_id = $row["defect_id"];
                $aircraft_id = $row["aircraft_id"];
                $defect_type = $row["defect_type"];
                $issue_date = $row["issue_date"];
                $issue_time = $row["issue_time"];
                $status = $row["status"];
                $defect_description = $row["defect_description"];
            } else {
                header("Location: raiseIssue.php");
                exit;
            }

            // Handle form submission
            if ($_SERVER["REQUEST_METHOD"] == 'POST') {
                // Retrieve form data
                $defect_id = $_POST["defect_id"];
                $aircraft_id = $_POST["aircraft_id"];
                $defect_type = $_POST["defect_type"];
                $issue_date = isset($_POST["issue_date"]) ? $_POST["issue_date"] : $issue_date;
                $issue_time = isset($_POST["issue_time"]) ? $_POST["issue_time"] : "";
                $status = $_POST["status"];
                $defect_description = $_POST["defect_description"];

                // Combine date and time
                $issueDateTime = $issue_date . ' ' . $issue_time;

                // Update data in the database
                $sql = "UPDATE defects SET 
                            aircraft_id='$aircraft_id',
                            defect_type='$defect_type', 
                            issueDateTime='$issueDateTime', 
                            defect_description='$defect_description', 
                            status='$status' 
                        WHERE defect_id='$defect_id'";
                
                $result = $mysqli->query($sql);

                if ($result) {
                    $success = "Issue updated successfully.";
                    echo '<script>alert("Issue updated successfully."); 
                        window.location.href = "mainMenu.php";</script>';
                } else {
                    $error = "Error updating issue: " . $mysqli->error;
                }
            }
            ?>


                <!-- Form Structure -->
                <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-12">
                <h2 class="text-center mb-4 custom-margin-top">Update Issue/Defect Form</h2>
                <form action="" method="post">

                    <div class="card mb-4">
                        <div class="card-body">

                            <h6 class="mb-4">Input Fields</h6>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label">DEFECT ID</label>
                                    <input type="text" class="form-control" name="defect_id" value="<?php echo $defect_id; ?>" required/>
                                    <small class="form-text text-danger">* This field is required.</small>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">AIRCRAFT EFFECTED</label>
                                    <textarea class="form-control" name="aircraft_id" placeholder="TYPE HERE..." rows="1" required><?php echo $aircraft_id; ?></textarea>
                                    <small class="form-text text-danger">* This field is required.</small>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">DEFECT TYPE</label>
                                    <select class="form-select" name="defect_type" required>
                                        <option value="">SELECT CATEGORY</option>
                                        <option value="PILOT" <?php echo ($defect_type == 'PILOT') ? 'selected' : ''; ?>>PILOT</option>
                                        <option value="MAINTENANCE" <?php echo ($defect_type == 'MAINTENANCE') ? 'selected' : ''; ?>>MAINTENANCE</option>
                                        <option value="CABIN" <?php echo ($defect_type == 'CABIN') ? 'selected' : ''; ?>>CABIN</option>
                                    </select>
                                    <small class="form-text text-danger">* This field is required.</small>
                                </div>
                            </div>

                            <div class="row mb-3">   
                                <div class="col-md-4">
                                    <label class="form-label">ISSUE DATE</label>
                                    <input type="date" class="form-control" name="issue_date" value="<?php echo $issue_date; ?>" required />
                                    <small class="form-text text-danger">* This field is required.</small>
                                </div>


                                <div class="col-md-4">
                                    <label class="form-label">ISSUE TIME</label>
                                    <input type="time" class="form-control" name="issue_time" value="<?php echo $issue_time; ?>" required/>
                                    <small class="form-text text-danger">* This field is required.</small>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">STATUS</label>
                                    <select class="form-select" name="status">
                                        <option value="">SELECT CATEGORY</option>
                                        <option value="OPEN" <?php echo ($status == 'OPEN') ? 'selected' : ''; ?>>OPEN</option>
                                        <option value="CLOSED" <?php echo ($status == 'CLOSED') ? 'selected' : ''; ?>>CLOSED</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">DEFECT DESCRIPTION</label>
                                <textarea class="form-control" name="defect_description" placeholder="TYPE HERE..." rows="5" required><?php echo $defect_description; ?></textarea>
                                <small class="form-text text-danger">* This field is required.</small>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                                <div class="col-md-6 text-end">
                                    <button type="button" class="btn btn-danger" id="cancelButton">Cancel</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>  
            </div>
        </div>
    </div>

</body>
</html>

<script>
    // JavaScript to handle the cancel button click
    document.getElementById('cancelButton').addEventListener('click', function() {
        // You can redirect the user to another page or perform any other action
        window.location.href = "mainMenu.php";
    });
</script>
