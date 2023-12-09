<?php
include 'connect.php';

if (isset($_POST['material_class'])) {
    $materialClass = $_POST['material_class'];
    echo $materialClass;

    // Use prepared statements to prevent SQL injection
    if (empty($materialClass)) {
        // If no specific material class is selected, retrieve all rows
        $query = "SELECT part_id, part_no, part_match, description, material_class FROM parts";
        $stmt = $mysqli->prepare($query);
    } else {
        // If a specific material class is selected, filter by that class
        $query = "SELECT part_id, part_no, part_match, description, material_class FROM parts WHERE material_class = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("s", $materialClass);
    }

    $stmt->execute();
    $result = $stmt->get_result();

    // Check if there are rows in the result
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // Output table row 
            echo "<tr>";
            echo '<td class="min-width">';
            echo '<div class="lead">';
            echo '<div class="lead-text">';
            echo '<p>' . $row['part_id'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</td>';
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
    } else {
        echo "<tr><td colspan='6'>No data available</td></tr>";
    }

    $stmt->close();
}

$mysqli->close();
?>
