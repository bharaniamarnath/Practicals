import java.awt.*;
import javax.swing.*;
public class mySwingButton {

	/**
	 * @param args
	 */
	protected JButton button;

	private static void createSwing(){
		JFrame frame = new JFrame("My Swing");
		frame.setPreferredSize(new Dimension(200,200));
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		
		JPanel panel = new JPanel();
		panel.setPreferredSize(new Dimension(100,30));
		panel.setLocation(20, 50);
		
		JLabel label = new JLabel("Hello Label");
		label.setPreferredSize(new Dimension(100,30));
		
		JButton button = new JButton("Button");
		button.setVerticalTextPosition(AbstractButton.CENTER);
		button.setEnabled(false);
		
		panel.add(button);
		panel.add(label);
		frame.setContentPane(panel);
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
