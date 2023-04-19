function sorteiaNumero(){
    let numero=Math.random();
    let pHTML=document.createElement("p");
    pHTML.innerHTML=numero;

    let divNumeros=document.getElementById("numeros");
    divNumeros.appendChild(pHTML);
}