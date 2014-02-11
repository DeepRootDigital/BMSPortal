$(document).ready(function(){

        $('#newblurb').click(function(){
            var currentblurbcount = $('.text-blurb-single').length;
            var newblurbcount = currentblurbcount + 1;

            $('.text-blurbs').append('<div class="text-blurb-single"><label for="textblurb-'+newblurbcount+'">Enter text for the canvas:</label><input name="textblurb-'+newblurbcount+'" id="textblurb-'+newblurbcount+'" value="Pop-up cham stache four loko"><br /><label for="textsize-'+newblurbcount+'">Text size?</label><input name="textsize-'+newblurbcount+'" value="40" id="textsize-'+newblurbcount+'"><br /><label for="textwidth-'+newblurbcount+'">Text width?</label><input name="textwidth-'+newblurbcount+'" value="230" id="textwidth-'+newblurbcount+'"></div>');
        
        });

        $('#newsmallimg').click(function(){
            var currentimgcount = $('.small-picture-single').length;
            var newimgcount = currentimgcount + 1;
            $('.small-picture-single').remove();
            $('.small-picture-container').load('actions/smallimagelist.php?count='+newimgcount);
        });



        /* KINETIC STUFF AND CANVAS */
	function drawCanvas() {
        bgwidth = $('#bgwidth').val();
        bgheight = $('#bgheight').val();
        $('#container').css('width',bgwidth+'px');
        $('#container').css('height',bgheight+'px');
	stage = new Kinetic.Stage({container: 'container', width: bgwidth, height: bgheight});
	layer = new Kinetic.Layer();
   
        
        var imageObj = new Image();
        imageObj.onload = function() {
        bgwidth = $('#bgwidth').val();
        bgheight = $('#bgheight').val();
        var bgimage = new Kinetic.Image({
          x: 0,
          y: 0,
          image: imageObj,
          width: bgwidth,
          height: bgheight
        });
           layer.add(bgimage);
           stage.add(layer);
      
        if ($('#bwchoice').val() == "Yes") {
           bgimage.cache();
           bgimage.filters([Kinetic.Filters.Grayscale]);
           layer.draw(); 
        }

           var boxchoice = $('#boxspot').val();
           var boxpercent = $('#boxpercent').val();
        if (boxchoice == "Top") {
            boxx = 0;
            boxy = 0;
            boxw = bgwidth;
            boxh = bgheight * (boxpercent/100);
            textx = 100;
            texty = 20;
        } else if (boxchoice == "Left") {
            boxx = 0;
            boxy = 0;
            boxw = bgwidth * (boxpercent/100);
            boxh = bgheight;
            textx = 10;
            texty = 20;
        } else if (boxchoice == "Bottom") {
            boxx = 0;
            boxy = bgheight - (bgheight * (boxpercent/100));
            boxw = bgwidth;
            boxh = bgheight * (boxpercent/100);
            textx = 100;
            texty = 600;
        } else if (boxchoice == "Right") {
            boxx = bgwidth - (bgwidth * (boxpercent/100));
            boxy = 0;
            boxw = bgwidth * (boxpercent/100);
            boxh = bgheight;
            textx = 588;
            texty = 20;
        }
        var rect = new Kinetic.Rect({
        x: boxx,
        y: boxy,
        width: boxw,
        height: boxh,
        fill: 'rgba(126,22,25,.8)'
      });

      // add the shape to the layer
      layer.add(rect);
      stage.add(layer);

var textblurbcount = $('.text-blurb-single').length;

for (i=1;i<=textblurbcount;i++) {
     var textinput = $('input#textblurb-'+i).val();
     var textsize = $('input#textsize-'+i).val();
     var textwidth = $('input#textwidth-'+i).val();

      var complexText = new Kinetic.Text({
        x: textx,
        y: texty,
        text: textinput,
        fontSize: textsize,
        fontFamily: 'Georgia',
        fill: '#ffffff',
        width: textwidth,
        padding: 0,
        align: 'left',
        draggable:true
      });
      
      // add the shape to the layer
      layer.add(complexText);
      stage.add(layer);
}

var smallimgcount = $('.small-picture-single').length;

for(j=1;j<=smallimgcount;j++) {
      var imgscalex = $('#imgscale-'+j).val();
      placeImage(eval('var imageObject'+j),eval('var newimg'+j),imgscalex,j);
}

        };
        imageObj.src = 'upload/'+$('#filechoice').val();
}

drawCanvas();

        document.getElementById('save').addEventListener('click', function() {
           stage.toDataURL({
              callback: function(dataUrl) {
                window.open(dataUrl);
              }
           });
        }, false);

        $('#boxspot').click(function(){
             drawCanvas();
        });
         
        $('#bwchoice').click(function(){
            drawCanvas();
        });

        $('#filechoice').click(function(){
            drawCanvas();
        });

        $('#update').click(function(){
            drawCanvas();
        });

        function placeImage(imageObject,newimg,imgscalex,j) {
            var imageObject = new Image();
            imageObject.onload = function() {
            var newimg = new Kinetic.Image({
                x: 200,
                y: 50,
                image: imageObject,
                fillPatternScaleX: imgscalex,
                fillPatternScaleY: imgscalex,
                scaleX: imgscalex,
                scaleY: imgscalex,
                draggable: true
            });

            // add the shape to the layer
            layer.add(newimg);

            // add the layer to the stage
            stage.add(layer);
            };
            imageObject.src = 'upload/small/'+$('#filechoice-'+j).val();
        }

});