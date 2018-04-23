
package exercicio3;

import java.util.Scanner;

public class exercicio3 {
    /*
    3)	Leia os parâmetros diaUtil (boolean) e emFerias (boolean) 
        durante a execução do programa.
    Com base nos dados, faça um programa que informe se o usuário pode 
    dormir até mais tarde. Isto só pode acontecer caso não seja um dia 
    útil ou ele esteja de férias. 
    */
    
    public static void main(String[] args) {
        Scanner scan = new Scanner(System. in);
         
         System.out.println("Hoje é dia Util? Sim:1 Não:0");
         int util = scan.nextInt();
         
         System.out.println("Esta de Férias? Sim:1 Não:0");
         int ferias = scan.nextInt();
         
         if(util == 1 && ferias == 1 || util == 0 && ferias == 0){
             System.out.println("Pode dormir até mais tarde");
         }
         else if(util == 1 && ferias == 0){
            System.out.println("Voçê nao pode dormir ate mais tarde");
         }
    }
    
}
