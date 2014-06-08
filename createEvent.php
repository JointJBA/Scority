<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Scority</title>
  <link rel="stylesheet" href="css/foundation.min.css" />
  <link rel="stylesheet" href="css/custom.css" />
  <script src="js/vendor/modernizr.js"></script>
</head>
<body>

  <div class="banner">


    <!-- Banner text -->
    <div class="row fullWidth text-center">
      <h1>Scority</h1>
      <h2>Help a cause and score points!</h2>

      <form action="theater.php" method="get">
    <div class="row text-center"><h4 class="banner-subtext">View Details of an Event</h4></div>
    <div class="row text-center"><div class="large-4 large-centered columns"><input type="text" name="theater_name"></div></div>
    <div class="row text-center"><input class="button radius" type="submit" value="Find"></div>
    </form>
    </div>

  </div>





  <div class="row fullWidth">
    <div class="large-5 large-centered panel columns">
    <div class="large-12 text-center columns">

      <h1>Create An Event</h1>
      <br>
      <br>
      <br>
      </div>
      

      <form action="handler.php" method="post">

        <div class="row">
          <div class="small-10">
            <div class="row">
              <div class="small-2 small-offset-1 columns">
                <label for="event_name" class="right inline">Event Name</label>
              </div>
              <div class="small-8 small-offset-1 columns">
                <input type="text" name="event_name" placeholder="event_name">
              </div>
            </div>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="small-10">
            <div class="row">
              <div class="small-2 small-offset-1 columns">
                <label for="owner" class="right inline">Charity Name</label>
              </div>
              <div class="small-8 small-offset-1 columns">
                <input type="text" name="owner" placeholder="owner">
              </div>
            </div>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="small-10">
            <div class="row">
              <div class="small-2 small-offset-1 columns">
                <label for="hours" class="right inline">Hours</label>
              </div>
              <div class="small-8 small-offset-1 columns">
                <input type="text" name="hours" placeholder="hours">
              </div>
            </div>
          </div>
        </div>

        <br>
        <div class="row">
          <div class="small-10">
            <div class="row">
              <div class="small-2 small-offset-1 columns">
                <label for="date" class="right inline">Date</label>
              </div>
              <div class="small-8 small-offset-1 columns">
                <input type="text" name="date" placeholder="date">
              </div>
            </div>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="small-10">
            <div class="row">
              <div class="small-2 small-offset-1 columns">
                <label for="location" class="right inline">Location</label>
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
          <div class="small-12 ">
            <div class="row text-center">
                <button type="submit" class="radius button">Create</button>

            </div>
          </div>
        </div>

      </form>
    </div>

  </div>




  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>
