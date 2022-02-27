import javax.swing.*;
public class testFrame extends JFrame{
	public testFrame(){
		setTitle("My Test Frame");
		setSize(300,200);
		setLocationRelativeTo(null);
		setDefaultCloseOperation(EXIT_ON_CLOSE);		
	}
}
public static void main(String[] args){
	SwingUtilities.invokeLater()
		testFrame t = new testFrame();
}