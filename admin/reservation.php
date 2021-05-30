<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Appointment Visit</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Patient <small>Appointment</small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Personal Information
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label>Title*</label>
                                            <select name="title" class="form-control" required >
												<option value selected ></option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
												<option value="Prof.">Prof.</option>
												<option value="Rev .">Rev .</option>
												<option value="Rev . Fr">Rev . Fr .</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>First Name</label>
                                            <input name="fname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="lname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Nationality*</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Bangladeshi" checked="">Bangaldeshi
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Foreigner  ">Foreigner
                                            </label>
                         
                                </div>
								<?php

								$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

								?>
								<div class="form-group">
                                            <label>Passport Country*</label>
                                            <select name="country" class="form-control" required>
												<option value selected ></option>
                                                <?php
												foreach($countries as $key => $value):
												echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
												endforeach;
												?>
                                            </select>
								</div>
								<div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" type ="text" class="form-control" required>
                                            
                               </div>
							   
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Appointment Information
                        </div>
                        <div class="panel-body">
								<div class="form-group">
                                            <label> Doctors Speciality </label>
                                            <select name="Doc_speciality"  class="form-control" required>
												                    <option value selected ></option>
                                            <option value="MediDoc_adrse & Counsultant">MediDoc_adrse and Counsultant</option>
                                            <option value="Surgery">Surgery</option>
												                    <option value="Neurology">Neurology</option>
                                            <option value="Cardiology">Cardiology</option>
												                    <option value="Hematology">Hematology</option>
                                            <option value="Gynocology">Gynocology</option>
                                            <option value="EYE">EYE</option>
                                            <option value="ENT(Ear,Nose,Throat)">ENT</option>
                                            <option value="Skin & VD">Skin and VD</option>
                                            <option value="Nutrition and Diabetes">Nutrition and Diabetes</option>
                                            <option value="Liver and Gastroenterology">Liver and Gastroenterology</option>
                                            <option value="Radiology and Imaging">Radiology and Imaging</option>
                                            <option value="Nephrology">Nephrology</option>
                                            <option value="Burn and Plastic Surgery ">Burn and Plastic Surgery</option>
                                            <option value="Psychiatry">Psychiatry</option>
                                            <option value="Cancer -Oncology">Cancer -Oncology</option>
                                            <option value="Dental">Dental</option>


                                            </select>
                              </div>

                              <div class="form-group">
                                            <label>Type of Appoinment</label>
                                            <select name="typ_of_apoint" class="form-control" required>
                        <option value selected ></option>
                                                <option value="Delux Package ">Delux </option>
                                                <option value="Premium ">Premium </option>
                                                 <option value="Normal ">Normal </option>
                                                  <option value="Regular ">Regular </option>
                                                                                                
                                             
                                            </select>
                              </div>


							  <div class="form-group">
                                            <label>Chember Area of this Doctor</label>
                                            <select name="Area_Sel" class="form-control" required>
												<option value selected ></option>
                                                <option value="Dhanmondi ">Dhanmondi </option>
                                                <option value="Banani ">Banani </option>
                                                 <option value="Gulshan ">Gulshan </option>
                                                  <option value="Basundhara ">Basundhara </option>
                                                   <option value="Uttora ">Uttora  </option>
                                                    <option value="Siddeshwari Road  ">Dhanmondi </option>
                                                     <option value="Mirpur ">Mirpur </option>
                                                      <option value="Shamoly ">Shamoly  </option>
                                                      <option value="Shegunbagicha ">Shegunbagicha  </option>
                                                      <option value="Panthopoth ">Panthopoth  </option>
                                                      <option value="DMC Area ">DMC Area  </option>

                                                
                                             
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Doctor Chembers Address *</label>
                                            <select name="Doc_adrs" class="form-control" required>
												<option value selected ></option>
                                                <option value="Square Hospitals Limited, Main Branch, Panthapath, Dhaka">Square Hospitals </option>
                                                 <option value="Popular Diagnostic Centre Ltd Dhanmondi">Appolo Hospital  </option>
                                                 <option value="Popular Diagnostic Centre Ltd Dhanmondi">  
                                                   Appolo Hospital Ltd  </option>
                                                   <option value="ENT Care Center,Gulshan,Dhaka">ENT Care Center,Gulshan,Dhaka </option>
                                                   <option value="Green View Clinic">Green View Clinic </option>
                                                   <option value="Dhanmondi, Satmasjid Roadc">Dhanmondi, Satmasjid Road </option>
                                                   <option value="Dhanmondi, Satmasjid Road">Dhanmondi, Satmasjid Road </option>
                                                   <option value="Iqbal Road, Mohammadpur, Dhaka-1207">Iqbal Road, Mohammadpur, Dhaka-1207 </option>
                                                   <option value="Monowara Hospital , 54, Siddeshwari Road , Dhaka c">Monowara Hospital , 54, Siddeshwari Road , Dhaka  </option>
                                                   <option value="Comfort Diagnostic Centre & Nursing Home ,Green Rd">Comfort Diagnostic Centre and Nursing Home ,Green Rd </option>
                                                   <option value="Green Life Hpspital">Green Life Hospitalc </option>
                                                   <option value="Anwer Khan Modern Hospital Ltd">Anwer Khan Modern Hospital Ltd </option>
                                                   <option value="City Hospital Mirpur-1">City Hospital Mirpur-1 </option>

                                          
                                            </select>
                              </div>

                              <div class="form-group">
                                            <label>Number Of Patients</label>
                                            <select name="n_patients" class="form-control" required>
                        <option value selected ></option>
                       <option value="1">Single Patient</option>
                        <option value="2">Double Patients</option>
                        <option value="Single Patient ">Single Patient</option>
                        <option value="3">Tripple Patient</option>
                        <option value="4">Family</option>
                        
                         </select>
                              </div>
							 
							 
							  <div class="form-group">
                                            <label>Visiting Time</label>
                                            <input name="Vtime" class="form-control" required>
												<!-- <option value selected ></option>
                        <option value="After-Noon">4:00-4:10</option>
                        <option value="After-Noon">4:15-4:35</option>
												<option value="After-Noon ">4:40-4:50</option>
												<option value="After-Noon">4:55-5:05</option>
												<option value="After-Noon">5:10-5:20</option>
												<option value="After-Noon">5:20-5:30</option>
												<option value="After-Noon">5:40-5:50</option>
												<option value="After-Noon">5:50-6:00:</option>
												<option value="Evening">6:00-6:10</option>
												<option value="Evening">6:10-6:20</option>
												<option value="Evening">6:30-6:40</option>
												<option value="Evening">6:40-6:50</option>
												<option value="Evening">6:50-7:00</option>
												<option value="Evening">7:10-7:20</option>
												<option value="Evening">7:30-7:40</option>
												<option value="Evening">7:40-7:50</option>
												<option value="Evening">7:45-8:00</option>
												<option value="Evening">8:00-8:10</option>
												<option value="Evening">8:20-8:30</option>
												<option value="Evening">8:30-8:40</option>
												<option value="Evening">8:40-9:00</option>
												 </select> -->
                              </div>


                                <div class="form-group">
                                            <label>Previously Visited?</label>
                                            <select name="Status" class="form-control" required>
                        <option value selected ></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                                   
                         </select>
                              </div>
							  <div class="form-group">
                                            <label>Visiting Date</label>
                                            <input name="VDate" type ="date" class="form-control">
                                            
                               
                                            
                               </div>
                       </div>
                        
                    </div>
                </div>
				
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>HUMAN VERIFICATION</h4>
                        <p>Type Below this code <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
						<p>Enter the random code<br /></p>
							<input  type="text" name="code1" title="random code" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
						<input type="submit" name="submit" class="btn btn-primary">
						<?php
							if(isset($_POST['submit']))
							{
							$code1=$_POST['code1'];
							$code=$_POST['code']; 
							if($code1!="$code")
							{
							$msg="Invalide code"; 
							}
							else
							{
							
									$con=mysqli_connect("localhost","root","","o daaktar");
									$check="SELECT * FROM appoinment WHERE email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
									if($data[0] > 1) {
										echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
										
									}

									else
									{
										$new ="Not Conform";
										$newUser="INSERT INTO `appoinment`(`Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `Doc_speciality`, `typ_of_apoint`, `n_patients`, `Area_Sel`, `Doc_adrs`, `Vtime`,`VDate`,`Status`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[country]','$_POST[phone]','$_POST[Doc_speciality]','$_POST[typ_of_apoint]','$_POST[n_patients]','$_POST[Area_Sel]','$_POST[Doc_adrs]','$_POST[Vtime]','$new',datediff('$_POST[VDate]','$_POST[Status]'))";
										if (mysqli_query($con,$newUser))
										{
											echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
											
										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
											
										}
									}

							$msg="Your code is correct";
							}
							}
							?>
						</form>
							
                    </div>
                </div>
            </div>
           
                
                </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
