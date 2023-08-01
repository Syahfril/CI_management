<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title" style="margin-top: 70px;">
      <h2>Gallery</h2>
      <p>The Jupiter FC gallery is a visual journey that captures the essence of our club's memorable moments. From electrifying match highlights to behind-the-scenes glimpses, our gallery offers a collection of captivating images that showcase the passion, skill, and unity within our team. Each photograph is a testament to the dedication and hard work of our players, creating lasting memories that celebrate our shared love for the beautiful game.</p>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

      <?php if (!empty($images)) : ?>
        <?php foreach ($images as $image) : ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img">
              <div style="position: relative;">
                <img src="<?= base_url('uploads/' . $image['image']); ?>" alt="<?= $image['title']; ?>" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.6); display: flex; flex-direction: column; justify-content: center; align-items: center; opacity: 0; transition: opacity 0.3s ease;">
                </div>
              </div>
            </div>
            <div class="portfolio-info">
              <h4><?= $image['title']; ?></h4>
              
              <a href="<?= base_url('uploads/' . $image['image']); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= $image['title']; ?>"><i class="bx bx-plus"></i></a>
              
            </div>
          </div>
        <?php endforeach; ?>
      <?php else : ?>
        <p>No images found.</p>
      <?php endif; ?>

    </div>

  </div>
</section>





<?= $this->endSection(); ?>