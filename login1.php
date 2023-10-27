
<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        
        <link rel="stylesheet" href="login.css">
    </head>
    <body>

    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>Login</h2>

                    <div class="inputbox">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        <input type="text" required>
                        <label for="userId">User ID</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Password</label>
                    </div>

                    
                    <div class="role-selection">
                        <p>Select your role:</p>
                        <div class="role-options">
                            <label>
                                <input type="radio" name="role" value="patient" checked>
                                <span class="checkmark"></span>
                                Patient
                            </label>

                            <label>
                                <input type="radio" name="role" value="admin">
                                <span class="checkmark"></span>
                                Admin
                            </label>
                        </div>
                    </div>

                    <div class="forget">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                        <label>
                            <a href="#">Forgot password?</a>
                        </label>
                    </div>

                    <button>Log in</button>

                    <div class="register">
                        <p>Don't have a account ? <a href="#">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>
    <script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
    
    </body>
</html>
