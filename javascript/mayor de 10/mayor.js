var mayor=0;
var aux=0;
while(1<=10){
    var num = prompt("introducir numero: ");
    if(num>=aux){
        aux=num;
        mayor=num;
    }else {
        mayor=aux;
        aux=mayor;        
    }    
}
print("el numero mayor es-> ".mayor);