<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'header.php' ?>
</head>

<body>
	<div class="wrapper">
		<?php include 'menu.php' ?>

		<div class="main">
            <?php include 'topo.php' ?>

			
			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Cliente</h1>

					
						<div class="col-6">
							<div class="card">
								<div class="card-header">
									<h5>Formulario do Cliente</h5>
								</div>
								<div class="card-body">
                                    <form action="#">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nome Completo</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">CPF/CNPJ</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" required>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">CEP</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" required>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Logradouro</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" required>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Numero</label>
                                                    <input type="number" class="form-control" id="exampleFormControlInput1" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Cidade</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" required>
                                             </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Estado</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" required>
                                             </div>
                                            </div>

                                        </div>
                                       
                                        
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Logo/Imagem Pessoa</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                         <button type="submit" class="btn btn-primary">Salvar</button>
                                    </form>
								</div>
                               
							</div>
						</div>
					

				</div>
			</main>

			<footer class="footer">
				<?php include'footer.php' ?>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

	
</body>

</html>