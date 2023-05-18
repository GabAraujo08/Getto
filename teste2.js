
// form por etapas

var form_1 = document.querySelector(".form_1");
var form_2 = document.querySelector(".form_2");
var form_3 = document.querySelector(".form_3");


var form_1_btns = document.querySelector(".form_1_btns");
var form_2_btns = document.querySelector(".form_2_btns");
var form_3_btns = document.querySelector(".form_3_btns");


var form_1_next_btn = document.querySelector(".form_1_btns .btn_next");
var form_2_back_btn = document.querySelector(".form_2_btns .btn_back");
var form_2_next_btn = document.querySelector(".form_2_btns .btn_next");
var form_3_back_btn = document.querySelector(".form_3_btns .btn_back");

var form_2_progessbar = document.querySelector(".form_2_progessbar");
var form_3_progessbar = document.querySelector(".form_3_progessbar");

var btn_done = document.querySelector(".btn_done");
var modal_wrapper = document.querySelector(".modal_wrapper");
var shadow = document.querySelector(".shadow");

form_1_next_btn.addEventListener("click", function(){
    form_1.style.opacity = "0";
    form_1.style.pointerEvents = "none";
    form_2.style.opacity = "1";
    form_2.style.pointerEvents = "auto";

    form_1_btns.style.opacity = "0";
    form_1_btns.style.pointerEvents = "none";
    form_2_btns.style.opacity = "1";
    form_2_btns.style.pointerEvents = "auto";

    form_2_progessbar.classList.add("active");
});

form_2_back_btn.addEventListener("click", function(){
    form_1.style.opacity = "1";
    form_1.style.pointerEvents = "auto";
    form_2.style.opacity = "0";
    form_2.style.pointerEvents = "none";

    form_1_btns.style.opacity = "1";
    form_1_btns.style.pointerEvents = "auto";
    form_2_btns.style.opacity = "0";
    form_2_btns.style.pointerEvents = "none";

    form_2_progessbar.classList.remove("active");
});

form_2_next_btn.addEventListener("click", function(){
    form_2.style.opacity = "0";
    form_2.style.pointerEvents = "none";
    form_3.style.opacity = "1";
    form_3.style.pointerEvents = "auto";

    form_2_btns.style.opacity = "0";
    form_2_btns.style.pointerEvents = "none";
    form_3_btns.style.opacity = "1";
    form_3_btns.style.pointerEvents = "auto";

    form_3_progessbar.classList.add("active");
});

form_3_back_btn.addEventListener("click", function(){
    form_2.style.opacity = "1";
    form_2.style.pointerEvents = "auto";
    form_3.style.opacity = "0";
    form_3.style.pointerEvents = "none";

    form_3_btns.style.opacity = "0";
    form_3_btns.style.pointerEvents = "none";
    form_2_btns.style.opacity = "1";
    form_2_btns.style.pointerEvents = "auto";

    form_3_progessbar.classList.remove("active");
});

btn_done.addEventListener("click", function(){
	modal_wrapper.classList.add("active");
})

shadow.addEventListener("click", function(){
	modal_wrapper.classList.remove("active");
})

// input imagem

const inputFile = document.querySelector("#picture__input");
const pictureImage = document.querySelector(".picture__image");
const pictureImageTxt = "Choose an image";
pictureImage.innerHTML = pictureImageTxt;

inputFile.addEventListener("change", function (e) {
  const inputTarget = e.target;
  const file = inputTarget.files[0];

  if (file) {
    const reader = new FileReader();

    reader.addEventListener("load", function (e) {
      const readerTarget = e.target;

      const img = document.createElement("img");
      img.src = readerTarget.result;
      img.classList.add("picture__img");

      pictureImage.innerHTML = "";
      pictureImage.appendChild(img);
    });

    reader.readAsDataURL(file);
  } else {
    pictureImage.innerHTML = pictureImageTxt;
  }
});





