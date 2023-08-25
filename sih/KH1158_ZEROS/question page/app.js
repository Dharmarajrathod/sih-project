const carosel = Array.from(document.querySelectorAll('.carousel-item'));
const button = document.querySelector('.dark-btn');
const prevBtn = document.querySelector('.carousel-control-prev');
const prevSpan1 = document.querySelector('.carousel-control-prev-icon');
const prevSpan2 = document.querySelector('.visually-hidden')

function checkActive() {
    carosel.forEach(element => {
        // console.log(element)
        if(element.classList.contains('active') && carosel.indexOf(element) === 10) {
            console.log('yes');
            button.style.display = 'block';
        } else {
            button.style.display = 'none';
        }
    });
}

setInterval(checkActive, 1000);
// console.log(button);
// console.log(carosel)

