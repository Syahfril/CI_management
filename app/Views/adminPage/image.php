<?= $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Image List</h4>
                        <a href="/image/create" class="btn btn-primary">Add New Image</a>
                    </div>
                </div>
                <div class="card-body table-full-width table-responsive">
                <?php if (!empty($images)) : ?>
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($images as $image) : ?>
                                <tr>
                                    <td><img src="<?= base_url('uploads/' . $image['image']); ?>" width="100" height="100"></td>
                                    <td><?= $image['title']; ?></td>
                                    <td>
                                        <a href="/image/edit/<?= $image['id']; ?>" class="btn btn-primary">Edit</a>
                                        <a href="/image/delete/<?= $image['id']; ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <p>No images found.</p>
                <?php endif; ?>
            </div>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
