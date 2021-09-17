<html>
<div class="body_padded">
	<h1>Vulnerability: Reflected Cross Site Scripting (XSS)</h1>
	<div class="vulnerable_code_area">
		<form name="XSS" action="#" method="GET">
			<p>
				What's your name?
				<input type="text" name="name">
				<input type="submit" value="Submit">
			</p>
		</form>
		<?php 
			$html='';
			if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
                		// Feedback for end user
        	        	$html = '<p>Hello ' . $_GET[ 'name' ] . '</p>';
	        	}

			echo $html; 
			$html = '';
		?>
	</div>
	<h2>More Information</h2>
	<ul>
		<li>" . dvwaExternalLinkUrlGet( 'https://owasp.org/www-community/attacks/xss/' ) . "</li>
		<li>" . dvwaExternalLinkUrlGet( 'https://owasp.org/www-community/xss-filter-evasion-cheatsheet' ) . "</li>
		<li>" . dvwaExternalLinkUrlGet( 'https://en.wikipedia.org/wiki/Cross-site_scripting' ) . "</li>
		<li>" . dvwaExternalLinkUrlGet( 'http://www.cgisecurity.com/xss-faq.html' ) . "</li>
		<li>" . dvwaExternalLinkUrlGet( 'http://www.scriptalert1.com/' ) . "</li>
	</ul>
</div>


</html>
