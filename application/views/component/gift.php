<section id="section-gift">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">
                <div class="gift">
                    <div class="gift-header">
                        <h1 class="text-capitalize">hadiah</h1>
                    </div>
                    <div class="gift-content">
                        <div class="gift-content-header">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Sed in hendrerit neque. Donec in nibh vel est mattis aliquet. 
                                Etiam dictum, nisi in iaculis euismod, turpis ipsum varius 
                                tortor, rutrum tristique justo metus sed quam. 
                            </p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="card my-4 p-4">
                                    <?php
                                        $mandiri['src'] = 'assets/image/bank/mandiri-logo.png';
                                        $mandiri['alt'] = 'bank-mandiri';
                                        $mandiri['class'] = 'card-img-top';

                                        echo img($mandiri);
                                    ?>
                                    <div class="card-body">
                                        <h5 class="card-title text-capitalize"><?php echo $bank_name ? $bank_name : 'mandiri' ?></h5>
                                        <p class="card-text">
                                            <?php echo $bank_no_account ? $bank_no_account : '11123214432' ?>&nbsp;
                                            <span class="text-uppercase link-primary" style="cursor: pointer" onclick="copy(<?php echo $bank_no_account ?>)">
                                                copy
                                            </span>
                                        </p>
                                        <p class="card-title">a.n:&nbsp;<span class="text-uppercase">miftakhul</span></p>
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
<script>
    function copy(number) {
        navigator.clipboard.writeText(number);
        alert(`nomer rekening ${number} telah dicopy`);
    }
</script>