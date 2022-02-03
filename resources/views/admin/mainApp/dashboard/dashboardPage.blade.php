@include('layout.headerMainAdmin')
<!-- Content -->
<main class="main">
  <!-- Breadcrumb-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../dashboard">Home</a></li>
    <li class="breadcrumb-item active">@{{ sectionPage }}</li>
  </ol>
  <div class="container-fluid">
    <div id="divUtama">

    </div>
  </div>
</main>

<!-- End content  -->
@include('layout.footerMainAdmin')