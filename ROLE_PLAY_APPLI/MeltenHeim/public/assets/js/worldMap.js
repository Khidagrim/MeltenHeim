var maps = document.querySelectorAll('article'),
	retour = document.querySelector('#retour'),
	initial = true;

function agrandissement(obj){

	obj.style.cursor = 'default';
	obj.firstChild.style.fontSize = 0;
	obj.style.animation = 'wmUp 0.7s ease-in-out both';

	initial = false;
}

maps.forEach(function(event){

	event.addEventListener('click', function(){

		for(var i = 0; i < maps.length; i++){

			maps[i].style.animation = 'wmDown 0.6s ease-in-out both';
		}
		agrandissement(this);
	});
});

retour.addEventListener('click', function(){

	if(initial === false){

		for(var i = 0; i < maps.length; i++){
		
			maps[i].style.cursor = 'pointer';
			maps[i].firstChild.style.fontSize = '7vh';
			maps[i].style.animation = 'wmNormal 0.7s ease-in-out both';
		}
		initial = true;
	}
});