$(document).ready(
        function random(){

            var random;
            
            random = (Math.floor(Math.random() * (65)) + 1);
        
            $('#random img').attr('src', '../img/home/random/obra' + random + '.jpg');

            switch(random){
                case 1: $('#random a').attr('href', '/abdoulayekonate'); break;
                case 2: $('#random a').attr('href', '/gabrielabrantes'); break;
                case 3: $('#random a').attr('href', '/soniagomes'); break;
                case 4: $('#random a').attr('href', '/ytobarrada'); break;
                case 5: $('#random a').attr('href', '/robertosantaguida'); break;
                case 6: $('#random a').attr('href', '/slinko'); break;
                case 7: $('#random a').attr('href', '/karolinabregula'); break;
                case 8: $('#random a').attr('href', '/tatianafuentessadowski'); break;
                case 9: $('#random a').attr('href', '/alicherri'); break;
                case 10: $('#random a').attr('href', '/kushbadhwar'); break;
                case 11: $('#random a').attr('href', '/viktorijarybakova'); break;
                case 12: $('#random a').attr('href', '/anavaz'); break;
                case 13: $('#random a').attr('href', '/chulayarnnonsiriphol'); break;
                case 14: $('#random a').attr('href', '/distruktur'); break;
                case 15: $('#random a').attr('href', '/leticiaramos'); break;
                case 16: $('#random a').attr('href', '/gabrielabrantes'); break;
                case 17: $('#random a').attr('href', '/gabrielabrantes'); break;
                case 18: $('#random a').attr('href', '/gabrielabrantes'); break;
                case 19: $('#random a').attr('href', '/gabrielabrantes'); break;
                case 20: $('#random a').attr('href', '/gabrielabrantes'); break;
                case 21: $('#random a').attr('href', '/alinexegustavojardim'); break;
                case 22: $('#random a').attr('href', '/andresbedoya'); break;
                case 23: $('#random a').attr('href', '/armandoqueiroz'); break;
                case 24: $('#random a').attr('href', '/betoshwafaty'); break;
                case 25: $('#random a').attr('href', '/biancabaldi'); break;
                case 26: $('#random a').attr('href', '/carlosmelo'); break;
                case 27: $('#random a').attr('href', '/chameckilerner'); break;
                case 28: $('#random a').attr('href', '/claraianni'); break;
                case 29: $('#random a').attr('href', '/claraianni'); break;
                case 30: $('#random a').attr('href', '/danielfrota'); break;
                case 31: $('#random a').attr('href', '/danieljacoby'); break;
                case 32: $('#random a').attr('href', '/danielmonroycuevas'); break;
                case 33: $('#random a').attr('href', '/deborabolsoni'); break;
                case 34: $('#random a').attr('href', '/dorguez'); break;
                case 35: $('#random a').attr('href', '/enriqueramirez'); break;
                case 36: $('#random a').attr('href', '/rodolphoparigi'); break;
                case 37: $('#random a').attr('href', '/felipebittencourt'); break;
                case 38: $('#random a').attr('href', '/haroongunn-salie'); break;
                case 39: $('#random a').attr('href', '/huitao'); break;
                case 40: $('#random a').attr('href', '/iosuaramburu'); break;
                case 41: $('#random a').attr('href', '/joaocastilho'); break;
                case 42: $('#random a').attr('href', '/kokenergun'); break;
                case 43: $('#random a').attr('href', '/louisebotkay'); break;
                case 44: $('#random a').attr('href', '/lucianamagno'); break;
                case 45: $('#random a').attr('href', '/mariakramar'); break;
                case 46: $('#random a').attr('href', '/koutsomichalis-varela-psarra'); break;
                case 47: $('#random a').attr('href', '/mayawatanabe'); break;
                case 48: $('#random a').attr('href', '/michaelmacgarry'); break;
                case 49: $('#random a').attr('href', '/mihaigrecu'); break;
                case 50: $('#random a').attr('href', '/monicarodriguez'); break;
                case 51: $('#random a').attr('href', '/pablolobato'); break;
                case 52: $('#random a').attr('href', '/paulonazareth'); break;
                case 53: $('#random a').attr('href', '/paulonimerpjota'); break;
                case 54: $('#random a').attr('href', '/paulonimerpjota'); break;
                case 55: $('#random a').attr('href', '/pilarmatadupont'); break;
                case 56: $('#random a').attr('href', '/rafaelrg'); break;
                case 57: $('#random a').attr('href', '/rodrigocass'); break;
                case 58: $('#random a').attr('href', '/roydib'); break;
                case 59: $('#random a').attr('href', '/roydib'); break;
                case 60: $('#random a').attr('href', '/runolagomarsino'); break;
                case 61: $('#random a').attr('href', '/solonribeiro'); break;
                case 62: $('#random a').attr('href', '/tausmakhacheva'); break;
                case 63: $('#random a').attr('href', '/tiecourandaou'); break;
                case 64: $('#random a').attr('href', '/verachavesbarcellos'); break;
                case 65: $('#random a').attr('href', '/waleriaamerico'); break;

            }

        }
    );

        $(document).ready(
            function abreHash(){

                var hash = window.location.hash.split('#')[1];
                                   

                if(hash != undefined){

                    switch(hash){
                        case 'sobre': abre('#texto1a'); break;
                        case 'exposicoes': abre('#texto2a'); break;
                        case 'progsfilmes': abre('#texto3a'); break;
                        case 'performances': abre('#texto4a'); break;
                        case 'pp': abre('#texto5a'); break;
                        case 'premios': abre('#texto7a'); break;
                        case 'publicacoes': abre('#texto8a'); break;
                       

                    }

                }

                function abre(texto){
                    $(texto).slideDown('easeInOutCubic', function(){abertura = true;});
                }
                
        }
        );