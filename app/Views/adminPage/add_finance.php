<?= $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1>Add New Finance Record</h1>

                    <form method="post" action="/finance/store">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="income">Income:</label>
                                    <input type="number" class="form-control" name="income" id="income">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="expense">Expense:</label>
                                    <input type="number" class="form-control" name="expense" id="expense">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Date:</label>
                                    <input type="date" class="form-control" name="date" id="date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <?php
                                  if (session()->has('userId')) {
                                      $userId = session('userId');
                                     
                                  } else {
                                      $userId = '';
                                  }
                                  ?>
                                <input type="hidden" name="admin_id" value="<?php echo $userId; ?>">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info btn-fill pull-right">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
