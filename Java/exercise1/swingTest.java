import javax.swing.*;

public class swingTest{
  public static void mySwing(){
    JFrame frame = new JFrame("Hello Swing");
    frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    
    JLabel label = new JLabel("Hello Swing");
    String s = "Hello Bharane";
    JLabel label1 = new JLabel(s);
    frame.getContentPane().add(label);
    frame.getContentPane().add(label1);
    frame.setVisible(true);
  }
  public static void main(String[] args){
    javax.swing.SwingUtilities.invokeLater(new Runnable(){
      public void run(){
        mySwing();
      }
    });
  }
}