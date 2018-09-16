/*function validate() {
    let y = document.forms['main_form']['y_input'],
        yValue = y.value;
    yValue = yValue.replace(/,/g, '.');
    let min_y = -5;
    let max_y = 5;
    if (yValue === "") {
        removeError(y, y.parentNode);
        setError(y, y.parentNode, 'Где Y ?');
        return false;
    }
    else if (isNaN(yValue)) {
        removeError(y, y.parentNode);
        setError(y, y.parentNode, 'Это определённо не число');
        return false;
    }
    else if (Math.round((yValue * 1000) / 1000) > max_y) {
        removeError(y, y.parentNode);
        setError(y, y.parentNode, 'Внезапно: ' + Math.round((yValue * 1000) / 1000) + ' > ' + max_y + ' !');
        return false;
    }
    else if (Math.round((yValue * 1000) / 1000) < min_y) {
        removeError(y, y.parentNode);
        setError(y, y.parentNode, 'Внезапно: ' + Math.round((yValue * 1000) / 1000) + ' < ' + min_y + ' !');
        return false;
    }
    return true;
} */

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
    if (keys.indexOf(event.key) <= -1) {
        return false;
    }
    return true;
}