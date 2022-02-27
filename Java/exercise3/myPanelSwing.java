import javax.swing.*;
import java.awt.*;

public class myPanelSwing{
public static void createSwing(){
JFrame frame = new JFrame("My Swing");
frame.setPreferredSize(new Dimension(300,300));
frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

JPanel panel = new JPanel();
panel.setPreferredSize(new Dimension(200,100));
panel.setBorder(BorderFactory.createLineBorder(Color.black));

JLabel label = new JLabel("Hello Bharane");

JButton button = new JButton("Click Me");

panel.add(label);
panel.add(button);

frame.setContentPane(panel);
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