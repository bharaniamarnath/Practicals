public class ContinueExample {
public static void main (String[] args)
{
System.out.println("Displaying odd numbers:");
for (int count = 1; count <=10; ++count)
{
if (count % 2 == 1)
{
System.out.println(count);
continue;
}
}
}
}