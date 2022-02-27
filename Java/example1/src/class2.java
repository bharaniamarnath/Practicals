import java.util.Scanner;

public class class2 {

	/**
	 * @param args
	 */
	public static void main(String[] args) {

		String a;
		String b;
		
		System.out.println("Compare Names !");
		Scanner myScanner = new Scanner(System.in);
		
		System.out.print("Enter the first name: ");
		a = myScanner.next();
		System.out.print("Enter the second name: ");
		b = myScanner.next();
		
		if(a.equalsIgnoreCase(b)){
			System.out.println("First name is equal to second name !");
		}
		else{
			System.out.println("First name is not equal to second name !");
		}
	}

}
