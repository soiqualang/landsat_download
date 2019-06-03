<h2>Gen batch tool download Landsat Images by Scene</h2>
<form class="form-horizontal" action="xuly.php" method="GET">
<div class="form-group">
  <label class="control-label col-sm-2" for="">Download tool core:</label>
  <div class="col-sm-10">
	<a href="https://github.com/olivierhagolle/LANDSAT-Download" target="_blank">LANDSAT Download by Olivier Hagolle</a>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="pythondir">Python dir:</label>
  <div class="col-sm-10">
	<input type="text" class="form-control" id="pythondir" placeholder="C:\Python27" name="pythondir" value="" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="landsatdownloaddir">LANDSAT Download tool full path py:</label>
  <div class="col-sm-10">
	<input type="text" class="form-control" id="landsatdownloaddir" placeholder="D:\tools\landsat-download\download_landsat_scene.py" name="landsatdownloaddir" value="" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="b">BIRD:</label>
  <div class="col-sm-10">
	<input type="text" class="form-control" id="b" placeholder="Which satellite are you looking for. Ex: LC8" name="b" value="">
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-2" for="daterange">Chọn Date Range:</label>
  <div class="col-sm-10">
	<input type="text" name="daterange" id="daterange" class="form-control" value="" placeholder="24-02-2000 - 28-02-2000"/>
  </div>
</div>
<script>
$(function() {
  $('input[name="daterange"]').daterangepicker({
	opens: 'right',
	locale: {
	  format: 'DD-MM-YYYY'
	}
  }, function(start, end, label) {
	//startDate=start.format('YYYY-MM-DD');
	//stopDate=end.format('YYYY-MM-DD');
	startDate=start.format('YYYYMMDD');
	stopDate=end.format('YYYYMMDD');
	//console.log(startDate);
	getDate(startDate,stopDate);
  });
});
</script>

	<input type="hidden" class="form-control" id="d" placeholder="20130127" name="d" required>
	<input type="hidden" class="form-control" id="f" placeholder="198030" name="f" required>

<div class="form-group">
  <label class="control-label col-sm-2" for="s">Path/row SCENE:</label>
  <div class="col-sm-10">
	<input type="text" class="form-control" id="s" placeholder="WRS2 coordinates of scene (ex 198030) - format: xxxxxx" name="s" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="c">CLOUDS:</label>
  <div class="col-sm-10">
	<input type="text" class="form-control" id="c" placeholder="Set a limit to the cloud cover of the image" name="c">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="u">Account full path txt:</label>
  <div class="col-sm-10">
	<input type="text" class="form-control" id="u" placeholder="D:\tools\landsat-download\usgs.txt" name="u" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="p">Proxy full path :</label>
  <div class="col-sm-10">
	<input type="text" class="form-control" id="p" placeholder="D:\tools\landsat-download\proxy.txt" name="p">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="output">Output dir:</label>
  <div class="col-sm-10">
	<input type="text" class="form-control" id="output" placeholder="D:\tools\landsat-download\output\" name="output" required>
  </div>
</div>

<div class="form-group">        
  <div class="col-sm-offset-2 col-sm-10">
	<button name="submit_scene_tool" id="submit_scene_tool" type="submit" class="btn btn-default">Submit get Scene</button>	
	<button name="submit_catalog_tool" id="submit_catalog_tool" type="submit" class="btn btn-default">Submit get Catalog</button>
  </div>
</div>
</form>