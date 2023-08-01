<?= $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('adm/updateStaff/'.$staff['id']) ?>" method="POST">
                            <?= csrf_field() ?>
                        
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label>staff Name</label>
                                        <input type="text" class="form-control" name="staff_name" value="<?= $staff['staff_name'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6" >
                                    <div class="form-group">
                                        <label>D.O.B</label>
                                        <input type="text" class="form-control" name="staff_dob" value="<?= $staff['staff_dob'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label>Position</label>
                                        <input type="text" class="form-control" name="position" value="<?= $staff['position'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label>join date</label>
                                        <input type="text" class="form-control" name="join_date" value="<?= $staff['join_date'] ?>">
                                    </div>
                                </div>

                                
                            </div>
                            <?php
                            if (session()->has('userId')) {
                                $userId = session('userId');
                            } else {
                                $userId = '';
                            }
                            ?>
                            <input type="hidden" name="admin_id" value="<?php echo $userId; ?>">
                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Staff</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?= $this->endSection(); ?>
