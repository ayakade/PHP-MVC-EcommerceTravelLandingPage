<div class="intro col-12 col-lg-12">
    <img class="col-12 col-lg-6" src="imgs/accommodation-5.png" alt="bubble dome">

    <div class="cities col-12 col-lg-6">
        <div class="title">
            <h2>Travel your favorite city with us</h2>
            <p>We offer you unique accommodations around the world. There are a variety of accommodations that suit your travel with friends, family, and lover. You will find one of the kind accommodations you will never find with another tourism company. We promise that our special accommodations make your travel more memorable.<br><br>Let us help to make your travel greater!</p>
        </div><!-- .title -->
        <?php
        foreach ($this->oCities as $city)
        {
        ?>
        <div class="city col-6 col-lg-3">
            <img src="imgs/<?=$city->strImage?>" alt="<?=$city->strName?>">
            <p><?=$city->strName?></p>
        </div><!-- .city -->
        <?php
        }
        ?>
    </div><!-- .cities -->
</div><!-- .intro / intro.php -->