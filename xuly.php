<?php
set_time_limit(0);
function convertstr($str){
	$laststr=substr($str,(strlen($str)-1),1);
	if($laststr!='\\'){
		//return str_replace('\\','/',$str).'/';
		return $str.'\\';
	}else{
		return $str;
	}
}
function add2param($param){
	if($_REQUEST[$param]){
		$p1=$_REQUEST[$param];
		return ' -'.$param.' '.$p1;
	}
}

if(isset($_REQUEST['submit_scene_tool'])){
	$pythondir=$_REQUEST['pythondir'];
	$landsatdownloaddir=$_REQUEST['landsatdownloaddir'];	
	$output=$_REQUEST['output'];
	
	$cmdparam='';
	$cmdparam.=add2param('b');
	$cmdparam.=add2param('d');
	$cmdparam.=add2param('f');
	$cmdparam.=add2param('c');
	$cmdparam.=add2param('s');
	$cmdparam.=add2param('u');
	$cmdparam.=add2param('p');
	
	$batchfile='';
	$batchfile='set path='.$pythondir.'
';
	$batchfile.=$landsatdownloaddir.' -o scene'.$cmdparam.' --output '.$output.'
';
	$batchfile.='pause';
	
	
	$size = strlen($batchfile);
	header('Content-Disposition: attachment; filename="redrose_scene.bat"');
	header('Content-Type: BAT MIME TYPE');
	header('Content-Lenght: '.$size);
	echo $batchfile;
}
if(isset($_REQUEST['submit_catalog_tool'])){
	$pythondir=$_REQUEST['pythondir'];
	$landsatdownloaddir=$_REQUEST['landsatdownloaddir'];	
	$output=$_REQUEST['output'];
	
	$cmdparam='';
	$cmdparam.=add2param('b');
	$cmdparam.=add2param('d');
	$cmdparam.=add2param('f');
	$cmdparam.=add2param('c');
	$cmdparam.=add2param('s');
	$cmdparam.=add2param('u');
	$cmdparam.=add2param('p');
	
	$batchfile='';
	$batchfile='set path='.$pythondir.'
';
	$batchfile.=$landsatdownloaddir.' -o catalog'.$cmdparam.' --outputcatalogs '.$output.'
';
	$batchfile.='pause';
	
	
	$size = strlen($batchfile);
	header('Content-Disposition: attachment; filename="redrose_catalog.bat"');
	header('Content-Type: BAT MIME TYPE');
	header('Content-Lenght: '.$size);
	echo $batchfile;
}
?>