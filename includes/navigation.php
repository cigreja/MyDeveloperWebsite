
<?php
// get page to set active on nav bar
$uri = explode("/", $_SERVER['REQUEST_URI']);
$page = $uri[sizeof($uri) - 1];
$home = ($page == "index.php")?"active":"";
$projects = ($page == "projects.php")?"active":"";
$about = ($page == "about.php")?"active":"";
$contact = ($page == "contact.php")?"active":"";
?>

<!-- some header logo -->
<div id="logo">
    <div class="logo-my-name"> Carlos Igreja </div>
    <div class="logo-developer"> Developer </div>
    <br/>
</div>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- center nav bar items -->
        <style>
            .navbar .navbar-nav {
                display: inline-block;
                float: none;
                vertical-align: top;
            }

            .navbar .navbar-collapse {
                text-align: center;
            }
        </style>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul id="nav-bar-list" class="nav navbar-nav" >
                <li class="<?php echo $home; ?>" style="font-family: 'Sedgwick Ave Display';"><a href="index.php">Home</a></li>
                <li class="<?php echo $projects; ?>"><a href="projects.php">Projects</a></li>
                <li class="<?php echo $about; ?>"><a href="about.php"  >About</a></li>
                <li class="<?php echo $contact; ?>"><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>


