<section id="section-prokes">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">
                <div class="prokes">
                    <div class="prokes-header">
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
                            <div class="col-md">
                                <div class="card">
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
                            <div class="col-md">
                                <div class="card">
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
                            <div class="col-md">
                                <div class="card">
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
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>