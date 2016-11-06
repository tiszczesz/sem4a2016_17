
window.onload = function (){
    document.getElementById("pswd").onkeyup = function(){
        var pswd = document.getElementById("pswd").value;
        var wynik = document.getElementById("wynik");
        if(pswd.length>6 && /\d/.test(pswd)){
            //wynik.innerHTML = "<p class='dobre'>DOBRE</p>";
            document.getElementById("pswd").style.backgroundColor = "green";
        }else if(pswd.length>3 && CzyJestCyfra(pswd)){
            document.getElementById("pswd").style.backgroundColor = "blue";
           // wynik.innerHTML = "<p class='srednie'>ŚREDNIE</p>";
        }else{
            document.getElementById("pswd").style.backgroundColor = "yellow";
           // wynik.innerHTML = "<p class='slabe'>SŁABE</p>";
        }
    }
    document.getElementById("sprawdz").onclick = function (){
        var pswd = document.getElementById("pswd").value;
        var wynik = document.getElementById("wynik");
        if(pswd.length>6 && /\d/.test(pswd)){
            wynik.innerHTML = "<p class='dobre'>DOBRE</p>";
        }else if(pswd.length>3 && CzyJestCyfra(pswd)){
            wynik.innerHTML = "<p class='srednie'>ŚREDNIE</p>";
        }else{
            wynik.innerHTML = "<p class='slabe'>SŁABE</p>";
        }
    };
    function CzyJestCyfra(tekst){
        for(var i=0;i<tekst.length;i++){
            if(tekst[i]>='0' && tekst[i]<='9'){
                return true;
            }
        }
        return false;
    }
    
};

