<html>
<head>
	<h1>Parth's landing page</h1>
</head>
<body style="margin: 0px;">
	<p>Listen to your current saved message, if any, <a href=<?php
	$var_value = $_GET['varname'];
if(isset($_POST['parthurl']) && !empty($_POST['parthurl'])) {
    echo $_POST['parthurl'];
} else {echo $var_value;}
?>>here</a> (May require a refresh - F5)</p>
<!-- 	<video controls name="media">
		<source src="http://k003.kiwi6.com/hotlink/1yw0v3lhog/parth.m4a" type="audio/mpeg">
	</video> -->
	<br>
	<br>
	<br>
Setup:
<br>
Only need to do this next bit once for a new voice-message:
<br>
<br>
<br>
<form enctype="multipart/form-data" action="upload.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE"/>
    Choose a file to upload: <input name="file" type="file" id="file"/><br />
    <input type="submit" value="Upload File"/>
<!--     <input type="submit" value="Upload FileGlobal" />
    <input type="submit" value="Upload FileResp"/> -->
</form>

<br>
<br>

Alternatively post a dl.dropboxerusercontent URL if you already uploaded your file to Dropbox (prototype, recommend the first method).

<br>
<br>

<form method="POST" action="">
    <input type="text" name="parthurl" value="Please Enter a dl.dropboxusercontent url"></input>
    <input type="submit"></input>
</form>

<br>
<br>
<br>
<br>
<br>
<br>
---------------------------------
<br>
Now, use this form to call whomever you like:
<br>
<br>
<br>


<form method="POST" action="/parthvoice.php">
    Number you are calling: <br>
    <input type="text" name="number" value="Enter a phone number, eg. +1405235432"></input>
    <br>
    <input type="submit" value="Submit"></input>
</form>



<!-- <form method="POST" action="/parthvoice.php">
  First name:<br>
  <input type="text" name="firstname" value="Mickey">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse">
  <br><br>
  <input type="submit" value="Submit">
</form> 
 -->
<p>If you click the "Submit" button, the form-data will be sent to a page called "/parthvoice.php".</p>

</body>
</html>
