<?php

include_once("config.inc.php");
$course_id = "C001"; // Course id needs to be picked from moodle

$pid = $_POST["post"];
$tid = $_POST["tabid"];
global $db, $db_host, $db_user, $db_password;

 # Connect to the database and report any errors on connect.
 $cid = mysql_connect($db_host,$db_user,$db_password);

 if (!$cid) {

  die("ERROR: " . mysql_error() . "\n");

 } 


 # Setup SQL statement and add the account into the system.
mysql_select_db ("$db");
$stuff = mysql_query("SELECT title,author,posttext FROM content WHERE cid='".$course_id."' AND pid ='".$pid."'") or die("MySQL Login Error: ".mysql_error()); 


 # Check for errors.
if (mysql_num_rows($stuff) > 0)
 { 

 $row=mysql_num_rows($stuff);


while($row = mysql_fetch_array($stuff))
  {
 $title=$row['title'];
$author=$row['author'];
$posttext=$row['posttext'];
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Virtual Labs - IIT Bombay</title>
<link href="style2.css" rel="stylesheet" type="text/css" media="screen" />



<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		skin : "o2k7",
		plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>




</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Virtual Labs - IIT Bombay</a></h1>
			<p><a href="#"></a></p>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>

					
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">



<div class="post">
			<div class="post-bgtop">

			<div class="post-bgbtm">



		<h1 class="title"><a href="#">Edit the Section</a></h1>
				
				<div class="entry">

					 <p>

<form action=func.editsection.php method="post">			
						

<label><b>Page title :</b></label><br>
				<input name="ptitle" type="text" value="<?php echo $title ?>" size="50" /><br><br>

<label><b>Author :</b></label><br>
				<input name="author" type="text" value="<?php echo $author ?>" size="50" /><br><br>

<label><b>Content :</b></label><br><b>
	<div>

			<textarea id="elm1" name="elm1" rows="15" cols="80" style="width: 80%"> <?php echo $posttext ?> </textarea>
		</div>
<input name="tid" type="hidden" value="<?php echo $tid ?>" size="50" /><br><br>
<input name="pid" type="hidden" value="<?php echo $pid ?>" size="50" /><br><br>
<br>
	<input type="submit" name="save" value="Update" />
		<input type="reset" name="reset" value="Reset" />



</p>
				</div>
			</div>
			</div>
			</div>

			
		<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
	<div id="footer">
		<p> Power Systems Lab <a href="#">Virtual Labs - IIT Bombay</a>.</p>
	</div>
	<!-- end #footer -->
</div>
</body>
</html>
