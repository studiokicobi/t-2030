document.addEventListener('DOMContentLoaded', function() {
  var typed = new Typed('#typed', {
    stringsElement: '#typed-strings',
    typeSpeed: 50,
    backSpeed: 10,
    startDelay: 1000,
    backDelay: 2000,
    loop: true,
    loopCount: Infinity,
  });

  document.querySelector('.toggle').addEventListener('click', function() {
    typed.toggle();
  });
  document.querySelector('.stop').addEventListener('click', function() {
    typed.stop();
  });
  document.querySelector('.start').addEventListener('click', function() {
    typed.start();
  });
  document.querySelector('.reset').addEventListener('click', function() {
    typed.reset();
  });
  document.querySelector('.destroy').addEventListener('click', function() {
    typed.destroy();
  });
  document.querySelector('.loop').addEventListener('click', function() {
    toggleLoop(typed);
  });

});

function prettyLog(str) {
  console.log('%c ' + str, 'color: green; font-weight: bold;');
}

function toggleLoop(typed) {
  if (typed.loop) {
    typed.loop = false;
  } else {
    typed.loop = true;
  }
}
