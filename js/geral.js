$(document).ready(function(){
    function carregar(href){
        $("#conteudo").load(href, function(){
            $("#conteudo a").click(processarLink);

            hljs.highlightAll();
        });
    }

    function processarLink(){
        if ($(this).attr("target") == undefined){
            carregar($(this).attr("href"));

            return false;
        }
    }

    $("a").click(processarLink);

    carregar("pagina_inicial.html");
});