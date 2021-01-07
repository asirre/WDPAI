

let exit = document.getElementById('button-end');


if (exit != null) {
    exit.addEventListener('click', function () {
        document.location.href = 'main';
    });
}


function isCorrect(correct_id,ans_id) {


    var element = document.getElementById(ans_id);
    var correct = document.getElementById(correct_id);

    if(correct_id === ans_id)
    {
        element.classList.add('valid');

    }
    else
    {
        element.classList.add('no-valid');
        correct.classList.add('valid');
    }
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



