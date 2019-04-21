<?php
    $cat = $_GET['categoria'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="mainContainer">
        <header>
            <?php include 'pages/nav.php'?>
            <?php include 'pages/categorias.php'?>    
        </header>
        <?php 
                include('functions/config.php');

                if($cat == 'all'){
                    $query = "SELECT * FROM products";
                }else{
                    $query = "SELECT * FROM products WHERE categoria='$cat' ";
                }

                
                $result = mysqli_query($conn, $query);

                if(mysqli_num_rows($result) == 0){
                    echo '<h2>Nenhum produto encontrado</h2>';
                }
            ?>
                <div class="showProds">
                    <div class="container">
                        <div class="row">
                            <?php 
                                    while( $row = mysqli_fetch_array($result)){
                                        echo '<div class="col-xs-12 col-sm-6 col-md-4 eachProd">';
                                            echo "<img src='images/" .$row['imagens']. "' height=150px> ";
                                            echo "<h1>" .$row['name']. " </h1> ";
                                            echo "<p>R$".$row['preco']. ",00</p>";
                                            echo '<div class=" btnComprar " ';
                                                echo '<button value"'.$row['id']. '"><a href="info?produto='. $row['id']. '&nome='.$row['name']. '">Informações</a></button><br>';
                                            echo '</div>'; 
                                        echo "</div>";
                                    }
                            ?> 
                        </div>
                    </div>
                </div>
    </div>

    <script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>