import javax.swing.*;
public class mySwing1 {

	/**
	 * @param args
	 */
	private static void createSwing(){
		JFrame frame = new JFrame("Hello Swing");
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		
		JLabel label = new JLabel("hello World");
		frame.getContentPane().add(label);
		
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
