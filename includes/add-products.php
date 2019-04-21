<?php 
    $msg = "";
    include('../functions/config.php');

    if(isset($_POST['salvar'])){
        $nome = $_POST['name'];
        $forne = $_POST['forne'];
        $preco = $_POST['preco'];
        $status = $_POST['status'];
        $criado = $_POST['criado'];
        $cat = $_POST['categoria'];
        $qnt = $_POST['quantidade'];

        $file = $_FILES['images'];
        $fileName = $_FILES['images']['name'];
        $fileTmp_name = $_FILES['images']['tmp_name'];
        $fileSize = $_FILES['images']['size'];
        $fileError = $_FILES['images']['error'];
        $fileType = $_FILES['images']['type'];

        $fileDest = '../images/'.$fileName;
        move_uploaded_file($fileTmp_name, $fileDest);

        $query = "INSERT INTO products (name, idFornecedor, preco, status, created_at, categoria, qntEmEstoque, imagens) VALUES ('$nome', '$forne', '$preco', '$status', '$criado', '$cat', '$qnt', '$fileName')";

        $result = mysqli_query($conn, $query);

        if($result){
            header('location: ../minhaConta');
        }

    }else{
        echo 'Hello';
    }

?>