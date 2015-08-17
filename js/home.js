

$(document).ready(
	function(){

		var isMobile = false; 

		if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    		|| /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) {

			isMobile = true;
		}
	}
);


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


