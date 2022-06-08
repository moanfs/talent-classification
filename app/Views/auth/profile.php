<?= $this->extend('layout/template') ?>

<?= $this->Section('content') ?>
<div class="container-fluid">

    <div class="row gutters-sm">
        <!-- image profile -->
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="<?= base_url('assets/img/default.svg'); ?>" class="rounded-circle" width="150">
                        <div class="mt-3">
                            <h4>Team DPP</h4>
                            <p class="text-secondary mb-1"></p>
                            <p class="text-muted font-size-sm">SDM Telkom University</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end image profile -->

        <!-- name -->
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            dasdasdada
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            dasdasdsdas
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Mobile</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            (320) 380-4539
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            Bay Area, San Francisco, CA
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit-profile">Edit Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end name -->
    </div>
</div>
<?= $this->endSection(); ?>