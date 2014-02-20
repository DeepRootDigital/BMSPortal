<?php include 'header.php'; ?>
<?php if ($_COOKIE['bgwidth']) {
$width = $_COOKIE['bgwidth']."px";
$widthp = $_COOKIE['bgwidth'];
} else {
$width = "828px";
$widthp = '828';
}

if($_COOKIE['bgheight']) {
$height = $_COOKIE['bgheight']."px";
$heightp = $_COOKIE['bgheight'];
} else {
$height = "680px";
$heightp = '680';
}

if($_COOKIE['boxspot']) {
$boxspot = $_COOKIE['boxspot'];
} else {
$boxspot = 'Top';
}

if($_COOKIE['boxpercent']) {
$boxpercent = $_COOKIE['boxpercent'];
} else {
$boxpercent = '20';
}
?>

<div id="container" style="width:<?php echo $width; ?>;height:<?php echo $height; ?>;"></div>
	<div class="options-container">
		<form action="actions/uploadfile.php" method="post" enctype="multipart/form-data">
			<label for="file">Upload backgrounds:</label>
			<input type="file" name="file" id="file"><br>
			<input type="submit" name="submit" value="Submit">
		</form>
                <br />
                <form action="actions/uploadicons.php" method="post" enctype="multipart/form-data">
			<label for="file">Upload icons:</label>
			<input type="file" name="file" id="file"><br>
			<input type="submit" name="submit" value="Submit">
		</form>
                <br />
                <form action="" method="POST">
                        <label for="filechoice">Choose a picture:</label>
                        <select name="filechoice" id="filechoice">
                                <?php if ($_COOKIE['filechoice']) { ?>
                                        <option><?php echo $_COOKIE['filechoice']; ?></option>
                                <?php } ?>
                                <?php if ($handle = opendir('upload')) {
                                    while (false !== ($entry = readdir($handle))) { 
                                        if ($entry == "." || $entry == ".." || $entry == "small" || $entry == "fileserver") {
                                        } else { ?>
                                        <option><?php echo $entry; ?></option>
                                    <?php } }
                                    closedir($handle);
                                } ?>
                        </select>
                        <br />
                        <label for="bgwidth">Width:</label>
                        <input name="bgwidth" id="bgwidth" value="<?php echo $widthp; ?>">
                        <br />
                        <label for="bgheight">Height:</label>
                        <input name="bgheight" value="<?php echo $heightp; ?>" id="bgheight">
                        <br />
                        <label for="boxspot">Should the box be top, left, right or bottom?</label>
                        <select name="boxspot" id="boxspot">
                                <?php if ($_COOKIE['boxspot']) { ?>
                                    <option><?php echo $boxspot; ?></option>
                                <?php } ?>
                                <option>Top</option>
                                <option>Left</option>
                                <option>Right</option>
                                <option>Bottom</option>
                        </select>
                        <br />
                        <label for="boxpercent">Percent of screen the box should cover?</label>
                        <input name="boxpercent" value="<?php echo $boxpercent; ?>" id="boxpercent">
                        <br />
                        <label for="bwchoice">Do you want the image to be black and white?</label>
                        <select name="bwchoice" id="bwchoice">
                                <option>Yes</option>
                                <option>No</option>
                        </select>
                        <br /><br />
                    <div class="text-blurbs">
                      <div id="newblurb" style="width:100px;height:40px;cursor:pointer;border:1px solid #000000;">New Text</div>
<?php for($i=1;$i<=$_COOKIE['textblurbcount'];$i++) {
if ($_COOKIE['textblurb'.$i]) { 
$textblurb = $_COOKIE['textblurb'.$i];
} else {
$textblurb = 'Pop-up cham stache four loko';
}
if ($_COOKIE['textsize'.$i]) {
$textsize = $_COOKIE['textsize'.$i];
} else {
$textsize = '40';
}
if ($_COOKIE['textwidth'.$i]) {
$textwidth = $_COOKIE['textwidth'.$i];
} else {
$textwidth = '500';
}
if ($_COOKIE['textfam'.$i]) {
$textfam = $_COOKIE['textfam'.$i];
} else {
$textfam = 'din';
}
?>
                      <div class="text-blurb-single">
                        <label for="textblurb-<?php echo $i; ?>">Enter text for the canvas:</label>
                        <input name="textblurb-<?php echo $i; ?>" id="textblurb-<?php echo $i; ?>" value="<?php echo $textblurb; ?>">
                        <br />
                        <label for="textsize-<?php echo $i; ?>">Text size?</label>
                        <input name="textsize-<?php echo $i; ?>" value="<?php echo $textsize; ?>" id="textsize-<?php echo $i; ?>">
                        <br />
                        <label for="textwidth-<?php echo $i; ?>">Text width?</label>
                        <input name="textwidth-<?php echo $i; ?>" value="<?php echo $textwidth; ?>" id="textwidth-<?php echo $i; ?>">
                        <label for="textfam-<?php echo $i; ?>">Font Family?</label>
                        <select name="textfam-<?php echo $i; ?>" id="textfam-<?php echo $i; ?>">
                                <option><?php echo $textfam; ?></option>
                                <option>din</option>
                                <option>Helvetica</option>
                                <option>Georgia</option>
                        </select>
                      </div>
<?php } ?>
                   </div>
                   <br /><br />
                   <div class="small-picture">
                       <div id="newsmallimg" style="width:100px;height:40px;cursor:pointer;border:1px solid #000000;">New Image</div>
                       <div class="small-picture-container"></div>
                   </div>
                </form>
                <button id="update" style="width:100px;height:40px;">Update</button>
                <button id="save" style="width:100px;height:40px;">Download</button>
	</div>
<script src="http://d3lp1msu2r81bx.cloudfront.net/kjs/js/lib/kinetic-v5.0.0.min.js"></script>
<?php include 'footer.php'; ?>