const menu = document.querySelector(".menu");
const navigation = document.querySelector(".navigation");

menu.addEventListener('click', () => {
    navigation.classList.toggle('active');
});

const hamburger = document.querySelector(".menu");
document.addEventListener('click', function(e){
    if(!hamburger.contains(e.target) && !navigation.contains(e.target)) {
        navigation.classList.remove('active');
    }
});