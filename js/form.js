const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const restricciones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{4,16}$/, // Letras y espacios, pueden llevar acentos.
    apellidop: /^[a-zA-ZÀ-ÿ\s]{5,16}$/, // Letras y espacios, pueden llevar acentos.
    apellidom: /^[a-zA-ZÀ-ÿ\s]{5,16}$/, // Letras y espacios, pueden llevar acentos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z]+\.[a-zA-Z]+$/,
	telefono: /^\d{10,15}$/, // 10 a 15 numeros.
    edad: /^\d{2}$/, // 2 numeros.
    cp: /^\d{5}$/, // 5 numeros.
    rfc: /^[A-Z]{1,1}[AEIOU]{1,1}[A-Z]{2,2}[0-9]{6,6}[0-9A-Z]{3,3}$/, // 13 numeros
    curp: /^[A-Z]{1,1}[AEIOU]{1,1}[A-Z]{2,2}[0-9]{6,6}[HM]{1,1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[B-DF-HJ-NP-TV-Z]{3,3}[0-9A-Z]{1,1}[0-9]{1,1}$/, // 18 numeros
}

const datos = {
	nombre: false,
    apellidop: false,
    apellidom: false,
	correo: false,
	telefono: false,
    edad: false,
    cp: false,
    rfc: false,
    curp: false,
}

const validarCampo = (restrinccion, input, campo) => {
	if(restrinccion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		datos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		datos[campo] = false;
	}
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "nombre":
			validarCampo(restricciones.nombre, e.target, 'nombre');
		break;
        case "apellidop":
			validarCampo(restricciones.apellidop, e.target, 'apellidop');
		break;
        case "apellidom":
			validarCampo(restricciones.apellidom, e.target, 'apellidom');
		break;
		case "correo":
			validarCampo(restricciones.correo, e.target, 'correo');
		break;
		case "telefono":
			validarCampo(restricciones.telefono, e.target, 'telefono');
		break;
        case "edad":
			validarCampo(restricciones.edad, e.target, 'edad');
		break;
        case "cp":
			validarCampo(restricciones.cp, e.target, 'cp');
		break;
        case "rfc":
			validarCampo(restricciones.rfc, e.target, 'rfc');
		break;
        case "curp":
			validarCampo(restricciones.curp, e.target, 'curp');
		break;
        
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	e.preventDefault();

	const terminos = document.getElementById('terminos');
	if(datos.nombre && datos.apellidop && datos.apellidom && datos.correo && datos.telefono && datos.edad && datos.cp && datos.rfc && datos.curp && terminos.checked ){
		//formulario.reset();

		document.getElementById('formulario__mensaje2').classList.add('formulario__mensaje2-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje2').classList.remove('formulario__mensaje2-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
		formulario.submit();
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
        setTimeout(() => {
			document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
		}, 3000);
    }
});