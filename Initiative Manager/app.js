console.log("cc");

let objName = document.getElementById("name");
var objInit = document.getElementById("init");

var btnAdd = document.getElementById("add");
var btnOrder = document.getElementById("order");

var divSort = document.getElementById("ordered");

var listOfObj = [];
var numOfTurns = 0;

//---------------------- || Event listeners || ---------------------------\\

btnAdd.addEventListener("click",addObj);
btnOrder.addEventListener("click",order);

function addObj (el)
{
    //Create && Add obj to the list
    var obj = {
        name : objName.value,
        init : parseInt(objInit.value),
        numOfApparition : null
    }

    listOfObj.push(obj);

    //See in console
    listInConsole();
}

function giveMin()
{
    let min= 10000;
    for(var i = 0, n = listOfObj.length; i<n; i++)
    {
        if(min > listOfObj[i].init)
        {
            min = listOfObj[i].init;
        }
    }
    return min;
}

function order (el)
{
    let sum = sumOfInit();
    let min = giveMin();
    numOfTurns = sum / min;
    console.log("Sum of turns = "+Math.round(numOfTurns));
    setObjNumOfApparition(sum, min);
    sortArray();
    
    console.log("display -------------------------- ");

    displayInCorrectOrder(sum);
}

function setObjNumOfApparition(sum, min)
{
    for(var i = 0, n = listOfObj.length; i<n; i++)
    {
        listOfObj[i].numOfApparition = Math.round(listOfObj[i].init/min);
        console.log("Num of apparition of the perso "+listOfObj[i].name+" = "+listOfObj[i].numOfApparition);
    }
}

function sortArray()
{
    for(var i = 0, n = listOfObj.length; i<n; i++)
    {
        for(var j = 0, n = listOfObj.length; j<n; j++)
        {
            if(listOfObj[i].numOfApparition > listOfObj[j].numOfApparition)
            {
                let dum = listOfObj[i];
                listOfObj[i] = listOfObj[j];
                listOfObj[j] = dum;
            }
        }
    }
}

function displayInCorrectOrder(sum)
{
    dum = false;
    for(var i = 0, n = listOfObj.length; i<n; i++)
    {
        if(listOfObj[i].numOfApparition > 0)
        {
            console.log("Display : "+listOfObj[i].name+" at position = "+i);
            listOfObj[i].numOfApparition --;
            if(listOfObj[i].numOfApparition > 0)
            {
                dum = true;
            }
        }
    }

    if(dum)
    {
        displayInCorrectOrder();
    }
}

function sumOfInit()
{
    let sum = 0;
    for(var i = 0, n = listOfObj.length; i<n; i++)
    {
        sum += listOfObj[i].init;
    }
    console.log("sum of init = "+sum);
    return sum;
}

function listInConsole()
{
    for(var i = 0, n = listOfObj.length; i<n; i++)
    {
        console.log("L'objet n°"+i+" a pour nom : "+listOfObj[i].name+" et pour initiative : "+listOfObj[i].init);
    }
}

//---------------------- || UI || ---------------------------\\


