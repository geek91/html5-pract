var oddNum = function (low, high) {

	var oddNumArray = [];
	oddNumArray.push((low&1) === 1 ? low : ++low);

	while (low+2 <= high) {
		oddNumArray.push(low += 2);

	}
	return oddNumArray;
}


var evenNum = function(low, high) {

	var evArray = [];
	evArray.push((low&1) === 0 ? low : ++low);

	while (low+2 <= high) {
		evArray.push(low += 2);
	}
	return evArray;
}


var numbers = [oddNum, evenNum];

var nOne = parseInt(prompt("1st number"));
var nTwo = parseInt(prompt("2nd number"));

document.write("4 & 1 = ", (2&1 == 0) , "<br />");
for (i = 0; i<numbers.length; i++) {
	document.write(numbers[i](nOne, nTwo), "<br />");

}
