//Backgrounds

var images = [
    "Backgrounds/bg1.jpg",
    "Backgrounds/bg2.jpg",
    "Backgrounds/bg4.jpg",
    "Backgrounds/bg5.jpg",
    "Backgrounds/bg6.jpg",
    "Backgrounds/bg7.jpg",
    "Backgrounds/bg8.jpg",
    "Backgrounds/bg9.jpg",
  ];
  
  document.getElementsByClassName("app-wrap")[0].style.backgroundImage =
    "url(" + images[Math.floor(Math.random() * images.length)] + ")";