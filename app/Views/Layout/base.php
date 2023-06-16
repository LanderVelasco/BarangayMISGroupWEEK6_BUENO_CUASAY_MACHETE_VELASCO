<?= $this->include("Layout/header"); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">


    <!-- Bootstrap 4 -->
    <?= $this->include("Layout/Bootstrap"); ?>

    <!-- Brand Logo -->
    <?= $this->include("Layout/Brand_Logo"); ?>


    <!-- jQuery -->
    <?= $this->include("Layout/jQuery"); ?>


    <!-- Navbar -->
    <?= $this->include("Layout/Navigation_Bar"); ?>


    <!-- Preloader -->
    <?= $this->include("Layout/Preloader"); ?>

    <!-- Main Content -->
    <?= $this->renderSection("content"); ?>


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">


      <!-- Sidebar -->
      <?= $this->include("Layout/Sidebar"); ?>


</body>

</html>