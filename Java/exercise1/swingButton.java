package components;

import javax.swing.AbstractButton;
import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.JButton;

public class swingButton extends JPanel{

	protected JButton b1,b2;
	
	public void swingButton(){
		JButton b1 = new JButton("Button 1");
		b1.setHorizontalTextPosition(AbstractButton.LEADING);
		b1.setVerticalTextPosition(AbstractButton.CENTER);
		
		JButton b2 = new JButton("Button 2");
		b2.setHorizontalTextPosition(AbstractButton.LEADING);
		b2.setVerticalTextPosition(AbstractButton.CENTER);
		
		b1.setToolTipText("This is button 1");
		b2.setToolTipText("This is button 2");
		
		add(b1);
		add(b2);
}

private static void createSwing(){
	JFrame frame = new JFrame("My Swing");
	frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
	
	swingButton newContentPane = new swingButton();
	newContentPane.setOpaque(true);
	frame.setContentPane(newContentPane);
	
	frame.pack();
	frame.setVisible(true);
}

public static void main (String[] args){
	javax.swing.SwingUtilities.invokeLater(new Runnable(){
		public void run(){
			createSwing();
		}
	});
}

}