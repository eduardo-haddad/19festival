function hoverMenu($menu, $texto){

	

	var abertura = false; //valor para menu fechado
	//var $todosMenus = $('[id^=menuprincipal]').not($menu); //todos os itens menos o atual
	//var $todosTextos = $('[id^=texto]').not($texto); //todos os textos menos o atual

	$('[id^=texto]').width($('[id^=texto]').width('615px'));


	function checaMenu(){

		if($menu.html() == '<img src="img/botoes/expos_2.png">'){
			$menu.html('<img src="img/botoes/expos_1.png">');
		} else 
		if($menu.html() == '<img src="img/botoes/zona_2.png">'){
			$menu.html('<img src="img/botoes/zona_1.png">');
		} else 
		if($menu.html() == '<img src="img/botoes/premios_2.png">'){
			$menu.html('<img src="img/botoes/premios_1.png">');
		} else 
		if($menu.html() == '<img src="img/botoes/publicacoes_2.png">'){
			$menu.html('<img src="img/botoes/publicacoes_1.png">');
		} else 
		if($menu.html() == '<img src="img/botoes/agenda_2.png">'){
			$menu.html('<img src="img/botoes/agenda_1.png">');
		} else 
		if($menu.html() == '<img src="img/botoes/sobre_2.png">'){
			$menu.html('<img src="img/botoes/sobre_1.png">');
		} else 
		if($menu.html() == '<img src="img/botoes/saibamais_2.png">'){
			$menu.html('<img src="img/botoes/saibamais_1.png">');
		}

	}


	function fechaMenu(){
		$texto.slideUp('easeInOutCubic',function(){
			checaMenu();
			abertura = false; 
		});
	}

	function abreMenu(){
		$texto.slideDown('easeInOutCubic', function(){
		abertura = true; 
		});
	}


		$menu.hover(		 //toggle de abertura de menu com alteração de imagem onhover
				function(){ 		// função para onmouseover
					if($menu.html() == '<img src="img/botoes/expos_1.png">'){
						$menu.html('<img src="img/botoes/expos_2.png">');
					} else 
					if($menu.html() == '<img src="img/botoes/zona_1.png">'){
						$menu.html('<img src="img/botoes/zona_2.png">');
					} else 
					if($menu.html() == '<img src="img/botoes/premios_1.png">'){
						$menu.html('<img src="img/botoes/premios_2.png">');
					} else 
					if($menu.html() == '<img src="img/botoes/publicacoes_1.png">'){
						$menu.html('<img src="img/botoes/publicacoes_2.png">');
					} else 
					if($menu.html() == '<img src="img/botoes/agenda_1.png">'){
						$menu.html('<img src="img/botoes/agenda_2.png">');
					} else 
					if($menu.html() == '<img src="img/botoes/sobre_1.png">'){
						$menu.html('<img src="img/botoes/sobre_2.png">');
					} else 
					if($menu.html() == '<img src="img/botoes/saibamais_1.png">'){
						$menu.html('<img src="img/botoes/saibamais_2.png">');
					}

					
					$menu.on(
						'click', function(){
							

							if(abertura == false){
								abreMenu();
								
								/*$todosTextos.each( //fechar todos itens menos o atual
								function(){
									$(this).slideUp('easeInOutCubic');
								}); */

							} else {
								fechaMenu();							
								}

						}
					);
				}, 
				
				function(){ //mouseleave
					if($texto.is(':not(:visible)')){
						checaMenu();
					}  
				}

				
		);
}

$(document).ready(
	function inicioMenu(){

		hoverMenu($('#menuprincipal1'), $('#texto1a'));
		hoverMenu($('#menuprincipal2'), $('#texto2a'));
		hoverMenu($('#menuprincipal3'), $('#texto3a'));
		hoverMenu($('#menuprincipal4'), $('#texto4a'));
		hoverMenu($('#menuprincipal5'), $('#texto5a'));
		hoverMenu($('#menuprincipal6'), $('#texto6a'));
		hoverMenu($('#menuprincipal7'), $('#texto7a'));

	}
);
