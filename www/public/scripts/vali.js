let slider= document.getElementById('frage4-11');
let textInputSlider= document.getElementById('textForOthers')

    document.querySelectorAll('input[name="inputFrage4"]').forEach(radio => {
        radio.addEventListener('change', function() {
            if (radio.id === 'frage4-11' && radio.checked) {
                textInputSlider.classList.remove('hidden');
            } else {
                textInputSlider.classList.add('hidden');
            }
        });
    });