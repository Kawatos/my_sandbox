document.getElementById('startAnimation').addEventListener('click', function() {
    const textSvg = document.querySelector('.text-svg');
    textSvg.style.transform = 'translateX(-100%)'; // Reset position
    textSvg.style.animation = 'none'; // Reset animation
    setTimeout(() => {
        textSvg.style.animation = 'slideIn 3s forwards ease-in-out';
    }, 10); // Start animation
});
