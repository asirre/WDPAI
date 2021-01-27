
let main = document.getElementById('nav');

if (main != null) {
    main.addEventListener('click', function () {
        document.location.href = 'main';
    });
}

let sails = document.getElementById('osprzet');

if (sails != null) {
    sails.addEventListener('click', function () {
        document.location.href = 'sails';
    });
}

let drive= document.getElementById('naped');
if (drive != null) {
    drive.addEventListener('click', function () {
        document.location.href = 'drive';
    });
}
let anchor = document.getElementById('kotwice');
if (anchor != null) {
    anchor.addEventListener('click', function () {
        document.location.href = 'anchor';
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

let next = document.getElementById('test');
if (test != null) {
    test.addEventListener('click', function () {
        document.location.href = 'test?page=1';
    });
}

let logout = document.getElementById('log-out');
if (logout != null) {
    logout.addEventListener('click', function () {
        document.location.href = 'login';
    });
}

function knotsButtons(page) {

    document.location.href = 'knots?page='+page;
}

let upload = document.getElementById('new_knot');
if (upload != null) {
    upload.addEventListener('click', function () {
        document.location.href = 'addKnot';
    });
}