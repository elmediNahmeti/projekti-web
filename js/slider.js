var index = 1;
showSlides(index);

console.log(document.getElementById("next"));
document.getElementById("next").addEventListener("click", function (event) {
    event.preventDefault();
    showSlides(index += 1);
});
document.getElementById("prev").addEventListener("click", function (event) {
    event.preventDefault();
    showSlides(index -= 1);
});

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slide");

    if (n > slides.length) {
        index = 1;
    }
    if (n < 1) {
        index = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[index - 1].style.display = "block";
}