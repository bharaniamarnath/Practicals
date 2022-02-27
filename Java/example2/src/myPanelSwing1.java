import javax.swing.*;
import java.awt.*;

public class myPanelSwing1{
private static void createSwing(){
JFrame frame = new JFrame("My Swing");
frame.setPreferredSize(new Dimension(400,300));
frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

JPanel panel = new JPanel();
panel.setBorder(BorderFactory.createLineBorder(Color.BLACK));
panel.setPreferredSize(new Dimension(200,200));

JPanel panel1 = new JPanel();
panel1.setBorder(BorderFactory.createLineBorder(Color.BLACK));
panel1.setPreferredSize(new Dimension(100,200));

JLabel label = new JLabel("Hello World");
label.setPreferredSize(new Dimension(100,50));

JButton button = new JButton("Click Me");

JLabel label1 = new JLabel("Hello World");
label.setPreferredSize(new Dimension(100,50));

JButton button1 = new JButton("Click Me");

panel.add(label);
panel.add(button);
frame.add(panel);

panel1.add(label1);
panel1.add(button1);
frame.add(panel1);

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