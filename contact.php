<?php
$pageTitle = 'Liên Hệ - Xây Dựng Quang Vinh';
$bodyClass = 'contact-page';
include 'includes/header.php';
?>

<main class="main">

  <section class="page-title bg-primary text-white py-5">
    <div class="container text-center">
      <h1>Liên Hệ Với Chúng Tôi</h1>
      <p>Chúng tôi luôn sẵn sàng hỗ trợ bạn</p>
    </div>
  </section>

  <section class="contact-info py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3>Thông tin liên hệ</h3>
          <p><i class="fas fa-map-marker-alt text-warning me-2"></i> KDC Mỹ Phước 3, TP. Bến Cát, Bình Dương</p>
          <p><i class="fas fa-phone-alt text-warning me-2"></i> 0392 217 862</p>
          <p><i class="fas fa-envelope text-warning me-2"></i> xaydungquangvinh7788@gmail.com</p>
          <div class="mt-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.123456789012!2d106.12345678901234!3d11.123456789012345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDA3JzI0LjQiTiAxMDbCsDA3JzI0LjQiRQ!5e0!3m2!1svi!2s!4v1234567890123!5m2!1svi!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
        <div class="col-lg-6">
          <h3>Gửi tin nhắn cho chúng tôi</h3>
          <?php include 'includes/quote-form.php'; ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>