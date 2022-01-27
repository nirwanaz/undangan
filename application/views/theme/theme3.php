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
        z-index: -1;
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-image: url('/proyek_undangan/assets/image/frame/frame-gbacf04b21_640_edit.png');

    }
    .banner::after {
        content: " ";
        position: absolute;
        bottom: 0;
        z-index: -1;
        transform: rotate(180deg);
        width: 100%;
        height: 100%;
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
    }
    .bottom {
        bottom: 0;
    }
    section {
        position: relative;
        padding: 220px 0;
    }
    .frame-border {
        border: 2px solid;
        border-radius: 10%;
    }

    @media only screen and (max-width: 600px){

        section {
            padding: 110px 0;
        }

        .img-decor {
            object-fit: cover !important;
        }

        .heading-text, .couple-text, .bottom-text {
            margin-top: -15px;
            margin-bottom: -15px;
        }
    }

    @media only screen and (max-width: 396px) {
        .top {
            margin-top: 10px;
        }

        .bottom {
            margin-bottom: 10px;
        }
    }

    @media only screen and (min-width: 1100px){
        .top {
            margin-top: -50px !important;
        }

        .bottom {
            margin-bottom: -50px !important;
        }
    }

    @media only screen and (min-width: 800px) and (max-width: 840px) {
        .top {
            margin-top: 20px;
        }

        .bottom {
            margin-bottom: 20px;
        }
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
            <div class="col-md-12 col-lg-6 frame-border">
                <div class="heading-text text-center">
                    <?php echo heading(humanize('change_the_date'), 1, 'style="line-height: 80px; letter-spacing: .12em"'); ?>
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
                    <div class="p-2" style="letter-spacing: .15em;">
                        <?php echo heading('postponed', 2, 'style="font-size: 48px; color: rgba(240, 150, 166, 0.83); text-transform: uppercase"'); ?>
                    </div>
                    <div class="py-4" style="letter-spacing: .12em;">
                        <?php echo heading(humanize('we_hope_to_celebrate'), 5); ?>
                        <?php echo heading(humanize('our_wedding_with_you_soon'), 5); ?>
                    </div>
                </div>
                        
            </div>
        </div>
    </div>

</section>