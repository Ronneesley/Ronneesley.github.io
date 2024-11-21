/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package br.com.profroni.animes;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;

/**
 *
 * @author Aluno
 */
public class Genero {
    private Integer id;
    
    private String nome;

    public Genero() {
    }

    public Genero(Integer id, String nome) {
        this.id = id;
        this.nome = nome;
    }
    
    public void inserir() throws Exception {
        Connection con = DriverManager.getConnection(
                "jdbc:mysql://localhost:3306/publicacao", "root", "");
        
        PreparedStatement pstmt = con.prepareStatement(
                "insert into generos(nome) values(?)");
        
        pstmt.setString(1, nome);
        
        pstmt.executeUpdate();
        
        con.close();
    }

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }
    
    
}
