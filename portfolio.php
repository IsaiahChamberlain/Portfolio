<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script   src="https://code.jquery.com/jquery-3.6.1.js"   integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="   crossorigin="anonymous"></script>
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body onload="references">
    <nav style="text-align: center; background-color: lightblue;">
        <a href="index.php" title="Home" target="_self" id="home">Home</a>
        <a href="about.php" title="About" target="_self" id="about">About</a>
        <a href="portfolio.php" title="Portfolio" target="_self" id="portfolio">Portfolio</a>
    </nav>
    <section id="portfolio" class="bg-primary">
        <div class="container-fluid py-5">
        <div class="row"></div>
        <!--  Portfolio Section Title-->
        <div class="row text-white text-center">
            <div class="col">
                <h2 class="display-4 font-weight-bold">Portfolio</h2>
                <hr class="bg-white mb-5" />
            </div>  
        </div>

        <!--Portfolio Items Row Start-->
        <div class=""row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <!--Portfolio Item-->
            <div class="col mb-4">
                <div class="card bg-light text-center border-light shadow h-100">
                    <img src="Images/Cove1.png" alt="Cove" class="card-img-top" style="object-fit: cover; height: 15em;" />
                    <div class="card-body">
                        <h3 class="card-title">Accomplishments</h3>
                        <hr class="bg-primary" />
                        <p class="card-text">
                            This is a brief description of what I have accomplished. I have accomplished CompTIA IT Fundamentals and got a certificate.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-outline-primary btn-lg mt-2" role="button" href="#">Read More</a>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card bg-light text-center border-light shadow h-100">
                    <img src="Images/Cove1.png" alt="Cove" class="card-img-top" style="object-fit: cover; height: 15em;" />
                    <div class="card-body">
                        <h3 class="card-title">Accomplishments</h3>
                        <hr class="bg-primary" />
                        <p class="card-text">
                            This is a brief description of what I have accomplished. I have accomplished CompTIA IT Fundamentals and got a certificate.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-outline-primary btn-lg mt-2" role="button" href="#">Read More</a>
                        </a>
                    </div>
                </div>
            </div>
             <div class="col mb-4">
                <div class="card bg-light text-center border-light shadow h-100">
                    <img src="Images/Cove1.png" alt="Cove" class="card-img-top" style="object-fit: cover; height: 15em;" />
                    <div class="card-body">
                        <h3 class="card-title">Accomplishments</h3>
                        <hr class="bg-primary" />
                        <p class="card-text">
                            This is a brief description of what I have accomplished. I have accomplished CompTIA IT Fundamentals and got a certificate.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-outline-primary btn-lg mt-2" role="button" href="#">Read More</a>
                        </a>
                    </div>
                </div>
            </div>
            <!--Portfolio Item Ends-->
        </div>
    </section>
   
    <hr />
    <div style="text-align: center;">
        <h1>Welcome to my portfolio page</h1>
        <p>This page will contain information about my portfolio, which is currently under construction.</p>
        <h2>Below is a list of References along with practice of an array:</h2>
        <p id="references"></p>
        <p id="results"></p>
    </div>
    <id="contact">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="display-4 font-weight-bold">Contact Me</h2>
                    <hr />
                </div>
            </div>
            <!--Contact Form-->
            <div class="row justify-content-center">
                <div class="col-6">
                     <form action="http://form-test.slccwebdev.com/form-success.php" method="POST">
                        <div class="form-group">
                            <label for="name">Full name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Full Name" name="name" />
                        </div>

                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" />
                        </div>

                        <div class="form-group">
                            <label class="control-label">Can I contact you back?</label>
                           <div class="form-check">
                                <input class="form-check-input" type="radio" name="contact-back" id="yes" value="yes" checked />
                                <label class="form-check-label" for="yes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="contact-back" id="no" value="no" />
                                <label class="form-check-label" for="no">No</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="comments">Comments:</label>
                            <textarea id="comments"class="form-control" rows="3" name="comments"></textarea>
                        </div>
                        
                     <button class="btn btn-primary mb-2" type="submit" role="button">Submit</button>
                </form>
          </div>
       </div>
    </div>
    </section>
    <footer class="py-4 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Isaiah Chamberlain 2022 <a href="https://fonts.google.com/specimen/Press+Start+2P">Credits to 2p font here</a></p>
        </div>
    </footer>
    <script src="script2.js"></script>
</body>
</html>