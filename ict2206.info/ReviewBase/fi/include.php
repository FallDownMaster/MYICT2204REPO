<?php

// Check if the right PHP functions are enabled
$WarningHtml = '';
if( !ini_get( 'allow_url_include' ) ) {
        $WarningHtml .= "<div class=\"warning\">The PHP function <em>allow_url_include</em> is not enabled.</div>";
}
if( !ini_get( 'allow_url_fopen' ) ) {
        $WarningHtml .= "<div class=\"warning\">The PHP function <em>allow_url_fopen</em> is not enabled.</div>";
}

?>

<html>
<div class="body_padded">
        <h1>Vulnerability: File Inclusion</h1>
        <?php
		 echo $WarningHtml;
	?>
        <div class="vulnerable_code_area">
                <em><a href="?page=file1.php">file1.php</a></em> 
		<em><a href="?page=file2.php">file2.php</a></em>
		<em><a href="?page=file3.php">file3.php</a></em>
        </div>
        <h2>More Information</h2>
        <ul>
        <li>" . dvwaExternalLinkUrlGet( 'https://en.wikipedia.org/wiki/Remote_File_Inclusion', 'Wikipedia - File inclusion vulnerability' $
        <li>" . dvwaExternalLinkUrlGet( 'https://owasp.org/www-project-web-security-testing-guide/latest/4-Web_Application_Security_Testin$
        <li>" . dvwaExternalLinkUrlGet( 'https://owasp.org/www-project-web-security-testing-guide/latest/4-Web_Application_Security_Testin$
        </ul>
</div>
</html>
