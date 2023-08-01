<?= $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>
<head>
    <title>Edit Image</title>
</head>
<body>
    <h1>Edit Image</h1>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="/image/update/<?= $image['id']; ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label for="image">Image:</label>
                                        <input type="file" class="form-control" name="image" id="image"><br>
                                        <!-- Add PHP code to display the existing image -->
                                        <img src="<?= base_url('uploads/' . $image['image']); ?>" width="100" height="100">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label for="title">Title:</label>
                                        <input type="text" class="form-control" name="title" id="title" value="<?= $image['title']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
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
                            <input type="submit" class="btn btn-info btn-fill pull-right" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?= $this->endSection(); ?>
