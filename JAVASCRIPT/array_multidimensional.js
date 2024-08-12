/*Primeira forma - Declarando as listas como objetos */
var frutas = ["Banana","Uva","Maça","Laranja"];
var pessoas = ["Pedro", "Lucas", "Verônica", "Luiz"];
var coisas = ["vassoura","pá", "martelo", "garrafa"];

var lista = Array(frutas, pessoas, coisas);

document.write(lista[0][0]);
document.write("<br><br>");
document.write(lista[1][1]);
document.write("<br><br>");
document.write(lista);
document.write("<br><br><br><br>");

/*Segunda forma - Declarando as listas como itens*/

var lista2 = [];
lista2['frutas'] = Array();
lista2['frutas'][0] = "Banana";
lista2['frutas'][1] = "Uva";
lista2['frutas'][2] = "Laranja";
lista2['frutas'][3] = "Goiaba";

lista2['pessoas'] = Array("Pedro", "Luiz", "Gogola", "Felipe");

lista2['coisas'] = Array("martelo","Arma","parafuso","tinta");

document.write(lista2['frutas']);
document.write("<br><br>");
document.write(lista2['pessoas']);
document.write("<br><br>");
document.write(lista2['coisas'][1]);
document.write("<br><br>");
