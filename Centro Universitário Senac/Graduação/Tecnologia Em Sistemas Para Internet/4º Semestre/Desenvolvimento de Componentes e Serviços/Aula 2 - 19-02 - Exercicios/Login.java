
package aula2;

import java.util.Scanner;

public class Login {
    
    public static void main(String[] args) {
        
         Scanner console = new Scanner(System.in);
        
         System.out.print("Login: ");
         String adm = console.nextLine();
        
         System.out.print("Senha: ");
         String login = console.nextLine();
        
        if(adm.equals("admin")){
            if(login.equals("r**t")){
                System.out.println("Autorizado");
            }
        }else{
            System.out.println("Não Autorizado");
        }
    }
}
