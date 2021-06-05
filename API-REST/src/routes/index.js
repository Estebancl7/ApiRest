const { Router, json } = require("express")
const router = Router();

router.get('/', (req, res) => {
    res.json({ "Titulo": "Hola Mundo" });
});

module.exports = router;