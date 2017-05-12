function showMe(){
	//alert("Hello I4");
	var limit = 100;
	var str ="";
	for(i=0; i<=limit; i++){
		str += i+"<br/>";
	}
	var isClick = false;
	var string = "Hello I4";

	console.log(string.length);
	// console.log(str);
	//Single line Comment
	/*
		Multi lines Comment
		Multi lines Comment
		Multi lines Comment
	*/
	document.getElementById("numberBox").innerHTML = str;
}