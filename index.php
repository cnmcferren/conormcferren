<!DOCTYPE html>

<html lang="en">
    <head>
        <title>W. Conor McFerren</title>

        <meta charset='utf-8' content="width=device-width, initial-scale=1">
        <meta name="author" content="W. Conor McFerren">
        <meta name="description" content="From GPU Programming to Ham Radio, jump into my interactive resume to learn more about me, W. Conor McFerren">

        <link rel="stylesheet" href="styles/colors.css">
        <link rel="stylesheet" href="styles/landing.css">
        <link rel="stylesheet" href="styles/aboutme.css">
        <link rel="stylesheet" href="styles/experience.css">
        <link rel="stylesheet" href="styles/abilities.css">
        <link rel="stylesheet" href="styles/contactme.css">
        <link rel="stylesheet" href="styles/menu.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="scripts/nav.js"></script> 
    </head>
    <body>
        <?php
            include "scripts/formatting.php";
        ?>
        <div class="floatingmenu">
            <button type="button" onclick="smoothScroll(document.getElementById('title'))">Home</button>
            <button type="button" onclick="smoothScroll(document.getElementById('aboutme'))">About</button>
            <button type="button" onclick="smoothScroll(document.getElementById('experience'))">Experience</button>
            <button type="button" onclick="smoothScroll(document.getElementById('abilities'))">Abilities</button>
            <button type="button" onclick="smoothScroll(document.getElementById('contactme'))">Contact</button>
            <button type="button" style="float:right" onclick="location.href='images/WConorMcFerren.pdf'">Resume</button>
        </div>
        <div class="titleSection" id="title">
            <div class="title">
                <div class="headerName">W. Conor McFerren</div>
                <hr>
                <button type="button" onclick="smoothScroll(document.getElementById('aboutme'))">INTERACTIVE RESUME</button>
            </div>
        </div>
        <div class="aboutme" id="aboutme">
            <div class="aboutmeTitle">About Me</div>
            <hr>
            <div class="flexbox">
                <div>
                    <div class="aboutmeHeaders">Biography</div>
                    <div>I am a Computer Science Major with a love for radios and military technology. Currently serving as the Mission Operations Team Lead for the MOCI Satellite at the University of Georgia's Small Satellite Research Laboratory, I have experience with Ground Station and RF communications by using Software Defined Radio and Hardware Defined Radio. Along with this, I have experience with System Testing from conception to execution, Orbital Simulation and Analysis, and Threat Detection, among many other things.</div>
                </div>
                <div><img class="profilePhoto" src="images/profilePhoto.jpg" alt="Profile Photo"></div>
                <div>
                    <div class="aboutmeHeaders">Details</div>
                    <div class="infoHeaders">Name:</div>
                    <div>William Conor McFerren</div><br>
                    <div class="infoHeaders">Age:</div>
                    <div>21 Years</div><br>
                    <div class="infoHeaders">Location:</div>
                    <div>Athens, Georgia, United States of America</div>
                </div>
            </div>
        </div>
        <div class="experience" id="experience">
            <div class="experienceTitle">Experience</div>
            <hr>
            <div class="experienceInfo">
                <?php
                    printExperience();
                ?>
            </div>
        </div>
        <div class="abilities" id="abilities">
            <div class="abilitiesTitle">Abilities</div>
            <hr>
            <div class="abilitiesInfo">
                <div class="skills">
                    <div class="abilitiesSubtitles">Skills</div>
                    <?php
                        printSkills();
                    ?>
                    <hr>
                    <div class="abilitiesSubtitles">Tools</div>
                    <?php
                        printTools();
                    ?>
                    <hr>
                    <div class="abilitiesSubtitles">Languages</div>
                    <?php
                        printLanguages();
                    ?>
                </div>
            </div>
        </div>
        <div class="contactme" id="contactme">
            <div class="contactmeTitle">Contact Information</div>
            <hr>
            <div class="contactInfo">
                <ul>
                    <li><a href="https://linkedin.com/in/w-conor-mcferren"><img src="images/contactme/linkedin.svg" alt="LinkedIn"> LinkedIn</a></li>
                    <li><a href="https://instagram.com/cnmcferren"><img src="images/contactme/instagram.svg" alt="Instagram"> Instagram</a></li>
                    <li><a href="https://www.qrz.com/db/kn4sit"><img src="images/contactme/radio.svg" alt="QRZ"> QRZ</a></li>
                    <li><a href="mailto:cnmcferren@gmail.com"><img src="images/contactme/email.svg" alt="Email"> Email</a></li>
                </ul>
            </div>
            <div class="copyright">
                Copyright &copy W. Conor McFerren. All Rights Reserved.
            </div>
        </div>
        <?php
            closeConnection();
        ?>
    </body>
</html>