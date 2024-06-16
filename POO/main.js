class Comida {
    constructor(id, nombre, color) {
        this.id = id;
        this.nombre = nombre;
        this.color = color;
    }
    nombrar() {
        return `${this.nombre} de color ${this.color}`;
    }
}
class Galleta extends Comida {
    constructor(id, nombre, color, sabor) {
        super(id, nombre, color);
        this.sabor = sabor;
    }
    nombrarGalleta() {
        return `Galleta ${this.nombre} de sabor ${this.sabor}`;
    }
}
const manzana = new Comida(1, "manzana", "rojo");
const pera = new Comida(2, "pera", "verde");
//console.log(manzana.nombrar());
//console.log(pera.nombrar());
const oreo = new Galleta(3, 'oreo', 'negro', 'chocolate');
const chokis = new Galleta(4, 'chokis', 'marron', 'vainilla');
//console.log(oreo.nombrarGalleta());  
console.log(chokis.nombrar());
console.log(chokis.nombrarGalleta());