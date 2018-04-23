
package exercicio5;

import java.util.Scanner;

public class exercicio5 {
    /*
    5)	Crie um programa que leia números do usuário até 
    que seja digitado um caractere não numérico.
    A cada leitura, o programa deve dizer se o número é par ou ímpar
    */
    
    public static void main(String[] args) {
        
         Scanner scan = new Scanner(System. in);
        
       
        do{
            System.out.println("Digite:");
            int valor = scan.nextInt();

            
            if(valor % 2 == 0){
                System.out.println("É Par");
            }
            else{
                System.out.println("Não é par");
            }
        }while(isNumeric(valor));
    }
}


