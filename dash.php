
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<title>Car Registration Form</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			/* background-color: #f2f2f2; */
      /* background-image: url("../vehicle/images/image-removebg-preview\ \(1\).png"); */
      background-image: url(../Carr/images/Vehicle\ Sale-bro.svg);
			background-repeat: no-repeat;
			background-size: cover;
      opacity: 1;
    
    
      ;
      
		}
		h1 {
			text-align: center;
			margin-top: 50px;
		}
		form {
			width: 50%;
			margin: auto;
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		label {
			display: block;
			margin-bottom: 10px;
		}
		input[type="text"], input[type="number"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 5px;
			border: none;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
		}
    p {
			font-size: 24px;
			margin-bottom: 40px;
      font-family: cursive;
      color: black;
      font-style: oblique;
		}
    h2 {
      /* color: #4CAF50; */
      font-weight: 900;
      font-size: 35px;
    }
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			font-weight: bold;
			transition: background-color 0.2s ease-in-out;
		}
		input[type="submit"]:hover {
			background-color: #388E3C;
		}
        button {
  background-color: #388E3C;
  color: white;
  border: none;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  cursor: pointer;
  border-radius: 5px;
  margin-bottom: 50px;
}

button:hover {
  background-color: #3e8e41;
}

	</style>
</head>
<body>
<h2 class=" text-muted text-center pt-1">We are passionate about cars and love to share our knowledge with others.</h2>
<p class="text-center">With us you can register your car  or even change ownership with us.</p>
<div style="display: flex; justify-content: center;">
  <button type="button" data-bs-toggle="modal" data-bs-target="#carRegistrationModal" style="margin-right: 10px;" >Register Car</button>
 
  <button data-bs-target="#changeRegistrationModal" data-bs-toggle="modal">Change Now</button>

</div>

<!-- Car Registration Modal -->
<div class="modal fade" id="carRegistrationModal" tabindex="-1" role="dialog" aria-labelledby="carRegistrationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="carRegistrationModalLabel">Car Registration Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="registerc.php">
          <!-- Car registration form fields -->
          <label for="make">Make:</label>
          <input type="text" name="make" id="make" required>

          <label for="model">Model:</label>
          <input type="text" name="model" id="model" required>

          <label for="year">Year:</label>
          <input type="number" name="year" id="year" min="1900" max="2099" required>

          <label for="color">Color:</label>
          <input type="text" name="color" id="color" required>

          <label for="licensePlate">License Plate:</label>
          <input type="text" name="licensePlate" id="licensePlate" maxlength="10" required>

          <button name="register_button" type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Change ownership modal -->
<div class="modal fade" id="changeRegistrationModal" tabindex="-1" role="dialog" aria-labelledby="carRegistrationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="carRegistrationModalLabel">Change Ownership Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <!-- Car ownership form fields -->
          <label for="make">Make:</label>
          <input type="text" name="make" id="make" required>

          <label for="model">Model:</label>
          <input type="text" name="model" id="model" required>

          <label for="year">Year:</label>
          <input type="number" name="year" id="year" min="1900" max="2099" required>

          <label for="color">Color:</label>
          <input type="text" name="color" id="color" required>

          <label for="licensePlate">Registration Number:</label>
          <input type="text" name="registration_number" id="registration_number" maxlength="10" required>

          <label for="licensePlate">Current Owner's Name:</label>
          <input type="text" name="current_owner_name" id="current_owner_name" maxlength="10" required>

          <label for="licensePlate">New Owner's Name:</label>
          <input type="text" name="new_owner_name" id="new_owner_name" maxlength="10" required>

          <label for="licensePlate">New's owner Address:</label>
          <input type="text" name="licensePlate" id="licensePlate" maxlength="10" required>

          <label for="licensePlate">New Owner's Contact:</label>
          <input type="text" name="new_owner-contact" id="new_owner-contact" maxlength="10" required>

          <label for="licensePlate">Date Of Transfer:</label>
          <input type="text" name="date_of_transfer" id="date_of_transfer" maxlength="10" required>         

          <button name="" type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
	
</body>
</html>
