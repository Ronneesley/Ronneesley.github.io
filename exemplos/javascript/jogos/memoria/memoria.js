class JogoMemoria {
    id;
    linhas;
    colunas;

    constructor(id, linhas, colunas){
        this.id = id;
        this.linhas = linhas;
        this.colunas = colunas;
    }

    configurar(){
        var div = document.getElementById(this.id);

        for (var i = 0; i < this.linhas; i++){
            for (var j = 0; j < this.colunas; j++){
                var card = this.criarCard();

                div.appendChild(card);
            }
        }
    }

    criarCard(){
        var card = document.createElement("div");

        return card;
    }
}