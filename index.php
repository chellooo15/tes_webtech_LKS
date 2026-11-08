<?php require_once __DIR__ . '/config/app.php';
$user = authUser(); ?>
<!DOCTYPE html>
<html lang="id">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Beranda - Koperasi Sekolah</title>
 <link rel="stylesheet" href="/styles/index.css">
</head>


<body>
 <?php if ($user) {
  $pageTitle = 'Beranda';
  $pageSubtitle = 'Ringkasan sistem informasi koperasi sekolah'; ?>

  <div class="layout">
   <?php require __DIR__ . '/components/admin/sidebar.php'; ?>

   <main class="main">
    <?php require __DIR__ . '/components/admin/topbar.php'; ?>

    <section class="content">
     <div class="page-heading">
      <h2>Selamat datang, <?= e($user['name']) ?>!</h2>
      <p>Kelola dan lihat data master koperasi sekolah melalui menu di samping.</p>
     </div>

     <div class="features">
      <div class="feature-card">
       <h3>Supplier</h3>
       <p>Data pemasok barang koperasi sekolah.</p>
       <p><a class="btn btn-primary" href="/pages/suppliers/index.php">Lihat Supplier</a></p>
      </div>
      <div class="feature-card">
       <h3>Products</h3>
       <p>Data produk, kategori, harga, dan stok.</p>
       <p><a class="btn btn-primary" href="/pages/products/index.php">Lihat Products</a></p>
      </div>
      <div class="feature-card">
       <h3>Employees</h3>
       <p>Data karyawan koperasi sekolah.</p>
       <p><a class="btn btn-primary" href="/pages/employees/index.php">Lihat Employees</a></p>
      </div>
     </div>
    </section>
   </main>

  </div>
  <?php } else {
  require __DIR__ . '/components/landing/header.php'; ?>
  
  <section class="hero">
   <h1>Kelola Koperasi Sekolah Lebih Mudah</h1>

   <p>Sistem Informasi Koperasi Sekolah membantu mengelola data supplier, produk, dan karyawan secara sederhana.</p>

   <div class="hero-cta"><a href="/pages/auth/login.php" class="btn btn-primary">Masuk ke Akun</a>
   <a href="/pages/auth/register.php" class="btn btn-outline">Buat Akun</a></div>
  </section>

  <section class="features">
   <div class="feature-card">
    <h3>Manajemen Supplier</h3>
    <p>Catat dan kelola data pemasok koperasi.</p>
   </div>
   <div class="feature-card">
    <h3>Manajemen Products</h3>
    <p>Pantau informasi produk, harga, dan stok.</p>
   </div>
   <div class="feature-card">
    <h3>Hak Akses</h3>
    <p>Admin mengelola data, sedangkan user dapat melihat data.</p>
   </div>
  </section>
  
  <?php require __DIR__ . '/components/landing/footer.php';
  } ?>
</body>

</html>