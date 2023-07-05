const Newpro_nombreval = document.querySelector("[name=Ad_newpro_name]");
const Newpro_tipoval = document.querySelector("[name=Ad_newpro_tipe]");
const Newpro_cantidadval = document.querySelector("[name=Ad_newpro_cant]");

const Elim_nombreval = document.querySelector("[name=Ad_Elipro_name]");
const Elim_codigoval = document.querySelector("[name=Ad_Elipro_codi]");


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

Newpro_nombreval.addEventListener("blur", (e) => validaEmptyness("Debe ingresar un Nombre", e));
Newpro_tipoval.addEventListener("blur", (e) => validaEmptyness("Debe ingresar un Tipo", e));
Newpro_cantidadval.addEventListener("blur", (e) => validaEmptyness("Debe ingresar una Cantidad", e));

Elim_nombreval.addEventListener("blur", (e) => validaEmptyness("Debe ingresar un Nombre", e));
Elim_codigoval.addEventListener("blur", (e) => validaEmptyness("Debe ingresar un Codigo", e));

