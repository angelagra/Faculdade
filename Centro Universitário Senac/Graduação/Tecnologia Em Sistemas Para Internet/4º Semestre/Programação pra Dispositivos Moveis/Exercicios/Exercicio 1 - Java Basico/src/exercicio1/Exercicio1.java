
package exercicio1;

import java.util.Scanner;

public class Exercicio1 {

    public static void main(String[] args) {
        /*
        1)Construa um programa que receba o valor de três notas por parâmetro 
        de programa Java (parâmetros do método main), calcule a média aritmética (X + Y + Z) / 3 
        e exiba o resultado no console. Componha o programa de forma que a média seja calculada 
        em um método separado, chamado pelo “main” quando o programa iniciar. */
        
        Scanner scan = new Scanner(System. in);
            
            System.out.println("Digite a nota 1: ");
            double nota1 = scan.nextInt();

            System.out.println("Digite a nota 2: ");
            double nota2 = scan.nextInt();

            System.out.println("Digite a nota 3: ");
            double nota3 = scan.nextInt();
        
        System.out.println("Média: " + Media(nota1,nota2,nota3));
        
    }
    
        public static double Media(double nota1, double nota2, double nota3){
                 
            double total = (nota1 + nota2 + nota3)/3;
            
            return total;
        }  
}
