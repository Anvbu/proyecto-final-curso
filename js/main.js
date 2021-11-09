document.addEventListener("DOMContentLoaded", function() {

    let isDown = false;
    let startX;
    let scrollLeft;

    let responsiveMenu = document.querySelector("#burguer-menu-btn");

        if (responsiveMenu) {
          responsiveMenu.addEventListener("click", function() {
            document.body.classList.toggle ("menu-navegacion");

        });
    }

const slider = document.querySelector(".items");


const end = () => {
    isDown = false;
    slider.classList.remove ("active");
}

const start = (e) => {
    isDown = true;
    slider.classList.add ("active");
    startX = e.pageX || e.touches[0].pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
}

           
const move = (e) => {
  if(!isDown) return;

  e.preventDefault();
  const x = e.pageX || e.touches[0].pageX - slider.offsetLeft;
  const dist = (x - startX);
  slider.scrollLeft = scrollLeft - dist;
}

(() => {

  if (slider) {

    slider.addEventListener('mousedown', start);
    slider.addEventListener('touchstart', start);

    slider.addEventListener('mousemove', move);
    slider.addEventListener('touchmove', move);

    slider.addEventListener('mouseleave', end);
    slider.addEventListener('mouseup', end);
    slider.addEventListener('touchend', end);

  }
  
})();



var clickMeDer = document.querySelector('#btn-dere');
  if (clickMeDer) {
    clickMeDer.addEventListener('click', function (e) {
    const sliderDer = document.querySelector(".items");
    sliderDer.scrollLeft =sliderDer.scrollLeft + 500;
});

}

var clickMeIzq = document.querySelector('#btn-izq');
  if (clickMeIzq) {
    clickMeIzq.addEventListener('click', function (e) {
    const sliderIzq = document.querySelector(".items");
    sliderIzq.scrollLeft =sliderIzq.scrollLeft - 500;
});

}

});