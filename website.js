console.log("connected");

/*For menu bar*/

var stateOpen = false; //stateOpen is a variable allowingus to open the menubar if it's false and close it if it is true. We start at a fals value
var items = document.getElementsByTagName("li");

/*Hides or show the whole menu depending on stateOpen if there is a small window*/
function show(){
	var i;
	if (stateOpen==true){
		for ( i = 1; i < items.length; i++) {
			items[i].style.display="none";
		}
		stateOpen=false;
	} else{
		for (i = 1; i < items.length; i++) {
			items[i].style.display="block";
		}
		stateOpen=true;
	}

}


/*Code for the quizes*/

//getting json file
let xhr = new XMLHttpRequest();
xhr.open('GET', 'quiz.json');
xhr.send();
xhr.onload = function(){
	if (xhr.status!=200) {
		alert('Error ${xhr.status}: ${xhr.statusText}');
	} else {
		let parsedObj = JSON.parse(xhr.responseText);
			console.log(parsedObj);
				getvalues(parsedObj);
	}
};

var frenchw;//french array of words
var englishw;//english array of words
var a =0;//a is the curent position of the array that constitues the words
var card = document.getElementById("secondside");
var shadow = document.getElementById("shadowbox");
var frenchtxt = document.getElementById("french"); //place where the french word will be stored
var englishtxt = document.getElementById("english");//place where the english word will be stored
function getvalues(parsedObj){
			var j = parsedObj["quizes"];
			frenchw=[j[0].frenchword];
			englishw=[j[0].englishword];
			/*creating the arrays*/
			for (var i = 1; i < j.length - 1; i++) {
				frenchw.push(j[i].frenchword);
				englishw.push(j[i].englishword);
			}
			/*
			console.log(i);
			console.log(frenchw);*/
			change();
		//console.log("works");
}

/*turn shows the translation of the french word*/
function turn(){
	card.style.visibility=("visible");
	shadow.style.visibility=("visible");
}

/*change goes to the word and hides the answer*/
function change(){
	card.style.visibility=("hidden");
	shadow.style.visibility = ("hidden");
	frenchtxt.innerHTML=frenchw[a];
	englishtxt.innerHTML=englishw[a];
	a++;
	/*removing the 'next' button if there is no mor new word*/
	if (a>=frenchw.length) {
		document.getElementById("btn1").style.display=("none");
	}

}



