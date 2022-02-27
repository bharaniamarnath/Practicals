import java.awt.Graphics;
import java.awt.Font;
import java.awt.Color;
public class myApplet extends java.applet.Applet{
	
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	/**
	 * @param args
	 */
	Font myFont = new Font("Arial", Font.BOLD, 36);
	public void paint(Graphics g){
		// TODO Auto-generated method stub
		g.setFont(myFont);
		g.setColor(Color.red);
		g.drawString("Hello Bharane", 50, 50);
	}

}
