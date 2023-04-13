<?php
	
	include 'config.php';

	if (isset($_POST['post-comment'])) {

		$name = $_POST['name'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO demo (name, message)
		VALUES ('$name', '$message')";

		if ($conn->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>

<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alkabeer's | About</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/image/logofinal.png">
    <!-- Remix icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Swiper.js styles -->
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css"/>
    <!-- Custom styles -->
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
    <!-- Header -->
<body>
    <!-- Header -->
    <header class="header" id="header">

        <nav class="navbar container">
            <a href="./index.html">
            <h2 class="logo">Ahmad K's</h2>
            </a>
            <div class="menu" id="menu">
                <ul class="list">
                    <li class="list-item">
                        <a href="./index.html" class="list-link ">Home</a>
                    </li>
                    <li class="list-item">
                        <a href="./about.html" class="list-link current">About</a>
                    </li>
                    <li class="list-item">
                        <a href="./contact.html" class="list-link">Contact</a>
                    </li>

                    <li class="list-item screen-lg-hidden">
                        <a href="#" class="list-link">Sign in</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link screen-lg-hidden">Sign up</a>
                    </li>

                </ul>
            </div>
            <div class="list list-right">
                <button class="btn place-items-center" id="theme-toggle-btn">
                    <i class="ri-sun-line sun-icon"></i>
                    <i class="ri-moon-line moon-icon"></i>
                </button>
                <button class="btn place-items-center" id="search-icon">
                    <i class="ri-search-line"></i>
                </button>
                <button class="btn place-items-center screen-lg-hidden menu-toggle-icon" id="menu-toggle-icon">
                    <i class="ri-menu-3-line open-menu-icon"></i>
                    <i class="ri-close-line close-menu-icon"></i>
                </button>

                <a href="#" class="list-link screen-sm-hidden btt sign-up-btn fancy-border">
                   <span>Welcome</span> 
                </a>
            </div>
        </nav>
    </header>
    <!-- Search -->
    <div class="search-form-container container" id="search-form-container">

        <div class="form-container-inner">
    
            <form action="" class="form">
                <input type="text" class="form-input" placeholder="What are you searching?">
    
                <button class="btn form-btn" type="submit">
                  <i class="ri-search-line"></i>  
                </button>
            </form>
            <span class="form-note">Or press ESC to close.</span>
        </div>
        <button class="btn form-close-btn place-items-center" id="form-close-btn">
            <i class="ri-close-line"></i>
        </button>
    </div>
    <!--blog post-->

    <section class="comment-form ">
    <h class="comment-title">COMMENT<h>
        <div class="container-comment">
            <form  method="POST">
                <input class="comment-name" type="text" name="name" placeholder="Name" required>
                <textarea class="comment-message" name="message"  placeholder="Message" required></textarea>
                <button class="comment-btn btn" type="submit" name="post-comment">Post</button>
            </form>
        </div>

    	<div class="content-comment">
		<?php

			$sql = "SELECT * FROM demo";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		?>
		<h3 class="comment"><?php echo $row['name']; ?></h3>
		<p><?php echo $row['message']; ?></p>

		<?php } } ?>
	</div>
        

    </section>
    <!-- Footer -->
    <footer class="footer section">

        <div class="footer-container container d-grid">
            <div class="company-data">
                <a href="./index.html">
                    <h2 class="logo">Ahmad K's</h2>
                </a>
                <p class="company-description">Ahmad Alkabeer CS student at Qassim University.</p>
                
                <ul class="list social-media">
                    <li class="list-item">
                        <a href="https://www.youtube.com/channel/UCKNMAzATBw1sHwsXgdUBiNQ" class="list-link"><i class="ri-youtube-line"></i></a>
                    </li>
                    <li class="list-item">
                        <a href="https://www.instagram.com/3o9z/" class="list-link"><i class="ri-instagram-line"></i></a>
                    </li>
                    <li class="list-item">
                        <a href="https://twitter.com/Aqmed_" class="list-link"><i class="ri-twitter-line"></i></a>
                    </li>
                    <li class="list-item">
                        <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJlKnvNRNJNKdCFDQfxQbVTVWNBdcgtsSWZcFzKtfKJQWtrMwWWqbBkZVwjTgTZQJvDZVMg" class="list-link"><i class="ri-mail-line"></i></a>
                    </li>
                </ul>

                <span class="copyright-notice">&copy;2023 Ahmad K's. All rights reserved.</span>
            </div>

            <div>
                <h6 class="title footer-title">Categories</h6>
                
                <ul class="footer-list list">
                    <li class="list-item">
                        <a href="#" class="list-link">University</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Coding</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Technology</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Manga</a>
                    </li>

                    <li class="list-item">
                        <a href="#" class="list-link">Training</a>
                    </li>
                </ul>

            </div>

            <div>
                <h6 class="title footer-title">Useful links</h6>
                
                <ul class="footer-list list">
                    <li class="list-item">
                        <a href="./index.html" class="list-link">Home</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Catagories</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Tags</a>
                    </li>
                    <li class="list-item">
                        <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJlKnvNRNJNKdCFDQfxQbVTVWNBdcgtsSWZcFzKtfKJQWtrMwWWqbBkZVwjTgTZQJvDZVMg" class="list-link">Contact</a>
                    </li>

            </div>

            <div>
                <h6 class="title footer-title">Company</h6>
                
                <ul class="footer-list list">
                    <li class="list-item">
                        <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJlKnvNRNJNKdCFDQfxQbVTVWNBdcgtsSWZcFzKtfKJQWtrMwWWqbBkZVwjTgTZQJvDZVMg" class="list-link">Contact us</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">F.A.Q</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Careers</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Authors</a>
                    </li>
                </ul>

            </div>

        </div>
        
    </footer>
    <!-- Swiper.js -->
    <script src="./assets/js/swiper-bundle.min.js"></script>
    <!-- Custom script -->
    <script src="./assets/js/main.js"></script>
</body>
</html>