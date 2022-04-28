$(function(){
    let fajlnev = "http://127.0.0.1:8000/ingatlanok";
    const tomb=[];
    const myAjax = new Ajax();

    myAjax.getAjax(fajlnev,tomb,foglalasKiir);


    $(window).on("kattintas", (event) => {
      console.log(event.detail);
    });


    function foglalasKiir() {
        const szuloelem = $(".tablafoglaSzulo");
        const sablonElem = $(".tablafoglaSablon");
        szuloelem.empty();
        sablonElem.show();
        tomb.forEach(function (elem) {
            let ujElem = sablonElem.clone().appendTo(szuloelem);
            const ujFoglalas = new Ingatlan(ujElem, elem);
    
        });
        sablonElem.hide();
    
    }

   
});