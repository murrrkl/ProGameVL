let score = 0;

$('#1_3').click(function(e) {
    score++;
    $('#1').attr("src","/images/tests/ok.png");
    e.preventDefault();

    setTimeout(() => {
        $('#task_1').fadeOut(400);
    }, 150);

    setTimeout(() => {
        $('#task_2').fadeIn(400);
    }, 500);
});

$('#1_1').click(function(e) {
    $('#1').attr("src","/images/tests/no.png");
    e.preventDefault();
    setTimeout(() => {
        $('#task_1').fadeOut(400);
    }, 150);

    setTimeout(() => {
        $('#task_2').fadeIn(400);
    }, 500);
});

$('#1_2').click(function(e) {
    $('#1').attr("src","/images/tests/no.png");
    e.preventDefault();
    setTimeout(() => {
        $('#task_1').fadeOut(400);
    }, 150);

    setTimeout(() => {
        $('#task_2').fadeIn(400);
    }, 500);
});

$('#1_4').click(function(e) {
    $('#1').attr("src","/images/tests/no.png");
    e.preventDefault();

    setTimeout(() => {
        $('#task_1').fadeOut(400);
    }, 150);

    setTimeout(() => {
        $('#task_2').fadeIn(400);
    }, 500);
});

$('#2_2').click(function(e) {
    score++;
    $('#2').attr("src","/images/tests/ok.png");
    e.preventDefault();
    setTimeout(() => {
        $('#task_2').fadeOut(400);
    }, 150);

    setTimeout(() => {
        $('#task_3').fadeIn(400);
    }, 500);
});

$('#2_1').click(function(e) {
    $('#2').attr("src","/images/tests/no.png");
    e.preventDefault();

    setTimeout(() => {
        $('#task_2').fadeOut(400);
    }, 150);

    setTimeout(() => {
        $('#task_3').fadeIn(400);
    }, 500);
});

$('#3_4').click(function(e) {
    score++;
    $('#3').attr("src","/images/tests/ok.png");
    e.preventDefault();
    setTimeout(() => {
        $('#task_3').fadeOut(400);
    }, 150);

    setTimeout(() => {
        $('#task_4').fadeIn(400);
    }, 500);
});

$('#3_1').click(function(e) {
    $('#3').attr("src","/images/tests/no.png");
    e.preventDefault();
    setTimeout(() => {
        $('#task_3').fadeOut(400);
    }, 150);

    setTimeout(() => {
        $('#task_4').fadeIn(400);
    }, 500);
});

$('#3_2').click(function(e) {
    $('#3').attr("src","/images/tests/no.png");
    e.preventDefault();
    setTimeout(() => {
        $('#task_3').fadeOut(400);
    }, 150);

    setTimeout(() => {
        $('#task_4').fadeIn(400);
    }, 500);
});

$('#3_3').click(function(e) {
    $('#3').attr("src","/images/tests/no.png");
    e.preventDefault();
    setTimeout(() => {
        $('#task_3').fadeOut(400);
    }, 150);

    setTimeout(() => {
        $('#task_4').fadeIn(400);
    }, 500);
});

$('#4_3').click(function(e) {
    score++;
    $('#4').attr("src","/images/tests/ok.png");
    e.preventDefault();
    setTimeout(() => {
        $('#task_4').fadeOut(400);
    }, 150);

    setTimeout(() => {
        $('#task_5').fadeIn(400);
    }, 500);
});

$('#4_1').click(function(e) {
    $('#4').attr("src","/images/tests/no.png");
    e.preventDefault();
    setTimeout(() => {
        $('#task_4').fadeOut(400);
    }, 150);

    setTimeout(() => {
        $('#task_5').fadeIn(400);
    }, 500);
});

$('#4_2').click(function(e) {
    $('#4').attr("src","/images/tests/no.png");
    e.preventDefault();
    setTimeout(() => {
        $('#task_4').fadeOut(400);
    }, 150);

    setTimeout(() => {
        $('#task_5').fadeIn(400);
    }, 500);
});

$('#4_4').click(function(e) {
    $('#4').attr("src","/images/tests/no.png");
    e.preventDefault();
    setTimeout(() => {
        $('#task_4').fadeOut(400);
    }, 150);

    setTimeout(() => {
        $('#task_5').fadeIn(400);
    }, 500);
});

$('#5_2').click(function(e) {
    score++;
    $('#5').attr("src","/images/tests/ok.png");
    e.preventDefault();
    setTimeout(() => {
        $('#task_5').fadeOut(400);
    }, 150);

    if (score <= 3) {
        setTimeout(() => {
            document.getElementById("res").innerHTML = score;
            $('#result_1').fadeIn(400);
        }, 500);
    } else {
        setTimeout(() => {
            document.getElementById("res1").innerHTML = score;
            $('#result_2').fadeIn(400);
        }, 500);
    }

});

$('#5_1').click(function(e) {
    $('#5').attr("src","/images/tests/no.png");
    e.preventDefault();
    setTimeout(() => {
        $('#task_5').fadeOut(400);
    }, 150);

    if (score <= 3) {
        setTimeout(() => {
            document.getElementById("res").innerHTML = score;
            $('#result_1').fadeIn(400);
        }, 500);
    } else {
        setTimeout(() => {
            document.getElementById("res1").innerHTML = score;
            $('#result_2').fadeIn(400);
        }, 500);
    }

});

$('#5_3').click(function(e) {
    $('#5').attr("src","/images/tests/no.png");
    e.preventDefault();
    setTimeout(() => {
        $('#task_5').fadeOut(400);
    }, 150);

    if (score <= 3) {
        setTimeout(() => {
            document.getElementById("res").innerHTML = score;
            $('#result_1').fadeIn(400);
        }, 500);
    } else {
        setTimeout(() => {
            document.getElementById("res1").innerHTML = score;
            $('#result_2').fadeIn(400);
        }, 500);
    }

});

$('#byte_btn').click(function(e) {
    e.preventDefault();
    $('#byte_course').fadeOut(500);
    byte_box.classList.add("new_background");
    setTimeout(() => {
        $('#byte_course_more').fadeIn(500);
    }, 500);
});

$('#cl_byte').click(function(e) {
    e.preventDefault();
    $('#byte_course_more').fadeOut(500);
    byte_box.classList.remove("new_background");
    setTimeout(() => {
        $('#byte_course').fadeIn(500);
    }, 500);
});

$('#kb_btn').click(function(e) {
    e.preventDefault();
    $('#kb_course').fadeOut(500);
    kb_box.classList.add("new_background");
    setTimeout(() => {
        $('#kb_course_more').fadeIn(500);
    }, 500);
});

$('#cl_kb').click(function(e) {
    e.preventDefault();
    $('#kb_course_more').fadeOut(500);
    kb_box.classList.remove("new_background");
    setTimeout(() => {
        $('#kb_course').fadeIn(500);
    }, 500);
});