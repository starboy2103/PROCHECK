window.addEventListener("scroll", function(){
    const front= document.querySelector("div.t-front");
    const height=front.getBoundingClientRect().height;
    var value=front.getBoundingClientRect().bottom;
    var final=(value)/(height*0.75);
    if(value<=height*0.75)
    {
        front.style.opacity=final;
    }
    else
    {
        front.style.opacity='1';
    }
});