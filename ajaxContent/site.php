<?php
if (isset($_GET['site'])){
	$site = $_GET['site'];
}
echo $site;

$getSiteInfo = "SELECT * FROM Sites WHERE SiteID = '$site'";
$siteInfo = mysqli_query($dbc,$siteInfo);
if($siteInfo){
    if(mysqli_affected_rows($dbc)!=0){
    	while($siteContent = mysqli_fetch_array($siteInfo,MYSQLI_ASSOC)){
			?>
			<div class="votethumb" id="<?php echo $imageNumber; ?>">   		    		
    		<img src="http://graph.facebook.com/<?php echo $userRow['UserID']; ?>/picture"  style="width:50px; height:50px;"/>
    		</div>
    		<?php
    		$imageNumber = $imageNumber + 1; 
    	}	
    }
}
?>