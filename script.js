let animateHead1 = document.querySelectorAll(".heading");
let animateHead2 = document.querySelectorAll(".landing-heading-span");
let desc = document.querySelectorAll(".desc-txt");
let conflictTest = document.querySelectorAll(".conflict-txt-test");
let mapping = document.getElementsByClassName("maping-test");
let togglefeature = document.querySelector(".mode-toggle");
let togglebtn = document.querySelector("#toggleIcon");
let conflictElem = document.querySelector(".conflictelem")





// Gsap for Animations 

animateHead1.forEach((el) => {
  gsap.from(el, {
    y: "-100px",
    opacity: 0,
    duration: 1.4,
    ease: "bounce.out",
    scrollTrigger: {
      trigger: el,
      start: "top 80%",
    },
  });
});

animateHead2.forEach((el) => {
  gsap.from(el, {
    y: "100px",
    opacity: 0,
    duration: 1.4,
    scrollTrigger: {
      trigger: el,
      start: "top 80%",
    },
  });
});

desc.forEach((el) => {
  gsap.from(el, {
    opacity: 0,
    y: "50px",
    duration: 1,
    scrollTrigger: {
      trigger: el,
      start: "top 85%",
    },
  });
});

gsap.from(conflictTest, {
  opacity: 0,
  y: "50px",
  duration: 1,
});

// dark mode light mode btn and functionality

togglebtn.addEventListener("click", () => {
  togglefeature.classList.toggle("bg-zinc-950");
  togglefeature.classList.toggle("text-zinc-100");
  conflictElem.classList.toggle("bg-zinc-950"); 
});

const icon = document.getElementById("toggleIcon");

icon.addEventListener("click", () => {
  if (icon.classList.contains("fa-moon")) {
    icon.classList.remove("fa-moon");
    icon.classList.add("fa-sun");
    icon.classList.remove("text-black");
    icon.classList.add("text-white");
  } else {
    icon.classList.remove("fa-sun");
    icon.classList.add("fa-moon");
    icon.classList.remove("text-white");
    icon.classList.add("text-black");
  }
});
