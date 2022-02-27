import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.IOException;
public class Stream{
public static void main(String[] args) throws IOException{
InputStreamReader isr = new InputStreamReader(System.in);
InputStreamReader isr1 = new InputStreamReader(System.in);
BufferedReader br = new BufferedReader(isr);
BufferedReader br1 = new BufferedReader(isr1);
String input = br.readLine();
String input1 = br1.readLine();
System.out.println(input);
System.out.println(input1);
}
}