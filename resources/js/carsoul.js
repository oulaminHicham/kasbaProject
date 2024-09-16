// the carsour images
let listeOfImages = [
    'images/img1.jpg' ,
    'images/img2.jpg' ,
    'images/img3.jpg' ,
    'images/img5.jpg' ,
    'images/img6.jpg' ,
    'images/img7.jpg' ,
    'images/img8.jpg' ,
    'images/img9.jpg' ,
    'images/img10.jpg' ,
    'images/img11.jpg' ,
    'images/img12.jpg' ,
    'images/img13.jpg' ,
    'images/img15.jpg' ,
    'images/img19.jpeg',
    'images/img20.jpeg',
    'images/img21.jpeg',
    ] ;

// get the carsour image tag from doom
let carsoulImage = document.getElementById('carsoulImager');


// set duaration to automatic change carsour image
if(carsoulImage){
    setInterval(() => {
        let randomNumber = Math.floor(Math.random() * listeOfImages.length );
        let currentImages = listeOfImages[randomNumber] ;
        carsoulImage.src = currentImages ;
    }, 3000);
}