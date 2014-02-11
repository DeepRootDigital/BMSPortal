<?php 
$counter = $_REQUEST['count'];
for ($i=1;$i<=$counter;$i++) {
?>
<div class="small-picture-single">
<label for="filechoice-<?php echo $i; ?>">Choose a picture:</label>
<select name="filechoice-<?php echo $i; ?>" id="filechoice-<?php echo $i; ?>">
<?php    if ($handle = opendir('../upload/small')) {
       while (false !== ($entry = readdir($handle))) { 
                if ($entry == "." || $entry == "..") {
                } else { ?>
                          <option><?php echo $entry; ?></option>
                <?php } }
       closedir($handle);
    } 
?>
</select>
<label for="imgscale-<?php echo $i; ?>">Scale?</label>
<input name="imgscale-<?php echo $i; ?>" value="1" id="imgscale-<?php echo $i; ?>">
</div>
<?php
}
?>