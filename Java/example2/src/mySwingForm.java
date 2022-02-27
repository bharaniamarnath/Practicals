import javax.swing.*;
import java.awt.*;

public class mySwingForm{

public static void mySwingForm(){

JFrame frame;
JPanel p1, p2;
GridLayout gl42, gl21;
FlowLayout fl;
JLabel lblName, lblDept, lblCollege;
JTextField txtName, txtDept, txtCollege;
JButton btnClose, btnClear, btnSave, btnView, btnUpdate;

frame = new JFrame();
frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

p1 = new JPanel();
p2 = new JPanel();

lblName = new JLabel("Name: ");
lblDept = new JLabel("Department: ");
lblCollege = new JLabel("College: ");

txtName = new JTextField(30);
txtDept = new JTextField(30);
txtCollege = new JTextField(30);

btnClose = new JButton("Close");
btnClear = new JButton("Clear");
btnSave = new JButton("Save");
btnView = new JButton("View");
btnUpdate = new JButton("Update");

gl21 = new GridLayout(2,1);
gl42 = new GridLayout(4,2);
fl = new FlowLayout();

p1.setLayout(gl42);
p1.add(lblName);
p1.add(txtName);
p1.add(lblDept);
p1.add(txtDept);
p1.add(lblCollege);
p1.add(txtCollege);

p2.setLayout(fl);
p2.add(btnClose);
p2.add(btnClear);
p2.add(btnSave);
p2.add(btnView);
p2.add(btnUpdate);

frame.setLayout(gl21);
frame.add(p1);
frame.add(p2);
frame.pack();
frame.setVisible(true);
}
public static void main(String[] args){
javax.swing.SwingUtilities.invokeLater(new Runnable(){
public void run(){
mySwingForm();
}
});
}
}