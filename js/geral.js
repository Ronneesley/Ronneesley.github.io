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
            var pedacos = $(this).attr("class").split(" ")

            for (let i = 0; i < pedacos.length; i++){
                let pedaco = pedacos[i];
                
                if (pedaco.startsWith("codigo:")){
                    let caminho = pedaco.substring(7);

                    codigo.load(caminho);
                }
            }
        });
    }

    $("a").click(processarLink);

    carregar("pagina_inicial.html");
});