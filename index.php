<!-- I still need to clean up this code. Use at your own risk. -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kudamono - Your Home for the Web</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<!-- This should be moved to main.css :P -->
<style>
#draggable {  
  padding: 0.5em; 
  background-color:rgba(0,0,0,0.4);
  border-radius:10px;
  -moz-border-radius:10px;
  -webkit-border-radius:10px;
  color:white;
  position: absolute;
  width:auto;
}
</style>
<script>
// Makes app windows draggable. Also shouldn't be inline.
  $(function() {
    $( "#draggable" ).draggable();
  });
</script>
</head>


<!-- Inline styling? tsk tsk :P -->
<body style="overflow:hidden;">
<!-- Navigation Bar -->
	<nav>
	<ul id="navlist">
		<li><img id="logo" src="http://i.cubeupload.com/Qq7oRb.png"></li>
		<li class="nav-item">ADD</li>
		<li class="nav-item">CUSTOMIZE &#9662;</li>
		<li class="nav-item">SETTINGS &#9662;</li>
	</ul>
	</nav>
<!-- CONTENT -->

<!-- The style tag here defines where the window will be when the page loads -->
<!-- This would save whenever the window is moved -->
<div id="draggable" class="ui-widget-content" style="left: 221px;top: 77px">
<!-- We should probably host this on our own. Does anybody know how to add images to github? -->
<img src="http://www.streeteats.com.au/images/close.png" width="21" height="21">
<!-- Example app of an RSS feed -->
<iframe src="http://feed.mikle.com/widget/?rssmikle_url=http%3A%2F%2Ffeed.mikle.com%2Fsupport%2Frss%2F&rssmikle_frame_width=300&rssmikle_frame_height=300&frame_height_by_article=0&rssmikle_target=_blank&rssmikle_font=Arial%2C%20Helvetica%2C%20sans-serif&rssmikle_font_size=12&rssmikle_border=off&responsive=off&text_align=left&text_align2=left&corner=off&scrollbar=on&autoscroll=on&scrolldirection=up&scrollstep=3&mcspeed=20&sort=Off&rssmikle_title=on&rssmikle_title_bgcolor=%230066FF&rssmikle_title_color=%23FFFFFF&rssmikle_item_bgcolor=%23FFFFFF&rssmikle_item_title_length=55&rssmikle_item_title_color=%230066FF&rssmikle_item_border_bottom=on&rssmikle_item_description=on&item_link=off&rssmikle_item_description_length=150&rssmikle_item_description_color=%23666666&rssmikle_item_date=gl1&rssmikle_timezone=Etc%2FGMT&datetime_format=%25b%20%25e%2C%20%25Y%20%25l%3A%25M%3A%25S%20%25p&item_description_style=text%2Btn&item_thumbnail=full&item_thumbnail_selection=auto&article_num=15&rssmikle_item_podcast=off&" width="300" height="300"></iframe>
</div>

<!-- Footer -->
<div id="footer"><p class="footer-p">2015 Kudamono Team<span style="float:right;margin-right:20px">Privacy Policy - Terms of Use - About</span></p></div>
</body>
</html>
