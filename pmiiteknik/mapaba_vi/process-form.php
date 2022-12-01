<?php

    $nim = $_POST["nim"];
    $jurusan = $_POST["jurusan"];
    
    // mencegah mysql injection
    // $nim = stripcslashes($nim);
    // $jurusan = stripcslashes($jurusan);
    // $nim = mysqli_real_escape_string($nim);
    // $jurusan = mysqli_real_escape_string($jurusan);
    
    // var_dump($nama, $prodi, $fakultas, $hobi, $email, $whatsapp, $alamat, $domisili, $kota, $tgl_lahir, $gender);
    
    $conn = mysqli_connect('localhost', 'u1607792_pmiiftekuninus_main', 'rgroipm0zohq', 'u1607792_pmiiftekuninus_main');   
    // query database ke user
    $result = mysqli_query($conn, "SELECT * FROM tbl_sertifikat_mapaba_vi WHERE nim = '$nim' and jurusan = '$jurusan'")
        or die("failed query".mysqli_error());
    $cek = mysqli_fetch_array($result);

    $link_serti = $cek['link_sertifikat'];
    $nama_peserta = $cek['nama'];

    if($cek["nim"] == $nim && $cek["jurusan"] == $jurusan){
        echo "
        <script>

        alert('Nama Anda terdaftar! Hallo $nama_peserta');
        window.location.href='$link_serti'

        </script>";

        echo $cek['link_sertifikat']; 

    }else {
        echo "
        <script>

        window.location.href='form-validation.html'
        alert('Mohon Maaf Data tidak ada');

        </script>";
        
    }
    
?>
