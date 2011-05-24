<div id= "loginButton">	
					<?php if ($me): ?>
    				<a href="<?php echo $logoutUrl; ?>">
      				<img src="http://static.ak.fbcdn.net/rsrc.php/z2Y31/hash/cxrz4k7j.gif">
    				</a>
    				<?php else: ?>
    			<a onclick="FB.login(null,{perms:'email'});return false;"><span class="fb_button_text"><img src="http://www.jezebelle.tv/img/reskin/get_involved.png" alt="Log in"/></span></a> 

    			</div>
    			<?php endif ?>
    	<div id="fb-root"></div>