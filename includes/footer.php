<footer id="rodape">
	<div class="alinha_geral">
		<p>Cognitio - 2015</p>
	</div>
</footer>

 <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

<!-- Função para deixar o rodape sempre abaixo na tela -->

<script>
	function PositionFooter() {
		    var $footer = $("#rodape"), footerHeight = $footer.height(),
		    footerTop = ($(window).scrollTop() + $(window).height() - footerHeight) + "px";

		    if (($(document.body).height() + footerHeight) < $(window).height()) {
		        $footer.css({ position: "absolute", top: footerTop }); } 
		    else { $footer.css({ position: "static" }); }

		    $footer.fadeTo(1000, 0.8);
		}

		function GerenciarFooter() {
		    $(window).resize(PositionFooter)
		    PositionFooter();
		}

		$(document).ready(function () {
		    GerenciarFooter();

		    //Garante que a função será executada após um postback AJAX
		    prm = Sys.WebForms.PageRequestManager.getInstance();
		    prm.add_endRequest(PositionFooter);
	});
</script>


 