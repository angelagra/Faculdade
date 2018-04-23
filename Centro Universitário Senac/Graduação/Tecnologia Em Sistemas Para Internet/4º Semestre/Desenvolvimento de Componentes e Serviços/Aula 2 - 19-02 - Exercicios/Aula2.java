/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package aula2;

import java.util.Scanner;

public class Aula2 {

    public static void main(String[] args) {
        
        Scanner console = new Scanner(System.in);
       
        String nome1 = "Java";
        String nome2 = "Java";
        int idade = Integer.parseInt(console.nextLine()); // converte em inteiro
        double temp = Double.parseDouble(console.nextLine()); // converte em double
        
        if(nome1.equals(nome2)){ // comparar a string
            System.out.println("Igual");
        }else{
            System.out.println("Não São");
        }
    }
    
}
