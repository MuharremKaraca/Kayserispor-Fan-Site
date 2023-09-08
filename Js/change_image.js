//BURASI BÜYÜK RESİM OLAN BAŞLANGIÇTA GELEN RESİMLERİN BULUNDUĞU VE ÇALIŞMAISNI SAĞLAYAN JS KODLARIDIR.
    var images = ["responsive.png",];
    $(function () {
        var i = 0;
        $("#dvImage").css("background-image", "url(./images/" + images[i] + ")");
        setInterval(function () {
            i++;
            if (i == images.length) {
                i = 0;
            }
                $("#dvImage").css("opacity", "0");
                $("#dvImage").css("background-image", "url(./images/" + images[i] + ")");
                $("#dvImage").css("opacity", "1");
             
        }, 5000);
    });



    