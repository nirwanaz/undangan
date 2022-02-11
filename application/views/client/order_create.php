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
        </style>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-sm-6">
                    <h3>Form Pemesanan</h3>
                    <form action="#" class="row g-3">
                        <h5>Informasi Calon Mempelai Pria</h5>
                        <div class="col-lg-6 col-sm-12" id="coupleInformation">
                            <div class="card p-3">
                                <h5 class="card-title">Pria</h5>
                                <div class="file-upload groom">
                                    <div class="image-upload-wrap">
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
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12" id="coupleInformation">
                            <div class="card p-3">
                                <h5 class="card-title">Wanita</h5>
                                <div class="file-upload bride">
                                    <div class="image-upload-wrap">
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
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12" id="weddingEvents">
                            <div class="card p-3">
                                <h5 class="card-title">Acara Pernikahan</h5>
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
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12" id="weddingEvents">
                            <div class="card p-3">
                                <h5 class="card-title">Template</h5>
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
                            </div>
                        </div>
                        
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
    </body>
</html>