<!DOCTYPE html>
<html lang="en">
<head>
<title>Emergency Delivery</title>
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="css/bootstrap3.4-icons.css">
<link rel="stylesheet" href="css/datepicker.css">

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script> 
</head>
<style>
body{
 background-image: url("img/wall_num4.jpg");
}
.navig{
  margin-right:15px;
}
.navbar-inverses{
background-color:#290a29;
}
.carousel{
    background: #2f4357;
    margin-top: 20px;
}
.carousel .item img{
    margin: 0 auto; /* Align slide image horizontally center */
}
.bs-example{
  margin: 0px;
}
.cont-row{
  padding:5px;
  padding-left:30px;
  background-color:#cce9cf;
  color:black;
  border-radius:3px;
  background: rgba(76, 175, 80, 0.6)
}
</style>
<body>
<nav id="myNavbar" class="navbar navbar-default navbar-inverses navbar-fixed-top" role="navigation" style="opacity:0.9">
    <div class="navig" style="">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Remind My Schedule</a>
        </div>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal">Sign Up</a></li>
                <li><a href="#" data-toggle="modal" data-target="#login">Log In</a></li>

        </ul>
        </div>
    </div>
</nav>
 <div class="bs-example">
          <img src="img/LOGO.png" alt="First Slide"style="top:-10px;left: 0px; width: 100%; height: 428px; position: relative; opacity: 0.5;">
    </div>
</div>
 
    <div class="row ">
    <div class="cont-row">
   <h3> We can help you to remind your schedule. </h3>
   <p>We created this application to help our customer to remind their different schedules in works, mettings, schools, sports.</p>
   <p></p>
   <p>The system capable for adding new customer and it can give schedule for their different activies</p>
   <p>This system design to remind our customer through sending notification via email.</p>
   <p></p>
   <br/>
   <p>Customer must provide true identification</p>
   <p>The customer must be confirm their identification through validating their email accounts and sending back to the system so that the system will automatically add the customer to the database.</p>
   </div>

<!-- Modal for sign up-->
<form class="form-horizontal" action="signup_process.php" method="post">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
      </div>
      <div class="modal-body">
        
    <div class="form-group">
        <label for="inputEmail" class="control-label col-xs-3">First Name</label>
        <div class="col-xs-8">
            <input type="text" name="firstname" class="form-control" id="inputEmail" placeholder="First name" required/>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-3">Last Name</label>
        <div class="col-xs-8">
            <input type="text" name="lastname" class="form-control" id="inputPassword" placeholder="Last name" required/>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-3">Address</label>
        <div class="col-xs-8">
            <input type="text" name="address" class="form-control" id="inputPassword" placeholder="Address" required/>
        </div>
    </div>
  
     <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-3">email</label>
        <div class="col-xs-8">
            <input type="email" name="email" class="form-control" id="inputPassword" placeholder="email@domain.com" required/>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-3">password</label>
        <div class="col-xs-8">
            <input type="password" name="password"class="form-control" id="inputPassword" placeholder="Password" required/>
        </div>
    </div>
     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end of sign up modal-->
<!-- Modal for log in -->
<form class="form-horizontal" action="login.php" method="post">
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Log In</h4>
      </div>
      <div class="modal-body">
       
    <div class="form-group">
        <label for="inputEmail" class="control-label col-xs-3">Email</label>
        <div class="col-xs-8">
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="email@domain.com">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-3">Password</label>
        <div class="col-xs-8">
            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="password">
        </div>
    </div>
   
     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="login" class="btn btn-primary">Log In</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end for login modal -->
</div> 
</body>
</html>                                   