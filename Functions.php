<?php include 'db.php'; ?>
<?php
function showAllData()
{
    global $connection;
    $query = "SELECT * FROM users";
    // establishes connection to data base.
    //fetch/reads data from db

    $result = mysqli_query($connection, $query);//
    if (!$result) {
        die('Query FAILED' . mysqli_error()); // If unable to it displays sql error
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function UpdateTable()
{
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $query = "UPDATE users SET "; //updates from db
    $query .= "username = '$username', "; //[specificity]
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('QUERY FAILED' . mysqli_error($connection)); //if connection lost 
    }
}

function deleteRows()
{
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $query = "DELETE from users "; //deletes data from selected database.
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('QUERY FAILED' . mysqli_error($connection));
    }
}

?>
