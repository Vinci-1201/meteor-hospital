<?php
ob_start();
session_start();

include('admin_guard.php');

include('../connection.php');

if(empty($_SESSION['role'])) {
    $sql = "SELECT * FROM admins WHERE
    adminID = '".$_SESSION['adminID']."'
    limit 1";
    $result = mysqli_query($condb, $sql);
    $data = mysqli_fetch_array($result);
    $_SESSION["role"] = $data["role"];
}
?>


<h1>Admin Part</h1>
<hr>

| <a href="admin_index.php">Home</a>
<?PHP if($_SESSION['role'] == 'ADMIN'){ ?>
    |<a href="doctor_list.php"> Doctors' Info</a>
    |<a href="patient_list.php"> Patients' Info</a>
    |<a href="medicine_list.php"> Medicine</a>
    |<a href="supplier_list.php"> Suppliers</a>
    |<a href="donation_list.php"> Donation</a>
<?PHP } ?>
    |<a href="appointment_list.php">Appointments</a>
    |<a href="report.php">Report</a>
    |<a href="logout.php">Logout</a> |
<hr>
