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
                        <a class="borderless item active" href="#technology">Technology</a>
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
            <div class="placeholder" style="height: 5em;"></div>
            <a href="#company" class="borderless item">Company</a>
            <a href="#products" class="borderless item">Products</a>
            <a href="#antennas" class="borderless item">Antennas</a>
            <a href="#technology" class="borderless item active">Technology</a>
            <a href="#press" class="borderless item">Press</a>
            <a href="#contact" class="borderless item">Contact</a>
        </div>
        <div class="pusher">
            <div class="placeholder" style="height: 4.8em;"></div>
            <div class="section ui fluid intro-container">
                <h1 class="ui aligned huge header">The Pioneer in Development of Cellular-class WiFi Solutions</h1>
            </div>
            <div class="ui black message">
                <p style="text-align: center;">Sweratel’s website is currently undergoing a major re-work with enhanced graphical design to be released soon.</p>
            </div>
            <div id="company" class="ui center aligned container">
                <h1 style="margin-top: 2em!important" class="ui horizontal divider huge header header-title">
                    Company
                </h1>
                    <div class="sub header product-description line-height">Sweratel is a Swedish innovative company that focuses on new technology and R&D to develop tomorrow's Communication systems. Sweratel specializes primarily in the design, development and integration of state-of-the-art software and hardware for real-time communication systems.</div>
                
                <button class="ui inverted blue button product-button">Learn more</button>
            </div>
            <div id="products" class="ui center aligned container">
                <h1 class="ui horizontal divider huge header header-title">
                    Our products
                </h1>
                    <div class="sub header product-description line-height">The Sweratel RTWIP-CORE platform enables network owners, operators and ISPs to deploy flexible, high performance and highly scalable Cloud-managed Cellular-class WiFi infrastructure solutions based on 802.11ac supports upgrade path to WiFi 6 (6 GHz) that is featured with SON (Self-Organization Network) architecture solution.  The 6 GHz is heating up and will be greenfield and from a spectrum point of view as Wi-Fi 6 is tailored to support a real-world Cellular-class Wi-Fi   “the Breakthrough Telcos, Operators and ISPs have been waiting for”.</div>
                
                <button class="ui inverted blue button product-button">Learn more</button>
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
                        <img src="./images/using-antenna2.png">
                        </div>
                        <div class="content">
                            <div class="header">Pard AX24</div>
                            <div class="description">
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
                        </div>
                        <button class="ui bottom attached inverted blue button">Read more</button>
                    </div>
                    <div class="card">
                        <div class="image">
                        <img src="./images/using-antenna1.png">
                        </div>
                        <div class="content">
                            <div class="header">Antenna namn</div>
                            <div class="description">
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </div>
                        </div>
                        <button class="ui bottom attached inverted blue button">Read more</button>
                    </div>
                    <div class="card">
                        <div class="image">
                        <img src="./images/using-antenna2.png">
                        </div>
                        <div class="content">
                            <div class="header">Pard BH5</div>
                            <div class="description">
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </div>
                        </div>
                        <button class="ui bottom attached inverted blue button">Read more</button>
                    </div>
                </div> 
            </div>
            </div>
            <div class="ui placeholder"></div>
           
                <div id="technology">
                    <div class="ui container bg-text">
                        <h1 class="ui horizontal divider inverted header container technology-t">
                            Software defined WiFi-Basestation
                        </h1>
        
                    </div> 
                </div>
            <div id="" class="ui container">
            <h1 style="margin-top: 2em!important" class="ui horizontal divider header header-title">
                Technology
            </h1>
            <div class="sub header product-description line-height">The architecture of the Sweratel RTWIP-CORE system is built upon a highly-flexible modular software platform. The modular concept features the Macro- and Micro-software modules for the Sweratel complete-end-to-end system; BTS, MNC, RNMS, CBS/AAA, CRM, OLS and future products. These create industry-leading state-of-the-art networked solution tailored to support Cellular-class Macrocell WiFi requirements of Operators, Telcos, ISPs including other new entrants from Municipalities, IoE sectors and Smart Networked Society Market to Digital Transformation.</div>
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