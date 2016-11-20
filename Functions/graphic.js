function setCurrent(currentObject) {
  currentObject.id = 'current';
}

function setSpan(currentObject, string) {
  currentObject.innerHTML = "<span class='red'>" + string + '</span>';
}
