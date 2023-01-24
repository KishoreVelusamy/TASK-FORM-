function addNewFields(type){
    let element = document.createElement("input");
    var label_element=document.createElement("label");
    var h1_element=document.createElement("h3");
    var p_element=document.createElement("p");
    var append_inside=document.getElementById("add_field");


switch(type){
     case "input":{
        element.setAttribute("type",type);
        element.setAttribute("value","type here");
        element.setAttribute("id","new_input");

        append_inside.appendChild(element);
        break;
     }
     case "radio": {
        element.setAttribute("type", type);
        element.setAttribute("id", "new_radio");
  
        label_element.innerHTML = "Radio button.";
        label_element.setAttribute("for","new_radio");
        label_element.setAttribute("type","text"); 
        label_element.setAttribute("id","new_label");
  
        append_inside.appendChild(element);
        append_inside.appendChild(label_element);
        break;
      }
  
      case "button": {
        element.setAttribute("type", type);
        element.setAttribute("value", type);
        element.setAttribute("id", "new_button");
        append_inside.appendChild(element);
        break;
      }
  
      case "h1": {
        
        h1_element.innerHTML = "H1 element";
        append_inside.appendChild(h1_element);
        break;
      }
  
      default:

      //P_Elements
        p_element.innerHTML = "Please select any option.";
        append_inside.appendChild(p_element);
        break;
    }

}