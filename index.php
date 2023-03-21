<?php
include 'register.php';
include("login.php");

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <style>
        body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
          background-image: url("../vehicle/images/image-removebg-preview\ \(2\).png");
          background-repeat: no-repeat;
          background-size: cover;
        }
        header {
          background-color: #f1f1f1;
          color: black;
          /* padding: 1rem; */
          text-align: center;
        }
        nav {
          background-color: #fff;
          overflow: hidden;
        }
        nav a {
          float: left;
          color: #fff;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }
        nav a:hover {
          background-color: #ddd;
          color: #333;
        }
        .content {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          margin: 2rem 0;
        }
        .card {
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          max-width: 300px;
          margin: 1rem;
          text-align: center;
          font-size: 1.2rem;
          /* background-color: #f2f2f2; */
          border-radius: 10px;
        }
        .card img {
          max-width: 100%;
          border-radius: 10px 10px 0 0;
        }
        .card h2 {
          font-size: 2rem;
          margin: 0.5rem;
        }
        .card p {
          margin: 0.5rem;
        }
      </style> -->
</head>
<body>
  
        
     <!-- Login Modal -->
   <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form class="modal-content" action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF'])); ?>" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button name="login_btn" type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>
    </div>
  </div>
  <!-- Registration modal  -->


  <!-- Modal -->
<div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registrationModalLabel">Registration Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF'])); ?>">
          <div class="mb-3">
            <label for="name" class="form-label">Username</label>
            <input type="text" class="form-control" id="name" name="username">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">confirm password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword">
          </div>
          <button type="submit" name="register_btn" class="btn btn-primary">Register</button>
        </form>
      </div>
    </div>
  </div>
</div>
        
      
      
      <style>
		body {
      background-image: url(../Carr/images/City\ driver-bro.svg);
			/* background-image: url("../vehicle/images/bd.jpeg"); */
			background-repeat: no-repeat;
			background-size: cover;
			margin: 20px;
			padding: 0;
			font-family: Arial, sans-serif;
      opacity: 0.8;
      background-position: center;
      height: 450px;
      

		}
            

		.container {
			max-width: 960px;
			margin: 0 auto;
			padding: 10px;
			color: green;    
			text-align: center;
			text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
      opacity: 0.3;
		}

		h1 {
			font-size: 70px;
			margin-top: 10px;
		}

		p {
			font-size: 24px;
			margin-bottom: 40px;
		}

		a {
			display: inline-block;
			background-color: #fff;
			color: #333;
			padding: 10px 20px;
			border-radius: 5px;
			text-decoration: none;
			font-weight: bold;
			margin-top: 20px;
		}

		a:hover {
			background-color: #333;
			color: #fff;
		}
	</style>
        <div class="text-right pt-3">
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#registrationModal">Register</button>
        </div>
         <div class="container">
		       <h1>Register your Car With Us</h1>
		      <!-- <p>We are passionate about cars and love to share our knowledge with others. With us you can register your car  or even change ownership with us.</p>
          <p>Start your Journey by Registering as a user.</p> -->
		      <!-- <a href="#">WELCOME </a> -->
	      </div>
        
   
          
</body>
</html>
<?php
          // include '../Carr/admin/includes/footer.php'
          ?>