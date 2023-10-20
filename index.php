<?php
  session_start();
  $isIndex = 1;
  if(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id'])) {
   header('Location: teacher.php');
  } else {
    if(!$isIndex) header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Student Attendance</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
   <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
 </head>
 <body>
 
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Online Attendance</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  <div class="container">
    <br><br><br>
    <h2>For Students</h2>
    <h4>Click here for <a href="student.php">Student Dashboard</a></h4>
    <hr>
    <h2>For Faculty</h2>
    <div class="alert alert-warning hidden">
      <span></span>
      <button type="button" class="close" onclick="$('.alert').addClass('hidden');">&times;</button>
    </div>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Login</th>
          <th>Sign Up</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <form id="login">
              <div class="form-group">
                <label>Email ID</label>
                <input class="form-control" placeholder="Email" type="email" name="email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" placeholder="Password" type="password" name="password">
              </div>
              <button class="btn btn-primary pull-right">Login</button>
            </form>
          </td>
          <td>
            <form id="signup">
              <div class="form-group">
                <label>Name</label>
                <input class="form-control" placeholder="Name" type="text" name="name">
              </div>
              <div class="form-group">
                <label>Phone Number</label>
                <input class="form-control" placeholder="Phone" type="text" name="phone">
              </div>
              <div class="form-group">
                <label>Email ID</label>
                <input class="form-control" placeholder="Email" type="email" name="email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" placeholder="Password" type="password" name="password">
                <span class="help-block">Password should be 6 characters long.</span>
              </div>
              <div class="form-group">
                <label>Re-type Password</label>
                <input class="form-control" placeholder="Re-type Password" type="password" name="password2">
              </div>
              <button class="btn btn-primary pull-right">Sign Up</button>
            </form>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <br>
  <hr>
  <br><br><br>
  <section class="about" id="about">
    <div class="container">
        <h1>About Attendance Management System</h1>
        <br>
                <h3>Attendance Management System is a web application developed for daily student attendance in
            colleges. </h3>
                    <h3>If facilitates to access the attendance information of a particular student in a particular 
            class.</h3><br> <h4 style="line-height: 1.5;"><i>The attendance will be marked by the teachers for a particular class. Each teacher will be 
            given a separate user name and password. This system will also help in evaluating attendance 
            eligibility criteria of a student. Automatic reports on student’s attendance will be generated at the 
            end of session or in between of the session.</i></h4>
        </div>
        <br><br><br><br><br><br><br><br><br>


  </section>
  <hr>
  <section class="contact" id="contact">
    <div class="container">
        <h1>Developed by:</h1>   <br><br><br>
        <table class="table table-bordered table-striped">
      <thead>
        <tr>
            <th><h3>Haris Moin</h3></th>
          <th><h3>Aryaman Gupta</h3></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            
            <h4>Faculty number: 20CAB106</h4>
            <h4>Enrollment number: GK2110</h4>
            <h4>E-mail: haris.moin.88@gmail.com</h4>
            <h4>Phone: <a href='tel:7454934003'>7454934003</a></h4>
            
          </td>
         
          
              <td>
          <h4>Faculty number: 20CAB115</h4>
            <h4>Enrollment number: GK5081</h4>
            <h4>E-mail: gupta.aryaman001@gmail.com</h4>
            <h4>Phone: <a href='tel:9219947544'>9219947544</a></h4>
          </td>
          
          </tr>
          
      </tbody>
    </table>  
    </div>

  </section><br><br><br><br><br>
</div>    
<!-- FOOTER -->
<style>
    footer {
        text-align: center;
        padding: 3px;
        background-color: black;
        color: white;
    }
    </style>
      <footer >
          <br><br><br>
          <button type="button" style="margin-right: 40px; margin-bottom: 40px"><a href="#">Back to top</a></button>
          <br><br><br>
      </footer>
</div>

 </body>
</html>
