package br.edu.ifgoiano.uml;

import java.util.Random;

public class UML {

    public static void main(String[] args) {
        Pessoa p1 = new Pessoa();
        p1.nome = "Roni";
        p1.id = 1;
        p1.incrementarSaldo(10D);
        p1.incrementarSaldo(15D);
        
        System.out.println("Nome : " + p1.nome);
        System.out.println("Saldo: " + p1.getSaldo());
        
        p1.reduzirSaldo(18D);
        
        System.out.println("Saldo: " + p1.getSaldo());
        
        Pessoa p2 = new Pessoa();
        p2.nome = "Bob";
        p2.id = 2;
        p2.incrementarSaldo(13D);
        p2.incrementarSaldo(18D);
        
        System.out.println("Nome : " + p2.nome);
        System.out.println("Saldo: " + p2.getSaldo());
        
        
        Triangulo t1 = new Triangulo();
        t1.altura = 100D;
        t1.base = 10D;
        
        System.out.println("Triângulo Área: " + t1.calcularArea());
        
        Quadrado q1 = new Quadrado();
        q1.lado = 50D;
        
        System.out.println("Quadrado Área: " + q1.calcularArea());
        
        FiguraGeometrica figuras[] = {t1, q1};
        
        System.out.println("Sorteio!");
                
        Random rd = new Random();
        
        for (int i = 0; i < 9; i++){
            FiguraGeometrica f = figuras[rd.nextInt(2)];

            System.out.println("Área: " + f.calcularArea());
        }
    }
}
