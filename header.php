<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="Download.php">Valid Form</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li <?php if (strstr($_SERVER['REQUEST_URI'], "GettingStarting.php")) echo "class='active'" ;?>><a href="GettingStarting.php">Getting Starting</a></li>
                <li <?php if (strstr($_SERVER['REQUEST_URI'], "Documentation.php")) echo "class='active'" ;?>><a href="Documentation.php">Documentation <span class="sr-only">(current)</span></a></li>
                <li <?php if (strstr($_SERVER['REQUEST_URI'], "index.php")) echo "class='active'" ;?>><a href="index.php">Download <span class="sr-only">(current)</span></a></li>
                <li class="<?php if (strstr($_SERVER['REQUEST_URI'], "/Examples.php")) echo 'active' ;?> dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More example <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="Examples.php">Home</a></li>
                        <li><a href="Examples.php?#simpleExample">Simple example</a></li>
                        <li><a href="Examples.php?#callbackExample">Callback example</a></li>
                        <li><a href="Examples.php?#modalExample">Modal bootstrap example</a></li>
                        <li><a href="Examples.php?#popoverExample">Popover bootstrap example</a></li>
                        <li><a href="Examples.php?#animationExample">Animations example</a></li>
                        <li><a href="Examples.php?#javascriptlessExample">No javascript example</a></li>
                    </ul>
                </li>
                <li class="<?php if (strstr($_SERVER['REQUEST_URI'], "regExpExamples.php")) echo 'active' ?> dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More RegEx <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="regExpExamples.php">Home</a></li>
                        <li><a href="regExpExamples.php?#noEmpty">No empty value</a></li>
                        <li><a href="regExpExamples.php?#minmax">Min max characters</a></li>
                        <li><a href="regExpExamples.php?#email">Email</a></li>
                        <li><a href="regExpExamples.php?#ipv4">Ip V4</a></li>
                        <li><a href="regExpExamples.php?#macaddress">Mac address</a></li>
                        <li><a href="regExpExamples.php?#phonenumber">International phone number</a></li>
                        <li><a href="regExpExamples.php?#date">Date</a></li>
                    </ul>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>