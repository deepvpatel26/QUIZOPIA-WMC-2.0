  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyBMFE9r3lOP0OZ48bBD0efZLpxse_KR-Ac",
    authDomain: "my-quiz-91331.firebaseapp.com",
    databaseURL: "https://my-quiz-91331-default-rtdb.firebaseio.com",
    projectId: "my-quiz-91331",
    storageBucket: "my-quiz-91331.appspot.com",
    messagingSenderId: "491622719792",
    appId: "1:491622719792:web:1179f3dd55182f01b8e8f5"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  

let quizopia = firebase.database().ref("Quiz");


  //listen for Submit
window.onload=function(){
document.querySelector(".novalidate").addEventListener("submit",submitForm);

function submitForm(e) {
  e.preventDefault();

  //get input values
  
  let question = document.querySelector(".question").value;
  let optA = document.querySelector(".aI").value;
  let optB = document.querySelector(".bI").value;
  let optC = document.querySelector(".cI").value;
  let optD = document.querySelector(".dI").value;
  let pass = document.querySelector(".pass")

  console.log(question,optA,optB,optC,optD,pass);

  saveContactInfo(question,optA,optB,optC,optD,pass);


  document.querySelector(".novalidate").reset();
}
}

//save questions to firebase
function saveContactInfo(question,optA,optB,optC,optD,pass){
  let quizopia = quizopia.push();


  newquizopia.set({
   question: question,
   option_A: optA,
   option_B: optB,
   option_C: optC,
   option_D: optD,
   pass: pass,
  });
}
