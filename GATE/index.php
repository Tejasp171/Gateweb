<?php
include("includes/config.php");

//session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}

?>

<html>
<head>
	<title>GATE APPLICATION FOR FILLING </title>
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
</head>

<body>



<ul>
  <li><a href="index.php" class="active">Exam Details</a>
  <li><a href="personalD.php" >Personal Details</a>
  <li><a href="AddressOC.php" >Address for Correspondence</a>
  <li><a href="QualifyingDegree.php" >Qualifying Degree</a>
  <li><a href="UploadDocument.php" >Upload Documents</a>
</ul>

<div style="margin-left:16%;padding:49px 74px;height:1000px;">
  
  <div class="container">

  <form action="index.php">

  <div class="row">
    <div class="col-25">
      <label for="BranchEd">Select Your Branch </label>
    </div>
    <div class="col-75">
      <select id="BranchEd" name="BranchEd"> <!--TOTAL 29 BRANCHES-->
        <option value="australia">Aerospace Engineering</option>
        <option value="australia">Agricultural Engineering</option>
        <option value="australia">Architecture and Planning</option>
        <option value="australia">Biomedical Engineering</option>
        <option value="australia">Biotechnology</option>
        <option value="australia">Civil Engineering</option>
        <option value="australia">Chemical Engineering</option>
        <option value="australia">Computer Science and Information Technology</option>
        <option value="australia">Chemistry</option>
        <option value="australia">Electronics and Communication Engineering</option>
        <option value="australia">Electrical Engineering</option>
        <option value="australia">Environmental Science and Engineering</option>
        <option value="australia">Ecology and Evolution</option>
        <option value="canada">Geomatics Engineering</option>
        <option value="australia">Geology and Geophysics</option>
        <option value="australia">Instrumentation Engineering</option>
        <option value="australia">Mathematics</option>
        <option value="usa">Mechanical Engineering</option>
        <option value="usa">Mining Engineering</option>
        <option value="usa">Metallurgical Engineering</option>
        <option value="australia">Naval Architecture and Marine Engineering</option>
        <option value="canada">Petroleum Engineering</option>
        <option value="usa">Physics</option>
        <option value="usa">Production and Industrial Engineering</option>
        <option value="usa">Statistics</option>
        <option value="australia">Textile Engineering and Fibre Science</option>
        <option value="canada">Engineering Sciences</option>
        <option value="usa">Humanities & Social Sciences</option>
        <option value="usa">Life Sciences</option> <!--72-45+1== -->
                      
      </select>
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="country">Choice Of Examination City 1 </label>
    </div>
    <div class="col-75">
      <select id="country" name="Country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>
    </div>
  </div>

   <div class="row">
    <div class="col-25">
      <label for="country">Choice Of Examination City 2 </label>
    </div>
    <div class="col-75">
      <select id="country" name="Country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>
    </div>
  </div>

   <div class="row">
    <div class="col-25">
      <label for="country">Choice Of Examination City 3 </label>
    </div>
    <div class="col-75">
      <select id="country" name="Country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>
    </div>
  </div>




  <br>

  <div class="row">
    <input type="submit" value="Save">
  </div>

  </form>
 </div>
</div>



<!--<div class="container">
                  
  <ul class="nav nav-pills nav-stacked" role="tablist">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">HTML</a></li>
    <li><a href="#">CSS</a></li>
    <li><a href="#">About</a></li>        
  </ul>

</div>

		<div id="navBarContainer">
			

				<div class="navItem">
					<a href="ExamDetails.php" class="navItemLink">Exam Details</a>
				</div>

				<div class="navItem">
				    <a href="PersonalDetails.php" class="navItemLink">Personal Details</a>
				</div>

				<div class="navItem">
				    <a href="AddressforCorrespondence.php" class="navItemLink">Address for Correspondence</a>
				</div>
				<div class="navItem">
				    <a href="QualifyingDegree.php" class="navItemLink">Qualifying Degree</a>
				</div>
				<div class="navItem">
				    <a href="UploadDocument.php" class="navItemLink">Upload Documents</a>
				</div>

			
			
		</div> 

        <div id="centerContainer">
        	

        </div>-->





	
</body>

</html>