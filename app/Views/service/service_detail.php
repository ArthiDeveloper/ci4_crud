<?= $this->extend('layout/base') ?>

<?= $this->section('content') ?>
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Horecanation</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Services</a></li>
                            <li class="breadcrumb-item active">Add</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Service</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <form action="<?= base_url().'addService' ?>" method="POST">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="servicename" class="form-label">Service Name</label>
                                    <input type="text" id="servicename" name="sname" 
                                    value="<?= set_value('sname', isset($service) ? $service['service_name'] : '') ?>" class="form-control" placeholder="Enter Service Name">
                                </div>
                            </div>
                            <div class="col-xl-2">
                                <div class="mb-3">
                                    <label for="cold" class="form-label">cold</label>
                                    <input type="text" id="cold" name="cold" class="form-control" placeholder="Days">
                                </div></div>
                            <div class="col-xl-2">
                                <div class="mb-3">
                                    <label for="warm" class="form-label">Warm</label>
                                    <input type="text" id="warm" name="warm" class="form-control" placeholder="Days">
                                </div></div>
                            <div class="col-xl-2">
                                <div class="mb-3">
                                    <label for="hot" class="form-label">Hot</label>
                                    <input type="text" id="hot" name="hot" class="form-control" placeholder="Days">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="mb-3">
                                    <label for="service-description" class="form-label">Service Description</label>
                                    <textarea class="form-control" id="service-description" name="sdescription" rows="5" placeholder="Service Description"></textarea>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        </form>
    </div> <!-- container -->

</div> <!-- content -->

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->
<?= $this->endSection() ?>