// window.onload = init;

// window.onresize = init;

// function init() {

//     var bigPic = document.querySelector('.big-pic img');

//     document.querySelector('.thumbnails')
//         .addEventListener('click', function (e) {
//             bigPic.src = e.target.src;
//         });
// }


$(document).ready(function () {


    $(".signup_btn").on("click", function () {
        window.location.href = "/finelProjectProgram/firstPage-signup.php";

    });


    $(".login_btn").on("click", function () {
        window.location.href = "/finelProjectProgram/firstPage-login.php";

    });

    $(".toFirstPage").on("click", function () {
        window.location.href = "/finelProjectProgram/firstPage.php";

    });







});