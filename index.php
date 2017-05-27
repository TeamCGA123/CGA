

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>CGA Form</title>

<!-- CGA css -->
<style>
.myForm {
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 0.8em;
width: 30em;
padding: 1em;
}

.myForm * {
box-sizing: border-box;
}

.myForm label {
padding: 0;
font-weight: bold;
text-align:right;
margin:2px;
display: block;
color:#e2cccc;
}
html,body{
    margin:20px;
    background-image: url("img/back.png");
}
    
p{
    float: left;
}
    

.myForm input,
.myForm select,
.myForm textarea {
margin-left: 2em;
float: right;
width: 20em;
border: 1px solid #ccc;
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 1.5em;
padding: 0.3em;
}

.myForm textarea {
height: 90px;
}

.myForm button {
padding: 1em;
border-radius: 0.5em;
background: #eee;
border: none;
font-weight: bold;
margin-left: 14em;
margin-top: 1.8em;
}

.myForm button:hover {
background: #5c5b5b;
cursor: pointer;
color: aliceblue;
}
</style>
    

<!--CGA inline HTML viji-->

</head>
<body>

<form class="myForm" method="post" action="process.php">

<p><i class="fa fa-user-circle" aria-hidden="true"></i>
<label>Name 
<input type="text" name="name" required>
</label> 
</p>

<p>
<label>USN 
<input type="text" name="usn" maxlength="10">
</label>
</p>
	
<p>
<label>Certifacte for
<select id="pickup_place" name="certificateName">
<option value="" selected="selected">Select One</option>
<option value="Birth Certificate" >Birth Certificate</option>
<option value="School Certificate" >School Certificate</option>
<option value="College Certificate" >College Certificate</option>
</select>
</label> 
</p>

<p>
<label>Message a request to MCE
<textarea name="message" maxlength="500"></textarea>
</label>
</p>

<input class="submit_btn" type = "submit" name="submit" value="submit" />

</form>

</body>
</html>