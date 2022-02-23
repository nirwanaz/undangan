<!DOCTYPE html>
<html>
    <head>
        <!-- Bootstrap CSS -->
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    </head>
    <body>
        <style>
            .file-upload {
                background-color: #ffffff;
                margin: 0 auto;
                padding: 20px;
            }

            .file-upload-input {
                position: absolute;
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                outline: none;
                opacity: 0;
                cursor: pointer;
            }

            .image-upload-wrap {
                border: 4px dashed #1FB264;
                position: relative;
                width: 200px;
                height: 200px;
                border-radius: 100%;
                background-size: cover;
            }

            .image-dropping,
            .image-upload-wrap:hover {
                background-color: #1FB264;
                border: 4px dashed #ffffff;
            }

            .image-title-wrap {
                padding: 0 15px 15px 15px;
                color: #222;
            }

            .drag-text {
                text-align: center;
                margin: auto;
            }

            .drag-text h3 {
                font-weight: 100;
                text-transform: uppercase;
                color: #15824B;
                padding: 60px 0;
            }

            .file-upload-image {
                height: 300px;
                width: 300px;
                margin: auto;
                padding: 20px;
                border-radius: 100%;
                object-fit: cover;
                object-position: top;
            }

            /*form styles*/
            #msform {
                text-align: center;
                position: relative;
                margin-top: 30px;
            }

            #msform fieldset {
                background: white;
                border: 0 none;
                border-radius: 0px;
                box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
                padding: 20px 30px;
                box-sizing: border-box;
                width: 80%;
                margin: 0 10%;

                /*stacking fieldsets above each other*/
                position: relative;
            }

            /*Hide all except first fieldset*/
            #msform fieldset:not(:first-of-type) {
                display: none;
            }

            #msform input:focus, #msform textarea:focus {
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
                border: 1px solid #ee0979;
                outline-width: 0;
                transition: All 0.5s ease-in;
                -webkit-transition: All 0.5s ease-in;
                -moz-transition: All 0.5s ease-in;
                -o-transition: All 0.5s ease-in;
            }

            /*buttons*/
            #msform .action-button {
                width: 100px;
                background: #ee0979;
                font-weight: bold;
                color: white;
                border: 0 none;
                border-radius: 25px;
                cursor: pointer;
                padding: 10px 5px;
                margin: 10px 5px;
            }

            #msform .action-button:hover, #msform .action-button:focus {
                box-shadow: 0 0 0 2px white, 0 0 0 3px #ee0979;
            }

            #msform .action-button-previous {
                width: 100px;
                background: #C5C5F1;
                font-weight: bold;
                color: white;
                border: 0 none;
                border-radius: 25px;
                cursor: pointer;
                padding: 10px 5px;
                margin: 10px 5px;
            }

            #msform .action-button-previous:hover, #msform .action-button-previous:focus {
                box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
            }

            /*headings*/
            .fs-title {
                font-size: 18px;
                text-transform: uppercase;
                color: #2C3E50;
                margin-bottom: 10px;
                letter-spacing: 2px;
                font-weight: bold;
            }

            .fs-subtitle {
                font-weight: normal;
                font-size: 13px;
                color: #666;
                margin-bottom: 20px;
            }

            /*progressbar*/
            #progressbar {
                margin-bottom: 30px;
                overflow: hidden;
                /*CSS counters to number the steps*/
                counter-reset: step;
                padding-inline-end: 40px;
            }

            #progressbar li {
                list-style-type: none;
                color: white;
                text-transform: uppercase;
                font-size: 9px;
                width: 25%;
                float: left;
                position: relative;
                letter-spacing: 1px;
            }

            #progressbar li:before {
                content: counter(step);
                counter-increment: step;
                width: 24px;
                height: 24px;
                line-height: 26px;
                display: block;
                font-size: 12px;
                color: #333;
                background: white;
                border-radius: 25px;
                margin: 0 auto 10px auto;
            }

            /*progressbar connectors*/
            #progressbar li::after {
                content: '';
                width: 100%;
                height: 2px;
                background: white;
                position: absolute;
                left: -50%;
                top: 9px;
                z-index: -1; /*put it behind the numbers*/
            }

            #progressbar li:first-child::after {
                /*connector not needed before the first step*/
                content: none;
            }

            /*marking active/completed steps green*/
            /*The number of the step and the connector before it = green*/
            #progressbar li.active:before, #progressbar li.active:after {
                background: #ee0979;
                color: white;
            }

        </style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-sm bg-info py-4" style="z-index: 0">
                    <h3 class="text-light">Form Pemesanan</h3>
                    <form action="#" id="msform">
                        <!-- progress bar -->
                        <ul id="progressbar">
                            <li class="active">Calon Pria</li>
                            <li>Calon Wanita</li>
                            <li>Acara Pernikahan</li>
                            <li>Template</li>
                        </ul>
                        <!-- Fieldset -->
                        <fieldset>
                            <h5 class="fs-title">Calon Mempelai Pria</h5>
                            <div class="file-upload groom">
                                <div class="image-upload-wrap m-auto">
                                    <input class="file-upload-input" type='file' name="groomImg" onchange="readURL(this);" accept="image/*" />
                                    <div class="drag-text">
                                        <h3>Pilih Foto Profil</h3>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-danger w-100 mt-3 d-none" onclick="removeURL(this)">Hapus</button>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" name="groomName" placeholder="nama mempelai pria">
                                <label for="groomName">Nama</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" name="groomFatherName" placeholder="nama bapak">    
                                <label for="groomFatherName">Nama Bapak</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" name="groomMotherName" placeholder="nama ibu">
                                <label for="groomMotherName">Nama Ibu</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" name="groomAdditional" placeholder="keterangan">
                                <label for="groomAdditional" class="form-label">Keterangan tambahan</label>
                            </div>
                            <div class="mb-2">
                                <input type="button" name="next" class="next action-button" value="Selanjutnya"/>
                            </div>
                        </fieldset>
                        <fieldset>
                            <h5 class="fs-title">Calon Mempelai Wanita</h5>
                            <div class="file-upload bride">
                                <div class="image-upload-wrap m-auto">
                                    <input class="file-upload-input" type='file' name="brideImg" onchange="readURL(this);" accept="image/*" />
                                    <div class="drag-text">
                                        <h3>Pilih Foto Profil</h3>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-danger w-100 mt-3 d-none" onclick="removeURL(this)">Hapus</button>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" name="brideName" placeholder="nama mempelai wanita">
                                <label for="brideName">Nama</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" name="brideFatherName" placeholder="nama bapak">    
                                <label for="brideFatherName">Nama Bapak</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" name="brideMotherName" placeholder="nama ibu">
                                <label for="brideMotherName">Nama Ibu</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" name="brideAdditional" placeholder="keterangan">
                                <label for="brideAdditional" class="form-label">Keterangan tambahan</label>
                            </div>
                            <div class="mb-2">
                                <input type="button" name="previous" class="previous action-button-previous" value="Sebelumnya"/>
                                <input type="button" name="next" class="next action-button" value="Selanjutnya"/>
                            </div>
                        </fieldset>
                        <fieldset>
                            <h5 class="fs-title">Acara Pernikahan</h5>
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" name="eventName" placeholder="nama acara">
                                <label for="eventName">Nama</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="date" class="form-control" name="eventDate" placeholder="22/02/2002">
                                <label for="eventDate">Tanggal</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="time" class="form-control" name="eventTimeStart">
                                <label for="eventTimeStart">Waktu mulai</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="time" class="form-control" name="eventTimeEnd">
                                <label for="eventTimeEnd">Waktu berakhir</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" name="eventLocate" placeholder="lokasi">
                                <label for="eventLocate">Lokasi</label>
                            </div>
                            <div class="mb-2">
                                <input type="button" name="previous" class="previous action-button-previous" value="Sebelumnya"/>
                                <input type="button" name="next" class="next action-button" value="Selanjutnya"/>
                            </div>
                        </fieldset>
                        <fieldset>
                            <h5 class="fs-title">Template</h5>
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" name="eventName" placeholder="nama acara">
                                <label for="eventName">Nama</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="date" class="form-control" name="eventDate">
                                <label for="eventDate">Tanggal</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="time" class="form-control" name="eventTimeStart">
                                <label for="eventTimeStart">Waktu mulai</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="time" class="form-control" name="eventTimeEnd">
                                <label for="eventTimeEnd">Waktu berakhir</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" name="eventLocate" placeholder="lokasi">
                                <label for="eventLocate">Lokasi</label>
                            </div>
                            <div class="mb-2">
                                <input type="button" name="previous" class="previous action-button-previous" value="Sebelumnya"/>
                                <input type="button" name="submit" class="submit action-button" value="Selesai"/>
                            </div>
                        </fieldset>
                        
                    </form>
                </div>
            </div>
        </div>
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $(input.nextElementSibling).addClass('d-none');
                        $(input.parentNode.parentNode.children[0]).css('background-image', `url('${e.target.result}')`);
                        $(input.parentNode.parentNode.children[1]).removeClass('d-none');
                        
                    };

                    reader.readAsDataURL(input.files[0]);

                } 
            }

            function removeURL(e) {
                $(e.previousElementSibling.children[0]).val('');
                $(e.previousElementSibling.children[1]).removeClass('d-none');
                $(e.previousElementSibling).removeProp('style');
                $(e).addClass('d-none');
            }

        </script>
        <script>
            
            //jQuery time
            var current_fs, next_fs, previous_fs; //fieldsets
            var left, opacity, scale; //fieldset properties which we will animate
            var animating; //flag to prevent quick multi-click glitches

            $(".next").click(function(){
                if(animating) return false;
                animating = true;
                
                current_fs = $(this).parent().parent();
                next_fs = $(this).parent().parent().next();
                
                //activate next step on progressbar using the index of next_fs
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                
                //show the next fieldset
                next_fs.show(); 
                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function(now, mx) {
                        //as the opacity of current_fs reduces to 0 - stored in "now"
                        //1. scale current_fs down to 80%
                        scale = 1 - (1 - now) * 0.2;
                        //2. bring next_fs from the right(50%)
                        left = (now * 50)+"%";
                        //3. increase opacity of next_fs to 1 as it moves in
                        opacity = 1 - now;
                        current_fs.css({
                            'transform': 'scale('+scale+')',
                            'position': 'relative'
                        });
                        next_fs.css({'left': left, 'opacity': opacity});
                    }, 
                    duration: 800, 
                    complete: function(){
                        current_fs.hide();
                        animating = false;
                    }, 
                });
            });

            $(".previous").click(function(){
                if(animating) return false;
                animating = true;
                
                current_fs = $(this).parent().parent();
                previous_fs = $(this).parent().parent().prev();
                
                //de-activate current step on progressbar
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                
                //show the previous fieldset
                previous_fs.show(); 
                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function(now, mx) {
                        //as the opacity of current_fs reduces to 0 - stored in "now"
                        //1. scale previous_fs from 80% to 100%
                        scale = 0.8 + (1 - now) * 0.2;
                        //2. take current_fs to the right(50%) - from 0%
                        left = ((1-now) * 50)+"%";
                        //3. increase opacity of previous_fs to 1 as it moves in
                        opacity = 1 - now;
                        current_fs.css({'left': left});
                        previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
                    }, 
                    duration: 800, 
                    complete: function(){
                        current_fs.hide();
                        animating = false;
                    }, 
                });
            });

            $(".submit").click(function(){
                return false;
            })
        </script>
    </body>
</html>