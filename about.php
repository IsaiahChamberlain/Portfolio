<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script   src="https://code.jquery.com/jquery-3.6.1.js"   integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="   crossorigin="anonymous"></script>
    <title>About</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav style="text-align: Center; background-color: lightblue;">
        <a href="index.php" title="Home" target="_self" id="home">Home</a>
        <a href="about.php" title="About" target="_self" id="about">About</a>
        <a href="portfolio.php" title="Portfolio" target="_self" id="portfolio">Portfolio</a>
    </nav>
    <section id="about">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center py-5" style="background-color: rgba(0, 0, 0, 0.2);">
            <div class="col-6 col-md-4">
                <img src="Images/IMG_0950.JPG" alt="My Headshot" Class="img-fluid" />
            </div>
            <div class="col-lg-8 my-3">
                  <h2 class="font-weight-bold">Isaiah Chamberlain</h2>
                  <hr class="my-4">
                  <p class="font-weight-light mx-5">My name is Isaiah Chamberlain. I enjoy doing web development. I started learning about it in high school and soon became a hobby of mine and hopefully a career sometime.</p>
                    <a class="btn btn-primary btn-lg mt-3" role="button" href="#contact">Contact Me</a>
                </div>
          </div>
      </div>
    </section>
   
    <hr />
    <div style="text-align: center;">
        <h1>Who is Isaiah Chamberlain</h1>
        <p>My name is Isaiah Chamberlain and I have always been interested in web Development, <br /> Ever since I took my first Web Development class in high school, I have been interested <br />and skilled at Web Development.</p>
    </div>
    <div>
        <?php
        $skills = array("HTML", "CSS", "JavaScript", "Computer Repair");
        
        function newList($arr){
              echo "<ul> My skills are: ";
              foreach ($arr as $value){
                echo "<li>" . $value . "</li>";
              }
              echo "</ul>";
        }
        newList($skills);
        ?>
    </div>
    <div style="text-align: center;">
        <h1>My Resume</h1>
        <p>Below is a place where you can access my resume.</p>
        <a href="https://drive.google.com/file/d/19qF-B2pZHHQSxqipCDIKkCOY74nkrgNm/view?usp=sharing" id="resume" title="Resume" alt="Resume">Resume</a>
    </div>
    <footer class="py-4 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Isaiah Chamberlain 2022 <a href="https://fonts.google.com/specimen/Press+Start+2P">Credits to 2p font here</a></p>
        </div>
    </footer>
</body>
</html>