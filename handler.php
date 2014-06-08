<?php 

$event_name = $_POST["event_name"];
$owner = $_POST["owner"];
$hours = $_POST["hours"];
$location = $_POST["location"];
$date = $_POST["date"];

$url = "vserver.php?cmnd=createEvent&name=$event_name&owner=$owner&hours=$hours&location=$location&date=$date";
//http_get($url);
?>


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
<script>
$.get("<?php echo $url ?>");
</script>
  <div class="banner">


    <!-- Banner text -->
    <div class="row fullWidth text-center">
      <h1>Scority</h1>
      <h2>Help a cause and score points!</h2>
    </div>

  </div>





  <div class="row fullWidth">
    <div class="large-5 large-centered text-center panel columns">
    	<h1>Event Successfuly created!</h1>
    	<a class="button radius" href="index.php">Go Back</a>
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
