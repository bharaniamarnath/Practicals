
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Statement;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author User
 */
public class myDatabaseInsert {
    
    public static void main(String[] args){
    
try{
Connection con = DriverManager.getConnection("jdbc:mysql://localhost/myjavadb","bharane","21feb1991");

Statement stmt = (Statement) con.createStatement();


String insert = "INSERT INTO testtable VALUES ('amardus', '21feb1991')";

stmt.executeUpdate(insert);

}
catch(Exception e){
}
    }
    
}
