<!-- carousel -->
<div id='carouselExampleIndicators' class='carousel slide' data-ride='carousel' data-intervel='false' >
    <ol class='carousel-indicators'>
        <?php foreach ($images as $key => $img) { $active=""; if($key==0) $active="active"; ?>
        <li data-target='#carouselExampleIndicators' data-slide-to='<?php echo $key; ?>' class='<?php echo $active?>' ></li>
        <?php } ?>
    </ol>
    <div class='carousel-inner'>
        <?php foreach ($images as $key => $img) { $active=""; if($key==0) $active="active"; ?>
        <div class='carousel-item <?php echo $active?>'>
            <img class='img-fluid w-100' src='<?php echo base_url(); ?>files/<?php echo $img['url_image']; ?>' data-item="<?php echo $item; ?>" data-img="<?php echo $img['nro_image']; ?>" data-adjunto="<?php echo $img['url_image']; ?>" alt='First slide' />
            <!--<img class='img-fluid w-100' src='https://loremflickr.com/800/800/cars?lock=<?php echo $item.$img['url_image']; ?>.jpg' alt='First slide' />-->
        </div>
        <?php } ?>
    </div>
    <a class='carousel-control-prev' href='#carouselExampleIndicators' role='button' data-slide='prev' >
        <span class='carousel-control-prev-icon' aria-hidden='true' ></span>
        <span class='sr-only'>Previous</span>
    </a>
    <a class='carousel-control-next' href='#carouselExampleIndicators' role='button' data-slide='next' >
        <span class='carousel-control-next-icon' aria-hidden='true' ></span>
        <span class='sr-only'>Next</span>
    </a>
</div>