var num = prompt("introducir numero: ");
const limsup= Math.sqrt(num);
var con =2;
var veri=0;
while(con<=limsup){
    if(num%con==0){
        veri++;
    }
    if(veri<3){
        print('primo');
        break;
    }else{
        if(num==limsup){
            print("no es un numero primo");
        }
    }
}
