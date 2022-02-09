<style>
    .bg-linier {
        background: linear-gradient(180deg, rgba(64, 60, 56, 0.88) 0%, 
                                            rgba(69, 64, 59, 0.64) 35.94%, 
                                            rgba(53, 49, 44, 0.64) 72.4%, 
                                            rgba(94, 85, 77, 0.63) 100%
                                            );
        color: whitesmoke;
    }

    .bg-couple {
        background-image: url('/proyek_undangan/assets/image/couple.jpg');
        background-repeat: round;
        background-size: cover;
    }

    .banner-couple .caption {
        font-size: 144px;
        line-height: 180px;
        font-family: 'Great Vibes', cursive;
        font-style: normal;
        font-weight: normal;
        background: radial-gradient(50% 50% at 50% 50%, rgba(229, 229, 229, 0.76) 0%, rgba(229, 229, 229, 0.71) 41.15%, #FFFFFF 89.06%);
        background-clip: text;
        -webkit-text-fill-color: transparent;

    }

    .banner-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: normal;
        font-style: normal;
        letter-spacing: 0.225em;
        line-height: 60px;
    }

    .banner-caption {
        font-family: 'Montserrat', sans-serif;
        font-weight: normal;
        font-style: normal;
        letter-spacing: 0.175em;
    }

    .bg-flower {
        background: url('/proyek_undangan/assets/image/frame/flowers-6616117_640.png');
        background-size: cover;
        background-repeat: round;
        background-position-x: 50px;
        background-position-y: 100px;
    }

    .section-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-style: normal;
        letter-spacing: 0.285em;
        text-align: center;
    }

    .groom, .bride {
        position: relative;
        font-family: 'Montserrat', sans-serif;
        font-weight: normal;
        font-style: normal;
        text-align: center;
    }

    .couple-wrapper {
        position: relative;
        display: inline-block;
    }

    .couple-wrapper .img-groom, .couple-wrapper .img-bride {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
        width: 100%;
        padding: 16%;
    }

    .couple-wrapper .img-groom img, .couple-wrapper .img-bride img {
        width: 100%;
    }

    .couple-wrapper .couple-img-decor {
        position: relative;
        z-index: 2;
        width: 100%;
    }
</style>
<section id="section-banner">
    <div class="container-fluid bg-couple">
        <div class="row bg-flower">
            <div class="col-md-12 text-center bg-linier p-4">
                <div class="banner-title my-3">
                    <?php 
                        echo heading(humanize('save_the_date'), 2, 'class="display-5"'); 
                        echo heading(humanize('for_the_wedding_of'), 4);
                    ?>
                </div>
                <div class="banner-couple">
                    <?php
                        echo heading(humanize('romeo'), 1, 'class="caption"');
                        echo heading('&amp;'.humanize('_juliette'), 1, 'class="caption" style="margin-top: -60px"');
                    ?>
                </div>
                <div class="banner-caption text-end px-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="date-text">
                        <?php
                            echo heading(humanize('sunday,_15_september_2022'), 4);
                            echo heading(humanize('05_o\'clock_in_the_afternoon'), 6);
                        ?>
                    </div>
                    <div class="locate-text">
                        <?php
                            echo heading(humanize('lac_resort'), 4);
                            echo heading(humanize('123_lorem_ipsum_st._dolor'), 6);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-album">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md p-2">
                <?php echo heading(humanize('album_prewedding'), 1, 'class="section-title"') ?>
                <div class="row">
                    <?php foreach(range(0,7) as $num) {
                        $props['src'] = 'proyek_undangan/assets/image/cup.jpg';
                        $props['alt'] = 'image1'; 
                        $props['class'] = 'img-fluid';

                        echo '<div class="col-sm-3 p-2">';
                        echo img($props);
                        echo '</div>';
                    }?>                    
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-profile">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 p-2">
                <?php echo heading(humanize('profil_pasangan'), 1, 'class="section-title"') ?>
                <div class="groom p-4">
                    <div class="couple-wrapper">
                        <div class="img-groom">
                            <?php
                                $groom['src'] = 'proyek_undangan/assets/image/profile-user.png';
                                $groom['alt'] = 'groom';
                                
                                echo img($groom);
                            ?>
                        </div>
                        <?php
                            $decor['src'] = 'proyek_undangan/assets/image/frame/frame-6618824_640.png';
                            $decor['alt'] = 'decor';
                            $decor['class'] = 'couple-img-decor';
                            
                            echo img($decor);
                            echo heading(humanize('romeo'), 1, 'class="groom-name"')
                        ?>
                    </div>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Donec non dolor non felis rutrum consectetur quis in diam. 
                        Curabitur sed ultricies velit.
                    </p>
                </div>
                <div class="bride p-4">
                    <div class="couple-wrapper">
                        <div class="img-bride">
                            <?php
                                $groom['src'] = 'proyek_undangan/assets/image/profile-user.png';
                                $groom['alt'] = 'bride';
                                
                                echo img($groom);
                            ?>
                        </div>
                        <?php                           
                            echo img($decor);
                            echo heading(humanize('juliette'), 1, 'class="bride-name"')
                        ?>
                    </div>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Donec non dolor non felis rutrum consectetur quis in diam. 
                        Curabitur sed ultricies velit.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view($map) ?>
<?php $this->load->view('/component/countdown') ?>
<?php $this->load->view('/component/videoplayer') ?>