package br.edu.ifgoiano.uml;

/**
 *
 * @author roni
 */
public class Triangulo implements FiguraGeometrica {
    public Double base;
    
    public Double altura;   

    @Override
    public Double calcularArea() {
        return this.base * this.altura / 2D;
    }
    
}
