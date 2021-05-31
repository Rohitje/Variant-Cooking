// Selectors
const receptInput = document.querySelector('.receptInput');
const receptButton = document.querySelector('.recept-button');
const receptList = document.querySelector('.recept-list');
const filterOption = document.querySelector('.filter-recept');

// Event Listeners
document.addEventListener('DOMContentLoaded', getRecepts);
receptButton.addEventListener('click', addRecept);
receptList.addEventListener('click', deleteCheck);
filterOption.addEventListener('click', filterRecept);


// Functions
function addRecept(event)
{
    // Prevent form from submitting
    event.preventDefault();
    // Recept DIV
    const receptDiv = document.createElement('div');
    receptDiv.classList.add('recept');
    // Create LI
    const newRecept = document.createElement('li');
    newRecept.innerText = receptInput.value;
    newRecept.classList.add('recept-item');
    receptDiv.appendChild(newRecept);
    // Add recept to localstorage
    saveRecepts(receptInput.value);
    // Check Mark Button
    const completedButton = document.createElement('button');
    completedButton.innerHTML = '<i class="fas fa-check"></i>';
    completedButton.classList.add('complete-btn');
    receptDiv.appendChild(completedButton);
    // Check Thrash Button
    const thrashButton = document.createElement('button');
    thrashButton.innerHTML = '<i class="fas fa-trash"></i>';
    thrashButton.classList.add('thrash-btn');
    receptDiv.appendChild(thrashButton);
    // Append to list
    receptList.appendChild(receptDiv);
    // Clear recept input value
    receptInput.value = "";
}

function deleteCheck(e)
{
    const item = e.target;
    // Delete recept
    if(item.classList[0] === 'thrash-btn')
    {
        const recept = item.parentElement;
        // Animation
        recept.classList.add('fall');
        removeReceptFromStorage(recept);
        recept.addEventListener('transitioned', function()
        {
            recept.remove();
        });
    }

    // Check Mark
    if(item.classList[0] === 'complete-btn')
    {
        const recept = item.parentElement;
        recept.classList.toggle('completed');
    }
}

function filterRecept(e)
{
    const recepts = receptList.childNodes;
    recepts.forEach(function(recept)
    {
        switch(e.target.value)
        {
            case "all":
                recept.style.display = 'flex';
                break;
            case "completed":
                if(recept.classList.contains('completed'))
                {
                    recept.style.display = 'flex';
                }
                else
                {
                    recept.style.display = 'none';
                }
            break;
            case "incomplete":
                if(!recept.classList.contains('completed'))
                {
                    recept.style.display = 'flex';
                }
                else
                {
                    recept.style.display = 'none';
                }
            break;
        }
    });
}

function saveRecepts(recept)
{
    // Check of je er al 1 hebt
    let recepts;
    if(localStorage.getItem("recepts") === null)
    {
        recepts = [];
    }
    else
    {
        recepts = JSON.parse(localStorage.getItem("recepts"));
    }

    recepts.push(recept);
    localStorage.setItem('recepts', JSON.stringify(recepts));
}

function getRecepts()
{
    let recepts;
    if(localStorage.getItem('recepts') === null)
    {
        recepts = [];
    }
    else
    {
        recepts = JSON.parse(localStorage.getItem('recepts'));
    }
    recepts.forEach(function(recept)
    {
        // Recept DIV
        const receptDiv = document.createElement('div');
        receptDiv.classList.add('recept');
        // Create LI
        const newRecept = document.createElement('li');
        newRecept.innerText = recept;
        newRecept.classList.add('recept-item');
        receptDiv.appendChild(newRecept);
        // Check Mark Button
        const completedButton = document.createElement('button');
        completedButton.innerHTML = '<i class="fas fa-check"></i>';
        completedButton.classList.add('complete-btn');
        receptDiv.appendChild(completedButton);
        // Check Thrash Button
        const thrashButton = document.createElement('button');
        thrashButton.innerHTML = '<i class="fas fa-trash"></i>';
        thrashButton.classList.add('thrash-btn');
        receptDiv.appendChild(thrashButton);
        // Append to list
        receptList.appendChild(receptDiv);
    });
}

function removeReceptFromStorage(recept)
{
    let recepts;
    if(localStorage.getItem("recepts") === null)
    {
        recepts = [];
    }
    else
    {
        recepts = JSON.parse(localStorage.getItem("recepts"));
    }
    const receptIndex = recept.children[0].innerText;
    recepts.splice(recepts.indexOf(receptIndex), 1);
    localStorage.setItem("recepts", JSON.stringify(recepts));
}

//localStorage.clear();