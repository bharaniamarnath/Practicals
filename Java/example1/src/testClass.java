import java.util.Scanner;
public class testClass {

	/**
	 * @param args
	 */
	public static int u = 23;
	public static String p = "Science";
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		System.out.println("Hello Bharane");
		int a = 12;
		int b = 11;
		int c = a + b;
		System.out.println(c);
		String d = "This is a string";
		String e = "This is a strings";
		System.out.println(d);
		if(d.equalsIgnoreCase(e)){
			System.out.println("The string D and E are same");
		}
		else{
			System.out.println("The strings are not same");
		}
		boolean f = false;
		if(a+b == 22){
			f = true;
			System.out.println(f);
		}
		else{
			System.out.println(f);
		}
		double i = 23.05;
		double j = 24.90;
		double k = i + j;
		System.out.println(k);
		for(int l=0;l<=10;l++){
			System.out.println(l + " Loop");
		}
		int n = 0;
		for(int m=1;m<=10;m++){
			n++;
			n = n*2;
			System.out.println(n);
		}
		String o = "Technology";
		String q = p + " & " + o;
		System.out.println(q);
		Scanner newScan = new Scanner(System.in);
		String r; String s;
		System.out.println("Enter string r: ");
		r = newScan.next();
		System.out.println("Enter string s: ");
		s =newScan.next();
		System.out.println(r + " " + s);
		int t = 1;
		switch(t){
		case 0:
			System.out.println("you pressed 0");
			break;
		case 1:
			System.out.println("you pressed 1");
			break;
		default:
			System.out.println("press 0 or 1");
			break;
		}
		System.out.println(u);
	}

}

