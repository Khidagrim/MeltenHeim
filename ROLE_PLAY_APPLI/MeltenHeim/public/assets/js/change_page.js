//
//  Fonction de transition et de changement de page dans l'application
//

var buttons = document.querySelectorAll('button[data-page]'),
    divLoad = document.querySelector('#load'),
    bgColor;

function load_page(){

  if(sessionStorage.getItem('load_page_color')){
    bgColor = sessionStorage.getItem('load_page_color');
    divLoad.style.backgroundColor = bgColor;
  }

}

function transition(){

  divLoad.style.backgroundColor = bgColor;
  divLoad.style.animation = 'changePage 0.7s ease-in both';
}

function change_page(val){

  console.log("val = "+val);

  var url;
    if(val != "index")
    {
      url = val ;
    }
    else
    {
      url = val;
      bgColor = '#4d004d';
      sessionStorage.setItem('load_page_color', bgColor);
    }

    transition();  

    setTimeout(function(){
      window.location = url;
    }, 800);
}


buttons.forEach(function(event){

  event.addEventListener('click', function(){

    if(this.dataset.color !== undefined)
    {
      bgColor =this.dataset.color;
    }
    else
    {
      bgColor = getComputedStyle(this).backgroundColor;
    }
    sessionStorage.setItem('load_page_color', bgColor);

    change_page(this.dataset.page);

  });
});
console.log("yo");
load_page();
