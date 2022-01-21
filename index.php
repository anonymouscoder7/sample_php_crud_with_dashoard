<!DOCTYPE html>
<html>
<title>Scripting Language Practical</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">

<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar" id="myNavbar">
            <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                <i class="fa fa-bars"></i>
            </a>
            <a href="#home" class="w3-bar-item w3-button">HOME</a>
            <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
            <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> GALLERY</a>
            <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
            <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">Login</a>
        </div>
    </div>

    <!-- First Parallax Image with Logo Text -->
    <div class="bgimg-1 w3-display-container" style="background-image: url('dashboard/database/images/<?php include 'dashboard/database/db_connection.php'; $sql = "SELECT * FROM content"; $result = $conn->query($sql); $row = $result->fetch_assoc(); echo $row['nav_img'];?> ');" id="home">
        <div class="w3-display-middle" style="white-space:nowrap;">
            <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">MY <span class="w3-hide-small">WEBSITE</span> LOGO</span>
        </div>
    </div>

    <!-- Container (About Section) -->
    <div class="w3-content w3-container w3-padding-64" id="about">
        <h3 class="w3-center">ABOUT ME</h3>
        <p class="w3-center"><em>I love photography</em></p>
        <p> <?php include 'dashboard/database/db_connection.php';
                                    $sql = "SELECT * FROM content";
                                    $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();
                                    echo $row['about1'];
                                    ?></p>
        <div class="w3-row">
            <div class="w3-col m6 w3-center w3-padding-large">
                <p><b><i class="fa fa-user w3-margin-right"></i>My Name</b></p><br>
                <img src='dashboard/database/images/<?php include 'dashboard/database/db_connection.php'; $sql = "SELECT * FROM content"; $result = $conn->query($sql); $row = $result->fetch_assoc(); echo $row['user_img'];?>' class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
            </div>

            <!-- Hide this text on small devices -->
            <div class="w3-col m6 w3-hide-small w3-padding-large">
                <p><?php include 'dashboard/database/db_connection.php';
                                    $sql = "SELECT * FROM content";
                                    $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();
                                    echo $row['about2'];
                                    ?></p>
            </div>
        </div>
        <p class="w3-large w3-center w3-padding-16">Im really good at:</p>
        <p class="w3-wide"><i class="fa fa-camera"></i>Photography</p>
        <div class="w3-light-grey">
            <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
        </div>
        <p class="w3-wide"><i class="fa fa-laptop"></i>Web Design</p>
        <div class="w3-light-grey">
            <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">85%</div>
        </div>
        <p class="w3-wide"><i class="fa fa-photo"></i>Photoshop</p>
        <div class="w3-light-grey">
            <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:75%">75%</div>
        </div>
    </div>

    <div class="w3-row w3-center w3-dark-grey w3-padding-16">
        <div class="w3-quarter w3-section">
            <span class="w3-xlarge">7+</span><br>
            Partners
        </div>
        <div class="w3-quarter w3-section">
            <span class="w3-xlarge">50+</span><br>
            Projects Done
        </div>
        <div class="w3-quarter w3-section">
            <span class="w3-xlarge">77+</span><br>
            Happy Clients
        </div>
        <div class="w3-quarter w3-section">
            <span class="w3-xlarge">100+</span><br>
            Meetings
        </div>
    </div>

    <!-- Second Parallax Image with Gallery Text -->
    <div class="bgimg-2 w3-display-container w3-opacity-min" style="background-image: url('dashboard/database/images/<?php include 'dashboard/database/db_connection.php'; $sql = "SELECT * FROM content"; $result = $conn->query($sql); $row = $result->fetch_assoc(); echo $row['protofilo_img'];?> ') ;">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-white w3-wide">Gallery</span>
        </div>
    </div>

    <!-- Container (Gallery Section) -->
    <div class="w3-content w3-container w3-padding-64" id="portfolio">
        <h3 class="w3-center">Gallery</h3>
        <p class="w3-center"><em>Here are some of my latest lorem work ipsum tipsum.<br> Click on the images to make them bigger</em></p><br>

        <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
        <div class="w3-row-padding w3-center">
        <?php include 'dashboard/database/db_connection.php';
            $sql = "SELECT * FROM gallery ORDER BY ID DESC";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
            ?>
            <div class="w3-col m3" style="margin-top:5px;">
                <img src="dashboard/database/gallery/<?php echo $row['image'] ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
            </div>
            <?php
            }
            ?>
        </div>
    </div>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
        <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption" class="w3-opacity w3-large"></p>
        </div>
    </div>

    <!-- Third Parallax Image with Portfolio Text -->
    <div class="bgimg-3 w3-display-container w3-opacity-min" style="background-image: url('dashboard/database/images/<?php include 'dashboard/database/db_connection.php'; $sql = "SELECT * FROM content"; $result = $conn->query($sql); $row = $result->fetch_assoc(); echo $row['contact_img'];?> ') ;">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
        </div>
    </div>

    <!-- Container (Contact Section) -->
    <div class="w3-content w3-container w3-padding-64" id="contact">
        <h3 class="w3-center">WHERE I WORK</h3>
        <p class="w3-center"><em>I'd love your feedback!</em></p>

        <div class="w3-row w3-padding-32 w3-section">
            <div class="w3-col m4 w3-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114086.59115093797!2d87.19515917727841!3d26.673894227358602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef6c66e80fbfa9%3A0x38094d1a7c974283!2z4KSH4KSf4KS54KSw4KWA!5e0!3m2!1sne!2snp!4v1618465499114!5m2!1sne!2snp" width="283" height="283" style="border:0;" allowfullscreen="" loading="lazy"></iframe>            </div>
            <div class="w3-col m8 w3-panel">
                <div class="w3-large w3-margin-bottom">
                    <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Itahari, Nepal<br>
                    <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: 98000000<br>
                    <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: mail@gmail.com<br>
                </div>
                <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
                <form action="dashboard/database/create_contact.php" method="POST">
                    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Name" required name="name">
                        </div>
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="number" placeholder="Contact" required name="contact">
                        </div>
                    </div>
                    <input class="w3-input w3-border" type="text" placeholder="Message" required name="message">
                    <button class="w3-button w3-black w3-right w3-section" type="submit">
                        <i class="fa fa-paper-plane"></i> SEND MESSAGE
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
        <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
        <div class="w3-xlarge w3-section">
           <a href=""><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
           <a href=""><i class="fa fa-instagram w3-hover-opacity"></i></a>
           <a href=""> <i class="fa fa-snapchat w3-hover-opacity"></i></a>
           <a href=""><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
           <a href=""><i class="fa fa-twitter w3-hover-opacity"></i></a>
           <a href=""><i class="fa fa-linkedin w3-hover-opacity"></i></a>
        </div>
    </footer>

    <script src="js/main.js"></script>

</body>

</html>