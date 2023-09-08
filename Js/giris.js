//BURASI PASOLİGDEKİ FORMUN ETKİLEŞİMİNİ SAĞLAMASI İÇİN VERİLEN CLASS DEĞERİNİ ALMASINI SAĞLAYAN JS KODLARIDIR.
    function toggleForm(){
        section = document.querySelector('section');
        section.classList.toggle('active');
        container = document.querySelector('.container');
        container.classList.toggle('active');

    }
   //BURASI FORMDAKİ ŞİFRE GÖSTER ŞİFRE GİZLE KISMINI ÇALIŞTIRAN JS KODLARIDIR.
    function gosterTk(){
    var x = document.getElementById("userpassword");
    if (x.type === "password") {
      x.type = "text";
    } else {
     x.type = "password";
    }
    var y = document.getElementById("userpassword_tkr");
    if (y.type === "password") {
      y.type = "text";
    } else {
      y.type = "password";
    }
  }
