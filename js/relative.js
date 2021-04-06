window.addEventListener("scroll",function() {
    const main= document.querySelector("div.main");
    const title= document.querySelector("div.title");
    if(main.getBoundingClientRect().bottom>=title.getBoundingClientRect().bottom)
    {
        main.style.position='relative';
    }
});