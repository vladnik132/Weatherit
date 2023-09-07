//Backgrounds

var images = [
    "Backgrounds/bg1.jpg",
    "Backgrounds/bg2.jpg",
    "Backgrounds/bg3.jpg",
    "Backgrounds/bg4.jpg",
  ];
  
  document.getElementsByClassName("app-wrap")[0].style.backgroundImage =
    "url(" + images[Math.floor(Math.random() * images.length)] + ")";