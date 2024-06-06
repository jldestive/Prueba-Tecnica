// Pregunta 2:

/**
 *
 * @param {string} str
 * @returns {string}
 */
const reverseString = str => {
    if(typeof s === "string"){
        return str.split('').reverse().join('');
    }else{
        throw new Error('The input must be a string');
    }
};

// Pregunta 4
/**
 *
 * @param {number[]} numbers
 * @returns {number[]}
 */
const evenNumbers = numbers => {
    if(Array.isArray(numbers) && numbers.every(item => typeof item === 'number')){
        return numbers.filter((num) => num % 2 === 0);
    }else{
        throw new Error('The input must be an array of numbers');
    }
}

// Pregunta 6
document.getElementById('myButton').addEventListener('click', () => {
	alert('Hello World');
});

// Pregunta 8
{
	const BASE_URL = 'http://localhost:800/api';

	const fetchData = async () => {
		const res = await fetch(`${BASE_URL}/user`);
		return await res.json();
	};

	const user = fetchData();
	// suponiendo que la API devuelve un objeto { id: number, username: string, email: string }
	// lo vamos a mostrar en una lista desordenada que sera la que tenga el id result
	const $ul = document.getElementById('result');

	Object.values(user).forEach(value => {
		const li = document.createElement('li');
		li.textContent = value;
		$ul.appendChild(li);
	});
}

// Pregunta 10
const user = {
	id: 1,
	name: 'John Doe',
	age: 22,
};

localStorage.setItem('user', JSON.stringify(user));

const userFromStorage = JSON.parse(localStorage.getItem('user'));
