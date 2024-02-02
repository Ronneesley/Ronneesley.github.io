
package br.edu.ifgoiano.exemplo01;

import java.util.HashMap;
import java.util.Map;

/**
 *
 * @author profronneesley
 */
public class TabelaHash {

    public static void main(String[] args) {
        Map<String, Double> mapa = new HashMap<>();
        
        mapa.put("ana", 10.0);
        mapa.put("roni", 8D);
        mapa.put("pedro", 9D);
        
        for (String chave: mapa.keySet()){
            System.out.println(chave + 
                    " nota: " + mapa.get(chave));
        }
    }
}

