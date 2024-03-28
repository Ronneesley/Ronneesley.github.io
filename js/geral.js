function nada(){}

$(document).ready(function(){
    function carregar(href, callback = nada){
        $("#conteudo").load(href, function(){
            $("#conteudo a").click(processarLink);

            carregamentoCodigos();

            hljs.highlightAll();

            callback();
        });
    }

    function rolarPara(id){
        $("html, body").animate({
            scrollTop: $(id).offset().top
        }, 2000);
    }

    function processarLink(){
        if ($(this).attr("target") == undefined){
            let href = $(this).attr("href");

            //Se é uma âncora
            if (href.startsWith("#")){
                let id = href;
                rolarPara(id);
            } else {
                //Carrega a página
                carregar(href, function(){
                    //Verifica se possui uma referência
                    let posicao = href.search("#");

                    if (posicao > 0){
                        let id = href.substring(posicao);

                        setTimeout(function(){
                            rolarPara(id);
                        }, 500);                        
                    }
                });                
            }            

            return false;
        }
    }

    function carregamentoCodigos(){
        $("code").each(function(index){
            var codigo = $(this);

            if (typeof codigo.attr("class") != "undefined"){
                var pedacos = $(this).attr("class").split(" ");

                if (pedacos.length == 2){
                    let linguagem = pedacos[0];
                    let src = pedacos[1];
                    
                    if (src.startsWith("codigo:")){
                        let caminho = src.substring(7);
        
                        if (linguagem == "language-html"){
                            $.ajax({
                                url: caminho
                            }).done(function(html){
                                const highlightedCode = hljs.highlight(html, {'language': 'xml'}).value;

                                codigo.html(highlightedCode);
                            });
                        } else {
                            $.ajax({
                                url: caminho
                            }).done(function(html){
                                let nomeLinguagem = linguagem.split("-")[1];
                                const highlightedCode = hljs.highlight(html, {'language': nomeLinguagem}).value;

                                codigo.html(highlightedCode);
                            });
                        }
                    }
                }
            }
        });
    }

    function escapeHtml(unsafe){
        return unsafe
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
    }

    $("a").click(processarLink);

    carregar("pagina_inicial.html");
});