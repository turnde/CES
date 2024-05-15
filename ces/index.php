<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Operations</title>
    
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php
    require_once 'db.php';

    // CRUD operations
    if(isset($_POST['submit'])) {
        $action = $_POST['action'];

        switch($action) {
            case 'create':
                // Code for creating a new record
                break;

            case 'read':
                // Code for reading records
                break;

            case 'update':
                // Code for updating records
                break;

            case 'delete':
                // Code for deleting records
                break;

            default:
                // Handle invalid action
        }
    }
    ?>

    <!-- Create Form -->
    <h2>Create Show</h2>
    <form method="post">
        <input type="hidden" name="action" value="create">
        <input type="text" name="cust_name" placeholder="Customer Name" required><br>
        <input type="text" name="show_name" placeholder="Show Name" required><br>
        <input type="date" name="show_date" required><br>
        <input type="date" name="rain_date" required><br>
        <input type="text" name="show_time" placeholder="Show Time" required><br>
        <input type="number" name="show_budget" placeholder="Show Budget" required><br>
        <input type="number" name="show_length" placeholder="Show Length" required><br>
        <label>Overnight Storage: </label>
        <input type="checkbox" name="overnight_storage"><br>
        <input type="number" name="min_shell" placeholder="Min Shell" required><br>
        <input type="number" name="max_shell" placeholder="Max Shell" required><br>
        <label>Fee Based Tech: </label>
        <input type="checkbox" name="fee_based_tech"><br>
        <input type="number" name="fee_based_percent" placeholder="Fee Based Percent" required><br>
        <input type="number" name="permit_fees" placeholder="Permit Fees" required><br>
        <label>Hotel Needed: </label>
        <input type="checkbox" name="hotel_needed"><br>
        <input type="text" name="site_lat_long" placeholder="Site Lat Long" required><br>
        <input type="text" name="site_address_1" placeholder="Site Address 1" required><br>
        <input type="text" name="site_address_2" placeholder="Site Address 2"><br>
        <input type="text" name="site_city" placeholder="Site City" required><br>
        <input type="text" name="site_state" placeholder="Site State" required><br>
        <input type="text" name="site_zip" placeholder="Site Zip" required><br>
        <input type="text" name="lead_tech" placeholder="Lead Tech" required><br>
        <input type="text" name="firing_method" placeholder="Firing Method" required><br>
        <input type="text" name="office" placeholder="Office" required><br>
        <input type="text" name="show_owner" placeholder="Show Owner" required><br>
        <button type="submit" name="submit">Create</button>
    </form>

    <!-- Read Data -->
    <h2>Show Data</h2>
    <?php
    // Display data from the 'show' table
    $sql = "SELECT * FROM `show`";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Show ID</th><th>Customer Name</th><th>Show Name</th><th>Show Date</th><th>Rain Date</th><th>Show Time</th><th>Show Budget</th><th>Show Length</th><th>Overnight Storage</th><th>Min Shell</th><th>Max Shell</th><th>Fee Based Tech</th><th>Fee Based Percent</th><th>Permit Fees</th><th>Hotel Needed</th><th>Site Lat Long</th><th>Site Address 1</th><th>Site Address 2</th><th>Site City</th><th>Site State</th><th>Site Zip</th><th>Lead Tech</th><th>Firing Method</th><th>Office</th><th>Show Owner</th><th>Action</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["show_id"]."</td>";
            echo "<td>".$row["cust_name"]."</td>";
            echo "<td>".$row["show_name"]."</td>";
            echo "<td>".$row["show_date"]."</td>";
            echo "<td>".$row["rain_date"]."</td>";
            echo "<td>".$row["show_time"]."</td>";
            echo "<td>".$row["show_budget"]."</td>";
            echo "<td>".$row["show_length"]."</td>";
            echo "<td>".$row["overnight_storage"]."</td>";
            echo "<td>".$row["min_shell"]."</td>";
            echo "<td>".$row["max_shell"]."</td>";
            echo "<td>".$row["fee_based_tech"]."</td>";
            echo "<td>".$row["fee_based_percent"]."</td>";
            echo "<td>".$row["permit_fees"]."</td>";
            echo "<td>".$row["hotel_needed"]."</td>";
            echo "<td>".$row["site_lat_long"]."</td>";
            echo "<td>".$row["site_address_1"]."</td>";
            echo "<td>".$row["site_address_2"]."</td>";
            echo "<td>".$row["site_city"]."</td>";
            echo "<td>".$row["site_state"]."</td>";
            echo "<td>".$row["site_zip"]."</td>";
            echo "<td>".$row["lead_tech"]."</td>";
            echo "<td>".$row["firing_method"]."</td>";
            echo "<td>".$row["office"]."</td>";
            echo "<td>".$row["show_owner"]."</td>";
            echo "<td><a href='#' class='btn btn-edit'>Edit</a> <a href='#' class='btn btn-delete'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    ?>
</body>
</html>

<?php
// Close database connection
$conn->close();
?>
