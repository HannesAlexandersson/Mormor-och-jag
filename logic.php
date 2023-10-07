<?php
__DIR__ . require 'object-array.php';
__DIR__. require 'head.php' ;

__DIR__. require 'header.php' ;

__DIR__. require 'navbar.php';?>
<main>
    <div class="main-container"><?php

foreach ($objectArray as $object => $data){ ?>           
        <div class="main-items">
            <div class="card-content">
                <img class="image long" src="<?=$data['bild']?>">
                <p>Pris:<?=$data['pris']?>kr</p>
                <p>Matrial:<?=$data['matrial']?></p>
            </div>
            <div class="buttons">
                <img class="button köp" src="assets/köp.png">
            </div>
        </div><?php
}?>
    </div>
</main>
<?php
        __DIR__. require 'footer.php';
?>