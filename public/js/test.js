let exit = document.getElementById('button-end');


if (exit != null) {
    exit.addEventListener('click', function () {
        if(confirm("Czy na pewno chcesz zakończyć test?")===true) {
            document.location.href = 'main';
        }
    });
}

const answersDiv = document.querySelector('.answers');
answersDiv.addEventListener('click',event => {
    if(event.target.classList.contains('answer'))
    {
        fetchFun(event.target.id);
    }

});


function fetchFun(id)
{
    const data = {
        id:id
    };

    fetch(
     "http://localhost:8080/checkAnswer",
     {
         method: "POST",
         headers: {
             'Content-Type': 'application/json'
         },
         body: JSON.stringify(data)
        })
        .then(response => {
             return response.text();
            })
        .then(answers => {
            highlightAnswers(answers,data);
        })

}

function highlightAnswers(answers,data)
{
    console.log(answers);
    let a = document.getElementById(answers.toString());

    if(answers!==data["id"])
    {
        let b = document.getElementById(data["id"]);
        b.classList.add('no-valid');
    }
    a.classList.add('valid');


}


let next = document.getElementById('next_question');

function nextQuestion(page) {

    if (next != null) {
        next.addEventListener('click', function () {
            document.location.href = 'test?page='+page;
        });
    }

}



