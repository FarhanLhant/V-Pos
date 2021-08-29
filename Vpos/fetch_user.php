<?php
//fetch.php
include "connect.php";
$columns = array('id', 'perusahaan', 'jenis', 'pucuk', 'harga', 'kecamatan', 'tgl');

$query = "SELECT * FROM $table_input ";

/*if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE first_name LIKE "%'.$_POST["search"]["value"].'%" 
 OR last_name LIKE "%'.$_POST["search"]["value"].'%" 
 ';
}*/

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY id ASC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();


while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div data-id="'.$row["id"].'" data-column="id">' . $row["id"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id"].'" data-column="perusahaan">' . $row["perusahaan"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id"].'" data-column="jenis">' . $row["jenis"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id"].'" data-column="pucuk">' . $row["pucuk"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id"].'" data-column="harga">' . $row["harga"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id"].'" data-column="kecamatan">' . $row["kecamatan"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["id"].'" data-column="tgl">' . $row["tgl"] . '</div>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 include "connect.php";
 $query = "SELECT * FROM $table_input";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>