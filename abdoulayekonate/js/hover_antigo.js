$(document).ready(
	function hoverMenu($menu, $texto){

	var abertura = false; //valor para menu fechado
	var $todosMenus = $('[id^=menuprincipal]').not($menu); //todos os itens menos o atual
	var $todosTextos = $('[id^=texto]').not($texto); //todos os textos menos o atual

	//$('[id^=texto]').width($('[id^=texto]').width('615px'));


	function fechaMenu(){
		$texto.slideUp('easeInOutCubic',function(){
			$menu.removeClass('hoverMenu');
			abertura = false; 
			});
	}

	function abreMenu(){
		$texto.slideDown('easeInOutCubic', function(){
			$todosMenus.removeClass('hoverMenu');
			abertura = true; 
		});
	}


		$menu.hover(		 //toggle de abertura de menu com alteração de fonte onhover
				function(){ 		// função para onmouseover
					$menu.addClass('hoverMenu');


					$menu.on(
						'click', function(){
							
							if($(this).is(':hover')){
								$menu.addClass('hoverMenu');
							}


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
					if($texto.is(':visible')){
						$menu.addClass('hoverMenu');
					} else 
						$menu.removeClass('hoverMenu');
							
				}
		);
}
);