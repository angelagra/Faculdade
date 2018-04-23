
package aula2;

import java.util.Scanner;

public class Calculadora {
    
    public static void main(String[] args) {
        
        Scanner console = new Scanner(System.in);
        
        System.out.print("Calculadora");
        System.out.print("\n");
        System.out.print("Mais - 1");
        System.out.print("\n");
        System.out.print("Menos - 2");
        System.out.print("\n");
        System.out.print("Vezes - 3");
        System.out.print("\n");
        System.out.print("Dividir - 4");
        System.out.print("\n");
        System.out.print("Opção: ");
        double opcao = Double.parseDouble(console.nextLine());
        
        System.out.print("\n");
        
        System.out.println("Valor 1: ");
        double valor1 = Double.parseDouble(console.nextLine());
        
        System.out.print("Valor 2: ");
        double valor2 = Double.parseDouble(console.nextLine());
        
              
        if(opcao == 1){      
                double v = valor1 + valor2;
                System.out.print("Total: " + v);
        }
        else if(opcao == 2){
         
                double v1 = valor1 - valor2;
                System.out.print("Total: " + v1);
              
        }   
        else if(opcao == 3){
                double v2 = valor1 * valor2;
                System.out.print("Total: " + v2);
         
        }   
        else if(opcao == 4){
            double v3 = valor1 / valor2;
            System.out.print("Total: " + v3);
                
        }
        
    }
}
