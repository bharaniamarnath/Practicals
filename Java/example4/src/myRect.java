import java.awt.Point;
public class myRect {
	int x1 = 0;
	int y1 = 0;
	int x2 = 0;
	int y2 = 0;
	myRect drawRect(int x1, int x2, int y1, int y2){
		this.x1 = x1;
		this.y1 = y1;
		this.x2 = x2;
		this.y2 = y2;
		return this;
	}
	myRect drawRect(Point topLeft, Point bottomRight){
		x1 = topLeft.x;
		y1 = topLeft.y;
		x2 = bottomRight.x;
		y2 = bottomRight.y;
		return this;
	}
	myRect drawRect(Point topLeft, int w, int h){
		x1 = topLeft.x;
		y1 = topLeft.y;
		x2 = (x1 + w);
		y2 = (y1 + h);
		return this;
	}
	void printRect(){
		System.out.print("<" + x1 + "," + x2);
		System.out.println("," + y1 + "," + y2 + ">");
	}
	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		myRect rect = new myRect();
		System.out.println("For first function: ");
		rect.drawRect(25, 25, 50, 50);
		rect.printRect();
		System.out.println("For second function: ");
		rect.drawRect(new Point(10,10), new Point(20,20));
		rect.printRect();
		System.out.println("For third function: ");
		rect.drawRect(new Point(20,20), 30, 40);
		rect.printRect();
	}

}
