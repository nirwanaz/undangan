    <div class="page-wrapper">
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-body card-block px-5">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Name</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" name="name" placeholder="Bundle Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Features</label>
                                        </div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <?php if(!empty($features)) {
                                                    foreach ($features as $feature) { 
                                                ?>
                                                <div class="checkbox">
                                                    <label for="<?php $feature->name ?>" class="form-check-label ">
                                                        <input type="checkbox" name="features" value="<?php echo $feature->feature_id ?>" class="form-check-input"><?php echo $feature->description ?>
                                                    </label>
                                                </div>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Price</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" name="price" placeholder="Price" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Masa Aktif</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="periods" id="periods" value="0.5y" checked>
                                                <label class="form-check-label" for="halfYear">6 month</label>
                                            </div> 
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="periods" id="periods" value="1y">
                                                <label class="form-check-label" for="oneYear">1 year</label>
                                            </div> 
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="periods" id="periods" value="3y">
                                                <label class="form-check-label" for="threeYear">3 year</label>
                                            </div>                                        
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm submit">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.submit').on('click', function () {
            const fd = new FormData()
            let bundleName = $('input[name="name"]').val()
            let bundlePrice = $('input[name="price"]').val()
            let bundlePeriod = $('input[name="periods"]:checked').val()

            let features = []
            
            $('input[name="features"]:checked').each(function () {
                features.push(this.value)
            })

            console.log(features)

            fd.append('name', bundleName)
            fd.append('price', bundlePrice)
            fd.append('period', bundlePeriod)
            fd.append('features', features)
            
            $.ajax({
            // Server to process the submit
            url: 'store',
            type: 'post',

            // Form Data
            data: fd,
            cache: false,
            contentType: false,
            processData: false,

            success: function (res) {
                let response = JSON.parse(res)
                if (response.data.success) {
                window.location.reload()
                } else {
                alert(response.data.msg)
                }
            }
            })
        })
    </script>

