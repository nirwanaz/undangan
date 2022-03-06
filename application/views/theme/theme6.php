<style>
    .banner {
        text-align: center;
        color: #C78F00;
        background-image: url('/assets/image/arabes/2/abstract-4752871_1920.jpg');
        background-position: center;
        background-size: cover;
        margin-left: -15px;
        margin-right: -15px;
        -webkit-text-stroke: 2px black;
        -webkit-text-fill-color: transparent;
        text-shadow: 3px 3px 0 #C78F00, 1px 1px 0 #ffff, -1px 1px 0 #0000;
        font-family: 'Sawarabi Mincho', serif;
        padding-top: 25%;
        padding-bottom: 15%;
    }

    .banner::before {
        content: "";
        background: url('/assets/image/arabes/2/arabic-g6b9a21e4f_640.png');
        background-repeat: repeat-x;
        background-size: unset;
        width: 100%;
        height: 100%;
        position: absolute;
        display: inline-block;
        left: 0;
        top: 0;

    }

    .banner-header h1 {
        font-size: calc(1.325em + 4.5vw);
    }

    .banner-header h2 {
        font-size: calc(1.125em + 3.5vw);
    }

    .img-overlay {
        position: relative;
        width: 500px;
        height: 500px;
        margin: auto;
        border: 2px solid;
        border-radius: 50%;
        padding: 3%;
    }

    .banner-content img {
        border-radius: 50%;
        height: 100%;
        object-fit: cover;
        display: block;
        margin: auto;
    }

    .overlay {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        transition: .5s ease;
        opacity: 0;
        background-color: rgba(256, 256, 256, .7);
        border-radius: 50%;
        margin: 6%;
    }

    .img-overlay:hover .overlay {
        opacity: 1;
    }

    .overlay-text {
        position: absolute;
        text-align: center;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        left: 50%;
        top: 50%;
        color: #0000;
        font-size: calc(.625em + 4vw);
    }

    .banner-content .text-couple {
        font-size: calc(1.325em + 5.5vw);
    }

    @media only screen and (max-width: 576px) {

        .banner::before {
            background-size: contain;
        }

        .img-overlay {
            width: 200px;
            height: 200px;
        }
    }

    /* Style section Profile */

    .profile {
        text-align: center;
        color: #C78F00;
        background: url('/assets/image/arabes/2/abstract-4752872_1920.jpg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        margin-left: -15px;
        margin-right: -15px;
        font-family: 'Sawarabi Mincho', serif;
        padding-top: 5%;
        padding-bottom: 5%;
    }

    .profile h1 {
        font-size: calc(1.325em + 4vw);
        -webkit-text-stroke: 1px;
        -webkit-text-fill-color: transparent;
    }

    .profile-content h5 {
        font-size: calc(1.125em + 2vw);
    }

    .profile-content p {
        font-size: calc(.625em + 1vw);
    }

    .profile-content {
        padding: 5%;
    }

    .groom img, .bride img {
        border-bottom-left-radius: 50%;
        border-bottom-right-radius: 50%;
        box-shadow: 2px 4px 6px antiquewhite;
    }

    /* Style section event */
    
    .event {
        text-align: center;
        color: #ffff;
        background: url('/assets/image/arabes/2/abstract-4752877_1920.jpg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        margin-left: -15px;
        margin-right: -15px;
        font-family: 'Sawarabi Mincho', serif;
        padding-top: 5%;
        padding-bottom: 5%;
    }

    .event h1 {
        font-size: calc(1.325em + 4vw);
        -webkit-text-stroke: 1px;
        -webkit-text-fill-color: transparent;
    }

    .event-content-body .card {
        background: linear-gradient(160.29deg, rgba(199, 143, 0, 0.64) 8.14%, rgba(199, 143, 0, 0) 92.59%);
        /* filter: drop-shadow(0px 4px 20px #FFFFFF); */
        box-shadow: 0px 4px 20px #FFFFFF;
        border-radius: 40px;
        border: 0 !important;
        padding: 1.5rem;
        margin-left: 3rem;
        margin-right: 3rem;
    }

    .event-content {
        padding: 5%;
    }

    .event-date {
        line-height: 15px;
        text-transform: capitalize;
        text-align: start;
    }

    .event-date p {
        margin-block-end: 10px;
    }

    @media only screen and (max-width: 576px) {
        .event-content-body .card {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        .event-content-body .gmap-content iframe {
            height: 300px;
        }
    }

    /* Style section prokes */

    .prokes{
        text-align: center;
        color: #ffff;
        background: url('/assets/image/arabes/2/abstract-4752878_1920.jpg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        margin-left: -15px;
        margin-right: -15px;
        font-family: 'Sawarabi Mincho', serif;
        padding-top: 5%;
        padding-bottom: 5%;
    }

    .prokes h1 {
        font-size: calc(1.325em + 4vw);
        -webkit-text-stroke: 1px;
        -webkit-text-fill-color: transparent;
    }

    .prokes-header h1 {
        text-align: center;
        color: whitesmoke;
    }

    .prokes-content .card {
       background: none !important;
       border: 0 !important;
    }

    .prokes-content .card img {
        height: 200px;
        width: 200px;
        margin: auto;
        background: rgba(224, 169, 92, 0.62); 
        box-shadow: 4px 8px 12px #fbfbfb;
        padding: .5em;
    }

    @media only screen and (max-width: 576px) {
        .prokes::before {
            background-position: 0 !important;
            background-repeat: repeat-y;
            background-size: contain;
        }
    }

    /* Style gallery section */

    .gallery {
        text-align: center;
        color: #ffff;
        background: url('/assets/image/arabes/2/abstract-4752875_1920.jpg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        margin-left: -15px;
        margin-right: -15px;
        font-family: 'Sawarabi Mincho', serif;
        padding-top: 5%;
        padding-bottom: 5%;
    }

    .gallery h1 {
        font-size: calc(1.325em + 4vw);
        -webkit-text-stroke: 1px;
        -webkit-text-fill-color: transparent;
    }

    .gallery-content {
        padding: 5%;
    }

    /* Style section gift */

    .gift {
        text-align: center;
        color: #ffff;
        background: url('/assets/image/arabes/2/abstract-4752876_1920.jpg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        margin-left: -15px;
        margin-right: -15px;
        font-family: 'Sawarabi Mincho', serif;
        padding-top: 5%;
        padding-bottom: 5%;
    }

    .gift h1 {
        font-size: calc(1.325em + 4vw);
        -webkit-text-stroke: 1px;
        -webkit-text-fill-color: transparent;
    }

    .gift-content {
        padding: 5%;
    }

    .gift-content .card {
        box-shadow: 4px 6px 8px rgba(224, 169, 92, 0.62);
        background-color: rgba(0, 0, 0, 0.7);
        border-radius: 20px;
    }
</style>
<section id="section-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">
                <div class="banner">
                    <div class="banner-header">
                        <?php echo heading(humanize('save_the_date'), 1) ?>
                        <?php echo heading(humanize('the_wedding_of'), 2) ?>
                    </div>
                    <div class="banner-content">
                        <div class="img-overlay">
                            <?php
                                $img_couple = [
                                    'src' => 'assets/image/couple.jpg',
                                    'alt' => 'img-couple',
                                    'class' => 'img-fluid'
                                ];

                                echo img($img_couple);
                            ?>
                            <div class="overlay">
                                <div class="overlay-text text-uppercase">r&nbsp;<i class="fa-solid fa-heart"></i>&nbsp;j</div>
                            </div>
                        </div>
                        
                        <?php echo heading(humanize('romeo_&_juliette'), 1, 'class="text-couple"') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section-profile">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">
                <div class="profile">
                    <div class="profile-header">
                        <?php echo heading(humanize('pasangan'), 1) ?>
                    </div>
                    <div class="profile-content">
                        <div class="profile-content-header">
                            <?php
                                $arab['src'] = 'assets/image/arabes/2/bismillah-5786133_1280.png';
                                $arab['alt'] = 'bismillah';
                                $arab['width'] = 300;
                                $arab['class'] = 'img-fluid';

                                echo img($arab);
                            ?>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id nibh ut est rhoncus suscipit. </p>
                        </div>
                        <div class="profile-content-body">
                            <div class="row">
                                <!-- Mempelai Pria -->
                                <div class="col-md">
                                    <div class="groom">
                                        <?php
                                            $groom['src'] = 'https://cdn.pixabay.com/photo/2015/01/08/18/30/entrepreneur-593371_960_720.jpg';
                                            $groom['alt'] = 'groom';
                                            $groom['class'] = 'img-fluid';

                                            echo img($groom);
                                        ?>
                                        <?php echo heading(humanize('romeo'), 5) ?>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id nibh ut est rhoncus suscipit. </p>
                                    </div>
                                    
                                </div>
                                <!-- Mempelai Wanita -->
                                <div class="col-md">
                                    <div class="bride">
                                        <?php
                                            $groom['src'] = 'https://cdn.pixabay.com/photo/2016/06/29/04/39/wedding-dresses-1486005_960_720.jpg';
                                            $groom['alt'] = 'groom';
                                            $groom['class'] = 'img-fluid';

                                            echo img($groom);
                                        ?>
                                        <?php echo heading(humanize('juliette'), 5) ?>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id nibh ut est rhoncus suscipit. </p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section-event">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">
                <div class="event">
                    <div class="event-header">
                        <?php echo heading(humanize('acara'), 1) ?>
                    </div>
                    <div class="event-content">
                        <div class="event-content-header">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Suspendisse id nibh ut est rhoncus suscipit. 
                                Ut sit amet risus ut odio viverra dictum vitae id sapien. 
                                Praesent et dictum nulla. Suspendisse in malesuada ex.
                            </p>
                        </div>
                        <div class="event-content-body">
                            <div class="row gx-0 gy-3">
                                <div class="col-md">
                                    <div class="card">
                                        <?php echo heading(humanize('akad'), 5, 'class="card-title"') ?>
                                        <div class="card-body">
                                            <div class="event-date">
                                                <p>tanggal:&nbsp;22&nbsp;februari&nbsp;2022</p>
                                                <p>jam:08.00&nbsp;-&nbsp;selesai</p>
                                                <p>tempat:&nbsp;Lorem ipsum dolor sit amet</p>
                                            </div>
                                            <?php $this->load->view('/component/gmap') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="card">
                                        <?php echo heading(humanize('resepsi'), 5, 'class="card-title"') ?>
                                        <div class="card-body">
                                            <div class="event-date">
                                                <p>tanggal:&nbsp;22&nbsp;februari&nbsp;2022</p>
                                                <p>jam:08.00&nbsp;-&nbsp;selesai</p>
                                                <p>tempat:&nbsp;Lorem ipsum dolor sit amet</p>
                                            </div>
                                            <?php $this->load->view('/component/gmap') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                                
</section>
<?php $this->load->view('/component/prokes') ?>
<?php $this->load->view('/component/carousel', array('items' => $album_items)) ?>
<?php $this->load->view('/component/gift') ?>