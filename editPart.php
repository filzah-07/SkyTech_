<?php
include "connect.php";

$part_no = "";
$part_match = "";
$description = "";
$material_class = "";

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    if (!isset($_GET['part_id'])) {
        header("Location: inventory.php");
        exit;
    }
    $part_id = $_GET['part_id']; // Fix: Correct variable name
    $sql = "SELECT * FROM parts WHERE part_id = '$part_id'";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();
    if (!$row) {
        header("Location: managePart.php");
        exit;
    }
    $part_no = $row["part_no"];
    $part_match = $row["part_match"];
    $description = $row["description"];
    $material_class = $row["material_class"];
} elseif ($_SERVER["REQUEST_METHOD"] == 'POST') { // Fix: Use elseif for clarity
    $part_no = $_POST["part_no"];
    $part_match = $_POST["part_match"];
    $description = $_POST["description"];
    $material_class = $_POST["material_class"];

    $sql = "UPDATE parts SET part_match='$part_match', description='$description', material_class='$material_class' WHERE part_no='$part_no'";
    $result = $mysqli->query($sql);

    if ($result) {
        $success = "Part updated successfully.";
        echo '<script>alert("Part updated successfully."); 
              window.location.href = "managePart.php";</script>';
    } else {
        $error = "Error updating part: " . $mysqli->error;
    }
}

?>

<!-- Add a form in your HTML to submit the data -->
<form action="" method="post">
    <!-- Input fields with values from the database -->
    <input type="hidden" name="part_no" value="<?php echo $part_no; ?>">
    <label>PART MATCH</label>
    <input type="text" name="part_match" value="<?php echo $part_match; ?>" />
    <label>DESCRIPTION</label>
    <textarea name="description"><?php echo $description; ?></textarea>
    <label>MATERIAL CLASS</label>
    <input type="text" name="material_class" value="<?php echo $material_class; ?>" />
    <!-- Submit button -->
    <button type="submit">Update Part</button>
</form>
