
window.onload = function () {
    document.getElementById("form1").onsubmit = function () {
        var imie = document.getElementById("imie");
        var nazwisko = document.getElementById("nazwisko");
        var pensja = document.getElementById("pensja");
        var imOK = Validate(imie);
        var nazOK = Validate(nazwisko);
        var penOK = ValidateNumber(pensja);
        return imOK && nazOK && penOK;
    };

    function Validate(elem) {
        var id = elem.getAttribute("id");
        var val = elem.value;
        var error = document.getElementById("error" + id);
        if (val.trim() !== "") {
            error.innerHTML = "";
            return true;
        } else {
            error.innerHTML = "Błędne dane!";
            return false;
        }
    }
    function ValidateNumber(elem) {
        var id = elem.getAttribute("id");
        var val = parseInt(elem.value);
        var error = document.getElementById("error" + id);
        if (!isNaN(val)) {
            error.innerHTML = "";
            return true;
        } else {
            error.innerHTML = "Błędne dane!";
            return false;
        }
    }
};

