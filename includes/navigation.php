
<?php
// get page to set active on nav bar
$uri = explode("/", $_SERVER['REQUEST_URI']);
$page = $uri[sizeof($uri) - 1];
$home = ($page == "index.php")?"active":"";
$projects = ($page == "projects.php")?"active":"";
$about = ($page == "about.php")?"active":"";
$contact = ($page == "contact.php")?"active":"";

?>


<!-- bootstrap nav -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand brand-font" href="index.php">Carlos Igreja</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="<?php echo $home; ?>"><a href="index.php">Home</a></li>
                <li class="<?php echo $projects; ?>"><a href="projects.php">Projects</a></li>
                <li class="<?php echo $about; ?>"><a href="about.php"  >About</a></li>
                <li class="<?php echo $contact; ?>"><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<div id="wrapper">