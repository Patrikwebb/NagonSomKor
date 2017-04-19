//Slider script för header bilderna
function Slider() {
    $("#header #1").show("fade", 50);
    $("#header #1").delay(3000).hide("slide", { direction: 'left' }, 50);

    var sc = $("#header img").size();
    var count = 2;

    setInterval(function() {
        $("#header #" + count).show("slide", { direction: 'right' }, 50);
        $("#header #" + count).delay(3000).hide("slide", { direction: 'left' }, 50);

        if (count == sc) {
            count = 1;
        } else {
            count = count + 1;
        }
    }, 3050);
}