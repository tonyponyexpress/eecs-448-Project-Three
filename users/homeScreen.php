<!DOCTYPE html>
<html lang="en">
<head>
    <title>Get Rid of it</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="cssFiles/homeScreen.css">
    <link rel="stylesheet" href="cssFiles/website.css">
</head>
<body>

    <!-- Header -->
    <?php
    /**
    *User homescreen
    *Shows the homescreen and allows users to login in, as well as creating users
    *
    *
    *
    *@author Tritens
    *@package users
    *
    */
        session_start();
        include('templates/header_login.php');
    ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2" style="text-align: center;">
          <div class="pad" style="margin-top: 50px; margin-bottom: 100px;"><img src="../assets/guarantee.jpg" alt="Guarantee"> </div>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <blockquote>
                    <p>"Very simple and helpful company. Provided me with free shipping material, high offer, and a quick process. Even though what I had was a used iPhone they still took the time to evaluate what I had and gave me a good offer and process to sell it."</p>
                    <footer>Ian Farris</footer>
                  </blockquote>
                  <img src="../HeadShots/Ian.jpg" alt="Ian's headshot" style="width:60px;height:60px;">
                </div>
                <div class="carousel-item">
                  <blockquote>
                    <p>"You can get some very impressive offers here. I would definitely recommend if you are not trying to hassle with selling things on Craigslist.  "</p>
                    <footer>Emilia Paz</footer>
                  </blockquote>
                  <img src="../HeadShots/Emilia.jpg" alt="Emilia's headshot" style="width:60px;height:60px;">
                </div>
                <div class="carousel-item">
                  <blockquote>
                    <p>"Great place quick service. Went to sell two rings cleaned and yearly inspected. While selling there we decided to sell a few odds and ends from around the house. The site offered high prices and was very easy to use. This company makes selling stuff a real pleasure. I love this company and the hospitality they give their customers."</p>
                    <footer>Tony Nguyen</footer>
                  </blockquote>
                  <img src="../HeadShots/Tony.jpg" alt="Tony's headshot" style="width:60px;height:60px;">
                </div>
                <div class="carousel-item">
                  <blockquote>
                    <p>"Always have stuff I can get rid of on here! Great pricing and friendly knowledgeable customer service! NEVER had issues doing business with them!!!"</p>
                    <footer>Rob Nickel</footer>
                  </blockquote>
                  <img src="../HeadShots/Rob.jpg" alt="Rob's headshot" style="width:60px;height:60px;">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
              </a>
          </div>
        </div>

        <div class= "col-md-6" style= "text-align: center; margin-top: 50px">
          <div class="container-fluid">
            <div class="row" style="text-align: center; padding-left: 12%; padding-right: 12%; padding-top: 3%; padding-bottom: 10%;">
                <img src="../assets/frontGraphic.png" alt="satisfaction" style="width:1000px;height:300px; margin-right: 20px; margin-left: 20px;">
            </div>
          </div>
          <img src="../assets/satisfaction.jpeg" alt="satisfaction" style="width:200px;height:150px; margin-right: 20px; margin-left: 20px;">
          <img src="../assets/reviews.png" alt="reviews" style="width:180px;height:150px; margin-right: 20px; margin-left: 20px;">
          <img src="../assets/paidthemost.jpeg" alt="paid the most" style="width:180px;height:150px; margin-right: 20px; margin-left: 20px;">
          <img src="../assets/bestprice.jpeg" alt="best price" style="width:180px;height:150px; margin-right: 20px; margin-left: 20px;">
          <br><br>
          <h1><b>What we buy</b></h1>
          <p> Get Rid of it serves as a great outlet to turn any of your old or unused items including jewelry, coins, electronics, gaming systems, phones, laptops, furniture,
            cars, precious metals, or any other unwanted items into cash today. Submit your item to us and let our experts give you a cash quote today. No more dealing with the hassle of waiting
            on other sites to see if your items sell. If you need fast cash today then Get Rid of It is the place to be!</p>
        </div>


        <div class="col-md-3" style="text-align: center; margin-top: 50px">
          <h1>Mission Statement</h1>
          <p> GetRidofIt is known for creating a simple buying concept<br> which offers the highest dollar cash payout for any<br>
             collectible items, furthermore, serving our customers in a<br> a manner that will generate a referral business that money can't buy.
            <div class= "centerMissionStatement" style="text-align: right">
              <form action="backEnd/CreateUsers.php" method="post">
              First Name:<input type="text" name="newFirst"><br><br>
              Last Name:<input type="text" name="newLast"><br><br>
              Email:<input type="email" name="newEmail"><br><br>
              Username:<input type="text" name="newUsername"><br><br>
              Password:<input type="password" name="newPassword"><br><br>
              Re-enter Password:<input type="password" name="newPassword2"><br><br>
                <input type="submit" value="Sign Up" />
              </form>
          </div>
        </div>
        <div class="col-md-1"> </div>
      </div>
    </div>


    <!-- Footer -->
    <?php
        include('usersClass.php');
        $temp = new users();
        $temp->tmpl_footer();
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
