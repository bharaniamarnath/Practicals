
import java.sql.*;


public class DBConnect {
    private Connection con;
    private Statement st;
    private ResultSet rs;
    
    public DBConnect(){
        try{
            Class.forName("com.mysql.jdbc.Driver");
            con = DriverManager.getConnection("jdbc:mysql://localhost:3306/students","bharane","21feb1991");
            st = con.createStatement();
           
        }catch(Exception ex){
            System.out.println("Error:" + ex);
        }
    }
    public void getData(){
        try{
            String query = "SELECT * FROM details";
            rs = st.executeQuery(query);
            while(rs.next()){
            String name = rs.getString("name");
            String dept = rs.getString("dept");
            System.out.println("Name: " + name + " Department: " + dept);
            }
        }catch(Exception ex){
            System.out.println(ex);
        }
    }
}
