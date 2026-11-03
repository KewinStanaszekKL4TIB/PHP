<?php
$login = $_POST["name"];
$password = sha1($_POST["password"]);

$sql = "insert into MyGuests (name, password) 
    values ('$login', '$password')";
echo $sql;
if(mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>    