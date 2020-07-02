    <?php if ($user['level'] == 'superadmin'): ?>
<div class="row text-center">
    <div class="col-sm-6 col-xl-3">
        <div class="card-box widget-flat border-custom bg-custom text-white">
            <i class="fi-tag"></i>
            <h3 class="m-b-10"><?= $total_user ?></h3>
            <p class="text-uppercase m-b-5 font-13 font-600">Total User</p>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card-box bg-primary widget-flat border-primary text-white">
            <i class="fi-archive"></i>
            <h3 class="m-b-10"><?= $total_transaksi ?></h3>
            <p class="text-uppercase m-b-5 font-13 font-600">Total Transaksi</p>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card-box widget-flat border-success bg-success text-white">
            <i class="fi-help"></i>
            <h3 class="m-b-10"><?= $total_hadiah ?></h3>
            <p class="text-uppercase m-b-5 font-13 font-600">Total Hadiah</p>
        </div>
    </div>

</div>
<?php else: ?>
<div class="row">
    <div class="col-lg-4">
        <div class="text-center card-box">

            <div class="member-card pt-2 pb-2">
                <div class="thumb-lg member-thumb m-b-10 mx-auto">
                    <img src="<?= base_url('file/'.$user['image']) ?>" class="rounded-circle img-thumbnail" alt="profile-image">
                </div>

                <div class="">
                    <h4 class="m-b-5"><?= $user['full_name'] ?></h4>
                    <p class="text-muted"><?= $user['level'] ?></p>
                </div>
                <!-- <button type="button" class="btn btn-primary m-t-20 btn-rounded btn-bordered waves-effect w-md waves-light">Message Now</button> -->

                <div class="mt-4">
                    <div class="row">
                        <div class="col-4">
                            <div class="mt-3">
                                <h4 class="m-b-5"><?= $total_transaksi_peruser; ?></h4>
                                <p class="mb-0 text-muted">Total Transaksi</p>
                            </div>
                        </div>
                        <div class="col-4">
                            
                        </div>
                        <div class="col-4">
                            <div class="mt-3">
                                <h4 class="m-b-5"><?= $user['point'] ?></h4>
                                <p class="mb-0 text-muted">Total Point</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div> <!-- end col -->
</div>
<?php endif ?>

