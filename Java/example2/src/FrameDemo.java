import javax.swing.*;
import java.awt.*;

public class FrameDemo{
private static void createSwing(){
JFrame frame = new JFrame("My Swing");
frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

JLabel emptyLabel = new JLabel("");
emptyLabel.setPreferredSize(new Dimension(150,100));
frame.getContentPane().add(emptyLabel,BorderLayout.CENTER);
frame.pack();
frame.setVisible(true);
}
public static void main(String[] args){
javax.swing.SwingUtilities.invokeLater(new Runnable(){
public void run(){
createSwing();
}
});
}
}