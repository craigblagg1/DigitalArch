<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html <html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Digital Archeaology</title>

<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
<script type="text/javascript" src="js/jquery.doTimeout.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/style.css" />

<?php
include ('libs/databaseConnection/database_connection.php');
require 'libs/facebook/facebook.php';

if (isset($_GET['site'])){
	$vote = $_GET['site'];
}
else{
?>
<script type="text/javascript">
//they are looking for the livewall
		$(document).ready(function(){
			addTiles();
		});
		
		$(document).ready(function(){	
		$.doTimeout( 10000, function(){
		if ( number == 1 ) {
		// do something finally
		return false;
		}
		addTiles();
		return true;
		});
		});
</script>
<?php
}

$facebook = new Facebook(array(
  'appId'  => 'XXXXXXXXX',
  'secret' => 'XXXXXXXXXXXXXXXXXXXXX',
  'cookie' => true,
));
$session = $facebook->getSession();
if ($session) {
  try {
  	if($vote){
    include ('libs/checkUser/check_user.php');
    }
	}
    catch (FacebookApiException $e) {
    error_log($e);
  }
}
else{
	if ($vote){
	?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#loginButton').css({'display':'block'});
		});
	</script>
	<?php
	}	
}

if ($me) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl();
}

if ($voted == true){
	?>
	<script type="text/javascript">
	window.location.href = "sites/" + <?php echo $vote; ?> + ".php";
	</script>
	<?php
}
?>

<script type="text/javascript">
var number = 0;

function addTiles(){
	$.ajax({
		url: "ajaxContent/liveWall.php?lastid=" + $(".votethumb:last").attr("id"),
		success: function(html){
			if(html){
				$("#livewall").append(html);
			}else{
			}
		}
	});
}		
</script>

</head>

<body>
		<div id="userInfo"></div>
		<div id="livewall"></div>
		<?php include('pageElements/loginButton.php'); ?>
				
   
   	<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId   : '<?php echo $facebook->getAppId(); ?>',
          session : <?php echo json_encode($session); ?>, // don't refetch the session when PHP already has it
          status  : true, // check login status
          cookie  : true, // enable cookies to allow the server to access the session
          xfbml   : true // parse XFBML
        });

        // whenever the user logs in, we refresh the page
        FB.Event.subscribe('auth.login', function() {
			//window.location = "../"
			window.location.reload();
			
        });
      };

      (function() {
        var e = document.createElement('script');
        e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
        e.async = true;
        document.getElementById('fb-root').appendChild(e);
      }());
    </script>

	

</body>
</html>
