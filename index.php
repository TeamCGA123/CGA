

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>CGA Form</title>
 <link href = "css/bootstrap.min.css" rel = "stylesheet">

<!-- CGA css -->
<style>
.myForm {
font-family: "Lucida Sans Unicode", "Lucida Grande", "sans-serif";
font-size: 0.8em;
width: 30em;
padding: 1em;
margin-top: 50px;
margin-left: 500px;
}

myForm * {
box-sizing: border-box;
align-items: center;	
}

.myForm label {
padding: 0;
font-weight: bold;
text-align:left;
margin:8px;
display: block;
color:#e2cccc;
}
html{
align-content: center;	
}
	
body{
padding-top: 40px;
padding-bottom: 40px;
background-color: #ADABAB;
background-image: url("img/back.png");
}		  
 
p{
    float: left;
}
    

.myForm input,
.myForm select,
.myForm textarea {
margin-left: 0em;
float: right;
width: 20em;
border: 1px solid #ccc;
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 1.5em;
padding: 0.3em;
}

.myForm textarea {
height: 100px;
}

/*.myForm button {
padding: 1em;
border-radius: 0.5em;
background: #eee;
border: none;
font-weight: bold;
margin-left: 19em;
margin-top:200px ;
}*/

/*.myForm button:hover {
background: #5c5b5b;
cursor: pointer;
color: aliceblue;
margin: auto;	
}*/
h1{
color: lightgray;
text-align: center;
font-size: 50px;
}
h4{
color: ghostwhite;
font-size: 16.5px;
float: left;
margin-left:-35px;
text-align: left;	
}
</style>
    

</head>
<body>
	
	<h1>APPLICATION FOR CERTIFICATE GENERATION</h1>

<form class="myForm" method="post" action="process.php">

<p>
<label>
<h4>Name:</h4>
<input type="text" class="input" name="name" placeholder="Please enter your name here">
</label>
</p>

<p>
<label>
<h4>USN:</h4>
<input type="text" name="usn" maxlength="10" placeholder="exmaple:4MC15CS100">
</label>
</p>

	
<p>
<label>
<h4>Certificate for:</h4>
<select id="pickup_place" name="certificateName">
<option value="" selected="selected">Select One</option>
<option value="10th markscard" >10th markscard</option>
<option value="12th markscard" >12th markscard</option>
<option value="School Certificate" >School Certificate</option>
<option value="College Certificate" >College Certificate</option>
<option value="Character Certificate" >Character Certificate</option>
</select>
</label> 
</p>

<p>
<label>
<h4>Email address:</h4>
<input type="text" name="usn" maxlength="100" placeholder="exmaple:abc@gmail.com">
</label>
</p>

<p>
<label>
<h4>Mobile no. :</h4>
<input type="text" name="usn" maxlength="100" placeholder="Enter your mobile number here">
</label>
</p>

<p>
<label>
<h4>Reason for the application</h4>
<textarea name="message" maxlength="500" placeholder="Please specify the reason for the application here"></textarea>
</label>
</p>

<p>
<label>	<h4></h4>
<input type="submit" name="submit"	></label>
</p>
</form>
</body>
</html>