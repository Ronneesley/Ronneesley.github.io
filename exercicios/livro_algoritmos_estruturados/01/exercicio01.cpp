#include <iostream>

using namespace std;

int main()
{
    int idade;
    double soma = 0;
    int quantidade = 0;
    double media;

    do {
      cout << "Digite a idade do indivíduo: ";
      cin >> idade;

      soma = soma + idade;
      quantidade = quantidade + 1;
    } while (idade != 0);

    media = soma / (quantidade - 1);

    cout << "A média das idades é: " << media << endl;

    return 0;
}
