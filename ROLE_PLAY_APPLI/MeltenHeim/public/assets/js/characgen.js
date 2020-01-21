let raceId,classeId;
let currentCharacter;

const init = () =>
{
    giveCreatureEventListener();
}

const giveCreatureEventListener = () =>
{
    const btn = document.getElementById('getCrea');
    btn.addEventListener("click", (e) => {
        console.log("hiho");
        getCharacter(e);
    });
}

const getCharacter = (e) =>
{
    let race = document.getElementById('selectRace');
    raceId = race.options[race.selectedIndex].value;

    let classe = document.getElementById('selectClasse');
    classeId = classe.options[classe.selectedIndex].value;

    let lvl = document.getElementById('lvlInput');
    let lvlValue = lvl.value;
    console.log('characgen = = '+raceId+"/"+classeId+"/"+lvlValue)
    ajax(getUrl()+"characGen/"+raceId+"/"+classeId+"/"+lvlValue);
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
          <li><img src="`+ getUrl()+"assets/images/icons/Vie.png"+`"></i> <p class="data-change">${body.Vie}</p><p>/${body.Vie}</p></li>
          <li><img src="`+ getUrl()+"assets/images/icons/Force.png"+`"></i> <p class="data-change">${body.Force}</p></li>
          <li><img src="`+ getUrl()+"assets/images/icons/Dext.png"+`"></i> <p class="data-change">${body.Dext}</p></li>
          <li><img src="`+ getUrl()+"assets/images/icons/Init.png"+`"></i> <p class="data-change">${body.Init}</p></li>
          <li><img src="`+ getUrl()+"assets/images/icons/Magie.png"+`"></i> <p class="data-change">${body.Magie}</p></li>
          <li><img src="`+ getUrl()+"assets/images/icons/Mana.png"+`"></i> <p class="data-change">${body.Mana}</p></li>
          <li><img src="`+ getUrl()+"assets/images/icons/Symbiose.png"+`"></i> <p class="data-change">${body.Symbiose}</p></li>
          <li><img src="`+ getUrl()+"assets/images/icons/Rage.png"+`"></i> <p class="data-change">${body.Rage}</p><p>/${body.Rage}</p></li>
          <li><img src="`+ getUrl()+"assets/images/icons/Armure_phy.png"+`"></i> <p class="data-change">${body.Armure_phy}</p></li>
          <li><img src="`+ getUrl()+"assets/images/icons/Armure_mag.png"+`"></i> <p class="data-change">${body.Armure_mag}</p></li>
          <li><img src="`+ getUrl()+"assets/images/icons/Stats.png"+`"></i> <p class="data-change">${body.Stats}</p></li>
        </ul>
      </div>
    </div>
    <div class="bottomPart">
      <div class="card-body">
        <h5 class="card-title">${body.Nom}</h5>
        <textarea class="card-text" cols="30" rows="10">${body.Description}</textarea>
        <button class="red bootstrapButton">X</button>
      </div>
    </div>
  </div>
  `;

let htmlBefore = parent.innerHTML;
parent.innerHTML = htmlBefore + html;
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