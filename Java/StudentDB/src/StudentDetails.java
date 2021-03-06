import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JTextField;

public class StudentDetails {

	/**
	 * @param args
	 */
	public void Details(){
		JFrame frame;
		JPanel p1,p2;
		JLabel lblId,lblName,lblDept,lblYear,lblUniversity;
		final JTextField txtId,txtName,txtDept,txtYear,txtUniversity;
		GridLayout gl21,gl52;
		FlowLayout fl;
		JButton btnSave,btnReset,btnClose;
		
		frame = new JFrame("Student Details");
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.setPreferredSize(new Dimension(300,250));
		frame.setResizable(false);
		frame.setBackground(Color.gray);
		
		lblId = new JLabel("Student ID: ");
		lblName = new JLabel("Student Name: ");
		lblDept = new JLabel("Department: ");
		lblYear = new JLabel("Year: ");
		lblUniversity = new JLabel("University: ");
		
		txtId = new JTextField(10);
		txtName = new JTextField(30);
		txtDept = new JTextField(30);
		txtYear = new JTextField(10);
		txtUniversity = new JTextField(50);
		
		btnSave = new JButton("Save");
		btnReset = new JButton("Reset");
		btnClose = new JButton("Close");
		
		btnSave.addActionListener(new ActionListener(){
			public void actionPerformed(ActionEvent e){
				String Id = txtId.getText();
				String Name = txtName.getText();
				String Dept = txtDept.getText();
				String Year = txtYear.getText();
				String University = txtUniversity.getText();
				
				inputRecord();
			}
		});
		
		
		btnReset.addActionListener(new ActionListener(){
			public void actionPerformed(ActionEvent e){
				txtId.setText(null);
				txtName.setText(null);
				txtDept.setText(null);
				txtYear.setText(null);
				txtUniversity.setText(null);
			}
		});
		
		gl52 = new GridLayout(5,2);
		gl21 = new GridLayout(2,1);
		fl = new FlowLayout();
		fl.setAlignment(FlowLayout.RIGHT);
		
		p1 = new JPanel();
		p2 = new JPanel();
		p1.setBorder(BorderFactory.createEmptyBorder(5, 5, 5, 5));
		
		p1.setLayout(gl52);
		p1.add(lblId);
		p1.add(txtId);
		p1.add(lblName);
		p1.add(txtName);
		p1.add(lblDept);
		p1.add(txtDept);
		p1.add(lblYear);
		p1.add(txtYear);
		p1.add(lblUniversity);
		p1.add(txtUniversity);
		
		p2.setLayout(fl);
		p2.add(btnSave);
		p2.add(btnReset);
		p2.add(btnClose);
		
		frame.setLayout(gl21);
		frame.add(p1);
		frame.add(p2);
		frame.pack();
		frame.setVisible(true);
	}
	
	public static void inputRecord(){
		Connection conn = null;
		String url = "jdbc:mysql://localhost:3306/";
		String dbname = "myjavadb";
		String driver = "com.mysql.jdbc.Driver";
		String uname = "bharane";
		String pswd = "21feb1991";
		
		try{
			Class.forName(driver).newInstance();
			conn = DriverManager.getConnection(url + dbname, uname, pswd);
			PreparedStatement statement = conn.prepareStatement("INSERT INTO student (student_id, name, department, year, university) VALUES (?,?,?,?,? )");
			statement.setString(1, Id);
			statement.setString(2, Name);
			statement.setString(3, Dept);
			statement.setString(4, Year);
			statement.setString(5, University);
			statement.executeQuery();
		}
		catch(Exception e){
			e.printStackTrace();
		}
		
	}
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		javax.swing.SwingUtilities.invokeLater(new Runnable(){
			public void run(){
				Details();
			}

		});
	}

}
