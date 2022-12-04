// let sliderData = [
//     {
//         'image': 'images/asia.jpeg',
//         'name': 'Asia Sawa',
//         'rating': 3,
//         'description': 'finding a mentor in my early age of computer science journey was my great decision I have ever made. There are thousand free resource available to learn but to study and work on real project with other developers is something that is very rare.'

//     },
//     {
//         'image': 'images/ahmad.jpeg',
//         'name': 'Ahmad Naveed Atayee',
//         'rating': 4,
//         'description': 'finding a mentor in my early age of computer science journey was my great decision I have ever made. There are thousand free resource available to learn but to study and work on real project with other developers is something that is very rare.'
//     },
//     {
//         'image': 'images/HORIA.jpeg',
//         'name': 'Horia Atayee',
//         'rating': 5,
//         'description': 'finding a mentor in my early age of computer science journey was my great decision I have ever made. There are thousand free resource available to learn but to study and work on real project with other developers is something that is very rare.'
//     }
// ];



let slides = document.querySelectorAll('.slider-content')
let counter = 0,slidesHoles;
let holes = document.querySelectorAll('.hole');

slides.forEach((slide,index)=>{
    slide.style.left=`${index*105}%`;
    holes[0].classList.add('active')
    
})

const slideImage =()=>{
    slides.forEach((slide)=>{
       
            slide.style.transform=`translateX(-${counter *105}%)` 
  
    })
}

const goNext = ()=>{
    counter++
    if(counter==slides.length){
        counter=0;   
    }
    slideImage();
    slideSelectedHole(counter)

   
    
}
const goPrev = ()=>{
    
    counter--;
    if(counter<0){
        counter=slides.length-1;
    }
    slideImage();
    slideSelectedHole(counter)

}


holes.forEach((hole)=>{
    hole.addEventListener('click',()=>{
        
        counter =hole.dataset.id;
        slideImage() 
        slideSelectedHole(counter)
        
    })
    
})

slideSelectedHole = (counter)=>{

    slidesHoles =slides[counter].children[1].children[3];
    slidesHoles.children[counter].classList.add('active')
    
}

// window.onload=()=>{
//     setInterval(()=>{
//         counter++
//         if(counter==slides.length){
//             counter=0;   
//         }
//         slideImage()
//         slideSelectedHole(counter)

//     },5000)

// }