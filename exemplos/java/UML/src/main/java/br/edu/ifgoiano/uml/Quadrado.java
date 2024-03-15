package br.edu.ifgoiano.uml;

/**
 *
 * @author roni
 */
public class Quadrado implements FiguraGeometrica {
    public Double lado;

    @Override
    public Double calcularArea() {
        return Math.pow(this.lado, 2);
    }
}
