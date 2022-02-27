public class Cube1 {
	int length;
	int width;
	int breadth;
	public int getVolume() {
		return (length * width * breadth);
	}
	public Cube1() {
		length = 10;
		width = 10;
		breadth = 10;
	}
	public Cube1(int l, int w, int b) {
		length = l;
		width = w;
		breadth = b;
	}
	public static void main (String[] args) {
		Cube1 cubeObj1;
		Cube1 cubeObj2;
		cubeObj1 = new Cube1();
		cubeObj2 = new Cube1(10,20,30);
		System.out.println("The volume of cube is: " + cubeObj1.getVolume());
		System.out.println("The volume of cube is: " + cubeObj2.getVolume());
	}
}