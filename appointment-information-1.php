<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Medical Website</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="meteor.css">
        <link rel="stylesheet" href="meteor.js">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Telemedicine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Donation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <form class="form-inline">
                            <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-light" type="submit">Search</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Log In / Sign Up</a>
                    </li>
                </ul>
            </div>
        </nav>

        <ul>
            <li>
            <a href="#" class="spotify"><span>Make Appointment</span><i class="entypo-spotify"></i></a>
            </li>
            <li>
            <a href="#" class="soundcloud"><span>Find A Doctor</span><i class="entypo-soundcloud"></i></a>
            </li>
            <li>
            <a href="#" class="skype"><span>Telemedicine</span><i class="entypo-skype"></i></a>
            </li>
            <li>
            <a href="#" class="dribbble"><span>Donation</span><i class="entypo-dribbble"></i></a>
            </li>
        </ul>

        <div class="banner">
            <div class="breadcrumb-div">
                <p>
                    <a href="index.html">HOME</a> &nbsp;&nbsp;&nbsp; > &nbsp;&nbsp;&nbsp; <a href="doctor_appointment.html">MAKE APPOINTMENT</a> &nbsp;&nbsp;&nbsp; > &nbsp;&nbsp;&nbsp; <span class="selected-page">Doctor's Appointment</span>
                </p>
            </div>
            <div class="banner-text">
                <p class="page-title">APPOINTMENT /<br> ENQUIRY</p>
                <p class="page-text">Your health is our priority. Book an <br> appointment or enquire with us today.</p>
            </div>
        </div>

        <!-- Progress bar -->
        <div class="progressbar">
            <div class="progress" id="progress"></div>

            <div class="progress-step" data-title="Registration Categories"></div>
            <div class="progress-step" data-title="Appointment Information"></div>
            <div class="progress-step" data-title="Select Doctor"></div>
            <div class="progress-step" data-title="Choose Date and Location"></div>
            <div class="progress-step" data-title="Review Appointment Details"></div>
            <div class="progress-step" data-title="Appointment Confirmed"></div>
        </div>

        <br>
        <br>
        <br>
        <br>

        <div class="container">
            <!-- ... previous content ... -->
            
            <!-- Buttons: Previous and Next -->
            <div class="text-center">
                <div class="button-group">
                    <button class="btn btn-primary">Previous</button>
                    <button class="btn btn-primary">Next</button>
                </div>
            </div>

            <br> <br> <br> <br>
        
            <!-- Form Section -->
            <div class="container">
                <div class="formBox20210318 formBox20210318SZ" v-show="step2 == 1">
                    <ul class="list-unstyled">
                        <li class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img src="name.png" alt="Name" class="input-icon">
                                    </span>
                                </div>
                                <input type="text" class="form-control" v-model="patient.PatientName" placeholder="Name">
                                &nbsp;&nbsp;&nbsp;
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img src="payment.png" alt="Payment Method" class="input-icon">
                                    </span>
                                </div>
                                <select v-model="patient.TheTypeOfPatient" class="form-control">
                                    <option value="">Payment Method</option>
                                    <option value='1'>Medical Insurance</option>
                                    <option value='0'>Self-Payment</option>
                                    <option value='2'>Medical Insurance (Out-of-Pocket)</option>
                                    <option value='3'>Medical Insurance (Special Cases)</option>
                                    <option value='4'>Public Healthcare</option>
                                </select>
                            </div>
                        </li>
                        <li class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img src="gender.png" alt="Gender" class="input-icon">
                                    </span>
                                </div>
                                <select v-model="patient.userGender" class="form-control">
                                    <option value="">Gender</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                                &nbsp;&nbsp;&nbsp;
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img src="calendar.png" alt="Date of Birth" class="input-icon">
                                    </span>
                                </div>
                                <input class="form-control" type="date" v-model="patient.Birthday" placeholder="Date of Birth">
                            </div>
                        </li>

                        <li class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img src="IC.png" alt="NRIC / Passport No." class="input-icon">
                                    </span>
                                </div>
                                <input type="text" class="form-control" v-model="patient.PatientName" placeholder="NRIC / Passport No.">
                                &nbsp;&nbsp;&nbsp;
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img src="phone.png" alt="Phone Number" class="input-icon">
                                    </span>
                                </div>
                                <input type="text" class="form-control" v-model="patient.PhoneNumbers" placeholder="Phone Number">
                            </div>
                        </li>

                        <li class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img src="address.png" alt="Address" class="input-icon">
                                    </span>
                                </div>
                                <input type="text" class="form-control" v-model="patient.Patientaddress" placeholder="Address">
                            </div>
                        </li>
                    </ul>
                    <div class="form-check">
                        <input name="staPopCheck1" type="checkbox" class="form-check-input" @click="checkBtn1">
                        <label class="form-check-label">
                            I have read and agreed to the 'Personal Information Protection Policy'.
                        </label>
                    </div>
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
    </body>
</html>            
