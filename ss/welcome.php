<!DOCTYPE html>
<html>
<head>
    <title>Demo 6: Using jQuery Slider as a Lightbox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="6/thumbnail-slider.css" rel="stylesheet" />
    <script src="6/thumbnail-slider.js" type="text/javascript"></script>
    <style>
        body {font: normal 0.9em Arial;color:#ddd;background:#b3b3ff;}
        header {display:block; font-size:1.2em;margin-bottom:100px;}
        header a, header span {
            display: inline-block;
            padding: 4px 8px;
            margin-right: 10px;
            border: 2px solid #000;
            background: #DDD;
            color: #000;
            text-decoration: none;
            text-align: center;
            height: 20px;
        }
        header span {background:white;}
        a {color:#7fa9fe;}
    </style>
</head>
<body>


	<div style="background:#4d79ff; ; height:40px;"></div>
    <div style="padding:0px ;background:#b3b3ff;align:right;">
    
	<div style="width:20%;height:100%;">
		<img src="img/2.jpg" width="100px" height="100px" style="border-radius:50%;margin-left:10px;margin-top:20px"/><a href="#"><h3 style="margin-left:20px;color:blue; font-family:calibri;text-decoration: none;">Shiven Ramania</h3></a>	
	</div>



        <div id="thumbnail-slider" style="display:none;">
            <div class="inner" >
                <ul>
                    <li>
                        <a class="thumb" href="img/1.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="img/2.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="img/3.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="img/4.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="img/5.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="img/6.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="img/7.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="img/8.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href="img/9.jpg"></a>
                    </li>
                </ul>
            </div>
            <div id="closeBtn">CLOSE</div>
        </div>
	
<div>

  
		<ul id="myGallery" style="margin-top: 60px;;">
<?php 	
	$con=mysql_connect("localhost","root","");
	
	if(!$con){
		die("Could not connect to database".mysql_error() );
	}
	mysql_select_db( "fb", $con );
	
	$sql = "select dir from pics";	
	$resultset = mysql_query( $sql, $con );
	while( $row = mysql_fetch_array( $resultset ) ) {
		echo "<li><img src='$row[dir]' /></li>";
	} ?>
            
        </ul>
<a href="#"><img src="img/d1.png" height="50px" width="50px" align="right" style="margin-right:380px"/ ></a>


</div>
        <div style="clear:both;"></div>
        <script>
            //Note: this script should be placed at the bottom of the page, or after the slider markup. It cannot be placed in the head section of the page.
            var thumbSldr = document.getElementById("thumbnail-slider");
            var closeBtn = document.getElementById("closeBtn");
            var galleryImgs = document.getElementById("myGallery").getElementsByTagName("li");
            for (var i = 0; i < galleryImgs.length; i++) {
                galleryImgs[i].index = i;
                galleryImgs[i].onclick = function (e) {
                    var li = this;
                    thumbSldr.style.display = "block";
                    mcThumbnailSlider.init(li.index);
                };
            }

            thumbSldr.onclick = closeBtn.onclick = function (e) {
                //This event will be triggered only when clicking the area outside the thumbs or clicking the CLOSE button
                thumbSldr.style.display = "none";
            };
        </script>
 </div>

    
</body>
</html>
