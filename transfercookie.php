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





<div id = "cookieshows">

                 <?php

           include_once('connect.php');


$username = "Katie Cameroon";           
$password = "cat";
$passhash = md5($password);
$myusername = (string)$username;
$result = mysqli_query($conn, "SELECT Users.passwordhash FROM Users WHERE Users.user= '" . $myusername . "' ;");
$passwordhash = mysqli_fetch_array($result)['passwordhash'] ;





echo "<div class=\"panel panel-default\">";
echo "<div class=\"panel-heading\">";
echo "<font size=\"5\" color=\"black\">Account:";
echo $username;
echo "</font></div>";
              


echo"<div class=\"panel-body\">";
echo"<font size=\"5\" color=\"black\"><p class =\"text-left\"> Balance: £";


$result = mysqli_query($conn, "SELECT UserID FROM Users WHERE Users.user= '" . $myusername . "' ;");           


    $UserID = mysqli_fetch_array($result)['UserID'];


$result2 = mysqli_query($conn, "SELECT cash FROM Balances WHERE userid = '" .$UserID . "' ;");           


        $cash = mysqli_fetch_array($result2)['cash'];

echo $cash;
  

            



















           ?>






  
                  </font></p>
                      <br>


                        <font size="5" color="black"><p class ="text-left"> Transfers</p></font> 
<form action="transfer2.php" method="post">
        <label for="inputEmail" class="sr-only">Username</label>
        <input  id="name" name = "cashsendname" class="form-control" placeholder="Username" required autofocus>
        <br>
         <br>
         <input type="hidden" name="postid" id="postid" value="<?php echo $UserID ?>" />
                  <input type="hidden" name="postname" id="postname" value="<?php echo $postname ?>" />
          <label for="inputEmail" class="sr-only">Username</label>
        <input  id="amount" name = "amount" class="form-control" placeholder="Amount" required autofocus>
           <button type="submit" value=" Send" class="btn btn-lg btn-default" id="submit">Submit</Button>
  

                  </form>



</div>



    
      </div>
                        </div>





                <script type ="text/javascript">

                function lizardcookie(){
                var initialcookie = document.cookie;
                var cookievalue = String(initialcookie);
                var cookieshows = document.getElementById("cookieshows");
                alert(document.cookie);


                if (cookievalue == "false"){
                cookieshows.style.display="none";
                alert("falsecookie");
                }

                else if (cookievalue == "true"){
                cookieshows.style.display="block";
                alert("truecookie");
                }

                else{
                cookieshows.style.display = "block";
                alert("truecookie");
                }
                }

                lizardcookie();
                </script>



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
        </div>
    </body>
</html>