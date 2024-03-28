programa {
  funcao inicio() {
    inteiro idade
    real soma = 0
    inteiro quantidade = 0
    real media

    faca {
      escreva("Digite a idade do indivíduo: ")
      leia(idade)

      soma = soma + idade
      quantidade = quantidade + 1
    } enquanto (idade != 0)

    media = soma / (quantidade - 1)

    escreva("A média das idades é: ", media)
  }  
}
