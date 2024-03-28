import java.util.Scanner;

public class Exercicio01 {
    public static void main(String[] args) {
        int idade;
        double soma = 0;
        int quantidade = 0;
        double media;

        Scanner leitor = new Scanner(System.in);
        do {
          System.out.print("Digite a idade do indivíduo: ");
          idade = leitor.nextInt();

          soma = soma + idade;
          quantidade = quantidade + 1;
        } while (idade != 0);

        media = soma / (quantidade - 1);

        System.out.println("A média das idades é: " + media);
    }
}