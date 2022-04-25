@extends('layouts.app')

@section('metadatos')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('css')
@endsection
<style>

:root {
	--color-one: #f0ebf8;
	--color-two: #ffffff;
	--color-three: #673ab7;
	--color-four: #202124;
	--color-five: #72767a;
}
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: Arial, Helvetica, sans-serif;
}
body {
	/* display: flex;
	align-items: center;
	justify-content: flex-start;
	flex-direction: column;
	background: var(--color-one);
	padding-bottom: 5rem; */
}
.title {
  align-items:center;
	/* width: 90%; */
	/* max-width: 500px; */

	background: var(--color-two);
	color: var(--color-four);

	border-radius: 10px;
	overflow: hidden;
	margin: 1rem;
}

.title,
ol > li {
	-webkit-box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, 0.75);
	-moz-box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, 0.75);
	box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, 0.75);
}

.title > .border {
	height: 10px;
	background: var(--color-three);
}
.title > h1 {
	padding: 2rem 1rem;
	font-weight: lighter;
}

form {
	width: 100%;
	display: flex;
	align-items: center;
	justify-content: flex-start;
	flex-direction: column;

	padding: 0 1rem;
	/* margin: 1rem 0; */
}
ul,
ol {
	list-style-type: none;
}
ol {
	/* border: 1px solid red; */
	width: 100%;
	max-width: 650px;
}
ol > li {
	position: relative;
	width: 100%;
	margin-bottom: 1rem;
	padding: 2rem;

	background: var(--color-two);
	color: var(--color-four);

	border-radius: 10px;
	overflow: hidden;
}

ol > .not_complete {
	background: red;
}
ol #answer {
	position: absolute;
	height: 100%;
	width: 15px;
	background: var(--color-two);
	top: 0;
	right: 0;
	z-index: 0;
}
ol .green {
	background: green !important;
}
ol .red {
	background: red !important;
}

.actual-question {
	font-size: 1.1rem;
}

/* The container */
.container {
	display: block;
	cursor: pointer;
	position: relative;
	margin: 1rem 0;

	font-size: 1rem;

	display: flex;
	align-items: center;
	justify-content: flex-start;

	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

.container input {
	position: absolute;
	opacity: 0;
	cursor: pointer;
}

.checkmark {
	height: 20px;
	width: 20px;
	border-radius: 50%;
	position: relative;

	margin-right: 1rem;

	background: var(--color-two);
	border: 2px solid var(--color-five);
}

.container:hover input ~ .checkmark {
	-webkit-box-shadow: 0px 0px 0px 10px rgba(0, 0, 0, 0.05);
	-moz-box-shadow: 0px 0px 0px 10px rgba(0, 0, 0, 0.05);
	box-shadow: 0px 0px 0px 10px rgba(0, 0, 0, 0.05);
}

.container input:checked ~ .checkmark {
	border: 2px solid var(--color-three);
}

.checkmark:after {
	content: "";
	display: none;
}

.container input:checked ~ .checkmark:after {
	display: block;
}

.container .checkmark:after {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 10px;
	height: 10px;
	border-radius: 50%;

	background: var(--color-three);
}

.submition {
	width: 100%;
	max-width: 650px;
}

.submition input {
	cursor: pointer;
	padding: 0.7rem 1rem;
	background: var(--color-three);
	color: var(--color-one);
	border: 0;
	border-radius: 5px;
	margin-right: auto;
	font-size: large;
}
.submition input:hover {
	opacity: 0.9;
}

.form-control input{
    border-bottom: 1px dotted gray;
    border-top: none;
    border-left: none;
    border-right: none;
    border-radius: 4px;
    display: block;
    width: 50%;
    padding: 8px;
    font-size: 14px; 
}
.boredes-cajas{
  
  border-top: none;
  border-left: none;
  border-right: none;
  border-radius: 4px;
  display: block;
  width: 100%;
  padding: 8px;
  font-size: 14px; 
  text-decoration: none;
  border:0px;
  outline: none;
  border-bottom: 1px dotted gray;
}
.boredes-cajas:focus{

  box-shadow: 8px 8px 15px -5px  rgb(177, 185, 175)

}





  /* *{
    box-sizing: border-box;
}

body{
    background-color: rgb(236, 234, 235);
    font-family: 'Roboto', Arial, Helvetica, sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    
    margin: 0;
    margin-top: -8px;
   
} */
p {
    /* text-align: center; */
    /* font-size: 32px;
    color: #202124;
    font-family: 'Roboto', Arial, Helvetica, sans-serif;
    padding-top: -100px; */
    
}

/* .container {
    background-color: rgba(255, 255, 255, 0);
    border-radius: 10px;
    width: 740px;
    padding: 20px;
    display: block;
    
}

.top-header{
    margin-bottom: 10px;
    padding-bottom: 20px;
    
    position: relative;
    background-color: white;
    border-radius: 10px;
    padding-left:30px;
    border-top: 12px solid #673AB7;
}

.form-control{
    margin-bottom: 20px;
    padding-bottom: 20px;
    position: relative;
    background-color: white;
    border-radius: 10px;
    padding: 30px;
}
.form-control label{
    color: #000000;
    display: block;
    margin-bottom: 25px;
    font-size: 18px;
    font-family: 'Roboto', Arial, Helvetica, sans-serif;
}
.form-control input{
    border-bottom: 1px dotted gray;
    border-top: none;
    border-left: none;
    border-right: none;
    border-radius: 4px;
    display: block;
    width: 50%;
    padding: 8px;
    font-size: 14px; 
}
.form-control select{
    width: 180px;
    padding: 20px;
    color: gray;
    font-size: 15px;
    letter-spacing: 1px;
    border-radius: 5px;
    border-color: rgb(207, 205, 205);
}

.form-control input:focus{
    outline: 0;
    border-bottom: gray;
    border-color: #777;
} */
</style>

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-3">
                            FORMULARIO
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            {{-- <button class="btn btn-success"  data-toggle="modal" onclick="abreModal()"><i class="fa fa-plus"></i> Nueva Campaña</button> --}}
                            {{-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                                Launch Large Modal
                            </button> --}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{-- <div class="question">
                        <div class="description_class">
                            <input  type="text" name="Title" value="Title" id="title">
                            <textarea id="discpn" type="text" name="Description" placeholder="Form description"
                                rows="1"></textarea>
                        </div>
                    </div> --}}
                    <div class="row">
                      <div class="col-md-12">
                        <div class="title">
                            <div class="border"></div>
                            <h1>
                              <div>
                                  <input type="email" id="email" class="boredes-cajas" placeholder="TITULO DEL FORMULARIO"/>
                                  <p style="padding: 2px"></p>
                                  <textarea class="boredes-cajas" name="" id="" cols="30" rows="2" placeholder="DESCRIPCION DEL FORMULARIO" rows="10"></textarea>
                              </div>
                            </h1>
                        </div>

                        {{-- <form id="test" class="test">
                            <ol class="listOfQuestions" id="listOfQuestions">
                            
                            </ol>
                            <div class="submition">
                              <input type="submit" value="Afficher le resultat">
                              <input type="reset" value="Reset" >
                            </div>
                        </form> --}}

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="title">
                          {{-- <div class="border"></div> --}}
                          <h1>
                            <div class="row">
                              <div class="col-md-9">
                                <input type="email" id="email" class="boredes-cajas" placeholder="Nombre de la pregunta"/>
                              </div>
                              <div class="col-md-3">
                                <select name="" id="" class="form-control" onchange="addComponent(this)">
                                  <option value="Select">Seleccion Unica</option>
                                  <option value="checkbox">Seleccion Multiple</option>
                                  <option value="input">Respuesta Corta</option>
                                  <option value="taxtarea">Respuesta Largo</option>
                                  <option value="file">Adjuntar Archivo</option>
                                </select>
                              </div>

                                {{-- <input type="email" id="email" class="boredes-cajas" placeholder="TITULO DEL FORMULARIO"/>
                                <p style="padding: 2px"></p>
                                <textarea class="boredes-cajas" name="" id="" cols="30" rows="2" placeholder="DESCRIPCION DEL FORMULARIO" rows="10"></textarea> --}}
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <p style="padding: 2px"></p>
                                <div id="component">

                                </div>
                              </div>
                            </div>
                          </h1>
                      </div>
                      </div>
                    </div>


                    {{-- <div class="container" id="header">
                      <div class="top-header">
                          <p class="top">FCC Survey Form</p>
                      </div>
                      
              
                      <div class="form-control">
                          <label for="username">Name</label>
                        <input type="text" id="name" placeholder="Your Name" />
                      </div>
                      <div class="form-control">
                          <label for="username">Email</label>
                        <input type="email" id="email" placeholder="Your Email" />
                      </div>
                      <div class="form-control">
                          <label for="username">Age</label>
                        <input type="number" id="age" placeholder="Your Age" />
                      </div>
                      <div class="form-control">
                          <label for="username">Wiich option best describes your current role?</label>
              
                        <select name="role" id="role">
                            <option value="student">Student</option>
                            <option value="fulltime">Full Time Job</option>
                            <option value="fulltimelearner">Full Time Learner</option>
                            <option value="prefernot">Prefer Not To Say</option>
                            <option value="others">Others</option>
                        </select>
                      </div>
                      <div class="form-control">
                          <label for="username">Username</label>
                        <input type="text" id="username" placeholder="Enter username" />
                      </div>
                      <div class="form-control">
                          <label for="username">Username</label>
                        <input type="text" id="username" placeholder="Enter username" />
                      </div>
                    </div> --}}
                    <hr>
                    <br><br>

                    {{-- <div class="title">
                        <div class="border"></div>
                        <h1>
                          QCM:Javascript - Events et DOM 
                        </h1>
                    </div>
                   <form id="test" class="test">
                      <ol class="listOfQuestions" id="listOfQuestions">
                      
                      </ol>
                      <div class="submition">
                         <input type="submit" value="Afficher le resultat">
                         <input type="reset" value="Reset" >
                      </div>
                   </form> --}}
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')

  <script  type="text/javascript">

    $( document ).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        showQuestions();

    });

    function addComponent(select){

      console.log(select.value);

      addComponentInput(select.value);

    }

    function addComponentInput(type){

      if(type == 'input'){
        
      }else if(){

      }else if(){

      }

      // var component =  '<input type="text" id="text" class="boredes-cajas" placeholder="ESCRIBA SU RESPUESTA"/>';

      // $('#component').html(component);

    }


//     var Questions = [
//       {
//         question: "Quel est l'objet le plus haut niveau en Javascript",
//         options: ["top", "window", "document", "url"],
//         correct: 1,
//       },
//       {
//         question: "Quel est l'événement inverse de onFocus ?",
//         options: ["onFocusDown", "onFocusOff", "", "OnDeselect"],
//         correct: 2,
//       },
//       {
//         question:
//           "En JavaScript, quelle propriété permet de modifier l’ élément HTML (p)bonjour(/p) ?",
//         options: [
//           `document.getElementsByTagName("p").innerHTML`,
//           `document.getElementsByName("p").innerHTML`,
//           `document.getElementsByTagName("p").content`,
//           `document.getElementById("p").content`,
//         ],
//         correct: 0,
//       },
//       {
//         question:
//           "Lequel des éléments suivants n’est pas une propriété (un objet fils) de l’objet window?",
//         options: ["document", "menu", "navigator", "history"],
//         correct: 1,
//       },
//       {
//         question:
//           "Pour ajouter un attribut déjà supprimé à un élément on utilise ?",
//         options: [
//           `document.getElementById("t1"). setAttribut(“name”,” monattr”);`,
//           `document.createAttrNode("name");`,
//           `document.getElementById("t1").name= “monattr”`,
//           `document.getElementById("t1").attr= “monattr”`,
//         ],
//         correct: 0,
//       },
//       {
//         question: `La boite de diaglogue confirm() est méthode de l’objet ?`,
//         options: [`Window`, `Document`, `Browser`, `Dialogue`],
//         correct: 0,
//       },
//     ];

// const listOfQuestions = document.getElementById("listOfQuestions");
// const showQuestions = () => {
// 	GeneratedQuestions = Questions.map(generateQustion);
// 	// console.log(GeneratedQuestions);
// 	listOfQuestions.innerHTML = GeneratedQuestions.join("");
// };

// const generateQustion = (params, questIndex) => {
// 	let options = params["options"].map((value, index, array) => {
// 		return `<li class="choice">
//                         <label class=container>
//                             <input type="radio" name="quest_${questIndex}" id="" value="${index}">
//                             <span class="checkmark"></span>
//                             ${value}
//                         </label>
//                     </li>
//                     `;
// 	});
// 	return `<li class="question">
//         <div class="actual-question">
//         ${params["question"]}
//         </div>
//         <div id="answer"></div>
//         <div class="choices">
//             <ul>
//                 ${options.join("")}
//             </ul>
//         </div>
//     </li>`;
// };

// const form = document.getElementById("test");

//       form.addEventListener("submit", (e) => {
//         e.preventDefault();
//         // let localform = new FormData("test");
//         // console.log(localform.getAll());

//         let values = Questions.map(
//           (quest, currentIndex) => form.elements[`quest_${currentIndex}`].value,
//         );
//         let empty = values.map((value) => !value);
//         if (empty.findIndex((v) => v) !== -1) {
//           empty.map((value, index, array) => {
//             if (!value) {
//               listOfQuestions["children"][index]["children"][1].className = "";
//               return;
//             }
//             listOfQuestions["children"][index]["children"][1].className = "red";
//           });
//           alert("toutes les questions sont obligatoires ");
//           return;
//         }
//         let correct = Questions.map(
//           (quest, currentIndex) =>
//             parseInt(form.elements[`quest_${currentIndex}`].value) == quest.correct,
//         );

//         let score = correct.reduce(
//           (previousValue, currentValue) => currentValue + previousValue,
//           0,
//         );

//         correct.map((value, index) => {
//           if (value) {
//             listOfQuestions["children"][index]["children"][1].className = "green";
//           } else {
//             listOfQuestions["children"][index]["children"][1].className = "red";
//           }
//         });

//         alert("votre score est : " + score);
//       });

    </script>
@endsection