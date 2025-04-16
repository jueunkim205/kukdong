let nav = document.querySelector("nav");
let mainMenu = document.querySelector(".mainMenu");
let mainMenuLi = document.querySelectorAll(".mainMenu li");
let subMenu = document.querySelector(".subMenu");
let subMenuItem = document.querySelectorAll(".subMenuItem");

function addClass(k) {
  // 순서에 해당하는 sub메뉴 클래스 추가
  subMenuItem.forEach(function (item, index) {
    mainMenuLi[k].querySelector("a").classList.add("on");
    subMenuItem[k].classList.add("on");
  });
}

// 순서에 해당하는 sub메뉴 클래스 삭제
function rmClass() {
  subMenuItem.forEach(function (v, k) {
    mainMenuLi[k].querySelector("a").classList.remove("on");
    subMenuItem[k].classList.remove("on");
  });
}

// 메인메뉴 리스트에 마우스 올릴때마다
mainMenuLi.forEach(function (v, k) {
  v.onmouseenter = function () {
    rmClass();
    addClass(k);
    mainMenuLi[k].querySelector("a").classList.add("on");
  };
});

// mainMenu에서 mouseleave할때마다 subMenu도 사라져야 하지만
// subMenu에 mouseenter할때는 subMenu가 사라지면 안됨
mainMenu.addEventListener("mouseenter", function () {
  nav.classList.add("on");
});

mainMenu.addEventListener("mouseleave", function () {
  nav.classList.remove("on");

  subMenu.addEventListener("mouseenter", function () {
    nav.classList.add("on");
  });
  subMenu.addEventListener("mouseleave", function () {
    nav.classList.remove("on");
  });
});

// footer family site 클릭이벤트
document.querySelector('footer .familySite').addEventListener('click', function(){
  this.classList.toggle('on');
})