
public class myWhileClass {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int i = 1;
		while(i<=10){
			System.out.println("Loop " + i);
			i++;
		}
		int j = 30;
		do{
			System.out.println("Another loop " +j);
			j--;
		}while(j>=20);
		foo:
			for(int k=1;k<=5;k++)
				for(int l=1;l<=3;l++){
					System.out.println("k is " + k + " , l is " + l);
					if((k + l)>4)
						break foo;
				}
	}

}
