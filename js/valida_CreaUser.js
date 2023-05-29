const nombrefield = document.querySelector("[name=user_nombre]");
const tipofield = document.querySelector("[name=user_tipo]");
const passfield = document.querySelector("[name=user_contra]");
const againfield = document.querySelector("[name=user_again]");

const validaEmptyness = (mensage, e) =>{
    const field = e.target;
    const fieldVal = e.target.value;
    if (fieldVal.trim().length === 0) {
        field.classList.add("invalid");
        field.nextElementSibling.classList.add("falla");
        field.nextElementSibling.innerText = mensage;
        
    }else{
        field.classList.remove("invalid");
        field.nextElementSibling.classList.remove("falla");
        field.nextElementSibling.innerText = "";
    }
}

nombrefield.addEventListener("blur", (e) => validaEmptyness("Debes ingresar un Nombre", e));
tipofield.addEventListener("blur", (e) => validaEmptyness("Debe ingresar un Tipo de Usuario", e));
passfield.addEventListener("blur", (e) => validaEmptyness("Debe ingresar una Contraseña", e));
againfield.addEventListener("blur", (e) => validaEmptyness("Debe ingresar una Contraseña", e));

with(document.fomulo){
    
	onsubmit = function(ev){
		ev.preventDefault();
		pasa_ok = true;
		if(pasa_ok && user_nombre.value==""){
			pasa_ok=false;
		}
		if(pasa_ok && user_tipo.value==""){
			pasa_ok=false;
		}
		if(pasa_ok && user_contra.value==""){
			pasa_ok=false;
		}
		if(pasa_ok && user_again.value==""){
			pasa_ok=false;
		}

		if(pasa_ok && user_contra.value!= user_again.value){
			pasa_ok=false;
			

		}

		if(pasa_ok){
             submit(); 

        }
	}
}