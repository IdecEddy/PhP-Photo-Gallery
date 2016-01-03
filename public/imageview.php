<?php
require_once("../includes/init.php");
?>
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
$photos = Photograph::find_all();
?>

	<html>
    <head>
		<link href="stylesheets/image.css" media="all" rel="stylesheet" type="text/css" />	
		<title> Idec Games </title>	
	</head>
    <body>
		<?php 
		if(!isset($_GET['img'])){
			echo "<div id='galery'>";
			foreach($photos as $photo){
		?>
				<div class="img">
					<a href="http://www.idecgames.com/imageview.php?img=<?php echo $photo->id;?>">
			 			<img src="images/<?php echo $photo->filename; ?>" height="auto" width="300px" >
					</a>
				</div>
		<?php
			}
		echo "</div>";
		}
		?>
		<?php
		// this is the code for showing one image.
		if(isset($_GET['img']) && trim($_GET['img'] != "")){
        	$found_img = Photograph::find_by_id($_GET['img']);
			if(is_object($found_img)){
			
		?> 
			<?php
			foreach($photos as $photo){

		}	
			?>  
		
		<?php		 
 			$count = 0;
 			foreach($photos as $photo){
     			if($found_img->id == $photo->id){
						if(!$count == 0){
					?>
					<a href='http://www.idecgames.com/imageview.php?img=<?php echo $photos[--$count]->id; ?>'>
                		<span id="back"></span >
                	</a>
					
					<?php ++$count; } 
					if(count($photos) > $count + 1){
					?>
					<a href='http://www.idecgames.com/imageview.php?img=<?php echo $photos[++$count]->id; ?>'>
 		               <span id='forward'></span>
                	</a>
					<?php
     			}
			}
    		++$count;
 			}   
		?>  

			<div id="main">

				<div id="img">
				<img src="images/<?php echo $found_img->filename; ?>" width="100%" height="auto"style="z-index:1;" >
				</div>
		<?php 
			} else{
				echo "<h1> 404 image not found </h1>";
			}
		echo "</div>";
		}
		?>
    <?php include("../includes/templates/footer.php"); ?>
</body>
</html>
