<?php

    include 'content.php';

    echo $header;
    echo $nav;
?>



<body>
    
    <div class="uk-background-cover uk-cover-container" data-src="bannerBackground.jpg" uk-img="loading: eager" uk-height-viewport>    
        <div >
            <div class="uk-overlay uk-text-center uk-overlay-default uk-position-center" style="border-radius: 20%;">

                
                <img style="object-fit: contain; max-width: 100%;" class="uk-height-large" src="circularLogo.png" alt="">
                <div class="uk-padding">
                    <button class="uk-button uk-button-default uk-button-large" style="background-color: var(--main-bg-color); border-radius: 16px; color: white; font-weight: bold;">Book Now</button>
                    <button class="uk-button uk-button-default uk-button-large" style="background-color: var(--main-bg-color); border-radius: 16px; color: white; font-weight: bold;">Request a Quote</button>
                </div>
            </div>
        </div>
    </div>
    
    <div>
        <div class="uk-child-width-expand@l uk-grid-large uk-text-center uk-padding-small uk-grid" uk-grid="">
            <?php
                $card = [
                    [
                        'Residential Cleaning',
                        'At '.$companyName.', we understand the importance of a clean and comfortable home. Our residential cleaning service is designed to provide top-notch cleaning solutions for your home, apartment, or any other residential space. We have a team of expert cleaners who are dedicated to making your living space sparkling clean and organized. From dusting to vacuuming and everything in between, we cover every aspect of residential cleaning to ensure your complete satisfaction.'
                    ],
                    [
                        'Commercial Cleaning',
                        'Keeping your commercial space clean and organized is essential for creating a positive first impression on your customers and employees. At '.$companyName.', we provide exceptional commercial cleaning services for offices, retail spaces, and other commercial buildings. Our team of experienced cleaners is trained to handle all aspects of commercial cleaning, including floor cleaning, restroom sanitation, and dusting. We work closely with you to understand your specific cleaning needs and provide customized solutions that exceed your expectations.'
                    ],
                    [
                        'Move-In/Move-Out Cleaning',
                        'Moving into a new home or apartment can be exciting, but it can also be overwhelming. Let '.$companyName.' take the stress out of the equation with our move-in/move-out cleaning service. We provide deep cleaning solutions for your new home or apartment before you move in to ensure it\'s in pristine condition. Our move-out cleaning service is designed to deep clean your home or apartment after you move out, leaving it in perfect condition for the next occupant. With our move-in/move-out cleaning service, you can focus on settling into your new home without worrying about cleaning.'
                    ]
                ];
                for ($i = 0; $i < 3; $i++) {
            ?>
                <div>
                    <div class=" uk-card  uk-card-body ">
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">
                                <?= $card[$i][0] ?>
                            </h3>
                            <img class="uk-width-1-5" src="cardImg<?php echo $i + 1 ?>.png" alt="">
                            <p>
                                <?= $card[$i][1] ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>


       

        
    <?php
        //echo $closing;
        echo $footer;
    ?>