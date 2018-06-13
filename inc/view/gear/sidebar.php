<script type="text/javascript">
  function allowDrop(ev) {
    ev.preventDefault();
  }

  function drag(ev) {
      ev.dataTransfer.setData("text", ev.target.id);
  }

  function drop(ev) {
      ev.preventDefault();
      var data = ev.dataTransfer.getData("text");
      ev.target.appendChild(document.getElementById(data).cloneNode(true));
  }

</script>
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
      <div id="text" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span  class="bx--tag bx--tag--ibm"><span class="bx--tag bx--tag--dedicated">Text</span></div>
      <div id="number" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span  class="bx--tag bx--tag--ibm"><span class="bx--tag bx--tag--custom">Number</span></div>
      <div id="password" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span  class="bx--tag bx--tag--ibm"><span class="bx--tag bx--tag--experimental">Password</span></div>
      <div id="date" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span  class="bx--tag bx--tag--ibm"><span class="bx--tag bx--tag--community">Date</span></div>
      <div id="capcha" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span  class="bx--tag bx--tag--ibm"><span class="bx--tag bx--tag--private">capcha</span></div>
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
      <div id="select" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span  class="bx--tag bx--tag--ibm"><span class="bx--tag bx--tag--experimental">Select</span></div>
      <div id="checkbox" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span  class="bx--tag bx--tag--ibm"><span class="bx--tag bx--tag--community">Checkbox</span></div>
      <div id="radio" src="img_logo.gif" draggable="true" ondragstart="drag(event)"><span  class="bx--tag bx--tag--ibm"><span class="bx--tag bx--tag--private">Radio</span></div>

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
