
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
            <div class="col-lg-6">

            <?php
            include "connect.php";

            $defect_id = "";
            $defect_type = "";
            $issue_date = "";
            $issue_time = "";
            $defect_description = "";
            $action_id = "";
            $action_date = "";
            $action_time = "";
            $action_description = "";
            $status = "";
            $closed_date = "";
            $closed_time = "";

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
                        defect_id, defect_type, defect_description, action_id, action_description, status,
                        DATE(issueDateTime) AS issue_date,
                        TIME(issueDateTime) AS issue_time,
                        DATE(action_start_time) AS action_date,
                        TIME(action_start_time) AS action_time,
                        DATE(closedDateTime) AS closed_date,
                        TIME(closedDateTime) AS closed_time
                    FROM defects
                    WHERE defect_id = '$defect_id'";
            $result = $mysqli->query($sql);

            // Check if a valid row is retrieved
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                // Assign values to variables
                $defect_id = $row["defect_id"];
                $defect_type = $row["defect_type"];
                $issue_date = $row["issue_date"];
                $issue_time = $row["issue_time"];
                $defect_description = $row["defect_description"];
                $action_id = $row["action_id"];
                $action_date = $row["action_date"];
                $action_time = $row["action_time"];
                $action_description = $row["action_description"];
                $status = $row["status"];
                $closed_date = $row["closed_date"];
                $closed_time = $row["closed_time"];
            } else {
                header("Location: raiseIssue.php");
                exit;
            }

            // Handle form submission
            if ($_SERVER["REQUEST_METHOD"] == 'POST') {
                // Retrieve form data
                $defect_id = $_POST["defect_id"];
                $defect_type = $_POST["defect_type"];
                $issue_date = isset($_POST["issue_date"]) ? $_POST["issue_date"] : $issue_date;
                $issue_time = isset($_POST["issue_time"]) ? $_POST["issue_time"] : "";
                $defect_description = $_POST["defect_description"];
                $action_id = $_POST["action_id"];
                $action_date = isset($_POST["action_date"]) ? $_POST["action_date"] : $action_date;
                $action_time = isset($_POST["action_time"]) ? $_POST["action_time"] : "";
                $action_description = $_POST["action_description"];
                $status = $_POST["status"];
                $closed_date = isset($_POST["closed_date"]) ? $_POST["closed_date"] : $closed_date;
                $closed_time = isset($_POST["closed_time"]) ? $_POST["closed_time"] : "";

                // Combine date and time
                $issueDateTime = $issue_date . ' ' . $issue_time;
                $actionStartTime = $action_date . ' ' . $action_time;
                $closedTimeFinal = $closed_date . ' ' . $closed_time;

                // Update data in the database
                $sql = "UPDATE defects SET 
                            defect_type='$defect_type', 
                            issueDateTime='$issueDateTime', 
                            defect_description='$defect_description', 
                            action_id='$action_id', 
                            action_start_time='$actionStartTime', 
                            action_description='$action_description', 
                            status='$status', 
                            closedDateTime='$closedTimeFinal' 
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
                <h2 class="text-center mb-4" style="margin-top: 20px;">Update Issue/Defect Form</h2>
                <form action="" method="post">
                    <div class="form-elements-wrapper">
                        <div class="card-style mb-30">
                            <h6 class="mb-25">Input Fields</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-style-1">
                                        <label>DEFECT ID</label>                             
                                        <input type="text" name="defect_id" value="<?php echo $defect_id; ?>" required/>
                                        <small class="form-text text-danger">* This field is required.</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="select-style-1">
                                    <label>DEFECT TYPE</label>
                                    <div class="select-position"> 
                                        <select name="defect_type" required>
                                            <option value="">SELECT CATEGORY</option>
                                            <option value="PILOT" <?php echo ($defect_type == 'PILOT') ? 'selected' : ''; ?>>PILOT</option>
                                            <option value="MAINTENANCE" <?php echo ($defect_type == 'MAINTENANCE') ? 'selected' : ''; ?>>MAINTENANCE</option>
                                            <option value="CABIN" <?php echo ($defect_type == 'CABIN') ? 'selected' : ''; ?>>CABIN</option>
                                        </select>
                                    </div>
                                    <small class="form-text text-danger">* This field is required.</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-style-1">
                                    <label>ISSUE DATE</label>
                                    <input type="date" name="issue_date" value="<?php echo $issue_date; ?>" required />
                                    <small class="form-text text-danger">* This field is required.</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-style-2">
                                    <label>ISSUE TIME</label>
                                    <input type="time" name="issue_time" value="<?php echo $issue_time; ?>" required/>
                                    <small class="form-text text-danger">* This field is required.</small>
                                    </div>
                                </div> 
                                <div class="input-style-2">
                                    <label>DEFECT DESCRIPTION</label>
                                    <textarea name="defect_description" placeholder="TYPE HERE..." rows="5" required><?php echo $defect_description; ?></textarea>
                                    <small class="form-text text-danger">* This field is required.</small>

                                </div>

                                <!-- Add a horizontal line to separate sections -->
                                <hr class="section-divider">
                                <h6 class="mb-25">Please update the details accordingly.</h6>

                                <div class="col-md-4">
                                    <div class="input-style-1">
                                    <label>ACTION ID</label>
                                    <input type="text" name="action_id" value="<?php echo $action_id; ?>" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-style-1">
                                    <label>ACTION DATE</label>
                                    <input type="date" name="action_date" value="<?php echo $action_date; ?>"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-style-2">
                                    <label>ACTION TIME</label>
                                    <input type="time" name="action_time" value="<?php echo $action_time; ?>"/>
                                    </div>
                                </div>
                                <div class="input-style-2">
                                    <label>ACTION DESCRIPTION</label>
                                    <textarea name="action_description" placeholder="TYPE HERE..." rows="5"><?php echo $action_description; ?></textarea>
                                </div>

                        <!-- Add a horizontal line to separate sections -->
                        <hr class="section-divider">
                        <h6 class="mb-25">Please update the details accordingly.</h6>

                        <div class="col-md-4">
                        <div class="select-style-1">
                            <label>STATUS</label>
                            <div class="select-position"> 
                            <select name="status">
                                    <option value="">SELECT CATEGORY</option>
                                    <option value="OPEN" <?php echo ($status == 'OPEN') ? 'selected' : ''; ?>>OPEN</option>
                                    <option value="CLOSED" <?php echo ($status == 'CLOSED') ? 'selected' : ''; ?>>CLOSED</option>
                                </select>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-style-1">
                              <label>CLOSED DATE</label>
                              <input type="date" name="closed_date" value="<?php echo $closed_date; ?>"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-style-2">
                            <label>CLOSED TIME</label>
                              <input type="time" name="closed_time" value="<?php echo $closed_time; ?>"/>
                            </div>
                        </div>
                        <div class="button-container row">
                            <div class="col-md-6">
                                <button type="submit" class="main-btn primary-btn rounded-full btn-hover">Update</button> 
                            </div>
                            <div class="col-md-6 text-end">
                                <button type="button" class="main-btn danger-btn rounded-full btn-hover" id="cancelButton">Cancel</button>
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
