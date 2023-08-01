<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section id="schedule" class="team section-bg">
        <div class="container" data-aos="fade-up" >

            <div class="section-title"  style="margin-top: 70px;">
            <h2>Schedule 2023</h2>
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