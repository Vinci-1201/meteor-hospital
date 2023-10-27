<?php 
session_start(); 
include "connection.php";

if (isset($_POST['ICID']) && isset($_POST['password']) && isset($_POST['type'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $ICID = validate($_POST['ICID']);
    $pass = validate($_POST['password']);
    $type = validate($_POST['type']);

    if (empty($ICID)) {
        header("Location: index.php?error=User Name is required");
        exit();
    } else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    } else {
        if($type == 'admin'){
            $sql = "SELECT * FROM admins WHERE adminIC='$ICID' AND password='$pass'";
        } else {
            $sql = "SELECT * FROM patients WHERE patientIC='$ICID' AND password='$pass'";
        }

        $result = mysqli_query($condb, $sql);

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if($type == 'admin' && $row['adminIC'] === $ICID && $row['password'] === $pass) {
                $_SESSION['adminIC'] = $row['adminIC'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: ../admin/index_admin.php");
                exit();
            } else if($type == 'patient' && $row['patientIC'] === $ICID && $row['password'] === $pass) {
                $_SESSION['patientIC'] = $row['patientIC'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: ../patient/index_patient.php");
                exit();
            } else {
                header("Location: index.php?error=Incorrect User IC/ID or password");
                exit();
            }
        } else {
            header("Location: index.php?error=Incorrect User IC/ID or password");
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}
?>