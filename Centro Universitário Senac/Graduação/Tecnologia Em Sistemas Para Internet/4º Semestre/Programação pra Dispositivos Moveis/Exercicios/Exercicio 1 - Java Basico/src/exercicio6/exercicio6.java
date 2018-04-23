package exercicio6;

import java.util.Scanner;

public class exercicio6 {
   public static void main(String[] args) { 
        /*
        6)	Crie um programa que leia um número e calcule seu valor fatorial 
           (exemplo: 5! = 5 x 4 x 3 x 2). Com o resultado, o programa deve 
           informar se o número do usuário é um número primo
        */

        Scanner scan = new Scanner(System. in);

        int fat = 1, div = 0;


        System.out.println("Digite um Nº");
        int num = scan.nextInt();

        for(int i = 1; i <= num; i++){
            fat = fat * i;
        }

        System.out.print("Fatorial: " +fat + " - ");

        for(int j = 1; j <= fat; j++){
            if(fat % j == 0){
                div++;
            }
        }

        if(div == 2){
            System.out.println("È primo");
        }else{
            System.out.println("Não é primo");
        }
   }
}
