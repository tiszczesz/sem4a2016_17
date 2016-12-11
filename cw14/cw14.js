
window.onload = function(){
    var form = document.forms[0];
    form.onsubmit = function(){
        var imie = document.getElementById("imie");
        var nazwisko = document.getElementById("nazwisko");
        var pensja = document.getElementById("pensja");
        var imOK = ValidateString(imie);
        var nazOK = ValidateString(nazwisko);
        var penOk = ValidateNumber(pensja);
        console.log("imok = "+imOK + " nazOk = "+nazOK+" peOk = "+penOk);
        return imOK && nazOK && penOk;
    };
    function ValidateString(elem){
        var id = elem.getAttribute("id");
        var value = elem.value;
        if(value.trim().length>1){
            document.getElementById(id+"error").innerHTML="";
            return true;
        }else{
            document.getElementById(id+"error").innerHTML="Błędne dane";
            return false;
        }
    }
    function ValidateNumber(elem){
         var id = elem.getAttribute("id");
        var value = parseFloat(elem.value);
        if(!isNaN(value) && value>0){
            document.getElementById(id+"error").innerHTML="";
            return true;
        }else{
            document.getElementById(id+"error").innerHTML="Błędne dane";
            return false;
        }
    }
};

