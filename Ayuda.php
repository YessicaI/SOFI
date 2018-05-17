
<!DOCTYPE html>  
  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head runat="server"> 
    <link rel="shortcut icon" href="img/SOFI.png" type="image/ico" /> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
    <title>Ayuda</title>  
    <link href="estilo1.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="row" align="center">
            <div class="col-md-12">
                <img src="img/titulo.png">
            </div>
        </div>
<center>
<form  class="ayuda" action="#" id="ayuda" runat="server">  
    <div>  
            <ul>  
                <li>  
                    <h2>¿QUÉ TIENES EN MENTE?</h2>  
                    <span class="required_notification">* Datos requeridos</span>  
                </li>
                <li>  
                    <label for="name">Nombre:</label> 
                    <input type="text" name="textfield" maxlength="20" placeholder="Juan" onkeypress="return validar(event)" />  
                </li>
                <li>
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" name="textfield" maxlength="20" placeholder="Perez Perez" onkeypress="return validar(event)" />
                </li>
                <li>  
                    <label for="email">Correo Electronico:</label>  
                    <input type="email" name="email" maxlength="25" placeholder="ejemplo@developer.com" required />  
                    <span class="form_hint">Formato correcto: "usuario@mensajeria.com"</span>  
                </li>
                <li>

                    <label for="ciudad">Ciudad:</label>
                    <select name="conti" onChange="ponPaises(this.form)">
                        <option selected>Elige Ciudad</option>
                        <option>Balancan</option>
                        <option>Cardenas</option>
                        <option>Centro</option>
                        <option>Centla</option>
                    </select>
                    <select name="pais" onChange="ponProvincias(this.form)">
                    <option></option>
                    </select>                
                </li>
                <li>
                    <label for="Telefono">Teléfono: </label>
                    <input type="numpiso" maxlength="20" placeholder="9933360190" required onkeypress="return valida(event)" />
                </li>
                <li>
                    <label for="tipo de Evento">Tipo De Evento:</label>
                    <SELECT NAME="Tipo de Evento">
                        <OPTION>Boda</OPTION>
                        <OPTION>Xv Años</OPTION>
                        <OPTION>Cumpleaños</OPTION>
                        <OPTION>Graduación</OPTION>
                        <OPTION>Aniversario</OPTION>

                    </SELECT>Escoja una opción</TD>
                </li> 
                <li>
                   <label for="Invitados"> Total De Invitados:</label>
                   <input type="numpiso" maxlength="20" placeholder="0000" required onkeypress="return valida(event)" />
                </li>
                <li>
                    <label for="PreMax">Presupesto Maximo:</label>
                    <input type="numpiso" maxlength="20" placeholder="0000" required onkeypress="return valida(event)" />
                </li>
                <li>
                    <label for="Invitados">Presuepuesto Minimo:</label>
                    <input type="numpiso" maxlength="20" placeholder="0000" required onkeypress="return valida(event)" />
                </li>
                <li>
                    <label for="fechaEvento">Fecha Del Evento:</label>
                    <input type="date" name="fecha">
                </li>
                <li>
                    <label for="Tematica">Tematica:</label>
                    <SELECT NAME="Tematica">
                        <OPTION>Tradicional</OPTION>
                        <OPTION>80's</OPTION>
                        <OPTION>Mexicana</OPTION>
                        <OPTION>Disfraces</OPTION>
                        <OPTION>Personaje De Disney</OPTION>
                    </SELECT>Escoja una opción</TD>
                </li>
                <li>
                    <label for="lugar">Lugar:</label>
                    <SELECT NAME="Tipo de Evento">
                        <OPTION>Salon</OPTION>
                        <OPTION>Palapa</OPTION>
                        <OPTION>Jardin</OPTION>
                        <OPTION>Alberca</OPTION>
                        <OPTION>Toldo</OPTION>
                    </SELECT> 
                </li>
                <li>
                    <label for="ubicacion">Ubicacion:</label>
                    <SELECT NAME="ubicacion">
                        <OPTION>Cerca De Mi Domicilio</OPTION>
                        <OPTION>No Importa</OPTION>

                    </SELECT>
                </li>
                  <li>
                    <label for="color favorito">Color Favorito: </label>
                    <input type="color" name="color_control" />
                </li>
                <li>
                  <button type="submit" class="submit"><a href="javascript:history.back(-1);" title="Ir la página anterior">REGRESAR</a></button>
                   <button class="submit" type="submit" value="Pulsame" onclick="pulsar()">ENVIAR</button>
                   <button class="reset" type="reset" value="Pulsame" onclick="Borrar()">BORRAR DATOS</button>
                </li>

            </ul>
        </div>

    </form>
</center>

<script>
        var paises = new Array
        paises[1] = ["Elige Localidad...","Anacleto","Tierra Colorada","Manuel Juarez"]
        paises[2] = ["Elige Localidad...","Luis Donaldo","Doctores","India"]
        paises[3] = ["Elige Localidad...","Indeco","Villa Las Flores","Lagunas","Km 15","Medellin Y Pigua 3a" ,"El Aguila","Gaviotas"]
        paises[3] = ["Elige Localidad...","Indeco","Villa Las Flores","Lagunas","Km 15","Medellin Y Pigua 3a" ,"El Aguila","Gaviotas"]
        function ponPaises(formu)
        {   var elConti = formu.conti.selectedIndex
            formu.pais.length = paises[elConti].length
            for (i=0; i<formu.pais.length; i++)
        {   formu.pais.options[i].text = paises[elConti][i]
        }
}
</script>
<script>
        function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

</script>
<script type="text/javascript">
function validar(e) { // 1
tecla = (document.all) ? e.keyCode : e.which; // 2
if (tecla==8) return true; // 3
patron =/[A-Za-z\s]/; // 4
te = String.fromCharCode(tecla); // 5
return patron.test(te); // 6
}
</script>
</body>
</html>



