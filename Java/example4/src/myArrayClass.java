
public class myArrayClass {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		String[] names = new String[5];
		names[0] = "Alex";
		names[1] = "Benjamin";
		names[2] = "Chris";
		names[3] = "Daniel";
		names[4] = "Ed";
		int len = names.length;
		System.out.println("Total no of names: " + len);
		for(int i=0;i<len;i++){
			System.out.println(i + ". " + names[i]);
	}
}
}
