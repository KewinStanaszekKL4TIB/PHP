<?php
$servername = "localhost";
$username = "root"; //root  
$password = ""; 

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


//Tworzenie bazy danych

$database="goetel";

if (mysqli_select_db($conn, $database)) {
    echo "Database $database selected ";
} else {
    echo "Error selecting database: " . mysqli_error($conn);
}

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$sql1="INSERT INTO users (username, lastname, email) VALUES ('PIOREK', 'KOWALSKI', 'piotrpajak98@gmail.com')";

//if (mysqli_query($conn, $sql1)) {
  //  echo "New record created successfully";
//} else {
  //  echo "Error creating record: " . mysqli_error($conn);
//}

$sql2 = "SELECT id, username, lastname FROM users";
$result = mysqli_query($conn, $sql2);

//if (mysqli_num_rows($result) > 0) {
  //  while($row = mysqli_fetch_assoc($result)) {
       // echo "<br>" . "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["lastname"]. "<br>";
    //}
//} else {
//    echo "0 results";
//}

$sql3 = "SELECT id, username, lastname FROM users";
$result1 = mysqli_query($conn, $sql3);

if (mysqli_num_rows($result1) > 0) {
   echo "<ul>";
    while($row = mysqli_fetch_assoc($result1)) {
        echo "<li>" . $row["id"]. " - Name: " . $row["username"]. " " . $row["lastname"]. "</li>";
   
}
echo "</ul>";
} else {
    echo "0 results";
}

//generowanie tabeli zawierającej dane z bazy danych

$sql4 = "SELECT id, username, lastname FROM users";
$result2 = mysqli_query($conn, $sql4);

if (mysqli_num_rows($result2) > 0) {
   echo "<table>";
   while($row = mysqli_fetch_assoc($result2)) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"]. "</td><td>" . $row["lastname"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$sql5 = "delete from users where id=1";
if (mysqli_query($conn, $sql5)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

//update

$sql6 = "UPDATE users SET lastname='NOWAK' WHERE id=2";
if (mysqli_query($conn, $sql6)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

//Obsługa formularzy meta post
<form action="form_post.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

?>