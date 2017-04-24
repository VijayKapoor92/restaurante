		</div>
	</body>
</html>
<script type="text/javascript" src="../library/jquery/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../library/jquery-ui/js/jquery-ui-1.10.4.min.js"></script>
<script type="text/javascript" src="../library/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../util/validacao.js"></script>
<script>
$(document).ready(function(){
	//-- Init da tela
	$("#menu").hide();
	$("#menu").css({
		"height": $(document).height()
	});

	$("#menu-toggle").on("click", function(e){
		$("#menu").toggle("slide","fast");
	});
});
</script>