var pre = document.getElementById('preloader');
  pre.classList.add("of");
/*window.addEventListener('load', function () {
  var pre = document.getElementById('preloader');
  pre.classList.add("of");
})*/

window.addEventListener("scroll", function () {
  var header = document.getElementById("navbar");
  if (window.scrollY > 50) {
    header.classList.toggle("sticky", window.scrollY)
  }
  else {
    header.classList.remove("sticky")
  }
});

function hb_show() {
  var daha_btn = document.getElementById("daha_btn");
  daha_btn.classList.add("hidden");
}
