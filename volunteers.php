<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Scority</title>
  <link rel="stylesheet" href="css/foundation.min.css" />
  <link rel="stylesheet" href="css/custom.css" />
  <script src="js/vendor/modernizr.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.js"></script>
</head>
<body>



  <div class="banner">


    <!-- Banner text -->
    <div class="row fullWidth text-center">
      <h1>Scority</h1>
      <h2>Help a cause and score points!</h2>
  </div>
  </div>
        <?php 

if (isset($_POST['submit'])){
  print_r($_POST);
  echo "<script>$.get('vserver.php?cmnd=createu&email=" . $_POST['email'] . "&password=" . $_POST['password'] . "&location=" . $_POST['location'] . "&bio=" . $_POST['bio'] . "');</script>";

}  //create user with these attributes

?>  



<div class="row text-center fullWidth">
  <ul class="tabs" data-tab>
    <li class="tab-title active"><a href="#panel2-1">Sign In</a></li>
    <li class="tab-title"><a href="#panel2-2">Sign Up</a></li>

  </ul>
  <div class="tabs-content">
    <div class="content active" id="panel2-1">
         <div class="large-12 right panel columns">
      <h1>Login</h1>
      <br>

      <form NAME="LOGIN" ACTION="user.php" METHOD="POST">

        <div class="row">
          <div class="small-10">
            <div class="row">
              <div class="small-2 small-offset-1 columns">
                <label for="username" class="right inline">email</label>
              </div>
              <div class="small-8 small-offset-1 columns">
                <!-- Here is the actual textfield -->
                <input type="text" name="email" id="email" placeholder="email">
              </div>
            </div>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="small-10">
            <div class="row">
              <div class="small-2 small-offset-1 columns">
                <label for="password" class="right inline">Password</label>
              </div>
              <div class="small-8 small-offset-1 columns">
                <!-- Here is the actual textfield -->
                <input type="password" name="password" id="password" placeholder="Password">
              </div>
            </div>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="small-12 ">
            <div class="row">
              <div class="small-12 text-center columns">
                <input type="submit" name="submit" class="button radius">
              </div>
            </div>
          </div>
        </div>

      </form>
    </div>




    </div>
    <div class="content" id="panel2-2">
      <div class="large-4 large-centered columns">
        <div class="register panel text-center radius">

          <h1>Register</h1>
          <br>
          <FORM NAME="register" ACTION="" METHOD="POST">
            <div class="large-10 large-centered columns">
              <div class="row">
                <div class="large-4 columns">
                  <label class="left inline" for=
                    "username">Email:</label>
                </div>
                <div class="large-8 columns">
                  <INPUT TYPE="text" NAME="email" VALUE="">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="large-4 columns">
                  <label class="left inline" for=
                    "username">Password:</label>
                </div>
                <div class="large-8 columns">
                  <INPUT TYPE="password" NAME="password" VALUE="">
                </div>
              </div>
              <br>
                <div class="row">
          <div class="small-10">
            <div class="row">
              <div class="small-2 small-offset-1 columns">
                <label for="location" class="right inline">Location:</label>
              </div>
              <div class="small-8 small-offset-1 columns">
                <select name="location">
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="DC">District Of Columbia</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
                </select>
              </div>
            </div>
          </div>
        </div>
              <br>
              <div class="row">
                <div class="large-4 columns">
                  <label class="left inline" for=
                    "username">Describe Yourself:</label>
                </div>
                <div class="large-8 columns">
                  <textarea TYPE="text" NAME="bio" VALUE=""></textarea>
                </div>
              </div>
              <br>
            </div>
            <input type="submit" class="button radius" name="submit" value="Register">
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>

        <div class="row">
          <div class="small-12 text-center">
          <a href="index.php" class="button radius">Home</a>
          </div>
        </div>




  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>