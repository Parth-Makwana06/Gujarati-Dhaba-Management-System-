<?php
include('db.php');
?>
<link rel="stylesheet" href="styles.css">
<h1>Gujarati Dhaba Menu</h1>

<div class="container">
<?php
$sql = "SELECT * FROM menu_items";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='menu-card'>";
        echo "<h3>".$row['item_name']."</h3>";
        echo "<p>".$row['description']."</p>";
        echo "<p>₹".$row['price']."</p>";
        echo "</div>";
    }
} else {
    echo "No menu items found.";
}
?>
</div>