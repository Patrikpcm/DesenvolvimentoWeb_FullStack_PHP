/*
Concatenar valores é juntar informações ou valores em uma única string
*/

var texto = "Esse texto";
var texto2 = " é uma string!!";

document.write(texto + texto2); //escrendo na página
document.write('<br><br>'); //incluindo tag html na página

document.write(texto + texto2);
document.write('<br><br>');

var alerta = prompt('Digite um texto para incluir na página!'); //lendo a informação a partir de um popup

var info = "O texto digitado foi: ";

document.write(info + alerta);
document.write('<br><br>');
