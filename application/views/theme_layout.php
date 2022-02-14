<!DOCTYPE html>
<html>
    <head>
        <!-- meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Maps UI -->
        <link href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" rel="stylesheet" type="text/css"/>

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <audio id="Audio" hidden src="assets/audio/DJSODA-OKAY.mp3" type="audio/mpeg"></audio> 
        <script src="https://kit.fontawesome.com/d5d5a7466b.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <style>        
            #play-pause-button{
                font-size: 50px;
                cursor: pointer;
            }

            #playAudio {
                width: 40px;
                height: 40px;
                margin-top: 250px;
                margin-left: 7px;
                position: fixed;
                z-index: 10;
                border-radius: 200px;
                /* background-color: tranparent; */
                border: 1px solid rgba(230, 230, 230, 0.35);
                -webkit-filter : drop-shadow(2px 4px 6px black);
                filter: drop-shadow(2px 4px 6px black);
            }

            .b-ref {
               cursor: pointer; 
            }
        </style>
        <!-- Audio Button -->
        <button id="playAudio" class="shadow"><i class='fa-solid fa-play'></i></button>
        
        <div class="main" style="width: 100%; overflow-x: hidden">
            <nav class="navbar fixed-bottom navbar-light bg-light">
                <div class="container">
                    <div class="w-100">
                        <div class="col-md-12">
                            <div class="row g-0">
                                <div class="col-lg col b-ref" id="home">
                                    <?php
                                        $home['src'] = 'assets/icons/navbar/home.png';
                                        $home['alt'] = 'home';
                                        $home['height'] = 30;
                                        $home['width'] = 30;
                                        $home['class'] = 'd-block mx-auto';

                                        echo img($home);
                                    ?>
                                    <p class="text-center">home</p>
                                </div>
                                <div class="col-lg col b-ref" id="couple">
                                    <?php
                                        $inlove['src'] = 'assets/icons/navbar/in-love.png';
                                        $inlove['alt'] = 'in-love';
                                        $inlove['height'] = 30;
                                        $inlove['width'] = 30;
                                        $inlove['class'] = 'd-block mx-auto';

                                        echo img($inlove);
                                    ?>
                                    <p class="text-center">couple</p>
                                </div>
                                <div class="col-lg col b-ref" id="event">
                                    <?php
                                        $calendar['src'] = 'assets/icons/navbar/calendar.png';
                                        $calendar['alt'] = 'calendar';
                                        $calendar['height'] = 30;
                                        $calendar['width'] = 30;
                                        $calendar['class'] = 'd-block mx-auto';

                                        echo img($calendar);
                                    ?>
                                    <p class="text-center">calendar</p>
                                </div>
                                <div class="col-lg col b-ref" id="gallery">
                                    <?php
                                        $gallery['src'] = 'assets/icons/navbar/gallery.png';
                                        $gallery['alt'] = 'gallery';
                                        $gallery['height'] = 30;
                                        $gallery['width'] = 30;
                                        $gallery['class'] = 'd-block mx-auto';

                                        echo img($gallery);
                                    ?>
                                    <p class="text-center">gallery</p>
                                </div>
                                <div class="col-lg col b-ref" id="envelope">
                                    <?php
                                        $envelope['src'] = 'assets/icons/navbar/envelope.png';
                                        $envelope['alt'] = 'envelope';
                                        $envelope['height'] = 30;
                                        $envelope['width'] = 30;
                                        $envelope['class'] = 'd-block mx-auto';

                                        echo img($envelope);
                                    ?>
                                    <p class="text-center">envelope</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <?php $this->load->view($content) ?>
            <footer>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md" style="min-height: 125px;"></div>
                    </div>
                </div>
            </footer>        
            <!-- Popper JS and Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

            <!-- Jquery 3.6 -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script type="text/javascript">
                $(window).on('load', function () {
                    $('#staticBackdrop').modal('show');
                })

                $('#home').on('click', function () {
                    window.location.href = '#section-banner';
                })

                $('#couple').on('click', function () {
                    window.location.href = '#section-profile';
                })

                $('#event').on('click', function () {
                    window.location.href = '#section-event';
                })

                $('#gallery').on('click', function () {
                    window.location.href = '#section-album';
                })

                $('#envelope').on('click', function () {
                    window.location.href = '#section-gift';
                })
            </script>
            <script>
                function play() {
                    $('#playAudio').click();
                }

                document.getElementById("playAudio")
                        .addEventListener("click", function () {
                            let audio = document.getElementById('Audio');
                            audio.loop = true;
                            audio.volume = 0.6;

                            if (this.className == 'is-playing'){
                                this.className = "";
                                this.innerHTML = "<i class='fa-solid fa-play'></i>"
                                audio.pause();
                            } else {
                                this.className = "is-playing";
                                this.innerHTML = "<i class='fa-solid fa-pause'></i>";
                                audio.play();
                            }
                        });

            </script>
        </div>
    </body>
</html>