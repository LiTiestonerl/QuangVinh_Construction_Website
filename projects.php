<?php
$pageTitle = 'Dự Án - Xây Dựng Quang Vinh';
$bodyClass = 'projects-page';
include 'includes/header.php';
?>

<main class="main">

  <section class="page-title bg-primary text-white py-5">
    <div class="container text-center">
      <h1>Dự Án Đã Thực Hiện</h1>
      <p>Những công trình tiêu biểu của Xây Dựng Quang Vinh</p>
    </div>
  </section>

  <?php include 'includes/featured-projects.php'; ?>

  <!-- Có thể thêm bộ lọc portfolio tương tự trang chủ -->
  <section class="portfolio py-5">
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
          <!-- Lặp lại các project tương tự index.php -->
          <!-- (bạn có thể sao chép phần portfolio từ index vào đây) -->
        </div>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>