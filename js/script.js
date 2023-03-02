
/*var button = document.getElementById("esconder-mostrar")



button.addEventListener("click", function () {

var container = document.getElementById("container")

    if (container.style.display === "none") {
        container.style.display = "block"
    } else {
        container.style.display = "none"
    }

})
*/
var controleCampo = 1;
function adicionarCampo() {
    controleCampo++

    document.getElementById('infos').insertAdjacentHTML('afterend', '<div class="infos" id="campo' + controleCampo + '"><div id="exercicio"><label>Exercício:</label><br><input name="exercicio" id="exercicio" type="text" placeholder=""></div><br><div id="series"><label>Séries:</label><br><input name="series" id="series" type="text" placeholder=""></div><br><div id="repeticoes"><label>Repetições:</label><br><input name="repeticoes" id="repeticoes" type="text" placeholder=""></div><br><button class="add" type="button" onclick="adicionarCampo()">+</button><br><br></div>')
}
