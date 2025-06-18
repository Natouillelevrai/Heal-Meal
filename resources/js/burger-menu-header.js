let burgerMenuHeader = document.querySelector(".button-burger");
let containExpendBurgerMenu = document.querySelector('.contain-expend-burger-menu')
let navContainer = document.querySelector('.nav-container');
let burgerMenuIcon = document.querySelector('.burger-menu-icon');
let flag = false

burgerMenuHeader.addEventListener("click", function() {
    if (flag) {
        containExpendBurgerMenu.classList.add('scale-y-0', 'opacity-0');
        containExpendBurgerMenu.classList.remove('scale-y-100', 'opacity-100');
        navContainer.classList.add('rounded-lg');
        navContainer.classList.remove('rounded-t-lg');
        burgerMenuIcon.classList.add('ri-menu-3-line');
        burgerMenuIcon.classList.remove('ri-close-large-line');
    } else {
        containExpendBurgerMenu.classList.remove('scale-y-0', 'opacity-0');
        containExpendBurgerMenu.classList.add('scale-y-100', 'opacity-100');
        navContainer.classList.remove('rounded-lg');
        navContainer.classList.add('rounded-t-lg');
        burgerMenuIcon.classList.remove('ri-menu-3-line');
        burgerMenuIcon.classList.add('ri-close-large-line');
    }
    flag = !flag;
});

