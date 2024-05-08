<?php
require_once("functions/connect.php");

$staffId = "";
$name = "";
$username = "";
$email = "";
$phoneNumber = "";
$gender = "";
$dateOfBirth = "";

$errorMsg = [];
$row;

$sql = "SELECT staffId, name, username, email, phoneNumber, gender, dateOfBirth FROM staff";
$statement = $conn->prepare($sql); // Prepare statement to execute query

if ($statement) {
    $errorMsg[] = "Query preparation error: " . $conn->error;
}

if ($statement->execute()) {
    $result = $statement->get_result();

    if ($result) {
        $row = $result->fetch_assoc(); // Fetch row
        $staffId = $row["staffId"];
        $name = $row["name"];
        $username = $row["username"];
        $email = $row["email"];
        $phoneNumber = $row["phoneNumber"];
        $gender = $row["gender"];
        $dateOfBirth = $row["dateOfBirth"];
    }
    else {
        $errorMsg[] = "No results from query.";
    }

}
else {
    $errorMsg[] = "Query execution error: " . $conn->error;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Staff</title>
    <?php include "templates/head.php"; ?>
</head>

<body>
    <!-- Navbar -->
    <?php include ('components/header-nav.inc.php'); ?>

    <div class="title">
        <h2>Staff Management</h2>
    </div>

    
    <div class="staff-client-table">
        <div class="add">
            <a class="btn btn-sm btn-add" href="staff_add.php">+ Add Staff</a>
        </div> <!-- staff_add.php not yet created -->

        <table class="table table-striped">
            <!-- Bootstrap row -->
            <tr class="row"> 
                <th class="col-1">Staff ID</th>
                <th class="col-2">Name</th>
                <th class="col-2">Staff Username</th>
                <th class="col-3">Email Address</th>
                <th class="col-1">Phone No.</th>
                <th class="col-1">Gender</th>
                <th class="col-1">Date of Birth</th>
                <th class="col-1"></th>
            </tr>
            <?php
            do {
                echo "<tr class=\"row\">";

                echo "<td class=\"col-1\">" . $row["staffId"] . "</td>";
                echo "<td class=\"col-2\">" . $row["name"] . "</td>";
                echo "<td class=\"col-2\">" . $row["username"] . "</td>";
                echo "<td class=\"col-3\">" . $row["email"] . "</td>";
                echo "<td class=\"col-1 \">" . $row["phoneNumber"] . "</td>";
                echo "<td class=\"col-1\">" . $row["gender"] . "</td>";
                echo "<td class=\"col-1\">" . $row["dateOfBirth"] . "</td>";
                echo "<td class=\"col-1\">
                        <form action=\"staff_manage.php\" method=\"post\">
                            <input type=\"hidden\" name=\"managed_id\" value=\"" . $row["staffId"] . "\">
                            <button type=\"submit\" name=\"manage_staff\" class=\"btn btn-sm btn-secondary\">Manage</button>
                        </form>
                    </td>";
                echo "</tr>";
            }
            while ($row = $result->fetch_assoc());
            ?>
        </table>
    </div>

    <?php include ('templates/script.php'); ?>
</body>
</html>
