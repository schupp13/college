<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Form</title>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="css/userRegister.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm  navbar-light">
  <ul class="navbar-nav nav-justified w-100">
    <li class="nav-item active">
      <a class="nav-link" href="../index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Academics</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Admissions</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Student Life</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Research</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Athletics</a>
    </li>
    <li class="nav-item signUpButton">
      <a class="nav-link btn btn-info active" href=>Sign Up</a>
    </li>
    <li class="nav-item loginButton">
      <a class="nav-link btn btn-info" data-toggle="modal" data-target="#myModal">Login</a>
    </li>

  </ul>
</nav>
<header>
  <div class="jumbotron jumbotron-fluid" id="indexHeader">
  <div class="container text-center">
    <h1  id="header">Become a Pseudo College student</h1>
    <p>Register Now</p>
  </div>
</div>
</header>
    <div class="container d-flex justify-content-center ">
      <form action="../process/formProcess.php" method="post">
        <div class="text-center">
          <h1>Student Registration Form</h1>
        </div>
      <div class="row">
        <div class="col-lg-6">

          <fieldset>
            <legend>Profile Information</legend>
          <div class="form-group">
            <label for="firstName">First Name:</label>
            <input name="firstName"type="text" class="form-control" id="firstName" required >
          </div>
          <div class="form-group">
            <label for="lastName">Last Name:</label>
            <input name="lastName" type="text" class="form-control" id="lastName" required>
          </div>
          <div class="form-group">
            <label for="email">Email address:</label>
            <input name="email" type="eamil" class="form-control" id="email" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone"
            class="form-control"
            >
          </div>
          <div class="form-group">
            <label for="gender" class="col-sm-2 control-label">Gender:</label>
            <select class="form-control" id="gender" name="gender" required>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
          <div class="form-group">
            <label for="notes">Special Notes:</label>
            <textarea class="form-control" name="notes" rows="8" cols="40" placeholder="type here..." id="notes"></textarea>
          </div>
          </fieldset>
        </div>

        <div class="col-lg-6">
          <fieldset>
            <legend>Current Address</legend>
            <div class="form-group">
              <label for="streetAddress">Street Address:</label>
              <input name="streetAddress" type="text" class="form-control" id="streetAddress" required>
            </div>
            <div class="form-group">
              <label for="streetAddress2">Street Address 2:</label>
              <input name="streetAddress2" type="text" class="form-control" id="streetAddress2">
            </div>
            <div class="form-group">
              <label for="city">City:</label>
              <input name="city" type="text" class="form-control" id="city" required >
            </div>
            <div class="form-group">
              <label for="state">State:</label>
                <select class="form-control" id="state" name="state" required>
                  <option value="">N/A</option>
                  <option value="AK">Alaska</option>
                  <option value="AL">Alabama</option>
                  <option value="AR">Arkansas</option>
                  <option value="AZ">Arizona</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DC">District of Columbia</option>
                  <option value="DE">Delaware</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="IA">Iowa</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MD">Maryland</option>
                  <option value="ME">Maine</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MO">Missouri</option>
                  <option value="MS">Mississippi</option>
                  <option value="MT">Montana</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="NE">Nebraska</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NV">Nevada</option>
                  <option value="NY">New York</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VA">Virginia</option>
                  <option value="VT">Vermont</option>
                  <option value="WA">Washington</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WV">West Virginia</option>
                  <option value="WY">Wyoming</option>
                </select>
            </div>
            <div class="form-group">
              <label for="postCode">Post Code:</label>
              <input name="postCode" type="text" class="form-control" id="postCode" required>
            </div>
            <fieldset>
              <legend>Create and Confirm password</legend>
              <div class="form-group">
                <label for="password">Make a Password:</label>
                <input name="password" class="form-control"type="password" placeholder="Password" name="password" id="password" required>
                <label for="confirmPassword">Confirm Password:</label>
                <input class="form-control"type="password" placeholder="Confirm Password" name="confirmPassword" id="confirmPassword" required>
              </div>

            </fieldset>
          </fieldset>

        </div>

      </div>

    <div class="row d-flex justify-content-center" style="padding:15px;">
      <div class="col-lg-12 text-center">
        <fieldset>
          <div class="form-group">
          <legend>Submit the form after reading and accepting the agreement.</legend>
            <div class="text-center"><p style="font-size:8px; width:50%; margin:0 auto;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p></div>
            <input id="agree" type="radio" name="agree" value="agree">Agree<br>
            <input id="disagree" type="radio" name="agree" value="disagree" >Disagree<br>
          </div>
          <div class="form-group submitButton" style="display:none;">
            <button class="btn btn-primary"type="submit" name="button">Submit</button>
          </div>
        </form>
        </fieldset>
      </div>
    </div>

  </div>
        <!-- NEED UPLOAD IMAGE -->
    </div>

    <div>
      <? include 'loginModal.php'; ?>
    </div>
    <script src="js/form.js"></script>


  </body>
  </html>
