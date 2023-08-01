<?= $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>

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
                                    <th>Home Team</th>
                                    <th>Away Team</th>
                                    <th>Match Day</th>
                                    <th>Home Score</th>
                                    <th>Away Score</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($matches as $match): ?>
                                <tr>
                                    <td><?= $match->home ?></td>
                                    <td><?= $match->away ?></td>
                                    <td><?= $match->dates ?></td>
                                    <td>
                                        <?php if ($match->home_score !== null): ?>
                                            <?= $match->home_score ?>
                                        <?php else: ?>
                                            <em>Data not input yet</em>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if ($match->away_score !== null): ?>
                                            <?= $match->away_score ?>
                                        <?php else: ?>
                                            <em>Data not input yet</em>
                                        <?php endif; ?>
                                    </td>
                                    <td class="td-actions text-right">
                                        <a href="<?= base_url('adm/updateScore/'.$match->id) ?>" rel="tooltip" title="Edit" class="btn btn-info btn-simple btn-link">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="<?= base_url('adm/deleteScore/'.$match->score_id) ?>" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
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