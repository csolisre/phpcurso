/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
let alleBolletjes = document.getElementsByTagName('li');
let aantalBolletjes = alleBolletjes.length;
let tweedeItem = alleBolletjes[1];
tweedeItem.removeChild(tweedeItem.childNodes[0]);
let tekst = document.createTextNode('C#');
tweedeItem.appendChild(tekst);

 