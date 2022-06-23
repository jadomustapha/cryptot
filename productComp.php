 <style>
    .card{
        background: #ccc;
        margin-bottom: 1rem;
        border-radius:4px;
    }
    .row{
        margin-left: 2rem;
        margin-right: 2rem;
    }
    .card-footer {
        background: rgba(0,0,0, 0.7);
        padding-bottom: 1rem;
    }
    .btn-btn{
        width:90%;
        border-radius:4px;
    }
 </style>
 <div class="overlay">
    <div class="row">
        <?php
            for($i = 1; $i<=10; $i++){
                ?>
                <div class="col-md-2 col-sm-6 col-xl-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <p>
                                <img src="images/download.png" height="180" alt="">
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <div class="card-content text-center text-primary">
                                <strong>Lorem, ipsum dolor.</strong>
                            </div>
                            <a href="payment.php?proid=<?php print $i;?>&price=343" class="btn btn-success btn-btn rounded">Buy Now $5</a>
                        </div>
                    </div>
                </div> 
                <?php
            }
        ?>
    </div>
</div> 