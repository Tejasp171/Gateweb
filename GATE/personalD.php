
<html>
<head>
	<title>GATE APPLICATION FOR FILLING </title>
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
</head>

<body>



<ul>
  <li><a href="index.php" >Exam Details</a>
  <li><a href="personalD.php"class="active" >Personal Details</a>
  <li><a href="AddressOC.php" >Address for Correspondence</a>
  <li><a href="QualifyingDegree.php" >Qualifying Degree</a>
  <li><a href="UploadDocument.php" >Upload Documents</a>
</ul>

<div style="margin-left:16%;padding:49px 74px;height:1000px;">
  
  <div class="container">

  <form action="personalD.php">

  <div class="row">
    <div class="col-25">
      <label for="email">Email Id</label>
    </div>
    <div class="col-75">
      <input type="email" id="email" name="email" placeholder="Your email..">
    </div>
  </div>

    <div class="row">
      <div class="col-25">
       <label for="name">Name to Appear on Admit Card</label>
      </div>
      <div class="col-75">
       <input type="text" id="name" name="name" placeholder="Your name..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
       <label for="mobno">Mobile Number</label>
      </div>
      <div class="col-75">
       <input type="text" id="mobno" name="mobno" placeholder="Your mobile ..">
      </div>
    </div>


    <div class="row">
      <div class="col-25">
       <label for="DOB">Date Of Birth</label>
      </div>
      <div class="col-75">
       <input type="Date" id="DOB" name="DOB" placeholder="Your DOB ..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
       <label for="Gender">Gender</label>
      </div>
      <div class="col-75">
       <input type="radio" id="Gender" name="Gender" placeholder=""><label for="Gender">Male</label>

       <input type="radio" id="Gender" name="Gender" placeholder=""><label for="Gender">Female</label>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
       <label for="Nation">Nationality</label>
      </div>
      <div class="col-75">
       <input type="radio" id="Nation" name="Nation" placeholder=""><label for="Nation">Indian</label>

       <input type="radio" id="Nation" name="Nation" placeholder=""><label for="Nation">Other</label>
      </div>
    </div>


  <div class="row">
    <div class="col-25">
      <label for="Category">Category</label>
    </div>
    <div class="col-75">
      <select id="Category" name="Category">
        <option value="Category">OBC</option>
        <option value="Category">OPEN</option>
        <option value="Category">I AM ONLY INDIAN</option>
      </select>
    </div>
  </div>

    <div class="row">
      <div class="col-25">
       <label for="pwd">Person With Disability</label>
      </div>
      <div class="col-75">
       <input type="radio" id="pwd" name="pwd" placeholder=""><label for="pwd">Yes</label>

       <input type="radio" id="pwd" name="pwd" placeholder=""><label for="pwd">No</label>
      </div>
    </div>

    <div class="row">
     <div class="col-25">
      <label for="desh">Country Of Parmanent Residence</label>
     </div>
     <div class="col-75">
      <select id="desh" name="desh">
        <option value="desh">India</option>
        <option value="desh">Pakistan</option>
        <option value="desh">United States Of America</option>
      </select>
     </div>
    </div>


    <div class="row">
     <div class="col-25">
      <label for="state">State/Unoin Territory  Of Parmanent Residence</label>
     </div>
     <div class="col-75">
      <select id="state" name="state">
        <option value="state">Maharashtra</option>
        <option value="state">Chennai</option>
        <option value="state">Delhi</option>
      </select>
     </div>
    </div>

     <div class="row">
     <div class="col-25">
      <label for="PID">Valid Photo Id</label>
     </div>
     <div class="col-75">
      <select id="PID" name="PID">
        <option value="PID">Adhar Card</option>
        <option value="PID">Pan Card</option>
        <option value="PID">Driving Licence</option>
      </select>
     </div>
    </div>

    <div class="row">
      <div class="col-25">
       <label for="PIDno">Valid Photo Id Number</label>
      </div>
      <div class="col-75">
       <input type="text" id="PIDno" name="PIDno" placeholder="Your Valid Photo Id Number ..">
      </div>
    </div>

         <div class="row">
      <div class="col-25">
       <label for="nameParent">Name Of Parent/Guardian</label>
      </div>
      <div class="col-75">
       <input type="text" id="nameParent" name="nameParent" placeholder="Name Of Parent/Guardian..">
      </div>
    </div>

     <div class="row">
      <div class="col-25">
       <label for="mobParent">Mobile Number Of Parent/Guardian</label>
      </div>
      <div class="col-75">
       <input type="text" id="mobParent" name="mobParent" placeholder="Parent's mobile number..">
      </div>
    </div>


<!--
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