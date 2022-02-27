public class methodOverloadDemo {
	void sumOfParams() {
		System.out.println("No Parameters");
	}
	void sumOfParams(int a) {
		System.out.println("One Parameter: " +a);
	}
	int sumOfParams(int a, int b) {
		System.out.println("Two Parameters: " +a+ "," +b);
		return a + b;
	}
	double sumOfParams(double a, double b) {
		System.out.println("Two Double Paramaters: " +a+ "," +b);
		return a + b;
	}
public static void main (String[] args) {
	methodOverloadDemo modemo = new methodOverloadDemo();
	int intResult;
	double doubleResult;
	modemo.sumOfParams();
	System.out.println();
	modemo.sumOfParams(2);
	System.out.println();
	intResult = modemo.sumOfParams(10,20);
	System.out.println("The sum is: " + intResult);
	System.out.println();
	doubleResult = modemo.sumOfParams(1.1,2.2);
	System.out.println("The double sum is: " + doubleResult);
	System.out.println();
	} 
}