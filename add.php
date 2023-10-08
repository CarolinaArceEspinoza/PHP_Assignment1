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
  <header class="fix">
  <div class="brand_content"><img src="./img/Logo.png" alt="header logo"><a href="index.php"></a></div>

    <nav class="navbar">
    
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="view.php">View</a></li>
          </ul>

    </nav>
  </header>
  <?php

      // including classes
      include_once ('validate.php');
      include_once ('database.php');

      // create class objects
      $valid = new validate();
      
      if(!empty($_POST['Submit'])){
        // escape_string function
        $NAME = $_POST['name'];
        $CONTACT_NUMB = $_POST['contact'];
        $EMAIL = $_POST['email'];
        $BIRTH_YEAR = $_POST['birth'];
        $POSITION = $_POST['position'];
        $TIME_SLOT = $_POST['timeslot'];
        // validate class 
        $msg = $valid->checkEmpty($_POST, array('name', 'contact', 'email', 'birth', 'position', 'timeslot'));
        $checkName = $valid->validName($NAME);
        $checkContact = $valid->validContact($_POST['contact']);
        $checkEmail = $valid->validEmail($_POST['email']);
        $checkBirth = $valid->validBirth($_POST['birth']);
        $checkPosition = $valid->validPosition($_POST['position']);
        $checkTimeSlot = $valid->validTimeSlot($_POST['timeslot']);
        // answer to empty fields
        if($msg != null){
          echo $msg;
          //link to the previous page
          echo "<a class='buttons' href='javascript:self.history.back();'>Go Back</a>";
        }elseif(!$checkName){
          echo '<p>Please provide a valid Name</p>';
          echo "<a class='buttons' href='javascript:self.history.back();'>Go Back</a>";
        }elseif(!$checkContact){
          echo '<p>Please provide a valid contact number.</p>';
          echo "<a class='buttons' href='javascript:self.history.back();'>Go Back</a>";
        }elseif(!$checkEmail){
          echo '<p>Please provide a valid email.</p>';
          echo "<a class='buttons' href='javascript:self.history.back();'>Go Back</a>";
        }elseif(!$checkBirth){
          echo '<p>Please provide a valid birth date.</p>';
          echo "<a class='buttons' href='javascript:self.history.back();'>Go Back</a>";
        }elseif(!$checkPosition){
          echo '<p>Please provide a valid position.</p>';
          echo "<a class='buttons' href='javascript:self.history.back();'>Go Back</a>";
        }elseif(!$checkTimeSlot){
          echo '<p>Please provide a valid Time Slot.</p>';
          echo "<a class='buttons' href='javascript:self.history.back();'>Go Back</a>";
        }else{
          // if all the fields are valid
          $result = $database->execute("INSERT INTO player(name,CONTACT_NUMB,email,BIRTH_YEAR,position,TIME_SLOT) VALUES('$NAME','$CONTACT_NUMB','$EMAIL','$BIRTH_YEAR','$POSITION','$TIME_SLOT')");
          //  user knows that the record has been added
          if($result){
            echo "<h3>You are in, welcome to the camp 2023!</h3>";
            echo "<p>We will be in contact with you soon.</p>";
            echo "<a href='view.php' class='buttons'>View Result</a>";
          }
               
        }
      }
    ?>
  <main class="container top">
    <h2>Enrollment <span>status</span></h2>  
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
			</footer>
  </body>
</html>
