
package exercicio2;

import java.util.Scanner;

public class exercicio2 {
    
     public static void main(String[] args) {
         
         /*
         2)Leia os seguintes dados de um cliente durante a execução do programa:
                •	Nome
                •	Estado Civil
                •	Endereço
                •	Telefone
            Quando ler o último dado, exiba um resumo da ficha do cliente no console. 
            Separe os métodos de leitura e exibição de informação de forma coesa
         */
         
         Scanner scan = new Scanner(System. in);
         
         System.out.print("Digite um nome: ");
         String nome = scan.next();
         
         System.out.print("Estado Civil: ");
         String estadoCivil = scan.next();
         
         System.out.print("Endereço: ");
         String endereco = scan.next();
         
         System.out.print("Telefone: ");
         String telefone = scan.next();
         
        
         System.out.print("Nome: " +nome + "|");  
         System.out.print(" ");
         System.out.print("Esta Civil: " +estadoCivil + "|");
         System.out.print(" ");
         System.out.print("Endereço: " +endereco + "|");
         System.out.print(" ");
         System.out.print("Telefone: " +telefone + "|");
         System.out.print(" ");
   
         
         
     }
}
