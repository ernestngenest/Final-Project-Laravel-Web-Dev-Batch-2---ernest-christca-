document.querySelector(".jsFilter").addEventListener("click", function () {
    document.querySelector(".filter-menu").classList.toggle("active");
});

document.querySelector(".grid").addEventListener("click", function () {
    document.querySelector(".list").classList.remove("active");
    document.querySelector(".grid").classList.add("active");
    document.querySelector(".products-area-wrapper").classList.add("gridView");
    document.querySelector(".descriptions").classList.remove("display-none");
    document.querySelector(".products-area-wrapper").classList.add("specific");
    document
        .querySelector(".products-area-wrapper")
        .classList.remove("tableView");
});
document.querySelector(".descriptions").addEventListener("click", function (e) {
    document.querySelector(".description").classList.add("display-none");
    document
        .querySelector(".more-description")
        .classList.remove("display-none");
    document.querySelector(".descriptions").classList.add("display-none");
    e.preventDefault();
});

document.querySelector(".list").addEventListener("click", function () {
    document.querySelector(".description").classList.remove("display-none");
    document.querySelector(".more-description").classList.add("display-none");
    document.querySelector(".descriptions").classList.add("display-none");
    document.querySelector(".list").classList.add("active");
    document.querySelector(".grid").classList.remove("active");
    document
        .querySelector(".products-area-wrapper")
        .classList.remove("gridView");
    document
        .querySelector(".products-area-wrapper")
        .classList.remove("specific");
    document.querySelector(".products-area-wrapper").classList.add("tableView");
});

var modeSwitch = document.querySelector(".mode-switch");
modeSwitch.addEventListener("click", function () {
    document.documentElement.classList.toggle("light");
    modeSwitch.classList.toggle("active");
});
