<?php
// Include the database connection file
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Employee Data</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="center">
        <h1>Employee Records</h1>

        <!-- Table to display records -->
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch records from the database
                $query = "SELECT * FROM form";
                $data = mysqli_query($conn, $query);

                // Check if records exist
                if ($data->num_rows > 0) {
                    // Loop through each record and display in table
                    while ($row = $data->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['emp_name']}</td>
                            <td>{$row['emp_gender']}</td>
                            <td>{$row['emp_email']}</td>
                            <td>{$row['emp_department']}</td>
                            <td>{$row['emp_address']}</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <br>
        <a href="form.php" class="btn">Back to Home</a>
    </div>
</body>
</html>
