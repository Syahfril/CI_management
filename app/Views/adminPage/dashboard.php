<?= $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="adm/insertMatch">
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Home</label>
                                        <input type="text" class="form-control" name="home" placeholder="Home Team">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Away</label>
                                        <input type="text" class="form-control" name="away" placeholder="Away Team">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Match Day </label>
                                        <input type="text" class="form-control" name="dates" placeholder="Match Day">
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
                            <button type="submit" class="btn btn-info btn-fill pull-right">Add Match</button>
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
                        <h4 class="card-title">Match Record</h4>
                        
                        <!-- <p class="card-category">Here is a subtitle for this table</p> -->
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Home</th>
                                    <th>Away</th>
                                    <th>Match Day</th>
                                </tr>
                            </thead>
                            <tbody>

                                    <?php foreach ($matches as $match): ?>
                                        <tr>
                                            <td><?= $match['home'] ?></td>
                                            <td><?= $match['away'] ?></td>
                                            <td><?= $match['dates'] ?></td>
                                            <td class="td-actions text-right">
                                                <a href="<?= base_url('adm/updateMatch/'.$match['id']) ?>" rel="tooltip" title="Edit" class="btn btn-info btn-simple btn-link">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?= base_url('adm/deleteMatch/'.$match['id']) ?>" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
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
