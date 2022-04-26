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








/* .s1 {
  height: auto;
  border: 1px solid red;
  margin: 5px 0 5px 0;
}

.s2 {
  height: 20px;
  border: 1px dotted blue;
  margin: 5px 0 5px 0;
} */





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
                        </div>
                    </div>
                </div>
                <div class="card-body">
                  {{-- <form action="{{ url('Campania/guardaFormulario') }}" method="post" > --}}
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="title">
                            <div class="border"></div>
                            <h1>
                              <div>
                                  <input type="text" id="text" name="nombre_formulario" id="nombre_formulario" class="boredes-cajas" placeholder="TITULO DEL FORMULARIO"/>
                                  <p style="padding: 2px"></p>
                                  <textarea class="boredes-cajas" name="descripcion_formulario" id="descripcion_formulario" cols="30" rows="2" placeholder="DESCRIPCION DEL FORMULARIO" ></textarea>
                              </div>
                            </h1>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="title">
                          <div style="padding: 25px;">
                            <div class="row">
                              <div class="col-md-9">
                                <input type="text" id="nombre_pregunta" name="nombre_pregunta" class="boredes-cajas" placeholder="Nombre de la pregunta"/>
                              </div>
                              <div class="col-md-3">
                                <select name="" id="" class="form-control" onchange="addComponent(this,1)">
                                  <option value="select">Seleccion Unica</option>
                                  <option value="checkbox">Seleccion Multiple</option>
                                  <option value="input">Respuesta Corta</option>
                                  <option value="taxtarea">Respuesta Largo</option>
                                  <option value="file">Adjuntar Archivo</option>
                                </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <p style="padding: 2px"></p>
                                <div id="component_1">

                                </div>
                                <hr>
                                <div class="footer">
                                    <div class="row">
                                        <div class="col-md-5">

                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                        <div class="col-md-1 float-right">
                                            <button type="button" class="btn btn-outline-success btn-circle btn-sm" onclick="addBlock()"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="cuerpos_form" class="sortable1">
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-12">
                        <button class="btn btn-outline-success btn-circle btn-block">GENERAR FORMULARIO</button>
                      </div>
                    </div>
                  {{-- </form> --}}
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

        // showQuestions();

    });

    function addComponent(select, bloque){
        console.log("entre a ddd");

      console.log(select.value);

      addComponentInput(select.value, bloque);

    }

    function addComponentInput(type, bloque){

        console.log(type);

        if(type == 'input'){
            var component =  '<input type="text" class="boredes-cajas" placeholder="ESCRIBA SU RESPUESTA"/>';
        }else if(type == 'select'){
            var component =  '<ul  id="select_lista_'+bloque+'"><li><input type="text" class="boredes-cajas" value="Opcion 1"/></li></ul><button type="button" class="text-info" style="border:none;outline: none;" onclick="addOptionSelect('+bloque+')">Adicionar opcion</button>';
        }else if(type == 'taxtarea'){
            var component =  '<textarea class="boredes-cajas" name="" id="" cols="30" rows="2" placeholder="Respuesta Larga"></textarea>';
        }else if(type == 'file'){
            var component =  '<div class="row"><div class="col-md-4"><input type="number" class="boredes-cajas" placeholder="Cantidad de archivos requeridos"/></div><div class="col-md-4"><input type="number" class="boredes-cajas" placeholder="Tamaño maximo del archivo"/></div></div>';
        }else{
            var component =  '<ul  id="check_lista_'+bloque+'"><li><input type="text" class="boredes-cajas" value="Check 1"/></li></ul><button type="button"  class="text-info" style="border:none;outline: none;" onclick="addOptionCheck('+bloque+')">Adicionar Check</button>';
        }

        $('#component_'+bloque).html(component);

    }

    var cantaddOptionSelect = 1;

    function addOptionSelect(bloque){

      console.log("apretaste add optin select");

      cantaddOptionSelect++;

      const listid = "select_lista_"+bloque;

      const optionid = "option_"+cantaddOptionSelect;

      $("#select_lista_"+bloque).append("<li id="+optionid+"><div class='row'><div class='col-md-11'><input type='text' class='boredes-cajas' value='Opcion "+cantaddOptionSelect+"'/></div><div class='col-md-1'><p style='padding:1px;'></p><i class='fa fa-window-close' onclick='removeItem("+listid.toString()+","+optionid.toString()+")'></i></div></div></li>");

      console.log(listid);
      console.log(optionid);

    }

    function removeItem(listid, li) {

        console.log("entre a remove li");

        console.log(listid);
        console.log(li);
        console.log(li.id);
 
        // Declaring a variable to get select element
        // var a = document.getElementById("list");
        // var candidate = document.getElementById("candidate");
        // var item = document.getElementById(candidate.value);
        // a.removeChild(item);

        // listid.removeChild(li.id);
        listid.removeChild(li);
    }

    var cantaddOptionCheck = 1;

    function addOptionCheck(bloque){

        cantaddOptionCheck++;

        const listidCheck = "check_lista_"+bloque;

        const optionCheckid = "optionCehck_"+cantaddOptionCheck;

        $("#check_lista_"+bloque).append("<li id="+optionCheckid+"><div class='row'><div class='col-md-11'><input type='text' class='boredes-cajas' value='Check "+cantaddOptionCheck+"'/></div><div class='col-md-1'><p style='padding:1px;'></p><i class='fa fa-window-close' onclick='removeItemCheck("+listidCheck.toString()+","+optionCheckid.toString()+")'></i></div></div></li>");
    }

    function removeItemCheck(listid, li) {

        console.log("entre a remove li");

        console.log(listid);
        console.log(li);
        console.log(li.id);

        listid.removeChild(li);
    }

    var cantaddBlock = 2;

    function addBlock(){

      // ✅ Create element
      const el = document.createElement('div');

      el.addEventListener('click', function handleClick(event) {
          console.log('element clicked 🎉🎉🎉', event);
      });

      // ✅ Add text content to element
      // var content = "<input type='text' class='form-control'/>"
      // el.textContent = content;

      // ✅ Or set the innerHTML of the element
      // el.innerHTML = `<span>Hello world</span>`;
      // el.innerHTML = `<input type="text" class="form-control"/>`;
      var dato = '<div class="row s1" id="bloque_'+cantaddBlock+'">'+
                    '<div class="col-md-12">'+
                      '<div class="title">'+
                        '<div style="padding: 25px;">'+
                          '<div class="row">'+
                            '<div class="col-md-9">'+
                              '<input type="email" id="email" class="boredes-cajas" placeholder="Nombre de la pregunta"/>'+
                            '</div>'+
                            '<div class="col-md-3">'+
                              '<select name="" id="" class="form-control" onchange="addComponent(this, '+cantaddBlock+')">'+
                                '<option value="select">Seleccion Unica</option>'+
                                '<option value="checkbox">Seleccion Multiple</option>'+
                                '<option value="input">Respuesta Corta</option>'+
                                '<option value="taxtarea">Respuesta Largo</option>'+
                                '<option value="file">Adjuntar Archivo</option>'+
                              '</select>'+
                            '</div>'+
                          '</div>'+
                          '<div class="row">'+
                            '<div class="col-md-12">'+
                              '<p style="padding: 2px"></p>'+
                              '<div id="component_'+cantaddBlock+'">'+

                              '</div>'+
                              '<hr>'+
                              '<div class="footer">'+
                                  '<div class="row">'+
                                      '<div class="col-md-5">'+

                                      '</div>'+
                                      '<div class="col-md-6">'+

                                      '</div>'+
                                      '<div class="col-md-1 float-right">'+
                                          '<button type="button" class="btn btn-outline-success btn-circle btn-sm" onclick="addBlock()"><i class="fa fa-plus"></i></button>'+
                                      '</div>'+
                                  '</div>'+
                              '</div>'+
                            '</div>'+
                          '</div>'+
                        '</div>'+
                      '</div>'+
                    '</div>'+
                  '</div>';
      
                  // console.log(dato);

      el.innerHTML = dato;


      // el.style.backgroundColor = 'salmon';
      // el.style.width = '150px';
      // el.style.height = '150px';

      // ✅ add element to DOM
      const box = document.getElementById('cuerpos_form');
      box.appendChild(el);

      cantaddBlock++;
    }

    // Make the dashboard widgets sortable Using jquery UI
  // $('.connectedSortable').sortable({
  //   placeholder: 'sort-highlight',
  //   connectWith: '.connectedSortable',
  //   handle: '.card-header, .nav-tabs',
  //   forcePlaceholderSize: true,
  //   zIndex: 999999
  // })
  // $('.connectedSortable .card-header').css('cursor', 'move')


  $(".sortable1").sortable({
    items: ".s1"
  });

  $(".sortable1").disableSelection();

  $(".sortable1").on("sortstop", function(event, ui) {
    alert('ordenar detener a los padres');
    console.log('sortstop padres Evento =', event, ' interfaz de usuario = ', ui);
    console.log(ui.item);
    if ($(ui.item).hasClass('s1')) {

      console.log($(ui.item).hasClass('s1'));
      console.log($(ui.item));

      alert('es el elemento principal que se acaba de mover. Aquí puede hacer las cosas específicas de los elementos ordenables principales.');
    } 
    /*else {
      console.log('it is child');
    }*/
    //do sort of parents
  });


  //children
  // $(".sortable2").sortable({
  //   items: ".s2"
  // });

  // $(".sortable2").disableSelection();

  // $(".sortable2").on("sortstop", function(event, ui) {
  //   alert('sortstop children');
  //   console.log('sortstop children Event = ', event, '  ui = ', ui);
  //   //do sort of childrens
  // });











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