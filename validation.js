function submit(event) {
    event.preventDefault();
    if (validate()){
        document.forms['main_form'].submit();
    }
    return true;
}

function validate() {
    let y = document.forms['main_form']['y_input'],
        yValue = y.value;
    yValue = yValue.replace(/,/g, '.');
        min_y = -5;
        max_y = 5;
    if (yValue === "") {
        removeError(y, y.parentNode);
        setError(y, y.parentNode, 'ну и где Y ?');
    }
    else if (isNaN(yValue)) {
        removeError(y, y.parentNode);
        setError(y, y.parentNode, 'это определённо не число');
    }
    else if (yValue > max_y) {
        removeError(y, y.parentNode);
        setError(y, y.parentNode, 'внезапно: ' + yValue + ' > ' + max_y + ' !');
    }
    else if (yValue < min_y) {
        removeError(y, y.parentNode);
        setError(y, y.parentNode, 'внезапно: ' + yValue + ' < ' + min_y + ' !');
    }
    else return true;
    return false;

}

function setError(elem, container, message) {
    let dynMessage = document.createElement('span');
    dynMessage.className = 'invalid_input_message';
    elem.className = 'invalid_input';
    dynMessage.innerHTML = message;
    container.appendChild(dynMessage);
}

function removeError(elem, container) {
    elem.className = '';
    if (container.lastChild.className === 'invalid_input_message')
        container.removeChild(container.lastChild);
}

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('submit_params').addEventListener('click', submit);
});

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById("y_input").addEventListener('change', removeError);
});


function disable_not_numbers() {
    let keys = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "-", ".", ","];
    if (keys.indexOf(event.key) <= -1)
    {
        return false;
    }
    return true;
}