let currentCreatureId;
let currentCreature;

const init = () =>
{
    giveCreatureEventListener();
}

const giveCreatureEventListener = () =>
{
    const creatures = document.getElementsByClassName('change-sheet');
    for(let i = 0, n = creatures.length; i<n; i++)
    {
        creatures[i].addEventListener("click", (e) => {
            getCreature(e);
        });
    }
}

const getCreature = (e) =>
{
    currentCreatureId = e.target.dataset.creature;
    ajax(getUrl()+"creature/"+currentCreatureId);
}

const getUrl = () =>
{
    const url = document.querySelectorAll('[data-url]')[0];
    return url.dataset.url;
}

const changeHTML = (body) =>
{
  console.log(body);
    let objs = document.querySelectorAll('[data-item]');

    for(let i = 0, n = objs.length;i<n;i++)
    {
      if(objs[i].dataset.item !== "Image")
      {
          objs[i].innerHTML = objs[i].dataset.item + " = " + body[objs[i].dataset.item];
      }
      else
      {
        console.log('url('+getUrl()+'assets/images/creatures/'+body.Image+')');
        objs[i].style.backgroundImage = 'url('+getUrl()+'assets/images/creatures/'+body.Image+')';
        console.log(objs[i])
      }
        
    }
}

const ajax = (destination) =>
{
  let opts = {
    method: 'GET',      
    headers: {}
  };
  fetch(destination, opts).then(function (response) {
    return response.json();
  })
  .then(function (body) {
    changeHTML(body);
  });
}




init();