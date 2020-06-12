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

    // בלחיצה על הכפתור העבר לדף אחר
    $(".signup_btn").on("click", function () {
        window.location.href = "/finelProjectProgram/firstPage-signup.php";

    });

    // בלחיצה על הכפתור העבר לדף אחר
    $(".login_btn").on("click", function () {
        window.location.href = "/finelProjectProgram/firstPage-login.php";

    });

    // בלחיצה על הכפתור העבר לדף אחר
    $(".toFirstPage").on("click", function () {
        window.location.href = "/finelProjectProgram/firstPage.php";

    });

    // פעולות על הרשמה של מאלף כלב
    $("#btn_reg_trainer").on("click", function () {

        // טרים מנקה רווחים מימין ומשמאל | ואל מקבל את הערך
        var fname = $("#fname_trainer").val().trim();
        var lname = $("#lname_trainer").val().trim();
        var email = $("#email_trainer").val().trim();
        var password = $("#pass_trainer").val().trim();
        var confirm_pass = $("#confirm_pass_trainer").val().trim();
        var approve_pic = $("#approve_pic_trainer").val().trim();

        // יצירת אובייקט להרשמת מאלף
        var reg_trainer = {
            fname: {
                hname: "שם פרטי",
                val: fname
            },
            lname: {
                hname: "שם משפחה",
                val: lname
            },
            email: {
                hname: "אימייל",
                val: email
            },
            password: {
                hname: "סיסמא",
                val: password
            },
            confirm_pass: {
                hname: "וידוא סיסמא",
                val: confirm_pass
            },
            approve_pic: {
                hname: "תעודת מאלף",
                val: approve_pic
            }
        };

        // מחרוזת שגיאות ריקה
        var error_msg = "";

        // לולאה לבדיקת תקינות קלט - שליחת כל הפרמטרים לפונקציה לבדיקה
        for (var key in reg_trainer) {

            if (checkIfEnmpty(reg_trainer[key].val)) {
                error_msg += reg_trainer[key].hname + "<br>";
            }
        }

        // אם המחרוזת ריקה, אל תיכנס, אחרת תיכנס ותשרשר את המשפט למחרוזת
        if (error_msg != "") {
            error_msg += "השדות הללו אינם יכולים להיות ריקים";
        }

        // אם המחרוזת של השגיאה לא ריקה, שלח לפונקציה של האלרט המעוצב
        if (error_msg != "") {
            staticSwal("error", "נתונים חסרים", error_msg);

            return;
        }

        // אם הסיסמא והוידוא סיסמא שונים אחד מהשני, שלח לפונקציה של האלרט המעוצב
        if (password != confirm_pass) {
            staticSwal("error", "סיסמאות לא תואמות", "הסיסמאות חייבות להיות תואמות");
            return;
        }

        reg_trainer.action = "add-new-trainer"
        // create ajax requset
        $.post("server/actions.php", reg_trainer, null, 'json').done(function () {
            console.log(res);





        }).fail(function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        })




    });


    // פעולות על הרשמה של בעל כלב
    $("#btn_reg_owner").on("click", function () {

        // טרים מנקה רווחים מימין ומשמאל | ואל מקבל את הערך
        var fname = $("#fname_owner").val().trim();
        var lname = $("#lname_owner").val().trim();
        var dog_kind = $("#dog_kind_owner").val().trim();
        var dog_name = $("#dog_name_owner").val().trim();
        var email = $("#email_owner").val().trim();
        var password = $("#pass_owner").val().trim();
        var confirm_pass = $("#confirm_pass_owner").val().trim();

        // יצירת אובייקט להרשמת בעל כלב
        var reg_owner = {
            fname: {
                hname: "שם פרטי",
                val: fname
            },
            lname: {
                hname: "שם משפחה",
                val: lname
            },
            dog_kind: {
                hname: "סוג כלב",
                val: dog_kind
            },
            dog_name: {
                hname: "שם הכלב",
                val: dog_name
            },
            email: {
                hname: "אימייל",
                val: email
            },
            password: {
                hname: "סיסמא",
                val: password
            },
            confirm_pass: {
                hname: "אישור סיסמא",
                val: confirm_pass
            },

        };

        // מחרוזת שגיאות ריקה
        var error_msg = "";

        // לולאה לבדיקת תקינות קלט - שליחת כל הפרמטרים לפונקציה לבדיקה
        for (var key in reg_owner) {

            if (checkIfEnmpty(reg_owner[key].val)) {
                error_msg += reg_owner[key].hname + "<br>";
            }

        }

        // אם המחרוזת ריקה, אל תיכנס, אחרת תיכנס ותשרשר את המשפט למחרוזת
        if (error_msg != "") {
            error_msg += "השדות הללו אינם יכולים להיות ריקים";
        }

        // אם ריק, שולח לפונקציה אלרט מעוצב עם הפרמטרים הנכונים לאותה שגיאה
        if (error_msg != "") {
            staticSwal("error", "נתונים חסרים", error_msg);

            return;
        }

        // אם הסיסמאות שונות זו מזו, שולח לפוקציה אלרט מעוצב
        if (password != confirm_pass) {
            staticSwal("error", "סיסמאות לא תואמות", "הסיסמאות חייבות להיות תואמות");
            return;
        }

        reg_owner.action = "add-new-owner";
        // create ajax requset
        $.post("server/actions.php", reg_owner, null, 'json').done(function (res) {

            console.log(res);

            var strToShow = buildStrToShow(res.msg);

            if (res.type == "error") {
                staticSwal("error", "התרחשה שגיאה", strToShow);
                return;
            }

            if (res.type == "success") {

                staticSwal("success", "הפעולה הצליחה", strToShow);
            }



            // if (res.status == "error") {
            //     console.log(res.msg);
            // } else {
            //     alert("Your details accepted.")
            // }



        }).fail(function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        })

    });




    // התחברות - איזה סוג יוזר והאם נכון הפרטים
    $("#btn_login").on("click", function () {
        var email = $("#email_conn").val().trim();
        var pass = $("#password_conn").val().trim();

        var login_system = {
            email: {
                hname: "שם משתמש",
                val: email
            },
            pass: {
                hname: "סיסמא",
                val: pass
            }
        };

        // מחרוזת שגיאות ריקה
        var error_msg = "";

        // לולאה לבדיקת תקינות קלט - שליחת כל הפרמטרים לפונקציה לבדיקה
        for (var key in login_system) {

            if (checkIfEnmpty(login_system[key].val)) {
                error_msg += login_system[key].hname + "<br>";
            }

        }

        // אם המחרוזת ריקה, אל תיכנס, אחרת תיכנס ותשרשר את המשפט למחרוזת
        if (error_msg != "") {
            error_msg += "השדות הללו אינם יכולים להיות ריקים";
        }

        





    });


    function buildStrToShow(arr_msg) {
        var str = "";
        for (var key in arr_msg) {
            str += arr_msg[key] + "<br>";
        }

        return str;


    }


    // פונקציית עזר לבדיקה שהפרמטרים שהוכנסו בהרשמות מולאו או לא. אמת אם ריק, אחרת שקר
    function checkIfEnmpty(str) {

        if (str.length == 0) {
            return true;
        }
        return false;
    }

    // פונקציות עזר לאלרט מעוצב שיהיה כללי
    function staticSwal(icon, title, msg) {

        return Swal.fire({
            icon: icon,
            title: title,
            html: msg,
        });
    }









});