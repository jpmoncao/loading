function changeLoaderProps() {
    const duration = document.querySelector('input#duration').value;
    const color = document.querySelector('input#color').value;

    const durationLabel = document.querySelector('span#duration-label');
    const colorLabel = document.querySelector('span#color-label');

    document.body.style.setProperty('--delay-1', '.1s');
    document.body.style.setProperty('--delay-2', (duration * 0.2) + 's');
    document.body.style.setProperty('--delay-3', (duration * 0.4) + 's');

    document.body.style.setProperty('--duration-show', (duration) + 's');

    document.body.style.setProperty('--duration-roll', (duration * 4) + 's');
    document.body.style.setProperty('--delay-roll', (duration + 0.1) + 's');

    document.body.style.setProperty('--loader-color', color);

    durationLabel.innerHTML = duration;
    colorLabel.innerHTML = color;
}