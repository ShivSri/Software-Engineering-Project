function getMacros() { 
var cal= document.getElementById('calories').value;
var carbs= document.getElementById('carbs').value;
var protein= document.getElementById('protein').value;
var fat= document.getElementById('fat').value;

var carb1= document.getElementById('carb1');
var protein1= document.getElementById('protein1');
var fat1= document.getElementById('fat1'); 

var carbCal= document.getElementById('carbCal');
var proteinCal= document.getElementById('proteinCal');
var fatCal= document.getElementById('fatCal');
//var carbGrams, proteinGrams, fatGrams;
var carbGrams = 1 ;
var proteinGrams = 1;
var fatGrams = 1 ;

carbGrams = (+cal/100) * +carbs ;
proteinGrams = (+cal/100) * +protein ;
fatGrams = (+cal/100) * +fat ;

carb1.innerHTML = carbGrams/4+' g' ; 
protein1.innerHTML = proteinGrams/4 +' g';
fat1.innerHTML = fatGrams/9 +' g'; 

carbCal.innerHTML = carbGrams +' calories';
proteinCal.innerHTML = proteinGrams +' calories'; 
fatCal.innerHTML = fatGrams +' calories'; 

}