import javax.swing.*;
public class mySwing {
	public static void main(String[] args){
		JFrame myFrame = new JFrame("My Frame");
		myFrame.setVisible(true);
		myFrame.setSize(200,200);
		myFrame.setDefaultCloseOperation(myFrame.EXIT_ON_CLOSE);
		JPanel myPanel = new JPanel();
		myFrame.add(myPanel);
		JLabel myLabel = new JLabel("Hello Bharane");
		myPanel.add(myLabel);
		int a = 20;
		int b = 30;
		int c = a + b;
		JLabel result = new JLabel(c);
		myPanel.add(result);
	}
}