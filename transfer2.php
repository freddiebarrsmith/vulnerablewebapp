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
            Cover Template for Bootstrap
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






                 <?php

           include_once('connect.php');


           $username = $_POST["cashsendname"];
           $ostid = $_POST["postid"];
          $mount = $_POST["amount"];
           $password = $_POST["password"];
           

$passhash = md5($password);
$myusername = (string)$username;
$result = mysqli_query($conn, "SELECT Users.passwordhash FROM Users WHERE Users.user= '" . $myusername . "' ;");
$passwordhash = mysqli_fetch_array($result)['passwordhash'] ;

echo $passhash;
echo $passwordhash;

if ($passhash == $passwordhash){

echo "you're a lizard harry";
}


           $amount = intval($mount);
           $postid = intval($ostid);
             echo $username;
           echo $postid;
           echo $amount;

/*UPDATE BLANK SET BLANK = BLANK - 1 WHERE BLANK = BLANK 
update balance set cash = cash - amount where userid = userid
update balance set cash = cash + amount where username =username

UPDATE Customers
SET ContactName='Alfred Schmidt', City='Hamburg'
WHERE CustomerName='Alfreds Futterkiste';

*/
mysqli_query($conn, "UPDATE Balances SET Balances.cash = Balances.cash - '" . $amount . "'  WHERE Balances.userid= '" . $postid . "' ;");  

$myusername = (string)$username;
$result = mysqli_query($conn, "SELECT Users.UserID FROM Users WHERE Users.user= '" . $myusername . "' ;");           


    $UserID2 = mysqli_fetch_array($result)['UserID'] ;
    echo $UserID2;

    mysqli_query($conn, "UPDATE Balances SET Balances.cash = Balances.cash + '" . $amount . "'  WHERE Balances.userid= '" . $UserID2 . "' ;");  


           ?>







                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <font size="5" color="black">Account: <?php echo $username; ?></font></div>
              


                            <div class="panel-body">
                                <font size="5" color="black"><p class ="text-left"> Balance: £ 
<?php
                                  $result2 = mysqli_query($conn, "SELECT cash FROM Balances WHERE userid = '" .$postid . "' ;");           


        $cash = mysqli_fetch_array($result2)['cash'];

echo $cash;
?>

              
                  </font></p>
                      <br>




    
      </div>
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
        </div>
    </body>
</html>