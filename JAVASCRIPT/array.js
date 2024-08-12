/*
Diferente das variáveis convencionais, em javascript o tipo array deve ser declarado
*/
var frutas = Array("banana", "Maçã", "Morango", "Uva");
var frutas2 = ["banana", "Maçã", "Morango", "Uva"]; //declarando com colchetes ele entende que o objeto é um array

frutas[4] = "bergamota";
frutas2[5] = "mimosa";

frutas[1] = "Jaca";

document.write(frutas);
document.write("<br>");
document.write(frutas2);
document.write("<br>")
document.write(frutas[1]);
document.write("<br>")
document.write(frutas2[1]);