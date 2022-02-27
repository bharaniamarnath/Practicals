import javax.swing.*;
import javax.swing.border.EmptyBorder;
import java.awt.*;

public class myTextField{
private static void myTextField(){
JFrame frame = new JFrame("My Text Swing");
frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
frame.setResizable(false);
JPanel newPane = new JPanel(new GridLayout(2,6,6,30));
newPane.setBorder(new EmptyBorder(5,5,5,5));
JLabel textLabel = new JLabel("Enter Username: ");
JTextField myText = new JTextField(10);
JLabel passLabel = new JLabel("Enter Password: ");
JPasswordField myPassword = new JPasswordField(10);
JButton button = new JButton("Click");
newPane.add(textLabel);
newPane.add(myText);
newPane.add(passLabel);
newPane.add(myPassword);
newPane.add(button);
frame.setContentPane(newPane);
frame.pack();
frame.setVisible(true);
}
public static void main(String[] args){
javax.swing.SwingUtilities.invokeLater(new Runnable(){
public void run(){
myTextField();
}
});
}
}