<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">GoogleMaps France</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li <?php echo ($page == "index") ? 'class="active"' : ''; ?> ><a href="index.php">Index</a></li>
            <li <?php echo ($page == "maps") ? 'class="active"' : ''; ?> ><a href="maps.php">Maps</a></li>
            <li <?php echo ($page == "contact") ? 'class="active"' : ''; ?> ><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>