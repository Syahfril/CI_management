<?= $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Finance Records</h4>
                    <a href="/finance/create" class="btn btn-primary">Add New Record</a>
                  </div>
                </div>
                <div class="card-body table-full-width table-responsive">
                    <?php if (!empty($finances)) : ?>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    
                                    <th>Income</th>
                                    <th>Expense</th>
                                    <th>Date</th>
                                    <th>Cash</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($finances as $finance) : ?>
                                    <tr>
                                        <td><?= $finance['income']; ?></td>
                                        <td><?= $finance['expense']; ?></td>
                                        <td><?= $finance['date']; ?></td>
                                        <td><?= $finance['cash']; ?></td>
                                        <td>
                                            <a href="<?= base_url('finance/delete/'.$finance['id']) ?>" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                              <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php else : ?>
                        <p>No finance records found.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>
