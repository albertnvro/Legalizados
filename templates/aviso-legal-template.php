<?php
// Plantilla para generar la página de Aviso Legal
echo "
<h2>Aviso Legal</h2>

<p><strong>Nombre o Razón Social:</strong> {$nombre}</p>
<p><strong>NIF/CIF:</strong> {$nif}</p>
<p><strong>Dirección:</strong> {$direccion}</p>
<p><strong>Teléfono:</strong> {$telefono}</p>
<p><strong>Correo Electrónico:</strong> {$correo}</p>";

if (!empty($registro_mercantil)) {
    echo "<p><strong>Registro Mercantil:</strong> {$registro_mercantil}</p>";
}

if (!empty($representante_legal)) {
    echo "<p><strong>Nombre del Representante Legal:</strong> {$representante_legal}</p>";
}

echo "
<h3>Condiciones Generales de Uso</h3>
<p>El acceso y/o uso de este portal atribuye la condición de USUARIO, que acepta, desde dicho acceso y/o uso, las Condiciones Generales de Uso aquí reflejadas. Las citadas Condiciones serán de aplicación independientemente de las Condiciones Generales de Contratación que en su caso resulten de obligado cumplimiento.</p>

<h3>Propiedad Intelectual e Industrial</h3>
<p>El diseño del portal y sus códigos fuente, así como los logos, marcas y demás signos distintivos que aparecen en el mismo pertenecen a {$nombre} o a terceros, estando protegidos por los correspondientes derechos de propiedad intelectual e industrial.</p>
<p>Cualquier uso no autorizado previamente por {$nombre}, será considerado un incumplimiento grave de los derechos de propiedad intelectual o industrial del autor.</p>

<h3>Exclusión de Garantías y Responsabilidad</h3>
<p>{$nombre} no se hace responsable, en ningún caso, de los daños y perjuicios de cualquier naturaleza que pudieran ocasionar, a título enunciativo: errores u omisiones en los contenidos, falta de disponibilidad del portal o la transmisión de virus o programas maliciosos o lesivos en los contenidos, a pesar de haber adoptado todas las medidas tecnológicas necesarias para evitarlo.</p>";

if ($enlaces_externos === 'Sí') {
    echo "
<h3>Enlaces</h3>
<p>En el caso de que en este sitio web se dispusiesen enlaces o hipervínculos hacía otros sitios de Internet, {$nombre} no ejercerá ningún tipo de control sobre dichos sitios y contenidos. En ningún caso {$nombre} asumirá responsabilidad alguna por los contenidos de algún enlace perteneciente a un sitio web ajeno, ni garantizará la disponibilidad técnica, calidad, fiabilidad, exactitud, amplitud, veracidad, validez y constitucionalidad de cualquier material o información contenida en ninguno de dichos hipervínculos u otros sitios de Internet.</p>";
}

echo "
<h3>Derecho de Exclusión</h3>
<p>{$nombre} se reserva el derecho a denegar o retirar el acceso al portal y/o los servicios ofrecidos sin necesidad de preaviso, a instancia propia o de un tercero, a aquellos usuarios que incumplan las presentes Condiciones Generales de Uso.</p>

<h3>Generalidades</h3>
<p>{$nombre} perseguirá el incumplimiento de las presentes condiciones así como cualquier utilización indebida de su portal ejerciendo todas las acciones civiles y penales que le puedan corresponder en derecho.</p>

<h3>Modificación de las Condiciones y Duración</h3>
<p>{$nombre} podrá modificar en cualquier momento las condiciones aquí determinadas, siendo debidamente publicadas como aquí aparecen. La vigencia de las citadas condiciones irá en función de su exposición y estarán vigentes hasta que sean modificadas por otras debidamente publicadas.</p>

<h3>Legislación Aplicable y Jurisdicción</h3>
<p>La relación entre {$nombre} y el USUARIO se regirá por la normativa española vigente y cualquier controversia se someterá a los juzgados y tribunales de la ciudad de {$jurisdiccion}, salvo que la Ley aplicable disponga otra cosa.</p>

<h3>Contacto</h3>
<p>Para cualquier consulta relacionada con este Aviso Legal, por favor póngase en contacto con nosotros a través de los datos proporcionados anteriormente.</p>

<p>Última actualización de este Aviso Legal: {$actualizacion}</p>";
?>
