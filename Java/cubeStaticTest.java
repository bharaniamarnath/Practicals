class Cube {
	int height = 10;
	int length = 10;
	int breadth = 10;
	public static int numOfCubes = 0;
	public static int getNoOfCubes() {
		return numOfCubes;
	}
	public Cube() {
		numOfCubes++;
	}
}
public class cubeStaticTest {
	public static void main(String[] args) {
		System.out.println("No of cubes:" + Cube.numOfCubes);
		System.out.println("No of cubes:" + Cube.getNoOfCubes());
	}
}