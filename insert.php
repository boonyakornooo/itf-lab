<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITF Database Lab</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php

$conn = mysqli_connect("Localhost", "it63070235_235", "NFMkwk23", "it63070235_itf");
if (!$conn)
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$Name = $_POST['Name'];
$A = $_POST['A'];
$B = $_POST['B'];
$sql = "INSERT INTO test (Name , A , B) VALUES ('$Name', '$A', '$B')";

if (mysqli_query($conn, $sql)) {
    echo '<div class="container">
            <h3>Comment has been saved in to the database successfully.</h3>
            <a role="button" class="btn btn-primary mt-3" href="guestbook.php">Home</a>
         </div>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  
mysqli_close($conn);
?>
</body>
</html>
