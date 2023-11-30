
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

                    $part_no = "";
                    $part_match = "";
                    $description = "";
                    $material_class = "";

                    $error = "";
                    $success = "";

                    // Check if the part_id is provided in the URL
                    if (!isset($_GET['part_id'])) {
                        header("Location: managePart.php");
                        exit;
                    }

                    // Retrieve part_id from the URL
                    $part_id = $_GET['part_id'];

                    // Fetch data from the database based on part_id
                    $sql = "SELECT * FROM parts WHERE part_id = '$part_id'";
                    $result = $mysqli->query($sql);
                    $row = $result->fetch_assoc();

                    // Check if a valid row is retrieved
                    if (!$row) {
                        header("Location: managePart.php");
                        exit;
                    }

                    // Assign values to variables
                    $part_no = $row["part_no"];
                    $part_match = $row["part_match"];
                    $description = $row["description"];
                    $material_class = $row["material_class"];

                    // Handle form submission
                    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
                        $part_no =$_POST["part_no"];
                        $part_match = $_POST["part_match"];
                        $description = $_POST["description"];
                        $material_class = $_POST["material_class"];

                        // Update data in the database
                        $sql = "UPDATE parts SET part_no='$part_no', part_match='$part_match', description='$description', material_class='$material_class' WHERE part_id='$part_id'";
                        $result = $mysqli->query($sql);

                        if ($result) {
                            $success = "Part updated successfully.";
                            echo '<script>alert("Part updated successfully."); 
                                window.location.href = "inventory.php";</script>';
                        } else {
                            $error = "Error updating part: " . $mysqli->error;
                        }
                    }
                ?>

                <!-- Form Structure -->
                <h2 class="text-center mb-4">Update Part Form</h2>
                <form action="" method="post">
                    <div class="form-elements-wrapper">
                        <div class="card-style mb-30">
                            <h6 class="mb-25">Input Fields</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-style-1">
                                        <label>PART NO</label>
                                        <input type="text" name="part_no" value="<?php echo $part_no; ?>" />
                                        <small class="form-text text-danger">* This field is required.</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-style-2">
                                        <label>PART MATCH</label>
                                        <input type="text" name="part_match" value="<?php echo $part_match; ?>" />
                                        <small class="form-text text-danger">* This field is required.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="input-style-2">
                                <label>DESCRIPTION</label>
                                <textarea name="description" rows="5"><?php echo $description; ?></textarea>
                                <small class="form-text text-danger">* This field is required.</small>
                            </div>
                            <div class="input-style-2">
                                <label>MATERIAL CLASS</label>
                                <div class="select-position">
                                    <select name="material_class">
                                        <option value="">SELECT CATEGORY</option>
                                        <option value="ROTABLE" <?php echo ($material_class == 'ROTABLE') ? 'selected' : ''; ?>>ROTABLE</option>
                                        <option value="EXPANDABLE" <?php echo ($material_class == 'EXPANDABLE') ? 'selected' : ''; ?>>EXPANDABLE</option>
                                        <option value="CONSUMABLE" <?php echo ($material_class == 'CONSUMABLE') ? 'selected' : ''; ?>>CONSUMABLE</option>
                                    </select>
                                    <small class="form-text text-danger">* This field is required.</small>
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
        window.location.href = "inventory.php";
    });
</script>
