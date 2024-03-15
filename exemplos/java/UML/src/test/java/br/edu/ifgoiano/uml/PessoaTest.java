/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/UnitTests/JUnit5TestClass.java to edit this template
 */
package br.edu.ifgoiano.uml;

import org.junit.jupiter.api.AfterEach;
import org.junit.jupiter.api.AfterAll;
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.BeforeAll;
import org.junit.jupiter.api.Test;
import static org.junit.jupiter.api.Assertions.*;

/**
 *
 * @author roni
 */
public class PessoaTest {
    
    public PessoaTest() {
    }

    /**
     * Test of incrementarSaldo method, of class Pessoa.
     */
    @org.junit.jupiter.api.Test
    public void testIncrementarSaldo() {
        System.out.println("incrementarSaldo");
        
        Pessoa instance = new Pessoa();
        
        instance.incrementarSaldo(10D);        
        assertEquals(10D, instance.getSaldo());
        
        instance.incrementarSaldo(15D);        
        assertEquals(25D, instance.getSaldo());
    }

    /**
     * Test of getSaldo method, of class Pessoa.
     */
    @org.junit.jupiter.api.Test
    public void testGetSaldo() {
        System.out.println("getSaldo");
        Pessoa instance = new Pessoa();
        
        assertEquals(0D, instance.getSaldo());
        
        instance.incrementarSaldo(15D);        
        assertEquals(15D, instance.getSaldo());
    }

    /**
     * Test of reduzirSaldo method, of class Pessoa.
     */
    @org.junit.jupiter.api.Test
    public void testReduzirSaldo() {
        System.out.println("reduzirSaldo");

        Pessoa instance = new Pessoa();
        
        instance.reduzirSaldo(15D);
        assertEquals(-15D, instance.getSaldo());
        
        instance.incrementarSaldo(30D);
        assertEquals(15D, instance.getSaldo());
        
        instance.reduzirSaldo(3D);
        assertEquals(12D, instance.getSaldo());
    }
    
}
