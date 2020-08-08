window.onload = function() { /*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
    if (document.querySelector('#ocudes')) {
        validarcheck('ocudes'); /* "contenido_a_mostrar" es el nombre que le dimos al DIV */
        document.querySelector('#customSwitch1').checked=false;
    }
    if (document.querySelector('#visuregis')) {
      document.querySelector('#visuregis').style.visibility='hidden';
    }

}
const formulariocategoria = document.querySelector("#formulariocategoria");
const formularioregistrocliente = document.querySelector('#formularioregistrocliente');
const formulariosubcategoria = document.querySelector('#formsubca');
const formularioopcategoria = document.querySelector('#formop');
const formularioregistromarca=document.querySelector('#formularioregistromarca');
const formularioregistrotalla=document.querySelector('#formtalla');
const formularioregistrocolor=document.querySelector('#formcolor');
const formularioproducto = document.querySelector('#regispro');
const formseguriregpro= document.querySelector('#seg_reg');
const formcancelarpro=document.querySelector('#cancelar');
const tabla_producto=document.querySelector('.tb_pro tbody');
const agstockpro=document.querySelector('#agregar_stock');
const notipro=document.querySelector('#notipro');
eventListener();

function eventListener() {

    if (formulariocategoria) {
        formulariocategoria.addEventListener('submit', crearcatergoria);
    }
    if (formularioregistrocliente) {
        formularioregistrocliente.addEventListener('submit', crearusuario);
    }
    if (formulariosubcategoria) {
        formulariosubcategoria.addEventListener('submit', crearsubcategoria);
    }
    if (formularioopcategoria) {
        formularioopcategoria.addEventListener('submit', crearopcatoria);
    }
    if(formularioregistromarca){
        formularioregistromarca.addEventListener('submit', crearmarca);
    }
    if (formularioregistrotalla) {
        formularioregistrotalla.addEventListener('submit', creartalla);
    }
    if(formularioregistrocolor){
      formularioregistrocolor.addEventListener('submit', crearcolor);
    }
    if (formularioproducto) {
        formularioproducto.addEventListener('click', crearproducto);
    }
    if (formseguriregpro) {
        formseguriregpro.addEventListener('click', seguriregpro);
    }
    if (formcancelarpro) {
        formcancelarpro.addEventListener('click', cancelarproducto);
    }
    if (tabla_producto) {
        tabla_producto.addEventListener('click', tab_pro);
    }
    if (agstockpro) {
        agstockpro.addEventListener('click', agregarstockproducto);
    }



}


function crearcatergoria(e) {
    e.preventDefault();
    var nombrecate = document.querySelector('#nombrecat').value;
    var tipocat = document.querySelector('#tipocat').value;

    if (nombrecate === "") {
        alert('No se ingresaron datos');
    } else {

        //creamos lo que enviaremos
        var datos = new FormData();
        datos.append('categoria', nombrecate);
        datos.append('tipocat', tipocat);
        //conexion con ajax
        var xhr = new XMLHttpRequest();
        //abrir conexion
        xhr.open('POST', 'inc/modelos/mod-reg-categoria.php', true);
        //retorno de datos
        xhr.onload = function() {
                if (this.status === 200) {
                    var respuesta = JSON.parse(xhr.responseText);
                    if (respuesta.respuesta === "correcto") {
                        alert('Categoria registrada');
                    }

                }
            }
            //envio de datos
        xhr.send(datos);
    }

}

function crearusuario(e) {
    e.preventDefault();
    var nombre = document.querySelector('#nombrecliente').value;
    var apellidopaterno = document.querySelector('#apellidopaterno').value;
    var apellidomaterno = document.querySelector('#apellidomaterno').value;
    var celular = document.querySelector('#celularcliente').value;
    var email = document.querySelector('#correocliente').value;
    var password = document.querySelector('#passwordcliente').value;
    var crearusuario = document.querySelector('#tipousuario').value;

    if (nombre === "" || apellidopaterno === "" || apellidomaterno === "" || celular === "" || email === "" || password === "") {
        alert('Completar todos los datos');
    } else {
        var datos = new FormData();
        datos.append('nombre', nombre);
        datos.append('apellidopa', apellidopaterno);
        datos.append('apellidoma', apellidomaterno);
        datos.append('celular', celular);
        datos.append('email', email);
        datos.append('password', password);
        datos.append('crearusuario', crearusuario);
        //crear variable ajax
        var xhr = new XMLHttpRequest();
        //guaardar en php
        xhr.open('POST', 'inc/modelos/mod-reg-usuario.php', true);
        //recibir respuesta
        xhr.onload = function() {
            if (this.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);
                console.log(respuesta);
            }

            //enviar datos

        }
        xhr.send(datos);
    }


}

function crearsubcategoria(e) {
    e.preventDefault();
    var nombresub = document.querySelector('#nombresub').value;
    var id_cat = document.querySelector('#id_categoria').value;
    var tiposub = document.querySelector('#tiposub').value;
    if (nombresub === "" || id_cat === "") {
        alert('registrar todos los datos');
    } else {
        var datos = new FormData();
        datos.append('nombre', nombresub);
        datos.append('id', id_cat);
        datos.append('tipo', tiposub);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'inc/modelos/mod-reg-subcat.php', true);

        xhr.onload = function() {
            if (this.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);
                console.log(respuesta);
            }
        }
        xhr.send(datos);
    }
}

function crearopcatoria(e) {
    e.preventDefault();
    var nombreop = document.querySelector('#nombreop').value;
    var id_subcategoria = document.querySelector('#id_subcategoria').value;
    var tipoop = document.querySelector('#tipoop').value;
    if (nombreop === "" || id_subcategoria === "") {
        alert('Completar todos los datos');
    } else {
        var datos = new FormData();
        datos.append('nombre', nombreop);
        datos.append('id', id_subcategoria);
        datos.append('tipo', tipoop);


        var xhrop = new XMLHttpRequest();

        xhrop.open('POST', 'inc/modelos/mod-reg-op.php', true);

        xhrop.onload = function() {
            if (this.status === 200) {
                var respuesta = JSON.parse(xhrop.responseText);
                console.log(respuesta);
            }
        }
        xhrop.send(datos);
    }
}

function crearmarca(e) {
    e.preventDefault();
    var nombremarca=document.querySelector('#nombremarca').value;
    var tipomarca=document.querySelector('#tipomarca').value;

    if (nombremarca === "") {
        alert('No se ingresaron datos');
    }
    else{
        var datos=new FormData();
        datos.append('nombremarca', nombremarca);
        datos.append('tipomarca', tipomarca);

        //crear variable ajax
        var xhr=new XMLHttpRequest();
        //guardar en php
        xhr.open('POST', 'inc/modelos/mod-reg-marca.php', true);
        //recibir respuesta
        xhr.onload = function() {
            if (this.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);
                if (respuesta.respuesta === "correcto") {
                    alert('Marca registrada');
                }
            }
        }
        //enviar datos
        xhr.send(datos);
    }
    }

function creartalla(e) {
    e.preventDefault();
    var nombretalla=document.querySelector('#nombretalla').value;
    var tipotalla=document.querySelector('#tipotalla').value;

    if (nombretalla == '') {
    alert ('No se ingresaron datos');
    }
    else{
    var datos=new FormData();
    datos.append('nombre', nombretalla);
    datos.append('tipo', tipotalla);

    var xhr=new XMLHttpRequest();
    xhr.open('POST', 'inc/modelos/mod-reg-talla.php', true);

    xhr.onload = function() {
    if (this.status === 200) {
    var respuesta = JSON.parse(xhr.responseText);
    if (respuesta.respuesta === "correcto") {
    alert('Talla registrada');
                    }
                }
            }
            xhr.send(datos);
        }

    }

function crearcolor(e) {
      e.preventDefault();
      var nombrecolor=document.querySelector('#nombrecolor').value;
      var tipocolor=document.querySelector('#tipocolor').value;
      if(nombrecolor== ''){
        alert ('No se ingresaron datos');
      }else{
        var dato=new FormData();
        dato.append('nombre', nombrecolor);
        dato.append('tipo', tipocolor);

        var xhr=new XMLHttpRequest();
        xhr.open('POST', 'inc/modelos/mod-reg-color.php', true);

        xhr.onload=function(){
          if(this.status === 200){
            var respuesta = JSON.parse(xhr.responseText);
            if(respuesta.respuesta === 'correcto'){
              alert('Color registrado');
            }
          }
        }
        xhr.send(dato);
      }
    }

function validarcheck(id) {

    if (document.getElementById) { //se obtiene el id
        var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
        el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
    }
}

function crearproducto(e) {
    e.preventDefault();
    var nomproducto = document.querySelector('#nombrepro').value;
    var stock = document.querySelector('#stockpro').value;
    var id_op = document.querySelector('#id_op_categoria').value;
    var id_marca = document.querySelector('#id_marca').value;
    var precio = document.querySelector('#precio').value;
    var talla = document.querySelector('#id_talla').value;
    var id_color = document.querySelector('#id_color').value;
    var img = document.getElementsByName('file')[0].files[0];
    var tipopro = document.querySelector('#tipopro').value;
    console.log(id_marca);
    if (document.querySelector('#ocudes').style.display === "none") {
        if (nomproducto==="" || stock==="" || id_op==="0" || id_marca=="0" || precio==="" || talla==="0" || id_color==="0" || img===undefined) {
          alert('Completar todos los campos');
        }
        else {
          var descu = "";
          var data = new FormData();
          data.append('nombre', nomproducto);
          data.append('stock', stock);
          data.append('id_op', id_op);
          data.append('id_marca', id_marca);
          data.append('precio', precio);
          data.append('id_color', id_color);
          data.append('talla', talla);
          data.append('tipo', tipopro);
          data.append('descuento', descu);
          data.append('img', img);
          var xhr = new XMLHttpRequest();

          xhr.open('POST', 'inc/modelos/mod-reg-pro.php', true);

          xhr.onload = function() {
              if (this.status === 200) {
                  var respuesta = JSON.parse(xhr.responseText);
                  if (respuesta.respuesta==="correcto") {
                    if (confirm("Deseas Registrar el mismo producto?")) {
                      document.querySelector('#nombrepro').disabled=true;
                      document.querySelector('#id_op_categoria').disabled=true;
                      document.querySelector('#id_marca').disabled=true;
                      document.querySelector('#precio').disabled=true;
                      document.querySelector('#customSwitch1').disabled=true;
                      document.querySelector('#codigpro').value=respuesta.codigo_producto;
                      document.querySelector('#oculregis').style.visibility='hidden';
                      document.querySelector('#visuregis').style.visibility='visible';
                      } else {
                        document.querySelector('#nombrepro').value="";
                        document.getElementById('id_op_categoria').options.selectedIndex=0;
                        document.getElementById('id_marca').options.selectedIndex=0;
                        document.querySelector('#precio').value="";
                        document.querySelector('#customSwitch1').value="";
                        document.querySelector('#descuento').value="";
                        document.querySelector('#stockpro').value="";
                        document.getElementById('id_talla').options.selectedIndex=0;
                        document.getElementById('id_color').options.selectedIndex=0;
                        document.getElementsByName('file')[0].files[0]=undefined;
                        location.reload();
                      }
                  }
              }
          }
          xhr.send(data);
        }
    } else {
      var descuento=document.querySelector('#descuento').value;
      if (nomproducto==="" || stock==="" || id_op==="0" || id_marca=="0" || precio==="" || talla==="0" || id_color==="0" || img===undefined || descuento==="") {
        alert('Completar todos los campos');
      }else {

        var datos = new FormData();
        datos.append('nombre', nomproducto);
        datos.append('stock', stock);
        datos.append('id_op', id_op);
        datos.append('id_marca', id_marca);
        datos.append('precio', precio);
        datos.append('id_color', id_color);
        datos.append('talla', talla);
        datos.append('tipo', tipopro);
        datos.append('descuento', descuento);
        datos.append('img', img);

        var xhre = new XMLHttpRequest();

        xhre.open('POST', 'inc/modelos/mod-reg-pro.php', true);

        xhre.onload = function() {
            if (this.status === 200) {
                var respuesta = JSON.parse(xhre.responseText);
                if (respuesta.respuesta==="correcto") {
                  if (confirm("Deseas Registrar el mismo producto?")) {
                    document.querySelector('#nombrepro').disabled=true;
                    document.querySelector('#id_op_categoria').disabled=true;
                    document.querySelector('#id_marca').disabled=true;
                    document.querySelector('#precio').disabled=true;
                    document.querySelector('#customSwitch1').disabled=true;
                    document.querySelector('#descuento').disabled=true;
                    document.querySelector('#codigpro').value=respuesta.codigo_producto;
                    document.querySelector('#oculregis').style.visibility='hidden';
                    document.querySelector('#visuregis').style.visibility='visible';
                    } else {
                      document.querySelector('#nombrepro').value="";
                      document.getElementById('id_op_categoria').options.selectedIndex=0;
                      document.getElementById('id_marca').options.selectedIndex=0;
                      document.querySelector('#precio').value="";
                      document.querySelector('#customSwitch1').value="";
                      document.querySelector('#descuento').value="";
                      document.querySelector('#stockpro').value="";
                      document.getElementById('id_talla').options.selectedIndex=0;
                      document.getElementById('id_color').options.selectedIndex=0;
                      document.getElementsByName('file')[0].files[0]=undefined;
                      location.reload();
                    }
                }
            }
        }
        xhre.send(datos);
      }

    }
}

function seguriregpro(e){
  e.preventDefault();
  var nomproducto = document.querySelector('#nombrepro').value;
  var stock = document.querySelector('#stockpro').value;
  var id_op = document.querySelector('#id_op_categoria').value;
  var id_marca = document.querySelector('#id_marca').value;
  var precio = document.querySelector('#precio').value;
  var talla = document.querySelector('#id_talla').value;
  var id_color = document.querySelector('#id_color').value;
  var img = document.getElementsByName('file')[0].files[0];
  var id_codigo_producto=document.querySelector('#codigpro').value;
  var tipopro = document.querySelector('#tipoproducto').value;

  if (document.querySelector('#ocudes').style.display === "none")
  {
    if (nomproducto==="" || stock==="" || id_op==="0" || id_marca=="0" || precio==="" || talla==="0" || id_color==="0" || img===undefined) {
      alert('Completar todos los campos');
    }
    else {
      var descu = "";
      var data = new FormData();
      data.append('nombre', nomproducto);
      data.append('stock', stock);
      data.append('id_op', id_op);
      data.append('id_marca', id_marca);
      data.append('precio', precio);
      data.append('id_color', id_color);
      data.append('talla', talla);
      data.append('tipo', tipopro);
      data.append('descuento', descu);
      data.append('id_cod_pro', id_codigo_producto);
      data.append('img', img);

      var xhr = new XMLHttpRequest();

      xhr.open('POST', 'inc/modelos/segui-reg-pro.php', true);

      xhr.onload = function() {
          if (this.status === 200) {
              var respuesta = JSON.parse(xhr.responseText);
              if (respuesta.respuesta==="correcto") {
                if (confirm("Deseas Registrar el mismo producto?")) {
                  document.querySelector('#nombrepro').disabled=true;
                  document.querySelector('#id_op_categoria').disabled=true;
                  document.querySelector('#id_marca').disabled=true;
                  document.querySelector('#precio').disabled=true;
                  document.querySelector('#customSwitch1').disabled=true;
                  document.querySelector('#codigpro').value=respuesta.codigo_producto;
                  document.querySelector('#oculregis').style.visibility='hidden';
                  document.querySelector('#visuregis').style.visibility='visible';
                  } else {
                    document.querySelector('#nombrepro').value="";
                    document.getElementById('id_op_categoria').options.selectedIndex=0;
                    document.getElementById('id_marca').options.selectedIndex=0;
                    document.querySelector('#precio').value="";
                    document.querySelector('#customSwitch1').value="";
                    document.querySelector('#descuento').value="";
                    document.querySelector('#stockpro').value="";
                    document.getElementById('id_talla').options.selectedIndex=0;
                    document.getElementById('id_color').options.selectedIndex=0;
                    document.getElementsByName('file')[0].files[0]=undefined;
                    location.reload();
                  }
              }
          }
      }
      xhr.send(data);

    }
  }else {
    var descuento=document.querySelector('#descuento').value;
    if (nomproducto==="" || stock==="" || id_op==="0" || id_marca=="0" || precio==="0" || talla==="0" || id_color==="0" || img===undefined || descuento==="") {
      alert('Completar todos los campos');
    }else {
      var datos = new FormData();
      datos.append('nombre', nomproducto);
      datos.append('stock', stock);
      datos.append('id_op', id_op);
      datos.append('id_marca', id_marca);
      datos.append('precio', precio);
      datos.append('id_color', id_color);
      datos.append('talla', talla);
      datos.append('tipo', tipopro);
      datos.append('descuento', descuento);
      datos.append('id_cod_pro', id_codigo_producto);
      datos.append('img', img);

      var xhr = new XMLHttpRequest();

      xhr.open('POST', 'inc/modelos/segui-reg-pro.php', true);

      xhr.onload = function() {
          if (this.status === 200) {
              var respuesta = JSON.parse(xhr.responseText);
              if (respuesta.respuesta==="correcto") {
                if (confirm("Deseas Registrar el mismo producto?")) {
                  document.querySelector('#nombrepro').disabled=true;
                  document.querySelector('#id_op_categoria').disabled=true;
                  document.querySelector('#id_marca').disabled=true;
                  document.querySelector('#precio').disabled=true;
                  document.querySelector('#customSwitch1').disabled=true;
                  document.querySelector('#codigpro').value=respuesta.codigo_producto;
                  document.querySelector('#oculregis').style.visibility='hidden';
                  document.querySelector('#visuregis').style.visibility='visible';
                  } else {
                    document.querySelector('#nombrepro').value="";
                    document.getElementById('id_op_categoria').options.selectedIndex=0;
                    document.getElementById('id_marca').options.selectedIndex=0;
                    document.querySelector('#precio').value="";
                    document.querySelector('#customSwitch1').value="";
                    document.querySelector('#descuento').value="";
                    document.querySelector('#stockpro').value="";
                    document.getElementById('id_talla').options.selectedIndex=0;
                    document.getElementById('id_color').options.selectedIndex=0;
                    document.getElementsByName('file')[0].files[0]=undefined;
                    location.reload();
                  }
              }
          }
      }
      xhr.send(datos);
    }
  }

}

function cancelarproducto(e){
  e.preventDefault();
  document.querySelector('#nombrepro').value="";
  document.getElementById('id_op_categoria').options.selectedIndex=0;
  document.getElementById('id_marca').options.selectedIndex=0;
  document.querySelector('#precio').value="";
  document.querySelector('#customSwitch1').value="";
  document.querySelector('#descuento').value="";
  document.querySelector('#stockpro').value="";
  document.getElementById('id_talla').options.selectedIndex=0;
  document.getElementById('id_color').options.selectedIndex=0;
  document.getElementsByName('file')[0].files[0]=undefined;
  location.reload();
}

function mostrarNotificacion(mensaje,clase){
  const notificacion = document.createElement('div');
  notificacion.classList.add(clase,'notificacion','sombra');
  notificacion.textContent= mensaje;
  notipro.insertBefore(notificacion,document.querySelector('div #mostre'));
  //ocultar y mostrar la notificacion
  setTimeout(() => {
    notificacion.classList.add('visible');
    setTimeout(() => {
      notificacion.classList.remove('visible');
      setTimeout(() => {
        notificacion.remove();
      }, 500);
    }, 3000);
  }, 100);
}

function tab_pro(e){

  if (e.target.parentElement.classList.contains('ag_stock')) {
   const id_agregar=e.target.parentElement.getAttribute('data-id');
   document.querySelector('#id_producto').value=id_agregar;
   console.log(id_agregar);
   console.log(e.target.parentElement);
  }
  if (e.target.parentElement.classList.contains('ed_pro')) {
    const id_pro=e.target.parentElement.getAttribute('data-id');
    var data=new FormData();
    data.append('id',id_pro);
    var xhr=new XMLHttpRequest();
    xhr.open('POST', 'inc/modelos/mod-edit-pro.php',true);
    xhr.onload=function(){
      if (this.status===200) {
        var respuesta=JSON.parse(xhr.responseText);
        if (respuesta.respuesta==='correcto' && respuesta.des==="0") {
          var url=String(respuesta.url);
          document.ready=document.getElementById('nombre').value=respuesta.nombre;
          document.ready=document.getElementById('sto').value=respuesta.stock;
          document.ready=document.getElementById('id_op').value=String(respuesta.id_ops);
          document.ready=document.getElementById('id_mar').value=String(respuesta.id_mar);
          document.ready=document.getElementById('prec').value=respuesta.prec;
          document.ready=document.getElementById('customSwitch1').checked=false;
          document.ready=document.getElementById('ocudes').style.display='none';
          document.ready=document.getElementById('id_ta').value=String(respuesta.id_ta);
          document.ready=document.getElementById('id_co').value=String(respuesta.id_co);
          document.ready=document.getElementById('inputfile').disabled=true;
          document.ready=document.getElementById('img').src="archivos/"+url;
          document.ready=document.getElementById('id_imagen').value=url;
          document.querySelector('#img_sele').style.display="block";
        }
        if (respuesta.respuesta==='correcto' && respuesta.des!="0") {
          var urls=String(respuesta.url);
          document.ready=document.getElementById('nombre').value=respuesta.nombre;
          document.ready=document.getElementById('sto').value=respuesta.stock;
          document.ready=document.getElementById('id_op').value=String(respuesta.id_ops);
          document.ready=document.getElementById('id_mar').value=String(respuesta.id_mar);
          document.ready=document.getElementById('prec').value=respuesta.prec;
          document.ready=document.getElementById('customSwitch1').checked=true;
          document.ready=document.getElementById('ocudes').style.display='block';
          document.ready=document.getElementById('des').value=respuesta.des;
          document.ready=document.getElementById('id_ta').value=String(respuesta.id_ta);
          document.ready=document.getElementById('id_co').value=String(respuesta.id_co);
          document.ready=document.getElementById('inputfile').disabled=true;
          document.ready=document.getElementById('img').src="archivos/"+urls;
          document.ready=document.getElementById('id_imagen').value=urls;
          document.querySelector('#img_sele').style.display="block";
        }
      }
    }
    xhr.send(data);
  }
}

function agregarstockproducto(e){
  e.preventDefault();
  var stock=document.querySelector('#stock').value;
  var id=document.querySelector('#id_producto').value;
if (stock==="") {
  alert('completar todos los campos');
}else {
  var data=new FormData();
  data.append('stock',stock);
  data.append('id',id);

  var xhr=new XMLHttpRequest();

  xhr.open('POST', 'inc/modelos/agregar-producto.php', true);

  xhr.onload=function(){
    if (this.status===200) {
      var respuesta=JSON.parse(xhr.responseText);
      if (respuesta.respuesta==="correcto") {
        document.querySelector('#stock').value="";
        mostrarNotificacion('Stock agregado',"correcto");
        setTimeout(()=>{
          location.reload();
        },3600);
      }
    }
  }
  xhr.send(data);
}
}

function dele_img(){
    var r=confirm('Estas seguro de eliminar este imagen');
    if (r===true) {
      document.querySelector('#img_sele').style.display="none";
      document.querySelector('#inputfile').disabled=false;
    }else {

    }
}
