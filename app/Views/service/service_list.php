<?= $this->extend('layout/base') ?>

<?= $this->section('content') ?>
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
                            <li class="breadcrumb-item active">List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">List of Services</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="offset-sm-9 col-sm-3">
                                <a href="createService" class="btn btn-danger mb-2 fright"><i class="mdi mdi-plus-circle me-2"></i> Add Service</a>
                            </div>
                            <!-- <div class="col-sm-7">
                                <div class="text-sm-end">
                                    <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                    <button type="button" class="btn btn-light mb-2">Export</button>
                                </div>
                            </div> -->
                            <!-- end col-->
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered table-striped dt-responsive nowrap w-100" id="products-datatable">
                                <thead>
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Service Name</th>
                                        <th>Service Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                
                                <tbody> 
                                    <?php foreach($services as $service): ?>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user"><?= $service['service_name']; ?></td>
                                        <td><?= $service['service_description']; ?></td>
                                        <td>
                                            <a href="editService/<?= $service['id']?>" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="delService/<?= $service['id']?>" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->

</div>
<?= $this->endSection() ?>