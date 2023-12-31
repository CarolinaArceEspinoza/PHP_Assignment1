<!DOCTYPE HTML>
<HTML LANG="EN">

<!-- HEAD AND METADATA -->
<head>
	<meta charset="utf-8">
  <title>Oakville Women's Soccer Team</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&family=Roboto+Condensed:wght@300;400;700&family=Sofia+Sans+Extra+Condensed:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<meta name="description" content="Webpage of Oakville Women's Soccer Team">
  <link rel="stylesheet" href="./css/style.css">
		  <link rel="shortcut icon" href="img/Fabicon.png" type="image/x-icon">
</head>

<body>

  <!-- WEB HEADER AND NAVIGATION BAR -->
  <header>
  <div class="brand_content"><img src="./img/Logo.png" alt="header logo"><a href="index.php"></a></div>
  <nav class="navbar">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="view.php">View</a></li>
    </ul>
  </nav>
  </header>

  <!-- PRESENTATION -->
	<section class="masthead">
		<div>
      <h1>Women's soccer camp</h1>
			<h2>is about<br>to start!</h2>
		</div>
	</section>

  <!-- MAIN CONTENT -->
  <main class="container">
    <h2>Sign up and <span> participate</span></h2>

     <!-- FORM TO FILL THE INFORMATION THAT WILL BE STORED IN DATABASE -->
		     <form method="post" action="add.php">
            <p>
              <label>Name and Last Name:</label><br>
              <input type="text" name="name" placeholder="Your Name Here">
            </p>
            <p>
              <label>Contact Number:</label><br>
              <input type="text" name="contact" placeholder="xxx xxx xxxx">
            </p> 
            <p>
              <label>Parents/Guardians E-mail:</label><br>
              <input type="text" name="email" placeholder="E-mail">
            </p>
            <p class="formSmall"> 
              <label>Birth date:</label><br>
              <input type="date" id="birth" name="birth" value="2000-07-22" min="2000-01-01" max="2020-12-31">
            </p>
            <p class="formSmall">
              <label>Your play position</label><br>  
              <select name="position" id="position">
                <option value="0" selected>Choose here</option>
                <option value="goalkeeper">Goalkeeper</option>
                <option value="defender">Defender</option>
                <option value="midfielder">Midfielder</option>
                <option value="forward">Forward</option>
              </select>
            </p>
            <p>
              <label>Time Slot</label><br>
              <select name="timeslot" id="timeslot">
                <option value="0" selected>Choose here</option>
                <option value="Sat 09:00 - 12:00">Saturday 09:00 to 12:00</option>
                <option value="Sun 09:00 - 12:00">Sunday 09:00 to 12:00</option>
                <option value="Wed 18:00 - 21:00">Wednesday 18:00 to 21:00</option>
              </select>
            </p>

             <!-- BUTTONS -->
           <input class="buttons" type="submit" name="Submit" value="Add">
           <input class="buttons" type="reset" value="Clear">
		     </form>
     </main>

			<!-- FOOTER -->	
			<footer id="footer">
      <h3>Follow us!</h3>
				<nav id="social">
				<ul>
					<li><a href="https://www.facebook.com/" target="_blank"><img src="img/Social_facebook.png" alt="facebook"></a></li>
					<li><a href="https://www.instagram.com/" target="_blank"><img src="img/Social_insta.png" alt="instagram"></a></li>
					<li><a href="https://www.twitter.com/" target="_blank"><img src="img/Social_twitter.png" alt="twitter"></a></li>
					<li><a href="https://www.whatsapp.com/" target="_blank"><img src="img/Social_whatsapp.png" alt="whatsapp"></a></li>
				</ul>
				</nav>
        <small>Image provided by <a href="https://www.freepik.com/" target="_blank">Freepik.com</a></small>
			</footer>

   </body>
</html>
