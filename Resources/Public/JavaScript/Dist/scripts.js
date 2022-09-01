/*!
 * dierenkliniektilburgoudnoord v1.0.0 (https://dierenkliniektilburgoudnoord.nl)
 * Copyright 2017-2022 Patrick Schriner
 * Licensed under the GPL-2.0-or-later license
 */
console.log("WE LOVE TYPO3");
function toggleButtonClicked(eventObj) {
    eventObj.currentTarget.classList.toggle('checked');
}
Array.from(document.getElementsByClassName('menu-button-container')).forEach((el) => {
    // Do stuff here
    console.log(el.addEventListener('click', toggleButtonClicked));
});