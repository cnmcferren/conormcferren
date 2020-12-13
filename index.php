<!DOCTYPE html>

<html lang="en">
    <head>
        <title>W. Conor McFerren</title>
        <meta charset='utf-8' content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles/colors.css">
        <link rel="stylesheet" href="styles/landing.css">
        <link rel="stylesheet" href="styles/aboutme.css">
        <link rel="stylesheet" href="styles/experience.css">
        <link rel="stylesheet" href="styles/contactme.css">
        <link rel="stylesheet" href="styles/menu.css">
        <script src="scripts/nav.js"></script> 
    </head>
    <body>
        <div class="floatingmenu">
            <button type="button" onclick="smoothScroll(document.getElementById('title'))">Home</button>
            <button type="button" onclick="smoothScroll(document.getElementById('aboutme'))">About</button>
            <button type="button" onclick="smoothScroll(document.getElementById('experience'))">Experience</button>
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
                    include "scripts/formatting.php";
                    printExperience();
                ?>
            </div>
        </div>
        <div class="contactme" id="contactme">
            <div class="contactmeTitle">Contact Information</div>
            <hr>
            <div class="contactInfo">
                <a href="https://linkedin.com/in/w-conor-mcferren">LinkedIn</a><br><br>
                <a href="https://instagram.com/cnmcferren">Instagram</a><br><br>
                <a href="https://www.qrz.com/db/kn4sit">QRZ</a><br><br>
                <a href="mailto: cnmcferren@gmail.com">Email</a><br><br>
            </div>
        </div>
    </body>
</html>