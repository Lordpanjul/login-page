<?php
//cek button    
    if ($_POST['Submit'] == "Submit") {
    $email             = $_POST['email'];
    $pass              = $_POST['pass'];
    $nama              = $_POST['nama'];
    $nim               = $_POST['nim'];
    $kelas             = $_POST['kelas'];
    $telepon           = $_POST['telepon'];
    //validasi data data kosong

    include "connection.php";
    $email = $_POST['email'];  
    $nim = $_POST['nim'];  
      
        //to prevent from mysqli injection  
        $nim = stripcslashes($nim); 
        $nim = mysqli_real_escape_string($con, $nim);  
      
        $sql = "select *from profil where nim = '$nim'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Nim Sudah Terdaftar </center></h1>";  
        }  
        else{  	
    //Masukan data ke Table
    $input    ="insert into profil (email,pass,nama,nim,kelas,telepon) values ('$email','$pass','$nama','$nim','$kelas','$telepon')";
    $query_input =mysqli_query($con,$input);
    if ($query_input) {
    //Jika Sukses
    echo "<h1><center>Input Data Mahasiswa Berhasil!</center></h1>";
    }
    else {
    //Jika Gagal
    echo "Input Data Mahasiswa Gagal!, Silahkan diulangi!";
    }
    }
}
?>