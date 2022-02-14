<section id="section-gift">
    <div class="container">
        <div class="row">
            <div class="col-md border border-2 rounded p-4 my-4 text-center">
                <h1 class="text-capitalize">hadiah</h1>
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
                                        copy number
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
</section>
<script>
    function copy(number) {
        navigator.clipboard.writeText(number);
        alert(`nomer rekening ${number} telah dicopy`);
    }
</script>