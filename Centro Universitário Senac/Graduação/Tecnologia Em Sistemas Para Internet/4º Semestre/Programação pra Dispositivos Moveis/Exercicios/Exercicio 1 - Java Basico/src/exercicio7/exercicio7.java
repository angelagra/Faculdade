
package exercicio7;

import java.util.Scanner;

/*
7)Desenvolva um programa que leia os nomes dos jogos eletrônicos 
   favoritos de um usuário e suas respectivas notas de avaliação pessoal, 
   com limite máximo de 10 jogos ou até que o usuário digite “sair” no nome 
   do jogo. Valide se as informações de nota são corretas e, então, informe o 
   jogo do usuário com maior nota. 
*/
public class exercicio7 {
    public static void main(String[] args) {
        

        
            String[][] matriz =  new String[10][5];
            
            Scanner entrada = new Scanner(System.in);
            
            for(int linha = 0; linha < 3; linha++){
                for(int coluna = 0; coluna < 3; coluna++){
                    System.out.printf("Insira o elemento M[%s][%d]:", linha+1,coluna+1);
                    matriz[linha][coluna] = entrada.next();
                    
                }
            }
            
            System.out.println("\nA Matriz ficou: \n");
            for(int linha = 0; linha <3; linha++){
                for(int coluna = 0; coluna < 3; coluna++){
                    System.out.printf("\t %s \t", matriz[linha][coluna]);
                    
                    int nota = 0;
                    int c = Integer.parseInt("[coluna]");
                    
                    if(c > nota){
                        nota = c;
                        System.out.println("Nota maior: " +nota);
                    }
                    
                }
                System.out.println();
                
            }
            
            
        }
   
}
