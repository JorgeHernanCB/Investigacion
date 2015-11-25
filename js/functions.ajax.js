$(document).ready(function(){
	$.fn.editable.defaults.mode = 'inline';
	
	$('#login_username').focus();
	
	//METODO PARA INICIAR SESIÓN
	$('#login_userbttn').click(function(){
		if ( $('#login_username').val() != "" && $('#login_userpass').val() != "" ){
			$.ajax({
				type: 'POST',
				url: 'js/log.inout.ajax.php',
				data: 'login_username=' + $('#login_username').val() + '&login_userpass=' + $('#login_userpass').val(),
				success:function(msj){
					if ( msj == 1 ){
						location.reload();
					}
					else{
						alert("Lo sentimos, pero los datos son incorrectos: ");
					}
				},
				error:function(){
					alert("Error. por favor inténtelo de nuevo.");
				}
			});
		}
		else{
			alert("Datos vacíos.");
		}
		
		return false;
		
	});
	
	//METODO PARA CERRAR SESIÓN 
	$('#sessionKiller').click(function(){
		window.location.href = "../controlador/logout.php";
	});

	//METODO PARA REGISTRAR CURSOS
	$('#form-registrar-curso').on('submit',function(event){

		//DATOS A ENVIAR PARA REGISTRAR
		var datosEnviados=
		{
			'tipoCurso'  		:  $("#tipo-curso").val(),
			'evidencia'  		:  $("#evidencia-curso").val(),
			'nombrecurso'  		:  $("#nombre-curso").val(),
			'institucion'  		:  $("#institucion").val(),
			'lugar' 			:  $("#lugar").val(),
			'ano' 				:  $("#ano").val(),
			'semestre' 			:  $("#semestre").val(),
			'tipoParticipacion' :  $("#tipo-participacion").val()
		}

		$.ajax({
			type 		: 'POST',
			url			: 'controlador/registrarEstudio.php',
			data 		: 'datosEnviados',
			dataType	: 'json',
			encode 		: true,
			success		: function(reps){console.log(resp)},
			error 		: function(jqXHR,estado,error){console.log(estado)}
		}).done(function(data){
			//ESPECIFICAR COMO ACTUAR CON LOS DATOS RECIBIDOS
			alert('funciono!!!');
		});
		event.preventDefault();

	});
  		

  	$('#btningresarcurso').click(function (){
  		
  		// Se capturan todos los datos a enviar y se empaquetan en el FormData
		var diploma = document.getElementById("evidencia-curso");
		var archivo_diploma = diploma.files;
		var formData = new FormData();
		formData.append('tipo-curso', $("#tipo-curso").val());
		formData.append('nombre-curso', $("#nombre-curso").val());
		formData.append('institucion', $("#institucion").val());
		formData.append('lugar', $("#lugar").val());
		formData.append('ano', $("#ano").val());
		formData.append('semestre', $("#semestre").val());
		formData.append('tipo-participacion', $("#tipo-participacion").val());
		formData.append('evidencia-curso', archivo_diploma[0]);

		$.ajax({
                url: '../controlador/registrarEstudio.php', //Url a donde la enviaremos
                type: 'POST', //Metodo que usaremos
                contentType: false, //Debe estar en false para que pase el objeto sin procesar
                data: formData, //Le pasamos el objeto que creamos con los archivos y los datos
                processData: false, //Debe estar en false para que JQuery no procese los datos a enviar
                cache: false, //Para que el formulario no guarde cache
                dataType: "JSON",
                success: function(data){
                	alert(data.mensaje);
                	location.reload();
                }
		});
  		
  	});




	$(".descargar_archivo").click(function(){
		// Saber el id del elemento en el que se dio click.
		var ruta =  this.id;
		document.location = "../controlador/descargarArchivo.php?r="+ruta;
		
	});





  	/*
  		Métodos de X-editable
  	 */  	
  	var urlEditar= "../controlador/editarInformacionPersonal.php";
  	$('#fechaNacimiento').editable({
        type: 'combodate',
        format: 'YYYY-MM-DD',
        template: 'YYYY - MM - D',
        url: urlEditar,
        combodate: {
                minYear: 1930,
                maxYear: 2015
        },
        pk: 1
    });
    $('#lugarNacimiento').editable({
        type: 'text',
        url: urlEditar,
        pk: 1
    });

    $('#genero').editable({
    	type: 'select',
    	value: "-- Seleccione --",
    	url: urlEditar,
    	pk: 1,
        source: [
              { value: 'Masculino', text: 'Masculino'},
              { value: 'Femenino', text: 'Femenino'}
           ]
    });

    $('#EstadoCivil').editable({
    	type: 'select',
    	value: "-- Seleccione --",
    	url: urlEditar,
    	pk: 1,
        source: [
              { value: 'Casado', text: 'Casado'},
              { value: 'Soltero', text: 'Soltero'},
              { value: 'Divorciado', text: 'Divorciado'},
              { value: 'Viudo', text: 'Viudo'}
           ]
    });

     $('#numeroHijos').editable({
    	type: 'text',
        url: urlEditar,
        pk: 1
    });

     $('#facultad').editable({
    	type: 'text',
        url: urlEditar,
        pk: 1
    });

     $('#programa').editable({
    	type: 'text',
        url: urlEditar,
        pk: 1
    });

     $('#direccion').editable({
    	type: 'text',
        url: urlEditar,
        pk: 1
    });

     $('#tipoInvestigador').editable({
    	type: 'text',
        url: urlEditar,
        pk: 1
    });
     $('#grupoInvestigacion').editable({
    	type: 'text',
        url: urlEditar,
        pk: 1
    });

     $('#lineaInvestigacion').editable({
    	type: 'text',
        url: urlEditar,
        pk: 1
    });

     $('#tarjetaProfesional').editable({
    	type: 'text',
        url: urlEditar,
        pk: 1
    });

});
