let burgerMenuHeader = document.querySelector(".button-burger");
let containExpendBurgerMenu = document.querySelector('.contain-expend-burger-menu')
let navContainer = document.querySelector('.nav-container');
let flag = false
console.log('test')
burgerMenuHeader.addEventListener("click", function() {
    if (flag) {
        containExpendBurgerMenu.classList.add('scale-y-0', 'opacity-0');
        containExpendBurgerMenu.classList.remove('scale-y-100', 'opacity-100');
        navContainer.classList.add('rounded-lg');
        navContainer.classList.remove('rounded-t-lg');
    } else {
        containExpendBurgerMenu.classList.remove('scale-y-0', 'opacity-0');
        containExpendBurgerMenu.classList.add('scale-y-100', 'opacity-100');
        navContainer.classList.remove('rounded-lg');
        navContainer.classList.add('rounded-t-lg');
    }
    flag = !flag;
});

