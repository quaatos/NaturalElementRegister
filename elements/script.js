/*You seeing this shit */
function singleElement() {

let atom = document.getElementById('atom');
let creation = document.getElementById('creation');
let symbol = document.getElementById('symbol');
let atomNumber = document.getElementById('atomNumber');
let radioActive = document.getElementById('radioActive');

let singleElement = document.getElementById('singleElement').value;

function requestJSON(url) {
    let request = new XMLHttpRequest();
    request.open('GET', url);
    request.send();
    request.onload = function () {
        let response = request.response;
        processResponse(response);
    }
}

function sendRequest() {
    requestJSON(requestUrl);
}

const requestUrl = '/formulas.json';
//let atomInfo = requestUrl;

//data.atom = 

//Show the JSON information on the webpage using .innerText
if (singleElement == "Hydrogen") {
    console.log(atom);
    //const atoms = JSON.parse(atomInfo);
    atom.innerText = "Hydrogen";
    creation.innerText = "All type of stars";
    symbol.innerText = "H";
    atomNumber.innerText = "1";
    radioActive.innerText = "no";
}

function processResponse(response) {
//JSON string

    }
}
sendRequest();
