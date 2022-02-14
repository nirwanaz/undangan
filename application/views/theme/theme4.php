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
        -webkit-animation: fade 4s infinite 1200ms;
        animation : fade 4s infinite 1200ms;
        font-size: calc(1.325rem + 3vw);
        font-weight: 200;
    }

    @-webkit-keyframes fade {
        0%{
            opacity: 0.4;
        }
        40%{
            opacity: 0.1;
        }
        80%{
            opacity: 0.6
        }
    }

    @keyframes fade {
        0%{
            opacity: 0.4;
        }
        50%{
            opacity: 0.1;
        }
        100%{
            opacity: 0.6
        }
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
                        echo heading(humanize($bride_sname ? $bride_sname : 'juliette'), 1, 'class="caption"');
                        echo heading('&amp;', 1, 'class="caption" style="margin-right: 80px"');
                        echo heading(humanize($groom_sname ? $groom_sname : 'romeo'), 1, 'class="caption"');
                    ?>
                </div>
                <div class="banner-caption p-4">
                    <p><?php echo sprintf('%s - %s', $date_event_wedding_start, $date_event_wedding_end); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

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
                            echo heading(humanize($groom_name, ' '), 1, 'class="groom-name"')
                        ?>
                    </div>
                    
                    <p><?php echo humanize(sprintf('putra dari bapak %s dan ibu %s', $groom_father_name, $groom_mother_name)) ?></p>
                </div>
                <!-- Mempelai Perempuan -->
                <div class="bride p-4">
                    <div class="couple-wrapper">
                        <div class="img-bride">
                            <?php
                                $bride['src'] = 'assets/image/girl-1848954_1920.jpg';
                                $bride['alt'] = 'bride';
                                
                                echo img($bride);
                            ?>
                        </div>
                        <?php                           
                            echo img($decor);
                            echo heading(humanize($bride_name), 1, 'class="bride-name"')
                        ?>
                    </div>
                    
                    <p><?php echo humanize(sprintf('putri dari bapak %s dan ibu %s', $bride_father_name, $bride_mother_name)) ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section-event">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6 p-4 my-4 text-center border border-2 rounded-3">
                <div class="event-header">
                    <?php
                        $calender['src'] = 'assets/icons/feature/schedule.png';
                        $calender['alt'] = 'calender';
                        $calender['class'] = 'img-fluid';
                        $calender['width'] = 100;
                        $calender['height'] = 100;

                        echo img($calender);
                    ?>
                    <h1>acara pernikahan</h1>
                </div>
                <div class="event-content my-4 text-capitalize">
                    <h4>resepsi</h4>
                    <h6><i class="fa-regular fa-calendar"></i>&nbsp;25-26 februari 2022</h6>
                    <h6><i class="fa-regular fa-clock"></i>&nbsp;bebas</h6>
                    <h6><i class="fa-solid fa-location-dot"></i>&nbsp;<?php echo $locate_event_wedding; ?></h6>
                </div>
                <?php $this->load->view('/component/gmap') ?> 
            </div>
        </div>
    </div>
</section>
<section>
</section>
<?php $this->load->view('/component/carousel', array('items' => $album_items)); ?>
<?php $this->load->view('/component/prokes'); ?>
<?php $this->load->view('/component/modal'); ?>
<?php $this->load->view('/component/gift'); ?>