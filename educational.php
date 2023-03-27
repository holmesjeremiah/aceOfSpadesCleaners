<?php

    include 'content.php';

    echo $header;
    echo $nav;
    $pageName = 'Educational';
?>

  

    
    <div>
        <div>
            <div class="uk-align-center uk-child-width-expand@m uk-text-center uk-padding-small ">
                
              <h2 class="uk-align-center uk-width-1-1">
                <?php
                    echo $pageName;
                ?>
              </h2>
              <div class="uk-width-1-1 uk-align-center">
                    <p class="uk-align-center uk-width-1-1@s uk-width-1-2@m">
                        <?php
                            echo $content[$pageName]['content'];
                        ?>
                
                    </p>
              </div>
            </div>
        </div>


    

    <?php
        echo $closing;
        echo $footer;
    ?>