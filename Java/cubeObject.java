public class Cube {
	int length = 10;
	int height = 10;
	int breadth = 10;
	public int getVolume() {
		return (length * height * breadth);
	}
public static void main (String[] args) {
	Cube cubeObj = new Cube();
	System.out.println("Volume of Cube is: " + cubeObj.getVolume());
}
}