



<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>O DAAKTARL</title>
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
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">MAIN MENU </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
			
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
					
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="settings.php"><i class="fa fa-dashboard"></i>Appoinment Status</a>
                    </li>
					<li>
                        <a  class="active-menu" href="apoint_type.php"><i class="fa fa-plus-circle"></i>Add Appoinment</a>
                    </li>
                    <li>
                        <a  href="apoindel.php"><i class="fa fa-desktop"></i> Delete Appoinment</a>
                    </li>
					

                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           NEW APPOINMENT <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ADD NEW APPOINMENT
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label>Type Of Patients *</label>
                                            <select name="type"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Single">SINGLE Patient</option>
                                                <option value="Family">FAMILY Patient</option>
												<option value="Couple">COUPLE Patient</option>
												<option value="Premium">PREMIUM Patient</option>
                                            </select>
                              </div>
							  
								<div class="form-group">
                                            <label> Patients Problems</label>
                                            <select name="types_of_doc" class="form-control" required>
												<option value selected ></option>
                                                <option value="Medicine">Medicine</option>
                                                <option value="Surgery">Surgery</option>
                                                <option value="Neurology">Neurology</option>
                                                <option value="Cardiology">Cardiology</option>
                                                <option value="Hematology">Hematology</option>
                                                <option value="Gynocology">Gynocology</option>
                                                <option value="EYE">EYE</option>
                                                <option value="ENT">ENT(Ear,Nose,Throat)</option>
                                                <option value="SKIN & VD">SKIN & VD</option>
                                                <option value="Nutrition & Diabetes">Nutrition & Diabetes</option>
                                                <option value="Liver and Gastroenterology">Liver and Gastroenterology</option>
                                                <option value="Radiology & imaging">Radiology & imaging</option>
                                                <option value="Nephrology">Nephrology</option>
												<option value="Burn and Plastic Surgery">Burn and Plastic Surgery</option>
                                                <option value="Psyciatry">Psyciatry</option>
                                                <option value="Cancer">Cancer</option>
                                                                                                       
                                         </select>
                                            
                               </div>
							 <input type="submit" name="add" value="Add New" class="btn btn-primary"> 
							</form>
							<?php
							 include('db.php');
							 if(isset($_POST['add']))
							 {
										$type= $_POST['type'];
										$types_of_doc = $_POST['types_of_doc'];
										$place = 'Free';
										
										$check="SELECT* FROM apoint_type WHERE type = '$type' AND Types of Doctors = '$types_of_doc'";
										$rs = mysqli_query($con,$check);

										$data = mysqli_fetch_array($rs, MYSQLI_NUM);
										if($data[0] > 1) {
											echo "<script type='text/javascript'> alert('apoinment is Already  Exists')</script>";
											
										}

										else
										{
							 
										
										$sql ="INSERT INTO `apoint_type`( `type`, `Types of Doctors`,`place`) VALUES ('$type','$types_of_doc','$place')" ;
										if(mysqli_query($con,$sql))
										{
										 echo '<script>alert("New Appoinment  Added") </script>' ;
										}else {
											echo '<script>alert("Sorry ! Check The System") </script>' ;
										}
							 }
							}
							
							?>
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            APPOINMENT INFORMATION
                        </div>
                        <div class="panel-body">
								<!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <?php
						$sql = "Select * from apoint_type limit 0,10";
						$re = mysqli_query($con,$sql)
						?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>APPOINMENT ID</th>
                                            <th>APPOINMENT Type</th>
											<th>PATIENTS NUM</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									
									<?php
										while($row= mysqli_fetch_array($re))
										{
												$id = $row['id'];
											if($id % 2 == 0) 
											{
												echo "<tr class=odd gradeX>
													<td>".$row['id']."</td>
													<td>".$row['type']."</td>
												   <th>".$row['Types of Doctors']."</th>
												</tr>";
											}
											else
											{
												echo"<tr class=even gradeC>
													<td>".$row['id']."</td>
													<td>".$row['type']."</td>
												   <th>".$row['Types of Doctors']."</th>
												</tr>";
											
											}
										}
									?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                    
                       
                            
							  
							 
							 
							  
							  
							   
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
