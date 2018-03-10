<?php
        if(!empty($_GET['err']))
		 {
			    $er=$_GET['err'];
  				if($er==4)
				{
				  $msg= "this email address or password doesnot exist";
  				}
		 }
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Library management | adminpage</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Legit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
		$("select").on("click" , function() {
  
  $(this).parent(".custom-select").toggleClass("open");
  
});

$(document).mouseup(function (e)
{
    var container = $(".custom-select");

    if (container.has(e.target).length === 0)
    {
        container.removeClass("open");
    }
});


$("select").on("change" , function() {
  
  var selection = $(this).find("option:selected").text(),
      labelFor = $(this).attr("id"),
      label = $("[for='" + labelFor + "']");
    
  label.find(".selection-choice").html(selection);
    
});
	</script>
	<!-- //Meta Tags -->
	<!-- Style Sheets -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--// Bootstrap-CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--// Font-Awesome-CSS -->
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all" />
	<!--// Owl-Carousel-CSS -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Style Sheets -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Khula:300,400,600,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<!--// web-fonts -->
    
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
	<!-- banner -->
	<div class="banner" id="home">

		<header>
			<div class="container">
				<div class="header-bottom-agileits">
					<div class="w3-logo">
						<h1><a href="templet.php">Library</a></h1>
					</div>
                    <div class="container" style='margin-top:0px;margin-left:1000px'>
                   <a  href="templet.php#login" class="scroll" style="color:white"> <div  class="btn btn-info btn-lg">
					
          <span class="glyphicon glyphicon-log-in"style='margin-top:0px;margin-left:0px'></span> Log in
        </div></a>
				<a  href="templet.php#signup" class="scroll" style="color:white"><div  class="btn btn-info btn-lg"  style="background-color:  #F90;
    border-color: #F90">	
                   
          <span class="glyphicon glyphicon-user"></span> 
        
              </div>   </a>    
  <button type="button" class="btn btn-success glyphicon glyphicon-search" style="font-size: 23px"></button>
</div>
<div class="clearfix"></div>
				</div>
			</div>
		</header>
		<div class="container">
			<!-- header -->
			<!-- //header -->
            
			<div class="banner-text-w3-agileits">
            
				<h5>We Help to Find</h5>
				<h2><span>E</span>very <span>B</span>ook <span>H</span>ere</h2>
				<p>Choose from the widest  Engineering disciplines . click here to view.</p>
				<div class="botton">
					<a data-toggle="modal" data-target="#myModal4">Read More</a>
				</div>
                

			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- navigation -->

	<div class="nav-bg">
		<div class="container">
			<nav class="navbar navbar-default shift">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
					    aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>

				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a class="active" href="templet.php">Home</a></li>
						<li><a class="scroll" href="#admin">Admin</a></li>
						<li><a class="scroll" href="#team">Attorneys</a></li>
						<li><a class="scroll" href="#clients">Students</a></li>
						<li><a class="scroll" href="#contact">Contact</a></li>
					</ul>

				</div>
				<!-- /.navbar-collapse -->

			</nav>
		</div>
	</div>
	<!-- //navigation -->
	<!-- Modal1 -->
	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>DISCIPLINES</h4>
					<img src="images/modal.jpg" alt=" " class="img-responsive">
					<h5>The available  Engineering disciplines are : </h5>
					<p>	► Aerospace engineering‎ (24 C, 164 P)
•	► Audio engineering‎ (7 C, 229 P)
•	► Automation‎ (18 C, 122 P)
•	► Automotive engineering‎ (2 C, 52 P)
B
•	► Biological engineering‎ (8 C, 72 P)
•	► Broadcast engineering‎ (12 C, 281 P)
•	► Building engineering‎ (19 C, 258 P)
C
•	► Ceramic engineering‎ (1 C, 36 P)
•	► Chemical engineering‎ (18 C, 73 P)
•	► Civil engineering‎ (20 C, 155 P)
•	► Combustion engineering‎ (5 C, 12 P)
•	► Computer engineering‎ (8 C, 38 P)
•	► Control engineering‎ (5 C, 80 P)
•	► Cost engineering‎ (23 P)
E
•	► Electrical engineering‎ (35 C, 233 P)
•	► Electronic engineering‎ (29 C, 145 P)
•	► Energy engineering‎ (3 C, 8 P)
•	► Environmental engineering‎ (16 C, 208 P)
•	► Explosives engineering‎ (1 C, 28 P)
G
•	► Genetic engineering‎ (9 C, 93 P)
•	► Glass engineering and science‎ (9 C, 61 P)
I
•	► Industrial engineering‎ (8 C, 72 P)
M
•	► Marine engineering‎ (7 C, 14 P)
•	► Mechanical engineering‎ (29 C, 207 P)
•	► Military engineering‎ (11 C, 37 P)
•	► Mining engineering‎ (3 C, 33 P)
O
•	► Offshore engineering‎ (1 C, 33 P)
•	► Operations research‎ (12 C, 32 P)
P
•	► Petroleum engineering‎ (5 C, 60 P)
•	► Planetary engineering‎ (3 C, 18 P)
•	► Process engineering‎ (4 C, 16 P)
R
•	► Reliability engineering‎ (5 C, 83 P)
S
•	► Safety engineering‎ (4 C, 90 P)
•	► Software engineering‎ (23 C, 55 P)
•	► Structural engineering‎ (26 C, 159 P)
•	► Systems engineering‎ (17 C, 215 P)
•	► Systems science‎ (16 C, 21 P)
T
•	► Telecommunications engineering‎ (16 C, 123 P)
•	► Textile engineering‎ (1 C, 9 P)
V
•	► Vacuum systems‎ (3 C, 19 P)
W
	Wind engineering
	Wireless engineering</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->
<br><br<br>
<!-- //banner -->
	<!-- navigation -->

	<div class="nav-bg1">
		<div class="container">
			<nav class="navbar navbar-default shift">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
					    aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>

				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<form method='post' action='newtable.php' class="form-wrapper cf" style="padding: 20px">                     
   <div class="row"> <div class="col-md-3"><input type="text" placeholder='enter the name'></div>
					<?php
					   include('connection.php');
					    $qry = " select * from branch_table";
						$dept = mysql_query($qry);
						$qry1 = " select * from semester_table";
						$sem = mysql_query($qry1);
						echo" <div class='col-md-2'><div class='custom-select'>
    <label for='select-choice1' class='label select-1'><span class='selection-choice'>BRANCH</span> </label>
                             <select id='select-choice1' class='select'><option> Choose branch*</option>";
				        while($depart = mysql_fetch_array($dept, MYSQL_ASSOC)){
				        echo"<option value='".$depart['b_id']."'>".$depart['b_title']."</option>";
				   		}
						echo"</select></div></div>
						<div class='col-md-2'><div class='custom-select'>
    <label for='select-choice3' class='label select-3'><span class='selection-choice'>SEMESTER</span> </label>
    <select id='select-choice3' class='select' name='semester'>
                        <option>Select semester*</option>";
                        while($semes = mysql_fetch_array($sem, MYSQL_ASSOC)){
				        echo"<option value='".$semes['sem_id']."'>".$semes['sem_title']."</option>";
				   		}
						?>
</select></div></div>
<div class="col-md-5"><input type="text" placeholder='enter the subject' style="margin-left: 45px">
<button type='submit'>SEARCH</button></div></div>
</form></div>
				<!-- /.navbar-collapse -->

			</nav>
		</div>
	</div>
	<!-- //navigation -->
<div style="background: #d1d1d1">
<div  id="admin" class="limiter">
	<div class="container-table100">
		<div class="wrap-table100">
			<div class="table100 ver1 m-b-110" style="max-height: 400px;overflow: scroll;overflow-x: hidden">
                <table data-vertable="ver1">
					     <div class="panel panel-primary">
							<div class="panel-heading">
 						 	<center><b><h1>MEMBERS DETAILS</h1></b></center>
							</div>
                    	 </div><br><br>
							<thead>
							<tr class="row100 head">
							<th class="column100 column1" data-column="column1">STUDENT ID</th>
							<th class="column100 column2" data-column="column2">EMPLOYEE NAME</th>
							<th class="column100 column3" data-column="column3">EMAIL ID.</th>
							<th class="column100 column4" data-column="column4">PASSWORD</th>
							<th class="column100 column5" data-column="column5">SUBJECT</th>
							<th class="column100 column6" data-column="column6">BRANCH</th>
							<th class="column100 column7" data-column="column7">SEMESTER</th>
							<th class="column100 column8" data-column="column8">GENDER</th>
							<th class="column100 column9" data-column="column9">ADDRESS</th>
							<th class="column100 column10" data-column="column10">CONTACT</th>
							<th class="column100 column11" data-column="column11">IMAGE</th>
							<th class="column100 column12" data-column="column12">OPTIONS</th>
							</tr>
							</thead>
							<?php
							require('connection.php');
							$qry="select * from signup_table
							inner join branch_table on signup_table.s_branch=branch_table.b_id
							inner join semester_table on signup_table.s_semester=semester_table.sem_id";
							$rs=mysql_query($qry);
							$n = 1;
							while($row=mysql_fetch_array($rs,MYSQL_ASSOC))
							{
								$x=$row['s_id'];
								echo "<tr>
								<td class='column100 column1' data-column='column1'><form method='post' action='delete2.php'><input 																																																																																												type='checkbox' name='id[]' value='".$x."'>".$n ."</td>
								<td class='column100 column2' data-column='column2'>" .$row['s_name'] ."</td>
								<td class='column100 column3' data-column='column3'>" .$row['s_email'] ."</td>
								<td class='column100 column4' data-column='column4'>" .$row['s_password'] ."</td>
								<td class='column100 column5' data-column='column5'>" .$row['s_subject'] ."</td>
								<td class='column100 column6' data-column='column6'>" .$row['b_title'] ."</td>
								<td class='column100 column7' data-column='column7'>" .$row['sem_title'] ."</td>
								<td class='column100 column8' data-column='column8'>" .$row['s_gender'] ."</td>
								<td class='column100 column9' data-column='column9'>" .$row['s_address'] ."</td>
								<td class='column100 column10' data-column='column10'>" .$row['s_contact'] ."</td>
								<td class='column100 column11' data-column='column11'><img src='uploads/".$row['s_image']."' height='100px'>								</td>
								<td class='column100 column12' data-column='column12'><a href=''>view</a>/<a href='edit1.php?uid=$x'>edit								</a>/<a href='delete2.php?uid=$x'>delete</a></td>
								</tr>";	
								$n++;
								}
								?>
                   </table>
    </div><br>
	<button type='button' class='btn btn-success'><a href='php1.php' style='color:white'>ADD NEW RECORD</a></button>
	<button type='button' class='btn btn-warning'><a href='edit1.php' style='color:white'>EDIT RECORD</a></button>
	<button type='submit' class='btn btn-danger'>DELETE RECORD</button></form><br><br><br>
<div class="table100 ver3 m-b-110" style="max-height: 400px;overflow: scroll;overflow-x: hidden">
<table  data-vertable="ver3">
					<div class='row'>
					<div class="panel panel-warning">
						<div class="panel-heading">
 						 <center><b><h1>DEPARTMENTS DETAILS</h1></b></center>
						</div>
                     </div> <br><br>  
<thead>
<tr class="row100 head">
<th class="column100 column1" data-column="column1">S.NO</th>
<th class="column100 column2" data-column="column2">DEPARTMENT ID</th>
<th class="column100 column3" data-column="column3">DEPARTMENT TITLE</th>
<th class="column100 column4" data-column="column4">TOTAL STUDENTS</th>
</tr>
</thead>
<?php
$qr="select * from branch_table";
$r=mysql_query($qr);
$p = 1;
while($ro=mysql_fetch_array($r,MYSQL_ASSOC))
{
echo "<tbody><tr class='row100'>
<td class='column100 column1' data-column='column1'>".$p ."</td>
<td class='column100 column2' data-column='column2'>" .$ro['b_id'] ."</td>
<td class='column100 column3' data-column='column3'>" .$ro['b_title'] ."</td>
<td class='column100 column4' data-column='column4'>" .$ro['b_strength'] ."</td>
</tr></tbody>";	
$p++;
}
?>
</table></div><br><br>
<div class="table100 ver2 m-b-110" style="max-height: 400px;overflow: scroll;overflow-x: hidden">
<table  data-vertable="ver2">
					<div class='row'>
					<div class="panel panel-info">
						<div class="panel-heading">
 						 <center><b><h1>SEMESTER DETAILS</h1></b></center>
						</div>
                     </div><br><br>   
<thead><tr class="row100 head">
<th class="column100 column1" data-column="column1">S.NO</th>
<th class="column100 column2" data-column="column2">SEMESTER ID</th>
<th class="column100 column3" data-column="column3">SEMESTER TITLE</th>
<th class="column100 column4" data-column="column4">TOTAL STUDENTS</th>
</tr></thead>
<?php
$qrs="select * from semester_table";
$rt=mysql_query($qrs);
$q = 1;
while($rom=mysql_fetch_array($rt,MYSQL_ASSOC))
{
echo "<tbody><tr class='row100'>
<td class='column100 column1' data-column='column1'>".$q ."</td>
<td class='column100 column2' data-column='column2'>" .$rom['sem_id'] ."</td>
<td class='column100 column3' data-column='column3'>" .$rom['sem_title'] ."</td>
<td class='column100 column4' data-column='column4'>" .$rom['sem_strength'] ."</td>
</tr></tbody>";	
$q++;
}
?>
</table></div><br><br>
<div class="table100 ver5 m-b-110" style="max-height: 400px;overflow: scroll;overflow-x: hidden">
<table data-vertable="ver5">
					<div class='row'>
					<div class="panel panel-danger">
						<div class="panel-heading">
 						 <center><b><h1>BOOKS DETAILS</h1></b></center>
						</div>
                     </div>  <br><br> 
<thead><tr class="row100 head">
<th class="column100 column1" data-column="column1">S.NO</th>
<th class="column100 column2" data-column="column2">BOOK ID</th>
<th class="column100 column3" data-column="column3">BOOK NAME</th>
<th class="column100 column4" data-column="column4">BOOK PUBLISHER</th>
<th class="column100 column5" data-column="column5">BOOK WRITER</th>
<th class="column100 column6" data-column="column6">BRANCH</th>
<th class="column100 column7" data-column="column7">SEMESTER</th>
<th class="column100 column8" data-column="column8">TOTAL AVAILABLE</th>
</tr></thead>
<?php
$qrst="select * from book_table
inner join branch_table on book_table.bo_branch=branch_table.b_id
inner join semester_table on book_table.bo_semester=semester_table.sem_id";
$rtu=mysql_query($qrst);
$u = 1;
while($ron=mysql_fetch_array($rtu,MYSQL_ASSOC))
{
echo "<tbody><tr class='row100'>
<td class='column100 column1' data-column='column1'>".$u ."</td>
<td class='column100 column2' data-column='column2'>" .$ron['bo_id'] ."</td>
<td class='column100 column3' data-column='column3'>" .$ron['bo_name'] ."</td>
<td class='column100 column4' data-column='column4'>" .$ron['bo_publisher'] ."</td>
<td class='column100 column5' data-column='column5'>" .$ron['bo_writer'] ."</td>
<td class='column100 column6' data-column='column6'>" .$ron['b_id'] ."</td>
<td class='column100 column7' data-column='column7'>" .$ron['sem_id'] ."</td>
<td class='column100 column8' data-column='column8'>" .$ron['sa_strength'] ."</td>
</tr></tbody>";	
$u++;
}
?>
</table></div></div></div></div><br></div>
<!--team -->
	<div class="team" id="team">
		<div class="container">
			<h5 class="title-w3">Meet Our Attorneys</h5>
			<div class="inst-grids">
				<div class="col-md-4 col-sm-4 col-xs-12 blog-gd-w3ls">
					<img src="images/team1.jpg" alt="blog-image">
					<div class="date-w3">
						<h4>Michael King</h4>
						<p class="para-w3-agile">Phasellus sed iaculis</p>
						<a href="mailto:example@mail.com">mail@example.com</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 blog-gd-w3ls">
					<img src="images/team2.jpg" alt="blog-image">
					<div class="date-w3">
						<h4>Katherin Tresa</h4>
						<p class="para-w3-agile">Phasellus sed iaculis</p>
						<a href="mailto:example@mail.com">mail@example.com</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 blog-gd-w3ls last">
					<img src="images/team3.jpg" alt="blog-image">
					<div class="date-w3">
						<h4>Steven Monroe</h4>
						<p class="para-w3-agile">Phasellus sed iaculis</p>
						<a href="mailto:example@mail.com">mail@example.com</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//team -->

	<!-- Free consultation -->
	<div class="free">
		<div class="container">
			<h5 class="sub-hdg" style="padding: 20px">We are always ready to find you anything</h5>
			<div class="botton">
                <form method='post' id="search" action='newtable.php' class="form-wrapper cf" style="width: 1250px">                     
    <input type="text" placeholder='search here' style="margin-left:230px">
<button type='submit'>SEARCH</button>
</form></div>
			</div>
		</div>
	</div>
	<!--//Free consultation -->

	<!-- Latest News -->
	<div class="practice-areas">
		<div class="container">
			<h5 class="title-w3">DEPARTMENTS</h5>
			<div class="area-main">
				<div class="col-md-6 area-inner">
					<div class="area-img1">
					</div>
					<div class="area-right p1">
						<h5>Business Law</h5>
						<p class="para-w3-agile">Phasellus sed iaculis nibh, non suscipit tortor. Aenean ante massa, lobortis et dolor eget, sollicitudin luctus arcu.
							Donec eros tortor, ultrices in lectus quis, aliquet commodo lectus.</p>
					</div>
				</div>
				<div class="col-md-6 area-inner">
					<div class="area-img2">
					</div>
					<div class="area-right p2">
						<h5>Political Law</h5>
						<p class="para-w3-agile">Phasellus sed iaculis nibh, non suscipit tortor. Aenean ante massa, lobortis et dolor eget, sollicitudin luctus arcu.
							Donec eros tortor, ultrices in lectus quis, aliquet commodo lectus.</p>
					</div>
				</div>
			</div>
			<div class="area-main">
				<div class="col-md-6 area-inner">
					<div class="area-right p3">
						<h5>Financial Law</h5>
						<p class="para-w3-agile">Phasellus sed iaculis nibh, non suscipit tortor. Aenean ante massa, lobortis et dolor eget, sollicitudin luctus arcu.
							Donec eros tortor, ultrices in lectus quis, aliquet commodo lectus.</p>
					</div>
					<div class="area-img3">
					</div>
				</div>
				<div class="col-md-6 area-inner">
					<div class="area-right p4">
						<h5>Corporate Law</h5>
						<p class="para-w3-agile">Phasellus sed iaculis nibh, non suscipit tortor. Aenean ante massa, lobortis et dolor eget, sollicitudin luctus arcu.
							Donec eros tortor, ultrices in lectus quis, aliquet commodo lectus.</p>
					</div>
					<div class="area-img4">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Latest News -->
	<!-- Clients -->
	<div class="clients-main" id="clients">
		<div class="container">
			<!-- Owl-Carousel -->
			<div class=" col-md-4 clients-left">
				<h5 class="title-w3">Clients feedback</h5>
				<p class="para-w3-agile">Duis nulla nulla, faucibus id diam ac, luctus sodales purus.</p>
				<div class="botton">
					<a href="#" data-toggle="modal" data-target="#myModal4">Read More</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div id="owl-demo" class="col-md-8 owl-carousel text-center clients-right">
				<div class="item g1">
					<div class="agile-dish-caption">
						<h4>John Smith</h4>
						<span>Lorem Ipsum</span>
					</div>
					<img class="lazyOwl" src="images/c1.jpg" alt="" />
					<div class="clearfix"></div>
					<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
						Quisque nibh ipsum,Ut accumsan.</p>
				</div>
				<div class="item g1">
					<div class="agile-dish-caption">
						<h4>Jecy Deoco</h4>
						<span>Lorem Ipsum</span>
					</div>
					<img class="lazyOwl" src="images/c2.jpg" alt="" />
					<div class="clearfix"></div>
					<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
						Quisque nibh ipsum,Ut accumsan.</p>
				</div>
				<div class="item g1">
					<div class="agile-dish-caption">
						<h4>Devid Fahim</h4>
						<span>Lorem Ipsum</span>
					</div>
					<img class="lazyOwl" src="images/c3.jpg" alt="" />
					<div class="clearfix"></div>
					<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
						Quisque nibh ipsum,Ut accumsan.</p>
				</div>
				<div class="item g1">
					<div class="agile-dish-caption">
						<h4>Honey Jisa</h4>
						<span>Lorem Ipsum</span>
					</div>
					<img class="lazyOwl" src="images/c1.jpg" alt="" />
					<div class="clearfix"></div>
					<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
						Quisque nibh ipsum,Ut accumsan.</p>
				</div>
				<div class="item g1">
					<div class="agile-dish-caption">
						<h4>Jecy Deoco</h4>
						<span>Lorem Ipsum</span>
					</div>
					<img class="lazyOwl" src="images/c2.jpg" alt="" />
					<div class="clearfix"></div>
					<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
						Quisque nibh ipsum,Ut accumsan.</p>
				</div>
				<div class="item g1">
					<div class="agile-dish-caption">
						<h4>Devid Fahim</h4>
						<span>Lorem Ipsum</span>
					</div>
					<img class="lazyOwl" src="images/c3.jpg" alt="" />
					<div class="clearfix"></div>
					<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla nulla, faucibus id diam ac, luctus sodales purus.
						Quisque nibh ipsum,Ut accumsan.</p>
				</div>
			</div>
			<!--// Owl-Carousel -->
		</div>
	</div>
	<!--// Clients -->
	<!-- contact -->
	<div class="contact-agileits-w3layouts" id="signup">
		<div class="wthree-form">
			<div class="signup-form">
				<h5 class="title-w3">SIGNUP</h5>
				<form action="submit1.php" method="post" enctype='multipart/form-data'>
					<div class="fields-grid">
						<div class="styled-input">
							<input type="text" name="name" placeholder="Name*" required>
						</div>
						<div class="styled-input">
							<input type="email" name="Email" placeholder="Email*" required>
						</div>
                        <div class="styled-input">
							<input type="text" name="password" placeholder="Password*" required>
						</div>
						<div class="styled-input">
							<input type="text" name="Subject" placeholder="Subject*" required>
						</div><br>
                       <?php
					   include('connection.php');
					    $qry = " select * from branch_table";
						$dept = mysql_query($qry);
						$qry1 = " select * from semester_table";
						$sem = mysql_query($qry1);
						echo"
                        <div class='styled-input'>
                        <select name='branch'  class='form-control input-sm'  required>
                          <option> Choose branch*</option>";
				   while($depart = mysql_fetch_array($dept, MYSQL_ASSOC)){
				       echo"<option value='".$depart['b_id']."'>".$depart['b_title']."</option>";
				   		}
                          echo"
                          </select>
                          </div><br>
                          <div class='styled-input'>
                          <select name='semester' class='form-control input-sm' required>
                           <option>Select semester*</option>";
                           while($semes = mysql_fetch_array($sem, MYSQL_ASSOC)){
				        echo"<option value='".$semes['sem_id']."'>".$semes['sem_title']."</option>";
				   		}
							 ?>
                           </select>
                 	</div>	
                 <br>
                 
				 <div>
  					<label style="padding-right:50px">
    				<input type="radio" class="option-input radio" name="gender" checked />
   					<span class="lbl"> MALE </span>
  					</label>
  					<label style="padding-right:50px">
    				<input type="radio" class="option-input radio" name="gender"/>
    				<span class="lbl">FEMALE</span>
  					</label	>
                    <label>
    				<input type="radio" class="option-input radio" name="gender" />
    				<span class="lbl">OTHERS</span>
  					</label	>
				</div><BR>
						<div class="clearfix"> </div>
					</div>
					<div class="styled-input textarea-grid">
						<textarea name="address" placeholder="address*" required></textarea>
					</div>
                    <div class="styled-input">
							<input type="text" name="contact" placeholder="contact*" required>
						</div><br>
                        <div class="styled-input">
                        <label class="fileContainer">
    Click here to upload your profile image!*
    <input type="file" required>
</label></div>
                  <div class="styled-input">       
					<input type="submit" value="Signup">
				</form>
                </div>
			</div>
            
			<div class="map-w3-agileits" id="login">
				<div class="wthree-form">
			<div class="login-form">
				<h5 class="title-w4">LOGIN</h5>
               
				<form action="#" method="post">
					<div class="fields-grid">
						<div class="styled-input">
                            <label>EMAIL*</label>
							<input type="email" name="email" required>
						</div>
						<div class="styled-input">
                        <label>PASSWORD*</label>
							<input type="password"  name="password" required>
                            
						</div><bR>
                        <div>
  					<label style="padding-right:50px">
    				<input type="radio" class="option-input radio" name="login" value="0" style="background:#000" checked />
   					<span class="lbl"> USER </span>
  					</label>
  					<label style="padding-right:50px">
    				<input type="radio" class="option-input radio" name="login" value="1" style="background:#000"/>
    				<span class="lbl">ADMIN</span>
  					</label	>
				</div><BR>
                 <?php
				  if(!empty($msg)){echo $msg;} 
				?>
                 <input type="submit" value="login"></b>
                        </div>
                     </form>
			</div>
                </div>
		</div>
	</div>
	<!-- //contact -->
	<!-- Footer -->
	<div class="w3ls_address_mail_footer_grids">
		<div class="container" id="contact">
			<div class="col-sm-4 w3ls_footer_grid_left">
				<h5 class="sub-hdg">Address</h5>
				<p>BIHLAI INSTITUTE OF TECHNOLOGY,<span>DURG,CG,INDIA</span></p>
			</div>
			<div class="col-sm-4 w3ls_footer_grid_left">
				<h5 class="sub-hdg">Contact Us</h5>
				<p>+91 85189 62078 <span>+91 76948 16166</span></p>
			</div>
			<div class="col-sm-4 w3ls_footer_grid_left">
				<h5 class="sub-hdg">Mail Us</h5>
				<p><a href="mailto:tushargupta2898@gmail.com">tushargupta2898@gmail.com</a>
					<span><a href="mailto:sannachhura@gmail.com">sannachhura@gmail.com</a></span></p>
			</div>
			<div class="clearfix"> </div>
			<h6 class="footer-logo"><a href="templet.php"><span class="fa fa-book" aria-hidden="true"></span> Library</a></h6>
			<div class="w3l-social">
				<ul>
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-google-plus"></a></li>
					<li><a href="#" class="fa fa-instagram"></a></li>
						<li><a href="#" class="fa fa-youtube"></a></li>
							<li><a href="#" class="fa fa-linkedin"></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="copyright-wthree">
		<div class="container">
			<p>&copy; 2018 Library . All Rights Reserved | Design by <a href="http://w3layouts.com/">tushar,ritwika </a></p>
		</div>
	</div>
	<!-- //Footer -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
	<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
	<!-- start-smoth-scrolling -->
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
	<!-- Owl-Carousel-JavaScript -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 2,
				lazyLoad: true,
				autoPlay: false,
				pagination: true,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
</body>

</html>