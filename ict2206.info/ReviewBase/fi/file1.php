<html>

<div class="body_padded">
	<h1>Vulnerability: File Inclusion</h1>
	<div class="vulnerable_code_area">
		<h3>File 1</h3>
		<hr />
		Hello <em>User</em><br />

		Your IP address is: <em> 
		<?php
			echo $_SERVER[ 'REMOTE_ADDR' ]
		?>
		</em>
		<br /><br />
		<em>
		<a href="?page=include.php">back</a>
		</em>
		
	</div>

	<h2>More Information</h2>
	<ul>
		<li>" . dvwaExternalLinkUrlGet( 'https://en.wikipedia.org/wiki/Remote_File_Inclusion', 'Wikipedia - File inclusion vulnerability' ) . "</li>
		<li>" . dvwaExternalLinkUrlGet( 'https://owasp.org/www-project-web-security-testing-guide/latest/4-Web_Application_Security_Testing/07-Input_Validation_Testing/11.1-Testing_for_Local_File_Inclusion', 'WSTG - Local File Inclusion' ) . "</li>
		<li>" . dvwaExternalLinkUrlGet( 'https://owasp.org/www-project-web-security-testing-guide/latest/4-Web_Application_Security_Testing/07-Input_Validation_Testing/11.2-Testing_for_Remote_File_Inclusion', 'WSTG - Remote File Inclusion' ) . "</li>
	</ul>
</div>

</html>
