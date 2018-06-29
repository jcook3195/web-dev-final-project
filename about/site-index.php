<?php

$title = "Site Index";
$desc = "The Frozen Bean site index.";
$home = false;
$bdyClass = "site-index";
$config = include("../includes/config.php");
echo $config["header"]($title, $desc, $home, $bdyClass);

?>
<div class="text-container">
	<div id="output" class="index-conatiner"></div>
	<script type="text/javascript">
		var path = "<?php echo $config['path']; ?>";
	</script>
</div>
<script src="<?php echo $config["path"]; ?>/scripts/site-index.js"></script>
<?php
	echo $config["footer"]();
?>