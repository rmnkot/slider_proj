// Slider opening when the page has loaded
function initOpen() {
  setTimeout(function () {
    if (document.querySelector("#slide-1")) {
      document.querySelector("#slide-1").classList.add("slider_active-js");
    } else if (document.querySelector("#slide-3")) {
      document.querySelector("#slide-3").classList.add("slider_active-js");
    }
  }, 2000);
};
window.onload = initOpen;

// Slider closing
const slideList = document.querySelectorAll(".slider");
slideList.forEach(function (item) {
  item.addEventListener("click", closeSlider);
});

function closeSlider(e) {
  if (e.target.classList.contains("slider") || e.target.classList.contains("slider__text") || e.target.classList.contains("wrapper")) {} else if (e.target.classList.contains("slider__icon")) {
    e.target.parentElement.classList.remove("slider_active-js");
  } else if (e.target.classList.contains("slider__btn")) {
    e.target.parentElement.parentElement.classList.remove("slider_active-js");
  } else if (e.target.classList.contains("btn_text")) {
    e.target.parentElement.parentElement.parentElement.classList.remove("slider_active-js");
  }
};

// Prevent default behavior of links
const links = document.querySelectorAll(".slider__link");
links.forEach(function (item) {
  item.addEventListener("click", preventLink);
});

function preventLink(e) {
  e.preventDefault();
  let goTo;
  var target;
  if (e.target.classList.contains("btn_text")) {
    goTo = e.target.parentElement.getAttribute("href");
    target = e.target.parentElement.getAttribute("target");
  } else if (e.target.classList.contains("btn_text_1")) {
    goTo = e.target.parentElement.getAttribute("href");
    target = e.target.parentElement.getAttribute("target");
  } else {
    goTo = e.target.getAttribute("href");
    target = e.target.getAttribute("target");
  }
  setTimeout(function () {
    if (target) {
      window.open(goTo);
    } else {
      window.location = goTo;
    }
  }, 400)
};

// Opening certain slide
function openSlide(id) {
  setTimeout(function () {
    document.querySelector(id).classList.add("slider_active-js");
  }, 1100)
  if (id == "#slide-4") {
    setTimeout(function () {
      document.querySelector(id).classList.remove("slider_active-js");
    }, 3000)
  }
};

//Opening slider 2
function verticalSlide() {
  document.querySelector(".first").classList.add("wrapper_up-js");
};