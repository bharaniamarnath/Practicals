import java.awt.Graphics;
import java.awt.Font;
import java.util.Date;
public class myClock extends java.applet.Applet {

	/**
	 * @param args
	 */
	Font theFont = new Font("Arial", Font.ITALIC, 36);
	Date theDate;
	
	public void start(){
		while(true){
			theDate = new Date();
			repaint();
			try{
				Thread.sleep(1000);
			}
			catch(InterruptedException e){
				
			}
		}
	}
	public void paint(Graphics g) {
		// TODO Auto-generated method stub
		g.setFont(theFont);
		g.drawString(theDate.toString(), 50, 50);
	}

}
