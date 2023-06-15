let formTwo = document.querySelector('.two');
let btnTwo = formTwo.querySelector('button');
let nameItems = formTwo.querySelectorAll('.name_item input');
console.log(formTwo);
for(let i = 0; i < nameItems.length; i++){
	nameItems[i].addEventListener('focus', (evt)=>{
		console.log(1);
		let er = createElement(p);
		er.classList.add('error');

		evt.target.append(er);
	});
}

// for(let i = 0; i < nameItems.length; i++){
// 	console.log(nameItems[i].innerHTML);
// }
