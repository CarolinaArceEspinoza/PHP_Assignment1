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
      <h1>check the list of</h1>
			<h2>participants</h2>
		</div>
	</section>

  <!-- MAIN CONTENT -->
  <div class="container">
  <h2>Registration<span> list</span></h2>

		<table class="table">
      <?php  
        $query = 'SELECT * FROM player';
        $result = $database->getData($query);
      ?>
      
      <!-- table headings -->
      <tr>
        <th>Name</th>
        <th>Birth Year</th>
        <th>Email</th>
        <th>Position</th>
        <th>Contact Number</th>
        <th>Time Slot</th>
        
      </tr>
      <!-- loop to display the query -->
      <?php
        foreach($result as $key => $res){
          echo "<tr>";
          echo "<td class='capitalize'>".$res['NAME']."</td>";
          echo "<td>".$res['BIRTH_YEAR']."</td>";
          echo "<td>".$res['EMAIL']."</td>";
          echo "<td>".$res['POSITION']."</td>";
          echo "<td>".$res['CONTACT_NUMB']."</td>";
          echo "<td>".$res['TIME_SLOT']."</td>";
          echo "</tr>";
        }
      ?>
		</table>
</div>
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
			</footer>
</body>
</html>
