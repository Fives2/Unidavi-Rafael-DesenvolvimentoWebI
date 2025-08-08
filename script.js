function mudarCor() {
   const cores = ['red', 'blue', 'green', 'yellow', 'purple'];
   const corAleatoria = cores[Math.floor(Math.random() * cores.length)];
   document.body.style.backgroundColor = corAleatoria;
   document.body.form.style.backgroundColor = corAleatoria;
}


setInterval(mudarCor, 2000);