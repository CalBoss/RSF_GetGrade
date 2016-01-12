<!DOCTYPE html>
<html>
    <head>
        <meta chaset="UTF-8">
        <title>Building GetGrade</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
	<div id="wrapper">
		<pre>
        <?php
		$footer = "";
			if (!empty($_POST)){
				if(!empty($_POST['url']) && !empty($_POST['api_key'])){
					$wsdl = $_POST['url'];
					$api_key = $_POST['api_key'];
					$footer = $_POST['footer'];
					echo "<div id=\"header\"><h2>Creating <font color =\"blue\">GetGrade</font> Soap Request to:</h2></div>";
					echo "<!-- #header --><div><a>URL: <font color=\"blue\"><strong>$wsdl</strong></font></a>";
					echo "</div></br><div><a><bold>Using this <font color=\"blue\"><strong>api_key</strong></font> value: <strong>$api_key</strong></bold></a></div></br><hr>";
					echo "<p><strong>You must enter a value for each parameter: </strong></p>";
					echo "<form id=\"post-form\" method=\"POST\" action=\"GetGrade.php\">";
					echo "<div><label for=\"fn\"><font color=\"blue\"><strong>user_id: </strong></font></label><input type=\"text\" ";
					echo "id=\"username\"name=\"username\" size=\"27\"/><a> case sensitive</a></div></br><div><label for=\"ln\"><font ";
					echo "color=\"blue\"><strong>language: </strong></font></label><input type=\"text\" id=\"lc\" name=\"lan_code\"";
					echo "size=\"5\" /><a> case sensitive</a></div></br><div><label for=\"lev\"><font color=\"blue\"><strong>language_level: ";
					echo "</strong></font></label><input type=\"text\" id=\"le\" name=\"level\"size=\"2\" /><a>(1-5)</a></div></br><div>";
					echo "<input type=\"hidden\" id=\"api_key\" name=\"api_key\" value=\"$api_key\" />";
					echo "<input type=\"hidden\" id=\"wsdl\" name=\"wsdl\" value=\"$wsdl\" />";
					echo "<input type=\"hidden\" id=\"footer\" name=\"footer\" value=\"$footer\" />";
					echo "<input type=\"submit\" name=\"submit\" value=\"Submit\" /></div></form>";
					}else{
						echo "</br></br><h1><font color=\"red\">Missing Parameter values!</font></h1><h3>You must enter all required Parameters to make this type of request.</h3>";
					}
			}else{
            echo "</br></br><h1><font color=\"red\">ACCESS DENIED</font></h1><h3>This page is not supposed to be accessed directly</h3>";}
        ?>
		</pre>
		<!--[if IE]>
		<div id="IE11footer">			
		<![endif]-->
		<div id="footer">
			<footer>
			<?php
				print ("<p><font color=\"green\">$footer | Created by Hugo Mejia | Property of Rosetta Stone&reg;.</font></p>");
			?>
			</footer>
		</div><!-- #footer -->
		</div><!-- #IE11footer-->
		</div><!-- #wrapper -->
    </body>
</html>

