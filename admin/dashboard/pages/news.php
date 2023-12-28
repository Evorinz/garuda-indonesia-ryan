<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Dashboard News Garuda Indonesia
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  
  <style>
    .table td, .table th {
        white-space: normal;
    }
    .element:hover {
        cursor: pointer;
    }
    .gambar {
        max-width: 100%;
        height: auto;
        display: block;
        border-radius: 5%;
    }
  </style>
</head>

<body class="g-sidenav-show  bg-gray-200">
<!-- Modal Foto Berita -->
<?php
  include('../../../conn/connection.php');
  $queryNews = "SELECT * FROM tbl_news_event";
  $resultNews = mysqli_query($db, $queryNews);

  if(mysqli_num_rows($resultNews) > 0){
    while($data = mysqli_fetch_array($resultNews)){
?>
<div class="modal fade" id="fotoBerita<?=$data['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Image Berita</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <label><?=$data['title']?></label>

          <br>
            <img src="../../../images/news/<?= $data['image_events'] ?>" class="gambar" alt="user1">
          <br>
          <br>

          <label>**<?=$data['cap_image']?></label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
    }
  }
?>
<!-- End Modal Foto Berita -->

<!-- Modal Tambah Berita -->
<div class="modal fade" id="tambahBerita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Tambah Berita</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="../function/insert-news.php" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="input-group input-group-static mb-4">
          <label>Title</label>
          <input type="text" class="form-control" name="title">
        </div>
        <div class="input-group input-group-static mb-4">
          <label>Description Event/News</label>
          <input type="text" class="form-control" name="desc">
        </div>
        <div class="input-group input-group-static mb-4">
          <label>Location</label>
          <input type="text" class="form-control" name="location">
        </div>
        <div class="input-group input-group-static mb-4">
          <label>Date Of Publish</label>
          <input type="date" class="form-control" name="datePublish">
        </div>
        <div class="input-group input-group-static mb-4">
          <label>Publish ?</label>
          <div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="radio" name="optPublishOrNot" id="publish1" value="1">
              <label class="custom-control-label" for="publish1">Published</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="optPublishOrNot" id="publish2" value="0">
              <label class="custom-control-label" for="publish2">Hidden</label>
            </div>
          </div>
        </div>
        <div class="input-group input-group-static mb-4">
          <label>Images Event/News</label>
          <input type="file" class="form-control" accept="image/*" name="fileToUpload" id="fileToUpload">
        </div>
        <div class="input-group input-group-static mb-4">
          <label>Caption Images</label>
          <input type="text" class="form-control" name="capImages">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn bg-gradient-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- End Motal Tambah Berita -->

<!-- Modal Edit Berita -->
<?php
  include('../../../conn/connection.php');
  $queryNews = "SELECT * FROM tbl_news_event";
  $resultNews = mysqli_query($db, $queryNews);

  if(mysqli_num_rows($resultNews) > 0){
    while($data = mysqli_fetch_array($resultNews)){
?>
<div class="modal fade" id="editBerita<?=$data['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Edit Berita</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="../function/edit-news.php" method="post" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="input-group input-group-static mb-4">
          <label>Title</label>
          <input type="text" class="form-control" name="title" value="<?=$data['title']?>">
        </div>
        <div class="input-group input-group-static mb-4">
          <label>Description Event/News</label>
          <textarea type="text" class="form-control" name="desc"><?=$data['desc_event']?></textarea>
        </div>
        <div class="input-group input-group-static mb-4">
          <label>Location</label>
          <input type="text" class="form-control" name="location" value="<?=$data['location']?>">
        </div>
        <div class="input-group input-group-static mb-4">
          <label>Date Of Publish</label>
          <input type="date" class="form-control" name="datePublish" value="<?=$data['date_publish']?>">
        </div>
        <div class="input-group input-group-static mb-4">
          <label>Publish ?</label>
          <div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="radio" name="optPublishOrNot" id="publish1" value="1" <?=($data['published'] == 1) ? 'checked' : ''?>>
              <label class="custom-control-label" for="customRadio1">Published</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="optPublishOrNot" id="publish2" value="0" <?=($data['published'] == 0) ? 'checked' : ''?>>
              <label class="custom-control-label" for="customRadio2">Hidden</label>
            </div>
          </div>
        </div>
        <div class="input-group input-group-static mb-4" st>
          <label>Images Event/News</label><span class="text-primary" style="font-size:10px">*Kosongkan jika tidak ingin update gambar</span>
          <input type="file" class="form-control" name="fileToUpload" accept="image/*" id="fileToUpload" value="../../images/news/<?=$data['image_events']?>">
        </div>
        <div class="input-group input-group-static mb-4">
          <label>Caption Images</label>
          <textarea type="text" class="form-control" name="capImages" value="<?=$data['cap_image']?>"><?=$data['cap_image']?></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn bg-gradient-primary">Save Changes</button>
      </div>
    </form>
    </div>
  </div>
</div>
<?php
    }
  }
?>
<!-- End Motal Edit Berita -->

  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="../index.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="../pages/news.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">News and Event</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
      <a class="btn bg-gradient-primary mt-4 w-100" href="../../admin-logout.php" name="btn_logout" onclick="return confirm('Kamu yakin ingin logout ?')" type="button">Logout</a>
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Home</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">News and Event</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">News and Event</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <ul class="navbar-nav  justify-content-end">
              <li class="nav-item d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                  <i class="fa fa-user me-sm-1"></i>
                  <span class="d-sm-inline d-none">Administrator</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 px-3" style="display:flex; justify-content:space-between;white-space: normal;">
                <h6 class="text-white text-capitalize">News and Event</h6>
                <button class="btn bg-gradient-info btn-sm px-1" name="tambah" data-bs-toggle="modal" data-bs-target="#tambahBerita">Tambah Berita</button>
              </div>
              <!-- <button type="button" class="btn btn-info">Tambah Berita</button> -->
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Images</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-1">Cap Images</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">News Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date Of Publish</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      include('../../../conn/connection.php');
                      $queryNews = "SELECT * FROM tbl_news_event";
                      $resultNews = mysqli_query($db, $queryNews);
                      if(mysqli_num_rows($resultNews) > 0){
                        while($data = mysqli_fetch_array($resultNews)){
                    ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <img src="../../../images/news/<?= $data['image_events'] ?>" class="avatar avatar-xl me-3 border-radius-lg element" alt="user1" data-bs-toggle="modal" data-bs-target="#fotoBerita<?=$data['id']?>">
                        </div>
                      </td>
                      <td>
                        <p class="text-xs text-secondary mb-0"><?php if($data['cap_image'] == null){echo "none";}else{echo $data['cap_image'];} ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?= $data['title'] ?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-<?php if($data['published'] == 1) {echo "success";} else {echo "danger";}?>"><?php if($data['published'] == 1) {echo "Published";}else{echo "Hidden";} ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= date_format(date_create($data['date_publish']), "d-M-Y")?></span>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link btn-sm px-1 text-success" data-bs-toggle="modal" data-bs-target="#editBerita<?=$data['id']?>">Edit</button>
                        <form method="post" action="../function/delete-news.php" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data berita ini?');">
                          <input type="hidden" name="id" value="<?= $data['id'] ?>">
                          <button class="btn btn-link btn-sm px-1" type="submit" name="delete">Hapus</button>
                        </form>
                      </td>
                    </tr>
                    <?php
                        }
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer py-2">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>