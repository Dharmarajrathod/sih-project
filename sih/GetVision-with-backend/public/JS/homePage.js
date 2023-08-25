const cardNumbers = document.querySelectorAll('.card-number');

cardNumbers.forEach(number => {
    
    number.innerHTML = 0;

    const updateNumber = () => {
        const targetNumber = Number(number.getAttribute('data-target'));

        const startNumber = Number(number.innerHTML);

        const incr = targetNumber > 100 ? targetNumber / 100 : targetNumber / 10;

        if (startNumber < targetNumber) {
            number.innerHTML = `${Math.round(startNumber + incr)}`;
            setTimeout(
                updateNumber,
                20
            );
        }
    }

    updateNumber()
});