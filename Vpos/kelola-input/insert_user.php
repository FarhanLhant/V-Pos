<?php
include "../connect.php";

$perusahaan = filter_input(INPUT_POST, 'perusahaan');
$jenis = filter_input(INPUT_POST, 'jenis');
$pucuk = filter_input(INPUT_POST, 'pucuk');
$harga = filter_input(INPUT_POST, 'harga');
$kecamatan = filter_input(INPUT_POST, 'kecamatan');
$tgl = filter_input(INPUT_POST, 'tgl');

$conn = new mysqli ($servername, $username, $password, $database);
if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
    $sql = "INSERT INTO $table_input (perusahaan, jenis, pucuk, harga, kecamatan, tgl)
    values ('$perusahaan','$jenis','$pucuk','$harga','$kecamatan','$tgl')";
    if ($conn->query($sql)){
        echo '<script type="text/javascript">'; 
        echo 'alert("Data telah ditambahkan");'; 
        echo 'window.location.href = "kelola-input_user.php";';
        echo '</script>';
    }
    else{
        echo "Error: ". $sql ."
        ". $conn->error;
    }
    $conn->close();
}


?>