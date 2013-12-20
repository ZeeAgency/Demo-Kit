<?php
$files = scandir('img');
$images = array();
foreach($files as $file) {
	if(preg_match('/\.(png|jpg|jpeg|gif|mp4)/i', $file)) {
		$images[] = $file;
	}
}
ob_start();
?>
<!doctype html>
<title>Demo</title>
<meta name="viewport" content="width=device-width"/>
<link rel="stylesheet" href="assets/style.css"/>

<a href="#">
<?php
$i = 0;
foreach($images as $image) {
	echo '<img src="img/'.$image.'" class="'.(!$i++ ? "active" : "").'"/>';
}
?>
</a>

<script src="assets/jquery.js"></script>
<script src="assets/fastclick.js"></script>
<script src="assets/main.js?v=2"></script>

<?php
$content = ob_get_clean();
file_put_contents('index.html', $content);
echo $content;
?>