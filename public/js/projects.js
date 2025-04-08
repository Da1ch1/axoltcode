class Circulo {
    constructor(x, y, size) {
  
      this.x = x;
      this.y = y;
      this.size = size;
  
    }
  }
  
  let circulos = [];
  
  const canvas = document.querySelector("canvas");
  const context = canvas.getContext("2d");
  
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  
  function initArr() {
  
    circulos.length = 0;
  
    for (let index = 0; index < 300; index++) {
  
      let randomX = Math.floor(Math.random() * ((canvas.width * 3) - (canvas.width * 1.2) + 1)) + (canvas.width * 1.2);
      let randomY = Math.floor(Math.random() * ((canvas.height) - (canvas.height * (-0.2) + 1)) + (canvas.height * (-0.2)));
      let size = canvas.width / 1000;
  
      circulos.push(new Circulo(randomX, randomY, size));
    }
  }
  
  window.addEventListener("resize", () => {
  
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
  
    timer = 0;
    cancelAnimationFrame(requestID);
    context.reset();
    initArr();
    draw();
  
    document.getElementById("charactersDiv").innerHTML = "";
    charactersAnimate();
  })
  
  let timer = 0;
  let requestID;
  initArr();
  
  function draw() {
  
    timer++;
    context.setTransform(1, 0, 0, 1, 0, 0);
  
    let distanceX = canvas.width / 80;
    let growthRate = canvas.width / 1000;
  
    context.fillStyle = "white";
  
    context.clearRect(0, 0, canvas.width, canvas.height);
  
    circulos.forEach((circulo) => {
  
      context.beginPath();
  
      if (timer < 65) {
  
        circulo.x = circulo.x - distanceX;
        circulo.size = circulo.size + growthRate;
      }
  
      if (timer > 65 && timer < 500) {
  
        circulo.x = circulo.x - (distanceX * 0.02);
        circulo.size = circulo.size + (growthRate * 0.2);
      }
  
      context.arc(circulo.x, circulo.y, circulo.size, 0, 360);
      context.fill();
    })
  
    requestID = requestAnimationFrame(draw);
  
    if (timer > 500) {
  
      cancelAnimationFrame(requestID);
    }
  }
  
  draw();
  
  function charactersAnimate() {
  
    for (let index = 0; index < 6; index++) {
  
      let stick = new Image();
      stick.classList.add("characters");
  
      let speedX;
      let speedRotation;
  
      switch (index) {
        case 0:
          stick.style.top = "0%";
          stick.src = "https://raw.githubusercontent.com/RicardoYare/imagenes/9ef29f5bbe075b1d1230a996d87bca313b9b6a63/sticks/stick0.svg";
          stick.style.transform = "rotateZ(-90deg)";
  
          speedX = 1500;
          break;
        case 1:
          stick.style.top = "10%";
          stick.src = "https://raw.githubusercontent.com/RicardoYare/imagenes/9ef29f5bbe075b1d1230a996d87bca313b9b6a63/sticks/stick1.svg";
  
          speedX = 3000;
          speedRotation = 2000;
          break;
        case 2:
          stick.style.top = "20%";
          stick.src = "https://raw.githubusercontent.com/RicardoYare/imagenes/9ef29f5bbe075b1d1230a996d87bca313b9b6a63/sticks/stick2.svg";
  
          speedX = 5000;
          speedRotation = 1000;
          break;
        case 3:
          stick.style.top = "25%";
          stick.src = "https://raw.githubusercontent.com/RicardoYare/imagenes/9ef29f5bbe075b1d1230a996d87bca313b9b6a63/sticks/stick0.svg";
  
          speedX = 2500;
          speedRotation = 1500;
          break;
        case 4:
          stick.style.top = "35%";
          stick.src = "https://raw.githubusercontent.com/RicardoYare/imagenes/9ef29f5bbe075b1d1230a996d87bca313b9b6a63/sticks/stick0.svg";
  
          speedX = 2000;
          speedRotation = 300;
          break;
        case 5:
          stick.style.bottom = `5%`;
          stick.src = "https://raw.githubusercontent.com/RicardoYare/imagenes/9ef29f5bbe075b1d1230a996d87bca313b9b6a63/sticks/stick3.svg";
          break;
        default:
          break;
      }
  
      document.getElementById("charactersDiv").appendChild(stick);
  
      if (index == 5) return;
  
      stick.animate(
        [{ left: "100%" }, { left: "-20%" }],
        { duration: speedX, easing: "linear", fill: "forwards" }
      );
  
      if (index == 0) continue;
  
      stick.animate(
        [{ transform: "rotate(0deg)" }, { transform: "rotate(-360deg)" }],
        { duration: speedRotation, iterations: Infinity, easing: "linear" }
      );
  
    }
  
  }
  
  charactersAnimate();