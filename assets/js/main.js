let loader = document.getElementById('loader');
let displayElement = document.getElementsByClassName('displayElement');
let containerBook = document.getElementById('containerBook');
let bookCover = document.getElementsByClassName('coverBook');
let books = document.getElementsByClassName('card-book');
let headerBook = document.getElementsByClassName('header-book');
let mobileIsOn = false;



loading();
loadMobile();


function loading() {

    for (let index = 0; index < displayElement.length; index++) {
        if(displayElement[index].style.display == "none") {
            loader.style.display = "block";
        }
    }

    setTimeout(getData, 1000);

}


function getData() {

    for (let index = 0; index < displayElement.length; index++) {
        displayElement[index].style.display = "block";
        loader.style.display = "none";
    }

    for (let indexBook = 0; indexBook < headerBook.length; indexBook++) {
        if(headerBook[indexBook].innerHTML == ""){
            headerBook[indexBook].innerHTML = "Chargement impossible.";
        }
    }

    setTimeout(coverBook, 100);

    if(mobileIsOn == true){
        setTimeout(animateCard, 100);
        setTimeout(animateBookCover, 100);
    }
    
}


function coverBook() {

   for (let index = 0; index < bookCover.length; index++) {
        if (bookCover[index].getAttribute('src') !== "../assets/img/default_book.jpg"){
            bookCover[index].style.opacity = 0.7;
        } else {
            bookCover[index].style.opacity = 1;
        }
        
        if(bookCover[index].getAttribute('src') === "../assets/img/"){
            bookCover[index].src = "../assets/img/default_book.jpg";
        } else {
            bookCover[index].style.opacity = 1;

        }
   }
}


function animateCard() {
    for (let index = 0; index < books.length; index++) {
        books[index].animate([
            { transform: 'translateY(-300px)'},
            { transform: 'translateY(0px)'}
        ],{
            easing: 'linear',
            duration: 400
            
        });
    }
}


function animateBookCover() {
    for (let index = 0; index < bookCover.length; index++) {
        bookCover[index].animate([
            { transform : 'scale(0)'},
            { transform: 'scale(0.7)'}
        ], {
            easing: 'linear',
            duration: 600
        });
    }
}


/**
 * Function to detect if users using mobile for web site, if is true, not animation is loading.
 */
function loadMobile(){
    if(window.innerWidth >= 500){
        mobileIsOn = true;
    }
}