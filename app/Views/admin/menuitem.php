 <?= $this->extend('admin/layouts/main') ?>

<?= $this->section('content') ?>

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Create Menu Item</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Create Menu Item</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <?php if(isset($validation)): ?>
                                <div class="alert alert-danger">
                                    <?= $validation->listErrors() ?>
                                </div>
                            <?php endif; ?>
                            <?php if (session()->get('success')) : ?>
                              <div class="alert alert-success">
                                  <?= session()->get('success') ?>
                              </div>
                        <?php endif; ?>
                            <h4 class="card-title">Create Menu Item</h4>
                            <h5 class="card-subtitle">Adding item to Menu <?= esc($menu['menu_name']) ?> </h5>
                            <form class="form-horizontal m-t-30" method="post" action="" enctype="multipart/form-data">
                                <input type="hidden" name="res_id" id="" value="<?= esc($menu['res_id']) ?>">
                                <div class="form-group">
                                    <label>Item Name</label>
                                    <input type="text" name="name" value="<?= set_value('name') ?>" class="form-control" placeholder="9jachop">
                                </div>
                                <div class="form-group">
                                    <label>Item Description</label>
                                    <input type="text" name="desc" value="<?= set_value('desc') ?>" class="form-control" placeholder="9jachop">
                                </div>
                                <div class="form-group">
                                    <label>Item Price</label>
                                    <input type="number" name="price" value="<?= set_value('price') ?>" class="form-control" placeholder="9jachop">
                                </div>
                                <div class="form-group">
                                    <label>Item Image</label>
                                    <input type="file" name="theFile" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-success">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Nice admin. Designed and Developed by
                <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
<?= $this->endSection() ?>