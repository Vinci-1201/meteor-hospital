<?PHP
include("header.php");
?>

<h2>LOGIN</h2>		
<form action='login_process.php' method='POST' enctype="multipart/form-data">
    <label><b>IC/ID: </b></label>
    <input type="text" name='ICID'	placeholder="Enter your IC/ID" id="ICID"><br>
    
    <label><b>Password: </b></label>
    <input type='password'   name='password' id="password"><br>
    
    <input type='radio'       name='type' 	value='patient' checked>
    <label><b>Patient</b></label>

    <input type='radio'       name='type' 	value='admin'>
    <label><b>Admin</b></label>
    
    <br>
    <input	type='submit'    value='Login'><br>
    <a href='signup.php'>Become a Member of Us</a>
</form> 

<?PHP
include("footer.php");
?>