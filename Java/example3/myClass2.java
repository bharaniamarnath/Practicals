
public class myClass2 extends myClass1 {

	public static int myFunction1(int sal){
		sal = salary + sal;
		return sal;
	}
	public static void myFunction2(String designation, String work){
		System.out.println("I am working in " + work + ".");
		System.out.println("My designation is " + designation + ".");
	}
	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		System.out.println("Hello, My name is " + name + ". My salary is Rs." + myFunction1(120000) + ".");
		myFunction2("Project manager", "Microsoft");
	}

}
