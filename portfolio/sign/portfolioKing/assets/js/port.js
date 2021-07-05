//사이트 페이지

// 스크립트 페이지
const srpbtn11 = document.querySelector(".srpbtn1_1");
const srpbtn12 = document.querySelector(".srpbtn1_2");
const srpif12 = document.querySelector(".srpif1_2");

const srpbtn21 = document.querySelector(".srpbtn2_1");
const srpbtn22 = document.querySelector(".srpbtn2_2");
const srpif22 = document.querySelector(".srpif2_2");

const srpbtn31 = document.querySelector(".srpbtn3_1");
const srpbtn32 = document.querySelector(".srpbtn3_2");
const srpif32 = document.querySelector(".srpif3_2");


srpbtn11.addEventListener("click",function(e){
    e.preventDefault();
    srpif12.classList.add("active")
});
srpbtn12.addEventListener("click",function(e){
    e.preventDefault();
    srpif12.classList.remove("active")
});

srpbtn21.addEventListener("click",function(e){
    e.preventDefault();
    srpif22.classList.add("active")
});
srpbtn22.addEventListener("click",function(e){
    e.preventDefault();
    srpif22.classList.remove("active")
});

srpbtn31.addEventListener("click",function(e){
    e.preventDefault();
    srpif32.classList.add("active")
});
srpbtn32.addEventListener("click",function(e){
    e.preventDefault();
    srpif32.classList.remove("active")
});

