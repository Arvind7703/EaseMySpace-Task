let animateHead1 = document.querySelectorAll(".heading");
let animateHead2 = document.querySelectorAll(".landing-heading-span");
let desc = document.querySelectorAll(".desc-txt");
let conflictTest = document.querySelectorAll(".conflict-txt-test");
let mapping = document.getElementsByClassName("maping-test");
let togglefeature = document.querySelector(".mode-toggle");
let togglebtn = document.querySelector("#toggleIcon");
let togglebtnMobile = document.querySelector("#toggleIconMobile");
let conflictElem = document.querySelector(".conflictelem")





// Gsap for Animations 

animateHead1.forEach((el) => {
  gsap.from(el, {
    y: "-100px",
    opacity: 0,
    duration: 1.4,
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

// for laptop 
togglebtn.addEventListener("click", () => {
  togglefeature.classList.toggle("bg-zinc-950");
  togglefeature.classList.toggle("text-zinc-100");
  conflictElem.classList.toggle("bg-zinc-950"); 
});


togglebtn.addEventListener("click", () => {
  if (togglebtn.classList.contains("fa-moon")) {
    togglebtn.classList.remove("fa-moon");
    togglebtn.classList.add("fa-sun");
    togglebtn.classList.remove("text-black");
    togglebtn.classList.add("text-white");
  } else {
    togglebtn.classList.remove("fa-sun");
    togglebtn.classList.add("fa-moon");
    togglebtn.classList.remove("text-white");
    togglebtn.classList.add("text-black");
  }
});


// for mobile 
togglebtnMobile.addEventListener("click", () => {
  togglefeature.classList.toggle("bg-zinc-950");
  togglefeature.classList.toggle("text-zinc-100");
  conflictElem.classList.toggle("bg-zinc-950"); 
});



togglebtnMobile.addEventListener("click", () => {
  if (togglebtnMobile.classList.contains("fa-moon")) {
    togglebtnMobile.classList.remove("fa-moon");
    togglebtnMobile.classList.add("fa-sun");
    togglebtnMobile.classList.remove("text-black");
    togglebtnMobile.classList.add("text-white");
  } else {
    togglebtnMobile.classList.remove("fa-sun");
    togglebtnMobile.classList.add("fa-moon");
    togglebtnMobile.classList.remove("text-white");
    togglebtnMobile.classList.add("text-black");
  }
});
