<?php
$name = $POST['no'];
$name = $POST['name'];
$name = $POST['category'];
$name = $POST['amount'];
$name = $POST['date'];


$conn = new mysqli('localhost', 'root', '', 'rightmo');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into rightmo(NO,Name,Category,Amount,Date)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssssi", $NO, $Name, $Category, $Amount, $Date);
    $stmt->execute();
    echo "successful";
    $stmt->close();
    $conn();
}
