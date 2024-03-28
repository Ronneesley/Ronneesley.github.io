#include <stdio.h>

int main()
{
    int idade;
    double soma = 0;
    int quantidade = 0;
    double media;

    do {
      printf("Digite a idade do indivíduo: ");
      scanf("%d", &idade);

      soma = soma + idade;
      quantidade = quantidade + 1;
    } while (idade != 0);

    media = soma / (quantidade - 1);

    printf("A média das idades é: %.2f", media);

    return 0;
}
