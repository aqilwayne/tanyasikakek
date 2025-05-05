<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "tanyakakek") or die("Couldn't connect");

//CREATE - Tambah Pertanyaan
if(isset($_POST['unggah-pertanyaan'])){
    $id_user = $_POST['id_user'];
    $judul = $_POST['judul'];
    $pertanyaan = $_POST['pertanyaan'];

    $addquestion = mysqli_query($con, "INSERT INTO question (id_user,judul,pertanyaan) VALUES ('$id_user','$judul','$pertanyaan')");

    if($addquestion){
        header("location;qna-login-view");
    } else {
        echo "Tidak ada data ditemukan.";
        header("location;qna-login-view");
    }
}

//DELETE - Hapus Pertanyaan
if(isset($_POST['deletequestion'])){
    $id_question = $_POST['id_question'];

    $delete = mysqli_query($con, "DELETE FROM question WHERE id_question = '$id_question'");

    if($delete){
        header("location;qna-login-view");
    } else {
        echo "Tidak ada data ditemukan.";
        header("location;qna-login-view");
    }
}
?>