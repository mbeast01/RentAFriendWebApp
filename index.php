<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
       
        <style type="text/css">
            #slides-wrapper{box-sizing: border-box;max-width: 700px; margin: 5vh 10vw 5vh; justify-content: center;}
            .slide{display: flex; justify-content: right;box-sizing: content-box; width:70%;}
           
            #columns{box-sizing: border-box; }
            h2 {
                width: 70%;
                margin: auto;
            }
            p {
                width: 60%;
                margin: auto;
            }
        </style>

        <title>Home Page</title>
    </head>
    <body>

        <header>
                <div class="logo">
                    <a href="index.php"><img src="logo.png" alt="Logo" ></a>
                </div>
                </div>
                <div class="title">
                    <h1>Rent-A-Friend</h1>
                </div>
        </header>
        
        <div class="navbar" id="myTopnav">
        <a href="index.php" class = "active" >Home</a>
        <a href="FAQ.html">FAQ</a>
        <a href="match.html">Find Match</a>
        <a href="profiles.html">Profiles</a>
        <a href="reviews.html">Reviews</a>
        <a href="terms.html" >Terms</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
     </div>


        <script language="javascript">
			// slideshow functionality
            images = ["im1.jpg", "im2.jpg","im3.jpg","im4.jpg","im5.jpg","im6.jpg",
            "im7.jpg","im8.jpg","im9.jpg","im10.jpg","im11.jpg","im12.jpg","im13.jpg",
            "im14.jpg","im15.jpg","im16.jpg","im17.jpg","im18.jpg","im19.jpg", "im20.jpg"];
            var imgIndex=0;
            
            $(document).ready(function() {
                window.onload=slideShow()   
            })
            function slideShow()
            {
                $("#slide img").fadeOut(2000,nextSlide);
    		}
           function nextSlide()
            {
                imgIndex++;
                imgIndex= imgIndex== images.length? 0: imgIndex;
                $("#slide img").attr("src","images/"+images[imgIndex]);
                $("#slide img").fadeIn(2000,slideShow);
            }

			// navbar resposivity
			function displayMenu() {
			  var x = document.getElementById("navbar");
			  if (x.className === "navbar") {
			    x.className += " responsive";
			  } else {
			    x.className = "navbar";
			  }
			}
			
        </script>
            <div class="row">
                <div class="column left">
                </div>
                <div class="column middle" style="padding: 1px;">
                    <h2>Welcome</h2>
                    <p>Congratulations and welcome to Rent-a-Friend, where we've perfected 
                        the art of commodifying and distilling the essence of genuine human 
                        connection into a transactional experience. Because why bother with 
                        those pesky emotions and genuine connections when you can simply swipe, 
                        rent, and return your friends like a library book? Rest assured, our 
                        friendships are as genuine as a politician's promise. So, grab your 
                        wallet and let's pretend to care about each other for an hourly fee. 
                        Cheers to the epitome of authentic human interaction!</p>
                </div>
            </div>
        
        <div id='slides-wrapper'>
            <div id='slide'>
                <img src="images/im1.jpg" style="width: 100%; height: auto; display: flex; align-items: right; justify-content: center;"/>
            </div>
        </div>  
        
        <footer>
			<div class="footer-copyright">
					<p>&copy; 2024 Rent-A-Friend. All rights reserved.</p>
			</div>
			<div class="footer-links" >
					<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="FAQ.html">FAQ</a></li>
							<li><a href="Contact.html">Contact</a></li>
							<li><a href="match.html">Find A Match</a></li>
							<li><a href="profiles.php">Profiles</a></li>
							<li><a href="reviews.html">Reviews</a></li>
					</ul>
			</div>
	</footer>
            <script>
                function myFunction() {
                  var x = document.getElementById("myTopnav");
                  if (x.className === "navbar") {
                    x.className += " responsive";
                  } else {
                    x.className = "navbar";
                  }
                }
                </script>
    </body>
</html>
