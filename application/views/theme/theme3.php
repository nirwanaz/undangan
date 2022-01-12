<style>
    .banner {
        position: relative;
        overflow-x: hidden;
        overflow-y: hidden;
    }
    .banner::before {
        content: " ";
        position: absolute;
        top: 0;
        left: -36%;
        z-index: -1;
        transform: rotate(90deg);
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url('/proyek_undangan/assets/image/frame/frame-gbacf04b21_640_edit.png');

    }
    .banner::after {
        content: " ";
        position: absolute;
        top: 0;
        right: -36%;
        z-index: -1;
        transform: rotate(-90deg);
        width: 100%;
        height: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url('/proyek_undangan/assets/image/frame/frame-gbacf04b21_640_edit.png');
    }
    .heading-text, .couple-text, .bottom-text {
        margin-top: 15px;
        margin-bottom: 15px;
    }
    .shape .flip {
        transform: rotate(180deg);
    }
    .shape .img-decor {
        position: absolute;
        object-fit: none;
        width: 100%;
    }
    .top {
        top: 0;
        margin-top: -50px;
    }
    .bottom {
        bottom: 0;
        margin-bottom: -50px;
    }
    section {
        position: relative;
        padding: 220px 0;
    }
</style>

<section id="section-banner">
    <div class="shape">
        <img 
            src="/proyek_undangan/assets/image/frame/frame-gbacf04b21_640_edit.png" 
            alt=""
            class="img-fluid img-decor top">
        <img 
            src="/proyek_undangan/assets/image/frame/frame-gbacf04b21_640_edit.png" 
            alt=""
            class="img-fluid img-decor flip bottom">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                    <div class="heading-text text-center">
                        <?php echo heading(humanize('change_the_date'), 1, 'style="line-height: 80px;"'); ?>
                        <?php echo heading(humanize('dear_family_and_friends'), 4, 'style="line-height: 40px;"'); ?>
                        <div class="p-2">
                            <?php echo heading(humanize('due_to_unforeseen_circumstances'), 4); ?>
                            <?php echo heading(humanize('the_wedding_of'), 4); ?>
                        </div>
                    </div>
                    <div class="couple-text text-center">
                        <div class="groom">
                            <?php echo heading(humanize('romeo'), 1, 'style="font-size: 96px"'); ?>
                        </div>
                        <div style="margin-top: -15px; margin-bottom: -15px;"> 
                            <?php echo heading('&amp;', 1); ?>
                        </div>
                        <div class="bride">
                            <?php echo heading(humanize('juliette'), 1, 'style="font-size: 96px"'); ?>
                        </div>
                    </div>
                    <div class="bottom-text text-center">
                        <div class="">
                            <?php echo heading('postponed', 2, 'style="font-size: 72px; color: rgba(240, 150, 166, 0.83); text-transform: uppercase"'); ?>
                        </div>
                        <div class="py-4">
                            <?php echo heading(humanize('we_hope_to_celebrate'), 5); ?>
                            <?php echo heading(humanize('our_wedding_with_you_soon'), 5); ?>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>

</section>