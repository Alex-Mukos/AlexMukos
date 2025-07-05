const slider = document.getElementById("photoSlider");
let index = 0;
setInterval(() => {
  slider.scrollLeft += 300;
  if (slider.scrollLeft>= slider.scrollWidth - slider.clientWidth) {
    slider.scrollLeft = 0;
}
}, 3000);