<style>
    /* Style section banner */
    .line-decor::before, .line-decor::after {
        content: "";
        display: block;
        border-top: 2px solid whitesmoke;
    }

    .bg-banner {
        background-image: url('/assets/image/arabes/1/bg-banner.JPG');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .pad-center {
        padding-top: 120px;
        padding-bottom: 120px;
    }

    .banner {
        text-align: center;
        color: whitesmoke;
        font-family: 'Courgette', cursive;
        font-style: normal;
    }

    .banner-header {
        text-transform: capitalize;
    }

    .banner-header h1{
        font-size: calc(1.325rem + 5vw);
    }

    .banner-header h2 {
        font-size: calc(1.125rem + 3vw);
    }

    .banner-content-header {
        margin-top: 10%;
        margin-bottom: 10%;
        text-transform: capitalize;
    }

    .banner-content-header h1 {
        font-size: calc(1.325rem + 6vw);
    }

    .banner-content-body {
        text-transform: capitalize;
        margin-top: 5%;
        margin-bottom: 5%;
    }

    .day-name, .time {
        letter-spacing: .115em;
    }

    .day-name h4, .date h4, .time h4 {
        font-size: calc(1.125rem + 2vw);
    }

    .banner-content-footer h4 {
        font-size: calc(1.125rem + 2vw);
    }

    /* Style section profile */
    .profile {
        text-align: center;
        color: whitesmoke;
        position: relative;
        margin-left: -15px;
        margin-right: -15px;
        padding-top: 10%;
        padding-bottom: 10%;
    }

    .profile::before {
        content: "";
        display: block;
        background-image: url('/assets/image/arabes/1/bg-banner.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position-x: -350px;
        transform: rotate(180deg);
        -webkit-transform: rotate(180deg);
        -o-transform: rotate(180deg);
        height: 100%;
        width: 100%;
        position: absolute;
        left: 0;
        top: 0;
        z-index: -1;
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

    .img-groom img, .img-bride img {
        border-radius: 100%;
        object-position: 0 40px;
    }

    @media only screen and (max-width: 576px) {
        .img-groom img, .img-bride img {
            object-position: 0 20px;
        }
    }

    /* Style section event */

    .event{
        text-align: center;
        color: whitesmoke;
        position: relative;
        margin-left: -15px;
        margin-right: -15px;
        padding-top: 10%;
        padding-bottom: 10%;
    }

    .event::before {
        content: "";
        display: block;
        background-image: url('/assets/image/arabes/1/bg-banner.jpg');
        background-repeat: no-repeat;
        background-position: -300px 0;
        background-size: cover;
        height: 100%;
        width: 100%;
        position: absolute;
        left: 0;
        top: 0;
        z-index: -1;
    }

    .event-header h1 {
        text-align: center;
        color: whitesmoke;
    }

    .event-content .card {
        background: rgba(224, 169, 92, 0.62); 
        border-radius: 5%;
        box-shadow: 4px 8px 12px rgba(224, 169, 92, 0.42);
        padding: .5em;
    }

    .event-content-body .event-date {
        line-height: 10px;
        padding: 1rem;
    }

    @media only screen and (max-width: 576px) {
        .event-content-body .gmap-content iframe {
            height: 300px;
        }

        .event::before {
            background-position: 0 !important;
            background-repeat: repeat-y;
            background-size: contain;
        }
    }

    /* Style section prokes */
    .prokes{
        text-align: center;
        color: whitesmoke;
        position: relative;
        margin-left: -15px;
        margin-right: -15px;
        padding-top: 10%;
        padding-bottom: 10%;
    }

    .prokes::before {
        content: "";
        display: block;
        background-image: url('/assets/image/arabes/1/bg-banner.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        transform: rotate(180deg);
        -webkit-transform: rotate(180deg);
        height: 100%;
        width: 100%;
        position: absolute;
        left: 0;
        top: 0;
        z-index: -1;
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
        border-radius: 50%;
        box-shadow: 4px 8px 12px rgba(224, 169, 92, 0.42);
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
        color: whitesmoke;
        position: relative;
        margin-left: -15px;
        margin-right: -15px;
        padding-top: 10%;
        padding-bottom: 10%;
    }

    .gallery::before {
        content: "";
        display: block;
        background-image: url('/assets/image/arabes/1/bg-banner.jpg');
        background-repeat: repeat-y;
        background-size: contain;
        height: 100%;
        width: 100%;
        position: absolute;
        left: 0;
        top: 0;
        z-index: -1;
    }
</style>
<section id="section-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md bg-banner">
                <div class="banner pad-center offset-md-2">
                    <div class="banner-header">
                        <h1>save&nbsp;the&nbsp;date</h1>
                        <h2>the&nbsp;wedding&nbsp;of</h2>
                    </div>
                    <div class="banner-content">
                        <div class="banner-content-header">
                            <h1>romeo&nbsp;&amp;&nbsp;juliette</h1>
                        </div>
                        <div class="banner-content-body">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="day-name line-decor">
                                    <h4>selasa</h4>
                                </div>
                                <div class="date d-flex flex-column text-center mx-5">
                                    <h4>12</h4>
                                    <h4>januari</h4>
                                    <h4>2022</h4>
                                </div>
                                <div class="time line-decor">
                                    <h4>18.00</h4>
                                </div>
                            </div>
                        </div>
                        <div class="banner-content-footer">
                            <h4>lobby&nbsp;hotel&nbsp;lorem&nbsp;ipsum</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section-profile">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="profile">
                    <div class="profile-header">
                        <?php echo heading(humanize('profil_pasangan'), 1, 'class="section-title"') ?>
                    </div>
                    <div class="profile-content">
                        <!-- mempelai pria -->
                        <div class="groom p-4">
                            <div class="couple-wrapper">
                                <div class="img-groom">
                                    <?php
                                        $groom['src'] = 'assets/image/profile-user.png';
                                        $groom['alt'] = 'groom';
                                        
                                        echo img($groom);
                                    ?>
                                </div>
                                <?php
                                    $decor['src'] = 'assets/image/arabes/frame.png';
                                    $decor['alt'] = 'decor';
                                    $decor['class'] = 'couple-img-decor';
                                    
                                    echo img($decor);
                                    echo heading(humanize($groom_name ? $groom_name : 'romeo'), 1, 'class="groom-name"')
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
                                    echo heading(humanize($bride_name ? $bride_name : 'juliette'), 1, 'class="bride-name"')
                                ?>
                            </div>
                            
                            <p><?php echo humanize(sprintf('putri dari bapak %s dan ibu %s', $bride_father_name, $bride_mother_name)) ?></p>
                        </div>
                    </div>
                    <!-- profile content end -->
                </div>
                <!-- profile end -->
            </div>
        </div>
    </div>
</section>
<section id="section-event">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">
                <div class="event">
                    <div class="event-header mb-4">
                        <?php echo heading(humanize('acara_pernikahan'), 1) ?>
                    </div>
                    <div class="event-content px-4">
                        <div class="event-content-opening my-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Donec porta condimentum malesuada. Donec at ultrices enim.
                            </p>
                        </div>
                        <div class="row g-3">
                            <div class="col-md">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="event-content-header">
                                            <?php echo heading(humanize('akad_nikah'), 5, 'class="card-title"') ?>
                                        </div>
                                        <div class="event-content-body">
                                            <div class="event-date">
                                                <p>selasa, 12 januari 2022</p>
                                                <p>10.00&nbsp;-&nbsp;selesai</p>
                                                <p>lokasi&nbsp;acara</p>
                                            </div>
                                            <?php $this->load->view('/component/gmap') ?>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="event-content-header">
                                            <?php echo heading(humanize('resepsi'), 5, 'class="card-title"') ?>
                                        </div>
                                        <div class="event-content-body">
                                            <div class="event-date">
                                                <p>selasa, 12 januari 2022</p>
                                                <p>10.00&nbsp;-&nbsp;selesai</p>
                                                <p>lokasi&nbsp;acara</p>
                                            </div>
                                            <?php $this->load->view('/component/gmap') ?>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event-content-closing my-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Donec porta condimentum malesuada. Donec at ultrices enim.
                            </p>
                        </div>
                    </div>
                    <!-- event content end -->
                </div>
                <!-- event end -->
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('/component/prokes') ?>
<?php $this->load->view('/component/carousel', array('items'=>$album_items)) ?>