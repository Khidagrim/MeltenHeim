let currentCreatureId;
let currentCreature;
let iteration_number = 1;

const init = () =>
{
    giveCreatureEventListener();
}

const giveCreatureEventListener = () =>
{
    const btn = document.getElementById("getCrea");
    btn.addEventListener("click",(e)=>{
        getCreature(e);
    });
}

const giveButtonEventListeners = () =>
{
    const btn = document.getElementsByClassName("modif");

    for(let i = 0, n = btn.length; i<n; i++)
    {
        btn[i].addEventListener("click",(e)=>{
            changeValue(e);
        });
    }

    const btn2 = document.getElementsByClassName("red");
    for(let i = 0, n = btn2.length; i<n; i++)
    {
        btn2[i].addEventListener("click",(e)=>{
            destroy(e);
        });
    }

}

const destroy = (e) =>
{
    e.target.parentNode.parentNode.parentNode.parentNode.removeChild(e.target.parentNode.parentNode.parentNode);
}

const changeValue = (e) =>
{
    let parent = e.target.parentNode;
    let p = parent.getElementsByClassName('data-change')[0];
    let input = parent.getElementsByTagName("input")[0];
    let val = parseInt(p.value);
    let inputVal = parseInt(input.value);
    
    p.innerHTML = val + inputVal;
}

const getCreature = (e) =>
{
    const select = document.getElementById("selectCrea");
    const input = document.getElementById("lvlInput");
    const lvl = input.value;

    ajax(getUrl()+"fight/"+select.options[select.selectedIndex].value+"/"+lvl);
}

const getUrl = () =>
{
    const url = document.querySelectorAll('[data-url]')[0];
    return url.dataset.url;
}

const addHTML = (body) =>
{
  console.log(body);
  const parent = document.getElementsByClassName('creatureArea')[0];

  let html = `
  <div class="card" style="width: 19.5rem;">
    <div class="topPart">
      <div class="leftPart">
        <img class="card-img-top" src="`+ getUrl()+"assets/images/creatures/"+body["Image"]+`" alt="Card image cap">
      </div>
      <div class="rightPart">
      <h6>Stats : </h6>
        <ul>
          <li><img src="`+ getUrl()+"assets/images/icons/Vie.png"+`"></i> <input class="data-change" value="${body.Vie}"><p>/${body.Vie}</p></li>
          <li><img src="`+ getUrl()+"assets/images/icons/Force.png"+`"></i> <input class="data-change" value="${body.Force}"></li>
          <li><img src="`+ getUrl()+"assets/images/icons/Dext.png"+`"></i> <input class="data-change" value="${body.Dext}"></li>
          <li><img src="`+ getUrl()+"assets/images/icons/Init.png"+`"></i> <input class="data-change" value="${body.Init}"></li>
          <li><img src="`+ getUrl()+"assets/images/icons/Magie.png"+`"></i> <input class="data-change" value="${body.Magie}"></li>
          <li><img src="`+ getUrl()+"assets/images/icons/Mana.png"+`"></i> <input class="data-change" value="${body.Mana}">/${body.Mana}</li>
          <li><img src="`+ getUrl()+"assets/images/icons/Symbiose.png"+`"></i> <input class="data-change" value="${body.Symbiose}">/${body.Symbiose}</li>
          <li><img src="`+ getUrl()+"assets/images/icons/Rage.png"+`"></i> <input class="data-change" value="${body.Rage}"><p>/${body.Rage}</p></li>
          <li><img src="`+ getUrl()+"assets/images/icons/Armure_phy.png"+`"></i> <input class="data-change" value="${body.Armure_phy}"></li>
          <li><img src="`+ getUrl()+"assets/images/icons/Armure_mag.png"+`"></i> <input class="data-change" value="${body.Armure_mag}"></li>
        </ul>
      </div>
    </div>
    <div class="bottomPart">
      <div class="card-body">
        <h5 class="card-title">${body.Nom}</h5>
        <textarea class="card-text" cols="30" rows="15">${body.Description}</textarea>
        <button class="red bootstrapButton">X</button>
      </div>
    </div>
  </div>
  `;

let htmlBefore = parent.innerHTML;
parent.innerHTML = htmlBefore + html;
iteration_number++;
giveButtonEventListeners();
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
    addHTML(body);
  });
}





init();