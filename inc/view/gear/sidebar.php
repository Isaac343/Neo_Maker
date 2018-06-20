<script type="text/javascript">
  function allowDrop(ev) {
    ev.preventDefault();
  }

  function drag(ev) {
      ev.dataTransfer.setData("text", ev.target.id);
  }

  function drop(ev,el) {
      //clonación del modulo
      ev.preventDefault();
      var block_id = ev.dataTransfer.getData("text");
     //ev.target.appendChild(document.getElementById(block_id))
      //el.appendChild(document.getElementById(block_id));
      var idelement=ev.target.id;
      var idelement_two = ev.currentTarget.id;
      //alert(idelement_two);
        if (idelement == "container_to_drop") {
            var div = block_id;
            alert(div);
            ev.target.appendChild(document.getElementById(block_id).cloneNode(true));
        }else {
            ev.target.appendChild(document.getElementById(block_id));
        }
      switch (block_id) {
            case "title":
                text_value = prompt("Insert your form's name:");
                code_value ="<h1>"+text_value+"</h1>\n";
                // newId = block_id+'_container';
                // alert(newId);
                document.getElementById(div).innerHTML = text_value;
                break;
            case "field_description":
                text_value = prompt("Insert a field description:");
                code_value =text_value+'<br>\n';
                break;
            case "h2":
                text_value = prompt("Insert your subtitle:");
                code_value ="<h2>"+text_value+"</h2><br>\n";
                break;
            case "h3":
                text_value = prompt("Insert your subtitle:");
                code_value ="<h3>"+text_value+"</h3><br>\n";
                break;
            case "paragraph":
                text_value = prompt("Insert your text for paragraph:");
                code_value ="<p>"+text_value+"</p><br>\n";
                break;
            case "text":
                text_value = prompt("Insert text to display next to text inputs:");
                field_name = prompt("Set text input name:");
                code_value =text_value+'<input type="text" name="'+field_name+'" value=""><br>\n';
                break;
            case "number":
                text_value = prompt("Insert text to display next to numeric inputs:");
                field_name = prompt("Set number input name:");
                code_value = text_value+'<input type="number" name="'+field_name+'" value=""><br>\n';
                break;
            case "password":
                text_value = prompt("Text to show next to passwords:");
                field_name = prompt("Set password input name:");
                code_value = text_value+'<input type="password" name="'+field_name+'" value=""><br>\n';
                break;
            case "date":
                text_value = prompt("Text to display next to date's inputs:")
                field_name = prompt("Inserta el nombre para identificar el input:");
                code_value = text_value+'<input type="date" name="'+field_name+'" value=""><br>\n';
                break;
            case "capcha":
                break;
            case "select":
                text_value = prompt("Insert text to display next to selection:")
                field_name = prompt("Set name for select input:");
                options_quantity = prompt("Cantidad de opciones:");
                var option_temp = '';
                for (var i = 0; i < options_quantity; i++) {
                    option_value = prompt("Set option "+i+" value: ");
                    option_text = prompt("Set option "+i+" text: ");
                    option_to_set = '<option value="'+option_value+'">'+option_text+'</option>\n';
                    option_temp =option_temp+option_to_set;
                }
                code_value = text_value+'<select class="" name="'+text_value+'">\n'+option_temp+'</select>\n';
                break;
            case "checkbox":
                checkbox_quantity = prompt("Number of checkbox");
                var check_temp = '';
                for (var j = 0; j < checkbox_quantity; j++) {
                    text_value = prompt("Insert text to display next to checkbox "+j);
                    check_name = prompt("Set checkbox name");
                    check_value =prompt("Set checkbox value");
                    code_value = '<input type="checkbox" name="'+check_name+' "value="'+check_value+'">'+text_value+'<br>\n';
                    check_temp = check_temp + code_value;
                }
                break;
            case "radio":
                radio_quantity = prompt("Number of checkbox");
                var radio_temp = '';
                for (var k = 0; k < checkbox_quantity; k++) {
                    text_value = prompt("Insert text to display next to checkbox "+k);
                    radio_name = prompt("Set checkbox name");
                    radio_value =prompt("Set checkbox value");
                    code_value = '<input type="radio" name="'+radio_name+' "value="'+radio_value+'">'+text_value+'<br>\n';
                    radio_temp = radio_temp + radio_value;
                }
                break;
            case "send":
                form_name = prompt('Set form name: ');
                code_value = '<button type="submit" form="'+form_name+'" value="Submit">SEND</button>\n';
                break;
          default:
              alert("something else");
              break;
      }
        code_list = code_list + code_value;
      // code_list.push(code_value+"\n");
      // code_list.toString();
      //alert(code_list);
  }

  function drag_inside_container(ev){
      ev.dataTransfer.setData("text", ev.target.id);
      ev.target.appendChild(document.getElementById(block_id));

  }

  function check(ev){
        alert(code_list);

  }
 var code_list = '';
</script>
<div class="container" id="container_drag">
    <ul data-accordion class="bx--accordion">
      <li data-accordion-item class="bx--accordion__item">
        <button class="bx--accordion__heading" aria-expanded="false" aria-controls="pane1">
          <svg class="bx--accordion__arrow" width="8" height="12" viewBox="0 0 8 12" fill-rule="evenodd">
            <path d="M0 10.6L4.7 6 0 1.4 1.4 0l6.1 6-6.1 6z"></path>
          </svg>
          <p class="bx--accordion__title">Text tags</p>
        </button>

        <div id="pane1" class="bx--accordion__content">
          <div id="title" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span  class="bx--tag bx--tag--ibm">Title (H1)</span></div>
          <div id="field_description" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span class="bx--tag bx--tag--beta">Field description</span></div>
          <div id="h2" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span class="bx--tag bx--tag--third-party">h2</span></div>
          <div id="h3" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span class="bx--tag bx--tag--local">h3</span></div>
          <div id="paragraph" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span class="bx--tag bx--tag--dedicated">paragraph</span></div>
        </div>
      </li>
      <li data-accordion-item class="bx--accordion__item">
        <button class="bx--accordion__heading" aria-expanded="false" aria-controls="pane2">
          <svg class="bx--accordion__arrow" width="8" height="12" viewBox="0 0 8 12" fill-rule="evenodd">
            <path d="M0 10.6L4.7 6 0 1.4 1.4 0l6.1 6-6.1 6z"></path>
          </svg>
          <p class="bx--accordion__title">Inputs</p>
        </button>
        <div id="pane2" class="bx--accordion__content">
          <div id="text" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span class="bx--tag bx--tag--dedicated">Text</span></div>
          <div id="number" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span class="bx--tag bx--tag--custom">Number</span></div>
          <div id="password" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span class="bx--tag bx--tag--experimental">Password</span></div>
          <div id="date" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span class="bx--tag bx--tag--community">Date</span></div>
          <div id="capcha" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span class="bx--tag bx--tag--private">capcha</span></div>
        </div>
      </li>
      <li data-accordion-item class="bx--accordion__item">
        <button class="bx--accordion__heading" aria-expanded="false" aria-controls="pane3">
          <svg class="bx--accordion__arrow" width="8" height="12" viewBox="0 0 8 12" fill-rule="evenodd">
            <path d="M0 10.6L4.7 6 0 1.4 1.4 0l6.1 6-6.1 6z"></path>
          </svg>
          <p class="bx--accordion__title">Options</p>
        </button>
        <div id="pane3" class="bx--accordion__content">
          <div id="select" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span class="bx--tag bx--tag--experimental">Select</span></div>
          <div id="checkbox" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span class="bx--tag bx--tag--community">Checkbox</span></div>
          <div id="radio" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span class="bx--tag bx--tag--private">Radio</span></div>

        </div>
      </li>
      <li data-accordion-item class="bx--accordion__item">
        <button class="bx--accordion__heading" aria-expanded="false" aria-controls="pane4">
          <svg class="bx--accordion__arrow" width="8" height="12" viewBox="0 0 8 12" fill-rule="evenodd">
            <path d="M0 10.6L4.7 6 0 1.4 1.4 0l6.1 6-6.1 6z"></path>
          </svg>
          <p class="bx--accordion__title">Buttons</p>
        </button>
        <div id="pane4" class="bx--accordion__content">
          <div id="send" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span  class="bx--tag bx--tag--ibm"><span class="bx--tag bx--tag--ibm">Send</span></div>
        </div>
      </li>
    </ul>
</div>
