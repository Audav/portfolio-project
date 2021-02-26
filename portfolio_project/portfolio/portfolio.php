<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/portfolio_styles.css">
    <title>Aubrey Davies Portfolio Project</title>
</head>
<body>
    <header id="head">
        <h1>Aubrey Davies</h1>
        <h2>A Software Development student at Green River College, looking for an internship
            in front-end web-development.</h2>
    </header>
    <?php
    include('../guestbook/includes/navbar.html');
    ?>
    <nav>
        <ul>
            <li><a href="#contact">Contact Info</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#experience">Experience</a></li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div id="top">
            <img src="images/A_pic_of_me.png" alt="a picture of me"/>
        </div>
        <div class="container-fluid" id="body">
            <section class="align-items-start" id="main">
                <section class="col" id="half1">
                    <div id="contact">
                        <h3>Contact Info</h3>
                        <div class="row">
                            <ul class="col">
                                <li class="row">daviesfamily03@gmail.com</li>
                                <li class="row">206-452-9848</li>
                            </ul>
                            <ul class="col" id="right">
                                <li class="row"><a href="https://www.linkedin.com/in/aubrey-davies-105079191/">
                                    Linkedin</a></li>
                                <li class="row"><a href="https://github.com/Audav">Github</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="education">
                        <h3>Education</h3>
                        <h4>Bachelor of Applied Science, Software Development</h4>
                        <div class="row">
                            <p class="col">Green River College, Auburn, WA </p>
                            <p class="col">2020 to Present</p>
                        </div>
                        <p>(Students are taught languages like Java, SQL, and Javascript, taught how to develop websites,
                            build databases, and gain real-world experience by working on teams and with actual clients) </p>
                        <h4>Associate in Natural Science, AS</h4>
                        <div class="row">
                            <p class="col">Green River College, Auburn, WA </p>
                            <p class="col">2017 to 2020</p>
                        </div>
                        <p>(Students learn advanced Chemistry, Physics, Biology, and Calculus) </p>
                    </div>
                </section>
                <section class="col" id="half2">
                    <div id="skills">
                        <h3>Skills</h3>
                        <ul>
                            <li>Languages: Java, JavaScript, C++, SQL, PHP </li>
                            <li>Web: HTML/CSS, Bootstrap, jQuery </li>
                            <li>Agile: pair programming, working on scrum teams </li>
                            <li>Tools: Git, PhpStorm, IntelliJ, WebStorm, Visual Studio </li>
                            <li>Collaboration: Zoom, Discord, Trello, Skype </li>
                        </ul>
                    </div>
                    <div id="experience">
                        <h3>Experience</h3>
                        <h4>Coneybeare Sustainability Catalog</h4>
                        <div class="row">
                            <p class="col">Coneybeare</p>
                            <p class="col">Present/Ongoing</p>
                        </div>
                        <ul>
                            <li>Create an online database for eco-friendly companies partnered with
                                Coneybeare. </li>
                            <li>The website also serves as a public information hub for users to find information
                                on eco-friendly companies.</li>
                            <li>Working on a scrum team of 4 people, using PhpStorm, Git, and Repl.it to test
                                and build the website. </li>
                        </ul>
                    </div>
                </section>
            </section>
        </div>
    </div>

    <script src="script/jquery.slim.min.js"></script>
    <script src="script/popper.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
</body>
</html>