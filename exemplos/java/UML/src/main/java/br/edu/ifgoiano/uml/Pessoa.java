package br.edu.ifgoiano.uml;

public class Pessoa {
    public String nome;
    
    public Integer id;
    
    private Double saldo = 0D;
    
    public void incrementarSaldo(Double valor){
        this.saldo += valor;
    }
    
    public Double getSaldo(){
        return this.saldo;
    }
    
    public void reduzirSaldo(Double valor){
        this.saldo -= valor;
    }
    
    public Pessoa(){
        
    }
    
    public Pessoa(Integer id, String nome){
        
    }
}








