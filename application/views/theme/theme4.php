<style>

    .bg-banner {
        background-image: url('/assets/image/blue/background.png');
        background-size: cover;
    }

    .banner-couple .caption {
        font-size: 144px;
        line-height: 180px;
        font-family: 'Great Vibes', cursive;
        font-style: normal;
        font-weight: normal;

    }

    .m-caption {
        margin-top: -60px;
    }

    .banner-heading {
        font-family: 'Montserrat', sans-serif;
        font-weight: normal;
        font-style: normal;
        letter-spacing: 0.225em;
        line-height: 60px;
    }

    .banner-heading .title {
        font-size: calc(1.325rem + 3vw);
        font-weight: 200;
    }

    .banner-caption {
        font-family: 'Montserrat', sans-serif;
        font-weight: normal;
        font-style: normal;
        letter-spacing: 0.175em;
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
        top: 20px;
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

    .img-groom img, .img-bride img {
        border-radius: 100%;
    }

    .event-wrapper {
        position: relative;
        display: inline-block;
    }

    .event-wrapper .event-content {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
        width: 100%;
    }

    .event-wrapper .event-img-decor {
        position: relative;
        z-index: 2;
        width: 100%;
    }

    @media only screen and (max-width: 576px) {
        .banner-couple .caption {
            font-size: 72px;
            line-height: 90px;
        }

        .m-caption {
            margin-top: -30px;
        }

        .bg-banner {
            background-position: -250px 0;
        }

        .banner-heading .title {
            font-size: calc(1.125rem + 1.2vw);
        }
    }
</style>
<section id="section-banner">
    <div class="container-fluid bg-banner">
        <div class="row">
            <div class="col-md-12 col-12 text-end p-4">
                <div class="banner-heading my-3">
                    <?php 
                        echo heading(humanize('save_the_date'), 2, 'class="title"'); 
                        echo heading(humanize('for_the_wedding_of'), 4);
                    ?>
                </div>
                <div class="banner-couple p-4">
                    <?php
                        echo heading(humanize('romeo'), 1, 'class="caption"');
                        echo heading('&amp;'.humanize('_juliette'), 1, 'class="caption m-caption"');
                    ?>
                </div>
                <div class="banner-caption p-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    $data['items'] = [
        [
            'src' => 'https://cdn.pixabay.com/photo/2017/08/06/20/11/wedding-2595862_960_720.jpg',
            'alt' => 'wedding1',
            'active' => true
        ],
        [
            'src' => 'https://cdn.pixabay.com/photo/2016/03/14/14/21/bride-1255520_960_720.jpg',
            'alt' => 'wedding2',
            'active' => false
        ],
        [
            'src' => 'https://cdn.pixabay.com/photo/2016/11/18/18/32/wedding-1836315_960_720.jpg',
            'alt' => 'wedding3',
            'active' => false
        ],
    ];
    $this->load->view('/component/carousel', $data) 
    ?>
<section id="section-profile" style="background-color: aliceblue;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 p-2">
                <?php echo heading(humanize('profil_pasangan'), 1, 'class="section-title"') ?>
                <div class="groom p-4">
                    <div class="couple-wrapper">
                        <div class="img-groom">
                            <?php
                                $groom['src'] = 'https://cdn.pixabay.com/photo/2019/10/10/18/51/smartphone-4540273_960_720.jpg';
                                $groom['alt'] = 'groom';
                                
                                echo img($groom);
                            ?>
                        </div>
                        <?php
                            $decor['src'] = 'assets/image/blue/frame.png';
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
                                $groom['src'] = 'assets/image/girl-1848954_1920.jpg';
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
<section class="section-event">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6 py-3 text-center">
                <h1>acara pernikahan</h1>
                <div class="event-wrapper">
                    <div class="event-content">
                       <h5>resepsi</h5>
                    </div>
                    <?php
                        $flower['src'] = 'assets/image/blue/flowers-geb6978fd4_640.png';
                        $flower['alt'] = 'decor';
                        $flower['class'] = 'event-img-decor';
                        
                        echo img($flower);
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('/component/gmap') ?>
<?php $this->load->view('/component/countdown') ?>
<?php $this->load->view('/component/videoplayer') ?>