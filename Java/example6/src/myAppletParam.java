import java.awt.Graphics;
import java.awt.Font;
import java.awt.Color;
public class myAppletParam extends java.applet.Applet {
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	/**
	 * @param args
	 */
	Font myFont = new Font("Arial", Font.BOLD, 36);
	String name;
	
	public void init(){
		this.name = getParameter("name");
		if(this.name == null){
			this.name = "Bharane";
		}
		this.name = "Hello " + this.name;
	}
	public void paint(Graphics g){
		// TODO Auto-generated method stub
		g.setFont(myFont);
		g.setColor(Color.orange);
		g.drawString(this.name, 50, 50);
		g.setColor(Color.BLACK);
		g.drawLine(20, 30, 40, 50);
		g.drawArc(120, 120, 150, 150, 160, 190);
		g.drawRect(100, 70, 100, 70);
		g.fillRect(100, 70, 100, 70);
	}
}
