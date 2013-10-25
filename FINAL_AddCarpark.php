<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

	<link type="text/css" rel="stylesheet" href="header.css" media="screen" /> 
	<link type="text/css" rel="stylesheet" href="style.css" media="screen" /> 
	<script type="text/javascript" src="script.js"></script>

	<title>  Add a car park  </title>


</head>

<body>

<?php include 'header.html' ; ?>


<div class="bodyContainer">
	<div class="modal">        
	    <div class="modal-header">
	    	Add <span> a car park</span>
	    </div>

<form action="FINAL_CarparkData.php"  method="post"   enctype="multipart/form-data">
<div class="modal-body">
	<div class="control-group required ">
<label for="ad_name">Title:</label>
<div class="controls">
<input type="text" name="ad_name"/></br>
</div>
                </div>
                <div class="control-group required ">

<label for="ad_description">Description:</label>
<div class="controls">
<input type="textarea" rows="5" name="ad_description" /></br>
</div>
                </div>
                <div class="control-group required ">

<label for="price">Price:</label>
<div class="controls">
<input type="text" name="price"/></br>
</div>
                </div>
                <div class="control-group required ">

<label for="location">Car Park Suburb:</label>
<div class="controls">
<input type="text" name="location"/></br>
</div>
                </div>
                <div class="control-group required ">

Select Image: <input type="file" name="image" ></br>

					    </div> 
					</div>
	<div class="modal-footer">

<input type="submit" name="post"  value ="POST" >

</div>

</form>
</div>
</div


<?php include 'footer.html' ; ?>


</body>

</html>
