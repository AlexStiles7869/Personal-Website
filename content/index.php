<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Alex Stiles</title>
</head>
<body>
    <nav>
        <a href="../content/index.php"><div class="logo">
            <span>AJ</span>
        </div></a>
        <div id="nav-links">
            <a class="active" href="#home-anchor">Home</a>
            <a href="#projects-anchor">Projects</a>
            <a href="#contact-anchor">Contact</a>
        </div>
    </nav>
    <header id="home-anchor">
        <div class="intro-text">
            <span class="intro"></span>
        </div>
    </header>
    <div class="page-content">
        <section>
            <h1>About Me</h1>
            <div class="two-column" id="about">
                <div id="about-image">
                    <img src="../images/general/me.jpg" alt="Photo of me">
                </div>
                <div id="about-content">
                    <h3>I'm currently a 19-year-old studying towards an Engineering degree with Honours majoring in Computer Engineering at the University of Canterbury, in Christchurch, New Zealand.</h3>
                    <div id="about-location-image">
                        <img src="https://source.unsplash.com/YylrhMRSP_U/1280x800" alt="Photo of the Port Hills in Christchurch">
                        <span>Port Hills, Christchurch, New Zealand / By a friend, <a href="https://unsplash.com/photos/YylrhMRSP_U">Edward Manson</a>.</span>
                    </div>
                    <h3>Below you'll see some of the stuff I'm doing for my degree as well as some personal side projects.</h3>
                    <div class="two-column" id="about-list">
                        <div class="column">
                            <h4>Academic Interests</h4>
                            <ul>
                                <li>Computer Architecture</li>
                                <li>Computer Graphics</li>
                                <li>Electronics / Embedded Systems</li>
                            </ul>
                        </div>
                        <div class="column">
                            <h4>Hobbies</h4>
                            <ul>
                                <li>Programming</li>
                                <li>Biking</li>
                                <li>Video Games</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="projects-anchor">
            <h1>Projects</h1>
            <div class="two-column projects">
                <div class="column">
                    <h2>Personal</h2>
                    <div class="project-cards">
                        <a class="primary-project" href="../content/greendale_community_trust.php">
                            <div class="project-card">
                                <img class="lazy" data-src="../images/greendale_community_trust/greendale_community_trust.jpg" alt="">
                                <h3 ">Greendale Community Trust</h3>
                            </div> 
                        </a>
                    </div>
                </div>
                <div class="column">
                    <h2>University</h2>
                    <div class="project-cards">
                        <a href="../content/tracking_tunnel.php">
                            <div class="project-card">
                                <img id="img-0" class="lazy" data-src="../images/next_generation_tracking_tunnel/nz_forest.jpg" alt="Photo of New Zealand forest">
                                <h3>Next Generation Tracking Tunnel</h3>
                            </div>
                        </a>
                        <a>
                            <div class="project-card">
                                <img id="img-1" class="lazy" data-src="../images/trader_seas/trader_seas_2.png" alt="Screenshot of Trader Seas">
                                <h3 id="case-incomplete">Trader Seas</h3>
                            </div>
                        </a>
                        <a>
                            <div class="project-card">
                                <img id="img-2" class="lazy" data-src="../images/arduino_shield/shield.jpg" alt="Photo of Arduino Shield">
                                <h3 id="case-incomplete">Arduino Shield</h3>
                            </div>
                        </a>
                        <a>
                            <div class="project-card">
                                <img id="img-3" class="lazy" data-src="../images/smart_plug/oled_gui.png" alt="Screenshot of OLED GUI">
                                <h3 id="wip">Temperature Controlled Smart Plug</h3>
                            </div> 
                        </a>
                        <!-- <div>
                            <div class="project-card">
                                <img src="happy_face.png" alt="">
                                <h3 id="wip">More Coming Soon</h3>
                            </div> 
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- <a href="#" class="link-button">View More</a> -->
        </section>
        <section class="contact" id="contact-anchor">
            <h1>Contact</h1>
            <p>This is a work in progress and doesn't work at the moment. If you want to get in touch, please email me at <a href="mailto:alexstiles123@gmail.com">alexstiles123@gmail.com</a>.</p>
            <form method="push">
                <div class="form-input">
                    <label for="name">Name</label>
                    <input required placeholder="John" type="text" name="name" id="">
                </div>
                <div class="form-input">
                    <label for="email">Email</label>
                    <input required placeholder="johndoe@email.com" type="email" name="email" id="">
                </div>
                <div class="form-input span-col">
                    <label for="message">Message</label>
                    <textarea required name="message" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-input submit">
                    <input disabled type="submit" value="Submit">
                </div>
            </form>
        </section>
    </div>
    <?php 
        include("../content/footer.php");
    ?>
    <script src="../js/colour_thief.js"></script>
    <script src="../js/typed.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>