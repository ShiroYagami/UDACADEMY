&lt;html&gt;
&lt;body background=&quot;green&quot;&gt;
&lt;h1&gt;&lt;center&gt; DASES: PRÁCTICA CRUD &lt;/center&gt;&lt;/H1&gt;
&lt;form action=&quot;insertar.php&quot; method=&quot;POST&quot;&gt;&lt;center&gt; &lt;!--Este archivo DEPENDE del
archivo de las consultas que en este caso es insertar .php --&gt;
&lt;fieldset&gt;
&lt;legend&gt;DATOS PERSONALES&lt;/legend&gt;
&lt;INPUT for=&quot;id&quot; name=&quot;id&quot; type=&quot;hidden&quot;&gt;
&lt;LABEL for=&quot;usuario&quot;&gt;Usuario: &lt;/LABEL&gt;
&lt;INPUT type=&quot;text&quot; id=&quot;usuario&quot; name=&quot;usuario&quot; placeholder=&quot;AAA0000&quot;&gt;
&lt;BR&gt;
&lt;LABEL for=&quot;nombre&quot; name=&quot;nombre&quot;&gt;Nombre: &lt;/LABEL&gt;
&lt;INPUT type=&quot;text&quot; id=&quot;nombre&quot; name=&quot;nombre&quot; placeholder=&quot;PRIMER NOMBRE&quot;&gt;
&lt;BR&gt;
&lt;LABEL for=&quot;sexo&quot;&gt;Sexo: &lt;/LABEL&gt;
&lt;INPUT type=&quot;radio&quot; name=&quot;sexo&quot; value=&quot;H&quot;&gt; Hombre&lt;/INPUT&gt;
&lt;INPUT type=&quot;radio&quot; name=&quot;sexo&quot; value=&quot;M&quot;&gt; Mujer&lt;/INPUT&gt;
&lt;BR&gt;
&lt;LABEL for=&quot;email&quot;&gt;Email: &lt;/LABEL&gt;
&lt;INPUT type=&quot;text&quot; id=&quot;email&quot; name=&quot;email&quot; placeholder=&quot;correo@alias.com&quot;&gt;&lt;BR&gt;
&lt;/fieldset&gt;
&lt;fieldset&gt;
&lt;legend&gt;DATOS DE TELEFONÍA&lt;/legend&gt;
&lt;LABEL for=&quot;telefono&quot;&gt;Teléfono: &lt;/LABEL&gt;
&lt;INPUT type=&quot;text&quot; id=&quot;telefono&quot; name=&quot;telefono&quot; placeholder=&quot;000-000-0000&quot;&gt;
&lt;BR&gt;
&lt;LABEL for=&quot;marca&quot;&gt;Marca: &lt;/LABEL&gt;
&lt;select name=&quot;marca&quot; id=&quot;marca&quot;&gt;
&lt;option value=&quot;&quot; selected&gt;Elija una opcion&lt;/option&gt;
&lt;option label=&lt;&quot;nokia&quot;&gt; NOKIA &lt;/option&gt;
&lt;option label=&lt;&quot;zte&quot;&gt; ZTE &lt;/option&gt;
&lt;option label=&lt;&quot;motorola&quot;&gt; MOTOROLA &lt;/option&gt;
&lt;option label=&lt;&quot;xiaomi&quot;&gt; XIAOMI &lt;/option&gt;
&lt;option label=&lt;&quot;sony&quot;&gt; SONY &lt;/option&gt;
&lt;option label=&lt;&quot;samsung&quot;&gt; SAMSUNG &lt;/option&gt;
&lt;option label=&lt;&quot;iphone&quot;&gt; IPHONE &lt;/option&gt;
&lt;option label=&lt;&quot;redmi&quot;&gt; REDMI &lt;/option&gt;
&lt;/select&gt;

&lt;br&gt;
&lt;LABEL for=&quot;compañia&quot;&gt;Compañía: &lt;/LABEL&gt;
&lt;select name=&quot;compañia&quot; id=&quot;compañia&quot;&gt;
&lt;option value=&quot;&quot; selected&gt;Elija una opcion&lt;/option&gt;
&lt;option label=&lt;&quot;movistar&quot;&gt; MOVISTAR &lt;/option&gt;
&lt;option label=&lt;&quot;telcel&quot;&gt; TELCEL &lt;/option&gt;
&lt;option label=&lt;&quot;att&quot;&gt; AT&amp;T &lt;/option&gt;
&lt;option label=&lt;&quot;unefon&quot;&gt; UNEFON &lt;/option&gt;
&lt;/select&gt;
&lt;br&gt;
&lt;LABEL for=&quot;nivel&quot;&gt;Nivel: &lt;/LABEL&gt;
&lt;select name=&quot;nivel&quot; id=&quot;nivel&quot;&gt;
&lt;option value=&quot;&quot; selected&gt;Elija una opcion&lt;/option&gt;
&lt;option label=&lt;&quot;0&quot;&gt; CERO &lt;/option&gt;
&lt;option label=&lt;&quot;1&quot;&gt; UNO &lt;/option&gt;
&lt;option label=&lt;&quot;2&quot;&gt; DOS &lt;/option&gt;
&lt;option label=&lt;&quot;3&quot;&gt; TRES &lt;/option&gt;
&lt;/select&gt;
&lt;br&gt;
&lt;LABEL for=&quot;saldo&quot;&gt;Saldo: &lt;/LABEL&gt;
&lt;INPUT type=&quot;number&quot; id=&quot;saldo&quot; name=&quot;saldo&quot;&gt;&lt;BR&gt;
&lt;LABEL for=&quot;activo&quot;&gt;Activo: &lt;/LABEL&gt;&amp;nbsp;
&lt;select name=&quot;activo&quot; id=&quot;activo&quot;&gt;
&lt;option value=&quot;&quot; selected&gt;Elija una opcion&lt;/option&gt;
&lt;option label=&lt;&quot;0&quot;&gt; Inactivo &lt;/option&gt;
&lt;option label=&lt;&quot;1&quot;&gt; Activo &lt;/option&gt;
&lt;/select&gt;
&lt;br&gt;
&lt;/fieldset&gt;
&lt;br&gt;
&lt;INPUT type=&quot;submit&quot; value=&quot;Enviar&quot;&gt; &lt;INPUT type=&quot;reset&quot;&gt;
&lt;/body&gt;
&lt;/html&gt;