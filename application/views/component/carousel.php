<section id="section-carousel">
    <div class="container">
        <div class="row">
            <div class="col-md py-4 my-4 text-center border border-2 rounded">
                <div class="gallery-heading">
                    <?php
                        $album['src'] = 'assets/icons/feature/photo-album.png';
                        $album['alt'] = 'photo-album';
                        $album['class'] = 'img-fluid';
                        $album['width'] = 100;
                        $album['height'] = 100;

                        echo img($album);
                    ?>
                    <h1>galeri foto</h1>
                </div>
                <div class="gallery-content my-4">
                    <div 
                        class="carousel slide" 
                        id="carouselCaptions"
                        data-bs-ride="carousel"
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
                            <?php foreach($items as $item) { ?>
                            <div class="carousel-item <?php echo $item['active'] ? 'active' : '' ?>">
                                <?php 
                                    $carousel['src'] = $item['src'];
                                    $carousel['alt'] = $item['alt'];
                                    $carousel['class'] = "d-block w-100";
                                    echo img($carousel) ?>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First Slide</h5>
                                    <p>Lorem Ipsum Sit Dolor Amet</p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <button 
                            class="carousel-control-prev" 
                            type="button"
                            data-bs-target="#carouselCaption"
                            data-bs-slide="prev">
                            <span 
                                class="carousel-control-prev-icon"
                                aria-hidden="true">
                            </span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button 
                            class="carousel-control-next" 
                            type="button"
                            data-bs-target="#carouselCaption"
                            data-bs-slide="next">
                            <span 
                                class="carousel-control-next-icon"
                                aria-hidden="true">
                            </span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>