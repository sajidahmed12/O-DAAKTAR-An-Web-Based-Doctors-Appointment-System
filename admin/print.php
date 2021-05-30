
<html>
	<head>
		<meta charset="utf-8">
		<title>Patient's Invoice</title>
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="script.js"></script>
		<style>
		/* reset */

*
{
	border: 0;
	box-sizing: content-box;
	color: inherit;
	font-family: inherit;
	font-size: inherit;
	font-style: inherit;
	font-weight: inherit;
	line-height: inherit;
	list-style: none;
	margin: 0;
	padding: 0;
	text-decoration: none;
	vertical-align: top;
}

/* content editable */

*[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }

*[contenteditable] { cursor: pointer; }

*[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

span[contenteditable] { display: inline-block; }

/* heading */

h1 { font: bold 100% sans-serif; letter-spaVDate g: 0.5em; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 75%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spaVDate g: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

/* page */

html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #999; cursor: default; }

body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }

/* javascript */

.add, .cut
{
	border-width: 1px;
	display: block;
	font-size: .8rem;
	padding: 0.25em 0.5em;	
	float: left;
	text-align: center;
	width: 0.6em;
}

.add, .cut
{
	background: #9AF;
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
	background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
	border-radius: 0.5em;
	border-color: #0076A3;
	color: #FFF;
	cursor: pointer;
	font-weight: bold;
	text-shadow: 0 -1px 2px rgba(0,0,0,0.333);
}

.add { margin: -2.5em 0 0; }

.add:hover { background: #00ADEE; }

.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
.cut { -webkit-transition: opacity 100ms ease-in; }

tr:hover .cut { opacity: 1; }

@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	.add, .cut { display: none; }
}

@page { margin: 0; }
		</style>
		
	</head>
	<body>
	
	
	
	
	<?php
	ob_start();	
	include ('db.php');
	$pid = $_GET['pid'];
	
	
	
	$sql ="SELECT * from payment where id = '$pid' ";
	$re = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($re))
	{
		$id = $row['id'];
		$title = $row['title'];
		$fname = $row['fname'];
		$lname = $row['lname'];
		$Type_appoint = $row['typ_of_apoint'];
		$n_patients  = $row['n_patients'];
		$VDate  = $row['VDate'];
		$refresh=$row['Refreshment'];
		$ttot=$row['ttot'];
		$btot=$row['btot'];
		$fintot=$row['fintot'];
		$mepr=$row['mepr'];


		
		
		
		
	
	}
	
									$fee_amount = 0;       
									if($Type_appoint=="Deluxe Package")
									{
										$fee_amount = 2000;
									
									}
									else if($Type_appoint==" Premium Package")
									{
										$fee_amount = 1500;
									}
									else if($Type_appoint=="Regular Package")
									{
										$fee_amount = 1000;
									}
									else if($Type_appoint=="Normal Package")
									{
										$fee_amount = 500;
									}
									
									if($n_patients=="1 Jon")
									{
										$Type_appoint = $fee_amount * 1/100;
									}
									else if($n_patients=="2 Jon")
									{
										$Type_appoint = $fee_amount * 2/100;
									}
									else if($n_patients=="3 Jon")
									{
										$Type_appoint = $fee_amount * 3/100;
									}
									else if($n_patients=="4 Jon")
									{
										$Type_appoint = $fee_amount * 4/100;
									}
									else if($n_patients=="None")
									{
										$Type_appoint = $fee_amount * 0/100;
									}
									
									if($fee_amount=="2000")
									{
										$refresh="Kacchi Biriyani";
									}
									else if($fee_amount=="1500")
									{
										$refresh="Tehari";
									}else if($fee_amount=="1000")
									{
										$refresh="Burger";
									
									}else if($fee_amount=="500")
									{
										$refresh="500ml 7-Up/Coca-cola";
									}
	
	?>
		<header>
			<h1>Invoice</h1>
			<address >
				<p>O DAAKTAR ,</p>
				<p>Block -B Road-7,<br>Bashundhara R/A,<br>Dhaka.</p>
				<p>(+80) 02 999 44 55</p>
			</address>
			<span><img alt="" src="assets/img/sun.png"></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address>
				<p><?php echo $title.$fname." ".$lname ?> <br></p>
			</address>
			<table class="meta">
				<tr>
					<th><span > Patients Invoice #</span></th>
					<td><span ><?php echo $id; ?></span></td>
				</tr>
				<tr>
					<th><span >Date</span></th>
					<td><span ><?php echo $cout; ?> </span></td>
				</tr>
				
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Item</span></th>
						<th><span >No of Days</span></th>
						<th><span >Rates</span></th>
						<th><span >People</span></th>
						<th><span >Price</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span ><?php echo $Type_appoint; ?></span></td>
						<td><span ><?php echo $days; ?> </span></td>
						<td><span data-prefix>$</span><span ><?php  echo $fee_amount;?></span></td>
						<td><span ><?php echo $n_patients ;?> </span></td>
						<td><span data-prefix>$</span><span><?php echo $ttot; ?></span></td>
					</tr>
					<tr>
						<td><span ><?php echo $Type_appoint; ?>  Type_appoint </span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span data-prefix>$</span><span ><?php  echo $Type_appoint;?></span></td>
						<td><span ><?php echo $n_patients ;?> </span></td>
						<td><span data-prefix>$</span><span><?php echo $btot; ?></span></td>
					</tr>
					<tr>
						<td><span ><?php echo $Refreshment; ?>  </span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span data-prefix>$</span><span ><?php  echo $type_of_Refreshment?></span></td>
						<td><span ><?php echo $n_patients ;?> </span></td>
						<td><span data-prefix>$</span><span><?php echo $mepr; ?></span></td>
					</tr>
				</tbody>
			</table>
			
			<table class="balance">
				<tr>
					<th><span >Total</span></th>
					<td><span data-prefix>$</span><span><?php echo $fintot; ?></span></td>
				</tr>
				<tr>
					<th><span >Amount Paid</span></th>
					<td><span data-prefix>$</span><span >0.00</span></td>
				</tr>
				<tr>
					<th><span >Balance Due</span></th>
					<td><span data-prefix>$</span><span><?php echo $fintot; ?></span></td>
				</tr>
			</table>
		</article>
		<aside>
			<h1><span >Contact us</span></h1>
			<div >
				<p align="center">Email :- info@sunrise.com || Web :- www.sunrise.com || Phone :- +94 65 222 44 55 </p>
			</div>
		</aside>
	</body>
</html>
<?php
$free="Free";
$nul = null;
$rpsql = "UPDATE `apoint_type` SET `place`='$free',`cusid`='$nul' where `cusid`='$id'";
if(mysqli_query($con,$rpsql))
{
	$delsql= "DELETE FROM `appoinment` WHERE id='$id' ";
	
	if(mysqli_query($con,$delsql))
	{
	
	}
}
?>
<?php 

ob_end_flush();

?>