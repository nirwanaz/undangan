<?php 
    $map['embed'] = $gmap_embed_event_wedding ? $gmap_embed_event_wedding : 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317715.7119479623!2d-0.3817876852262071!3d51.528735194467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20Britania%20Raya!5e0!3m2!1sid!2sid!4v1644814485403!5m2!1sid!2sid';
    $map['link'] = $gmap_link_event_wedding ? $gmap_link_event_wedding : 'https://goo.gl/maps/SMLR327WvBMqTbrSA';
?>
<section class="section-gmap">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="gmap-content">
                    <iframe 
                        src="<?php echo $map['embed']; ?>"
                        height="450" 
                        style="border:0; width:100%" 
                        allowfullscreen="true" 
                        loading="lazy">
                    </iframe>
                    <a href="<?php echo $map['link'] ?>" class="btn btn-light">Lihat google map</a>
                </div>
            </div>
        </div>
    </div>
</section>
