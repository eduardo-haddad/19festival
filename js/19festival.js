


//mapa do site
/*$(document).ready(
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
);*/


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

		var paleta = [/*'#7F4A3E',
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
				      '#567491',*/
				      '#908c63',
				      '#a09278',
				      '#a09278',
				      '#ae573c',
				      '#8f6b55',
				      
					   '#684852',
					   '#604743',
					   '#774358',
					   '#926E64',
					   '#a05756',
					   '#75606a',
					   '#986e57',
					   '#bb6d46',
					   '#5B777B',
					   '#567491']; 
		
		var $sinopse = id;

		for(var i=0; i < 1; i++){
			var cor = paleta[Math.floor(Math.random() * paleta.length)];
		}
		
		$sinopse.css('color', cor);

		
	}






/*$(document).ready(
	function filtroAgenda(){



		$listas = $('a[id^=agenda-]');
		$nomes = $('li[class^=agenda-]');

		$ol = $("#agenda ol");

		$listas.eq(0).addClass('ativo'); //ativar primeiro item do menu



		
                

		$listas.on(
			'click', function(){
				$listas.removeClass('ativo');
				$(this).addClass('ativo'); //ativar item clicado

				if($(this).hasClass('ativo')){
					$id = $(this).attr('id'); //recuperar id do item clicado

					if($id == 'agenda-todos'){ //mostrar todos nomes da lista
						for(var i=0; i < $nomes.length; i++){
							$nomes.eq(i).show();
						}
					}else{

						for (var j=0; j < $nomes.length; j++){
							if($id != $nomes.eq(j).attr('class')){ //se id do item != class de um nome
								$nomes.eq(j).hide(
									function(){
										$ol.each(
                    						function(){
                    						    if ($(this).find('li:visible').length == 2){
                    						        $(this).find('li:visible').eq(0).css('display', 'none');
                    						    };
                    						}
                    );
									}
								); //esconda nome

							



							} else $nomes.eq(j).show(); //senão mostre nome
						}

					

					}
				}
			}
		);
	}
);*/


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

       

