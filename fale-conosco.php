<?php include 'components/header.php'; ?>

	<section class="fale-conosco interna">
		<div class="container">
			<h2 class="titulo-geral">Contato</h2>
			
			<form>
				<input type="text" name="nome" id="nome" class="form-control" value="" placeholder="NOME" />
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<input type="text" name="email" id="email" class="form-control" value="" placeholder="E-MAIL" />
					</div><!-- .md-6 -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<input type="text" name="telefone" id="telefone" class="form-control" value="" placeholder="TELEFONE" />
					</div><!-- .md-6 -->
				</div><!-- .row -->
				<input type="text" name="assunto" id="assunto" class="form-control" value="" placeholder="ASSUNTO" />
				<textarea name="mensagem" id="mensagem" class="form-control" placeholder="MENSAGEM"></textarea>
				<button class="enviar">Enviar</button>
			</form>
		</div><!-- container -->
	</section><!-- fale-conosco -->

<?php include 'components/footer.php'; ?>