
public class myConstructor {
	String name;
	int age;
	myConstructor(String n, int a){
		name = n;
		age = a;
	}
	void printMyConstructor(){
		System.out.println("My name is " + name);
		System.out.println("I am " + age + "years old");
	}
	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		myConstructor mc;
		mc = new myConstructor("Bharane", 22);
		mc.printMyConstructor();
	}

}
