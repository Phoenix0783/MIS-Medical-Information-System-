<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
                integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
                crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/4a0043cc1c.js" crossorigin="anonymous"></script>
        <link rel="icon" href="logo2.png" type="image/x-icon">
        <link rel="stylesheet" href="home-style.css">
        <title>Home page</title>
</head>

<body>
        <div class="header">
                <span>
                        <img src="logo00.png" id="logo">
                </span>
                <div id="search" class="input-group input-group-lg">
                        <div class="input-group-prepend">
                                <span class="btn btn-info" id="inputGroup-sizing-lg">Search</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Large"
                                aria-describedby="inputGroup-sizing-sm" placeholder="Search condition">
                </div>
        </div>
        <div class="navigation">
                <center>
                        <div class="btn-group">
                                <div id="navigation1" class="dropdown">
                                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu1"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                TOPICS
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <a class="dropdown-item" href="#">Child health</a>
                                                <a class="dropdown-item" href="#">Mental health</a>
                                                <a class="dropdown-item" href="#">Heart health</a>
                                                <a class="dropdown-item" href="#">Preganancy</a>
                                                <a class="dropdown-item" href="#">Travel vaccination</a>
                                        </div>





                                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu2"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                TREATMENT
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <a class="dropdown-item" href="#">Nervous system</a>
                                                <a class="dropdown-item" href="#">Heart Diseases</a>
                                                <a class="dropdown-item" href="#">Infections</a>
                                                <a class="dropdown-item" href="#">Inflammation</a>
                                                <a class="dropdown-item" href="#">Painkillers</a>
                                        </div>




                                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu3"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                RESOURCES
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                                <button class="dropdown-item" type="button">Action</button>
                                                <button class="dropdown-item" type="button">Another action</button>
                                                <button class="dropdown-item" type="button">Something else here</button>
                                        </div>





                                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu4"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                PROFESSIONAL
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu4">
                                                <button class=" btn btn-info dropdown-item"
                                                        type="button">Action</button>
                                                <button class="dropdown-item" type="button">Another action</button>
                                                <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                        <span class="btn btn-info" id="nav1">NEWSLETTER</span>
                                        <span class="btn btn-info" id="nav1">COMMUNITY</span>
                                        <a href="user-login.html"> <span class="btn btn-info" id="nav1">BOOK AN APPOINTMENT</span></a>
                                        <span class="btn btn-info" id="nav1">REGISTER</span>
                                </div>
                        </div>
                </center>
        </div>
        <div style="height: 300px;" class="row">


                <div style="background-color:#CAF7E3; width: 100%;">
                        <form action="database-validation.php">
                                <input style="width: 500px; height: 60px; margin-left: 600px; margin-top: 40px; border-color: transparent;padding: 5px; margin-bottom: 10px;"
                                        type="text" placeholder="Username" name="name1"><br>
                                <input style="width: 500px; height: 60px; margin-left: 600px; border-color: transparent;padding: 5px; margin-bottom: 10px;" class="inpt" type="text" placeholder="Password" name="pass1"><br>
                                <input style="margin-left: 750px; font-size: 20px;background-color: white; border-color: transparent;color: black; border-radius: 10px; padding: 10px 40px;" type="submit" value="LOGIN">
                        </form>
                </div>

        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                        <div class="carousel-item active">
                                <img class="d-block w-100" src="c01.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                                <img class="d-block w-100" src="c02.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                                <img class="d-block w-100" src="c03.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                                <img class="d-block w-100" src="c04.jpg" alt="Third slide">
                        </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                </a>
        </div>
        <div class="row">
                <div class="col-sm-6" style="background-color:lavender;">
                        <div id="card1" class="card" style="width: 700px;">
                                <img class="card-img-top" src="art01.jpg" alt="Card image cap">
                                <div class="card-body">
                                        <p id="line1a" class="card-text">ALLERGIES, BLOOD & IMMUNE SYSTEM</p>
                                        <p id="line1b" class="card-text">When is hay fever season in the UK - and how
                                                can you avoid
                                                the symptoms?</p>
                                        <p id="line1c" class="card-text">For one in five of us, the arrival of spring or
                                                summer after the long, cold
                                                winter months is a mixed blessing - and a microscopic powder is to
                                                blame. Hay fever is cause by an allergy to pollen produced by grass
                                                (hence the 'hay' in hay fever) or sometimes trees or weeds.</p>
                                        <p id="line1d" class="card-text blockquote-footer">Dr Sarah Jarvis MBE . 4 mins
                                                read</p>
                                </div>
                        </div>

                </div>
                <div class="col-sm-3" style="background-color:lavender;">
                        <div id="card2" class="card" style="width: 300px;">
                                <img class="card-img-top" src="art02.jpg" alt="Card image cap">
                                <div class="card-body">
                                        <p id="line1a" class="card-text">ALLERGIES & BLOOD</p>
                                        <p id="line1b" class="card-text">COVID-19: how to tell hay fever and coronavirus
                                                apart</p>
                                        <p id="line1c" class="card-text">The weather is getting warmer and many of us
                                                are gladly welcoming the arrival of spring and summer. But for people
                                                who suffer with hay fever, it's the start of grass pollen season and can
                                                bring misery.</p>
                                        <p id="line1d" class="card-text blockquote-footer"> 6 min read</p>
                                </div>
                        </div>
                </div>
                <div class="col-sm-3" style="background-color:lavender;">
                        <div id="card2" class="card" style="width: 300px;">
                                <img class="card-img-top" src="art03.jpg" alt="Card image cap">
                                <div class="card-body">
                                        <p id="line1a" class="card-text">ALLERGIES & BLOOD</p>
                                        <p id="line1b" class="card-text">
                                                Hay fever: how your pharmacist can help</p>
                                        <p id="line1c" class="card-text">

                                                whatapp
                                                With hay fever season approaching, many sufferers will be stocking up on
                                                hay fever remedies. But to prevent or treat hay fever effectively, it
                                                may be worth getting additional medical advice. The best place to start
                                                is at the pharmacy, where qualified staff will be able to help you in a
                                                number of ways.</p>
                                        <p id="line1d" class="card-text blockquote-footer"> 6 min read</p>
                                </div>
                        </div>
                </div>
        </div>
        <div class="ads">
                <a href="#">
                        <center>
                                <img src="ads.png" style="height: 200px;width: 80%; border-radius: 10px; margin: 30px;">
                        </center>
                </a>
        </div>

        <div class="cards2">
                <div class="row">
                        <div style="background-color:lavender;" id="cnt1" class="col-sm">
                                <center>
                                        <div id="card3a" class="card" style="width: 300px;">
                                                <img class="card-img-top" src="c5.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                        <p id="line1a" class="card-text">FEATURES</p>
                                                        <p id="line1b" class="card-text">
                                                                How to maintain a healthy lifestyle during lockdown</p>
                                                        <p id="line1d" class="card-text blockquote-footer"> 6 min read
                                                        </p>
                                                </div>
                                        </div>
                                </center>
                        </div>
                        <div style="background-color:lavender;" class="col-sm">
                                <center>
                                        <div id="card3b" class="card" style="width: 300px;">
                                                <img class="card-img-top" src="c6.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                        <p id="line1a" class="card-text">FEATURES</p>
                                                        <p id="line1b" class="card-text">
                                                                Why it's normal to feel anxious about a post-COVID
                                                                future</p>
                                                        <p id="line1d" class="card-text blockquote-footer"> 6 min read
                                                        </p>
                                                </div>
                                        </div>
                                </center>
                        </div>
                        <div style="background-color:lavender;" class="col-sm">
                                <center>
                                        <div id="card3c" class="card" style="width: 300px;">
                                                <img class="card-img-top" src="c7.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                        <p id="line1a" class="card-text">FEATURES</p>
                                                        <p id="line1b" class="card-text">
                                                                Can lifestyle changes reduce your COVID-19 risk?</p>
                                                        <p id="line1d" class="card-text blockquote-footer"> 6 min read
                                                        </p>
                                                </div>
                                        </div>
                                </center>
                        </div>
                        <div style="background-color:lavender;" class="col-sm">
                                <center>
                                        <div id="card3d" class="card" style="width: 300px;">
                                                <img class="card-img-top" src="c8.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                        <p id="line1a" class="card-text">FEATURES</p>
                                                        <p id="line1b" class="card-text">
                                                                Long COVID: what support is available?</p>
                                                        <p id="line1d" class="card-text blockquote-footer"> 6 min read
                                                        </p>
                                                </div>
                                        </div>
                                </center>
                        </div>
                </div>
        </div>
        <hr>
        <div id="doctors" class="row">
                <div style="background-color: lavender;" class="col-2">
                        <center> <img style="border-radius: 50%; height: 150px; width: 150px;" src="drH.jpg" alt="">
                        </center>
                </div>
                <div style="background-color: lavender;" class="col-10">
                        <i>
                                <div class="linedoc1">"It’s important to be aware of any unexplained changes to your
                                        body.
                                        These could be a persistent cough, a new lump or even an expanding waistline.
                                        Symptoms
                                        are often nothing to worry about, but sometimes require further investigation."
                                </div>
                        </i>
                        <div id="doc_name" class="blockquote-footer">Dr Dawn Harper <b> General Practitioner, Media
                                        Doctor</b></div>
                </div>
        </div>
        <hr>
        <div id="doctors" class="row">

                <div style="background-color: lavender;" class="col-10">
                        <i> <span class="linedoc1">"When you are worried about your child it can be hard to find
                                        genuine, sensible advice online. Our Child Health Hub offers parents advice you
                                        can trust for all your children’s health needs."</span></i>

                        <span style="margin-top: 10px;" id="doc_name" class="blockquote-footer">Dr Ellie Cannon<b>
                                        General Practitioner, Media
                                        Doctor</b></span>
                </div>
                <div style="background-color: lavender;" class="col-2">
                        <center> <img style="border-radius: 50%; height: 150px; width: 150px;" src="drE.jpg" alt="">
                        </center>
                </div>
        </div>
        <hr>
        <div id="doctors" class="row">
                <div style="background-color: lavender;" class="col-2">
                        <center> <img style="border-radius: 50%; height: 150px; width: 150px;" src="drP.jpg" alt="">
                        </center>
                </div>
                <div style="background-color: lavender;" class="col-10">
                        <i>
                                <div class="linedoc1">"Every woman deserves the best healthcare. Whatever your needs,
                                        our hub aims to empower you to understand your condition and take control."
                                </div>
                        </i>
                        <div id="doc_name" class="blockquote-footer">Prof Lesley Regan<b> President, Royal College of
                                        Obstetricians and Gynaecologists </b></div>
                </div>
        </div>
        <hr>
        <div id="doctors" class="row">
                <div style="background-color: lavender;" class="col-10">
                        <i> <span class="linedoc1">"Heart disease is one of the leading causes of death in the UK and
                                        particularly of dying young, below the age of 75. Our heart health hub
                                        summarises the latest medical evidence and guides you through the symptoms and
                                        signs to look out for."</span></i>
                        <span id="doc_name" class="blockquote-footer">Dr Yassir Javaid <b>Cardiovascular lead Nene CCG,
                                        Primary Care Cardiovascular lead, East Midlands Clinical Network</b></span>
                </div>
                <div style="background-color: lavender;" class="col-2">
                        <center> <img style="border-radius: 50%; height: 150px; width: 150px;" src="drY.jpg" alt="">
                        </center>
                </div>
        </div>
        <hr>
        <div class="footer">
                <div style="margin-left: 10px; margin-right: 10px" class="row">
                        <div style=" height: 440px;" class="col-sm">
                                <a href="#">
                                        <p style="margin-top: 30px;" class="lin4a">HEALTH INFORMATION</p>
                                </a><br>
                                <a href="#">
                                        <p class="lin4a">MEDICAL DIRECTORY</p>
                                </a><br>
                                <a href="#">
                                        <p class="lin4a">COMMUNITY</p>
                                </a><br>
                                <a href="#">
                                        <p class="lin4a">SYMPTOM CHECKER</p>
                                </a><br>
                                <a href="#">
                                        <p class="lin4a">MEDICAL PROFESSIONAL</p>
                                </a>
                        </div>
                        <div style=" height: 440px;" class="col-sm">
                                <a href="#">
                                        <p style="margin-top: 30px;" class="lin4a">ABOUT US</p>
                                </a><br>
                                <a href="#">
                                        <p class="lin4a">AUTHOR</p>
                                </a><br>
                                <a href="#">
                                        <p class="lin4a">CONTACT US</p>
                                </a><br>
                                <a href="#">
                                        <p class="lin4a"> TERMS AND CONDITIONS</p>
                                </a><br>
                                <a href="#">
                                        <p class="lin4a">PRIVACY POLICY</p>
                                </a><br>
                                <a href="#">
                                        <p class="lin4a">ADVERTISE WITH US</p>
                                </a><br>
                        </div>
                        <div class="col-sm">
                                <p style="margin-top: 30px;" class="lin4a">Our clinical information is certified to meet
                                        NHS England's
                                        Information Standard.</p><br>
                                <a href="#">
                                        <p class="lin4a">Read more</p>
                                </a><br>
                        </div>
                        <div style=" height: 440px;" class="col-sm">
                                <p class="line4b">Health information you can trust</p><br>
                                <p class="line4c">Patient aims to help the world proactively manage its healthcare,
                                        supplying evidence-based information on a wide range of medical and
                                        health topics to patients and health professionals.</p><br>
                        </div>
                </div>
        </div>
</body>

</html>