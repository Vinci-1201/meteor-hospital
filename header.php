<?PHP
// Use superglobal to call the session_start function
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meteor Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0e22e4bdcf.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<!-- Title of System -->
<h1>Meteor Hospital</h1>
<hr>

<!-- Patient Menu -->
<?PHP if(!empty($_SESSION) && basename($_SESSION["PHP_SELF"]) != 'index.php') { ?>

<?PHP echo "Name: " . $_SESSION['patientName'];?>
| <a href="make-appointment.php">Make Appointment</a>
| <a href="../logout.php">Logout</a>|
<hr>

<?PHP } ?>