import java.util.Date;
public class myExampleDate {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Date d1, d2, d3;
		
		d1 = new Date();
		System.out.println("Date 1: " + d1);
		d2 = new Date(91, 1, 21, 5, 10);
		System.out.println("Date 2: " + d2);
		d3 = new Date("March 13 1991 5:12 PM");
		System.out.println("Date 3: " + d3);
	}

}
