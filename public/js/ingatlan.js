class Ingatlan{

    constructor(elem, adat){
        this.elem=elem;
        this.adat=adat;
        this.kategoria=this.elem.children(".kategoria");
        this.leiras=this.elem.children(".leiras");
        this.datum=this.elem.children(".datum");
        this.tehermentes=this.elem.children(".tehermentes");
        this.fenykep=this.elem.children(".fenykep");
        this.erdekel=this.elem.children(".erdekel");
        this.setAdatok(this.adat);
        
        this.erdekel.on("click",()=>{
            this.kattintasTrigger();
            //console.log("Hii");
        });
    }

    setAdatok(ertekek){
        
        this.kategoria.html(ertekek.kategoria);
        this.leiras.html(ertekek.leiras);
        this.datum.html(ertekek.hirdetesDatuma);
        this.tehermentes.html(ertekek.tehermenetes);
        this.fenykep.html(ertekek.kepUrl);
        
    }

    kattintasTrigger(){
        let esemeny=new CustomEvent("kattintas",{
            detail:this.adat,

        });
        window.dispatchEvent(esemeny);

    }


}