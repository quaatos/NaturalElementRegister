/*You seeing this shit */
function singleElement() {

let atom = document.getElementById('atom');
let symbol = document.getElementById('symbol');
let atomNumber = document.getElementById('atomNumber');
let radioActive = document.getElementById('radioActive');
let kind = document.getElementById('kind');

let singleElement = document.getElementById('singleElement').value;

if (singleElement == "") {
    atom.innerText = "";
    symbol.innerText = "";
    atomNumber.innerText = "";
    radioActive.innerText = "";
    kind.innerText = "";
}

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

const requestUrl = './formulas.json';
//let atomInfo = requestUrl;

//data.atom =

//Show the JSON information on the webpage using .innerText
if (singleElement == "Hydrogen") {
    console.log(atom);
    atom.innerText = "Hydrogen";
    symbol.innerText = "H";
    atomNumber.innerText = "1";
    radioActive.innerText = "no";
    kind.innerText = "Non metal";
}

function processResponse(response) {
//JSON string

    }
}
sendRequest();
