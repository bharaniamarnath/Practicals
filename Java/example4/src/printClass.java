
public class printClass {

	/**
	 * @param args
	 */
	int x = 1;
	int y = 2;
	
	void printMe(){
		System.out.println("I am an instance of " + this.getClass().getName());
		System.out.print("x is " + x + " y is " + y);
	}
}