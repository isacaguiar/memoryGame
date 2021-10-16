const cards = document.querySelectorAll('.card');
let hasFlippedCard = false;
let firstCard, secondCard;
let lockBoard = false;

let quantityFlipCard = 0;
let recordsHit = 0;

const soundFlipCard = new Audio("../music/virada_01.wav");
const soundFinal    = new Audio("../music/applause_01.mp3");

var element = document.getElementById('region_quantity');

function controlQuantity() {
    quantityFlipCard++;
    element.innerHTML = quantityFlipCard;
}

function controlHistoric() {
    var element = document.getElementById('region_historic');
    element.innerHTML = "<i class='fas fa-angle-double-right'></i> "+quantityFlipCard +"<br>"+ element.innerHTML;
}

function registerHit() {
    recordsHit++;
}

function resetCounters() {
    controlHistoric();
    recordsHit = 0;
    quantityFlipCard = 0;
    element.innerHTML = 0;
}

function checkCompletion() {
    if(recordsHit == 6) {
        soundFinal.play();
        resetCounters();   
    }
}

function restartGame() {
    if(recordsHit > 1 && recordsHit < 6) {
        alert("O jogo não pode ser reiniciado.\nConclua a partida.");
    } else {
        cards.forEach((card) => {
            card.classList.remove('flip');
            let randomPosition = Math.floor(Math.random() * 12);
            card.style.order = randomPosition;  
        })
        addEventCard();
    }
}

function flipCard() {
    controlQuantity();

    if(lockBoard) return;
    
    soundFlipCard.play();
    
    if(this === firstCard) return;

    this.classList.add('flip');
    if(!hasFlippedCard) {
        hasFlippedCard = true;
        firstCard = this;
        return;
    }
    secondCard = this;
    hasFlippedCard = false;
    checkForMatch();
    checkCompletion();
    
}

function checkForMatch() {
    if(firstCard.dataset.card === secondCard.dataset.card) {
        disableCards();
        registerHit();
        return;
    }
    unflipCards();
}

function disableCards() {
    firstCard.removeEventListener('click', flipCard);
    secondCard.removeEventListener('click', flipCard);
    resetBoard();
}

function unflipCards() {
    lockBoard = true;

    setTimeout(() => {
        firstCard.classList.remove('flip');
        secondCard.classList.remove('flip');
        resetBoard();
    }, 1500);
}

function resetBoard() {
    [hasFlippedCard, lockBoard] = [false, false];
    [firstCard, secondCard] = [null, null];
}

(function shuffle() {
    cards.forEach((card) => {
        let randomPosition = Math.floor(Math.random() * 12);
        card.style.order = randomPosition;
    })
})();

function addEventCard() {
    cards.forEach((card) => {
        card.addEventListener('click', flipCard)
    });
}

addEventCard();