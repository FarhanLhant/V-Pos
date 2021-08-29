<?php
  session_start();
  if($_SESSION['loggedIn_user']);
  //allow
  else
  //redirect to the login page
  header("location:index.html");
?>

<html>
 <head>
 <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
  rel="stylesheet" />
  
  <!-- CSS -->
  <link rel="stylesheet" href="kelola-css3.css" />
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
  integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  
  <!-- AjaxJquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- AjaxJquery -->

  <title>Kelola Mahasiswa</title>
  <title>Live Add Edit Delete Datatables Records using PHP Ajax</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> -->
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

 </head>
 <body>
 <form method="post" action="http://localhost/connect.php">
  <input type="checkbox" id="nav-toggle" />
  
  <div class="sidebar">
    <div class="sidebar-brand">
      <label for="nav-toggle" class="bars">
        <i class="fas fa-bars"></i>
      </label>
      <span>
        <img src="logo2.png">
 </span>
    </div>
    
    <div class="sidebar-menu">
      <ul class="align">
        <div class="items">
          <li>
            <a href="#" class="navigate-link">
              <div class="row">
                <div class="col-2">
                  <i class="fas fa-database"></i>
                </div>
                <div class="col-10" onclick="location='main_user.php'">
                  <span>Kelola Data</span>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="#" class="navigate-link">
              <div class="row">
                <div class="col-2">
                  <i class="fas fa-user-tie"></i>
                </div>
                <div class="col-10 ">
                  <span>Tervalidasi</span>
                </div>
              </div>
            </a>
          </li>
        </div>
        
        <div class="items logout" onclick="location='logout.php'">
          <li>
            <a href="#">
              <div class="row">
                <div class="col-2">
                  <i class="fas fa-sign-out-alt"></i>
                </div>
                <div class="col-10">
                  <span>Log Out</span>
                </div>
              </div>
            </a>
          </li>
        </div>
        
      </ul>
    </div>
  </div>

  <div class="main-content">
    <header>
      <nav class="navbar navbar-light fixed-top">
        <a></a>
        <b>User</b>
      </nav>
    </header>
    <main>
      <div class="container main-mahasiswa">
        <h2 class="mb-4">Data Tervalidasi</h2>
        <div class="row">
        <button type="button" class="btn btn-dark" onclick="location='kelola-input/kelola-input_user.php'">
              Tambahkan Data
            </button>
          <div class="col-lg-4 col-md-12 col-sm-12">
            
            <div class="search-container">
              
              <form>
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
              </form>
            </div>
          </div>
        </div>


  
  <section class="table-pemilih">
  <div class="container box">
    <div id="alert_message"></div>
          <div class="card border-0 rounded">
            <div class="card-body">
              <div class="container table-responsive">
              <div id="alert_message">
                <table id="user_data" class="table table-hover">
                  <tbody id="myTable">
                  <thead>
                    <tr>
                      <div class="center">
                        <th scope="col">Id</th>
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">Jenis Layanan</th>
                        <th scope="col">Pucuk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Tanggal</th>
                      </div>
                    </tr>
                  </thead>
                  </tbody>
                </table>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="col-lg-8 col-md-12 col-sm-12">
        </div>
      </div>
    </main>
    </div>
  </div> 
  </div>
  
 </body>
</html>

<!-- Optional JavaScript -->
<script src="kelola-js.js"></script>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){

  fetch_data();

  function fetch_data()
  {
   var dataTable = $('#user_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"fetch_validasi.php",
     type:"POST"
    },
    "paging":   false,
    "ordering": false,
    "info":     false,
    "bFilter":     false,
    columnDefs: [
            { width: 200, targets: 6 }
        ]
  });
  }
  
  
  
 });
 
</script>
