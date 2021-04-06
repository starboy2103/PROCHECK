window.addEventListener("scroll", function(){
    const main = document.querySelector("div.main");
    const front = document.querySelector("div.t-front");
    if(front.getBoundingClientRect().bottom >= main.getBoundingClientRect().top)
    {
        main.style.position = 'fixed';
    }
});