<?php
  session_start();
  if($_SESSION['loggedIn_user']);
  //allow
  else
  //redirect to the login page
  header("location:index.html");
?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
    
    <!-- CSS -->
    <link rel="stylesheet" href="kelola-input.css" />
    
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
    <form method="post" action="http://localhost/all/semua2/kelola-input/insert_user.php">
        <input type="checkbox" id="nav-toggle" />
        
        <div class="sidebar">
            <div class="sidebar-brand">
                <label for="nav-toggle" class="bars">
                    <i class="fas fa-bars"></i>
                </label>
                <span>
                    <img src="../logo2.png" width="170px" height="100px">
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
                                    <div class="col-10" onclick="location='../main_user.php'">
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
                                    <div class="col-10" onclick="location='../Tervalidasi_user.php'">
                                        <span>Tervalidasi</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </div>
                    
                    <div class="items logout"onclick="location='../logout.php'">
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
          <!-- <span><i class="fas fa-chevron-left te"></i></span> -->
          <header>
            <nav class="navbar navbar-light fixed-top">
              <a></a>
              <b>Admin</b>
            </nav>
          </header>
          <main>
          </header>
          <main>
            <div class="container main-mahasiswa">
              <h2></h2>
              <h2>Input Data</h2>
              <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                  
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <div class="search-container">
                  </div>
                </div>
              </div>
              
              <section class="table-pemilih">
                <div class="card border-0 rounded">
                  <div class="row">
                    
                    <div class="wrapper">
                      <div class="row100">
                        <div class="col">
                          <div class="inputBox">
                            <input type="text" name="perusahaan" required="required">
                            <span class="text">Nama Perusahaan</span>
                            <span class="line"></span>
                          </div>
                        </div>
                        <div class="col">
                          <div class="inputBox">
                            <span class="text"></span>
                            <select name="jenis" id="jenis" required="required">
                              <option value="">Pilih Jenis Layanan...</option>
                              <option value="EMS">EMS</option>
                              <option value="SKH">SKH</option>
                              <option value="PAKET POS">Paket Pos</option>
                              <option value="PPKH">PPKH</option>
                              <option value="POS EXPRESS">Pos Express</option>
                              <option value="MESIN PERANGKO">Mesin Perangko</option>
                            </select>
                          </div>
                        </div>
                        <div class="col">
                          <div class="inputBox">
                            <input type="number" name="pucuk" required="required">
                            <span class="text">Pucuk</span>
                            <span class="line"></span>
                          </div>
                        </div>
                        <div class="col">
                          <div class="inputBox">
                            <input type="number" name="harga" required="required">
                            <span class="text">Harga</span>
                            <span class="line"></span>
                          </div>
                        </div>
                        <div class="col">
                          <div class="inputBox">
                            <input type="text" name="kecamatan" required="required">
                            <span class="text">Kecamatan</span>
                            <span class="line"></span>
                          </div>
                        </div>
                        <div class="col">
                          <div class="inputBox">
                            <div class="tanggal">                
                              <input type="date" name="tgl" required="required">
                              <span class="text"></span>
                              <span class="line"></span>
                            </div>
                          </div>
                        </div>
                        <div class="row100">
                          <div class="col">
                            <div class="btn-hover color-9">
                              <input type="submit" name="" Value="Simpan">
                              <i class="far fa-plus fa-lg"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </main>
          </div>
          
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
                    url:"fetch_admin.php",
                    type:"POST"
                  },
                  "paging":   false,
                  "ordering": false,
                  "info":     false,
                  "bFilter":     false,
                  columnDefs: [
                  { width: 140, targets: 6 }
                  ]
                });
              }
              
              
              
              function update_data(id, column_name, value)
              {
                
                $.ajax({
                  url:"update.php",
                  method:"POST",
                  data:{id:id, column_name:column_name, value:value},
                  success:function(data)
                  {
                    $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                    $('#user_data').DataTable().destroy();
                    fetch_data();
                  }
                });
                setInterval(function(){
                  $('#alert_message').html('');
                }, 5000);
              }
              
              
              
              $(document).on('blur', '.update', function(e){
                
                var id = $(this).data("id");
                var column_name = $(this).data("column");
                var value = $(this).text();
                update_data(id, column_name, value);
                
              });
              
              
              
              $(document).on('click', '.delete', function(){
                var id = $(this).attr("id");
                if(confirm("Are you sure you want to remove this?"))
                {
                  $.ajax({
                    url:"delete.php",
                    method:"POST",
                    data:{id:id},
                    success:function(data){
                      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                      $('#user_data').DataTable().destroy();
                      fetch_data();
                    }
                  });
                  setInterval(function(){
                    $('#alert_message').html('');
                  }, 5000);
                }
              });
              
              $(document).on('click', '.transfer', function(){
                if(confirm("Validasi Data?"))
                {
                  $.ajax({
                    url:"transfer.php",
                    method:"POST",
                    data:{id:0},
                    success:function(data){
                      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                      $('#user_data').DataTable().destroy();
                      fetch_data();
                    }
                  });
                  setInterval(function(){
                    $('#alert_message').html('');
                  }, 5000);
                }
              });
              
              
              
            });
            
          </script>
        </form>
        </html>