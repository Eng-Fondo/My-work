<?php
include 'db.php';

// Get next pending graduand
$sql = "SELECT * FROM graduands WHERE status='pending' ORDER BY id ASC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $grad = $result->fetch_assoc();
    $conn->query("UPDATE graduands SET status='shown' WHERE id=" . $grad['id']);
    echo json_encode($grad);
} else {
    // Reset all to pending when finished
    $conn->query("UPDATE graduands SET status='pending'");
    echo json_encode(['full_name' => '', 'degree' => '']);
}
?>

