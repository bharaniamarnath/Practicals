
public class printSubClass2 extends printClass {

	/**
	 * @param args
	 */
	int z = 3;
	void printMe(){
		super.printMe();
		System.out.print(" z is " + z);
	}
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		printSubClass2 obj = new printSubClass2();
		obj.printMe();
	}

}
