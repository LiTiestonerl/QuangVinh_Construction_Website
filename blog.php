<?php
$pageTitle = 'Blog - Xây Dựng Quang Vinh';
$bodyClass = 'blog-page';
include 'includes/header.php';
?>

<main class="main">

  <section class="page-title bg-primary text-white py-5">
    <div class="container text-center">
      <h1>Chia Sẻ Kinh Nghiệm Xây Dựng</h1>
      <p>Những bài viết hữu ích về thiết kế, thi công và phong thủy nhà ở</p>
    </div>
  </section>

  <?php include 'includes/recent-blog-posts.php'; ?>

</main>

<?php include 'includes/footer.php'; ?>