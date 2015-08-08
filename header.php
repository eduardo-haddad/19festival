<script>

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


</script>

<div class="row">
        <div class="col-sm-6">
            <div style="float:left; ">
                <a href="home.html"><img src="img/logo_2.png" /></a>
            </div>
        </div>
        <div class="col-sm-6"><div id="share"><a id="fbShare" style="display:none">facebook</a><br /><br /><a id="twitterShare" style="display:none">twitter</a></div>
            <div style="float:right; ">
                <div style="float: right;height: 148px; width:69px; ">
                    <img src="img/sescvb4.png" />
                </div>
                <div style="float: right; height: 160px;width:150px; position: relative">
                    <div id="idiomas" style="position: absolute; bottom:0; margin-bottom: 8px;">
                        <span>POR | ENG</span>
                    </div>
                    <br style="clear:both" />
                    
                    <a id="sharelink" >compartilhar</a>

                    <p id="url_curta" title=""></p>
                </div>
            </div>
        </div>
</div>

