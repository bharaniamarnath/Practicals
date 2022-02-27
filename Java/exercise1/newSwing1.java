import java.awt.*;
import javax.swing.*;

public class newSwing1{
	private static void mySwing1(){
		JFrame frame = new JFrame("My Swing 1");
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		
		JButton button = new JButton("Click Me");
		button.setPreferredSize(new Dimension(100,30));
		button.setBackground(new Color(255,255,255));
		frame.getContentPane().add(button,BorderLayout.CENTER);
		
		frame.pack();
		frame.setVisible(true);
	}
	public static void main(String[] args){
		javax.swing.SwingUtilities.invokeLater(new Runnable(){
			public void run(){
				mySwing1();
			}
		});
	}
}