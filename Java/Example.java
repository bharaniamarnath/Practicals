import javax.swing.JFrame;
import javax.swing.SwingUtilities;

public class Example extends JFrame {
	public Example(){
		setTitle("Simple Example");
		setSize(300,300);
		setLocationRelativeTo(null);
		setDefaultCloseOperation(EXIT_ON_CLOSE);
	}
	public static void main(String[] args){
		SwingUtilities.invokeLater(new Runnable() {
			public void run(){
				Example ex=new Example();
				ex.setVisible(true);
			}
		});
	}
}