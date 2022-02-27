import java.util.Scanner;
class scanBill{
static double amount;
public static void main(String[] args){
Scanner myScanner = new Scanner(System.in);
System.out.println("Enter the price of the item -  ");
amount = myScanner.nextDouble();
amount = amount + 5.00;
System.out.println("Amount to pay - Rs." + amount);

}
}