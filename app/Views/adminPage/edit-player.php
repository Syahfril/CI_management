<?= $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('adm/updatePlayer/'.$player['id']) ?>" method="POST">
                            <?= csrf_field() ?>
                        
                            <div class="row">
                                <!-- player_name, player_dob, position, join_date, contract_duration, status, admin_id -->
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label>Player Name</label>
                                        <input type="text" class="form-control" name="player_name" value="<?= $player['player_name'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6" >
                                    <div class="form-group">
                                        <label>D.O.B</label>
                                        <input type="text" class="form-control" name="player_dob" value="<?= $player['player_dob'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label>Position</label>
                                        <input type="text" class="form-control" name="position" value="<?= $player['position'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label>join date</label>
                                        <input type="text" class="form-control" name="join_date" value="<?= $player['join_date'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label>contract duration</label>
                                        <input type="text" class="form-control" name="contract_duration" value="<?= $player['contract_duration'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label>status</label>
                                        <input type="text" class="form-control" name="status" value="<?= $player['status'] ?>">
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
                            <button type="submit" class="btn btn-info btn-fill pull-right">Add Player</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?= $this->endSection(); ?>
