<section id="section-prokes">
    <div class="container">
        <div class="row">
            <div class="col-md p-4 my-4 text-center border border-2 rounded-3">
                <div class="prokes-heading">
                    <?php 
                        $covid['src'] = 'assets/image/prokes/covid-19.png';
                        $covid['alt'] = 'covid-19';
                        $covid['class'] = 'img-fluid';
                        $covid['height'] = 100;
                        $covid['width'] = 100;

                        echo img($covid);
                    ?>
                    <h1 class="text-capitalize">protokol kesehatan</h1>
                </div>
                <div class="prokes-content my-4 p-4">
                    <p>untuk menaati kebijakan dari pemerintah guna mencegah penyebaran covid-19,
                        maka perlu diperhatikan aturan sebagai berikut:
                    </p>
                    <div class="row g-3 p-4">
                        <div class="prokes-wearmask col-md">
                            <div class="card rounded-3 shadow">
                                <?php
                                    $mask['src'] = 'assets/image/prokes/medical-mask.png';
                                    $mask['alt'] = 'medical-mask';
                                    $mask['class'] = 'card-img-top';

                                    echo img($mask);
                                ?>
                                <div class="card-body">
                                    <p class="card-text">memakai masker</p>
                                </div>
                            </div>
                        </div>
                        <div class="prokes-distance col-md">
                            <div class="card rounded-3 shadow">
                                <?php
                                    $distance['src'] = 'assets/image/prokes/distance.png';
                                    $distance['alt'] = 'distance';
                                    $distance['class'] = 'card-img-top';

                                    echo img($distance);
                                ?>
                                <div class="card-body">
                                    <p class="card-text">menjaga jarak</p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="prokes-washing col-md">
                            <div class="card rounded-3 shadow">
                                <?php
                                    $washing['src'] = 'assets/image/prokes/washing-hand.png';
                                    $washing['alt'] = 'washing-hand';
                                    $washing['class'] = 'card-img-top';

                                    echo img($washing);
                                ?>
                                <div class="card-body">
                                    <p class="card-text">mencuci tangan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>
                        terima kasih
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>