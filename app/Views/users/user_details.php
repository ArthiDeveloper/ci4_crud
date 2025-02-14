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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Users</a></li>
                            <li class="breadcrumb-item active">Add</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Users</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <form action="<?= base_url().'addUser' ?>" method="POST">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-xl-6">

                                <div class="mb-3">
                                    <label for="username" class="form-label">Name</label>
                                    <input type="text" id="username" name="uname" class="form-control" placeholder="Enter user name">
                                    <?php if (isset($validation) && $validation->hasError('uname')): ?>
                                        <div style="color: red;">
                                            <?= $validation->getError('uname') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="mb-3">
                                    <label for="email-id" class="form-label">Email ID</label>
                                    <input type="text" id="email-id" name="uemail" class="form-control" placeholder="Enter Email ID">
                                    <?php if (isset($validation) && $validation->hasError('uemail')): ?>
                                        <div style="color: red;">
                                            <?= $validation->getError('uemail') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="mb-3">
                                    <label for="whatspp-number" class="form-label">WhatsApp Number</label>
                                    <input type="text" id="whatspp-number" name="umobile" class="form-control" placeholder="Enter WhatsApp Number">
                                    <?php if (isset($validation) && $validation->hasError('umobile')): ?>
                                        <div style="color: red;">
                                            <?= $validation->getError('umobile') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="mb-3">
                                    <label for="gst-number" class="form-label">GST Number</label>
                                    <input type="text" id="gst-number" name="gstNum" class="form-control" placeholder="Enter GST Number">
                                    <?php if (isset($validation) && $validation->hasError('gstNum')): ?>
                                        <div style="color: red;">
                                            <?= $validation->getError('gstNum') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="mb-3">
                                    <label for="fssai-number" class="form-label">FSSAI Number</label>
                                    <input type="text" id="fssai-number" name="fssaiNum" class="form-control" placeholder="Enter FSSAI Number">
                                    <?php if (isset($validation) && $validation->hasError('fssaiNum')): ?>
                                        <div style="color: red;">
                                            <?= $validation->getError('fssaiNum') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="mb-3">
                                    <label for="advertising-requirement" class="form-label">Advertising Requirement</label>
                                    <textarea class="form-control" id="advertising-requirement" name="advers" rows="5" placeholder="Enter some brief about service.."></textarea>
                                    <?php if (isset($validation) && $validation->hasError('advers')): ?>
                                        <div style="color: red;">
                                            <?= $validation->getError('advers') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                            </div> <!-- end col-->

                            <div class="col-xl-6">
                                
                                <div class="mb-3">
                                    <label for="company-overview" class="form-label">Services</label>
                                    
                                    <select class="form-control select2" data-toggle="select2" name="service" id="service">
                                        <option>Select</option>
                                        <?php 
                                        foreach ($services as $service): ?>
                                            <option value="<?= $service['id']; ?>"><?= $service['service_name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php if (isset($validation) && $validation->hasError('service')): ?>
                                        <div style="color: red;">
                                            <?= $validation->getError('service') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="mb-3">
                                    <label for="company-overview" class="form-label">Service Requirement</label>
                                    <textarea class="form-control" name="servicedesc" id="serv-desc"></textarea>
                                    <?php if (isset($validation) && $validation->hasError('servicedesc')): ?>
                                        <div style="color: red;">
                                            <?= $validation->getError('servicedesc') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="mb-3">
                                    <label for="expire-date" class="form-label">Date</label>
                                    <input class="form-control" id="expire-date" type="date" name="expdate">
                                </div>
                                <div class="mb-3">
                                    <label for="companyname" class="form-label">Company Name</label>
                                    <input type="text" id="companyname" name="cname" class="form-control" placeholder="Enter Company name">
                                    <?php if (isset($validation) && $validation->hasError('cname')): ?>
                                        <div style="color: red;">
                                            <?= $validation->getError('cname') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="mb-3">
                                    <label for="company-address" class="form-label">Company Address</label>
                                    <textarea class="form-control" name="caddress" id="company-address" rows="5" placeholder="Enter some brief about company.."></textarea>
                                    <?php if (isset($validation) && $validation->hasError('caddress')): ?>
                                        <div style="color: red;">
                                            <?= $validation->getError('caddress') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary fright">Save</button>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#service').change(function() {
            var serviceId = $(this).val();
            // Clear previous subcategories
            $('#serv-desc').html('<option value="">Select a Service Description</option>');
            
            if (serviceId) {
                $.ajax({
                    url: '<?= site_url('serviceDesc') ?>',
                    method: 'POST',
                    data: { service_id: serviceId },
                    dataType: 'json',
                    success: function(response) {
                        $.each(response, function(index,data) {
                            $('#serv-desc').val(data.service_description);
                        });
                    },
                    error: function() {
                        alert('Unable to load service description.');
                    }
                });
            }
        });
    });
</script>
<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->
<?= $this->endSection() ?>