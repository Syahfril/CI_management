<?= $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="<?= base_url('adm/insertStaff') ?>">
                            <div class="row">
                                <!-- staff_name, staff_dob, position, join_date, contract_duration, status, admin_id -->
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label>staff Name</label>
                                        <input type="text" class="form-control" name="staff_name">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label>D.O.B</label>
                                        <input type="text" class="form-control" name="staff_dob">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label>Position</label>
                                        <input type="text" class="form-control" name="position">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label>join date</label>
                                        <input type="date" class="form-control" name="join_date">
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
                            <button type="submit" class="btn btn-info btn-fill pull-right">Add staff</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Staff Record</h4>
                        
                        <!-- <p class="card-category">Here is a subtitle for this table</p> -->
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>dob</th>
                                    <th>position</th>
                                    <th>join date</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                            <!-- staff_name, staff_dob, position, join_date, contract_duration, status, admin_id -->
                                    <?php foreach ($staffs as $staff): ?>
                                        <tr>
                                            <td><?= $staff['staff_name'] ?></td>
                                            <td><?= $staff['staff_dob'] ?></td>
                                            <td><?= $staff['position'] ?></td>
                                            <td><?= $staff['join_date'] ?></td>
                                            
                                            <td class="td-actions text-right">
                                                <a href="<?= base_url('adm/updateStaff/'.$staff['id']) ?>" rel="tooltip" title="Edit staff" class="btn btn-info btn-simple btn-link">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?= base_url('adm/deleteStaff/'.$staff['id']) ?>" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>
