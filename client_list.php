<?php
require_once("functions/connect.php");

$userId = "";
$name = "";
$username = "";
$email = "";
$phoneNumber = "";
$gender = "";
$dateOfBirth = "";

$errorMsg = [];
$row;

$sql = "SELECT userId, name, username, email, phoneNumber, gender, dateOfBirth FROM users";
$statement = $conn->prepare($sql); // Prepare statement to execute query

if ($statement) {
    $errorMsg[] = "Query preparation error: " . $conn->error;
}

if ($statement->execute()) {
    $result = $statement->get_result();

    if ($result) {
        $row = $result->fetch_assoc(); // Fetch row
        $userId = $row["userId"];
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
    <title>Manage Clients</title>
    <?php include "templates/head.php"; ?>
</head>

<body>
    <!-- Navbar -->
    <?php include ('components/header-nav.inc.php'); ?>

    <div class="title">
        <h2>Client Management</h2>
    </div>

    <div class="staff-client-table">
        <div class="add">
            <a class="btn btn-sm btn-add" href="client_add.php">+ Add Client</a>
        </div> <!-- client_add.php not yet created -->

        <table class="table table-striped">
            <!-- Bootstrap row -->
            <tr class="row"> 
                <th class="col-1">Client ID</th>
                <th class="col-2">Name</th>
                <th class="col-3">Email Address</th>
                <th class="col-1">Age</th>
                <th class="col-1">Phone No.</th>
                <th class="col-1">Gender</th>
                <th class="col-1">Date of Birth</th>
                <th class="col-1"></th> <!-- Manage button -->
                <th class="col-1"></th> <!-- SOS Info -->
            </tr>
            <?php
            do {
                echo "<tr class=\"row\">";

                echo "<td class=\"col-1\">" . $row["userId"] . "</td>";
                echo "<td class=\"col-2\">" . $row["name"] . "</td>";
                echo "<td class=\"col-3\">" . $row["email"] . "</td>";
                echo "<td class=\"col-1\">" . $row["username"] . "</td>"; // Age !!
                echo "<td class=\"col-1 \">" . $row["phoneNumber"] . "</td>";
                echo "<td class=\"col-1\">" . $row["gender"] . "</td>";
                echo "<td class=\"col-1\">" . $row["dateOfBirth"] . "</td>";
                echo "<td class=\"col-1\">
                        <form action=\"client_manage.php\" method=\"post\">
                            <input type=\"hidden\" name=\"managed_id\" value=\"" . $row["userId"] . "\">
                            <button type=\"submit\" name=\"manage_client\" class=\"btn btn-sm btn-secondary\">Manage</button>
                        </form>
                    </td>";
                echo "<td class=\"col-1\">
                    <form action=\"user_sos_info.php\" method=\"post\">
                        <input type=\"hidden\" name=\"user_id\" value=\"" . $row["userId"] . "\">
                        <button type=\"submit\" name=\"user_sos_info\" class=\"btn btn-sm btn-secondary\">SOS Info</button>
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
