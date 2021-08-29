<?php
  session_start();
  if($_SESSION['loggedIn_admin']);
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
    <link rel="stylesheet" href="visual.css" />
    
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
                    <img src="../logo2.png">
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
                                    <div class="col-10" onclick="location='../main_admin.php'">
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
                                    <div class="col-10" onclick="location='../Tervalidasi_admin.php'">
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
                    <a></a>
                    <b>Admin</b>
                </nav>
            </header>
            <main>
                <div class="container main-mahasiswa">
                    <h1>Visualisasi Data</h1>
                    <div class='tableauPlaceholder' id='viz1628220100428' style='width: 80%;'><noscript><a href='#'><img alt='Dashboard 1 ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;Visualisasi3_16282180930550&#47;Dashboard1&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='Visualisasi3_16282180930550&#47;Dashboard1' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;Visualisasi3_16282180930550&#47;Dashboard1&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-US' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1628220100428');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.minWidth='420px';vizElement.style.maxWidth='1050px';vizElement.style.width='100%';vizElement.style.minHeight='587px';vizElement.style.maxHeight='1087px';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.minWidth='420px';vizElement.style.maxWidth='1050px';vizElement.style.width='100%';vizElement.style.minHeight='587px';vizElement.style.maxHeight='1087px';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else { vizElement.style.width='100%';vizElement.style.height='727px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>
                </div>

            </main>    
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
