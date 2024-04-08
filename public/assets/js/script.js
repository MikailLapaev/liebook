let leftbtn = document.getElementById('left')
let rightbtn = document.getElementById('right')
let lin = document.getElementById('lin')
let position = 0

leftbtn.addEventListener('click', function(){
    if(position >= 0){
        position =- 2700
    }
    else{
        position += 1350
    }
    lin.style.transform = `translateX(${position}px)`
})

rightbtn.addEventListener('click', function(){
    if(position <= -2700){
        position = 0
    }
    else{
        position -= 1350
    }
    lin.style.transform = `translateX(${position}px)`
})
