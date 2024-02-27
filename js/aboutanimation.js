function isVisible(element) {
    const elementBox = element.getBoundingClientRect();
    const distanceFromTop = -300;

    return (
        elementBox.top - window.innerHeight < distanceFromTop
    );
}

function showOnScroll() {
    const unod1 = document.querySelector('.unod1');
    const abso = document.querySelector('.abso');
    const picsure = document.querySelector('.picsure');
    const babawya = document.querySelector('.babawya');
    const dalomya = document.querySelector('.dalomya');
    
    if (isVisible(unod1)) {
        unod1.classList.add('show');
    }

    if (isVisible(abso)) {
        abso.classList.add('show');
    }
    if (isVisible(picsure)) {
        picsure.classList.add('show');
    }
    if (isVisible(babawya)) {
        babawya.classList.add('show');
    }
    if (isVisible(babawya)) {
        dalomya.classList.add('show');
        window.removeEventListener('scroll', showOnScroll);
    }
}

window.addEventListener('scroll', showOnScroll);