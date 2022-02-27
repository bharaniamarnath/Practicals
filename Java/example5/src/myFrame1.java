import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class myFrame1 {

	/**
	 * @param args
	 */
	private static void frameSwing(){
		JFrame frame = new JFrame("My Frame");
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		
		JMenuBar menu = new JMenuBar();
		menu.setOpaque(true);
		menu.setBackground(new Color(192,192,192));
		menu.setPreferredSize(new Dimension(200,20));
		
		JLabel label = new JLabel();
		label.setOpaque(true);
		label.setBackground(new Color(255,255,255));
		label.setPreferredSize(new Dimension(200,180));
		
		frame.setJMenuBar(menu);
		frame.getContentPane().add(label,BorderLayout.CENTER);
		
		frame.pack();
		frame.setVisible(true);
	}
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		javax.swing.SwingUtilities.invokeLater(new Runnable(){
			public void run(){
				frameSwing();
			}
		});
	}

}
