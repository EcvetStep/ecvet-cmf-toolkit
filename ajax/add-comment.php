<?php
extract($_POST);
if($_POST['act'] == 'add-com'):
	$name = htmlentities($name);
    $email = htmlentities($email);
    $comment = htmlentities($comment);

	include('../config.php'); 
	

	$default = "mm";
	$size = 35;
	$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . $default . "&s=" . $size;

	if(strlen($name) <= '1'){ $name = 'Guest';}
    mysql_query("INSERT INTO comments (name, email, comment, id_post)VALUES( '$name', '$email', '$comment', '$id_post')");
    if(!mysql_errno()){
?>

    <div class="cmt-cnt">
    	<img src="<?php echo $grav_url; ?>" alt="" />
		<div class="thecom">
	        <h5><?php echo $name; ?></h5><span  class="com-dt"><?php echo date('d-m-Y H:i'); ?></span>
	        <br/>
	       	<p><?php echo $comment; ?></p>
	    </div>
	</div>

	<?php } ?>
<?php endif; ?>
