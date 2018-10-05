<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('crud/test_upload');?>

<input type="file" name="image_importe" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>