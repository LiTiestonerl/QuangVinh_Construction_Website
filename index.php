<?php
$pageTitle = 'Xây Dựng Quang Vinh - Kiến Tạo Không Gian Sống Đẳng Cấp';
$bodyClass = 'index-page';
include 'includes/header.php';
?>

<main class="main">

  <?php include 'includes/hero-slider.php'; ?>
  <?php include 'includes/quote-form.php'; ?>
  <?php include 'includes/featured-projects.php'; ?>
  <?php include 'includes/services-list.php'; ?>
  <!-- phần projects (portfolio) vẫn giữ trong index vì nó là nội dung đặc thù của trang chủ -->
  <section id="projects" class="projects section py-5 bg-light">
    <div class="container section-title" data-aos="fade-up">
      <h2>Những dự án đã làm</h2>
      <p>Hình ảnh thực tế các công trình do Quang Vinh thi công.</p>
    </div>

    <div class="container">
      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
        <ul class="portfolio-filters isotope-filters d-flex justify-content-center flex-wrap" data-aos="fade-up">
          <li data-filter="*" class="filter-active">Tất cả</li>
          <li data-filter=".filter-maithai">Mái Thái</li>
          <li data-filter=".filter-mainhat">Mái Nhật</li>
          <li data-filter=".filter-hiendai">Hiện đại</li>
          <li data-filter=".filter-nhaxuong">Nhà xưởng</li>
        </ul>

        <div class="row gy-4 isotope-container" data-aos="fade-up">
          <!-- Dự án anh Nhật (hiện đại) -->
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hiendai">
            <div class="portfolio-content">
              <img src="assets/img/projects/a-nhat/1.jpg" class="img-fluid" width="2000" height="1700" loading="lazy" decoding="async" alt="Nhà anh Nhật">
              <div class="portfolio-info p-3">
                <h4>Nhà anh Nhật (Phú Mỹ)</h4>
                <p>Thiết kế hiện đại, 3 phòng ngủ, hoàn thiện 2024</p>
                <a href="assets/img/projects/a-nhat/1.jpg" title="Nhà anh Nhật" data-gallery="portfolio-gallery"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="project-details.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>

          <!-- Dự án anh Sang (mái Thái) -->
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-maithai">
            <div class="portfolio-content">
              <img src="assets/img/projects/a-sang/1.jpg" class="img-fluid" width="2560" height="1440" loading="lazy" decoding="async" alt="Nhà anh Sang">
              <div class="portfolio-info p-3">
                <h4>Nhà anh Sang (Bến Cát)</h4>
                <p>Biệt thự mái Thái 2 tầng, sân vườn rộng</p>
                <a href="assets/img/projects/a-sang/1.jpg" title="Nhà anh Sang" data-gallery="portfolio-gallery"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="project-details.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>

          <!-- Dự án A Tony (mái Nhật) -->
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-mainhat">
            <div class="portfolio-content">
              <img src="assets/img/projects/ATONY/2.jpg" class="img-fluid" width="2400" height="3500" loading="lazy" decoding="async" alt="Nhà anh Tony">
              <div class="portfolio-info p-3">
                <h4>Nhà anh Tony (Thủ Dầu Một)</h4>
                <p>Nhà ống 3 tầng mái Nhật, nội thất gỗ tự nhiên</p>
                <a href="assets/img/projects/ATONY/2.jpg" title="Nhà anh Tony" data-gallery="portfolio-gallery"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="project-details.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>

          <!-- Dự án chị Lệ (mái Thái) -->
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-maithai">
            <div class="portfolio-content">
              <img src="assets/img/projects/chi-le/1.jpg" class="img-fluid" width="4000" height="2700" loading="lazy" decoding="async" alt="Nhà chị Lệ">
              <div class="portfolio-info p-3">
                <h4>Nhà chị Lệ (Bến Cát)</h4>
                <p>Nhà cấp 4 mái Thái, 3 phòng ngủ, sân trước rộng</p>
                <a href="assets/img/projects/chi-le/1.jpg" title="Nhà chị Lệ" data-gallery="portfolio-gallery"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="project-details.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>

          <!-- Dự án anh Lai Hùng (nhà xưởng) -->
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-nhaxuong">
            <div class="portfolio-content">
              <img src="assets/img/projects/lai-hung/1.jpg" class="img-fluid" width="2400" height="1700" loading="lazy" decoding="async" alt="Xưởng anh Hùng">
              <div class="portfolio-info p-3">
                <h4>Xưởng anh Hùng (KCN Mỹ Phước)</h4>
                <p>Nhà xưởng tiền chế 500m², cao 8m</p>
                <a href="assets/img/projects/lai-hung/1.jpg" title="Xưởng anh Hùng" data-gallery="portfolio-gallery"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="project-details.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>

          <!-- Dự án nhà mái Nhật khác -->
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-mainhat">
            <div class="portfolio-content">
              <img src="assets/img/projects/nha-mai-nhat/1.jpg" class="img-fluid" width="4000" height="2700" loading="lazy" decoding="async" alt="Nhà mái Nhật">
              <div class="portfolio-info p-3">
                <h4>Nhà chú Tư (Phú An)</h4>
                <p>Nhà vườn 1 tầng mái Nhật, diện tích 8x20m</p>
                <a href="assets/img/projects/nha-mai-nhat/1.jpg" title="Nhà chú Tư" data-gallery="portfolio-gallery"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="project-details.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>

          <!-- Dự án Uyên (hiện đại) -->
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hiendai">
            <div class="portfolio-content">
              <img src="assets/img/projects/UYEN/1.jpg" class="img-fluid" width="2500" height="1500" loading="lazy" decoding="async" alt="Nhà chị Uyên">
              <div class="portfolio-info p-3">
                <h4>Nhà chị Uyên (Chánh Nghĩa)</h4>
                <p>Nhà phố 3 tầng, phong cách tối giản, nội thất hiện đại</p>
                <a href="assets/img/projects/UYEN/1.jpg" title="Nhà chị Uyên" data-gallery="portfolio-gallery"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="project-details.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'includes/testimonials-slider.php'; ?>
  <?php include 'includes/recent-blog-posts.php'; ?>

</main>

<?php include 'includes/footer.php'; ?>