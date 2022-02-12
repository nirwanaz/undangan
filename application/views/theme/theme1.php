
<!-- theme1 -->
<style type="text/css">
    .marriage-couple::before, .marriage-couple::after {
        content: url('/assets/image/tulip.png');
    }

    .marriage-couple {
        font-size: 4rem;
    }

    .bg-eventlist {
        background-image: url('/assets/image/cup.jpg');
        background-position: 0 -200px;
        background-size: cover;
        height: 200px;
    }
</style>
<section class="section-banner">
    <div class="container">
        <div class="row">
            <div class="col-md text-center">
                <div class="marriage-couple">
                    Romeo and Juliette
                </div>
                <img 
                    class="w-50" 
                    src="https://cdn.pixabay.com/photo/2013/07/12/17/44/wedding-rings-152336_960_720.png"
                    alt="wedding-rings"
                    >
                <h3>October | 8th | 5:00 PM</h3>
                <h4>CEREMONY</h4>
                <h5>Lorem ipsum sit dolor</h5>
                <h4>RECEPTION</h4>
                <h5>Lorem Ipsum Sit Dolor</h5>
                <h3>Surabaya, Indonesia</h3>
                <div class="swipe-down p-4">
                    <p>swipe down</p>
                    <img
                        style="margin-top: -40px;"
                        src="https://cdn-icons-png.flaticon.com/512/57/57055.png"
                        width="30"
                        height="30"
                        alt="arrow-down"
                        >
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-album">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="text-center">
                    <h1>ALBUM</h1>
                    <img
                        class="w-100"
                        style="object-fit: cover; object-position: 0 80px"
                        height="300"
                        src="assets/image/couple.jpg'"
                        alt="img-upper"
                    >
                    <h3>Romeo And Juliette</h3>
                    <img
                        class="w-100"
                        style="object-fit: cover; object-position: 0 -240px"
                        height="300"
                        src="assets/image/couple.jpg"
                        alt="img-midr"
                    >
                    <div class="d-flex date-ceremony justify-content-beetween">
                        <h3 class="w-100 text-start">04.04.2022</h3>
                        <img
                            style="object-fit: cover;"
                            height="40"
                            src="assets/image/bell.png"
                            alt="img-bell"
                        >
                        <h3 class="w-100 text-end">Surabaya, INA</h3>
                    </div>
                    <img
                        class="w-100"
                        style="object-fit: cover; object-position: 0 -540px"
                        height="300"
                        src="assets/image/couple.jpg"
                        alt="img-bottom"
                    >
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-eventlist">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="card text-center mb-3">
                    <div class="card-header bg-eventlist">
                        <h1 class="card-title" style="line-height: 200px;">WEDDING PROGRAM</h1>
                    </div>
                    <div class="card-body p-4">
                        <h3>Start</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mollis purus blandit congue blandit. 
                            Donec porttitor non metus non vulputate. Nulla vitae elementum arcu.
                        </p>
                        <h3>Main</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mollis purus blandit congue blandit. 
                            Donec porttitor non metus non vulputate. Nulla vitae elementum arcu.
                        </p>
                        <h3>Or</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mollis purus blandit congue blandit. 
                            Donec porttitor non metus non vulputate. Nulla vitae elementum arcu.
                        </p>
                        <h3>To Finish</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mollis purus blandit congue blandit. 
                            Donec porttitor non metus non vulputate. Nulla vitae elementum arcu.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view($map) ?>
<?php $this->load->view('/component/countdown') ?>