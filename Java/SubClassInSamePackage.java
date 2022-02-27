package pckage1;
class BaseClass {
public int x =10;
private int y = 10;
protected int z = 10;
int a = 10;
public int getX() {
return x;
}
public void setX(int x) {
this.x = x;
}
private int getY() {
return y;
}
private void setY(int y) {
this.y = y;
}
protected int getZ() {
return z;
}
protected void setZ(int z) {
this.z = z;
}
int getA() {
return a;
}
void setA(int a) {
this.a = a;
}
}
public class SubClassInSamePackage extends BaseClass {
public static void main (String[] args) {
BaseClass rr = new BaseClass();
rr.z = 0;
SubClassInSamePackage subClassObj = new SubClassInSamePackage();
System.out.println("Value of X:" + subClassObj.x);
subClassObj.setX(20);
System.out.println("Value of X:" + subClassObj.x);
/* System.out.println("Value of Y:" + subClassObj.y);
subClassObj.setY(30);
System.out.println("Value of Y:" + subClassObj.y); */
System.out.println("Value of Z:" + subClassObj.z);
subClassObj.setZ(40);
System.out.println("Value of Z:" + subClassObj.z);
System.out.println("Value of A:" + subClassObj.a);
subClassObj.setA(50);
System.out.println("Value of A:" + subClassObj.a);
}
}
