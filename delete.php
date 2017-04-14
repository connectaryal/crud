<?php 
require_once 'config.php';

$get_id = $_REQUEST['id'];
$sql = "DELETE FROM `student` WHERE `student_id` = " . $get_id;
$result = $db->query($sql);

if ($db->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header('location:index.php');
} else {
    echo "Error deleting record: " . $conn->error;
}
?>