<?php
include('navigation.php'); // Include the navigation bar
include('floating-menu.php'); // Include the floating menu 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Medical Website</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="meteor.css"> <!-- Include your external CSS file -->
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Your Most Trusted</h1>
                    <h2>HEALTH PARTNER</h2>
                    <p>The Best Match Services For You</p>
                    <p>Discover personalized care plans tailored to your unique health needs, delivered with compassion and expertise. Your journey to better health starts here.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>About Us</h1>
                    <p>
                        At Meteor Hospital, we pride ourselves on delivering top-notch healthcare with a personal touch. Our highly skilled and caring staff is here to support you on your path to wellness. We believe in transparency, and our commitment to your health is unwavering.
                    </p>
                    <p>
                        With state-of-the-art facilities and cutting-edge medical technology, we offer a wide range of services to meet your unique healthcare needs. Whether it's routine check-ups, specialized treatments, or emergency care, we are here to serve you.
                    </p>
                    <p>
                        We understand that your health is a top priority, and we are honored to be your trusted healthcare partner. Your comfort and peace of mind are paramount to us, and we look forward to accompanying you on your journey to better health.
                    </p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
                <div class="col-md-6">
                    <img src="about-us-doctors.png" alt="Hospital Image">
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Explore our hospital's impressive metrics</h2>
                    <p>Embark on a journey of discovery with Meteor Hospital's outstanding credentials</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center">
                    <img src="bed.png" alt="Licensed Bed">
                    <h2>697</h2>
                    <p>Licensed Beds</p>
                    <p>[Description for Licensed Beds]</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="medical.png" alt="Medical Specialities">
                    <h2>70</h2>
                    <p>Medical Specialities</p>
                    <p>[Description for Medical Specialities]</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="patient.png" alt="Patients Served">
                    <h2>423,479</h2>
                    <p>Patients Served</p>
                    <p>[Description for Patients Served]</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="doctor.png" alt="Specialist Doctors">
                    <h2>396</h2>
                    <p>Specialist Doctors</p>
                    <p>[Description for Specialist Doctors]</p>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="main-content">
                <div class="left box">
                    <h4>ABOUT US</h4>
                    <div class="content">
                        <ul>
                            <li><a href="#">Disclaimer</a></li>
                            <li><a href="#">Personal Data Protection</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Sustainability</a></li>
                        </ul>
                    
                        <br>
                        <br>

                        <p>Copyright &copy; 2023 Meteor Hospital Sdn Bhd.<br>
                            All Rights Reserved. Photos are for illustration purposes only<br>
                            GGMKL 056/2023
                        </p>
                    </div>
                </div>

                <div class="center box">
                    <h4 id="contactus">CONTACT US</h4>

                    <div class="content">
                        <div class="place">
                            <img src="location.png" alt="Location">
                            <span class="text">456 Meteor Street, Metropolis City, Star County, Galaxy 12345</span>
                        </div>

                        <br>
                        
                        <div class="phone">
                            <img src="phone.png" alt="Main Line">
                            <span class="text">Main Line:<br><a href="#">+1 (555) 123-4567</a></span>
                        </div>

                        <br>

                        <div class="whatsapp">
                            <img src="whatsapp.png" alt="Whatsapp">
                            <span class="text">Whatsapp:<br><a href="#">+1 (555) 987-6543</a></span>
                        </div>

                        <br>

                        <div class="Emergency">
                            <img src="emergency.png" alt="Emergency">
                            <span class="text">Emergency Department / Ambulance Service<br><a href="#">+1 (555) 392-2017</a></span>
                        </div>

                        <br>

                        <div class="fax">
                            <img src="fax.png" alt="Fax">
                            <span class="text">Fax<br><a href="#">+1 (555) 439-1068</a></span>
                        </div>

                        <br>

                        <div class="Email">
                            <img src="email.png" alt="Email">
                            <span class="text"><a href="mailto:contact@meteorhospital.com">contact@meteorhospital.com</a></span>
                        </div>

                        <br>
                    </div>
                </div>

                <div class="right box">
                    <h4>OFFICE HOURS</h4>

                    <div class="content">
                        <p class="day">Monday to Friday</p>
                        <p>8:30am to 6:00pm</p>

                        <br>

                        <p class="day">Saturday</p>
                        <p>8:30am to 2:00pm</p>

                        <br>

                        <p class="day">Closed on Sundays</p>
                    </div>

                    <br><br><br>

                    <h4>FOLLOW US</h4>

                    <div class="content">
                        <div class="social-media">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        

        <!-- Add Bootstrap and Font Awesome links here -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="script.js"></script> <!-- Include your external JavaScript file -->
    </body>
</html>
