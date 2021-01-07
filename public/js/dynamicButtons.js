
let main = document.getElementById('nav');
if (main != null) {
    main.addEventListener('click', function () {
        document.location.href = 'main';
    });
}

let knots = document.getElementById('knots');
if (knots != null) {
    knots.addEventListener('click', function () {
        document.location.href = 'knots?page=1';
    });
}

let boat = document.getElementById('boat');
if (boat != null) {
    boat.addEventListener('click', function () {
        document.location.href = 'boat';
    });
}

let test = document.getElementById('test');
if (test != null) {
    test.addEventListener('click', function () {
        document.location.href = 'test?page=1';
    });
}

