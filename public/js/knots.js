
const knotContainer = document.querySelector(".knots");

function fun($page)
{
        fetch("/search", {
            method: "POST",
            body: $page
        }).then(function (response) {
            return response;
        }).then(function (knot) {
            knotContainer.innerHTML = "";
            createKnot(knot)
        });
}


function createKnot(knot)
{
    console.log(knot);
    const template = document.querySelector("#knots-template");
    const clone = template.content.cloneNode(true);

    const image = clone.querySelector("img");
    image.src = 'public/img/$(knot.image)';
    const name = clone.querySelector("h1");
    name.innerHTML = knot.name;
    const description = clone.querySelector("p");
    description.innerHTML = knot.description;

    knotContainer.appendChild(clone);
}