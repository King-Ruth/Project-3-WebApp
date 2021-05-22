<!DOCTYPE html>
<html>
<head>
    <title> Password Generator </title>
    <link rel = "stylesheet" type = "text/css" href = "style.css" >
</head>
<body>

<div class="container">
	<h2>Password Generator</h2>
	<div class="result-container">
		<span id="result"></span>
		<button class="btn" id="clipboard">
			<i class="far fa-clipboard"></i>
		</button>
	</div>
	<div class="settings">
		<div class="setting">
			<label>Password length</label>
			<input type="number" id="length" min='4' max='20' value='20' />
		</div>
		<div class="setting">
			<label>Include uppercase letters</label> 
			<input type="checkbox" id="uppercase" checked />
		</div>
		<div class="setting">
			<label>Include lowercase letters</label> 
			<input type="checkbox" id="lowercase" checked />
		</div>
		<div class="setting">
			<label>Include numbers</label> 
			<input type="checkbox" id="numbers" checked />
		</div>
		<div class="setting">
			<label>Include symbols</label> 
			<input type="checkbox" id="symbols" checked />
		</div>
	</div>
	<button class="btn btn-large" id="generate">
		Generate Password
	</button>
	<br>
	<button class="btn btn-large" id="logout" onclick="window.location.href='logout.php';">
		Logout
	</button>
	<br>
	<button class="btn btn-large" id="resetpw" onclick="window.location.href='reset-password.php';">
		Reset Password
	</button>
</div>


<div class="floating-text">
	By Ruth Osaruwense Otasowie
</div>
<script src="workings.js" defer></script>
</body>
</html>