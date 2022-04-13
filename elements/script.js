/*You seeing this shit */
function singleElement() {

let atom = document.getElementById('atom');
let atomNumber = document.getElementById('atomNumber');
let radioActive = document.getElementById('radioActive');
let kind = document.getElementById('kind');
let boiling = document.getElementById('boiling');
let mass = document.getElementById('mass');

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

const requestUrl = JSON.parse("./formulas.json");
//let atomInfo = requestUrl;

//Show the JSON information on the webpage using .innerText
if (singleElement == "H") {
    atom.innerText = "Hydrogen";
    atomNumber.innerText = "1";
    radioActive.innerText = "no";
    kind.innerText = "Non metal";
    boiling.innerText = "-252,762 C°";
    mass.innerText = "";
}

console.log(requestUrl);

function processResponse(response) {
//JSON string

    }
}
sendRequest();
