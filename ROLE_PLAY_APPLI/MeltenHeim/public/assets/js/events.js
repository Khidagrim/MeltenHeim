let currentBiomeId;
let currentBiome;
console.log('hello');
const init = () =>
{
    giveBiomeButtonsEvents();
}

const giveBiomeButtonsEvents = () =>
{
    const biomes = document.querySelectorAll('[data-biome]');
    for(let i = 0, n = biomes.length; i<n; i++)
    {
        biomes[i].addEventListener("click", (e) => {
            getBiome(e);
        });
    }
}

const getBiome = (e) =>
{
    currentBiomeId = e.target.dataset.biome;
    console.log(e.target);

    ajax(getUrl()+"events/get/"+currentBiomeId);
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
        objs[i].style.backgroundImage = 'url('+getUrl()+'assets/images/events/'+body.Image+')';
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