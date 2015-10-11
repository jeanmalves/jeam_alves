<?php include_once "header.php"; ?>

<section id="content">
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d230483.0520808215!2d-49.2897982!3d-25.4951166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1444531768735" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Entre em contato comigo através <strong>do formulário de contato abaixo</strong></h4>
				<form id="contactform" action="contact/contact.php" method="post" class="validateform" name="send-contact">
					<div id="sendmessage">
						 Your message has been sent. Thank you!
					</div>
					<div class="row">
						<div class="col-lg-4 field">
							<input type="text" name="name" placeholder="* Digite seu nome completo" data-rule="maxlen:4" data-msg="Por favor, insira pelo menos 4 caracteres" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="email" placeholder="* Digite seu email" data-rule="email" data-msg="Por favor, entre com um email válido" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="subject" placeholder="Digite o assunto" data-rule="maxlen:4" data-msg="Por favor, insira pelo menos 4 caracteres" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 margintop10 field">
							<textarea rows="12" name="message" class="input-block-level" placeholder="* Digite sua mensagem aqui..." data-rule="required" data-msg="Por favor, escreva algo"></textarea>
							<div class="validation">
							</div>
							<p>
								<button class="btn btn-theme margintop10 pull-left" type="submit">Enviar mensagem</button>
								<span class="pull-right margintop20">* Por favor, preencha todos os campos de formulário obrigatório, obrigado!</span>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</section>
<?php include_once "footer.php"; ?>