{
    function isVisible(element) {
    const elementBox = element.getBoundingClientRect();
    const distanceFromTop = -300;

    return (
        elementBox.top - window.innerHeight < distanceFromTop
    );
}

function showOnScroll() {
    const box1 = document.querySelector('.box1');
    const box3b = document.querySelector('.box3b');
    const box6 = document.querySelector('.box6');
    const pics = document.querySelector('.pics');
    const hd = document.querySelector('.hd');
    const para = document.querySelector('.para');
    
    if (isVisible(box1)) {
        box1.classList.add('show');
    }
    if (isVisible(box3b)) {
        box3b.classList.add('show');
    }
    if (isVisible(box6)) {
        box6.classList.add('show');
    }
    if (isVisible(pics)) {
        pics.classList.add('show');
    }
    if (isVisible(hd)) {
        hd.classList.add('show');
    }
    if (isVisible(para)) {
        para.classList.add('show');
        window.removeEventListener('scroll', showOnScroll);
    }
}

window.addEventListener('scroll', showOnScroll);

}
{
function isVisible(element) {
    const elementBox = element.getBoundingClientRect();
    const distanceFromTop = 0;

    return (
        elementBox.top - window.innerHeight < distanceFromTop
    );
}

function showOnScroll() {
    const bt = document.querySelector('.bt');

    if (isVisible(bt)) {
        bt.classList.add('show');
        window.removeEventListener('scroll', showOnScroll);
    }
}

window.addEventListener('scroll', showOnScroll);
}