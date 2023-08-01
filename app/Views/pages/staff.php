<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section id="staff" class="team section-bg">
        <div class="container" data-aos="fade-up" >

            <div class="section-title"  style="margin-top: 70px;">
            <h2>Staff</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"></h4>
                            
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
                                    <?php foreach ($staffs as $staff): ?>
                                        <tr>
                                            <td><?= $staff['staff_name'] ?></td>
                                            <td><?= $staff['staff_dob'] ?></td>
                                            <td><?= $staff['position'] ?></td>
                                            <td><?= $staff['join_date'] ?></td>
                                            
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?= $this->endSection(); ?>