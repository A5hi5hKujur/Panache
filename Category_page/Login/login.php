<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="Stylesheets/login.css"/>
  <script src="javascripts/login.js" ></script>
</head>

<body>
<form name="login" method="post" action="index.php?page=admin">
<div id="formWrapper">
<div id="form">
<div class="logo">
  <div class="admin-pic"></div>
  <h3>PANACHE</h3>
</div>
		<div class="form-item">
			<input placeholder="Name" type="name" name="username" id="email" class="form-style" autocomplete="off"/>
		</div>
		<div class="form-item">
			<input placeholder="Password" type="password" name="password" id="password" class="form-style" />
		</div>
    <?php
      if(isset($_POST['login']) && !isset($_SESSION['admin']))
      { ?>
        <p><span class="error">Incorrect username or password</span></p>
      <?php } ?>
    <div class="form-item">
		<input type="submit" name="login" class="login" value="Log In" action="index.php?">
		</div>
</div>
</div>
</form>
</body>
