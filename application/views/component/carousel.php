<section id="section-album">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">
                <div class="gallery">
                    <div class="gallery-header">
                        <?php
                            $album['src'] = 'assets/icons/feature/photo-album.png';
                            $album['alt'] = 'photo-album';
                            $album['class'] = 'img-fluid';
                            $album['width'] = 100;
                            $album['height'] = 100;

                            echo img($album);
                        ?>
                        <h1 class="text-capitalize">galeri foto</h1>
                    </div>
                    <div class="gallery-content my-4">
                        <div 
                            class="carousel slide" 
                            id="carouselCaptions"
                            data-bs-ride="carousel"
                            data-bs-interval="3000"
                            >
                            <div class="carousel-indicators">
                                <?php foreach(range(0, sizeof($items) - 1) as $index) { ?>
                                <button 
                                    type="button" 
                                    data-bs-target="#carouselCaptions"
                                    data-bs-slide-to="<?php echo $index ?>" 
                                    class="<?php echo $index == 0 ? 'active' : ''?>" 
                                    aria-current="<?php echo $index == 0 ? 'true' : 'false'?>"
                                    aria-label="<?php echo humanize('slide_').($index+1) ?>">
                                </button>
                                <?php } ?>
                            </div>
                            <div class="carousel-inner">
                                <?php foreach($items as $item => $value) { ?>
                                <div class="carousel-item <?php echo $item == 0 ? 'active' : '' ?>">
                                    <?php 
                                        $carousel['src'] = $value;
                                        $carousel['alt'] = 'picture'.($item + 1);
                                        $carousel['class'] = "d-block w-100";
                                        echo img($carousel) ?>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First Slide</h5>
                                        <p>Lorem Ipsum Sit Dolor Amet</p>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>