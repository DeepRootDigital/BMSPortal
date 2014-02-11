<?php include 'header.php'; ?>

<div id="container" style="width:828px;height:680px;"></div>
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
                                <?php if ($handle = opendir('upload')) {
                                    while (false !== ($entry = readdir($handle))) { 
                                        if ($entry == "." || $entry == ".." || $entry == "small") {
                                        } else { ?>
                                        <option><?php echo $entry; ?></option>
                                    <?php } }
                                    closedir($handle);
                                } ?>
                        </select>
                        <br />
                        <label for="bgwidth">Width:</label>
                        <input name="bgwidth" id="bgwidth" value="828">
                        <br />
                        <label for="bgheight">Height:</label>
                        <input name="bgheight" value="680" id="bgheight">
                        <br />
                        <label for="boxspot">Should the box be top, left, right or bottom?</label>
                        <select name="boxspot" id="boxspot">
                                <option>Top</option>
                                <option>Left</option>
                                <option>Right</option>
                                <option>Bottom</option>
                        </select>
                        <br />
                        <label for="boxpercent">Percent of screen the box should cover?</label>
                        <input name="boxpercent" value="20" id="boxpercent">
                        <br />
                        <label for="bwchoice">Do you want the image to be black and white?</label>
                        <select name="bwchoice" id="bwchoice">
                                <option>Yes</option>
                                <option>No</option>
                        </select>
                        <br /><br />
                    <div class="text-blurbs">
                      <div id="newblurb" style="width:100px;height:40px;cursor:pointer;border:1px solid #000000;">New Text</div>
                      <div class="text-blurb-single">
                        <label for="textblurb-1">Enter text for the canvas:</label>
                        <input name="textblurb-1" id="textblurb-1" value="Pop-up cham stache four loko">
                        <br />
                        <label for="textsize-1">Text size?</label>
                        <input name="textsize-1" value="40" id="textsize-1">
                        <br />
                        <label for="textwidth-1">Text width?</label>
                        <input name="textwidth-1" value="630" id="textwidth-1">
                      </div>
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