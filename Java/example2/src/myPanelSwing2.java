import javax.swing.*;
import java.awt.*;

public class myPanelSwing2{
public static void createSwing(){
JFrame frame = new JFrame("My Swing");
frame.setPreferredSize(new Dimension(400,300));
frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

JPanel panel = new JPanel(new BorderLayout());
panel.setPreferredSize(new Dimension(200,200));
panel.setBorder(BorderFactory.createLineBorder(Color.BLACK));

JLabel label = new JLabel("Hello Bharane");

JButton button = new JButton("Button");

panel.add(label, BorderLayout.CENTER);
panel.add(button, BorderLayout.CENTER);
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