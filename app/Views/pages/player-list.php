<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section id="Top Player" class="team section-bg">
            <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>Top Player 2023</h2>
            <p>The "Top Player" section of Jupiter FC showcases our elite performers who embody excellence and set new standards on the field. With exceptional skills, relentless dedication, and outstanding leadership, these players consistently deliver extraordinary performances, inspiring teammates and leaving spectators in awe. They represent the pinnacle of talent within our club, demonstrating the spirit and commitment to excellence that defines Jupiter FC.</p>
            </div>

            <div class="row">

            <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="member d-flex align-items-start">
                <div class="pic"><img src="http://localhost:8080/assets-frontend/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>Walter White</h4>
                    <span>Goalkeeper '1</span>
                    <p>"Defenders of the Net"</p>
                    <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="member d-flex align-items-start">
                <div class="pic"><img src="http://localhost:8080/assets-frontend/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>Zuck Madeek</h4>
                    <span>Defender '12</span>
                    <p>"Strong as a Wall, Unyielding as Steel"</p>
                    <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="member d-flex align-items-start">
                <div class="pic"><img src="http://localhost:8080/assets-frontend/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>William Anderson</h4>
                    <span>Midfielder '8</span>
                    <p>"Masters of the Midfield, Architects of Play"</p>
                    <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="member d-flex align-items-start">
                <div class="pic"><img src="http://localhost:8080/assets-frontend/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>Jhony Virtue</h4>
                    <span>Striker '6</span>
                    <p>"Precision, Power, and Scoring Glory"</p>
                    <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                </div>
                </div>
            </div>

        </div>

            <div class="container-fluid" style="margin-top: 100px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Player List</h4>
                            
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