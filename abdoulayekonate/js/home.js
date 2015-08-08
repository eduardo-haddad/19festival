
function preload(imagens) {
    $(imagens).each(
    	function(){
        $('<img/>')[0].src = this;
    	}
	);
}


$(document).ready(
	function() {

   		preload([
			'img/botoes/expos_2.png',
			'img/botoes/zona_2.png',
			'img/botoes/premios_2.png',
			'img/botoes/publicacoes_2.png',
			'img/botoes/agenda_2.png',
			'img/botoes/sobre_2.png',
			'img/botoes/saibamais_2.png'
			]);
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



//itens da lista de nomes coloridos aleatoriamente a partir de paleta de cores pré-definida
$(document).ready(
	function paleta(){

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


$(document).ready(
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
);

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

//social share
var currentURL = document.URL;
var currentTitle = document.title;

function socialShare() {
    var fbShare = document.getElementById("fbShare");
    var twitterShare = document.getElementById("twitterShare");
    var sharelink = document.getElementById("sharelink");
    var url_gerada;

    sharelink.onclick = function(){
        bit_url(currentURL);
        function delay () { 
            setTimeout(function() {url_gerada = $('[id=url_curta]').attr('title');}, 1700)
        }
        delay();


        $('[id=share]').fadeToggle(1100, function(){

            $('[id=fbShare]').fadeToggle(350);
            $('[id=twitterShare]').fadeToggle(800);
            
            
        });

    }
    
    fbShare.onclick = function() {
        window.open("https://www.facebook.com/sharer.php?u="+currentURL,"","height=368,width=600,left=100,top=100,menubar=0");
        return false;
    }

    twitterShare.onclick = function() {
        
        window.open("http://twitter.com/intent/tweet?status="+currentTitle+" "+url_gerada,"","height=260,width=500,left=100,top=100,menubar=0");
        
    }

    fbShare.setAttribute("href","http://www.facebook.com/sharer.php?u="+currentURL);
}


window.onload = function() {
    socialShare();
}

//bit_url function
function bit_url(url){
    var url=url;
        var key = "R_cc291fcd3bd5474eaefaeed69cc0f090";
        var username = "videobrasil";
    $.ajax({
        url:"http://api.bit.ly/v3/shorten",
        data:{longUrl:url,apiKey:key,login:username},
        dataType:"jsonp",
        success:function(v)
        {
        var bit_url=v.data.url;
        function delay () {
            setTimeout(function() {
                $('[id=url_curta]').attr('title', bit_url);
            }, 1200)
        }
        delay();
        }
    });
}

		


