
public class myObjectTest {
public  void myFunction(String name, int age){
		System.out.println("My name is " + name);
		System.out.println("My age is " + age);
}
	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		myObjectTest mot1 = new myObjectTest();
		mot1.myFunction("Bharane", 22);
		myObjectTest mot2 = new myObjectTest();
		mot2.myFunction("Amarnath", 22);
	}

}
