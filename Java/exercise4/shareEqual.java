import java.util.Scanner;
class shareEqual{
public static void main(String[] args){
Scanner myScanner = new Scanner(System.in);
int kids, balls, share;
System.out.println("Enter Number of Kids - ");
kids = myScanner.nextInt();
System.out.println("Enter Number of Balls - ");
balls = myScanner.nextInt();
share = balls / kids;
System.out.println("Each kid will get " + share + " balls.");
}
}