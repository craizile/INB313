<html>

<Header>
ADD A CARPARK</br>
</Header>

<!--FORM-->
<form action="CarparkData.php"  method="post"   enctype="multipart/form-data">

<label for="ad_name">Title:</label>
<input type="text" name="ad_name"/></br>

<label for="ad_description">Description:</label>
<input type="textarea" rows="5" name="ad_description" /></br>

<label for="price">Price:</label>
<input type="text" name="price"/></br>


Select Image: <input type="file" name="image" ></br>

<input type="submit"    name="post"  value ="POST">

</form>
</html>
