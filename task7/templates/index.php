<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>%TITLE%</title>
    <style>
		form {
			width: 400px;
		}
		
		input[type="text"],
		select,
		textarea {
			display: block;
			width: 100%;
			height: 35px;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}
		
		textarea {
			height: 100px;
			resize: none;
		}
		
		input[type="submit"] {
			padding: 5px 10px;
			cursor: pointer;
			
		}
        
        .errors {
            color: #FF0000;
            font-size: 15px;
            font-weight: 700;
        }
    </style>
</head>

<body>
<h2>Contact Form</h2>
<form method="post" action="">
	<input type="text" name="name" placeholder="Enter your name" value="%NAME%">
	<input type="text" name="email" placeholder="Enter your email" value="%EMAIL%">
	<select name="subject">
		<option value="none" %NONE%>Select subject</option>
		<option value="tech" %TECH%>Technical support</option>
		<option value="psych" %PSYCH%>Psychological support</option>
		<option value="financ" %FINANC%>Financial support</option>
		<option value="sos" %SOS%>SOS</option>
	</select>
	<textarea name="msg" placeholder="Enter your message">%MSG%</textarea>
	<input type="submit" value="Send message">
</form>
<div class="errors">%ERRORS%</div>
</body>
</html>