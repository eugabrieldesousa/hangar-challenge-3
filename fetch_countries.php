<?php
require_once 'db_connection.php';

$sql = "SELECT DISTINCT user_country FROM user";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["user_country"] . "'>" . $row["user_country"] . "</option>";
    }
} else {
    echo "<option value=''>Nenhum país encontrado</option>";
}
?>
