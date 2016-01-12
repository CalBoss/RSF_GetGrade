<!DOCTYPE html>
<html>
    <head>
        <meta chaset="UTF-8">
        <title>Initializing GetGrade</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
	<?php
	$footer = "Version 3.3";//version for current php app
	?>
	<div id="wrapper">
		<div id="header">
			<h2><pre>Building <font color ="blue">GetGrade</font> API-SOAP Request:</pre></h2>
		</div><!-- #header -->
		<hr>
		<div id="content"></br>
			<form id="post-form" method="POST" action="Request_Builder.php">
				<div>
					<p id="url">Parameters are case sensitive</p>
					<label id ="url" for="url">Enter<strong> WSDL URL</strong> Address: </label>
					<input type="text" id="url" name="url"/><a><font color="red"> **</font></a>
				</div></br>
				<div>
					<label id ="api_key" for="api_key"><strong>api_key</strong>: </label>
					<input type="text" id="api_key" name="api_key"/><a><font color="red"> **</font></a>
				<p id ="url"><strong><font color="red">** Both</font> Parameters<font color="red"> are required!</font></strong></p>
					<input type="hidden" id="footer" name="footer" value="<?php echo $footer?>"/>
					<input type="submit" id= "submit" name="submit" value="Submit" />
				</div>
        </form>
		</div>
		<div id="footer">
			<?php
				print ("<p><font color=\"green\">$footer | Created by Hugo Mejia | Property of Rosetta Stone&reg;.</font></p>");
			?>
		</div><!-- #footer -->
	</div><!-- #wrapper -->
    </body>
</html>

