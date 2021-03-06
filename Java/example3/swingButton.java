import javax.swing.*;
import java.awt.*;
public class swingButton {

	/**
	 * @param args
	 */

	private static void createSwing(){
		JFrame frame = new JFrame("My Swing");
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.setPreferredSize(new Dimension(200,180));
		
		JLabel label = new JLabel();
		label.setPreferredSize(new Dimension(200,160));
		frame.getContentPane().add(label);
		
		JButton button = new JButton("Button 1");
		button.setVerticalTextPosition(AbstractButton.CENTER);
		button.setHorizontalTextPosition(AbstractButton.LEADING);
		button.setPreferredSize(new Dimension(100,30));
		frame.getContentPane().add(button);
		
		frame.pack();
		frame.setVisible(true);
	}
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		javax.swing.SwingUtilities.invokeLater(new Runnable(){
			public void run(){
				createSwing();
			}
		});
	}

}
