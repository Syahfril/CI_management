<?= $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="<?= base_url('adm/insertPlayer') ?>">
                            <div class="row">
                                <!-- player_name, player_dob, position, join_date, contract_duration, status, admin_id -->
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label>Player Name</label>
                                        <input type="text" class="form-control" name="player_name">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label>D.O.B</label>
                                        <input type="text" class="form-control" name="player_dob">
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
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label>contract duration</label>
                                        <input type="text" class="form-control" name="contract_duration">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label>status</label>
                                        <input type="text" class="form-control" name="status">
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



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Player Record</h4>
                        
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
                                    <th>contract duration</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <!-- player_name, player_dob, position, join_date, contract_duration, status, admin_id -->
                                    <?php foreach ($players as $player): ?>
                                        <tr>
                                            <td><?= $player['player_name'] ?></td>
                                            <td><?= $player['player_dob'] ?></td>
                                            <td><?= $player['position'] ?></td>
                                            <td><?= $player['join_date'] ?></td>
                                            <td><?= $player['contract_duration'] ?></td>
                                            <td><?= $player['status'] ?></td>
                                            <td class="td-actions text-right">
                                                <a href="<?= base_url('adm/updatePlayer/'.$player['id']) ?>" rel="tooltip" title="Edit Player" class="btn btn-info btn-simple btn-link">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?= base_url('adm/deletePlayer/'.$player['id']) ?>" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
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
