<?php include 'vserver.php'; ?>

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

      <form action="" method="get">
    <div class="row text-center"><h4 class="banner-subtext">View Details of an Event</h4></div>
    <div class="row text-center"><div class="large-4 large-centered columns"><input type="text" name="event_name">
    </div></div>
    <div class="row text-center"><input class="button radius" type="submit" value="Find"></div>

    </form>
    </div>

  </div>





  <div class="row fullWidth">
    <div class="large-5 large-centered panel columns">
    <div class="large-12 text-center columns">
      <?php
    if(!empty($_GET)) {
      $eventname = $_GET['event_name'];
      $info = explode(',', getEventInfo(getEventId($eventname)));
      if(count($info) > 0) {
        $users = explode('-', $info[6]);
        for($i = 0; $i < count($users); $i++) {
          if(!empty($users[$i])) {
            $useremail = explode(',', getUserInfo($users[$i]))[1];

            echo "<div class='panel radius'>
    <h2> useremail</h2>
    </div>";

          }
        }
      }
    }
     ?>
      
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
