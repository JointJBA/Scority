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
<?php 
print_r($_POST);
?>
  <div class="banner">


    <!-- Banner text -->
    <div class="row fullWidth text-center">
      <h1>Hi <?php echo "" ?></h1>
  </div>
  </div>




<div class="row text-center fullWidth">
<div class="row fullWidth">
<div> 
<ul class="tabs" data-tab>
  <li class="tab-title active user-tab"><a href="#panel2-1"><div class="tab-text">Profile</div></a></li>
  <li class="tab-title user-tab"><a href="#panel2-2"><div class="tab-text">Events</div></a></li>
  <li class="tab-title user-tab"><a href="#panel2-3"><div class="tab-text">Rank</div></a></li>
</ul>
    <div class="inner">
<div class="tabs-content">
  <div class="content active" id="panel2-1">
    <h2 id="email-title"></h2>  
    <br>
      
    <div class="panel radius">
    <h4>Bio:</h4>  
    <p id="bio"> 
        
    
    </p>
    </div>

      
      
      
  </div>

  <div class="content" id="panel2-2">
    <p>Second panel content goes here...</p>
  </div>
  <div class="content" id="panel2-3">
    <script>
    function getInfo(id) {
      $.get("vserver.php?cmnd=getuserinfo&id=" + id, function (datum) {
        alert(datum);
        var split = datum.split(",");
        //[1] = email [3] = points
      });
    }
    $.get("vserver.php?cmnd=ranking&location=", function(datum) {
      var split = datum.split(",");
      for(var i = 0; i < split.length; i++) {
        if(split[i].length > 0) {
          getInfo(split[i]);
        }
      }
    });

    </script>
    <p>Third panel content goes here...</p>
  </div>
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






  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>
