<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="assets/css/themify-icons.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/flag-icon.min.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/cs-skin-elastic.css"> -->
    <link rel="stylesheet" href="assets/scss/widgets.css">
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
     <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header" style="padding: 20px">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand">Social Listening
                    <!-- <img src="images/logo.jpg" alt="Logo"> -->
                </a>
                <a class="navbar-brand hidden"><p>Social Listening</p>
                 <img src="images/logo.jpg" alt="Logo">
                </a>
            </div>


            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                <h3 class="menu-title">OVERVIEW</h3><!-- /.menu-title -->
                    <li>
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <!-- <li>
                        <a href="#"> <i class="menu-icon fa fa-chart-pie"></i>Statistics </a>
                    </li>             -->
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-tag"></i>Search </a>
                    </li>
                    <h3 class="menu-title">DOWNLOAD</h3><!-- /.menu-title -->
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-tag"></i>CSV file</a>
                    </li>
                    <h3 class="menu-title">ACCOUNT</h3><!-- /.menu-title -->
                    <li>
                        <a href="login.php"> <i class="menu-icon fa fa-tag>"></i> Log out </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
    <!-- Left Panel -->


    <!-- Right Panel -->

    <div id="right-panel" class="right-panel"> 

        <!-- Header-->
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-10"></div>

                <div class="col-sm-2">
                    <div class="user-area dropdown float-right">
                            STIU
                    </div>
                </div>
            </div>
        </header>

        <div class="container"> 
      
                <p><h2> Overview </h2></p>
                    
        </div>

        <div class="container">
        <div class="col-lg-3 col-md-6">
                        <div class="social-box facebook">
                            <i class="fa fa-facebook"></i>
                                  <strong><span class="count">40</span> k</strong>
                             <span>Posts</span>
                        </div>
        </div>
        <div class="col-lg-3 col-md-6">
                        <div class="social-box twitter">
                            <i class="fa fa-twitter"></i>
                                  <strong><span class="count">40</span> k</strong>
                             <span>Tweets</span>
                        </div>

        </div>
        <div class="col-lg-3 col-md-6">
                        <div class="social-box linkedin">
                            <i class="fa fa-linkedin"></i>
                                  <strong><span class="count">40</span> k</strong>
                             <span>Feeds</span>
                        </div>

        </div>
        <div class="col-lg-3 col-md-6">
                        <div class="social-box youtube">
                            <i class="fa fa-youtube"></i>
                                  <strong><span class="count">40</span> k</strong>
                             <span>Feeds</span>
                        </div>
        </div>

        <!-- Charts -->
        <div class="container" style="font-family: 'Franklin Gothic Medium'">
            <div class="col-md-6">
                <div class="card">
                <h5 style="padding: 20px;" > Sentiment Charts</h5>
                <div class="flot-container">
                     <div id="flot-pie" class="flot-pie-container"></div>
                </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                <h5 style="padding: 20px;" >  Percentage of Application</h5>
                <div class="flot-container">
                     <div id="flot-pie" class="flot-pie-container"></div>
                </div>
                </div>
            </div>
        </div>

        <!-- results -->
        <div class="container"  style="font-family: 'Franklin Gothic Medium'">
            <div class="col-md-12">
                <hr>
                Searching Results
                <hr>
            </div>
            <div class="col-md-4">
                <div class="social-box">  
                    <i class="fa fa-youtube"></i>  
                    lnfjksbnjlnsdnl
                </div>
            </div>
            <div class="col-md-4">
                <div class="social-box facebook">  
                    <i class="fa fa-facebook"></i>
                    finlnl
                </div>
            </div>
            <div class="col-md-4">
                <div class="social-box linkedin">  
                    <i class="fa fa-linkedin"></i>
                    wnrjrnjwntln,
                </div>
            </div>
            <div class="col-md-4">
                <div class="social-box twitter">  
                    <i class="fa fa-twitter"></i>
                    skdkjnkjrnvoneo
                </div>
            </div>
            <div class="col-md-4">
                <div class="social-box">  
                    <i class="fa fa-youtube"></i>  
                    lnfjksbnjlnsdnl
                </div>
            </div>
            <div class="col-md-4">
                <div class="social-box linkedin">  
                    <i class="fa fa-linkedin"></i>
                    krjenglfnblnblg
                </div>
            </div>
            <div class="col-md-4">
                <div class="social-box">  
                    <i class="fa fa-youtube"></i>  
                    lnfjksbnjlnsdnl
                </div>
            </div>
            <div class="col-md-4">
                <div class="social-box facebook">  
                    <i class="fa fa-facebook"></i>
                    kkmlfkdblernrojbnenl
                </div>
            </div>
            <div class="col-md-4">
                <div class="social-box facebook">  
                    <i class="fa fa-facebook"></i>
                    lofjboiejboiejbofel
                </div>
            </div>

        </div>


    

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <!--  Chart js -->
    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/widgets.js"></script>
  
</body>
</html>