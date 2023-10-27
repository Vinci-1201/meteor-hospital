<?PHP
session_start();

if(empty($_POST['patientIC']) or empty($_POST['password']) or empty($_POST['role'])){
    die('<script>alert("Please enter the correct ID and password.");
    window.location.href="login.html"</script>');
}

if($_POST['type']='patient')
{
    $table    =   "patients";
    $col1     =   "patientIC";
    $col2     =   "password";
    $col3     =   "patientName";
    $location =   "patient/index.php";
}

else if($_POST['doctor']=='doctor')
{
    $table    =   "doctors";
    $col1     =   "doctorID";
    $col2     =   "password";
    $col3     =   "doctorName";
    $location =   "doctor/index.php";
}

else if($_POST['admin']=='admin')
{
    $table    =   "admins";
    $col1     =   "adminID";
    $col2     =   "password";
    $col3     =   "adminName";
    $location =   "admin/index.php";
}

include("connection.php");

$ICID = mysqli_real_escape_string($conn, $_POST["ICID"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);

$login = "SELECT * 
FROM $table 
WHERE
       $col1 = '$ICID'
AND    $col2 = '$password'
limit 1";

$run_login = mysqli_query($conn, $login);

if(mysqli_num_rows($run_login)==1){
    $data = mysqli_fetch_array($run_login);
    $_SESSION[$col3] = $data[$col3];
    $_SESSION[$col1] = $data[$col1];
    echo"<script>window.location.href='$location'</script>";
}
else{
    echo "<script>alert('Failed to Login.');
    window.histpry.back();</script>";
}

mysql_close($conn);
?>