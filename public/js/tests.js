let exit = document.getElementById('button-end');


if (exit != null) {
    exit.addEventListener('click', function () {
        document.location.href = 'main';
    });
}

let a = document.getElementById('true');
let b = document.getElementById('false');


if (a != null) {
    a.addEventListener('click', function () {
        a.classList.add('valid');
    });
}

if (b != null) {
    b.addEventListener('click', function () {
        b.classList.add('no-valid');
        a.classList.add('valid');

    });
}



let next = document.getElementById('next_question');

function nextQuestion(page) {

    if (next != null) {
        next.addEventListener('click', function () {
            document.location.href = 'test?page='+page;
        });
    }

}

let previous = document.getElementById('previous_question');

function previousQuestion(page) {

    if (previous != null) {
        previous.addEventListener('click', function () {
            document.location.href = 'test?page='+page;
        });
    }

}


