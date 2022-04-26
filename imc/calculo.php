<?php 

$peso= str_replace(",",".", $_POST["peso"]);
$altura=str_replace(",",".", $_POST["altura"]);
$calculo= $peso / ($altura * $altura);
$imc= number_format($calculo, 2);


?>

<!doctype html>
<html lang="pt-br">
  <head>	
     <body class="img js-fullheight" style="background-image: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)),
    url(images/bg.jpg);">

  	<title>Calculadora IMC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 style="color: #fbceb5;" class= "heading-section">Resultado do IMC</h2>
                    <br>
                    <h5 class="text-white">IMC: <?php echo $imc;?>
                    <p class="text-white"> Classificação:
                    <?php 
                    if($imc < 18.5) {
                        echo "Abaixo do peso";
                    }
                    if($imc >= 18.5 && $imc <= 24.9){
                        echo "Peso Normal";
                    }
                    if($imc >= 25 && $imc <=29.9){
                        echo "Sobrepeso";
                    }
                    if($imc >= 30 && $imc <=34.9){
                        echo "Obesidade Grau I";
                    }
                    if($imc >=35 && $imc <= 39.9){
                        echo "Obesidade Grau II";
                    }
                    if($imc >= 40){
                        echo"Obesidade Grau III ou Mórbida";
                    }

                    ?>
                    </p>

                    </h5>
				</div>
			</div>
		
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      
		      
	            <div class="form-group">
	            	<button type="submit" data-toggle="modal" data-target="#exampleModal" class="form-control btn btn-primary submit px-3"> Tabela de classificação</button>
	            </div>
                <div class="form-group">
	            	<a href="index.html" type="submit" class=" form-control btn btn-primary submit px-3 pt-3"> Voltar</a>
	            </div>
                <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5  class="modal-title" id="exampleModalLabel">Tabela de Classificação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="images/tabelaimc.png" width="100%">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      
      </div>
    </div>
  </div>
</div>

	           
	         
	         
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

