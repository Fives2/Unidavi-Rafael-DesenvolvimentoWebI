function mudarCor() {
   const cores = ['red', 'blue', 'green', 'yellow', 'purple'];
   const corAleatoria = cores[Math.floor(Math.random() * cores.length)];
   document.body.style.backgroundColor = corAleatoria;
   document.body.form.style.backgroundColor = corAleatoria;
}


// setInterval(mudarCor, 2000);



    const canvas = document.getElementById('rain-canvas');
    const context = canvas.getContext('2d');
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

        const raindrops = [];
    const fontSize = 16; // Example font size
    const columns = canvas.width / fontSize;

    for (let i = 0; i < columns; i++) {
        raindrops[i] = 1; // Initialize the starting y-position for each column
    }

    const draw = () => {
        context.fillStyle = 'rgba(0, 0, 0, 0.05)'; // Semi-transparent black for fade effect
        context.fillRect(0, 0, canvas.width, canvas.height);

        context.fillStyle = '#0F0'; // Green for matrix effect
        context.font = fontSize + 'px monospace';

        for (let i = 0; i < raindrops.length; i++) {
            const character = String.fromCharCode(65 + Math.random() * 26); // Example: random letter
            context.fillText(character, i * fontSize, raindrops[i] * fontSize);

            if (raindrops[i] * fontSize > canvas.height && Math.random() > 0.975) {
                raindrops[i] = 0; // Reset to top
            }
            raindrops[i]++;
        }
    };

    setInterval(draw, 30); // Call draw every 30 milliseconds