<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo isset($pageTitle) ? $pageTitle : 'Xây Dựng Quang Vinh - Kiến Tạo Không Gian Sống Đẳng Cấp'; ?></title>
  <meta name="description"
    content="Công ty TNHH MTV Xây Dựng Quang Vinh chuyên thi công nhà ở, xây dựng phần thô, sửa nhà trọn gói, sửa chữa nhà xưởng tại Bến Cát, Bình Dương. Uy tín, chất lượng, giá cả cạnh tranh.">
  <meta name="keywords"
    content="xây dựng quang vinh, xây nhà trọn gói, sửa nhà, nhà xưởng tiền chế, bến cát, bình dương">

  <!-- Favicons -->
  <link href="assets/img/logo/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File (từ theme gốc) -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Custom CSS cho cải thiện UX/UI -->
  <link href="assets/css/custom.css" rel="stylesheet">

</head>

<body class="<?php echo isset($bodyClass) ? $bodyClass : 'index-page'; ?>">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <!-- Top Bar (sẽ ẩn khi cuộn) -->
    <div class="top-bar text-center py-2">
      <p class="mb-0 small">
        <i class="fas fa-phone-alt me-2"></i> 0392 217 862
        <span class="mx-2">|</span>
        <i class="fas fa-envelope me-2"></i> xaydungqv@gmail.com
        <span class="mx-2">|</span>
        <i class="fas fa-map-marker-alt me-2"></i> KDC Mỹ Phước 3, TP. Bến Cát, Bình Dương
      </p>
    </div>

    <!-- Middle Bar -->
    <div class="container d-flex align-items-center justify-content-between">
      <!-- Logo -->
      <div class="logo">
        <img src="assets/img/logo/500 x 200.svg" alt="Quang Vinh Logo" class="img-fluid">
      </div>

      <!-- Navigation Menu -->
      <nav id="navmenu" class="navmenu">
        <ul class="d-flex list-unstyled m-0">
          <li><a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?> px-3">Trang Chủ</a></li>
          <li><a href="about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?> px-3">Về Chúng Tôi</a></li>
          <li><a href="services.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?> px-3">Dịch Vụ</a></li>
          <li><a href="projects.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'projects.php' ? 'active' : ''; ?> px-3">Dự Án</a></li>
          <li><a href="blog.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'blog.php' ? 'active' : ''; ?> px-3">Blog</a></li>
          <li><a href="contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?> px-3">Liên Hệ</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <!-- Icon liên hệ nổi -->
  <?php include 'includes/floating-contact.php'; ?>