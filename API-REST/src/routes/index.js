const { Router } = require("express")
const router = Router();

router.get('/', (req, res) => {
    res.json({ "Titulo": "Hola Mundo" });
});

// Consumiendo Nombre


router.get('/nombre', (req, res) => {
    var nombre = req.query.nombre;
    var aux = nombre.split(" ");
    var q;
    console.log(aux);
    for (let i = 0; i < aux.length; i++) {
        for (let j = 0; j < aux[i].length; j++) {
            if (aux[i][j] === '_') {
                aux[i] = aux[i].replace('_', ' ');
                console.log(aux[i][j]);
            }

        }
    }


    if (aux.length < 2) {
        console.log("parametro mal ingresado :c");

    } else {
        if (aux.length >= 3) {
            for (let i = 0, j = 1; i < (aux.length) - 2; i++, j++) {
                console.log("Nombre " + j + ": ", aux[i]);
            }
            for (let i = (aux.length) - 2, j = 1; i < aux.length; i++, j++) {
                console.log("Apellido " + j + ": ", aux[i]);
            }
        }
    }


    if (aux.length == 3) {
        res.json({ "Nombre": aux[0], "Apellido Paterno": aux[1], "Apellido Materno": aux[2] });

    } else {
        if (aux.length == 4) {
            res.json({ "Nombre 1": aux[0], "Nombre 2": aux[1], "Apellido Paterno": aux[2], "Apellido Materno": aux[3] });
        } else {
            if (aux.length == 5) {
                res.json({ "Nombre 1": aux[0], "Nombre 2": aux[1], "Nombre 3": aux[2], "Apellido Paterno": aux[3], "Apellido Materno": aux[4] });
            }
        }
    }

})


// funcion de calculo de digito verificador

router.get('/rut', (req, res) => {
    var rutdv = req.query.rut;
    var aux = 0,
        multi = 2,
        largo = 0,
        suman = 0;
    aux = rutdv;
    largo = (aux.toString().length);
    console.log("largo:", largo);
    for (let i = 0; i < largo; i++) {
        if (multi == 8)
            multi = 2;
        suman += multi * (aux % 10);
        aux /= 10;
        aux = Math.trunc(aux);
        multi++;
    }
    console.log(suman);
    var explo = suman / 11;
    console.log(explo);
    explo = Math.trunc(explo);
    console.log(explo);
    explo *= 11;
    console.log(explo);
    explo = suman - explo;
    console.log(suman);
    suman = 11 - explo;
    console.log(suman);
    if (suman == 10) {
        suman = 'k';
        res.json({ "rut": rutdv + "-" + suman });


    } else if (suman == 11) {
        suman = 0;
        res.json({ "rut": rutdv + "-" + suman });


    } else {
        res.json({ "rut": rutdv + "-" + suman });
    }


})



module.exports = router;