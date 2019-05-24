<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href=
    "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href=
    "https://fonts.googleapis.com/css?family=Cormorant+Unicase|Gruppo|Raleway" 
    rel="stylesheet">
  <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  </script>
  <script src=
    "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>

	<meta charset="utf-8">
	
	<title>View Pets</title>
	
  <style type="text/css">
  
		
  .footer {
    
    background-color: black;
    color: gray;
    left: 0;
    bottom: 0;
    height: 50px;
    width: 100%;
    overflow:hidden;
}

    
    
     h1 {
      
      font-family: 'Gruppo', cursive;
      font-family: 'Cormorant Unicase', serif;
      font-family: 'Raleway', sans-serif;
      }
      
    
    
    h2 {
      
      font-family: 'Gruppo', cursive;
      font-family: 'Cormorant Unicase', serif;
      font-family: 'Raleway', sans-serif;
      }
      
      
    h4 {
      
      font-family: 'Gruppo', cursive;
      font-family: 'Cormorant Unicase', serif;
      font-family: 'Raleway', sans-serif;
      }  
      
    p {
      
      font-family: 'Gruppo', cursive;
      font-family: 'Cormorant Unicase', serif;
      font-family: 'Raleway', sans-serif;
    }   
    
  </style>
</head>

<body>
<!--header--> 
<div id="header">
    <a href="home.php" alt="Rent-A-Pet - Home" >
    <img src=
      "animal-communication-petfamily400.jpg" 
      alt="volimage" style="width: 100%;">
    </a>
</div>
<!--end of header--> 

<!--start of navbar--> 
<nav class="navbar navbar-inverse" style = "margin: 0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">View Our Pets</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.html">Home</a></li>
      <li><a href="about-us.php">About Us</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" 
          href="volunteer-opportunities.php">Volunteer Opportunites
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="build-houston.php">Rebuilding Houston</a></li>
          <li><a href="ripley.php">Baker Ripley Neighborhood Center</a></li>
        </ul>
      </li>
      <li><a href="contact-us.php">Contact Us</a></li>
    </ul>
    <form class="navbar-form navbar-right">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>
<!--end of navbar--> 

<div>

<center><h1>Come Check Out Our Pets</h1></center>
<a href="https://www.aspca.org/animal-placement/aspca-adoption-center" data-toggle="tooltip" 
  data-placement="top" title="Click logo to access website!">
  <img src="aspca.jpg" alt="ASPCA-Placement" 
    style="weight:800px; height: 315px; float: left">
</a>

<h2>Organization Description</h2>
<h4>Rent-A-Pet is a non-for-profit organisation that seeks to bring pets together with 
families.  By allowing families or individuals to 'check out' a pet gives them an option to
find the best fit for their family.  And for those who are thinking about becoming a 
pet owner, they have the unique opportunity to experience being a pet owner without making
that committment until they are ready.
</h4>
<h2>Organization Information</h2>
<p>Address: 123 Pets Rd, Houston, TX 77011</p>
<p>Tel:(713) 234.5678</p>
<p>Email: <a href="mailto: rentapet@houston.org">
    rentapet@houston.org</a></p>
</div>

<center><h1>Gallery</h1></center>


 

<center><h1>Sign Up Here</h1></center>
<form class="form-horizontal" method="post" action = "volunteerform.php"> 
<fieldset>

<!-- Form Name -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="firstname">First Name</label>  
  <div class="col-md-4">
  <input id="firstname" name="firstname" type="text" placeholder="First Name" 
    class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lastname">Last Name</label>  
  <div class="col-md-4">
  <input id="lastname" name="lastname" type="text" placeholder="Last Name" 
    class="form-control input-md" required="">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="example@example.com" 
    class="form-control input-md" required="">
  </div>
</div>  

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Phone </label>  
  <div class="col-md-4">
  <input id="phone" name="phone" type="text" placeholder="(555) 555-555" 
    class="form-control input-md">
    
</div>
</div>

<center><input type="submit" value="Submit"></center>
<br>
</form>
</fieldset>


  </table>
 <br>
  



<!--Javascript--> 

<script>
/*global $*/ 
  
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});  
  
  
</script>

<!--End of Javascript--> 
    
<div class="footer">
  <p><center>&copy 2018 RENT-A-PET ALL RIGHTS RESERVED</center></p>    
</div>

</body>
</html>