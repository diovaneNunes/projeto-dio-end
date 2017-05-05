		</main><!-- fim da tag main -->
	<footer><!-- rodape -->
		<div class="logo-rodape"><!-- == div que armazena o logo do rodape == -->
		<a href="index.html">
			<figure>
				<img src="img/logo-rodape.png" alt="imagem rodape da pagina">
				<figcaption>Dio-end</figcaption>
			</figure>
		</a>
		</div><!-- fim da div classe "logo-rodape" -->
		<p>Todos os direitos reservados Dio-end</p>
	</footer><!-- fim do rodape -->
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
		<script src="bower_components/wow/dist/wow.min.js"></script>
		<script>
			$(function(){				
				$('.toggle').click(function(){
					$('.layout').toggleClass('ativo');
					$('.menu-responsivo').toggleClass('ativo');
					$(this).toggleClass('ativo');
				});
				new WOW().init();
			});
		</script>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script>
			$(".btn-menu").click(function(){
				$(".menu-responsivo").show();
			});
			$(".btn-close").click(function(){
				$(".menu-responsivo").hide();
			});
		</script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>
		  $(document).ready(function() {
		    $('input').blur(function() {
		      if ($(this).val())
		        $(this).addClass('used');
		      else
		        $(this).removeClass('used');
		      
		    });
		    $('textarea').blur(function() {
		      if ($(this).val())
		        $(this).addClass('used');
		      else
		        $(this).removeClass('used');
		      
		    });
		  });
		</script>
</body>
</html>