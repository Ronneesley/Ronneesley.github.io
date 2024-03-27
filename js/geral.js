$(document).ready(function(){
    function carregar(href){
        $("#conteudo").load(href, function(){
            $("#conteudo a").click(processarLink);

            carregamentoCodigos();

            hljs.highlightAll();
        });
    }

    function processarLink(){
        if ($(this).attr("target") == undefined){
            carregar($(this).attr("href"));

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