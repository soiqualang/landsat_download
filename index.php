<!DOCTYPE html>
<html lang="en">
<head>
  <title>Batch tools Landsat Images Download by Soiqualang_Chentreu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <!--date picker-->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	<script type="text/javascript">
		function getDate(startDate,stopDate){
			console.log(startDate);
			console.log(stopDate);
			document.getElementById('d').value=startDate;		
			document.getElementById('f').value=stopDate;		
		}
	</script>
</head>
<body>
<div class="container">
  <h2>Batch tools Landsat Images Download by <a href="https://dothanhlong.org/" target="_blank">Soiqualang_Chentreu</a></h2>
  <p>Tool to download Landat Images by Soiqualang_Chentreu.</p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#scene_tool">Scene tool</a></li>
	<!--<li><a data-toggle="tab" href="#catalog_tool">Catalog  tool</a></li>
	<li><a data-toggle="tab" href="#liste_tool">List of products tool</a></li>-->
	<li><a data-toggle="tab" href="#guide">Guide</a></li>
	<li><a data-toggle="tab" href="#video">Video</a></li>
  </ul>

  <div class="tab-content">
    <div id="scene_tool" class="tab-pane fade in active">
    <?php
		include('scene_tool.php');
	?>
    </div>
	<!--<div id="catalog_tool" class="tab-pane fade">
    
    </div>
	<div id="liste_tool" class="tab-pane fade">
    
    </div>-->
	<div id="guide" class="tab-pane fade">
    <?php
		include('guide.php');
	?>
    </div>
	<div id="video" class="tab-pane fade">
    <?php
		include('video.php');
	?>
    </div>
</div>



<div class="container">
  
</div>

</body>
</html>
