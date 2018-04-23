
package exercicio4;

import java.util.Scanner;

public class exercicio4 {
    
    public static void main(String[] args) {
    
        /*
        4)Faça um programa que leia a idade do usuário e liste suas 
        permissões legais, tendo como base os seguintes marcos legais:
            a)Dirigir: >= 18 anos
            b)Beber: >= 18 anos
            c)Voto facultativo: >= 16 anos, < 18 anos e >= 70 anos
            d)Voto obrigatório: >= 18 anos e < 70 anos 
        */
        
        Scanner scan = new Scanner(System. in);
        
        System.out.print("Idade: ");
        int idade = scan.nextInt();
        
        if(idade >= 18){
            System.out.println("Dirigir | Beber");
            System.out.println("Voto Obrigatorio");
        }
        
        else if(idade >= 16 && idade < 18 || idade >= 70){
            System.out.println("Voto Facultativo");
        }     
        
    }
    
}
