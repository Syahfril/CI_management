<?= $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <form action="<?= base_url('adm/updateMatch/'.$match['id']) ?>" method="POST">
                        <?= csrf_field() ?>
                        
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Home</label>
                                        <input type="text" class="form-control" name="home" placeholder="Home Team" value="<?= $match['home'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Away</label>
                                        <input type="text" class="form-control" name="away" placeholder="Away Team" value="<?= $match['away'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Match Day</label>
                                        <input type="text" class="form-control" name="dates" placeholder="Match Day" value="<?= $match['dates'] ?>">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Match</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?= $this->endSection(); ?>
