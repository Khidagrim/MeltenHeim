//
//	Lanceur de dés ou Générateur de nombres aléatoires
//


var typeDice = document.querySelector('#selection select'),
	nbDice = document.querySelector('input[type="text"]'),
	btn = document.querySelector('#lauch'),
	affichage = document.querySelector('#affichage');



function random_number(val){

	var random = Math.ceil(Math.random()*val);

	return random
}

function affichage_number(){

	var value = typeDice.value;
	var nb = parseInt(nbDice.value);

	if(!isNaN(value) && !isNaN(nb) && 20 >= nb){

		for(var i = 0; i < nb; i++){

			var nbRandom = random_number(value);

			var random = document.createElement('div');
			random.innerHTML = nbRandom;
			random.setAttribute('class', 'numbers');
			affichage.appendChild(random);

			if(value == 20 || value == 100){

				if(Math.ceil(value*0.05) >= nbRandom){

					random.style.textShadow = '0 0 1.5vh green';
					random.style.color = 'darkgreen';

				}else if(Math.ceil(value*0.95) < nbRandom){

					random.style.textShadow = '0 0 1.5vh red';
					random.style.color = 'darkred';
				}
			}

			switch(nb){

				case 1 :
				random.style.fontSize = '30vh';
				break;

				case 2 :
				random.style.fontSize = '29vh';
				break;

				case 3 :
				random.style.fontSize = '28vh';
				break;

				case 4 :
				random.style.fontSize = '27vh';
				break;

				case 5 :
				random.style.fontSize = '26vh';
				break;

				case 6 :
				random.style.fontSize = '25vh';
				break;

				case 7 :
				random.style.fontSize = '24vh';
				break;

				case 8 :
				random.style.fontSize = '23vh';
				break;

				case 9 :
				random.style.fontSize = '22vh';
				break;

				case 10 :
				random.style.fontSize = '21vh';
				break;

				case 11 :
				random.style.fontSize = '20vh';
				break;

				case 12 :
				random.style.fontSize = '19vh';
				break;

				case 13 :
				random.style.fontSize = '18vh';
				break;

				case 14 :
				random.style.fontSize = '17vh';
				break;

				case 15 :
				random.style.fontSize = '16vh';
				break;

				case 16 :
				random.style.fontSize = '15vh';
				break;

				case 17 :
				random.style.fontSize = '14vh';
				break;

				case 18 :
				random.style.fontSize = '13vh';
				break;

				case 19 :
				random.style.fontSize = '12vh';
				break;

				case 20 :
				random.style.fontSize = '11vh';
				break;

				default :
				random.style.fontSize = '10vh';
			}
		}
	}else{
		var erreur = document.createElement('div');
			erreur.innerHTML = "Rentrez une valeurs de type et un nombre entre 1 et 20";
			erreur.setAttribute('class','numbers');
			erreur.style.fontSize = '10vh';
			affichage.appendChild(erreur);
	}
}




btn.addEventListener('click', function(){

	affichage.innerHTML = "";

	affichage_number();

});

document.addEventListener('keyup', function(event){

	if(event.key == "Enter"){
		
		affichage.innerHTML = "";

		affichage_number();
	}
})