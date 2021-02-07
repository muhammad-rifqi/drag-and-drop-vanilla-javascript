<?php
$lokasi_file = $_FILES['file1']['tmp_name'];
$nama_file = $_FILES['file1']['name'];
if(move_uploaded_file($lokasi_file, "upload/$nama_file")){
    echo "success";
} else {
    echo "gagal";
}
?>