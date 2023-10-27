
<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Page</title>
        
        <link rel="stylesheet" href="signup.css">
    </head>
    <body>

    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>Sign Up</h2>

                    <div class="inputbox">
                        
                        <input type="text" required>
                        <label for="firstName">First Name</label>
                    </div>

                    <div class="inputbox">
                        
                        <input type="text" required>
                        <label for="lastName">Last Name</label>
                    </div>

                    <div class="inputbox">
                        
                        <input type="text" required>
                        <label for="nricPassport">NRIC / Passport No.</label>
                    </div>

                    <div class="inputbox">
                        <input type="date" required>
                        <label for="dateOfBirth">Date of Birth</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required>
                        <label for="email">Email</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="password">Password</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="confirmPassword">Confirm Password</label>
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

                    <button>Sign Up</button>

                    <div class="register">
                        <p>Already have an account? <a href="#">Log In</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>
    <script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
    
    </body>
</html>
