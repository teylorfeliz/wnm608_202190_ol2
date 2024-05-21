
const query = (options) => {
	return fetch('data/api.php',{
		method:'POST',
		body: JSON.stringify(options),
		headers: {'Content-Type':'application/json'}
	}).then(d=>d.json());
} 


// r: reducing value; o: current object of the loop; 
// i: index of current object; a": array that is looped


const templater = f => a => 
	(Array.isArray(a)?a:[a])
	.reduce((r,o,i,a)=>r+f(o,i,a),'');