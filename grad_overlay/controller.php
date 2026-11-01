<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Graduation Controller</title>
<style>
body { font-family: Arial, sans-serif; background: #f8f9fa; }
table { width: 60%; margin: auto; border-collapse: collapse; }
th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
button { padding: 6px 12px; background: #007bff; color: #fff; border: none; border-radius: 5px; }
</style>
</head>
<body>
<h2 style="text-align:center;">🎓 Graduation Overlay Controller</h2>

<table>
<tr><th>ID</th><th>Full Name</th><th>Degree</th><th>Status</th><th>Action</th></tr>
<?php
$result = $conn->query("SELECT * FROM graduands ORDER BY id ASC");
while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['full_name']}</td>
            <td>{$row['degree']}</td>
            <td>{$row['status']}</td>
            <td><a href='?show={$row['id']}'><button>Show</button></a></td>
          </tr>";
}
if (isset($_GET['show'])) {
    $id = intval($_GET['show']);
    $conn->query("UPDATE graduands SET status='shown' WHERE id=$id");
    $conn->query("UPDATE graduands SET status='pending' WHERE id!=$id");
    header("Location: controller.php");
}
?>
</table>
</body>
</html>
