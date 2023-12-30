<?php
include 'connect.php';

if (isset($_POST['status'])) {
    $status = $_POST['status'];

    // Use prepared statements to prevent SQL injection
    if (empty($status) || $status === 'all') {
        // If no specific status is selected or 'all' is selected, retrieve all rows
        $query = "SELECT defect_id, defect_description, aircraft_id, defect_type, issueDateTime, status FROM defects";
        $stmt = $mysqli->prepare($query);
    } else {
        // If a specific status is selected, filter by that status
        $query = "SELECT defect_id, defect_description, aircraft_id, defect_type, issueDateTime FROM defects WHERE status = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("s", $status);
    }

    $stmt->execute();
    $result = $stmt->get_result();

    // Check if there are rows in the result
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // Output table row as before
            echo "<tr>";
            echo '<td class="min-width">';
            echo '<div class="lead">';
            echo '<div class="lead-text">';
            echo '<p>' . $row['defect_id'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</td>';
            echo '<td class="min-width">';
            echo '<p>' . $row['defect_description'] . '</p>';
            echo '</td>';
            echo '<td class="min-width">';
            echo '&nbsp;';
            echo '</td>';
            echo '<td class="min-width">';
            echo '<p>' . $row['aircraft_id'] . '</p>';
            echo '</td>';
            echo '<td class="min-width">';
            echo '&nbsp;';
            echo '</td>';
            echo '<td class="min-width">';
            echo '<p>' . $row['defect_type'] . '</p>';
            echo '</td>';
            echo '<td class="min-width">';
            echo '<p>' . $row['issueDateTime'] . '</p>';
            echo '</td>';
            echo '<td class="min-width">';
            echo '&nbsp;';
            echo '</td>';
            echo '<td class="min-width">';
            echo '<p>' . $row['status'] . '</p>';
            echo '</td>';
            echo '<td>';
            echo '<button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="false">';
            echo '<i class="lni lni-more-alt"></i>';
            echo '</button>';
            echo '<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">';
            echo '<li class="dropdown-item">';
            echo '<a href="editIssue.php?defect_id=' . $row['defect_id'] . '" class="text-gray">Edit</a>';
            echo '</li>';
            echo '<li class="dropdown-item">';
            echo '<a href="deleteIssue.php?defect_id=' . $row['defect_id'] . '" onclick="return confirmDelete()" class="text-gray">Remove</a>';
            echo '</li>';
            echo '</ul>';
            echo '</td>';
            echo '</tr>';
        }
    } else {
        echo "<tr><td colspan='9'>No data available</td></tr>";
    }

    $stmt->close();
}

$mysqli->close();
?>