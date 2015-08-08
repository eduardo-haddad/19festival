
//mapa do site
$(document).ready(
    function slideMapa(){
        $('#botaomenu').on(
            'click', function(event){
                $('#mapa').animate({width: 'toggle'});
                            }
            );
        $('#fechar').on(
            'click', function(event){
                $('#mapa').animate({width: 'toggle'});
            }
        );
    }
);


//CORES RANDOMICAS PARA TITULOS 
$(document).ready(
    function(){
        paletaArtistas($('.titulo'));
        
    }
);



//itens da lista de nomes coloridos aleatoriamente a partir de paleta de cores pré-definida
$(document).ready(
	function paletaHome(){

		var paleta = ['#613438', 
					  '#4B201B', 
					  '#7F4A3E', 
					  '#BB6D46', 
					  '#5B777B', 
					  '#75606A', 
					  '#AF7C57', 
					  '#908C63', 
					  '#AE573C', 
					  '#A09278', 
					  '#567491', 
					  '#774358']; 
		
		var $li = $('#lista li');
		var vetor = [];

		//preenche vetor com valores aleatórios a partir dos elementos de 'paleta'
		for(var i=0; i < $li.length; i++){
			vetor[i] = paleta[Math.floor(Math.random() * paleta.length)];
		}
		
		//atribui valores de 'vetor' aos elementos da lista de nomes
		for(var j=0; j < $li.length; j++){
					$li.eq(j).css('color', vetor[j]);
		}
	}
);


	function paletaArtistas(id){

		var paleta = ['#7F4A3E',
				      '#865742',
				      '#675650',
				      '#6c543f',
				      '#684852',
				      '#604743',
				      '#774358',
				      '#926E64',
				      '#9c795a',
				      '#986537',
				      '#a05756',
				      '#75606a',
				      '#986e57',
				      '#976A66',
				      '#bb6d46',
				      '#806263',
				      '#9c7b84',
				      '#A76555',
				      '#5B777B',
				      '#AF7C57',
				      '#567491',
				      '#908c63',
				      '#a09278',
				      '#a09278',
				      '#ae573c',
				      '#8f6b55']; 
		
		var $sinopse = id;

		for(var i=0; i < 1; i++){
			var cor = paleta[Math.floor(Math.random() * paleta.length)];
		}
		
		$sinopse.css('color', cor);

		
	}




//filtro de lista de nomes
$(document).ready(
	function filtroLista(){

		$listas = $('a[id^=sm-artistas]');
		$nomes = $('li[class^=sm-artistas]');

		$listas.eq(0).addClass('ativo'); //ativar primeiro item do menu

		$listas.on(
			'click', function(){
				$listas.removeClass('ativo');
				$(this).addClass('ativo'); //ativar item clicado

				if($(this).hasClass('ativo')){
					$id = $(this).attr('id'); //recuperar id do item clicado

					if($id == 'sm-artistas-todos'){ //mostrar todos nomes da lista
						for(var i=0; i < $nomes.length; i++){
							$nomes.eq(i).show();
						}
					}else{

						for (var j=0; j < $nomes.length; j++){
							if($id != $nomes.eq(j).attr('class')){ //se id do item != class de um nome
								$nomes.eq(j).hide(); //esconda nome
							} else $nomes.eq(j).show(); //senão mostre nome
						}

					}
				}
			}
		);
	}
);

function hoverMenu($menu, $texto){

	

	var abertura = false; //valor para menu fechado
	var $todosMenus = $('[id^=menuprincipal]').not($menu); //todos os itens menos o atual
	var $todosTextos = $('[id^=texto]').not($texto); //todos os textos menos o atual

	


	function checaMenu(){

		if($menu.html() == '<img src="img/botoes/expos_2.png">'){
			$menu.html('<img src="img/botoes/expos_1.png">');
		} else 
		if($menu.html() == '<img src="img/botoes/progsfilmes_2.png">'){
			$menu.html('<img src="img/botoes/progsfilmes_1.png">');
		} else 
		if($menu.html() == '<img src="img/botoes/performances_2.png">'){
			$menu.html('<img src="img/botoes/performances_1.png">');
		} else 
		if($menu.html() == '<img src="img/botoes/curadoria_2.png">'){
			$menu.html('<img src="img/botoes/curadoria_1.png">');
		} else 
		if($menu.html() == '<img src="img/botoes/pp_2.png">'){
			$menu.html('<img src="img/botoes/pp_1.png">');
		} else 
		if($menu.html() == '<img src="img/botoes/premios_2.png">'){
			$menu.html('<img src="img/botoes/premios_1.png">');
		} else 
		if($menu.html() == '<img src="img/botoes/publicacoes_2.png">'){
			$menu.html('<img src="img/botoes/publicacoes_1.png">');
		}
		if($menu.html() == '<img src="img/botoes/agenda_2.png">'){
			$menu.html('<img src="img/botoes/agenda_1.png">');
		}
		if($menu.html() == '<img src="img/botoes/fotosvideos_2.png">'){
			$menu.html('<img src="img/botoes/fotosvideos_1.png">');
		}
		if($menu.html() == '<img src="img/botoes/sobre_2.png">'){
			$menu.html('<img src="img/botoes/sobre_1.png">');
		}
		if($menu.html() == '<img src="img/botoes/noticias_2.png">'){
			$menu.html('<img src="img/botoes/noticias_1.png">');
		}
		if($menu.html() == '<img src="img/botoes/imprensa_2.png">'){
			$menu.html('<img src="img/botoes/imprensa_1.png">');
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
					if($menu.html() == '<img src="img/botoes/progsfilmes_1.png">'){
						$menu.html('<img src="img/botoes/progsfilmes_2.png">');
					} else 
					if($menu.html() == '<img src="img/botoes/performances_1.png">'){
						$menu.html('<img src="img/botoes/performances_2.png">');
					} else 
					if($menu.html() == '<img src="img/botoes/curadoria_1.png">'){
						$menu.html('<img src="img/botoes/curadoria_2.png">');
					} else 
					if($menu.html() == '<img src="img/botoes/pp_1.png">'){
						$menu.html('<img src="img/botoes/pp_2.png">');
					} else 
					if($menu.html() == '<img src="img/botoes/premios_1.png">'){
						$menu.html('<img src="img/botoes/premios_2.png">');
					} else 
					if($menu.html() == '<img src="img/botoes/publicacoes_1.png">'){
						$menu.html('<img src="img/botoes/publicacoes_2.png">');
					}
					if($menu.html() == '<img src="img/botoes/agenda_1.png">'){
						$menu.html('<img src="img/botoes/agenda_2.png">');
					}
					if($menu.html() == '<img src="img/botoes/fotosvideos_1.png">'){
						$menu.html('<img src="img/botoes/fotosvideos_2.png">');
					}
					if($menu.html() == '<img src="img/botoes/sobre_1.png">'){
						$menu.html('<img src="img/botoes/sobre_2.png">');
					}
					if($menu.html() == '<img src="img/botoes/noticias_1.png">'){
						$menu.html('<img src="img/botoes/noticias_2.png">');
					}
					if($menu.html() == '<img src="img/botoes/imprensa_1.png">'){
						$menu.html('<img src="img/botoes/imprensa_2.png">');
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
		hoverMenu($('#menuprincipal8'), $('#texto8a'));
		hoverMenu($('#menuprincipal9'), $('#texto9a'));
		hoverMenu($('#menuprincipal10'), $('#texto10a'));
		hoverMenu($('#menuprincipal11'), $('#texto11a'));
		hoverMenu($('#menuprincipal12'), $('#texto12a'));

	}
);


/*$(document).ready(
	function submenu(){

		$itens = $('a[id^=sm-expo]'); //itens do submenu
		$textos = $('div[id^=sm-expo]'); //textos de apresentação
		

		$itens.eq(0).addClass('ativo'); //ativar primeiro item do menu

		$itens.on(
			'click', function(){
				$itens.removeClass('ativo');
				$(this).addClass('ativo'); //ativar item clicado

				if($(this).hasClass('ativo')){
					$id = $(this).attr('id'); //recuperar id do item clicado
					

						for (var j=0; j < $textos.length; j++){
							if($id != $textos.eq(j).attr('id')){ //se id do item != class de um nome
								$textos.eq(j).hide(); //esconda nome
							} else {
								$textos.eq(j).css('display', 'inline');
								$textos.eq(j).show(); //senão mostre nome
							} 
						}

					
				}
			}
		);
	}
);*/

$(document).ready(
        function menuZona(){
        	$listasZona = $('a[id^=sm-encontro]');
        	

        	$listasZona.eq(0).addClass('ativo'); //ativar primeiro item do menu
        	$('#conteudo-encontro').load('elements/zona/zona_encontro_1.html');

        	$listasZona.on(
           	 'click', function(){
            	    $listasZona.removeClass('ativo');
            	    $(this).addClass('ativo'); //ativar item clicado

            	    if($(this).hasClass('ativo')){
            	        $id = $(this).attr('id'); //recuperar id do item clicado

             	       if($id == 'sm-encontro-observatorio'){ 
             	           $('#conteudo-encontro').load('elements/zona/zona_encontro_1.html');
             	       	}else if($id == 'sm-encontro-2'){ 
             	           $('#conteudo-encontro').load('elements/zona/zona_encontro_2.html');
             	       	} else if($id == 'sm-encontro-3'){ 
             	           $('#conteudo-encontro').load('elements/zona/zona_encontro_3.html');
                    	}
                	}
            }
       		);
        }
);

       

$(document).ready(
	function(){
		$("[id=sharelink]").on(
            'click', function(){
            socialShare();
        	}
        );
	}
	);


