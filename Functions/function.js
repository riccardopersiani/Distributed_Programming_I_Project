function checkLoginValues() {
  var user = document.getElementById('Username').value;
  var pass = document.getElementById('Password').value;
  if ((user === '') || (pass === '')) {
    window.alert('You miss a field! Please fill it before send your request!');
  }else {
    document.getElementById('LoginForm').submit();
  }
}

function checkRegistrationValues() {
  var name = document.getElementById('Name').value;
  var lastname = document.getElementById('Lastname').value;
  var user = document.getElementById('Username').value;
  var pass = document.getElementById('Password').value;
  var confPass = document.getElementById('ConfirmPassword').value;
  if ((name === '') || (lastname === '') || (user === '') || (pass === '') || (confPass === '')) {
    window.alert('You miss a field! Please fill it before send your request!');
  }else {
    document.getElementById('RegistrationForm').submit();
  }
}

function checkReservationValues() {
  var hour = document.getElementById('Hour').value;
  var min = document.getElementById('Minute').value;
  var dur = document.getElementById('Duration').value;
  if ((hour === '') || (min === '') || (dur === '')) {
    window.alert('You miss a field! Please fill it before send your reservation!');
  }else if ((dur === 0) || (dur > 1440) || (dur < 0)) {
    window.alert('Duration field not correct! Remember cannot insert value 0!');
  }else if ((hour > 24) || (hour < 0)) {
    window.alert('Hour field not correct!');
  }else if ((min >= 60) || (min < 0)) {
    window.alert('Min field not correct!');
  }else {
    document.getElementById('ReservationForm').submit();
  }
}

if (!navigator.cookieEnabled) {
  alert('Cookies are Disabled! \nActivate them if you want to procede!!');
  window.stop();
}
