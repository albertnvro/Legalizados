<?php
// Plantilla para generar la página de Política de Privacidad
echo "
<h2>Política de Privacidad</h2>

<p>En {$nombre}, nos comprometemos a garantizar que tu información personal esté protegida y no se utilice de forma indebida.</p>

<h3>Responsable del Tratamiento</h3>
<p><strong>Identidad:</strong> {$nombre}</p>
<p><strong>NIF/CIF:</strong> {$nif}</p>
<p><strong>Dirección:</strong> {$direccion}</p>
<p><strong>Teléfono:</strong> {$telefono}</p>
<p><strong>Correo Electrónico:</strong> {$correo}</p>";

if (!empty($representante_legal)) {
    echo "<p><strong>Representante Legal:</strong> {$representante_legal}</p>";
}

echo "
<h3>Finalidad del Tratamiento de Datos</h3>
<p>En {$nombre}, tratamos la información que nos facilitas con el fin de gestionar las consultas que nos puedas hacer a través de nuestro sitio web, así como para proporcionarte los servicios que nos solicitas. Los datos proporcionados se conservarán mientras se mantenga la relación comercial o durante los años necesarios para cumplir con las obligaciones legales.</p>

<h3>Legitimación para el Tratamiento de Datos</h3>
<p>La base legal para el tratamiento de tus datos es el consentimiento explícito que nos has dado al aceptar esta política de privacidad.</p>

<h3>Destinatarios de los Datos</h3>";

if ($comparticion_datos === 'Sí') {
    echo "<p>Los datos que nos proporcionas pueden ser compartidos con las siguientes empresas, las cuales están encargadas del tratamiento de los datos bajo nuestras instrucciones:</p>
    <ul>
        <li>Empresa 1 (por ejemplo, servicios de hosting)</li>
        <li>Empresa 2 (por ejemplo, servicios de analítica web)</li>
        <!-- Añade aquí cualquier otra empresa con la que compartas datos -->
    </ul>";
} else {
    echo "<p>Los datos que nos proporcionas no serán compartidos con terceros, salvo obligación legal.</p>";
}

echo "
<h3>Derechos de los Usuarios</h3>
<p>Como usuario, tienes derecho a acceder a tus datos personales, a rectificar los datos inexactos o a solicitar su supresión cuando los datos ya no sean necesarios para los fines que fueron recogidos. También tienes derecho a la limitación del tratamiento, a la portabilidad de los datos y a oponerte al tratamiento de tus datos.</p>

<h3>Medidas de Seguridad</h3>
<p>En {$nombre}, hemos adoptado las medidas de seguridad necesarias para garantizar la protección de tus datos de carácter personal y evitar su alteración, pérdida, tratamiento o acceso no autorizado. Estas medidas incluyen la implementación de protocolos de seguridad en la transmisión y almacenamiento de datos.</p>

<h3>Uso de Cookies</h3>";

if ($cookies === 'Sí') {
    echo "<p>Este sitio web utiliza cookies para mejorar la experiencia del usuario y para obtener estadísticas agregadas sobre el tráfico. Puedes gestionar las cookies y obtener más información en nuestra <a href='/politica-de-cookies'>Política de Cookies</a>.</p>";
} else {
    echo "<p>Este sitio web no utiliza cookies.</p>";
}

echo "
<h3>Jurisdicción y Legislación Aplicable</h3>
<p>La relación entre {$nombre} y el usuario se regirá por la normativa española vigente y cualquier controversia se someterá a los Juzgados y Tribunales de la ciudad de {$jurisdiccion}.</p>

<p>Última actualización de esta política: {$actualizacion}</p>";
?>
