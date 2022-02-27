class conditionCheck{
public static void main(String[] args){
int movie = 12;
char grade;
if(movie == 11){
grade = 'U';
}
else if(movie == 10){
grade = 'A';
}
else if(movie == 12){
grade = 'A';
}
else{
grade = 'S';
}
System.out.println("Movie Grade: " + grade);
}
}