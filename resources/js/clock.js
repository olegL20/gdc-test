function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);

  return {
    'total': t,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime, array) {
  var clock = document.getElementById(id);
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);


    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
      var containers = document.querySelectorAll('.roulette-container');

      for (var i = containers.length - 1; i >= 0; i--) {
        containers[i].style.visibility = "visible";
      }

      
      var aSrc = 'Roulette.wav';
      var audio = new Audio(); 
      audio.src = aSrc; 
      audio.autoplay = true; 
      runBtc(array[1]);
      runWinner(array[2], aSrc);

    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}


// get parameters from form

$('.get-parameters').submit(function(e){
  e.preventDefault();

  var formElements = [];

  $(".get-parameters :input").each(function(){
      formElements.push($(this).val());
  });
  $(".get-parameters select").each(function(){
      formElements.push($(this).val());
  });

  var deadline = formElements[0];
 
  $('.get-parameters').css("display","none");
  if(Date.parse(new Date())<Date.parse(deadline)) {
    initializeClock('clock', deadline, formElements);
  }


})

