<?php
$conn = mysqli_connect("localhost", "compuser", "Comp3134Secure!", "comp3134_lab13");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$firstname = $_GET['firstname'] ?? '';
?>

<form method="GET">
    <input type="text" name="firstname" placeholder="Enter first name">
    <input type="submit" value="Search">
</form>

<table border="1">
    <tr><th>ID</th><th>Username</th><th>Email</th><th>Firstname</th><th>Lastname</th><th>Active</th></tr>
<?php
if ($firstname) {
    $sql = "SELECT * FROM users WHERE firstname = '$firstname' AND active = 1";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['username']}</td>
                <td>{$row['email']}</td>
                <td>{$row['firstname']}</td>
                <td>{$row['lastname']}</td>
                <td>{$row['active']}</td>
              </tr>";
    }
}
?>
</table>
