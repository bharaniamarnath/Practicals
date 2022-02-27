class forSearch{
public static void main(String[] args){
String[] myArray = {"Alfred", "Bale", "Joker", "Ducard", "Bane", "Twoface", "Rachel"};
String search = "Bale";
int i;
boolean found = false;
for(i=0;i<=myArray.length;i++){
if(myArray[i] == search){
found = true;
break;
}
}
if(found){
System.out.println("Found " + search + " at " + i);
}
else{
System.out.println(search + " not found");
}
}
}