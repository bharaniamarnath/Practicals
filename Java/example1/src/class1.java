import java.util.Scanner;

public class class1 {
	
	public static void main(String[] args){
		
		int add, sub, mul, div, number, performer;
		
		Scanner myScanner = new Scanner(System.in);
		System.out.println("Performs arithmetic with the input by 2 !");
		System.out.print("Enter an integer to be calculated: ");
		number = myScanner.nextInt();
		System.out.print("Enter the integer which is used to calculate: ");
		performer = myScanner.nextInt();
		
		add = number + performer;
		sub = number - performer;
		mul = number * performer;
		div = number / performer;

		System.out.println("You have entered the integer " + number);
		System.out.println("Addition: " + number + " + " + performer + " = " + add);
		System.out.println("Subtraction: " + number + " - " + performer + " = " + sub);
		System.out.println("Multiplication: " + number + " * " + performer + " = " + mul);
		System.out.println("Division: " + number + " / " + performer + " = " + div);
		
		
	}

}
