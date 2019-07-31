<?php
    include "mail.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>
    <link rel="stylesheet" href="./semantic/semantic.css">
    <link rel="stylesheet" href="./style.css">
    <script src="./semantic/semantic.js"></script>
    <script src="./js/script.js"></script>
    <title>Sweratel</title>
</head>

<body>
    <div class="ui grid">
        <div class="computer only row">
            <div class="column">
                <div id="mainNav" class="ui top fixed menu">
                    <div class="borderless item">
                        <a href="index.php"><img class="logo" src="./images/logotext.png"></a>
                    </div>
                    <div class="right menu">
                        <a href="#company" class="borderless item">Company</a>
                        <a href="#products" class="borderless item">Products</a>
                        <a href="#antennas" class="borderless item">Antennas</a>
                        <a class="borderless item" href="#technology">Technology</a>
                        <a href="#press" class="borderless item">Press</a>
                        <a href="#contact" class="borderless item">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="tablet mobile only row">
            <div class="column">
                <div class="ui fixed menu">
                    <a id="mobile_item" class="item"><i class="bars icon"></i></a>
                    <div class="borderless right item">
                        <a href="index.html"><img class="logo" src="./images/logotext.png"></a>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ui pushable segment">
        <div class="ui sidebar vertical menu">
            <div class="placeholder" style="margin-top: 6em;"></div>
            <a href="#company" class="borderless item">Company</a>
            <a href="#products" class="borderless item">Products</a>
            <a href="#antennas" class="borderless item">Antennas</a>
            <a href="#technology" class="borderless item">Technology</a>
            <a href="#press" class="borderless item">Press</a>
            <a href="#contact" class="borderless item">Contact</a>
        </div>
        <div class="pusher">
            <div class="section ui fluid intro-container">
                <h1 class="ui aligned huge header">Shaping a new converged wireless networked society.</h1>
            </div>
            <div id="company" class="ui center aligned container">
                <h1 class="ui horizontal divider huge header header-title">
                    Company
                </h1>
                    <div class="sub header product-description line-height">Sweratel is a Swedish innovative company that focuses on new technology and R&D to develop tomorrows Communication systems. Sweratel specializes primarily in the design, development and integration of state-of-the-art software and hardware for real-time communication systems.</div>
                    <a href="company.php"><button class="ui blue button product-button">Read more</button></a>
            </div>
            <div class="products-wrapper" style="background-color: #EFEFEF;">
                <div id="products" class="ui center aligned container">
                    <h1 class="ui horizontal divider huge header header-title">
                        Our products
                    </h1>
                        <div class="sub header product-description line-height">The Sweratel RTWIP-CORE platform enables network owners, operators and ISPs to deploy flexible, high performance and highly scalable Cloud-managed Cellular-class WiFi infrastructure solutions based on 802.11ac supports upgrade path to WiFi 6 (6 GHz) that is featured with SON (Self-Organization Network) architecture solution.  The 6 GHz is heating up and will be greenfield and from a spectrum point of view as Wi-Fi 6 is tailored to support a real-world Cellular-class Wi-Fi   “the Breakthrough Telcos, Operators and ISPs have been waiting for”.</div>
                    
                    <button class="ui blue button center product-button">Learn more</button>
                </div>
            </div>
            <div id="antennas" class="antenna-container">
            <h1 class="ui horizontal divider huge header header-title antenna-title">
                Antennas
            </h1>
            <div class="ui placeholder"></div>
            <div class="ui container antenna-card-container">
                <div class="ui stackable three cards">
                    <div class="card">
                        <div class="image">
                        <img style="height: 30em;" src="./images/ax.24.jpeg">
                        </div>
                        <div class="content">
                            <div class="header">Pard AX24</div>
                            <div class="description">
                            This Advance Product Information contains the specification for the 3x3 (optional 4x4) MIMO Sector access antenna designed for the Sweratel RTWIP Carrier-class MetroWiFi Network Access operating in the 2.4 – 2.5 GHz unlicensed band and supporting the IEEE 802.11-family radio standards. The Pard 24 access antenna includes 3×3 MIMO each with its own RF connector, and housed in a single IP67 chassis.  
</div>
                        </div>
                        <button class="ui bottom attached blue button">Read more</button>
                    </div>
                    <div class="card">
                        <div class="image">
                        <img style="height: 30em;" src="./images/bh5.jpg">
                        </div>
                        <div class="content">
                            <div class="header">Pard BH5</div>
                            <div class="description">
                            PARD BH-5 Ultra Wide-band 3x3 (optional 4x4) MIMO Sector Antenna System operating in 4.9 – 5.9/6.0GHz band with 14dBi peak-gain, 20/40degrees Antenna Beamwidth (3DB) and Linear (V-H-V) polarization. 
                            </div>
                        </div>
                        <button class="ui bottom attached blue button">Read more</button>
                    </div>
                    <div class="card">
                        <div class="image">
                        <img style="height: 30em;" src="./images/pardAX5.jpg">
                        </div>
                        <div class="content">
                            <div class="header">Pard AX5</div>
                            <div class="description">
                            PARD AX-5 Ultra Wide-band 3x3 (optional 4x4) MIMO Sector Antenna System operating in 4.9 – 6.0 GHz band with 14dBi peak-gain, 105degrees Antenna Beamwidth (3DB)  and Linear (V-H-V) polarization. 
                            </div>
                        </div>
                        <button class="ui bottom attached blue button">Read more</button>
                    </div>
                </div> 
            </div>
            </div>
            <div style="background-color: #EFEFEF;">
                <div style="padding: 5em;" class="ui container">
                <h1 class="ui horizontal divider header header-title">
                    Technology
                </h1>
                <div class="sub header product-description line-height">The architecture of the Sweratel RTWIP-CORE system is built upon a highly-flexible modular software platform. The modular concept features the Macro- and Micro-software modules for the Sweratel complete-end-to-end system; BTS, MNC, RNMS, CBS/AAA, CRM, OLS and future products. These create industry-leading state-of-the-art networked solution tailored to support Cellular-class Macrocell WiFi requirements of Operators, Telcos, ISPs including other new entrants from Municipalities, IoE sectors and Smart Networked Society Market to Digital Transformation.</div>
                </div>
            </div>

            <div class="ui placeholder"></div>
                <div id="technology">
                    <div style="width: 50%;">
                        <h1 style="margin-top: 2em!important;">
                            RTWIP CORE
                        </h1>
                        <div style="">
                            <img style="width: 100%;" src="./images/sweratelWlan.jpg">
                            <div class="sub header product-description line-height">
                                The Sweratel RTWIP solutions integrate the power of Smart Networked Society with the versatility of Cellular-class Public WiFi communications, complementary to licensed cellular and/or substitutes.
                            </div>
                            <div class="ui buttons">
                                <button class="ui button">Download PDF</button>
                                <div class="or"></div>
                                <button class="ui bottom attached inverted blue button bigger-image-1">View fullscreen</button>
                            </div>
                        </div>  
                    </div>
                    <div style="width: 50%; padding-left: 2em;">
                        <h1 style="margin-top: 2em!important;">
                            Heterogeneous solution
                        </h1>
                        <div>
                            <img style="width: 100%;" src="./images/wlan.png">
                            <div class="sub header product-description line-height">
                                The Sweratel RTWIP Heterogeneous network solutions provides complete end-to-end cost-effective infrastructure solutions riding the data tsunami heading their way delivering coverage and data-capacity demands in the most challenging areas.
                            </div>
                            <div class="ui buttons" style="padding-left: 5em!important;">
                                <button class="ui button">Download PDF</button>
                                <div class="or"></div>
                                <button class="ui bottom attached inverted blue button bigger-image-2">View fullscreen</button>
                            </div>
                        </div>  
                    </div>
                
                 
                </div>

                <div class="ui fullscreen modal modal-1" style="height: 90%!important;">
                    <i class="close icon"></i>
                    <img class="bigger-image-1" style="width: 100%; height: 100%; padding: 5em!important;" src="./images/sweratelWlan.jpg">
                </div>
                <div class="ui fullscreen modal modal-2" style="height: 90%!important;">
                    <i class="close icon"></i>
                    <img class="bigger-image-2" style="width: 100%; height: 100%; padding: 5em!important;" src="./images/wlan.png">
                </div>
            
         

           

            <div id="press" class="ui container">
                <h1 class="ui horizontal divider header header-title">
                    Press release
                </h1>
                <div class="sub header product-description line-height">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</div>
            </div>
            <footer id="contact">
                <div class="ui center aligned grid">
                    
                    <div class="ui contact-container">
                        <form class="ui form contact-form" method="POST">
                        <h1 class="ui dividing header">Get in touch with us</h1>
                            <div class="required field">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="E-mail adress" id="email" autocomplete="on">
                            </div>
                            <div class="required field">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="Name" id="name" autocomplete="on">
                            </div>
                            <div class="required field">
                                <label>Company</label>
                                <input type="text" name="company" placeholder="Company" id="company-input" autocomplete="on">
                            </div>
                            <div class="field">
                                    <label>Message</label>
                                    <textarea name="message" id="message"></textarea>
                            </div>
                            <div class="g-recaptcha" data-theme="dark" data-sitekey="6LfYAZsUAAAAAH-fMDegF2WcuzQrLsAio0xlL0Ms"></div>
                            <div class="actions">
                                <input name="sendMail" class="ui right floated black button sendButton" type="submit" disabled="disabled" value="Send message">
                            </div>
                            <div class="ui error message"></div>
                            
                        </form>
                    
                </div>
                    <div class="four column centered row">
                        <div class="column"></div>
                        <div class="column"></div>
                </div>
                </div>
                <div class="ui black message">
                    <p style="text-align: center;">© Sweratel AB 2019 - All Rights Reserved</p>
                </div>
            </footer>
    </div>
    </div>
    
     

    <div class="wrapper-for-site">
        <div class="container-for-first-picture"> 

        </div>
    </div>
    	
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="./js/formValidation.js"></script>
</body>
</html>