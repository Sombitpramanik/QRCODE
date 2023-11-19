<?php
require 'config.php';
require 'phpqrcode-2010100721_1.1.4/phpqrcode/qrlib.php';
// include 'HTML/free.html';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator - SPWS</title>
    <meta name="subtitle" content="Create QR Code for free">
    <meta name="description"
        content="QR Code Generator for URL, vCard, and more. Add logo, colors, frames, and download in high print quality, Free QR code generator by SPWS">
    <meta name="keywords" content="QR code, generator, free, online, contact, website, URL, business card">
    <meta name="author" content="SPWS">

    <!-- Favicon -->
    <link rel="icon" href="logo/spws.png" type="image/x-icon">

    <!-- Open Graph Meta Tags for Social Sharing -->
    <meta property="og:title" content="QR Code Generator | Create Your Free QR Codes">
    <meta name="og:description"
        content="QR Code Generator for URL, vCard, and more. Add logo, colors, frames, and download in high print quality, Free QR code generator by SPWS">
    <meta property="og:type" content="website">
    <meta property="og:image" content="logo/spws.png">
    <meta property="og:url" content="https://theqrcode.site">
    <!-- CSS Stylesheets, JavaScript, and Other Resources -->
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="CSS/root.css">
    <link rel="stylesheet" href="CSS/light_home.css">
    <link rel="stylesheet" href="CSS/help.css">
    <link rel="stylesheet" href="CSS/beta_notice.css">
    <link rel="stylesheet" href="CSS/popup_layout.css">
    <link rel="stylesheet" href="CSS/pricing.css">
    <link rel="stylesheet" href="CSS/about.css">
    <link rel="stylesheet" href="CSS/tnc.css">
</head>

<body id="theme-switcher" class="light-theme">
    <!-- Hear is something that is not seen by every people -->
    <div id="modal" nothing="beta_notice" class="modal">
        <div class="modal-content">
            <p>This version of the website is in beta testing phase.</p>
            <p>It is a developer-only preview.</p>
            <p>Best viewed on: Laptop (medium to large screen)</p>
            <p>We are working on other screen sizes, also.</p>
            <p><br></p>
            <p>ThankYou</p><br>
            <button id="acknowledge" class="acknowledge-button">OK</button>
        </div>
    </div>
    <div id="helpLayout" class="help-layout">
        <div class="help-content">
            <h2>Help and Instructions</h2>
            <div class="bar_layout">
                <div class="basic">
                    <h2>basic help</h2>
                    <p>Q1. How This Site Works </p><br>
                    <p>Answer: we collet your data then encrypted that data inside your browser, that encrypted data
                        will stored into database then we use that data to create your magical QRCode</p><br>
                    <p>Q2. How To Fiend the Help of Each QRCode</p><br>
                    <p>Answer: Select one of the Button shown in the menu then you acn easily find the Related FAQ's in
                        the bottom of that section</p><br>
                    <p>Q3. Trouble to Find the Advance option for QRCode's ??</p><br>
                    <p>Answer: We are Currently Working on the Advance Feathers of the Website, Because of test this
                        website we launched this basic version.</p>
                </div>
                <div class="common">
                    <h2>common help</h2>
                    <p>Q1. WiFi QRCode is not working </p><br>
                    <p>Answer: THe most aureate answer is that the wifi is not working is that you select the wrong
                        Encryption version of password, if your wifi is encrypted and working on WEP then you should
                        select that, if not present in list, select none</p><br>
                    <p>Q2. I don't Understand the Free Text</p><br>
                    <p>Answer: the free text is for the creating QRCode's for Short Notes, Like as a brand you want to
                        create a help instruction like this just past your faq's and create the qrcode, and then it will
                        be used in anywhere</p><br>
                    <p>Q3. Why I use This pice of software</p><br>
                    <p>Answer: because of we have relevant User Experience, Improving Everyday, provide the on point
                        solution</p>
                </div>
                <div class="advance">
                    <h2>advance help</h2>
                    <p>Only accessible after login</p><br>
                    <button>
                        <li><a target="_blank" class="nav_links" href="https://theqrcode.site/PostLogIN.php">login</a>
                        </li>
                    </button>
                    <!-- <p>Q1. Did you Find the on call or Whatsapp Support ?</p><br>
                    <p class="call_wp_btn">
                        <a href="https://wa.me/6297037940" target="_blank">whatsapp</a>
                        <a href="tel:+916297037940" target="_blank">on call</a>
                    </p><br>
                    <p>Q2. Need more Help ??</p><br>
                    <p>Answer: Just Describe your Problem in whatsapp</p><br> -->
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, eligendi.</p> -->
                </div>
            </div>
            <button id="closeHelp" class="help-button">Close Help</button>
        </div>
    </div>
    <section id="aboutLayout" class="about-layout">
        <div class="about-content">
            <h1>Hall of Fame</h1><br>
            <div class="main_contaient">
                <div class="q1 q">
                    <i>Q1. Who We are ?</i><br>
                    <span>Answer:<br> We are a Team of Multiple Popple Across the India, and we Build this pice of
                        Beauty
                        with
                        our Love and Mindset of creating a pice of software that will help a lot of people across the
                        Globe</span><br>
                </div>
                <div class="q2 q">
                    <i>Q2. our Business Model</i><br>
                    <span>Answer:<br> We actually build this product for distribute for free to use, but when we have to
                        pay
                        the
                        fees of the Domain, and Hosting, then we though of Transfer this to a advertisement base Model,
                        which is kind of working on the Free tire, but for Premium User's and Scalability and Also the
                        Most
                        important thing is the Dynamic QRCode is have a lot of Storage Requirement's so we Finally
                        Decided
                        to switch to this into the Subscription BAse Business Model.</span><br>
                </div>
                <div class="q3 q">
                    <i>Q3. API & Documentation's</i><br>
                    <span>Answer:<br> let's talk a little bit more Technical way, that the we are not all a Big Tech
                        Startup
                        of
                        like that thing, but We are still growing our Team to a big amount of Good Peoples Across the
                        Globe,
                        and the Best Part of this talk is that we are building the API for this product.</span><br>
                </div>
                <div class="q4 q">
                    <i>Q4. story of us</i><br>
                    <span>Answer:<br> One day when one of our team member try to ask another team member for custom
                        payment
                        make
                        QRCode's then our founder has a Idea to Create a such kind of thing, that will help multiple use
                        of
                        our other types of QRCodes. Thats the Hole Story Behind of this little product</span><br>
                </div>
                <div class="q5 q">
                    <i>Q5. our Team</i><br>
                    <span>Answer:<br> ME as the Founder of SPWS : Sombit Pramanik <br>
                        as an Designer <b>Ranit</b> Will Help Me a lot to Create This Website By Giving Some UI Fix and
                        much
                        more things to improve on it. <br>
                        as a good friend <b>Sayak</b> will help me a lot by giving me some good Opinions about this
                        product
                        to create this product.</span><br>
                </div>
            </div>
            <button id="closeAbout" class="about-button">Close About</button>
        </div>
    </section>
    <section id="tncLayout" class="tnc-layout">
        <div class="tnc-content">
            <p>
            <h1>Scroll Down To use The Website</h1>
            <h2>Terms of Use</h2>
            <p>Last Updated: 12/11/2023</p>
            <p>
                Please read these Terms of Use ("Terms") carefully before using the theqrcode.site website (the
                "Service") operated by <i>Sombit Pramanik Web Services</i>.
            </p>
            <p>
                Your access to and use of the Service is conditioned on your acceptance of and compliance with these
                Terms.
                These Terms apply to all visitors, users, and others who access or use the Service.
            </p>
            <p>
                By accessing or using the Service, you agree to be bound by these Terms. If you disagree with any part
                of
                the terms, then you may not access the Service.
            </p>
            <h3>Intellectual Property</h3>
            <p>
                The Service and its original content, features, and functionality are owned by <i>Sombit Pramanik web
                    Services</i> and are
                protected by international copyright, trademark, patent, trade secret, and other intellectual property
                or
                proprietary rights laws.
            </p>
            <h3>QR Code Content</h3>
            <p>
                By generating QR codes using our Service, you agree that you have the right to use the content embedded
                in
                the QR codes. We are not responsible for the content you choose to encode in QR codes, and you assume
                all
                legal responsibilities associated with such content.
            </p>
            <h3>Use License</h3>
            <p>
                Permission is granted to temporarily download one copy of the materials (information or software) on
                <i>Sombit Pramanik web Services</i> website for personal, non-commercial transitory viewing only. This
                is the grant of a
                license, not a transfer of title, and under this license, you may not:
            </p>
            <ol>
                <li>modify or copy the materials;</li>
                <li>use the materials for any commercial purpose or for any public display (commercial or
                    non-commercial);
                </li>
                <li>attempt to decompile or reverse engineer any software contained on Sombit Pramanik Web Service's
                    website;</li>
                <li>remove any copyright or other proprietary notations from the materials; or</li>
                <li>transfer the materials to another person or "mirror" the materials on any other server.</li>
            </ol>
            <p>
                This license shall automatically terminate if you violate any of these restrictions and may be
                terminated by
                Sombit Pramanik Web Services at any time. Upon terminating your viewing of these materials or upon the
                termination of
                this license, you must destroy any downloaded materials in your possession whether in electronic or
                printed
                format.
            </p>
            <h3>Disclaimer</h3>
            <p>
                The materials on theqrocde.in website are provided on an 'as is' basis. sombit Pramanik Web Service's
                makes
                no warranties, expressed or implied, and hereby disclaims and negates all other warranties including,
                without limitation, implied warranties or conditions of merchantability, fitness for a particular
                purpose,
                or non-infringement of intellectual property or other violation of rights.
            </p>
            <button id="closeTnc" class="tnc-button">Accept & Continue</button>
            </p>
        </div>
    </section>
    <section id="pricingLayout" class="pricing-layout">
        <div class="pricing-content">
            <h1>Pricing</h1>
            <div class="price_container">
                <div class="pricing-plan">
                    <h2>Starter plan</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>use</th>
                                <th>available</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>QR codes</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>storage</td>
                                <td>50MB</td>
                            </tr>
                            <tr>
                                <td>storage type</td>
                                <td>SSD</td>
                            </tr>
                            <tr>
                                <td>Monthly</td>
                                <td>10 RS</td>
                            </tr>
                            <tr>
                                <td>Yearly</td>
                                <td>110 RS</td>
                            </tr>
                            <tr>
                                <td>One Time</td>
                                <td>100 RS</td>
                            </tr>
                            <tr>
                                <td>API</td>
                                <td>Premium</td>
                            </tr>
                            <tr>
                                <td>Support</td>
                                <td>Only Whatsapp</td>
                            </tr>
                            <tr>
                                <td>account type</td>
                                <td>Basic</td>
                            </tr>
                        </tbody>
                    </table>
                    <button><a href="signup.html">Sign Up</a></button>
                </div>
                <div class="pricing-plan">
                    <h2>premium Plan</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>use</th>
                                <th>available</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>QR codes</td>
                                <td>200</td>
                            </tr>
                            <tr>
                                <td>storage</td>
                                <td>1 GB</td>
                            </tr>
                            <tr>
                                <td>storage type</td>
                                <td>SSD</td>
                            </tr>
                            <tr>
                                <td>Monthly</td>
                                <td>199 RS</td>
                            </tr>
                            <tr>
                                <td>Yearly</td>
                                <td>2199 RS</td>
                            </tr>
                            <tr>
                                <td>One Time</td>
                                <td>1999 RS</td>
                            </tr>
                            <tr>
                                <td>API</td>
                                <td>10 request/S</td>
                            </tr>
                            <tr>
                                <td>Support</td>
                                <td>10AM to 5PM (all way)</td>
                            </tr>
                            <tr>
                                <td>account type</td>
                                <td>Super</td>
                            </tr>
                        </tbody>
                    </table>
                    <button><a href="signup.html">Sign Up</a></button>
                </div>
                <div class="pricing-plan">
                    <h2>Business</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>use</th>
                                <th>available</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>QR codes</td>
                                <td>1000</td>
                            </tr>
                            <tr>
                                <td>storage</td>
                                <td>3 GB</td>
                            </tr>
                            <tr>
                                <td>storage type</td>
                                <td>SSD</td>
                            </tr>
                            <tr>
                                <td>Monthly</td>
                                <td>699 RS</td>
                            </tr>
                            <tr>
                                <td>Yearly</td>
                                <td>6599 RS</td>
                            </tr>
                            <tr>
                                <td>One Time</td>
                                <td>6999 RS</td>
                            </tr>
                            <tr>
                                <td>API</td>
                                <td>100 request/S</td>
                            </tr>
                            <tr>
                                <td>Support</td>
                                <td>Any Time</td>
                            </tr>
                            <tr>
                                <td>account type</td>
                                <td>Super Premium</td>
                            </tr>
                        </tbody>
                    </table>
                    <button><a href="signup.html">Sign Up</a></button>
                </div>
            </div>
            <button id="closePricing" class="pricing-button">Close</button>
        </div>
    </section>
    <!-- From Hear the Actual Website will Start -->
    <!-- This will be converted into the top navigation bar in Mobile Device, and if the display be large enough then this will work like as an detailed navigation bar uses for profile and other navigation links  -->
    <section class="left_menu">
        <nav>
            <div class="profile">
                <div class="logo">
                    <img src="logo/spws.png" width="80" height="80" alt="Profile Logo" srcset="">
                    <!-- This will replace by PHP code for update dynamic Profile Photo for the user -->
                </div>
                <div class="profile_text">
                    <p>
                        Simple QRCode Maker for Static QRCode's & Create Dynamic QRCode for PDF's
                    </p>
                    <ul>
                        <li><a href="#" class="p_links" style="display: none;">insights</a></li>
                        <li><a href="#" id="Help" class="p_links">help</a></li>
                    </ul>
                </div>
            </div>
            <hr class="nav_devider">
            <div class="nav_bar">
                <ul>
                    <li><a href="#" id="tnc" class="nav_links">Terms of use</a></li>
                    <li><a href="#" id="pricing" class="nav_links">Pricing</a></li>
                    <li><a href="#" id="about" class="nav_links">about</a></li>
                    <li><a href="https://theqrcode.site/PostLogIN.php" target="_blank" class="nav_links">login</a></li>
                </ul>
            </div>
        </nav>
        <p>
            &copy; <i>SPWS</i> 2023 all rights reserved <br><br>
            all Design and Colure Code are Property of Sombit Pramanik Web Services. Use without Permission have
            Copyright issue <br><i>'QR Code' is a registered trademark of DENSO WAVE INCORPORATED</i>
        </p>
    </section>
    <hr class="menu_devider">
    <!-- This will work for the main area used for the main contain for the website which will contain the main qrcode generator function. -->
    <section class="right_menu">
        <div class="top_brand">
            <p class="tag">Create Static & Dynamic QRCode's</p>
            <span class="power"> <i>Powered by Sombit Pramanik Web Services</i></span>
        </div>
        <main>
            <div class="input_fields">
                <p>Select a Tag and Create QRCode's For your Need</p>
                <ul>
                    <li><a id="upiButton">UPI</a></li>
                    <li><a id="textButton">Free Text</a></li>
                    <li><a id="pdfButton">PDF</a></li>
                    <li><a id="urlButton">URL</a></li>
                    <li><a id="wifiButton">WIFI</a></li>
                </ul>
                <hr class="button_hr">
                <div class="input_from">
                    <div class="for_upi myForm">
                        <form action="" method="POST">
                            <label for="upi_id">Enter Receiver UPI ID</label>
                            <input type="text" name="upi_id" id="upi_id" placeholder="Example : 6297037940@ybl"><br>
                            <label for="upi_first_name">Enter Receiver First Name</label>
                            <input type="text" name="upi_first_name" id="upi_first_name" placeholder="Example : Sombit">
                            <br>
                            <label for="upi_last_name">Enter Receiver Last Name</label>
                            <input type="text" name="upi_last_name" id="upi_last_name"
                                placeholder="Example : Pramanik"><br>
                            <label for="upi_amount">Enter Amount</label>
                            <input type="text" name="upi_amount" id="upi_amount" placeholder="Example : 101"><br>
                            <button type="submit" class="CreateQr" name="upi_submit" data-from-valid="&upi_submit=1" from-valid="&upi_submit=1">Create QR</button>
                        </form>
                        <br>
                        <p>
                        <ol>
                            <li>
                                <b><span>Q. Where to use ?</span></b><br>
                                <i><span><b>Answer: </b>use for creating custom payment received QRCode.</span></i>
                            </li><br>
                            <li>
                                <b><span>Q. How to share ?</span></b><br>
                                <i><span><b>Answer: </b>Just Download the code and share where ever you want.</span></i>
                            </li><br>
                            <li>
                                <b><span>Q. Can I Customize The Code ?</span></b><br>
                                <i><span><b>Answer: </b>Sorry ! : Now we can't support this, if Your are a PHP
                                        Developer then Visit the carer Page for our Help.</span></i>
                            </li><br>
                        </ol>
                        </p>
                    </div>
                    <div class="for_text myForm">
                        <form action="" method="POST">
                            <label for="text">Enter the Text</label>
                            <input type="text" name="text" id="text">
                            <button type="submit" name="text_submit" data-from-valid="&text_submit=1" from-valid="&text_submit=1" class="CreateQr">Create QR</button>
                        </form><br>
                        <p>we are Currently offering to create a fully customize business card page <br> <b><i><a
                                        href="https://theqrcode.site/PostLogIN.php" target="_blank"
                                        class="nav_links">login</a> </i></b> to know more</p><br>
                        <p>
                        <ol>
                            <li>
                                <b><span>Q. Where to use ?</span></b><br>
                                <i><span><b>Answer: </b>use For Creating Short Notes & support instruction</span></i>
                            </li><br>
                            <li>
                                <b><span>Q. How to share ?</span></b><br>
                                <i><span><b>Answer: </b>Just Download the code and share where ever you want.</span></i>
                            </li><br>
                            <li>
                                <b><span>Q. Can I Customize The Code ?</span></b><br>
                                <i><span><b>Answer: </b>Sorry ! : Now we can't support this, if Your are a PHP
                                        Developer then Visit the carer Page for our Help.</span></i>
                            </li><br>
                        </ol>
                        </p>
                    </div>
                    <div class="for_pdf myForm">
                        <p>Note : the PDF's are not been share directly in QRCode, we are Currently Upload the file in
                            our secure server and then create a share link to Create the QR Code.</p><br><br>
                        <p>
                            Dear Precious Viewer,<br><br>
                            We appreciate your interest in accessing our exclusive features. However, it appears that
                            you currently do not have the necessary access privileges. To unlock and enjoy these
                            features, we kindly request you to create an account with us. By creating an account, you
                            not only gain access to a host of premium features but also become part of our community.
                            Rest assured, the account creation process is simple and quick, and it opens the door to a
                            world of enhanced benefits and personalized experiences. Thank you for your understanding,
                            and we look forward to having you on board as a valued member of our community. <br><br>
                            Best regards,<br><br>
                            Team Sombit Pramanik Web Services
                        </p><br>
                    </div>
                    <div class="for_url myForm">
                        <form action="" method="POST">
                            <label for="url">Enter the URL</label>
                            <input type="url" name="url" id="url">
                            <button type="submit" name="url_submit" data-from-valid="&url_submit=1" from-valid="&url_submit=1" class="CreateQr">Create QR</button>
                        </form><br>
                        <p>
                        <ol>
                            <li>
                                <b><span>Q. Where to use ?</span></b><br>
                                <i><span><b>Answer: </b>use For Creating URL instead of Lengthy URl's</span></i>
                            </li><br>
                            <li>
                                <b><span>Q. How to share ?</span></b><br>
                                <i><span><b>Answer: </b>Just Download the code and share where ever you want.</span></i>
                            </li><br>
                            <li>
                                <b><span>Q. Can I Customize The Code ?</span></b><br>
                                <i><span><b>Answer: </b>Sorry ! : Now we can't support this, if Your are a PHP
                                        Developer then Visit the carer Page for our Help.</span></i>
                            </li><br>
                        </ol>
                        </p>
                    </div>
                    <div class="for_wifi myForm">
                        <form action="" method="POST">
                            <label for="ssid">WIFI SSID or Name</label>
                            <input type="text" name="ssid" id="ssid"><br>
                            <label for="pass">Password</label>
                            <input type="password" name="password" id="pass"><br>
                            <label for="encrypt">Select Encryption TYpe</label>
                            <select name="encrypt" id="encrypt">
                                <option value="none">none</option>
                                <option value="wep">wep</option>
                                <option value="wep2">wep2</option>
                            </select><br>
                            <button type="submit" name="wifi_submit" data-from-valid="&wifi_submit=1" from-valid="&wifi_submit=1" class="CreateQr">Create OR</button>
                        </form><br>
                        <p>
                        <ol>
                            <li>
                                <b><span>Q. Where to use ?</span></b><br>
                                <i><span><b>Answer: </b>Share Wifi Network's Securely</span></i>
                            </li><br>
                            <li>
                                <b><span>Q. How to share ?</span></b><br>
                                <i><span><b>Answer: </b>Just Download the code and share where ever you want.</span></i>
                            </li><br>
                            <li>
                                <b><span>Q. Can I Customize The Code ?</span></b><br>
                                <i><span><b>Answer: </b>Sorry ! : Now we can't support this, if Your are a PHP
                                        Developer then Visit the carer Page for our Help.</span></i>
                            </li><br>
                        </ol>
                        </p>
                    </div>
                </div>
            </div>
            <hr class="output_hr">
            <div class="output_fields">
                <p><span style="font-weight: 600;">New QRCode Preview</span><br><br>Note : we use data collection
                    policies under some condition's, if you want to delete your data with us you can just make a simple
                    request in our main website,and then with remove your data and handover a copy to you (Encrypted)
                </p><br>
                <hr class="button_hr"><br>
                <div class="status">
                    <div class="qr_img">
                        <img id="myImage" src="logo/spws.png" alt="QR Image" srcset="">
                        <button id="downloadButton" type="download" class="download">Download The QRCode</button>
                    </div>
                    <div class="stat">
                        <ul>
                            <li>from the php database set limit of max 20MB of alloted space</li><br>
                            <li>the user only upload pdf type files</li><br>
                            <li>show status for how much space left</li><br>
                            <li>show the count fo how many QRCode's are Generated</li><br>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
        <div class="advertisement">
            <!-- place for google bottom banner ad -->
            <p>Wetting for advertisement and sponsor image or Text, if you intrusted clink hear</p>
        </div>
    </section>
</body>
<script src="JS/theme.js"></script>
<script src="JS/from_display.js"></script>
<script src="JS/download.js"></script>
<script src="JS/beta_notice.js"></script>
<script src="JS/pop_layout.js"></script>
<script src="JS/auto_fetch.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="JS/from_send_ajax.js"></script>

</html>