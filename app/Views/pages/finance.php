<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section id="finance" class="team section-bg">
        <div class="container" data-aos="fade-up" >

            <div class="section-title"  style="margin-top: 70px;">
            <h2>Finance Report</h2>
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
                                        
                                        <th>Income</th>
                                        <th>Expense</th>
                                        <th>Date</th>
                                        <th>Cash</th>
                       
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($finances as $finance) : ?>
                                    <tr>
                                        <td><?= $finance['income']; ?></td>
                                        <td><?= $finance['expense']; ?></td>
                                        <td><?= $finance['date']; ?></td>
                                        <td><?= $finance['cash']; ?></td>
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