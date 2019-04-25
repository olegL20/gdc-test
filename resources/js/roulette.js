
function runBtc(winner){

    var items= $("#popup-btc").find('.roulette-item');
    var numberRoll = 10; //количество прокруток не меньше 2
    var oneHeight = items.innerHeight(); // высота одного элемента
    var numElem = items.length; // количество элементов

    var winnerNum = items.index($("#popup-btc .roulette-item:contains("+winner+")"));

    // if(winnerNum == -1){
    //     return false
    // }
    for (i = 0; i < numberRoll; i++) {
        items.clone().appendTo("#popup-btc .main-roulette-array");
    }
    
    $('#popup-btc .main-roulette-array').css({
        bottom: "0"
    })
           
            
           
    $('#popup-btc .main-roulette-array').animate({
        bottom: ((numberRoll-1)*numElem-1+winnerNum)*oneHeight
    }, 4000);
       
        


};

function runWinner(winner){

    if($("#popup-winner").find('.winner-image').hasClass('show-img')){

        $("#popup-winner").find('.winner-image').removeClass('show-img');
    }

    var items= $("#popup-winner").find('.roulette-item');
    var numberRoll = 15; //количество прокруток не меньше 2
    var oneHeight = items.innerHeight(); // высота одного элемента
    var numElem = items.length; // количество элементов

    var winnerElem = $("#popup-winner .roulette-item:contains("+winner+")");
    var winnerNum = items.index(winnerElem);
    
   
    for (i = 0; i < numberRoll; i++) {
        items.clone().appendTo("#popup-winner .main-roulette-array");
    }
    
    $('#popup-winner .main-roulette-array').css({
        bottom: "0"
    })
           
            
    

    $('#popup-winner .main-roulette-array').animate({
        bottom: ((numberRoll-1)*numElem-1+winnerNum)*oneHeight
    },{
        duration: 8000, 
        complete: function() {
            
          $("#popup-winner").find('.winner-image').addClass('show-img');
        }});
};

