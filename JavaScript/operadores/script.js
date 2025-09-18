/*Operadores Aritméticos

+ adição
- subtração
* multiplicação
** exponente
/ divisão
% resto da divisão
++ incremento (+1)
-- decremento (-1)
*/

var a = 10;
var b = 3;
console.log("Operador Aritmético:" + a * b); // 30



/*Operadores de Atribuição

= recebe
+=
-=
*=
/=
%=
**= 
*/

var x = 10;
x += 5; // x = x + 5
console.log("Operador de Atribuição:",  x); // 15



/*Operadores de Comparação

== igual
=== identico
!== não igual
!=== não identico
> maior
< menor
>= maior ou igual
<= menor ou igual
*/

var a = 5;
console.log("Operador de Comparação:", a >= 5); // true



/*Operadores Lógicos

&& - e
|| - ou
! - não igual
*/

let g = true;

console.log("Operador Lógico:", !g); // false



/*Operador Ternário

(condição) ? "true" : "false";
*/
var idade, eleitor;
idade = 25;
eleitor  = (idade >= 18 && idade <= 65) ? "VOTA":"NÃO VOTA";
console.log(eleitor);