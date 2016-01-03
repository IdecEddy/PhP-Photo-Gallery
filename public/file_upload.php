<?php
require_once("../includes/init.php");
?>



<html>
    <head>
        <link href="stylesheets/public.css" media="all" rel="stylesheet" type="text/css" />
	<?php 
		$max_file_size = 1048576;
		$message = "";		
		if(isset($_POST['submit'])) {
			$photo = new Photograph();
			$photo->caption = $_POST['caption'];
			$photo->attach_file($_FILES['file_upload']);
			if($photo->save()) {
				$message = '<a href=';
				$message .= '"http://www.idecgames.com/imageview.php?img=';
				$message .= $photo->id;
				$message .= '">Click to go to your image.</a>';
			} else {
				$message = join("<br />", $photo->errors);
			}
		}
	?>
	<title> Idec Games </title>	
	</head>
    <body>
        <div id="leftSideBar">
        </div>
        <div id="main">
        <br />
	
		<form action="file_upload.php" enctype="multipart/form-data" method="post">
			<input type"hidden" name="MAX_FILE_SIZE" value"" />
			<p><input type="file" name="file_upload" /></p>
			<p>Caption: <input type="text" name="caption" value="" /></p>
			<input type="submit" name="submit" value="Upload" />
		</form>
		<hr>
		<?php
        $errors  = errors();
        echo from_errors($errors);
        echo $message;
        ?>


        <p style="color:black; ">
        </p>
		
		</div>
        </div>
        <div id="rightSideBar">
        </div>
    <?php include("../includes/templates/footer.php"); ?>
</body>
</html>
