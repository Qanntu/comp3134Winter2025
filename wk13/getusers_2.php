<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$mysqli = new mysqli("localhost", "compuser", "Comp3134Secure!", "comp3134_lab13");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$query = $_GET['firstname'] ?? '';
?>
<form method="GET">
    <input type="text" name="firstname" placeholder="Enter first name">
    <button type="submit">Search</button>
</form>

<table border="1">
    <tr><th>ID</th><th>Username</th><th>Email</th><th>First Name</th><th>Last Name</th><th>Active</th></tr>
    <?php
    if ($query) {
        $stmt = $mysqli->prepare("SELECT * FROM users WHERE firstname = ? AND active = 1");
        $stmt->bind_param("s", $query);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['username']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['firstname']}</td>
                    <td>{$row['lastname']}</td>
                    <td>{$row['active']}</td>
                  </tr>";
        }

        $stmt->close();
    }
    ?>
</table>
