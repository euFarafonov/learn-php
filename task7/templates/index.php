<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>%TITLE%</title>
    <style>
        .msg {
            width: 400px;
            font-weight: 700;
            font-size: 16px;
            color: #000;
            border-radius: 3px;
            margin-bottom: 20px;
            padding: 0 10px;
            box-sizing: border-box;
        }
        
        .error {
            background-color: #FD6347;
        }
        
        .success {
            background-color: #00FF7F;
        }
		
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
			border: 1px solir #ccc;
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
    </style>
</head>

<body>
<div><h2>Contact Form</h2></div>
<form mehod="post" action="">
	<input type="text" name="name" placeholder="Enter your name" value="%NAME%">
	<input type="text" name="email" placeholder="Enter your email" value="%EMAIL%">
	<select name="subject">
		<option value="" %NONE%>Select option</option>
		<option value="tech" %TECH%>Technical support</option>
		<option value="psych" %PSYCH%>Psychological support</option>
		<option value="financ" %FINANC%>Financial support</option>
		<option value="sos" %SOS%>SOS</option>
	</select>
	<textarea name="msg" placeholder="Enter your message">%MSG%</textarea>
	<input type="submit" value="Send message">
</form>

<div style="color: #FF0000; font-size: 15px;"><strong>%ERRORS%</strong></div>

</body>
</html>