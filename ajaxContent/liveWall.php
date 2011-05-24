<?php
include ('../libs/databaseConnection/database_connection.php');
$imageNumber = 1;
$start = 1;
if(isset($_GET['lastid'])){
	$start = $_GET['lastid'] + 1;
	$imageNumber = $start;
}

$getUsers = "SELECT * FROM Votes ORDER BY CreatedDate LIMIT $start, 50";
$users = mysqli_query($dbc,$getUsers);
if($users){
    if(mysqli_affected_rows($dbc)!=0){
    	while($userRow = mysqli_fetch_array($users,MYSQLI_ASSOC)){
			?>
			<div class="votethumb" id="<?php echo $imageNumber; ?>" user="<?php echo $userRow['FirstName']; echo " "; echo $userRow['Surname'];?>" vote="<?php echo $userRow['VoteName']; ?>">   		    		
    		<img src="http://graph.facebook.com/<?php echo $userRow['UserID']; ?>/picture"  style="width:50px; height:50px;"/>
    		</div>
    		<?php
    		$imageNumber = $imageNumber + 1; 
    	}	
    }
}

?>

<script>
		$('.votethumb').hover(
			function(e){
			$('#userInfo').show("fast");
			$('#userInfo').css({'top':e.target.offsetTop, 'left':e.target.offsetLeft});
			//alert($(e.target.parentNode).attr("user"));
			$('#userInfo').html("<h1>" + $(e.target.parentNode).attr("user") + "</h1> <p>" + $(e.target.parentNode).attr("vote") + "</p>");
		});
	</script>