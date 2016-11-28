<!DOCTYPE html>

<html lang="en">
	<head>

<link rel="stylesheet" href="css/slider.css" />
		<script src="../js/modernizr.custom.63321.js"></script>
 	

	<body>
	
		<div class="csslider" style="margin-left: 25%;">
    		<input type="radio" name="slides" id="slides_1" checked />
    		<input type="radio" name="slides" id="slides_2" />
    		<input type="radio" name="slides" id="slides_3" />
    		<input type="radio" name="slides" id="slides_4" />
    		<input type="radio" name="slides" id="slides_N" />
    		<ul>
        		<li>
        				<div>
        				<img src="/StarBreakerWebsite/images/Circle_Red.png" alt="" style="margin-bottom: -300px;margin-top:20px;margin-left:20px; position:relative; z-index:  20;" />
        				<h2 style="position: absolute; top: -70px; z-index: 50; left: 90px; font-family: 'softcore'; font-size: 175px; opacity: .5; text-align: center">1.7</h2>
        				</div>
        				<div class='date' style="text-align: left; margin-top: 100px; margin-left: 30%">
        					5/10/17
        				</div>
        				<div class="dates" style="margin-top: -30px; z-index: 1;">......................
        				</div>
        				<div class ="post_title">
        					This is the title of the post <button class="button" style="vertical-align:middle"><span><i>Read More</i></span></button>
        				</div>
        				<div style="margin-left: 30%; margin-right: 20px;">
        				<div class='sidebar-box'>
        					<p style="left:100px;">But why smiling man her imagine married. Chiefly can man her out believe manners cottage colonel unknown. Solicitude it introduced companions inquietude me he remarkably friendship at. My almost or horses period. Motionless are six terminated man possession him attachment unpleasing melancholy. Sir smile arose one share. No abroad in easily relied an whence lovers temper by. Looked wisdom common he an be giving length mr. </p> 
        					  <p class="read-more">
        					  	<div class="sidebar-box">
        					  	
        					  	</div></p>
								
        				</div>
        				</div>
        		</li>
        		<li>Content of slide 2</li>
        		<li>Content of slide 3</li>
        		<li>Content of slide 4</li>
        		<li>Content of slide N</li>
    	</ul>
    <div class="arrows">
        <label for="slides_1"></label>
        <label for="slides_2"></label>
        <label for="slides_3"></label>
        <label for="slides_4"></label>
        <label for="slides_N"></label>
        <label for="slides_1" class="goto-first"></label>
        <label for="slides_N" class="goto-last"></label>
    </div>
    <div class="navigation">
        <div>
            <label for="slides_1"></label>
            <label for="slides_2"></label>
            <label for="slides_3"></label>
            <label for="slides_4"></label>
            <label for="slides_N"></label>
        </div>
    </div>
</div>
	</body>
	</head>

<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #fff30f;
  border: none;
  color: #000000;
  text-align: center;
  font-size: 10px;
  padding: 5px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 8px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '>>';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -5px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 18px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</html>