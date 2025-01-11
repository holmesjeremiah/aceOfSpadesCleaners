<?php
    $companyName = 'Ace of Spades Cleaners';
    $phoneNumber = '111-111-1111';
    $formattedPhoneNumber = '+1&nbsp;(111)&nbsp;111-1111&nbsp';
    $email = 'book@aceofspadescleaners.com';
    $header = 
        '<!DOCTYPE html>
        <html lang="en">
        
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>'.$companyName.'</title>
            <link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
            <meta name="description"
                content="Our residential cleaning service is designed to provide top-notch cleaning solutions for your home, apartment, or any other residential space. We have a team of expert cleaners who are dedicated to making your living space sparkling clean and organized.">
            <meta name="keywords" content="ar, capital, working, funding, financial, capital">
        
            <meta property="og:title" content="'.$companyName.'" />
            <meta property="og:url" content="https://aceofspadescleaners.avacan.net/" />
            <meta property="og:description"
                content="Our residential cleaning service is designed to provide top-notch cleaning solutions for your home, apartment, or any other residential space. We have a team of expert cleaners who are dedicated to making your living space sparkling clean and organized." />
            <meta property="og:image" content="ogLogo.png" />
        
            <!-- UIkit CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.20/dist/css/uikit.min.css" />
            <style>
                :root {
                    --main-bg-color: #48998F;
                    --main-color: white;
                }
                html {
                scroll-behavior: smooth;
                }
                #preNav {
                    background-color: var(--main-bg-color);
                    color: white;
                }
                #navButtons {
                    color: var(--main-bg-color) !important;
                }
                uk-link,
                a {
                    color: white !important;
                    text-decoration: none;
                    
                }
                p {
                    font-size: 20px;
                }
                nav a {
                    color: var(--main-bg-color) !important;
                    
                }
                .uk-navbar-dropdown-nav>li>a {
                    padding: 20px 0; font-weight: bold; font-size: larger;
                }
                #contactModal {
                    color: black !important;
                }

                #bannerTextBackground {
                    
                    background-color: #C8E0DD;

                    background-image:  linear-gradient(135deg, #C8E0DD 25%, transparent 25%), linear-gradient(225deg, #C8E0DD 25%, transparent 25%), linear-gradient(45deg, #C8E0DD 25%, transparent 25%), linear-gradient(315deg, #C8E0DD 25%, #e5e5f7 25%);
                    background-position:  14px 0, 14px 0, 0 0, 0 0;
                    background-size: 14px 14px;
                    background-repeat: repeat;

                    border-radius: 10px;
                    
                

                }

               

                /* width */
                ::-webkit-scrollbar {
                width: 10px;
                }

                /* Track */
                ::-webkit-scrollbar-track {
                box-shadow: inset 0 0 5px grey; 
                border-radius: 5px;
                }
                
                /* Handle */
                ::-webkit-scrollbar-thumb {
                background: var(--main-bg-color); 
                border-radius: 5px;
                }

                /* Handle on hover */
                ::-webkit-scrollbar-thumb:hover {
                background:rgb(92, 112, 110); 
                }

            </style>
        </head>'
    ;

    $partnerWithUsContent = [
        [
            'We care about the financial health of our customers!',
            0.9,
        ],
        [
            'We understand the financial ecosystem!', 
            0.8,
        ],
        [
            'We move quick and efficiently!', 
            0.7,
        ]
    ];
    for ($i = 0; $i < 3; $i++) {
        $partnerWithUsCards .='
            <div class="uk-padding-remove-horizontal">
                <div class=" uk-card  uk-card-body " style="background-color: var(--main-bg-color); filter: brightness('.$partnerWithUsContent[$i][1].')">
                        <h3 class="uk-card-title" style="color: white !important;">
                            '.$partnerWithUsContent[$i][0].'
                        </h3>

                </div>
            </div>';


    
    }

                   
    

    $content = [
        'Home' => 
            [
                'anchor' =>  'index.php',
         ],
        'Book Now' =>
            [
                'anchor' =>  'bookNow.php',
                'subtitle' =>  'Application Guidelines',
                'content' => 
                    ''
                ,
                'closing' => 
                    'For help, email us at info@arcapgroup.com or call '.$phoneNumber.'.',
            ]
        ,
        'About Us' => 
            [
                'anchor' =>  'aboutUs.php',
                'subtitle' => 
                    'Our professional cleaning service is dedicated to providing top-notch cleaning solutions!',
                'content' => 
                'At '.$companyName .', we understand the importance of a clean and comfortable home. Our residential cleaning service is designed to provide top-notch cleaning solutions for your home, apartment, or any other residential space. We have a team of expert cleaners who are dedicated to making your living space sparkling clean and organized. From dusting to vacuuming and everything in between, we cover every aspect of residential cleaning to ensure your complete satisfaction.',
                'closing' => 
                    'Call us today and one of our specialists will walk you through your options '.$phoneNumber.' or click the apply now button below to get your application started today!',
            ]
        ,
        'Contact' =>
            [
                'anchor' =>  ['onclick', 'UIkit.modal($(\'#contactModal\')).show();'],
            ]
    ];
        




    $navItems = [];
        
    foreach ($navItems as $value) {
        array_push($dropdownNavbarItems, '<li class="uk-hidden@m">'.$value.'</li>');
    }
    foreach ($content as $key => $value) { 
        
        
        if (is_array($value['anchor'])) {
            array_push($navItems, '<a '.$value['anchor'][0].'="'.$value['anchor'][1].'">'.$key.'</a>');
        }
        else {
            array_push($navItems, '<a href="'.$value['anchor'].'">'.$key.'</a>');
        }
        
    }

    $mediumNavbarItems = [];
    foreach ($navItems as $value) {
        array_push($mediumNavbarItems, '<li class="uk-visible@m">'.$value.'</li>');
    }
    $dropdownNavbarItems = [];
    foreach ($navItems as $value) {
        array_push($dropdownNavbarItems, '<li class="uk-hidden@m">'.$value.'</li>');
    }
    $nav = '
        <div id="preNav" class="uk-container-expand">
            <div class="uk-grid-match uk-child-width-1-2@m uk-text-center uk-padding-small" style="color: white;" uk-grid>
                <div>
                    <a class="uk-text-right@m" href="mailto:'.$email.'" uk-icon="icon: mail">'.$email.'&nbsp;</a>
                </div>
                <div>
                    <a class="uk-text-left@m" href="tel:+19543631256" uk-icon="icon: receiver">'.$formattedPhoneNumber .'</a>
                </div>
            </div>
        </div>

        <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
            <nav style="color: black" class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
                <div class="uk-navbar-left " style="padding-left: 50px;">
                    <a href="/" class=" uk-navbar-item uk-logo">
                                        <img class="uk-visible@m" style="padding: 10px; display: block; max-width: 230px; max-height:95px; width: auto; height: auto;"
                                            src="circularLogoSmall.png">
                    </a>
                </div>
                <div class="uk-navbar-right" style="padding-right: 50px;">

                    <ul id="navButtons" class="uk-navbar-nav">
                    '.implode($mediumNavbarItems).'
                    </ul>

                </div>
            
                
                
                
                <div class="uk-navbar-center uk-hidden@m">
                    <a href="/" class=" uk-navbar-item uk-logo">
                        <img style="padding: 10px; display: block; max-width: 230px; max-height:95px; width: auto; height: auto;" src="circularLogoSmall.png">
                    </a>
                    <a class="uk-navbar-toggle" style="color: black;" href="#">
                        <span uk-navbar-toggle-icon></span> <span>Menu</span>
                    </a>
                    <div class="uk-navbar-dropdown" style="border-radius: 15px">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            '.implode($dropdownNavbarItems).'
                        </ul>
                    </div>
                </div>
            
            </nav>

            <div id="contactModal" uk-modal >
                <div class="uk-modal-dialog uk-modal-body" style="color: black; border-radius: 5%;">
                    <h2 class="uk-modal-title" style="color: black;">Contact</h2>
                    <a style="color: black !important;" href="https://goo.gl/maps/M6Qx6xdEe2wwyc3u5">

                                    '.$companyName.'<br>
                                    <span uk-icon="icon: location" span="color: white !important;">PO Box 243371&nbsp;</span><br>
                                    Anchorage, AK 99524<br><br>
                                </a>
                    <a style="color: black !important;" href="" uk-icon="icon: receiver">'.$formattedPhoneNumber .';</a><br><br>
                                    
                    <a style="color: black !important;" href="https://faxauthority.com/how-to-send-a-fax/" uk-icon="icon: print">+1&nbsp;(855)&nbsp;939-5463&nbsp;</a><br><br>
                    
                    <a style="color: black !important;" href="mailto:'.$email.'" uk-icon="icon: mail">'.$email.'&nbsp;</a>
                    <button onclick="" class="uk-button uk-button-default uk-button-large uk-modal-close-default" type="button" uk-close" style="background-color: var(--main-bg-color); border-radius: 16px; color: white; font-weight: bold;">Close</button>
                </div>
            </div>
        </div>
    ';
    
    $quickLinks = [];
    foreach ($navItems as $value) {
        array_push($quickLinks, '<li>'.$value.'</li>');
    }
    $closing = '
        <div class="uk-cover-container" style="height: 50vh; background-color: #B1B6C3;">
            <img src="AboutUsBackground.jpg" alt="" uk-cover>
            <div style="background-color: white;"
                class="uk-margin-large uk-width-1-3@l uk-width-3-4@m uk-width-2-3@s uk-text-center uk-padding-large uk-border-rounded uk-overlay uk-position-center-right">
                <h4>CALL US TODAY AND ONE OF OUR SPECIALISTS WILL WALK YOU THROUGH YOUR OPTIONS!</h4>
                <h2>
                    <a style="color: var(--main-bg-color) !important" href="tel:+19543631256" uk-icon="icon: receiver">'.$formattedPhoneNumber .';</a>
                </h2>
            </div>
        </div>
    ';
    $footer = '       
        <!-- FOOTER -->
            <footer style="background-color: #214541;" id="contactInfo" class="uk-section uk-section-secondary uk-padding-remove-bottom">
                <div class="uk-container">
                    <div class="uk-grid uk-grid-large" data-uk-grid>
                    
                        <div class="uk-width-1-2@m uk-text-center">
                            <h3>
                                Quick Links:
                            </h3>
                            <ul class="uk-list">
                                '.implode($quickLinks).'
                            </ul>
                        </div>
                        <div class="uk-width-1-2@m uk-grid-margin uk-text-center uk-text-center@s">
                            <div class="">
                                <h3>
                                    Contact:
                                </h3>
                                <a href=""
                                uk-icon="icon: receiver">'.$formattedPhoneNumber .';</a><br><br>
                                <a href="mailto:'.$email.'"
                                uk-icon="icon: mail">'.$email.'&nbsp;</a><br><br>
                                
                                <a href="https://goo.gl/maps/M6Qx6xdEe2wwyc3u5">

                                    '.$companyName.'<br>
                                    <span uk-icon="icon: location" span="color: white !important;">PO Box 243371&nbsp;</span><br>
                                    Anchorage, AK 99524<br><br>
                                </a>
                                
                                
                                
                                


                        </div>
                    </div>
                        <div class="uk-width-1-1 uk-text-center">
                            
                            <p>At '.$companyName .', we understand the importance of a clean and comfortable home. Our residential cleaning service is designed to provide top-notch cleaning solutions for your home, apartment, or any other residential space. We have a team of expert cleaners who are dedicated to making your living space sparkling clean and organized. From dusting to vacuuming and everything in between, we cover every aspect of residential cleaning to ensure your complete satisfaction.</p>
                            <!--
                            <div>
                                <a href="" class="uk-icon-button" data-uk-icon="twitter"></a>
                                <a href="" class="uk-icon-button" data-uk-icon="facebook"></a>
                                <a href="" class="uk-icon-button" data-uk-icon="instagram"></a>
                            </div>
                            -->
                        </div>
                    </div>
                </div>
                
                <div class="uk-text-center uk-padding uk-padding-remove-horizontal">
                    <a href="https://github.com/holmesjeremiah">Created by Avacan Technology Solutions</a>&nbsp;◆&nbsp;<a href="http://getuikit.com" title="Visit UIkit 3 site" target="_blank" data-uk-tooltip><span data-uk-icon="uikit"></span></a></span>
                </div>
            </footer>
        <!-- /FOOTER -->
        </div>

        <!-- UIkit JS -->
        <script
        src="https://code.jquery.com/jquery-3.6.3.slim.min.js"
        integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo="
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.20/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.20/dist/js/uikit-icons.min.js"></script>
        </body>

        </html>
    ';




    

?>