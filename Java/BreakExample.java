public class BreakExample {
public static void main (String[] args)
{
System.out.println("Displaying from 1 to 10:");
for (int count = 1;; ++count)
{
if (count == 15)
break;
System.out.println(count);
}
}
}