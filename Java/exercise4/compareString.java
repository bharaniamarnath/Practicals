import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.IOException;

public class compareString{
public static void main(String[] args) throws IOException{
System.out.println("Enter Username: ");
InputStreamReader isr = new InputStreamReader(System.in);
BufferedReader br = new BufferedReader(isr);
String userName = br.readLine();
String storedName = "bharaneamarnath";
if(userName == storedName){
System.out.println(storedName);
}

}
}