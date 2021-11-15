
<html>
<head>
	<title>GATE APPLICATION FOR FILLING </title>
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
</head>

<body>



<ul>
  <li><a href="index.php" >Exam Details</a>
  <li><a href="personalD.php" >Personal Details</a>
  <li><a href="AddressOC.php" class="active">Address for Correspondence</a>
  <li><a href="QualifyingDegree.php" >Qualifying Degree</a>
  <li><a href="UploadDocument.php" >Upload Documents</a>
</ul>

<div style="margin-left:16%;padding:49px 74px;height:1000px;">
  
  <div class="container">

  <form action="AddressOC.php">

  <div class="row">
    <div class="col-25">
      <label for="pincode">Pincode/Zipcode</label>
    </div>
    <div class="col-75">
      <input type="text" id="pincode" name="pincode" placeholder="Your pincode..">
    </div>
  </div>

    <div class="row">
      <div class="col-25">
       <label for="CountryAoc">Country</label>
      </div>
      <div class="col-75">
       <input type="text" id="CountryAoc" name="CountryAoc" placeholder="Your Country..">
      </div>
    </div>

    <div class="row">
     <div class="col-25">
      <label for="stateAoc">State/Unoin Territory  Of Parmanent Residence</label>
     </div>
     <div class="col-75">
      <select id="stateAoc" name="stateAoc">
        <option value="stateAoc">Maharashtra</option>
        <option value="stateAoc">Chennai</option>
        <option value="stateAoc">Delhi</option>
      </select>
     </div>
    </div>

  <div class="row">
    <div class="col-25">
      <label for="Addressln1">Address Line 1</label>
    </div>
    <div class="col-75">
      <input type="text" id="Addressln1" name="Addressln1" placeholder="Your Address...">
    </div>
  </div>  

  <div class="row">
    <div class="col-25">
      <label for="Addressln2">Address Line 2</label>
    </div>
    <div class="col-75">
      <input type="text" id="Addressln2" name="Addressln2" placeholder="Your Address...">
    </div>
  </div>  
     
  <div class="row">
    <div class="col-25">
      <label for="Addressln3">Address Line 3</label>
    </div>
    <div class="col-75">
      <input type="text" id="Addressln3" name="Addressln3" placeholder="Your Address...">
    </div>
  </div> 

  
    <div class="row">
     <div class="col-25">
      <label for="City">City/Town</label>
     </div>
     <div class="col-75">
      <select id="City" name="City">
        <option value="City">Mumbai</option>
        <option value="City">Nagpur</option>
        <option value="City">Nashik</option>
      </select>
     </div>
    </div>


  


<!--
  Pincode/Zipcode
  Country
  State/ Union Territory
Address Line 1
Address Line 2(Optiona)
Address Line 3(Optional)

City/Town










Email Id
Name of Candidate to Appear on Admit Card
Mobile Number
Date Of Birth
Gender
Nationality
Category
Person With Disability
Your Country
State/Unoin Territory
Valid Photo Id
Valid Photo Id Number
Name Of Parent/Guardian
Mobile Number Of Parent/Guardian-->



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