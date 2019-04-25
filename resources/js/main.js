
const amount = document.querySelector('.amount');
const range = document.querySelector('.range-amount');

if( amount && range){
	amount.oninput = function(){
		
		updateInput(amount.value, range);
	}
	range.oninput = function(){

		updateInput(range.value, amount);
	}


	function updateInput(val, el) {
	  el.value=val; 
	}
}