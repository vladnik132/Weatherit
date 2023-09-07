//Openweather api

const api = {
  key: "7940c1897f069c49607675a4ced9f4e6",
  //key: "ff51b8b10d0ef59d7d7f4b8de38103f0",
  base: "https://api.openweathermap.org/data/2.5/",
};

//Searchbox

const searchbox = document.querySelector(".search-box");
searchbox.addEventListener("keypress", setQuery);

function setQuery(evt) {
  if (evt.keyCode == 13) {
    getResults(searchbox.value);
  }
}

function getResults(query) {
  fetch(`${api.base}weather?q=${query}&units=metric&APPID=${api.key}`)
    .then((weather) => {
      return weather.json();
    })
    .then(displayResults);
}

function displayResults(weather) {
  let city = document.querySelector(".current .city");
  city.innerText = `${weather.name}`;

  let now = new Date();
  let date = document.querySelector(".location .date");
  date.innerText = dateBuilder(now);

  let temp = document.querySelector(".current .temp");
  temp.innerHTML = `${Math.round(weather.main.temp)}<span>°</span>`;

  let weather_el = document.querySelector(".current .weather");
  weather_el.innerText = weather.weather[0].main;
}

function dateBuilder(d) {
  let months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];
  let days = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
  ];

  let day = days[d.getDay()]; 
  let date = d.getDate();
  let month = months[d.getMonth()];
  let year = d.getFullYear();

  return `${day} 
  ${date} ${month} 
  ${year}`;
}

//Backgrounds

var images = [
  "Backgrounds/bg1.jpg",
  "Backgrounds/bg2.jpg",
  "Backgrounds/bg4.jpg"
];

document.getElementsByClassName("app-wrap")[0].style.backgroundImage =
  "url(" + images[Math.floor(Math.random() * images.length)] + ")";
