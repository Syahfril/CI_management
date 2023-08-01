<?= $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <form action="<?= base_url('adm/updateScore/'.$match['id']) ?>" method="POST">
                        <?= csrf_field() ?>
                        
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Home</label>
                                        <span class="form-control"><?= $match['home'] ?></span>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Away</label>
                                        <span class="form-control"><?= $match['away'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Match Day</label>
                                        <span class="form-control"><?= $match['dates'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Home Score</label>
                                        <input type="text" class="form-control" name="home_score" placeholder="Home Team Score" value="<?= $match['home_score'] ?? '' ?>">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Away Score</label>
                                        <input type="text" class="form-control" name="away_score" placeholder="Away Team Score" value="<?= $match['away_score'] ?? '' ?>">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Score</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?= $this->endSection(); ?>
