<?php

// This file is part of Stack - http://stack.maths.ed.ac.uk//
//
// Stack is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Stack is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Stack.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Language strings for the STACK question type.
 *
 * @package    qtype_stack
 * @copyright  2012 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'STACK';
$string['pluginname_help'] = 'STACK es un sistema de evaluación para matemáticas.';
$string['pluginnameadding'] = 'Agregar pregunta STACK';
$string['pluginnameediting'] = 'Editar pregunta STACK';
$string['pluginnamesummary'] = 'STACK permite usar preguntas de matemáticas en exámenes de Moodle. Utiliza un sistema de álgebra computacional para determinar propiedades matemáticas de las respuestas ingresadas y luego calificarlas.';

$string['privacy:metadata'] = 'El plugin de tipo de pregunta STACK no almacena datos personales.';
$string['cachedef_parsercache'] = 'Expresiones de Maxima parseadas por STACK';

$string['mbstringrequired'] = 'La instalación de la librería MBSTRING es requerida para STACK.';
$string['yamlrecommended'] = 'Se recomienda la instalación de la librería YAML para STACK.';

// Allgemeine Strings.
$string['errors'] = 'Errores';
$string['debuginfo'] = 'Información de depuración';
$string['exceptionmessage'] = '{$a}';
$string['runtimeerror'] = 'Esta pregunta ha causado un error interno inesperado. Por favor, busque asesoramiento, por ejemplo, de un profesor.';
$string['runtimefielderr'] = 'El campo \'{$a->field}\' ha causado el siguiente error: {$a->err}';
$string['version'] = 'Versión';

// Berechtigungsnamen.
$string['stack:usediagnostictools'] = 'Usar las herramientas de diagnóstico de STACK';

// Versionen von STACK.
$string['stackversionedited'] = 'Esta pregunta fue creada con la versión {$a} de STACK.';
$string['stackversionnow'] = 'La versión actual de STACK es {$a}.';
$string['stackversionnone'] = 'Esta pregunta no ha sido editada desde que se introdujo la numeración de variantes en STACK 7.0. Por favor, revise cuidadosamente su pregunta.';
$string['stackversionerror'] = 'Esta pregunta utiliza {$a->pat} en {$a->qfield}, lo cual cambió en la versión {$a->ver} de STACK y ya no es compatible.';
$string['stackversionerroralt'] = 'Una alternativa es {$a}.';
$string['stackversionmulerror'] = 'Esta pregunta tiene una entrada que utiliza la opción \'mul\', que no es compatible después de la versión 7.0 de STACK. Por favor, edite esta pregunta.';
$string['stackversionregexp'] = 'La prueba de respuesta RegExp no es compatible después de la versión 7.5 de STACK. Por favor, use el nuevo SRegExp en su lugar.';
$string['stackfileuseerror'] = 'El {$a} tiene una o más archivos (por ejemplo, imágenes) vinculados internamente, pero parece que ninguno se usa en el texto actual.';

// Strings, die im Bearbeitungsformular verwendet werden.
$string['generalerrors'] = 'Hay errores en su pregunta. Por favor, verifique cuidadosamente a continuación.';
$string['addanothernode'] = 'Agregar otro nodo';
$string['allnodefeedbackmustusethesameformat'] = 'Toda la retroalimentación para todos los nodos en un PRT debe usar el mismo formato de texto.';
$string['answernote'] = 'Nota de respuesta';
$string['answernote_err'] = 'Las notas de respuesta no deben contener el carácter |. Este carácter es insertado por STACK y usado posteriormente para separar automáticamente las notas de respuesta.';
$string['answernote_err2'] = 'Las notas de respuesta no deben contener los caracteres ; o :. Estos caracteres se utilizan para separar las cadenas de resumen de intentos de preguntas en herramientas de informe fuera de línea.';
$string['answernote_help'] = 'Esta es una etiqueta que es importante para fines de reporte. Está destinada a registrar la ruta única a través del árbol de respuesta potencial y el resultado de cada prueba de respuesta. Esto se genera automáticamente, pero se puede cambiar a algo significativo.';
$string['answernote_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Potential_response_trees.md#Answer_note';
$string['answernotedefaultfalse'] = '{$a->prtname}-{$a->nodename}-F';
$string['answernotedefaulttrue'] = '{$a->prtname}-{$a->nodename}-T';
$string['answernoterequired'] = 'La nota de respuesta no debe estar vacía.';
$string['answernoteunique'] = 'Detectadas notas de respuesta duplicadas en este árbol de respuesta potencial.';
$string['assumepositive'] = 'Asumir positivo';
$string['assumepositive_help'] = 'Esta opción establece el valor de las variables assume_pos de Maxima.';
$string['assumepositive_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#Assume_Positive';
$string['assumereal'] = 'Asumir real';
$string['assumereal_help'] = 'Esta opción establece la variable assume_real.';
$string['assumereal_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#Assume_Real';
$string['autosimplify'] = 'Auto-simplificar';
$string['autosimplify_help'] = 'Establece la variable \'simp\' dentro de Maxima como verdadera para esta pregunta. Por ejemplo, variables de pregunta, texto de pregunta, etc. El valor establecido en cualquier árbol de respuesta potencial anula esto para todas las expresiones definidas posteriormente dentro del árbol de respuesta potencial.';
$string['autosimplify_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/CAS/Maxima.md#Vereinfachung';
$string['autosimplifyprt'] = 'Auto-simplificar';
$string['autosimplifyprt_help'] = 'Establece la variable \'simp\' dentro de Maxima para las variables de retroalimentación definidas en este árbol de respuesta potencial. Si las expresiones en las notas PRT se simplifican antes de su uso depende de la prueba de respuesta. Por ejemplo, los argumentos para AlgEquiv se simplifican, mientras que los de EqualComAss no.';
$string['autosimplifyprt_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/CAS/Maxima.md#Vereinfachung';
$string['boxsize'] = 'Tamaño de la caja de entrada';
$string['boxsize_help'] = 'Ancho del campo de formulario HTML.';
$string['boxsize_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Box_Size';
$string['bulktestindexintro_desc'] = 'El <a href=\'{$a->link}\'>script de prueba masiva</a> le permite ejecutar fácilmente todas las pruebas de preguntas STACK en un contexto dado. Esto no solo prueba las preguntas. También es una buena manera de rellenar la caché CAS después de haberla limpiado.';
$string['dependenciesintro_desc'] = 'El <a href=\'{$a->link}\'>verificador de dependencias</a> encuentra preguntas con dependencias como JSXGraph o inclusión de código Maxima externo.';
$string['checkanswertype'] = 'Verificar el tipo de respuesta';
$string['checkanswertype_help'] = 'Si es sí, las respuestas que sean de un \'tipo\' diferente (por ejemplo, expresión, ecuación, matriz, lista, conjunto) serán rechazadas como inválidas.';
$string['checkanswertype_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Check_Type';
$string['complexno'] = 'Significado y visualización de sqrt(-1)';
$string['complexno_help'] = 'Controla el significado y la visualización del símbolo i y sqrt(-1)';
$string['complexno_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#sqrt_minus_one.';
$string['defaultmarkzeroifnoprts'] = 'La calificación por defecto debe ser 0 si esta pregunta no tiene PRTs.';
$string['defaultprtcorrectfeedback'] = 'Respuesta correcta, bien hecho.';
$string['defaultprtincorrectfeedback'] = 'Respuesta incorrecta.';
$string['defaultprtpartiallycorrectfeedback'] = 'Su respuesta es parcialmente correcta.';
$string['symbolicprtcorrectfeedback'] = '<span style=\'font-size: 1.5em; color:green;\'><i class=\'fa fa-check\'></i></span>';
$string['symbolicprtincorrectfeedback'] = '<span style=\'font-size: 1.5em; color:red;\'><i class=\'fa fa-times\'></i></span>';
$string['symbolicprtpartiallycorrectfeedback'] = '<span style=\'font-size: 1.5em; color:orange;\'><i class=\'fa fa-adjust\'></i></span>';
$string['branchfeedback'] = 'Feedback de la rama del nodo';
$string['branchfeedback_help'] = 'Este es CASText que puede depender de todas las variables de la pregunta, elementos de entrada o variables de retroalimentación. Este se evaluará y se mostrará al estudiante si pasa por esta rama.';
$string['inputtest'] = 'Prueba de entrada';
$string['inversetrig'] = 'Funciones trigonométricas inversas';
$string['inversetrig_help'] = 'Controla cómo se muestran las funciones trigonométricas inversas en las salidas de CAS.';
$string['inversetrig_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#inverse_trig';
$string['logicsymbol'] = 'Símbolos lógicos';
$string['logicsymbol_help'] = 'Controla cómo se muestran los símbolos lógicos en las salidas de CAS.';
$string['logicsymbol_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#logicsymbol';
$string['logicsymbollang'] = 'Idioma';
$string['logicsymbolsymbol'] = 'Simbólico';
$string['matrixparens'] = 'Forma por defecto de los paréntesis de matriz';
$string['matrixparens_help'] = 'Controla la forma por defecto de los paréntesis de matriz cuando se muestran en las salidas de CAS.';
$string['matrixparens_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/CAS/Matrix.md#matrixparens';
$string['falsebranch'] = 'Rama Falsa';
$string['falsebranch_help'] = 'Estos campos controlan lo que sucede si la prueba de respuesta falla.\\n### Mod y Puntuación\\nCómo se ajusta la puntuación. = significa establecer la puntuación a un valor particular, +/- significa añadir o restar la puntuación dada al total actual.\\n\\n### Penalización\\nEn modos adaptativos o interactivos, se acumula tanta penalización.\\n\\n### Siguiente\\nSi se debe ir a otro nodo, y si es así, cuál, o si se debe detener.\\n\\n### Nota de respuesta\\nEsta es una etiqueta importante para fines de reporte. Está destinada a registrar la ruta única a través del árbol de respuesta potencial y el resultado de cada prueba de respuesta. Esto se genera automáticamente, pero se puede cambiar a algo significativo.\\n';
$string['feedbackfromprtx'] = '[ Feedback de {$a}. ]';
$string['feedbackvariables'] = 'Variables de retroalimentación';
$string['feedbackvariables_help'] = 'Las variables de retroalimentación le permiten manipular todas las entradas junto con las variables de la pregunta antes de recorrer el árbol de respuesta potencial. Las variables definidas aquí están disponibles en cualquier parte de este árbol.';
$string['feedbackvariables_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Variables.md#Feedback_variables';
$string['fieldshouldnotcontainplaceholder'] = '{$a->field} no debería contener marcadores de posición [[{$a->type}:...]].';
$string['firstnodemusthavelowestnumber'] = 'El primer nodo debe tener el número más bajo.';
$string['fixdollars'] = 'Corregir signos de dólar';
$string['fixdollarslabel'] = 'Reemplazar <code>$...$</code> con <code>\\(...\\)</code>, <code>.$$</code> con <code>\\[...\\]</code> y <code>@...@</code> con <code>{@...@}</code> al guardar.';
$string['fixdollars_help'] = 'Esta opción es útil cuando se copia y pega (o se escribe) TeX con delimitadores <code>$...$</code> y <code>.$$</code>. Estos delimitadores son reemplazados por los delimitadores recomendados durante el proceso de guardado.';
$string['forbiddendoubledollars'] = 'Por favor, use los delimitadores <code>\\(...\\)</code> para matemáticas en línea y <code>\\[...\\]</code> para matemáticas mostradas. <code>$...$</code> y <code>.$$</code> no están permitidos. Hay una opción al final del formulario para corregir esto automáticamente.';
$string['forbidfloat'] = 'Prohibir flotantes';
$string['forbidfloat_help'] = 'Si se establece en Sí, cualquier respuesta del estudiante que contenga un número de punto flotante será rechazada como inválida.';
$string['forbidfloat_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Forbid_Floats';
$string['forbidwords'] = 'Palabras prohibidas ';
$string['forbidwords_help'] = 'Esta es una lista separada por comas de cadenas de texto que están prohibidas en la respuesta de un estudiante.';
$string['forbidwords_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Forbidden_Words';
$string['allowwords'] = 'Palabras permitidas ';
$string['allowwords_help'] = 'Por defecto, los nombres arbitrarios de funciones o variables de más de dos caracteres de longitud no están permitidos. Esta es una lista separada por comas de nombres de funciones o variables que están permitidos en la respuesta de un estudiante.';
$string['allowwords_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Allow_Words';
$string['generalfeedback'] = 'Retroalimentación general';
$string['generalfeedback_help'] = 'La retroalimentación general es CASText. La retroalimentación general, también conocida como \\"solución elaborada\\", se muestra al estudiante después de que ha intentado la pregunta. A diferencia de la retroalimentación que depende de la respuesta que dio el estudiante, a todos los estudiantes se les muestra el mismo texto de retroalimentación general. Puede depender de las variables de la pregunta utilizadas en la variante de la pregunta.';
$string['generalfeedback_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/CASText.md#general_feedback';
$string['showvalidation'] = 'Mostrar la validación';
$string['showvalidation_help'] = 'Muestra cualquier retroalimentación de validación de esta entrada, incluyendo la repetición de su expresión en notación tradicional bidimensional. Los errores de sintaxis siempre se informan.';
$string['showvalidation_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Show_validation';
$string['showvalidationno'] = 'No';
$string['showvalidationyes'] = 'Sí, con lista de variables';
$string['showvalidationyesnovars'] = 'Sí, sin lista de variables';
$string['showvalidationcompact'] = 'Sí, compacto';
$string['inputinvalidparamater'] = 'Parámetro inválido';
$string['mustverifyshowvalidation'] = 'No puede optar por requerir la validación en dos etapas pero no mostrar al estudiante los resultados de la validación después de la primera etapa. Esto pone al estudiante en una situación imposible.';
$string['htmlfragment'] = 'Parece que tiene algunos elementos HTML en su expresión.';
$string['illegalcaschars'] = 'Los caracteres @, $ y \\ no están permitidos en las entradas CAS.';
$string['inputextraoptions'] = 'Opciones extra';
$string['inputextraoptions_help'] = 'Algunos tipos de entrada requieren opciones extra para funcionar. Puede introducirlas aquí. Este valor es una expresión CAS.';
$string['inputextraoptions_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Extra_options';
$string['inputoptionunknown'] = 'Este tipo de entrada no soporta la opción {$a}.';
$string['inputheading'] = 'Entrada: {$a}';
$string['inputnamelength'] = 'Los nombres de entrada no pueden tener más de 18 caracteres. {$a} es demasiado largo.';
$string['inputnameform'] = 'Los nombres de entrada deben consistir únicamente en letras, opcionalmente seguidas de números. {$a} no es válido.';
$string['inputremovedconfirmbelow'] = 'La entrada {$a} ha sido eliminada. Por favor, confirme a continuación.';
$string['inputremovedconfirm'] = 'Confirmo que deseo eliminar esta entrada de esta pregunta.';
$string['inputlanguageproblems'] = 'Hay inconsistencias en las etiquetas de entrada y validación entre idiomas.';
$string['inputs'] = 'Entradas';
$string['inputtype'] = 'Tipo de entrada';
$string['inputtype_help'] = 'Esto determina el tipo de elemento de entrada, por ejemplo, campo de formulario, verdadero/falso, área de texto.';
$string['inputtype_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md';
$string['inputtypealgebraic'] = 'Entrada algebraica';
$string['inputtypeboolean'] = 'Verdadero/Falso';
$string['inputtypedropdown'] = 'Lista desplegable';
$string['inputtypecheckbox'] = 'Casilla de verificación';
$string['inputtyperadio'] = 'Radio';
$string['inputtypesinglechar'] = 'Carácter único';
$string['inputtypetextarea'] = 'Área de texto';
$string['inputtypematrix'] = 'Matriz';
$string['inputtypevarmatrix'] = 'Matriz de tamaño variable';
$string['inputtypenotes'] = 'Notas';
$string['inputtypeunits'] = 'Unidades';
$string['inputtypeequiv'] = 'Razonamiento de equivalencia';
$string['inputtypestring'] = 'Cadena';
$string['inputtypenumerical'] = 'Numérico';
$string['inputtypegeogebra'] = 'GeoGebra';
$string['numericalinputmustnumber'] = 'Esta entrada espera un número.';
$string['numericalinputvarsforbidden'] = 'Esta entrada espera un número y, por lo tanto, no debe contener variables.';
$string['numericalinputmustfloat'] = 'Esta entrada espera un número de punto flotante.';
$string['numericalinputmustint'] = 'Esta entrada espera un número entero explícito.';
$string['numericalinputmustrational'] = 'Esta entrada espera una fracción o número racional.';
$string['numericalinputdp'] = 'Debe dar exactamente {$a} lugares decimales.';
$string['numericalinputsf'] = 'Debe dar exactamente {$a} cifras significativas.';
$string['numericalinputmindp'] = 'Debe dar al menos {$a} lugares decimales.';
$string['numericalinputmaxdp'] = 'No debe dar más de {$a} lugares decimales.';
$string['numericalinputminsf'] = 'Debe dar al menos {$a} cifras significativas.';
$string['numericalinputmaxsf'] = 'No debe dar más de {$a} cifras significativas.';
$string['numericalinputminmaxerr'] = '¡El número mínimo requerido de lugares decimales excede el número máximo permitido de lugares!';
$string['numericalinputminsfmaxdperr'] = 'No especifique requisitos de lugares decimales y cifras significativas en la misma entrada.';
$string['numericalinputoptinterr'] = 'El valor de la opción <code>{$a->opt}</code> debe ser un número entero, pero en realidad es <code>{$a->val}</code>.';
$string['numericalinputoptboolerr'] = 'El valor de la opción <code>{$a->opt}</code> debe ser booleano, pero en realidad es <code>{$a->val}</code>.';
$string['inputvalidatorerr'] = 'El nombre de una función de validación debe ser un identificador Maxima válido en forma de letras a-zA-Z, opcionalmente seguidas de dígitos.';
$string['inputvalidatorerrcouldnot'] = 'La función de validación opcional causó errores internos de Maxima.';
$string['inputvalidatorerrors'] = 'La función de validación opcional devolvió los errores {$a->err}.';
$string['inputopterr'] = 'El valor de la opción <code>{$a->opt}</code> no se puede dar como <code>{$a->val}</code>.';
$string['inputwillberemoved'] = 'Esta entrada ya no se menciona en el texto de la pregunta. Si guarda la pregunta ahora, se perderán los datos de esta entrada. Por favor, confirme que desea hacer esto. Alternativamente, edite el texto de la pregunta para volver a poner los marcadores de posición \'[[input:x]]\' y [[validation:{x}]]';
$string['insertstars'] = 'Insertar estrellas';
$string['insertstars_help'] = 'Esta opción proporciona diferentes formas de insertar estrellas donde la multiplicación está implícita. Por favor, lea la documentación más detallada.';
$string['insertstars_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Insert_Stars';
$string['insertstarsno'] = 'No insertar estrellas';
$string['insertstarsyes'] = 'Insertar estrellas solo para multiplicación implícita';
$string['insertstarsassumesinglechar'] = 'Insertar estrellas asumiendo nombres de variables de un solo carácter';
$string['insertspaces'] = 'Insertar estrellas solo para espacios';
$string['insertstarsspaces'] = 'Insertar estrellas para multiplicación implícita y para espacios';
$string['insertstarsspacessinglechar'] = 'Insertar estrellas asumiendo variables de un solo carácter, implícita y para espacios';
$string['decimals'] = 'Decimales';
$string['decimals_help'] = 'Seleccione el símbolo y las opciones para el separador decimal.';
$string['decimals_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#decimals';
$string['multcross'] = 'Cruz';
$string['multdot'] = 'Punto';
$string['multonlynumbers'] = 'Solo números';
$string['multiplicationsign'] = 'Signo de multiplicación';
$string['multiplicationsign_help'] = 'Controla cómo se muestran los signos de multiplicación.';
$string['multiplicationsign_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#multiplication';
$string['mustverify'] = 'El estudiante debe verificar';
$string['mustverify_help'] = 'Indica si la entrada del estudiante se le devuelve como un proceso forzado de dos pasos antes de que esa entrada esté disponible para el mecanismo de calificación. Los errores de sintaxis siempre se informan.';
$string['mustverify_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Student_must_verify';
$string['namealreadyused'] = 'Ya ha utilizado este nombre.';
$string['newnameforx'] = 'Nuevo nombre para \'{$a}\'';
$string['next'] = 'Siguiente';
$string['nextcannotbeself'] = 'Un nodo no puede vincularse a sí mismo como el siguiente nodo.';
$string['nodehelp'] = 'Nodos del árbol de respuesta potencial';
$string['nodehelp_help'] = '### Prueba de respuesta\\nUna prueba de respuesta se utiliza para comparar dos expresiones y determinar si cumplen ciertos criterios matemáticos.\\nSAns\\nEste es el primer argumento de la función de prueba de respuesta. En pruebas asimétricas, esto se considera la \\\"respuesta del estudiante\\\", aunque puede ser cualquier expresión CAS válida y depender de las variables de la pregunta o las variables de retroalimentación.\\nTAns\\nEste es el segundo argumento de la función de prueba de respuesta. En pruebas asimétricas, esto se considera la \\\"respuesta del profesor\\\", aunque puede ser cualquier expresión CAS válida y depender de las variables de la pregunta o las variables de retroalimentación.\\nOpciones de prueba\\nEste campo permite que las pruebas de respuesta acepten una opción, por ejemplo, una variable o una precisión numérica.\\nSilencioso\\nSi se establece en sí, cualquier retroalimentación generada automáticamente por las pruebas de respuesta se suprimirá y no se mostrará al estudiante. Los campos de retroalimentación en las ramas no se ven afectados por esta opción.';
$string['nodeloopdetected'] = 'Este enlace crea un bucle en este árbol de respuesta potencial.';
$string['nodenotused'] = 'Ningún otro nodo en el árbol de respuesta potencial enlaza a este nodo.';
$string['nodex'] = 'Nodo {$a}';
$string['nodexdelete'] = 'Eliminar nodo {$a}';
$string['nodexfalsefeedback'] = 'Nodo {$a} retroalimentación falsa';
$string['nodextruefeedback'] = 'Nodo {$a} retroalimentación verdadera';
$string['nodexwhenfalse'] = 'Nodo {$a} cuando es falso';
$string['nodexwhentrue'] = 'Nodo {$a} cuando es verdadero';
$string['nonempty'] = 'Esto no debe estar vacío.';
$string['noprtsifnoinputs'] = 'Una pregunta sin entradas no puede tener árbol de respuesta potencial.';
$string['notavalidname'] = 'Nombre no válido';
$string['optionsnotrequired'] = 'Este tipo de entrada no requiere opciones.';
$string['penalty'] = 'Penalización';
$string['penalty_help'] = 'El sistema de penalización deduce este valor del resultado de cada árbol de respuesta potencial por cada intento válido y distinto que no sea completamente correcto.';
$string['penalty_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Feedback.md';
$string['penaltyerror'] = 'La penalización debe ser un valor numérico entre 0 y 1, o una variable (que no se valida).';
$string['penaltyerror2'] = 'La penalización debe estar vacía o ser un valor numérico entre 0 y 1.';
$string['prtcorrectfeedback'] = 'Retroalimentación por defecto para correcto';
$string['prtheading'] = 'Árbol de respuesta potencial: {$a}';
$string['prtmustbesetup'] = 'Este árbol de respuesta potencial debe configurarse antes de guardar la pregunta.';
$string['prtnamelength'] = 'Los nombres de los árboles de respuesta potencial no pueden tener más de 18 caracteres. \'{$a}\' es demasiado largo.';
$string['prtnodesheading'] = 'Nodos del árbol de respuesta potencial ({$a})';
$string['prtincorrectfeedback'] = 'Retroalimentación por defecto para incorrecto';
$string['prtpartiallycorrectfeedback'] = 'Retroalimentación por defecto para parcialmente correcto';
$string['prtremovedconfirmbelow'] = 'El árbol de respuesta potencial \'{$a}\' ha sido eliminado. Por favor, confirme a continuación.';
$string['prtremovedconfirm'] = 'Confirmo que deseo eliminar este árbol de respuesta potencial de esta pregunta.';
$string['prts'] = 'Árboles de respuesta potenciales';
$string['prtwillbecomeactivewhen'] = 'Este árbol de respuesta potencial se volverá activo cuando el estudiante haya respondido: {$a}';
$string['prtruntimeerror'] = '{$a->prt} generó el siguiente error de tiempo de ejecución: {$a->error}';
$string['prtwillberemoved'] = 'Este árbol de respuesta potencial ya no se menciona en el texto de la pregunta o en la retroalimentación específica. Si guarda la pregunta ahora, los datos sobre este árbol de respuesta potencial se perderán. Por favor, confirme que desea hacer esto. Alternativamente, edite el texto de la pregunta o la retroalimentación específica para volver a poner el marcador de posición de retroalimentación.';
$string['prtruntimescore'] = 'La puntuación no se evaluó completamente a un valor numérico (verifique los nombres de las variables).';
$string['prtruntimepenalty'] = 'La penalización no se evaluó completamente a un valor numérico (verifique los nombres de las variables).';
$string['feedbackstyle'] = 'Estilo de retroalimentación del árbol de respuesta potencial';
$string['feedbackstyle_help'] = 'Controla cómo se muestra la retroalimentación del árbol de respuesta potencial.';
$string['feedbackstyle_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Potential_response_trees.md';
$string['feedbackstyle0'] = 'Formativa';
$string['feedbackstyle1'] = 'Estándar';
$string['feedbackstyle2'] = 'Compacto';
$string['feedbackstyle3'] = 'Solo símbolo';
$string['questionnote'] = 'Nota de la pregunta';
$string['questionnote_help'] = 'La nota de la pregunta es CASText. El propósito de una nota de pregunta es distinguir entre variantes aleatorias de una pregunta. Dos variantes de pregunta son las mismas si y solo si las notas de pregunta son las mismas. En análisis posteriores, es muy útil dejar una nota de pregunta (resumen) significativa.';
$string['questiondescription'] = 'Descripción de la pregunta';
$string['questiondescription_help'] = 'La descripción de la pregunta es CASText. El propósito de una descripción de pregunta es proporcionar un lugar significativo para discutir la pregunta. Esta no es accesible para los estudiantes.';
$string['questionnote_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Question_note.md';
$string['questionnote_missing'] = 'La nota de la pregunta está vacía. Por favor, agregue una nota de pregunta (resumen) significativa.';
$string['questionnotempty'] = 'La nota de la pregunta no debe estar vacía si aparece rand() en las variables de la pregunta. La nota de la pregunta se utiliza para distinguir entre diferentes variantes aleatorias de la pregunta.';
$string['questionsimplify'] = 'Simplificar a nivel de pregunta';
$string['questionsimplify_help'] = 'Establece la variable global \'simp\' dentro de Maxima para toda la pregunta.';
$string['questionsimplify_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/CAS/Maxima.md#Vereinfachung';
$string['questionwarnings'] = 'Advertencias de la pregunta';
$string['questionwarnings_help'] = 'Las advertencias de la pregunta son problemas que quizás desee abordar, pero que no son errores obvios.';
$string['questiontext'] = 'Texto de la pregunta';
$string['questiontext_help'] = 'El texto de la pregunta es CASText. Esta es la \\"pregunta\\" que el estudiante realmente ve. Debe colocar elementos de entrada y las cadenas de validación en este campo, y solo en este campo. Por ejemplo, con [[input:ans1]] [[validation:ans1]].';
$string['questiontext_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/CASText.md#question_text';
$string['questiontextnonempty'] = 'El texto de la pregunta no debe estar vacío.';
$string['questiontextmustcontain'] = 'El texto de la pregunta debe contener el token \'{$a}\'.';
$string['questiontextonlycontain'] = 'El texto de la pregunta solo debe contener el token \'{$a}\' una vez.';
$string['questiontextplaceholderswhitespace'] = 'Los marcadores de posición no deben contener espacios en blanco. Parece que este sí: \'{$a}\'.';
$string['questiontextfeedbackonlycontain'] = 'El texto de la pregunta en combinación con la retroalimentación específica solo debe contener el token \'{$a}\' una vez.';
$string['questiontextfeedbacklanguageproblems'] = 'Hay inconsistencias en las etiquetas de retroalimentación entre idiomas.';
$string['questionvalue'] = 'Valor de la pregunta';
$string['questionvaluepostive'] = 'El valor de la pregunta no debe ser negativo.';
$string['questionvariables'] = 'Variables de la pregunta';
$string['questionvariables_help'] = 'Este campo le permite definir y manipular variables CAS, por ejemplo, para crear variantes aleatorias. Estas son accesibles a todas las demás partes de la pregunta.';
$string['questionvariables_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Variables.md#Fragevariablen';
$string['questionvariablevalues'] = 'Valores de las variables de la pregunta';
$string['quiet'] = 'Silencioso';
$string['quiet_help'] = 'Si se establece en Sí, cualquier retroalimentación generada automáticamente por las pruebas de respuesta se suprimirá y no se mostrará al estudiante. Los campos de retroalimentación en las ramas no se ven afectados por esta opción.';
// Das Symbol fa-volume-off ist eigentlich nicht sehr gut.
$string['quiet_icon_true'] = '<span style=\'font-size: 1.25em; color:red;\'><i class=\'fa fa-microphone-slash\' aria-hidden=\'true\'></i></span>';
$string['quiet_icon_false'] = '<span style=\'font-size: 1.25em; color:blue;\'><i class=\'fa fa-commenting-o\'></i></span>';
$string['renamequestionparts'] = 'Renombrar partes de la pregunta';
$string['requiredfield'] = '¡Este campo es requerido!';
$string['requirelowestterms'] = 'Requerir términos más bajos';
$string['requirelowestterms_help'] = 'Si esta opción está configurada en Sí, todos los coeficientes u otros números racionales en una expresión deben escribirse en su mínima expresión. De lo contrario, la respuesta será rechazada como inválida.';
$string['requirelowestterms_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Niedrigste_Terme';
$string['sans'] = 'SAns';
$string['sans_help'] = 'Este es el primer argumento de la función de prueba de respuesta. En pruebas asimétricas, se considera como la \\"respuesta del estudiante\\", aunque puede ser cualquier expresión CAS válida y depender de las variables de la pregunta o las variables de retroalimentación.';
$string['sans_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Answer_Tests/index.md';
$string['sansrequired'] = 'SAns no debe estar vacío.';
$string['stop'] = '[stop]';
$string['score'] = 'Puntuación';
$string['scoreerror'] = 'La puntuación debe ser un valor numérico entre 0 y 1, o una variable (que no se valida).';
$string['scoremode'] = 'Modo';
$string['specificfeedback'] = 'Retroalimentación específica';
$string['specificfeedback_help'] = 'Por defecto, la retroalimentación para cada árbol de respuesta potencial se muestra en este bloque. Se puede mover al texto de la pregunta, en cuyo caso Moodle tiene menos control sobre cuándo se muestra mediante diferentes comportamientos.';
$string['sqrtsign'] = 'Signo de raíz para raíz cuadrada';
$string['sqrtsign_help'] = 'Controla cómo se muestran los signos de raíz.';
$string['sqrtsign_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#wurzel';
$string['strictsyntax'] = 'Sintaxis estricta';
$string['strictsyntax_help'] = 'Esta opción ya no se utiliza y será eliminada.';
$string['strictsyntax_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/';
$string['strlengtherror'] = 'Esta cadena no debe tener más de 255 caracteres.';
$string['syntaxhint'] = 'Sugerencia de sintaxis';
$string['syntaxhint_help'] = 'La sugerencia de sintaxis aparece en el cuadro de respuesta siempre que el estudiante lo deje vacío.';
$string['syntaxhint_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Syntax_Hinweis';
$string['syntaxattribute'] = 'Atributo de sugerencia';
$string['syntaxattribute_help'] = 'La sugerencia de sintaxis aparece como un valor editable o un marcador de posición no editable.';
$string['syntaxattribute_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Syntax_Hinweis';
$string['syntaxattributevalue'] = 'Valor';
$string['syntaxattributeplaceholder'] = 'Marcador de posición';
$string['nosemicolon'] = 'No debe terminar las expresiones Maxima con punto y coma aquí.';
$string['tans'] = 'TAns';
$string['tans_help'] = 'Este es el segundo argumento de la función de prueba de respuesta. En pruebas asimétricas, se considera como la \\"respuesta del profesor\\", aunque puede ser cualquier expresión CAS válida y depender de las variables de la pregunta o las variables de retroalimentación.';
$string['tans_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Answer_Tests/index.md';
$string['tansrequired'] = 'TAns no debe estar vacío.';
$string['teachersanswer'] = 'Respuesta modelo';
$string['teachersanswer_help'] = 'El profesor debe proporcionar una respuesta modelo para cada entrada. Esto debe ser una cadena Maxima válida y puede formarse a partir de las variables de la pregunta.';
$string['teachersanswer_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Musterantwort';
$string['testoptions'] = 'Opciones de prueba';
$string['testoptions_help'] = 'Este campo permite que las pruebas de respuesta acepten una opción, por ejemplo, una variable o una precisión numérica.';
$string['testoptions_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Answer_Tests/index.md';
$string['testoptionsinvalid'] = 'Las opciones de prueba no son válidas: {$a}';
$string['testoptionsrequired'] = 'Las opciones de prueba son requeridas para esta prueba.';
$string['description'] = 'Descripción';
$string['description_err'] = 'La descripción del nodo tiene más de 255 caracteres.';
// Original: "$string['testoptions_help'] = 'This field allows the teacher to record the purpose of the test';" - Seems like a duplicate key/different string content for 'testoptions_help'. Will keep the previous one as it seems more relevant to Answer Test options. This description string likely belongs elsewhere or is a leftover. I will keep it but comment on its potential duplicate key.
// Keeping the description string, assuming it might be used for something else, perhaps node descriptions.
$string['testoptions_help'] = 'Este campo permite al profesor registrar el propósito de la prueba'; // Potential duplicate key 'testoptions_help' - check context if needed.
$string['testoptions_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Potential_response_trees.md';
$string['truebranch'] = 'Rama Verdadera';
$string['truebranch_help'] = 'Estos campos controlan lo que sucede cuando la prueba de respuesta pasa\\n### Mod y Puntos\\nCómo se ajusta la puntuación. = significa establecer los puntos a un valor particular, +/- significa añadir o restar los puntos dados al total actual.\\n\\n### Penalización\\nEn modo adaptativo o interactivo, se acumula tanta penalización.\\n\\n### Siguiente\\nSi se debe ir a otro nodo, y si es así, cuál, o si se debe detener.\\n\\n### Nota de respuesta\\nEsta es una etiqueta importante para fines de reporte. Está diseñada para registrar la ruta única a través del árbol de respuesta potencial, y el resultado de cada prueba de respuesta. Esto se genera automáticamente, pero se puede cambiar a algo significativo.\\n';
$string['variantsselectionseed'] = 'Grupo aleatorio';
$string['variantsselectionseed_help'] = 'Normalmente, esto se puede dejar vacío. Sin embargo, si desea usar la misma semilla aleatoria para dos tareas diferentes en una prueba, escriba la misma cadena en este campo para ambas tareas. Las semillas aleatorias de las dos tareas se sincronizarán.';
$string['verifyquestionandupdate'] = 'Verifique el texto de la tarea y actualice los campos';
$string['youmustconfirm'] = 'Debe confirmar aquí.';

// Von Eingabeelementen verwendete Zeichenketten.
$string['booleangotunrecognisedvalue'] = 'Entrada inválida.';
$string['dropdowngotunrecognisedvalue'] = 'Entrada inválida.';
$string['pleaseananswerallparts'] = 'Por favor, responda todas las partes de la pregunta.';
$string['pleasecheckyourinputs'] = 'Por favor, compruebe que lo que ha introducido se ha interpretado como esperaba.';
$string['singlechargotmorethanone'] = 'Solo puede introducir un único carácter aquí.';

$string['true'] = 'Verdadero';
$string['false'] = 'Falso';
$string['notanswered'] = '(Borrar mi selección)';
$string['ddl_runtime'] = 'La entrada generó el siguiente error de tiempo de ejecución que le impide responder. Por favor, póngase en contacto con su profesor.';
$string['ddl_empty'] = 'No se proporcionaron opciones para este desplegable.';
$string['ddl_nocorrectanswersupplied'] = 'El profesor no proporcionó al menos una respuesta correcta.';
$string['ddl_duplicates'] = 'Se encontraron valores duplicados al generar las opciones de entrada.';
$string['ddl_badanswer'] = 'El campo de respuesta modelo para esta entrada es defectuoso: <code>{$a}</code>.';
$string['ddl_unknown'] = 'STACK recibió <code>{$a}</code>, pero esto no está listado como una opción por el profesor.';

$string['teacheranswershow'] = 'La respuesta \\( {$a->display} \\), que se puede ingresar como {$a->value}, sería correcta.';
$string['teacheranswershow_disp'] = 'La respuesta {$a->display} sería correcta.';
$string['teacheranswershow_mcq'] = 'Una respuesta correcta es: {$a->display}';
$string['teacheranswershownotes'] = 'No se proporciona una respuesta correcta para esta entrada.';
$string['teacheranswerempty'] = 'Esta entrada se puede dejar vacía.';

$string['questiontextlanguages'] = 'Las etiquetas de idioma encontradas en su pregunta son: {$a}.';
$string['languageproblemsexist'] = 'Existen posibles problemas de idioma en su pregunta.';
$string['languageproblemsmissing'] = 'La etiqueta de idioma {$a->lang} falta en los siguientes: {$a->missing}.';
$string['languageproblemsextra'] = 'El campo {$a->field} contiene los siguientes idiomas que no aparecen en el texto de la pregunta: {$a->langs}.';

$string['alttextmissing']    = 'Una o más imágenes parecen tener una etiqueta \'alt\' faltante o vacía en \'{$a->field}\' ({$a->num}).';
$string['todowarning'] = 'Tiene bloques Todo sin resolver en \'{$a->field}\'.';

// Admin-Einstellungen.
$string['settingajaxvalidation'] = 'Validación instantánea';
$string['settingajaxvalidation_desc'] = 'Si esta configuración está habilitada, la entrada actual del estudiante se validará tan pronto como se detenga la escritura. Esto proporciona una mejor experiencia de usuario pero puede aumentar la carga del servidor.';
$string['settingcasdebugging'] = 'Depuración CAS';
$string['settingcasdebugging_desc'] = 'Si se debe guardar información de depuración sobre la conexión CAS.';
$string['settingcasmaximaversion'] = 'Versión de Maxima';
$string['settingcasmaximaversion_desc'] = 'La versión de Maxima utilizada.';
$string['settingcasresultscache'] = 'Caché de resultados CAS';
$string['settingcasresultscache_db'] = 'Caché en la base de datos';
$string['settingcasresultscache_desc'] = 'Esta configuración determina si las llamadas al CAS se almacenan en caché. Esta configuración debe estar activada, a menos que esté desarrollando y modificando el código de Maxima. El estado actual de la caché se muestra en la página de Healthcheck. Si cambia su configuración, por ejemplo, el comando gnuplot, debe borrar la caché antes de poder ver los efectos de estos cambios.';
$string['settingcasresultscache_none'] = 'No almacenar en caché';
$string['settingcastimeout'] = 'Tiempo de espera de conexión CAS';
$string['settingcastimeout_desc'] = 'El tiempo de espera utilizado al intentar conectar con Maxima.';
$string['settingcaspreparse'] = 'Preprocesar todo el código antes de enviarlo a Maxima.';
$string['settingcaspreparse_desc'] = 'Recomendamos que todo el código en variables de pregunta, etc., incluso de profesores de confianza, sea preprocesado para detectar patrones potencialmente dañinos. Esto es particularmente importante si se aceptan preguntas importadas de fuentes conocidas. Sin embargo, es posible que este preprocesamiento agote el tiempo de espera y sea necesario (temporalmente) desactivar esta verificación para salir de un posible bloqueo. Este código aún se está probando y desarrollando, y esta configuración se eliminará en futuras versiones para garantizar que este preprocesamiento siempre se aplique.';
$string['settingcaspreparse_true'] = 'Siempre preprocesar';
$string['settingcaspreparse_false'] = 'No preprocesar (no recomendado)';
$string['settingdefaultinputoptions'] = 'Opciones de entrada por defecto';
$string['settingdefaultinputoptions_desc'] = 'Utilizado al crear una nueva pregunta o añadir una nueva entrada a una pregunta existente.';
$string['settingdefaultquestionoptions'] = 'Opciones de pregunta por defecto';
$string['settingdefaultquestionoptions_desc'] = 'Utilizado al crear una nueva pregunta.';
$string['settingmathsdisplay'] = 'Filtro de matemáticas';
$string['settingmathsdisplay_mathjax'] = 'MathJax';
$string['settingmathsdisplay_tex'] = 'Filtro TeX de Moodle';
$string['settingmathsdisplay_maths'] = 'Filtro antiguo de OU de matemáticas';
$string['settingmathsdisplay_oumaths'] = 'Filtro nuevo de OU de matemáticas';
$string['settingmathsdisplay_desc'] = 'El método para mostrar matemáticas. Si selecciona MathJax, debe seguir las instrucciones en la página Healthcheck para configurarlo. Si selecciona un filtro, debe asegurarse de que ese filtro esté habilitado en la página de configuración \\"Administrar filtros\\".';
$string['settingsmathsdisplayheading'] = 'Opciones de visualización de matemáticas';
$string['settingsmaximasettings'] = 'Conexión a Maxima';
$string['settingparsercacheinputlength'] = 'Caché de expresiones parseadas más largas que';
$string['settingparsercacheinputlength_desc'] = 'El analizador de expresiones se vuelve bastante lento en expresiones largas (por ejemplo, variables de pregunta complicadas). Por lo tanto, almacenamos en caché el resultado del análisis de expresiones más largas que este límite. Idealmente, esta configuración debe establecerse en un valor donde la búsqueda en caché tome aproximadamente el mismo tiempo que el análisis. 50 caracteres es una estimación fundamentada para esto. Si se establece en 0, la caché está deshabilitada.';
$string['settingplatformtype'] = 'Tipo de plataforma';
$string['settingplatformtype_desc'] = 'STACK necesita saber en qué sistema operativo se está ejecutando. La opción \\"Servidor\\" proporciona un mejor rendimiento, pero requiere configurar un servidor adicional. La opción \\"Linux (optimizado)\\" se explica en la página \\"Optimizar Maxima\\" de la documentación.';
$string['settingplatformtypelinux'] = 'Linux';
$string['settingplatformtypelinuxoptimised'] = 'Linux (optimizado)';
$string['settingplatformtypewin'] = 'Windows';
$string['settingplatformtypeserver'] = 'Servidor';
$string['settingplatformtypeserverproxy'] = 'Servidor (a través de proxy)';
$string['settingplatformmaximacommand'] = 'Comando Maxima';
$string['settingplatformmaximacommand_desc'] = 'Si está vacío, STACK hará una suposición fundamentada sobre dónde encontrar Maxima. Si eso falla, esto debe establecerse en la ruta completa del ejecutable maxima o maxima-optimised. Usar solo para desarrollo y depuración. No usar en un sistema de producción: Use optimizado o, mejor, la opción de Maxima Pool.';
$string['settingplatformmaximacommandopt'] = 'Comando Maxima optimizado';
$string['settingplatformmaximacommandopt_desc'] = 'Esto debe establecerse en la ruta completa del ejecutable maxima-optimised. Considere usar el comando timeout en sistemas basados en Linux. Por ejemplo, timeout --kill-after=10s 10s maxima';
$string['settingplatformmaximacommandserver'] = 'URL del Maxima Pool';
$string['settingplatformmaximacommandserver_desc'] = 'Para el tipo de plataforma: Servidor, esto debe establecerse en la URL del servlet del Maxima Pool.';
$string['settingplatformplotcommand'] = 'Comando de trazado';
$string['settingplatformplotcommand_desc'] = 'Normalmente, esto puede dejarse vacío, pero si el trazado de gráficos no funciona, es posible que deba proporcionar aquí la ruta completa al comando gnuplot.';
$string['settingreplacedollars'] = 'Reemplazo de <code>$</code> y <code>.$$</code>';
$string['settingreplacedollars_desc'] = 'Por favor, edite la configuración del plugin STACK <tt>qtype_stack | maximalibraries</tt>. El siguiente paquete no es compatible: {$a}';
$string['settingserveruserpass'] = 'Servidor Nombre de usuario:Contraseña';
$string['settingserveruserpass_desc'] = 'Si está utilizando el tipo de plataforma: Servidor, y si ha configurado su servidor Maxima Pool con autenticación HTTP, entonces puede ingresar aquí el nombre de usuario y la contraseña. Esto es un poco más seguro que ponerlos en la URL. El formato es Nombre de usuario:Contraseña.';
$string['settingusefullinks'] = 'Enlaces útiles';
$string['settingmaximalibraries'] = 'Cargar librerías opcionales de Maxima:';
$string['settingmaximalibraries_desc'] = 'Esta es una lista separada por comas de nombres de librerías de Maxima que se cargan automáticamente en Maxima. Solo se pueden usar nombres de librerías soportados: \\"stats, distrib, descriptive, simplex\\". Si cambia las librerías listadas, necesitará reconstruir la imagen optimizada de Maxima.';
$string['settingmaximalibraries_error'] = 'Por favor, edite la configuración del plugin STACK <tt>qtype_stack | maximalibraries</tt>. El siguiente paquete no es compatible: {$a}';
$string['settingmaximalibraries_failed'] = 'Parece que algunos de los paquetes de Maxima que solicitó no se cargaron.';

// Strings für das Ersetzen von Dollarzeichen-Skript.
$string['replacedollarscount'] = 'Esta categoría contiene {$a} preguntas STACK.';
$string['replacedollarsin'] = 'Delimitadores de matemáticas corregidos en el campo {$a}';
$string['replacedollarsindex'] = 'Contextos con preguntas STACK';
$string['replacedollarsindexintro'] = 'Al hacer clic en uno de los enlaces, será llevado a una página donde podrá verificar y corregir automáticamente las preguntas en busca de delimitadores de matemáticas antiguos. Si tiene demasiadas preguntas (miles) en un contexto, la cantidad de salida probablemente abrumará su navegador web. En este caso, agregue un parámetro preview=0 a la URL e intente nuevamente.';
$string['replacedollarsindextitle'] = 'Reemplazar $s en textos de preguntas';
$string['replacedollarsnoproblems'] = 'No se encontraron delimitadores problemáticos.';
$string['replacedollarstitle'] = 'Reemplazar $s en textos de preguntas en {$a}';
$string['replacedollarserrors'] = 'Las siguientes preguntas generaron errores.';

// Strings, die vom Skript für Massentests von Fragen verwendet werden.
$string['expand'] = 'Expandir';
$string['expandtitle'] = 'Mostrar categorías de preguntas';
$string['unauthorisedbulktest'] = 'No tiene acceso adecuado a las preguntas STACK';
$string['bulktestcontinuefromhere'] = 'Volver a ejecutar o continuar, empezando por aquí';
$string['bulktestindexintro'] = 'Al hacer clic en uno de los enlaces, se ejecutarán todas las pruebas de preguntas en todas las preguntas STACK en ese contexto';
$string['bulktestindextitle'] = 'Ejecutar pruebas de preguntas en masa';
$string['bulktestnotests'] = 'Esta pregunta no tiene pruebas.';
$string['bulktestnogeneralfeedback'] = 'Esta pregunta no tiene retroalimentación general.';
$string['bulktestnodeployedseeds'] = 'Esta pregunta tiene variantes aleatorias pero no semillas desplegadas.';
$string['bulktestrun'] = 'Ejecutar todas las pruebas de preguntas para todas las preguntas en el sistema (lento, solo admin)';
$string['bulktesttitle'] = 'Ejecutar todas las pruebas de preguntas en {$a}';
$string['bulktestallincontext'] = 'Probar todo';
$string['testalltitle'] = 'Probar todas las preguntas en este contexto';
$string['testallincategory'] = 'Probar todas las preguntas en esta categoría';
$string['overallresult'] = 'Resultado general';
$string['seedx'] = 'Semilla {$a}';
$string['testpassesandfails'] = '{$a->passes} aciertos y {$a->fails} fallos.';

// Strings, die vom Skript für Frage-Test verwendet werden.
$string['addanothertestcase'] = 'Añadir otro caso de prueba...';
$string['addatestcase'] = 'Añadir un caso de prueba...';
$string['addingatestcase'] = 'Añadiendo caso de prueba a la pregunta {$a}';
$string['alreadydeployed'] = 'Una variante que coincide con esta nota de pregunta ya está desplegada.';
$string['completetestcase'] = 'Complete el resto del formulario para crear un caso de prueba exitoso';
$string['teacheranswercase'] = 'Usar respuestas del profesor como caso de prueba';
$string['createtestcase'] = 'Crear caso de prueba';
$string['currentlyselectedvariant'] = 'Esta es la variante mostrada a continuación';
$string['deletetestcase'] = 'Eliminar caso de prueba {$a->no} para la pregunta {$a->question}';
$string['deletetestcaseareyousure'] = '¿Está seguro de que desea eliminar el caso de prueba {$a->no} para la pregunta {$a->question}?';
$string['deletethistestcase'] = 'Eliminar este caso de prueba.';
$string['deploy'] = 'Desplegar variante única';
$string['deployedprogress'] = 'Se están desplegando variantes';
$string['deployedvariants'] = 'Variantes desplegadas';
$string['deployedvariantsn'] = 'Variantes desplegadas ({$a})';
$string['deploymanybtn'] = 'Número de variantes a desplegar:';
$string['deploymanyerror'] = 'Error en la entrada del usuario: No se pueden desplegar \\"{$a->err}\\" variantes.';
$string['deploysystematicbtn'] = 'Desplegar semillas de 1 a: ';
$string['deployduplicateerror'] = 'Se detectaron notas de pregunta duplicadas en las variantes desplegadas. Recomendamos encarecidamente desplegar cada nota de pregunta solo una vez, ya que de lo contrario tendrá dificultades para recopilar estadísticas significativas al agrupar por variante. Por favor, considere eliminar algunas variantes con notas duplicadas.';
$string['deploytoomanyerror'] = 'STACK intenta desplegar un máximo de 100 nuevas variantes en una solicitud. No se desplegaron nuevas variantes.';
$string['deploymanynonew'] = 'Se generaron demasiadas notas de pregunta existentes repetidas.';
$string['deploymanynotes'] = 'Intentando desplegar automáticamente una cantidad de variantes. STACK se rinde si hay 10 intentos fallidos de generar una nueva nota de pregunta, o si una prueba de pregunta falla.';
$string['deploymanysuccess'] = 'Número de nuevas variantes creadas, probadas y desplegadas con éxito: {$a->no}.';
$string['deployoutoftime'] = 'Tiempo agotado al usar aproximadamente {$a->time} segundos. Por favor, inténtelo de nuevo para desplegar más.';
$string['deployremoveall'] = 'Retirar todas las variantes';
$string['deploytestall'] = 'Ejecutar todas las pruebas para todas las variantes desplegadas (lento)';
$string['deployfromlist'] = 'Listar enteros positivos, uno en cada línea.';
$string['deployfromlistexisting'] = 'Semillas actuales:';
$string['deployfromlistbtn'] = 'Eliminar variantes y volver a desplegar desde la lista';
$string['deployfromlisterror'] = 'Se detectó un error en su lista de enteros, por lo que no se realizaron cambios en la lista de variantes desplegadas.';
$string['editingtestcase'] = 'Editando caso de prueba {$a->no} para la pregunta {$a->question}';
$string['editthistestcase'] = 'Editar este caso de prueba.';
$string['confirmthistestcase'] = 'Confirmar el comportamiento actual de la prueba.';
$string['expectedanswernote'] = 'Nota de respuesta esperada';
$string['expectedoutcomes'] = 'Resultados esperados del PRT: [entradas usadas]';
$string['expectedpenalty'] = 'Penalización esperada';
$string['expectedscore'] = 'Puntuación esperada';
$string['inputdisplayed'] = 'Mostrado como';
$string['inputentered'] = 'Valor ingresado';
$string['inputexpression'] = 'Entrada de prueba';
$string['inputname'] = 'Nombre de entrada';
$string['inputstatus'] = 'Estado';
$string['inputstatusname'] = 'Vacío';
$string['inputstatusnameinvalid'] = 'Inválido';
$string['inputstatusnamevalid'] = 'Válido';
$string['inputstatusnamescore'] = 'Puntuación';
$string['notestcasesyet'] = 'Aún no se han añadido casos de prueba.';
$string['penalty'] = 'Penalización';
$string['prtname'] = 'Nombre del PRT';
$string['questiondoesnotuserandomisation'] = 'Esta pregunta no usa aleatorización.';
$string['questionnotdeployedyet'] = 'Aún no se han desplegado variantes de esta pregunta.';
$string['questionpreview'] = 'Vista previa de la pregunta';
$string['questiontestempty'] = '¡Las pruebas de pregunta vacías no están permitidas!';
$string['questiontests'] = 'Pruebas de pregunta';
$string['questiontestsfor'] = 'Pruebas de pregunta para Semilla {$a}';
$string['questiontestspass'] = 'Todas las pruebas de pregunta pasaron.';
$string['questiontestsdefault'] = '(Por defecto)';
$string['runquestiontests'] = 'Panel de preguntas STACK';
$string['runquestiontests_help'] = 'El panel ejecuta pruebas de pregunta que verifican el comportamiento esperado de las preguntas, expresado por el profesor, y las variantes desplegadas aseguran que las versiones aleatorias que ve un estudiante se prueben previamente contra las pruebas de pregunta. Estas son herramientas para ayudarlo a crear y probar preguntas confiables, y deben usarse en todos los casos donde una pregunta será utilizada por estudiantes. El panel también tiene muchas otras características específicas de STACK.';
$string['runquestiontests_alert'] = 'La pregunta no tiene pruebas o variantes.';
$string['runquestiontests_auto'] = 'Añade automáticamente un caso de prueba que asume que la entrada del profesor recibe la puntuación completa. Por favor, revise cuidadosamente la nota de respuesta.';
$string['runquestiontests_autoprompt'] = 'Añadir caso de prueba asumiendo que la entrada del profesor recibe la puntuación completa.';
$string['autotestcase'] = 'Caso de prueba asumiendo que la entrada del profesor recibe la puntuación completa.';
$string['showingundeployedvariant'] = 'Mostrando variante no desplegada: {$a}';
$string['switchtovariant'] = 'Cambiar a variante: ';
$string['testcasexresult'] = 'Caso de prueba {$a->no} {$a->result}';
$string['testingquestion'] = 'Probando pregunta {$a}';
$string['testingquestionvariants'] = 'Preparando variantes de pregunta';
$string['testinputs'] = 'Entradas de prueba';
$string['testinputsimpwarning'] = 'Tenga en cuenta que las entradas de prueba siempre son <em>no simplificadas</em>, independientemente de la configuración de opción de pregunta o PRT. Por favor, use <tt>ev(...,simp)</tt> para simplificar partes o la totalidad de las expresiones de entrada de prueba.';
$string['testthisvariant'] = 'Cambiar a esta variante y probar';
$string['tidyquestionx'] = 'Reorganizar partes de la pregunta {$a}';
$string['undeploy'] = 'Retirar despliegue';
$string['variant'] = 'Variante';

$string['editquestioninthequestionbank'] = '<i class=\'fa fa-pencil\'></i> Editar pregunta';
$string['seethisquestioninthequestionbank'] = '<i class=\'fa fa-list-alt\'></i> Ver en el banco de preguntas';
$string['exportthisquestion'] = '<i class=\'fa fa-download\'></i> Exportar como Moodle XML';
$string['exportthisquestion_help'] = 'Esto creará un archivo de exportación Moodle XML que contiene solo esta pregunta. Un ejemplo de cuándo esto es útil es si cree que esta pregunta demuestra un error en STACK que desea informar a los desarrolladores.';
$string['tidyquestion'] = '<i class=\'fa fa-sort-amount-asc\'></i> Ordenar entradas y PRTs';
$string['sendgeneralfeedback'] = '<i class=\'fa fa-file-text\'></i> Enviar retroalimentación general al CAS';

$string['basicquestionreport'] = '<i class=\'fa fa-bar-chart\'></i> Analizar respuestas';
$string['basicquestionreport_help'] = 'Crea un informe muy simple de los intentos en esta pregunta en el servidor. Útil para decidir qué prueba PRT podría añadirse para mejorar la retroalimentación a la luz de lo que el estudiante realmente está haciendo. (La mayoría de las preguntas solo se usan en un lugar)';
$string['basicreportraw'] = 'Datos brutos';
$string['basicreportnotes'] = 'Frecuencia de notas de respuesta, por cada PRT, independientemente de la variante utilizada';
$string['basicreportnotessplit'] = 'Frecuencia de notas de respuesta, por cada PRT, divididas por |, independientemente de la variante utilizada';
$string['basicreportvariants'] = 'Datos brutos y notas de respuesta PRT por variante';
$string['basicreportinputsummary'] = 'Datos brutos, independientemente de la variante utilizada';

// Spezifische Strings für Equiv-Eingaben.
$string['equivnocomments'] = 'No se le permite usar comentarios en este tipo de entrada. Por favor, simplemente trabaje línea por línea.';
$string['equivfirstline'] = '¡Ha utilizado la primera línea incorrecta en su razonamiento!';

// Unterstützungsskripte: CAS-Chat, Gesundheitsprüfung usw.
$string['all'] = 'Todos';
$string['chat'] = 'Enviar al CAS';
$string['savechat'] = 'Guardar de vuelta en la pregunta';
$string['savechatmsg'] = 'Las variables de la pregunta y la retroalimentación general se guardaron de nuevo en la pregunta.';
$string['castext'] = 'Texto CAS';
$string['chat_desc'] = 'El <a href=\'{$a->link}\'>script de chat CAS</a> le permite probar la conexión al CAS y probar la sintaxis de Maxima.';
$string['chatintro'] = 'Esta página permite evaluar directamente el texto CAS. Es un script simple que es un ejemplo mínimo útil y proporciona una forma práctica de verificar que el CAS funciona y probar diferentes entradas. El primer campo de texto le permite definir variables, el segundo es para el propio texto CAS.';
$string['chattitle'] = 'Probando la conexión al CAS';
$string['clearedthecache'] = 'La caché CAS ha sido vaciada.';
$string['clearingcachefiles'] = 'Vaciando archivos de trazado STACK en caché {$a->done}/{$a->total}';
$string['clearingthecache'] = 'Vaciando la caché';
$string['clearthecache'] = 'Vaciar la caché';
$string['healthcheck'] = 'Verificación de estado de STACK';
$string['healthcheck_desc'] = 'El <a href=\'{$a->link}\'>script de Healthcheck</a> le ayuda a verificar que todos los aspectos de STACK funcionan correctamente.';
$string['healthcheckcache_db'] = 'Resultados CAS se almacenan en caché en la base de datos.';
$string['healthcheckcache_none'] = 'Resultados CAS no se almacenan en caché.';
$string['healthcheckcache_otherdb'] = 'Resultados CAS se almacenan en caché en una base de datos diferente.';
$string['healthcheckcachestatus'] = 'La caché contiene actualmente {$a} entradas.';
$string['healthcheckconfigintro1'] = 'Maxima se encontró en el siguiente directorio y se está utilizando:';
$string['healthcheckconnect'] = 'Intentando conectar con el CAS';
$string['healthcheckconnectintro'] = 'Estamos intentando evaluar el siguiente texto CAS:';
$string['healthcheckfilters'] = 'Por favor, asegúrese de que el {$a->filter} esté habilitado en la página <a href=\'{$a->url}\'>Administrar filtros</a>.';
$string['healthchecknombstring'] = 'STACK v4.3 y versiones posteriores requieren el módulo PHP mbstring, que falta. Por favor, lea los documentos de instalación.';
$string['healthchecklatex'] = 'Verifique que LaTeX se está convirtiendo correctamente';
$string['healthchecklatexintro'] = 'STACK genera dinámicamente LaTeX y permite a los profesores escribir LaTeX en las preguntas. Se asume que LaTeX se convierte mediante un filtro de Moodle. Aquí hay ejemplos de expresiones mostradas y en línea en LaTeX que deberían aparecer correctamente en su navegador. Los problemas aquí indican configuraciones incorrectas del filtro de Moodle, no errores en STACK mismo.';
$string['healthchecklatexmathjax'] = 'STACK depende del filtro MathJax de Moodle. Una alternativa es agregar código JavaScript al HTML adicional de Moodle. Puede encontrar más detalles en los documentos de instalación de STACK.';
$string['healthcheckmathsdisplaymethod'] = 'Método utilizado para mostrar matemáticas: {$a}.';
$string['healthcheckmaximabat'] = 'Falta el archivo maxima.bat';
$string['healthcheckmaximabatinfo'] = 'Este script intentó copiar automáticamente el archivo maxima.bat de \\"C:\\Program Files\\Maxima-1.xx.y\\bin\\" a \\"{$a}\\stack\\". Sin embargo, eso parece no haber funcionado. Por favor, copie este archivo manualmente.';
$string['healthcheckproxysettings'] = '<strong>Advertencia:</strong> Moodle está configurado para usar un servidor proxy, pero las llamadas a Maxima lo eluden. Cambie la plataforma de \\"Servidor\\" a \\"Servidor (a través de Proxy)\\" para enrutar las llamadas a través del servidor proxy, o agregue el servidor Maxima a $CFG->proxybypass para hacer la elusión explícita. STACK también debería funcionar si no realiza ningún cambio, pero las configuraciones de proxy de Moodle se aplicarán en una versión posterior.';
$string['healthchecksamplecas'] = 'La derivada de {@ x^4/(1+x^4) @} es \\[ \\frac{d}{dx} \\frac{x^4}{1+x^4} = {@ diff(x^4/(1+x^4),x) @}. \\]';
$string['healthcheckconnectunicode'] = 'Intentando enviar unicode al CAS';
$string['healthchecksamplecasunicode'] = 'Confirme si unicode es compatible: \\(\\forall\\) debería mostrarse {@unicode(8704)@}.';
$string['healthchecksampledisplaytex'] = '\\[\\sum_{n=1}^\\infty \\frac{1}{n^2} = \\frac{\\pi^2}{6}.\\]';
$string['healthchecksampleinlinetex'] = '\\(\\sum_{n=1}^\\infty \\frac{1}{n^2} = \\frac{\\pi^2}{6}\\).';
$string['healthcheckmaximalocal'] = 'Contenido del archivo maximalocal';
$string['healthcheckplots'] = 'Trazado de gráficos';
$string['healthcheckplotsintro'] = 'Deberían haber dos gráficos diferentes. Si se ven dos gráficos idénticos, esto es un error al nombrar los archivos de gráficos. Si no se devuelve ningún error, pero no se muestra un gráfico, entonces puede ser útil alguna de las siguientes opciones. (i) compruebe los permisos de lectura en los dos directorios temporales. (ii) cambie las opciones utilizadas por GNUPlot para crear el gráfico. Actualmente no hay una interfaz web para estas opciones.';
$string['healthchecksampleplots'] = 'Dos ejemplos de gráficos a continuación. {@plot([x^4/(1+x^4),diff(x^4/(1+x^4),x)],[x,-3,3])@} {@plot([sin(x),x,x^2,x^3],[x,-3,3],[y,-3,3],grid2d)@} Un tercer gráfico, más pequeño, debería mostrarse a continuación con ejes tradicionales. {@plot([x,2*x^2-1,x*(4*x^2-3),8*x^4-8*x^2+1,x*(16*x^4-20*x^2+5),(2*x^2-1)*(16*x^4-16*x^2+1)],[x,-1,1],[y,-1.2,1.2],[box, false],[yx_ratio, 1],[axes, solid],[xtics, -3, 1, 3],[ytics, -3, 1, 3],[size,250,250])@}';
$string['healthchecksstackmaximaversion'] = 'Versión de Maxima';
$string['healthchecksstackmaximaversionfixoptimised'] = 'Por favor, <a href=\'{$a->url}\'>recompile su ejecutable Maxima optimizado</a>.';
$string['healthchecksstackmaximaversionfixserver'] = 'Por favor, recompile el código Maxima en su servidor MaximaPool.';
$string['healthchecksstackmaximaversionfixunknown'] = 'No está muy claro cómo sucedió eso. Deberá depurar este problema usted mismo. Comience limpiando la caché CAS.';
$string['healthchecksstackmaximanotupdated'] = 'Parece que STACK no se ha actualizado correctamente. Por favor, visite la página <a href=\'{$a}\'>Administración del sistema -> Notificaciones</a>.';
$string['healthchecksstackmaximatooold'] = '¡Tan antigua que la versión es desconocida!';
$string['healthchecksstackmaximaversionmismatch'] = 'La versión de las librerías STACK-Maxima que se está utilizando ({$a->usedversion}) no coincide con la esperada ({$a->expectedversion}) por esta versión del tipo de pregunta STACK. {$a->fix}';
$string['healthchecksstackmaximaversionok'] = 'Versión correcta y esperada de la librería STACK-Maxima en uso ({$a->usedversion}).';
$string['healthchecksstacklibrariesworking'] = 'Librerías opcionales de Maxima';
$string['healthchecksstacklibrariesworkingok'] = 'Las librerías opcionales de Maxima parecen cargarse correctamente.';
$string['healthchecksstacklibrariesworkingsession'] = 'La comprobación de las librerías opcionales de Maxima arrojó el siguiente error: {$a->err}';
$string['healthchecksstacklibrariesworkingfailed'] = 'La(s) siguiente(s) librería(s) opcional(es) de Maxima parecen no cargarse: {$a->err}. Intente recrear su imagen de Maxima.';
$string['healthuncached'] = 'Llamada CAS sin caché';
$string['healthuncachedintro'] = 'Esta sección siempre envía una llamada genuina al CAS, independientemente de la configuración de caché actual. Esto es necesario para asegurar que la conexión al CAS esté funcionando realmente.';
$string['healthuncachedstack_CAS_ok'] = 'CAS devolvió datos como se esperaba. Tiene una conexión activa al CAS.';
$string['healthuncachedstack_CAS_not'] = 'CAS devolvió algunos datos como se esperaba, pero hubo errores.';
$string['healthuncachedstack_CAS_version'] = 'Versión esperada de Maxima: \\"{$a->expected}\\". Versión actual de Maxima: {$a->actual}.';
$string['healthuncachedstack_CAS_versionnotchecked'] = 'Ha elegido la versión \\"por defecto\\" de Maxima, por lo que no se está realizando la verificación de la versión de Maxima. Su conexión directa en realidad está utilizando la versión {$a->actual}.';
$string['healthuncachedstack_CAS_calculation'] = 'Cálculo CAS esperado: {$a->expected}. Cálculo CAS actual: {$a->actual}.';
$string['healthuncachedstack_CAS_trigsimp'] = 'La función \\"trigsimp\\" no está funcionando. ¿Quizás necesita instalar también el paquete maxima-share en su sistema?';
$string['healthunabletolistavail'] = 'El tipo de plataforma no está configurado actualmente en \\"linux\\", por lo que no se pueden listar las versiones disponibles de Maxima.';
$string['healthautomaxopt'] = 'Crear automáticamente una imagen optimizada de Maxima';
$string['healthautomaxoptintro'] = 'Para obtener el mejor rendimiento, necesitamos optimizar maxima en una máquina linux. Use la página \\"healthcheck\\" del plugin y consulte la documentación sobre este tema.';
$string['healthautomaxopt_succeeded'] = 'Crear imagen optimizada de Maxima EXITOSO';
$string['healthautomaxopt_failed'] = 'Crear imagen optimizada de Maxima FALLÓ: [{$a->errmsg}]';
$string['healthautomaxopt_ok'] = 'Imagen de Maxima creada en: <tt>{$a->command}</tt>';
$string['healthautomaxopt_notok'] = 'Imagen de Maxima no creada automáticamente.';
$string['healthautomaxopt_nolisp'] = 'No se pudo determinar la versión de LISP, por lo que la imagen de Maxima no se creó automáticamente.';
$string['healthautomaxopt_nolisprun'] = 'No se pudo localizar automáticamente lisp.run. Intente \\"sudo updatedb\\" desde la línea de comandos y consulte la documentación de optimización.';
$string['healthcheckcreateimage'] = 'Crear imagen de Maxima';
$string['healthcheckmaximaavailable'] = 'Versiones de Maxima disponibles en este servidor';
$string['healthcheckpass'] = 'La verificación de estado pasó sin detectar ningún problema. Sin embargo, lea cuidadosamente los detalles a continuación. No todos los problemas pueden detectarse automáticamente.';
$string['healthcheckfail'] = 'La verificación de estado detectó problemas serios. Por favor, lea la información de diagnóstico a continuación para más detalles.';
$string['healthcheckfaildocs'] = 'Notas detalladas y consejos para solucionar problemas se proporcionan en la documentación en <a href=\'{$a->link}\'>Instalación > Probando la instalación</a>.';
$string['stackInstall_replace_dollars_desc'] = 'El <a href=\'{$a->link}\'>script para corregir delimitadores matemáticos</a> se puede usar para reemplazar delimitadores antiguos como <code>@...@</code>, <code>$...$</code> y <code>$$...$$</code> en sus preguntas con los nuevos recomendados <code>{@...@}</code>, <code>\\(...\\)</code> y <code>\\[...\\]</code>.';
$string['stackInstall_testsuite_title'] = 'Una suite de pruebas para las pruebas de respuesta de STACK';
$string['stackInstall_testsuite_title_desc'] = 'El <a href=\'{$a->link}\'>script de pruebas de respuesta</a> verifica que las pruebas de respuesta funcionan correctamente. También son útiles para aprender por ejemplo cómo se puede usar cada prueba de respuesta.';
$string['stackInstall_testsuite_intro'] = 'Esta página le permite ver ejemplos de pruebas de respuesta y verificar que las pruebas de respuesta de STACK funcionan correctamente. Tenga en cuenta que solo las pruebas de respuesta se pueden verificar a través de la interfaz web. Si la calificación es negativa, esto indica un fallo esperado, siendo -1 un fallo debido a un error interno esperado.';
$string['stackInstall_testsuite_choose'] = 'Por favor, elija una prueba de respuesta.';
$string['stackInstall_testsuite_pass'] = '¡Todas las pruebas pasaron!';
$string['stackInstall_testsuite_fail'] = '¡No todas las pruebas pasaron!';
$string['stackInstall_testsuite_failingtests'] = 'Pruebas que fallaron';
$string['stackInstall_testsuite_failingupgrades'] = 'Preguntas que fallaron en la actualización.';
$string['stackInstall_testsuite_notests'] = 'Preguntas sin pruebas: ¡por favor, añada algunas!';
$string['stackInstall_testsuite_nogeneralfeedback'] = 'Preguntas sin retroalimentación general: ¡los estudiantes realmente aprecian las soluciones elaboradas!';
$string['stackInstall_testsuite_nodeployedseeds'] = 'Preguntas con variantes aleatorias, pero sin semillas desplegadas';
$string['stackInstall_testsuite_errors'] = 'Esta pregunta generó los siguientes errores en tiempo de ejecución.';
$string['answertest'] = 'Prueba de respuesta';
$string['answertest_help'] = 'Una prueba de respuesta se utiliza para comparar dos expresiones y determinar si cumplen ciertos criterios matemáticos.';
$string['answertest_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Answer_Tests/index.md';
$string['answertest_ab'] = 'Prueba';
$string['testsuitecolpassed'] = '?';
$string['studentanswer'] = 'Respuesta del estudiante';
$string['teacheranswer'] = 'Respuesta del profesor';
$string['options'] = 'Opciones';
$string['options_short'] = 'Opt';
$string['testsuitefeedback'] = 'Retroalimentación';
$string['testsuitecolerror'] = 'Error CAS';
$string['testsuitecolmark'] = 'Calificación';
$string['testsuitepass'] = '<span style=\'color:green;\'><i class=\'fa fa-check\'></i></span>';
$string['testsuiteknownfail'] = '<span style=\'color:orange;\'><i class=\'fa fa-adjust\'></i></span>';
$string['testsuiteknownfailmaths'] = '<span style=\'color:orange;\'><i class=\'fa fa-adjust\'></i>!</span>';
$string['testsuitefail'] = '<span style=\'color:red;\'><i class=\'fa fa-times\'></i></span>';
$string['testsuitenotests'] = 'Número de pruebas: {$a->no}. ';
$string['testsuiteteststook'] = 'Las pruebas tardaron {$a->time} segundos. ';
$string['testsuiteteststookeach'] = 'Promedio por prueba: {$a->time} segundos. ';
$string['stackInstall_input_title'] = "Una suite de pruebas para validar la entrada del estudiante";
$string['stackInstall_input_title_desc'] = 'El <a href=\'{$a->link}\'>script de pruebas de entrada</a> proporciona casos de prueba para cómo STACK interpreta las expresiones matemáticas. También son útiles para aprender mediante ejemplos.';
$string['stackInstall_input_intro'] = "Esta página le permite probar cómo STACK interpreta diversas entradas de estudiantes. Actualmente solo se verifica con las configuraciones más liberales para intentar sintaxis informal e insertar estrellas. <br />Las columnas \\'V\\' muestran la validez según juzgado por PHP y el CAS. V1 = PHP válido, V2 = CAS válido.";
$string['phpvalid'] = 'V1';
$string['phpcasstring'] = 'Salida PHP';
$string['phpsuitecolerror'] = 'Error PHP';
$string['phpvalidatemismatch'] = '[Desajuste de validación PHP]';
$string['casvalidatemismatch'] = '[Desajuste de validación CAS]';
$string['ansnotemismatch'] = '[Desajuste de nota de respuesta]';
$string['displaymismatch'] = '[Desajuste LaTeX]';
$string['casvalid'] = 'V2';
$string['casvalue'] = 'Valor CAS';
$string['casdisplay'] = 'Mostrar CAS';
$string['cassuitecolerrors'] = 'Errores CAS';

$string['texdisplaystyle'] = 'Ecuación en estilo de visualización';
$string['texinlinestyle'] = 'Ecuación en estilo en línea';

// Verwendet bei der Validierung von CAS-Aussagen.
$string['stackCas_spaces'] = 'Espacios no permitidos encontrados en la expresión {$a->expr}.';
$string['stackCas_underscores'] = 'El siguiente uso de guiones bajos no está permitido: {$a}.';
$string['stackCas_percent'] = '% encontrado en la expresión {$a->expr}.';
$string['stackCas_missingLeftBracket'] = 'Falta un corchete izquierdo <span class=\'stacksyntaxexample\'>{$a->bracket}</span> en la expresión: {$a->cmd}.';
$string['stackCas_missingRightBracket'] = 'Falta un corchete derecho <span class=\'stacksyntaxexample\'>{$a->bracket}</span> en la expresión: {$a->cmd}.';
$string['stackCas_qmarkoperators'] = 'Los signos de interrogación no están permitidos en las respuestas.';
$string['stackCas_apostrophe'] = 'Los apóstrofes no están permitidos en las respuestas.';
$string['stackCas_newline'] = 'Los caracteres de nueva línea no están permitidos en las respuestas.';
$string['stackCas_forbiddenChar'] = 'Los comandos CAS no deben contener los siguientes caracteres: {$a->char}.';
$string['stackCas_useinsteadChar'] = 'Por favor, reemplace <span class=\'stacksyntaxexample\'>{$a->bad}</span> por {$a->char}.';
$string['stackCas_finalChar'] = '{$a->char} es un carácter final no válido en {$a->cmd}';
$string['stackCas_MissingStars'] = 'Parece que faltan caracteres *. Quizás quiso introducir {$a->cmd}.';
$string['stackCas_unknownFunction'] = 'Función desconocida: {$a->forbid} en el término {$a->term}.';
$string['stackCas_noFunction'] = 'El uso de la función {$a->forbid} en el término {$a->term} no está permitido en este contexto.';
$string['stackCas_forbiddenFunction'] = 'Función prohibida: {$a->forbid}.';
$string['stackCas_spuriousop'] = 'Operador desconocido: {$a->cmd}.';
$string['stackCas_forbiddenOperator'] = 'Operador prohibido: {$a->forbid}.';
$string['stackCas_forbiddenVariable'] = 'Variable o constante prohibida: {$a->forbid}.';
$string['stackCas_operatorAsVariable'] = 'Operador {$a->op} interpretado como variable, compruebe la sintaxis.';
$string['stackCas_redefinitionOfConstant'] = 'Está prohibida la redefinición de constantes clave: {$a->constant}.';
$string['stackCas_unknownFunctionCase'] = 'La entrada distingue mayúsculas y minúsculas: {$a->forbid} es una función desconocida. ¿Quería decir {$a->lower}?';
// Verwendet bei der Validierung von CAS-Aussagen.
$string['stackCas_unknownVariableCase'] = 'La entrada distingue mayúsculas y minúsculas: {$a->forbid} es una variable desconocida. ¿Quería decir {$a->lower}?';
$string['stackCas_unsupportedKeyword'] = 'Palabra clave no soportada: {$a->forbid}.';
$string['stackCas_forbiddenWord'] = 'La expresión {$a->forbid} está prohibida.';
$string['stackCas_forbiddenntuple'] = 'Las coordenadas no están permitidas en esta entrada.';
$string['stackCas_bracketsdontmatch'] = 'Los corchetes están mal anidados en la expresión {$a->cmd}.';
$string['stackCas_chained_inequalities']    = 'Parece que tiene \\"desigualdades encadenadas\\", p.ej. \\(a < b < c\\). Debe usar desigualdades individuales con operaciones lógicas como \\(and\\) o \\(or\\).';
$string['stackCas_backward_inequalities']   = 'Las desigualdades no estrictas, por ejemplo \\( \\leq \\) o \\( \\geq \\) deben ingresarse como <= o >=. Tiene {$a->cmd} en su expresión, lo cual está al revés.';
$string['stackCas_unencpsulated_comma'] = 'Una coma en su expresión aparece de forma extraña. Las comas se utilizan para separar elementos en listas, conjuntos, etc. Debe utilizar un punto decimal y no una coma en los números de punto flotante.';
$string['stackCas_unencpsulated_semicolon'] = 'Un punto y coma (;) en su expresión aparece de forma extraña. Los puntos y coma se utilizan para separar elementos en listas, conjuntos, etc.';
$string['stackCas_trigspace'] = 'Para aplicar una función trigonométrica a sus argumentos, debe usar paréntesis y no espacios. Por ejemplo, use {$a->trig} en lugar de.';
$string['stackCas_trigop'] = 'Debe aplicar {$a->trig} a un argumento. Parece que ha usado {$a->forbid}, lo que parece que está usando {$a->trig} como nombre de variable.';
$string['stackCas_trigexp'] = 'No puede escribir una potencia de una función trigonométrica escribiendo {$a->forbid}. El cuadrado del valor de \\({$a->identifier}(x)\\) se ingresa como <tt>{$a->identifier}(x)^2</tt>. La inversa de \\({$a->identifier}(x)\\) se escribe como <tt>a{$a->identifier}(x)</tt> y no como \\({$a->identifier}^{-1}(x)\\).';
$string['stackCas_trigparens'] = 'Cuando aplica una función trigonométrica a sus argumentos, debe usar paréntesis redondos y no corchetes. Por ejemplo, {$a->forbid}.';
$string['stackCas_triginv'] = 'Las funciones trigonométricas inversas se escriben como {$a->goodinv} y no como {$a->badinv}.';
$string['stackCas_baddotdot'] = 'El uso de la multiplicación de matrices \\".\\" con flotantes escalares está prohibido, use la multiplicación normal \\"*" en su lugar para el mismo resultado.';
$string['stackCas_badLogIn'] = 'Ha introducido la expresión <tt>In</tt>. El logaritmo natural se introduce como <tt>ln</tt> en minúsculas. (\\"Lima Noviembre\\" no \\"India Noviembre\\")';
$string['stackCas_unitssynonym'] = 'Parece que tiene unidades {$a->forbid}. ¿Quería decir {$a->unit}?';
$string['stackCas_unknownUnitsCase'] = 'La entrada de unidades distingue mayúsculas y minúsculas: {$a->forbid} es una unidad desconocida. ¿Quería decir alguna de la siguiente lista {$a->unit}?';
$string['stackCas_applyingnonobviousfunction'] = 'Esta llamada a función {$a->problem} parece no tener un nombre de función fácilmente visible. Por razones de seguridad, es posible que deba simplificar la llamada para que el validador pueda ver el nombre de la función.';
$string['stackCas_callingasfunction'] = 'La llamada al resultado de una llamada a función está prohibida {$a->problem}, pero las lambdas todavía están permitidas.';
$string['stackCas_applyfunmakestring'] = 'El nombre de la función no puede ser una cadena en <code>{$a->type}</code>.';
$string['stackCas_badpostfixop'] = 'Tiene un operador \\"postfix\\" incorrecto en su expresión.';
$string['stackCas_overrecursivesignatures'] = 'El código de la pregunta contiene demasiadas funciones definidas por mapeo';
$string['stackCas_reserved_function'] = 'El nombre de función \\"{$a->name}\\" no está permitido en esta pregunta. Por favor, póngase en contacto con su profesor.';
$string['stackCas_studentInputAsFunction'] = 'El uso de la entrada del estudiante como nombre de función no está permitido.';
$string['stackCas_unknownSubstitutionPotenttiallyMaskingAFunctionName'] = 'El nombre de la función \\"{$a->name}\\" puede redefinirse mediante sustituciones de forma poco clara.';
$string['stackCas_functionNameSubstitutionToForbiddenOne'] = 'El nombre de función \\"{$a->name}\\" puede estar siendo mapeado por sustituciones a \\"{$a->trg}\\", lo cual está prohibido.';
$string['stackCas_overlyComplexSubstitutionGraphOrRandomisation'] = 'El código de la pregunta tiene sustituciones excesivamente complejas o construye la aleatoriedad de forma incremental y difícil de validar, la validación se agotó por tiempo. Simplifique la lógica para manejar esto y consulte la documentación para obtener orientación.';
$string['stackCas_redefine_built_in'] = 'Está prohibido redefinir una función incorporada \\"{$a->name}\\".';
$string['stackCas_nested_function_declaration'] = 'La definición de una función dentro de otra función ahora está prohibida. Utilice el renombrado de funciones si necesita cambiar las definiciones de funciones dentro de otra función.';
$string['stackCas_decimal_usedthreesep'] = 'Ha utilizado el punto <code>.</code>, la coma <code>,</code> y el punto y coma <code>;</code> en su expresión. Por favor, sea consistente con la posición decimal (<code>.</code> o <code>,</code>) y los separadores de elementos de lista (<code>,</code> o <code>;</code>). Su respuesta es ambigua.';
$string['stackCas_decimal_usedcomma'] = 'Ha utilizado el punto <code>.</code>, pero debe utilizar la coma <code>,</code> como separador decimal.';

// Verwendet in cassession.class.php.
$string['stackCas_CASError'] = 'El CAS devolvió los siguientes errores:';
$string['stackCas_allFailed'] = 'El CAS no pudo devolver ninguna expresión evaluada. Por favor, verifique su conexión con el CAS.';
$string['stackCas_failedReturn'] = 'El CAS no pudo devolver datos.';
$string['stackCas_failedReturnOne'] = 'El CAS no pudo devolver algunos datos.';
$string['stackCas_failedtimeout'] = 'El CAS no pudo devolver datos debido a un tiempo de espera.';

// Verwendet in keyval.class.php.
$string['stackCas_inputsdefined'] = 'No debe usar nombres de entrada como variables. Ha intentado definir <code>{$a}</code>';

// Verwendet in castext.class.php.
$string['stackCas_MissingAt'] = 'Falta un carácter <code>@</code>. ';
$string['stackCas_MissingDollar'] = 'Falta un carácter <code>$</code>. ';
$string['stackCas_MissingString'] = 'Falta una comilla doble <code>"</code>. ';
$string['stackCas_StringOperation'] = 'Una cadena parece estar en el lugar equivocado. Este es el problema: <code>{$a->issue}</code>. ';
$string['stackCas_MissingOpenTeXCAS'] = 'Falta <code>{@</code>. ';
$string['stackCas_MissingClosingTeXCAS'] = 'Falta <code>@}</code>. ';
$string['stackCas_MissingOpenRawCAS'] = 'Falta <code>{#</code>. ';
$string['stackCas_MissingClosingRawCAS'] = 'Falta <code>#}</code>. ';
$string['stackCas_MissingOpenDisplay'] = 'Falta <code>\\[</code>. ';
$string['stackCas_MissingCloseDisplay'] = 'Falta <code>\\]</code>. ';
$string['stackCas_MissingOpenInline'] = 'Falta <code>\\(</code>. ';
$string['stackCas_MissingCloseInline'] = 'Falta <code>\\)</code>. ';
$string['stackCas_MissingOpenHTML'] = 'Falta una etiqueta HTML de apertura. ';
$string['stackCas_MissingCloseHTML'] = 'Falta una etiqueta HTML de cierre. ';
$string['stackCas_failedValidation'] = 'Validación de CASText fallida. ';
$string['stackCas_invalidCommand'] = 'Los comandos CAS no son válidos. ';
$string['stackCas_CASErrorCaused'] = 'causó el siguiente error:';
$string['stackCas_errorpos'] = 'Aproximadamente en la línea {$a->line} carácter {$a->col}.';

// Verwendet in Blöcken.
$string['stackBlock_ifNeedsCondition'] = 'El bloque If necesita un atributo de prueba. ';
$string['stackBlock_escapeNeedsValue'] = 'El bloque escape necesita un atributo de valor. ';
$string['stackBlock_unknownBlock'] = 'El siguiente bloque es desconocido: ';
$string['stackBlock_missmatch'] = 'no tiene una contraparte coincidente. ';
$string['stackBlock_else_out_of_an_if'] = '\"else\" no puede existir fuera de un bloque if.';
$string['stackBlock_elif_out_of_an_if'] = '\"elif\" no puede existir fuera de un bloque if.';
$string['stackBlock_multiple_else'] = 'Múltiples ramas else en un bloque if.';
$string['stackBlock_elif_after_else'] = '\"elif\" después de un \\"else\\" en un bloque if.';
$string['unrecognisedfactstags'] = 'No se reconoce la(s) siguiente(s) etiqueta(s) facts: {$a->tags}.';
$string['stackHintOld'] = 'El CASText tiene etiquetas de sugerencia antiguas. Ahora deberían tener la forma <pre>[[facts:tag]]</pre>';
$string['unknown_block'] = '¡Tipo de bloque desconocido {$a->type} solicitado!';

$string['Maxima_DivisionZero'] = 'División por cero.';
$string['Maxima_Args'] = 'args: el argumento debe ser una expresión no atómica. ';
$string['Variable_function'] = 'Los siguientes aparecen en su expresión tanto como variable como como función: {$a->m0}. Por favor, aclare su entrada. O bien inserta caracteres <code>*</code> para eliminar funciones, o haga que todas las ocurrencias sean funciones.';
$string['Lowest_Terms'] = 'Su respuesta contiene fracciones que no están en su mínima expresión. Por favor, simplifique los factores y vuelva a intentarlo.';
$string['Illegal_floats'] = 'Su respuesta contiene números de punto flotante, que no están permitidos aquí. Debe ingresar números como fracciones. Por ejemplo, debe ingresar 1/3 y no 0.3333, que después de todo es solo una aproximación a un tercio.';
$string['Illegal_strings'] = 'Su respuesta contiene \\"cadenas\\", que no están permitidas aquí.';
$string['Illegal_lists'] = 'Su respuesta contiene listas \\"[a,b,c]\\", que no están permitidas aquí.';
$string['Illegal_sets'] = 'Su respuesta contiene conjuntos \\"{a,b,c}\\", que no están permitidos aquí.';
$string['Illegal_groups'] = 'Su respuesta contiene grupos de evaluación \\"(a,b,c)\\", que no están permitidos aquí.';
$string['Illegal_groupping'] = 'Su respuesta contiene paréntesis utilizados para agrupar operaciones, estos están prohibidos aquí. Probablemente debería manipular la expresión para eliminarlos.';
$string['Illegal_control_flow'] = 'Su respuesta contiene declaraciones de flujo de control como la condición <code>if</code> o el bucle <code>do</code>, estas están prohibidas aquí. Probablemente debería dar el resultado de estas declaraciones como su respuesta.';
$string['qm_error'] = 'Su respuesta contiene signos de interrogación ?, que no están permitidos en las respuestas. Debe reemplazarlos por un valor específico.';
$string['Equiv_Illegal_set'] = 'Los conjuntos no están permitidos al razonar por equivalencia.';
$string['Equiv_Illegal_list'] = 'Las listas no están permitidas al razonar por equivalencia.';
$string['Equiv_Illegal_matrix'] = 'Las matrices no están permitidas al razonar por equivalencia.';
$string['CommaError'] = 'Su respuesta contiene comas que no forman parte de una lista, conjunto o matriz. <ul><li>Si pretendía ingresar una lista, por favor use <tt>{...}</tt>,</li><li>Si pretendía ingresar un conjunto, por favor use <tt>{...}</tt>.</li></ul>'; // Note: The description seems swapped - list uses [] and set uses {}.
$string['Bad_assignment'] = 'Al enumerar los valores de una variable, debe hacerlo de la siguiente manera: {$a->m0}. Por favor, cambie su entrada.';
$string['ValidateVarsSpurious'] = 'Estas variables no son necesarias: {$a->m0}.';
$string['ValidateVarsMissing'] = 'Faltan estas variables: {$a->m0}.';
$string['Illegal_identifiers_in_units'] = 'La entrada contiene un nombre de variable cuando solo se esperaban unidades.';
$string['Illegal_illegal_operation_in_units'] = 'El operador <code>{$a}</code> no está permitido en esta entrada.';
$string['Illegal_illegal_power_of_ten_in_units'] = 'El valor no debe contener potencias de diez no enteras.';
$string['Illegal_input_form_units'] = 'Esta entrada espera un valor numérico, seguido o multiplicado por una expresión que defina una unidad, por ejemplo, <code>1.23W/m^2</code>. Tenga en cuenta que la unidad requerida aquí puede ser diferente.';
$string['Illegal_x10'] = 'Su respuesta parece usar el carácter \\"x\\" como signo de multiplicación. Por favor, use <code>*</code> para la multiplicación.';

$string['stackBlock_jsxgraph_width'] = 'El ancho de un JSXGraph debe usar una unidad de longitud CSS conocida.';
$string['stackBlock_jsxgraph_height'] = 'La altura de un JSXGraph debe usar una unidad de longitud CSS conocida.';
$string['stackBlock_jsxgraph_width_num'] = 'La parte numérica del ancho de un JSXGraph debe ser un número puro y no debe contener caracteres adicionales.';
$string['stackBlock_jsxgraph_height_num'] = 'La parte numérica de la altura de un JSXGraph debe ser un número puro y no debe contener caracteres adicionales.';
$string['stackBlock_jsxgraph_underdefined_dimension'] = 'Al definir la relación de aspecto para el JSXGraph, se debe definir el ancho o la altura del gráfico.';
$string['stackBlock_jsxgraph_overdefined_dimension'] = 'Al definir la relación de aspecto para el JSXGraph, solo se debe definir el ancho o la altura, no ambos.';
$string['stackBlock_jsxgraph_ref'] = 'El bloque jsxgraph solo soporta referencias a entradas presentes en la misma sección CASText. \'{$a->var}\' no existe aquí.';
$string['stackBlock_jsxgraph_param'] = 'El bloque jsxgraph solo soporta estos parámetros en este contexto: {$a->param}.';

$string['stackBlock_parsons_used_header'] = 'Construya su solución aquí:';
$string['stackBlock_parsons_available_header'] = 'Arrastre desde aquí:';
$string['stackBlock_parsons_width'] = 'El ancho de un bloque Parsons debe usar una unidad de longitud CSS conocida.';
$string['stackBlock_parsons_height'] = 'La altura de un bloque Parsons debe usar una unidad de longitud CSS conocida.';
$string['stackBlock_parsons_width_num'] = 'La parte numérica del ancho de un bloque Parsons debe ser un número puro y no debe contener caracteres adicionales.';
$string['stackBlock_parsons_height_num'] = 'La parte numérica de la altura de un bloque Parsons debe ser un número puro y no debe contener caracteres adicionales.';
$string['stackBlock_parsons_length_num'] = 'El valor numérico de la longitud debe ser un entero positivo y no debe contener caracteres adicionales o tipos numéricos.';
$string['stackBlock_parsons_underdefined_dimension'] = 'Al definir la relación de aspecto para un bloque Parsons, se debe definir el ancho o la altura de las listas.';
$string['stackBlock_parsons_overdefined_dimension'] = 'Al definir la relación de aspecto para un bloque Parsons, solo se debe definir el ancho o la altura, no ambos.';
$string['stackBlock_parsons_unknown_named_version'] = 'El bloque Parsons solo soporta versiones nombradas: {$a->version}.';
$string['stackBlock_parsons_unknown_mathjax_version'] = 'El bloque Parsons solo soporta versiones MathJax {$a->mjversion} para el parámetro mathjax.';
$string['stackBlock_parsons_ref'] = 'El bloque Parsons solo soporta referencias a entradas presentes en la misma sección CASText. \'{$a->var}\' no existe aquí.';
$string['stackBlock_parsons_param'] = 'El bloque Parsons solo soporta estos parámetros en este contexto: \'{$a->var}\'.';
$string['stackBlock_parsons_contents'] = 'El contenido de un bloque Parsons debe ser un JSON en la forma {#stackjson_stringify(proof_steps)#}. Si pasa objetos personalizados, el contenido del bloque Parsons debe ser un JSON en la forma {steps: {#stackjson_stringify(proof_steps)#}, options: {JSON con opciones ordenables}}. Alternativamente, los contenidos del bloque Parsons pueden contener equivalentes JSON crudos. Asegúrese de que la variable Maxima proof_steps tenga el formato correcto. Tenga en cuenta que todos los pasos de la prueba deben ser cadenas. Consulte la documentación para más detalles.';
$string['stackBlock_unknown_sortable_option'] = 'Opciones ordenables desconocidas encontradas, las siguientes serán ignoradas: ';
$string['stackBlock_overwritten_sortable_option'] = 'Opciones ordenables no anulables encontradas, las siguientes serán ignoradas: ';

// Definition der stackBlock GeoGebra Strings.
$string['stackBlock_geogebra_width'] = 'El ancho de un applet de GeoGebra debe usar una unidad de longitud CSS conocida.';
$string['stackBlock_geogebra_height'] = 'La altura de un applet de GeoGebra debe usar una unidad de longitud CSS conocida.';
$string['stackBlock_geogebra_width_num'] = 'La parte numérica del ancho de un applet de GeoGebra debe ser un número puro y no debe contener caracteres adicionales.';
$string['stackBlock_geogebra_height_num'] = 'La parte numérica de la altura de un applet de GeoGebra debe ser un número puro y no debe contener caracteres adicionales.';
$string['stackBlock_geogebra_underdefined_dimension'] = 'Al definir la relación de aspecto para el applet de GeoGebra, se debe definir el ancho o la altura del gráfico.';
$string['stackBlock_geogebra_overdefined_dimension'] = 'Al definir la relación de aspecto para el applet de GeoGebra, solo se debe definir el ancho o la altura, no ambos.';
$string['stackBlock_geogebra_ref'] = 'El bloque geogebra solo soporta referencias a entradas presentes en la misma sección CASText. \'{$a->var}\' no existe aquí.';
$string['stackBlock_geogebra_param'] = 'El bloque geogebra solo soporta estos parámetros en este contexto: {$a->param}.';
$string['stackBlock_geogebra_link'] = 'Enlace al material de GeoGebra referenciado';
$string['stackBlock_geogebra_link_help'] = '¿Desea editar este material? Si es su propio material de GeoGebra en geogebra.org, puede editarlo. Si no es su material de GeoGebra, primero debe copiar el material en geogebra.org. Luego, debe publicar el material y editar el valor material_id a continuación en el texto de la pregunta.';
$string['stackBlock_geogebra_heading'] = 'Materiales de GeoGebra';
// Definition der stackBlock GeoGebra Strings für globale Admin-Optionen.
$string['stackBlock_geogebra_settingdefaultoptions'] = 'Opciones para GeoGebra en STACK';
$string['stackBlock_geogebra_settingdefaultoptions_desc'] = 'La documentación sobre el uso de GeoGebra con STACK se puede encontrar en Authoring/GeoGebra.md';
$string['stackBlock_geogebrabaseurl'] = 'Enlace al alojamiento de GeoGebra (opcional)';
$string['stackBlock_geogebrabaseurl_help'] = 'Aquí puede agregar un enlace personalizado si aloja scripts de GeoGebra en su propio servidor. Si solo desea utilizar una versión específica de GeoGebra, utilice: https://www.geogebra.org/apps/5.0.498.0/web3d (por ejemplo, para la versión 5.0.498.0)';

// Answer tests.
$string['stackOptions_AnsTest_values_AlgEquiv']            = "AlgEquiv";
$string['stackOptions_AnsTest_values_AlgEquivNouns']       = "AlgEquivNouns";
$string['stackOptions_AnsTest_values_EqualComAss']         = "EqualComAss";
$string['stackOptions_AnsTest_values_EqualComAssRules']    = "EqualComAssRules";
$string['stackOptions_AnsTest_values_CasEqual']            = "CasEqual";
$string['stackOptions_AnsTest_values_SameType']            = "SameType";
$string['stackOptions_AnsTest_values_SubstEquiv']          = "SubstEquiv";
$string['stackOptions_AnsTest_values_SysEquiv']            = "SysEquiv";
$string['stackOptions_AnsTest_values_Sets']                = "Sets";
$string['stackOptions_AnsTest_values_Expanded']            = "Expanded";
$string['stackOptions_AnsTest_values_FacForm']             = "FacForm";
$string['stackOptions_AnsTest_values_SingleFrac']          = "SingleFrac";
$string['stackOptions_AnsTest_values_PartFrac']            = "PartFrac";
$string['stackOptions_AnsTest_values_CompSquare']          = "CompletedSquare";
$string['stackOptions_AnsTest_values_PropLogic']           = "PropositionalLogic";
$string['stackOptions_AnsTest_values_Equiv']               = "EquivReasoning";
$string['stackOptions_AnsTest_values_EquivFirst']          = "EquivFirst";
$string['stackOptions_AnsTest_values_SigFigsStrict']       = "SigFigsStrict";
$string['stackOptions_AnsTest_values_NumRelative']         = "NumRelative";
$string['stackOptions_AnsTest_values_NumAbsolute']         = "NumAbsolute";
$string['stackOptions_AnsTest_values_NumSigFigs']          = "NumSigFigs";
$string['stackOptions_AnsTest_values_NumDecPlaces']        = "NumDecPlaces";
$string['stackOptions_AnsTest_values_NumDecPlacesWrong']   = "NumDecPlacesWrong";
$string['stackOptions_AnsTest_values_UnitsSigFigs']        = "UnitsSigFigs";
$string['stackOptions_AnsTest_values_UnitsStrictSigFigs']  = "UnitsStrictSigFigs";
$string['stackOptions_AnsTest_values_UnitsRelative']       = "UnitsRelative";
$string['stackOptions_AnsTest_values_UnitsStrictRelative'] = "UnitsStrictRelative";
$string['stackOptions_AnsTest_values_UnitsAbsolute']       = "UnitsAbsolute";
$string['stackOptions_AnsTest_values_UnitsStrictAbsolute'] = "UnitsStrictAbsolute";
$string['stackOptions_AnsTest_values_GT']                  = "Num-GT";
$string['stackOptions_AnsTest_values_GTE']                 = "Num-GTE";
$string['stackOptions_AnsTest_values_LowestTerms']         = "LowestTerms";
$string['stackOptions_AnsTest_values_Diff']                = "Diff";
$string['stackOptions_AnsTest_values_Int']                 = "Int";
$string['stackOptions_AnsTest_values_String']              = "String";
$string['stackOptions_AnsTest_values_StringSloppy']        = "StringSloppy";
$string['stackOptions_AnsTest_values_Levenshtein']         = "Levenshtein";
$string['stackOptions_AnsTest_values_SRegExp']             = "SRegExp";

$string['AT_NOTIMPLEMENTED'] = 'Esta prueba de respuesta aún no ha sido implementada. ';
$string['TEST_FAILED'] = 'La prueba de respuesta no pudo ejecutarse correctamente: Por favor, informe a su profesor. {$a->errors}';
$string['TEST_FAILED_Q'] = 'La prueba de respuesta no pudo ejecutarse correctamente: Por favor, informe a su profesor. ';
$string['AT_MissingOptions'] = 'Opción faltante al ejecutar la prueba. ';
$string['AT_InvalidOptions'] = 'El campo de opciones no es válido. {$a->errors}';
$string['AT_EmptySA'] = 'Se intentó ejecutar una prueba de respuesta con una respuesta de estudiante vacía, probablemente un problema de validación CAS al crear la pregunta.';
$string['AT_EmptyTA'] = 'Se intentó ejecutar una prueba de respuesta con una respuesta de profesor vacía, probablemente un problema de validación CAS al crear la pregunta.';
$string['AT_raw_sans_needed'] = 'Algunas pruebas de respuesta dependen de la entrada bruta de un estudiante, por lo tanto, el campo \\"SAns\\" del nodo debe ser el nombre de una entrada de pregunta. Por favor, verifique lo siguiente (prt.node) que parece más bien un valor calculado: {$a->prt}';

$string['ATString_SA_not_string'] = 'Su respuesta debería ser una cadena, pero no lo es. ';
$string['ATString_SB_not_string'] = 'La respuesta del profesor debería ser una cadena, pero no lo es. ';

$string['ATAlgEquiv_SA_not_expression'] = 'Su respuesta debe ser una expresión, no una ecuación, desigualdad, lista, conjunto o matriz. ';
$string['ATAlgEquiv_SA_not_matrix'] = 'Su respuesta debería ser una matriz, pero no lo es. ';
$string['ATAlgEquiv_SA_not_list'] = 'Su respuesta debería ser una lista, pero no lo es. Tenga en cuenta que la sintaxis para ingresar una lista es encerrar los valores separados por comas entre corchetes. ';
$string['ATAlgEquiv_SA_not_set'] = 'Su respuesta debería ser un conjunto, pero no lo es. Tenga en cuenta que la sintaxis para ingresar un conjunto es encerrar los valores separados por comas entre llaves. ';
$string['ATAlgEquiv_SA_not_realset'] = 'Su respuesta debe ser un subconjunto de los números reales. Esto podría ser un conjunto de números o una colección de intervalos.';
$string['ATAlgEquiv_SA_not_equation'] = 'Su respuesta debería ser una ecuación, pero no lo es. ';
$string['ATAlgEquiv_SA_not_logic'] = 'Su respuesta debería ser una ecuación, desigualdad, o una combinación lógica de muchas de estas, pero no lo es. ';
$string['ATAlgEquiv_TA_not_equation'] = 'Ha introducido una ecuación, pero aquí no se espera una ecuación. Es posible que haya introducido algo como \\"y=2x+1\\" cuando solo debería haber introducido \\"2x+1\\". ';
$string['ATAlgEquiv_SA_not_inequality'] = 'Su respuesta debería ser una desigualdad, pero no lo es. ';
$string['ATAlgEquiv_SA_not_function'] = 'Su respuesta debería ser una función, definida con el operador <tt>:=</tt>, pero no lo es. ';
$string['ATAlgEquiv_SA_not_string'] = 'Su respuesta debería ser una cadena, pero no lo es. ';
$string['Subst'] = 'Su respuesta sería correcta si usara la siguiente sustitución de variables. {$a->m0} ';

$string['ATSubstEquiv_Opt_List'] = 'La opción para esta prueba de respuesta debe ser una lista. Eso es un error. Por favor, informe a su profesor. ';

$string['ATEqualComAssRules_Opt_List'] = 'La opción para esta prueba de respuesta debe ser una lista no vacía de reglas soportadas. Eso es un error. Por favor, informe a su profesor. ';
$string['ATEqualComAssRules_Opt_Incompatible'] = 'La opción para esta prueba de respuesta contiene reglas incompatibles. Eso es un error. Por favor, informe a su profesor. ';

$string['ATSets_SA_not_set'] = 'Su respuesta debe ser un conjunto, pero no lo es. Tenga en cuenta que la sintaxis para ingresar un conjunto es encerrar los valores separados por comas entre llaves. ';
$string['ATSets_SB_not_set'] = 'La prueba de respuesta \\"Sets\\" espera que su segundo argumento sea un conjunto. Eso es un error. Por favor, informe a su profesor.';
$string['ATSets_wrongentries'] = 'Estas entradas no deberían ser elementos de su conjunto. {$a->m0} ';
$string['ATSets_missingentries'] = 'Faltan los siguientes en su conjunto. {$a->m0} ';
$string['ATSets_duplicates'] = '¡Su conjunto parece contener entradas duplicadas!';

$string['ATInequality_nonstrict'] = 'Su desigualdad debe ser estricta, ¡pero no lo es! ';
$string['ATInequality_strict'] = '¡Su desigualdad no debería ser estricta! ';
$string['ATInequality_backwards'] = 'Su desigualdad parece estar al revés. ';

$string['ATLowestTerms_wrong'] = 'Debe simplificar las fracciones en su respuesta. ';
$string['ATLowestTerms_entries'] = 'Los siguientes términos en su respuesta no están en su mínima expresión. {$a->m0} Por favor, inténtelo de nuevo. ';
$string['ATLowestTerms_not_rat'] = 'Debe eliminar lo siguiente del denominador de su fracción: {$a->m0}';

$string['ATList_wronglen'] = 'Su lista debería tener {$a->m0} elementos, pero en realidad tiene {$a->m1}. ';
$string['ATList_wrongentries'] = 'Las entradas subrayadas en rojo a continuación son las que son incorrectas. {$a->m0} ';

$string['ATMatrix_wrongsz'] = 'Su matriz debería ser de {$a->m0} por {$a->m1}, pero en realidad es de {$a->m2} por {$a->m3}. ';
$string['ATMatrix_wrongentries'] = 'Las entradas subrayadas en rojo a continuación son las que son incorrectas. {$a->m0} ';

$string['ATSet_wrongsz'] = 'Su conjunto debería tener {$a->m0} elementos distintos, pero en realidad tiene {$a->m1}. ';
$string['ATSet_wrongentries'] = 'Las siguientes entradas son incorrectas, aunque pueden aparecer en una forma simplificada de lo que realmente introdujo. {$a->m0} ';

$string['irred_Q_factored'] = 'El término {$a->m0} no debería estar factorizado, pero lo está. ';
$string['irred_Q_commonint'] = 'Debe sacar un factor común. '; // Braucht ein Leerzeichen am Ende.
$string['irred_Q_optional_fac'] = 'Podría hacer un poco más de trabajo en el término {$a->m0}. Sin embargo, no es necesario. ';

$string['FacForm_UnPick_morework'] = 'Podría hacer un poco más de trabajo en el término {$a->m0}. ';
$string['FacForm_UnPick_intfac'] = 'Debe sacar un factor común. ';

$string['ATFacForm_error_list'] = 'La prueba de respuesta falló. Por favor, póngase en contacto con su administrador del sistema';
$string['ATFacForm_isfactored'] = 'Su respuesta está factorizada, bien hecho. '; // Braucht ein Leerzeichen am Ende.
$string['ATFacForm_notfactored'] = 'Su respuesta no está factorizada. '; // Braucht ein Leerzeichen am Ende.
$string['ATFacForm_notpoly'] = 'Este término debería ser un polinomio, pero no lo es.';
$string['ATFacForm_notalgequiv'] = 'Tenga en cuenta que su respuesta no es algebraicamente equivalente a la respuesta correcta. Debe haber hecho algo mal. '; // Braucht ein Leerzeichen am Ende.

$string['ATPartFrac_error_list'] = 'La prueba de respuesta falló. Por favor, póngase en contacto con su administrador del sistema';
$string['ATPartFrac_true'] = '';
$string['ATPartFrac_single_fraction'] = 'Su respuesta parece ser una sola fracción, debe estar en una forma con fracciones parciales. ';
$string['ATPartFrac_diff_variables'] = 'Las variables en su respuesta son diferentes de las de la pregunta, por favor verifíquelas. ';
$string['ATPartFrac_denom_ret'] = 'Si su respuesta se escribiera como una sola fracción, entonces el denominador sería {$a->m0}. En realidad debería ser {$a->m1}. ';
$string['ATPartFrac_ret_expression'] = 'Su respuesta como una sola fracción es {$a->m0} ';

$string['ATSingleFrac_error_list'] = 'La prueba de respuesta falló. Por favor, póngase en contacto con su administrador del sistema';
$string['ATSingleFrac_true'] = '';
$string['ATCompSquare_false_no_summands']  = 'El cuadrado completado es de la forma \\( a(\\cdots\\cdots)^2 + b\\) donde \\(a\\) y \\(b\\) no dependen de su variable. Más de uno de sus sumandos parece depender de la variable en su respuesta.';
$string['ATSingleFrac_var'] = 'Las variables en su respuesta son diferentes de las de la pregunta, por favor verifíquelas. ';
$string['ATSingleFrac_ret_exp'] = 'Su respuesta no es algebraicamente equivalente a la respuesta correcta. Debe haber hecho algo mal. ';
$string['ATSingleFrac_div'] = 'Su respuesta contiene fracciones dentro de fracciones. Debe eliminar estas y escribir su respuesta como una sola fracción.';

$string['ATCompSquare_true'] = '';
$string['ATCompSquare_false'] = '';
$string['ATCompSquare_not_AlgEquiv'] = 'Su respuesta parece estar en la forma correcta, pero no es equivalente a la respuesta correcta.';
$string['ATCompSquare_false_no_summands']  = 'El cuadrado completado es de la forma \\( a(\\cdots\\cdots)^2 + b\\) donde \\(a\\) y \\(b\\) no dependen de su variable. Más de uno de sus sumandos parece depender de la variable en su respuesta.';
$string['ATCompSquare_SA_not_depend_var'] = 'Su respuesta debería depender de la variable {$a->m0}, ¡pero no lo hace!';

$string['ATInt_error_list'] = 'La prueba de respuesta falló. Por favor, póngase en contacto con su administrador del sistema';
$string['ATInt_const_int'] = 'Debe añadir una constante de integración. Esta debe ser una constante arbitraria, no un número.';
$string['ATInt_const'] = 'Debe añadir una constante de integración, por lo demás, esto parece correcto. Bien hecho.';
$string['ATInt_EqFormalDiff'] = 'La derivada formal de su respuesta es igual a la expresión que debería haber integrado. Sin embargo, su respuesta es significativamente diferente de la respuesta correcta, es decir, no solo, por ejemplo, una constante de integración. Por favor, pregunte a su profesor al respecto.';
$string['ATInt_logabs_inconsistent'] = 'There appear to be strange inconsistencies between your use of \\(\\log(...)\\) and \\(\\log(|...|)\\).  Please ask your teacher about this.  ';
$string['ATInt_weirdconst'] = 'La derivada formal de su respuesta es igual a la expresión que debería haber integrado. Sin embargo, tiene una constante de integración extraña. Por favor, pregunte a su profesor al respecto.';
$string['ATInt_logabs']              = 'Your teacher may expect you to use the result \\(\\int\\frac{1}{x} dx = \\log(|x|)+c\\), rather than \\(\\int\\frac{1}{x} dx = \\log(x)+c\\).  Please ask your teacher about this.';
$string['ATInt_diff'] = '¡Parece que en su lugar diferenció!';
$string['ATInt_generic'] = 'La derivada de su respuesta debería ser igual a la expresión que debería haber integrado, eso era: {$a->m0} De hecho, la derivada de su respuesta, con respecto a {$a->m1}, es {$a->m2}, ¡así que debe haber hecho algo mal!';
$string['ATInt_STACKERROR_OptList'] = 'La prueba de respuesta no pudo ejecutarse correctamente: Por favor, informe a su profesor. Si la opción para ATInt es una lista, debe tener exactamente dos elementos, pero no los tiene.';

$string['ATDiff_error_list'] = 'La prueba de respuesta falló. Por favor, póngase en contacto con su administrador del sistema';
$string['ATDiff_int'] = '¡Parece que en su lugar integró!';

$string['ATNumerical_SA_not_list'] = 'Su respuesta debería ser una lista, pero no lo es. Tenga en cuenta que la sintaxis para ingresar una lista es encerrar los valores separados por comas entre corchetes. ';
$string['ATNumerical_SA_not_set'] = 'Su respuesta debería ser un conjunto, pero no lo es. Tenga en cuenta que la sintaxis para ingresar un conjunto es encerrar los valores separados por comas entre llaves. ';
$string['ATNumerical_SA_not_number'] = 'Su respuesta debería ser un número de punto flotante, pero no lo es. ';
$string['ATNumerical_SB_not_number'] = 'El valor proporcionado para la respuesta del profesor debería ser un número de punto flotante, pero no lo es. Este es un error interno en la prueba. Por favor, pregunte a su profesor al respecto.';
$string['ATNumerical_FAILED'] = 'Su respuesta debería ser un número de punto flotante, o una lista o conjunto de números. No lo es. ';
$string['ATNumerical_STACKERROR_tol'] = 'La tolerancia numérica para ATNumerical debería ser un número de punto flotante, pero no lo es. Este es un error interno en la prueba. Por favor, pregunte a su profesor al respecto. ';

$string['ATNum_OutofRange'] = 'Una expresión numérica está fuera del rango soportado. Por favor, póngase en contacto con su profesor. ';

$string['ATNumSigFigs_error_list'] = 'La prueba de respuesta falló. Por favor, póngase en contacto con su administrador del sistema';
$string['ATNumSigFigs_NotDecimal'] = 'Su respuesta debería ser un número decimal, ¡pero no lo es! ';
$string['ATNumSigFigs_WrongSign'] = 'Su respuesta tiene el signo algebraico incorrecto. ';
$string['ATNumSigFigs_Inaccurate'] = 'La precisión de su respuesta no es correcta. O bien no ha redondeado correctamente, o ha redondeado una respuesta intermedia, lo que provoca un error.';
$string['ATNumSigFigs_WrongDigits'] = 'Su respuesta contiene el número incorrecto de cifras significativas. ';

$string['ATUnits_SA_not_expression'] = 'Su respuesta debe ser un número junto con unidades. No utilice conjuntos, listas, ecuaciones o matrices. ';
$string['ATUnits_SA_no_units'] = 'Su respuesta debe incluir unidades. ';
$string['ATUnits_SA_excess_units'] = 'Su respuesta ha utilizado unidades (o variables) cuando no debería. ';
$string['ATUnits_SA_only_units'] = 'Su respuesta debe ser un número junto con unidades. Su respuesta solo tiene unidades. ';
$string['ATUnits_SA_bad_units'] = 'Su respuesta debe incluir unidades, y debe usar multiplicación para adjuntar las unidades a un valor, por ejemplo, <code>3.2*m/s</code>. ';
$string['ATUnits_SA_errorbounds_invalid'] = 'Su respuesta tiene límites de error. En este caso, no debe proporcionar límites de error, solo la cantidad y las unidades.';
$string['ATUnits_SO_wrong_units'] = 'Las unidades proporcionadas para la tolerancia numérica deben coincidir con las unidades de la respuesta del profesor. Este es un error interno en la prueba. Por favor, pregunte a su profesor al respecto.';
$string['ATUnits_incompatible_units'] = 'Sus unidades no son compatibles con las que ha utilizado el profesor. ';
$string['ATUnits_compatible_units'] = 'Sus unidades son diferentes a las del profesor, pero son compatibles con ellas. Los valores numéricos se convertirán a unidades base del SI para la comparación. ';
$string['ATUnits_correct_numerical'] = 'Por favor, verifique cuidadosamente sus unidades. ';

$string['ATNumDecPlaces_OptNotInt'] = 'Para ATNumDecPlaces, la opción de prueba debe ser un entero positivo, de hecho, se obtuvo \\"{$a->m0}\\". ';
$string['ATNumDecPlaces_NoDP'] = 'Su respuesta debe ser un número decimal, incluyendo un punto decimal. ';
$string['ATNumDecPlaces_Wrong_DPs'] = 'Su respuesta fue proporcionada con el número incorrecto de decimales.';
$string['ATNumDecPlaces_Float'] = 'Su respuesta debe ser un número de punto flotante, pero no lo es.';

$string['ATNumDecPlacesWrong_OptNotInt'] = 'Para ATNumDecPlacesWrong, la opción de prueba debe ser un entero positivo, de hecho, se obtuvo \\"{$a->m0}\\". ';

$string['ATSysEquiv_SA_not_list'] = 'Su respuesta debería ser una lista, ¡pero no lo es!';
$string['ATSysEquiv_SB_not_list'] = 'La respuesta del profesor no es una lista. Por favor, póngase en contacto con su profesor.';
$string['ATSysEquiv_SA_not_eq_list'] = 'Su respuesta debería ser una lista de ecuaciones, ¡pero no lo es!';
$string['ATSysEquiv_SB_not_eq_list'] = 'La respuesta del profesor no es una lista de ecuaciones, pero debería serlo. Por favor, póngase en contacto con su profesor.';
$string['ATSysEquiv_SA_not_poly_eq_list'] = '¡Una o más de sus ecuaciones no son polinomios!';
$string['ATSysEquiv_SB_not_poly_eq_list'] = 'La respuesta del profesor debería ser una lista de ecuaciones polinómicas, pero no lo es. Por favor, póngase en contacto con su profesor.';
$string['ATSysEquiv_SA_missing_variables'] = '¡A su respuesta le falta una o más variables!';
$string['ATSysEquiv_SA_extra_variables'] = '¡Su respuesta contiene demasiadas variables!';
$string['ATSysEquiv_SA_wrong_variables'] = '¡Su respuesta utiliza las variables incorrectas!';
$string['ATSysEquiv_SA_system_underdetermined'] = 'Las ecuaciones de su sistema parecen ser correctas, pero necesita más.';
$string['ATSysEquiv_SA_system_overdetermined'] = 'Las entradas subrayadas en rojo a continuación son las que son incorrectas. {$a->m0} ';

$string['ATLevenshtein_SA_not_string'] = 'El primer argumento de la prueba de respuesta Levenshtein debe ser una cadena. La prueba ha fallado. Por favor, póngase en contacto con su profesor.';
$string['ATLevenshtein_SB_malformed'] = 'El segundo argumento de la prueba de respuesta Levenshtein debe tener la forma [allow, deny] donde cada elemento es una lista de cadenas. Este argumento está mal formado y la prueba ha fallado. Por favor, póngase en contacto con su profesor.';
$string['ATLevenshtein_tol_not_number'] = 'La tolerancia en la prueba de respuesta Levenshtein debe ser un número, pero no lo es. La prueba ha fallado. Por favor, póngase en contacto con su profesor.';
$string['ATLevenshtein_upper_not_boolean'] = 'La opción de mayúsculas/minúsculas en la prueba de respuesta Levenshtein debe ser un valor booleano, pero no lo es. La prueba ha fallado. Por favor, póngase en contacto con su profesor.';
$string['ATLevenshtein_match'] = 'La coincidencia más cercana fue \\"{$a->m0}\\".';

$string['ATSRegExp_SB_not_string'] = 'El segundo argumento de la prueba de respuesta SRegExp debe ser una cadena. La prueba ha fallado. Por favor, póngase en contacto con su profesor.';
$string['ATSRegExp_SA_not_string'] = 'El primer argumento de la prueba de respuesta SRegExp debe ser una cadena. La prueba ha fallado. Por favor, póngase en contacto con su profesor.';

$string['ATEquiv_SA_not_list'] = 'El primer argumento de la prueba de respuesta Equiv debería ser una lista, pero la prueba falló. Por favor, póngase en contacto con su profesor.';
$string['ATEquiv_SB_not_list'] = 'El segundo argumento de la prueba de respuesta Equiv debería ser una lista, pero la prueba falló. Por favor, póngase en contacto con su profesor.';
$string['ATEquivFirst_SA_not_list'] = 'El primer argumento de la prueba de respuesta Equiv debería ser una lista, pero la prueba falló. Por favor, póngase en contacto con su profesor.';
$string['ATEquivFirst_SB_not_list'] = 'El segundo argumento de la prueba de respuesta Equiv debería ser una lista, pero la prueba falló. Por favor, póngase en contacto con su profesor.';
$string['ATEquivFirst_SA_wrong_start'] = 'La primera línea de su argumento debe ser \\"{$a->m0}\\".';
$string['ATEquivFirst_SA_wrong_end'] = 'Su respuesta final no está en la forma correcta. ';
$string['equiv_SAMEROOTS'] = '(Mismas raíces)';
$string['equiv_ANDOR'] = '¡Confusión de \\"y/o\\"!';
$string['equiv_MISSINGVAR'] = 'Asignaciones faltantes';
$string['equiv_ASSUMEPOSVARS'] = 'Asumir variables positivas';
$string['equiv_ASSUMEPOSREALVARS'] = 'Asumir variables reales positivas';
$string['equiv_LET'] = 'Letra';

$string['equiv_AND'] = 'y';
$string['equiv_OR'] = 'o';
$string['equiv_NOT'] = 'no';
$string['equiv_NAND'] = 'nand';
$string['equiv_NOR'] = 'nor';
$string['equiv_XOR'] = 'xor';
$string['equiv_XNOR'] = 'xnor';
$string['equiv_IMPLIES'] = 'implica';

$string['studentValidation_yourLastAnswer'] = 'Su última respuesta fue interpretada de la siguiente manera: {$a}';
$string['studentValidation_listofvariables'] = 'Las variables encontradas en su respuesta fueron: {$a}';
$string['studentValidation_listofunits'] = 'Las unidades encontradas en su respuesta fueron: {$a}';
$string['studentValidation_invalidAnswer'] = 'Esta respuesta no es válida. ';
$string['studentValidation_notes'] = '(Esta entrada no es calificada automáticamente por STACK.)';
$string['stackQuestion_noQuestionParts'] = 'Este elemento no tiene partes de pregunta que usted deba responder.';

$string['Interval_notinterval'] = 'Se esperaba un intervalo, pero en su lugar obtuvimos {$a->m0}.';
$string['Interval_wrongnumargs'] = 'La construcción de un intervalo debe tener exactamente dos argumentos, por lo tanto, esto debe ser un error: {$a->m0}.';
$string['Interval_backwards'] = 'Al construir un intervalo real, los puntos finales deben estar ordenados. {$a->m0} debería ser {$a->m1}.';
$string['Interval_illegal_entries'] = 'Lo siguiente no debería aparecer en la construcción de conjuntos reales: {$a->m0}';

// Documentation strings.
$string['stackDoc_404']                 = 'Error 404';
$string['stackDoc_docs']                = 'Documentación de STACK';
$string['stackDoc_docs_desc']           = 'La <a href=\'{$a->link}\'>documentación de STACK</a>: una wiki estática local que documenta el código que realmente se está ejecutando en su servidor.';
$string['stackDoc_home']                = 'Inicio de la documentación';
$string['stackDoc_index']               = 'Índice de categorías';
$string['stackDoc_siteMap']             = 'Mapa del sitio';
$string['stackDoc_siteMap_en']          = 'Mapa del sitio en inglés';
$string['stackDoc_404message']          = 'Archivo no encontrado.';
$string['stackDoc_directoryStructure']  = 'Estructura de directorios';
$string['stackDoc_version']             = 'Su sitio está ejecutando la versión {$a} de STACK.';
$string['stackDoc_licence']             = 'La documentación de STACK está bajo una licencia <a rel=\'license\' href=\'http://creativecommons.org/licenses/by-sa/4.0/\'>Creative Commons Atribución-Compartir Igual 4.0 Internacional</a>.';
$string['stackDoc_licence_alt']         = 'Licencia Creative Commons';
$string['stackDoc_AnswerTestResults']   = 'Resultados de pruebas de respuesta\\n\\nEsta página expone los resultados de ejecutar pruebas de respuesta en casos de prueba de STACK. Esta página se genera automáticamente a partir de las pruebas unitarias de STACK y está diseñada para mostrar a los autores de preguntas qué hacen realmente las pruebas de respuesta. Esto incluye casos en los que las pruebas de respuesta fallan actualmente, lo que da una calificación esperada negativa. Los comentarios y casos de prueba adicionales son muy bienvenidos.';

// Fact sheets.

$string['fact_sheet_preamble'] = '# Sugerencias\\n\\nSTACK contiene una \\"hoja de fórmulas\\" de fragmentos útiles que un profesor puede querer incluir de forma consistente. Esto se logra a través del sistema de \\"sugerencias\\".\\n\\nLas sugerencias pueden incluirse en cualquier [CASText](CASText.md).\\n\\nPara incluir una sugerencia, utilice la sintaxis\\n\\n    [[facts:tag]]\\n\\nLa \\"etiqueta\\" se elige de la lista siguiente.\\n\\n## Todas las hojas de datos compatibles\\n\\n';

$string['greek_alphabet_name'] = 'El alfabeto griego';
$string['greek_alphabet_fact'] = '||||\\n|--- |--- |--- |\\n|Mayúscula, \\(\\quad\\)|minúscula, \\(\\quad\\)|nombre|\\n|\\(A\\)|\\(\\alpha\\)|alfa|\\n|\\(B\\)|\\(\\beta\\)|beta|\\(\\Gamma\\)|\\(\\gamma\\)|gamma|\\(\\Delta\\)|\\(\\delta\\)|delta|\\(E\\)|\\(\\epsilon\\)|épsilon|\\(Z\\)|\\(\\zeta\\)|zeta|\\(H\\)|\\(\\eta\\)|eta|\\(\\Theta\\)|\\(\\theta\\)|theta|\\(K\\)|\\(\\kappa\\)|kappa|\\(M\\)|\\(\\mu\\)|mu|\\(N\\)|\\( u\\)|nu|\\(\\Xi\\)|\\(\\xi\\)|xi|\\(O\\)|\\(o\\)|omicron|\\(\\Pi\\)|\\(\\pi\\)|pi|\\(I\\)|\\(\\iota\\)|iota|\\(P\\)|\\(\\rho\\)|rho|\\(\\Sigma\\)|\\(\\sigma\\)|sigma|\\(\\Lambda\\)|\\(\\lambda\\)|lambda|\\(T\\)|\\(\\tau\\)|tau|\\(\\Upsilon\\)|\\(\\upsilon\\)|upsilon|\\(\\Phi\\)|\\(\\phi\\)|phi|\\(X\\)|\\(\\chi\\)|chi|\\(\\Psi\\)|\\(\\psi\\)|psi|\\(\\Omega\\)|\\(\\omega\\)|omega|';

$string['alg_inequalities_name'] = 'Desigualdades';
$string['alg_inequalities_fact'] = '\\[a>b \\hbox{ significa } a \\hbox{ es mayor que } b.\\]\\n\\[ a < b \\hbox{ significa } a \\hbox{ es menor que } b.\\]\\n\\[a\\geq b \\hbox{ significa } a \\hbox{ es mayor o igual que } b.\\]\\n\\[a\\leq b \\hbox{ significa } a \\hbox{ es menor o igual que } b.\\]';

$string['alg_indices_name'] = 'Las leyes de los índices';
$string['alg_indices_fact'] = 'Las siguientes leyes rigen la manipulación de índices:\\n\\[a^ma^n = a^{m+n}\\]\\n\\[\\frac{a^m}{a^n} = a^{m-n}\\]\\n\\[(a^m)^n = a^{mn}\\]\\n\\[a^0 = 1\\]\\n\\[a^{-m} = \\frac{1}{a^m}\\]\\n\\[a^{\\frac{1}{n}} = \\sqrt[n]{a}\\]\\n\\[a^{\\frac{m}{n}} = \\left(\\sqrt[n]{a}\\right)^m\\]';

$string['alg_logarithms_name'] = 'Las leyes de los logaritmos';
$string['alg_logarithms_fact'] = 'Para cualquier base \\(c>0\\) con \\(c \\ne 1\\):\\n\\[\\log_c(a) = b \\mbox{, significa } a = c^b\\]\\n\\[\\log_c(a) + \\log_c(b) = \\log_c(ab)\\]\\n\\[\\log_c(a) - \\log_c(b) = \\log_c\\left(\\frac{a}{b}\\right)\\]\\n\\[n\\log_c(a) = \\log_c\\left(a^n\\right)\\]\\n\\[\\log_c(1) = 0\\]\\n\\[\\log_c(c) = 1\\]\\nLa fórmula para un cambio de base es:\\n\\[\\log_a(x) = \\frac{\\log_b(x)}{\\log_b(a)}\\]\\nLos logaritmos en base \\(e\\), denotados \\(\\log_e\\) o alternativamente \\(\\ln\\) se llaman logaritmos naturales. La letra \\(e\\) representa la constante exponencial que es aproximadamente \\(2.718\\).';

$string['alg_quadratic_formula_name'] = 'La fórmula cuadrática';
$string['alg_quadratic_formula_fact'] = 'Si tenemos una ecuación cuadrática de la forma:\\n\\[ax^2 + bx + c = 0,\\]\\nentonces la(s) solución(es) a esa ecuación dada(s) por la fórmula cuadrática son:\\n\\[x = \\frac{-b \\pm \\sqrt{b^2 - 4ac}}{2a}.\\]';

$string['alg_partial_fractions_name'] = 'Fracciones parciales';
$string['alg_partial_fractions_fact'] = 'Las fracciones propias ocurren con \\[{{\\frac{P(x)}{Q(x)}}}\\]\\ncuando \\(P\\) y \\(Q\\) son polinomios con el grado de \\(P\\) menor que el grado de \\(Q\\). En este caso, procedemos\\ncomo sigue: escriba \\(Q(x)\\) en forma factorizada,\\n\\n* un <em>factor lineal</em> \\(ax+b\\) en el denominador produce una fracción parcial de la forma \\[{{\\frac{A}{ax+b}}.\\n* unos <em>factores lineales repetidos</em> \\((ax+b)^2\\) en el denominador\\nproducen fracciones parciales de la forma \\[{A\\over ax+b}+{B\\over (ax+b)^2}.\\n* un <em>factor cuadrático</em> \\(ax^2+bx+c\\)\\nen el denominador produce una fracción parcial de\\nla forma \\[{Ax+B\\over ax^2+bx+c}\\]\\n* Las <em>fracciones impropias</em> requieren un término adicional\\nque es un polinomio de grado \\(n-d\\) donde \\(n\\) es\\nel grado del numerador (es decir, \\(P(x)\\)) y \\(d\\) es el grado del\\ndenominador (es decir, \\(Q(x)\\)).\\n';

$string['trig_degrees_radians_name'] = 'Grados y radianes';
$string['trig_degrees_radians_fact'] = '\\[\\n360^\\circ= 2\\pi \\hbox{ radianes},\\quad\\n1^\\circ={2\\pi\\over 360}={\\pi\\over 180}\\hbox{ radianes}\\n\\]\\n\\[\\n1 \\hbox{ radian} = {180\\over \\pi} \\hbox{ grados}\\n\\approx 57.3^\\circ\\n\\]';

$string['trig_standard_values_name'] = 'Valores trigonométricos estándar';
$string['trig_standard_values_fact'] = '\\n\\[\\sin(45^\\circ)={1\\over \\sqrt{2}}, \\qquad \\cos(45^\\circ) = {1\\over \\sqrt{2}},\\qquad\\n\\tan( 45^\\circ)=1\\n\\]\\n\\[\\n\\sin (30^\\circ)={1\\over 2}, \\qquad \\cos (30^\\circ) ={\\sqrt{3}\\over 2},\\qquad\\n\\tan (30^\\circ)={1\\over \\sqrt{3}}\\n\\]\\n\\[\\n\\sin (60^\\circ)={\\sqrt{3}\\over 2}, \\qquad \\cos (60^\\circ)={1\\over 2},\\qquad\\n\\tan (60^\\circ)={ \\sqrt{3}}\\n\\]';

$string['trig_standard_identities_name'] = 'Identidades trigonométricas estándar';
$string['trig_standard_identities_fact'] = '\\[\\sin(a\\pm b)\\  =  \\sin(a)\\cos(b)\\ \\pm\\ \\cos(a)\\sin(b)\\]\\n \\\[\\cos(a\\ \\pm\\ b)\\  =  \\cos(a)\\cos(b)\\ \\mp \\sin(a)\\sin(b)\\]\\n \\\[\\tan (a\\ \\pm\\ b)\\  =  \\frac{\\tan (a)\\ \\pm\\ \\tan (b)}{1\\ \\mp\\ \\tan (a)\\tan (b)}\\]\\n \\\[ 2\\sin(a)\\cos(b)\\  =  \\sin(a+b)\\ +\\ \\sin(a-b)\\]\\n \\\[ 2\\cos(a)\\cos(b)\\  =  \\cos(a-b)\\ +\\ \\cos(a+b)\\]\\n \\\[ 2\\sin(a)\\sin(b)\\  =  \\cos(a-b)\\ -\\ \\cos(a+b)\\]\\n \\\[ \\sin^2(a)+\\cos^2(a)\\  = \\ 1\\]\\n \\\[ 1+{\\rm cot}^2(a)\\  = \\ {\\rm cosec}^2(a),\\quad \\tan^2(a) +1 \\ = \\ \\sec^2(a)\\]\\n \\\[ \\cos(2a)\\  = \\ \\cos^2(a)-\\sin^2(a)\\  = \\ 2\\cos^2(a)-1\\  = \\ 1-2\\sin^2(a)\\]\\n \\\[ \\sin(2a)\\  = \\ 2\\sin(a)\\cos(a)\\]\\n \\\[ \\sin^2(a)\\  = \\ \\frac{1-\\cos (2a)}{2}, \\qquad \\cos^2(a)\\  = \\ \\frac{1+\\cos(2a)}{2}\\]';

$string['hyp_functions_name'] = 'Funciones hiperbólicas';
$string['hyp_functions_fact'] = 'Las funciones hiperbólicas tienen propiedades similares a las trigonométricas pero se pueden representar en forma exponencial como sigue:\\n \\[ \\cosh(x)      = \\frac{e^x+e^{-x}}{2}, \\qquad \\sinh(x)=\\frac{e^x-e^{-x}}{2} \\]\\n \\[ \\tanh(x)      = \\frac{\\sinh(x)}{\\cosh(x)} = \\frac{{e^x-e^{-x}}}{e^x+e^{-x}} \\]\\n \\[ {\\rm sech}(x) ={1\\over \\cosh(x)}={2\\over {{\\rm e}^x+{{\rm e}}^{-x}}}, \\qquad  {\\rm cosech}(x)= {1\\over \\sinh(x)}={2\\over {{\\rm e}^x-{{\rm e}}^{-x}}} \\]\\n \\[ {\\rm coth}(x) ={\\cosh(x)\\over \\sinh(x)} = {1\\over {\\rm tanh}(x)} ={{{ {{\\rm e}^x+{{\rm e}}^{-x}}}\\} \\over {\\{ {{\\rm e}^x-{{\rm e}}^{-x}}}}}\\]';

$string['hyp_identities_name'] = 'Identidades hiperbólicas';
$string['hyp_identities_fact'] = 'La similitud entre la forma en que se comportan las funciones hiperbólicas y trigonométricas es evidente al observar algunas identidades hiperbólicas básicas:\\n  \\[{{\\rm e}^x=\\cosh(x)+\\sinh(x), \\quad {{\rm e}}^{-x}=\\cosh(x)-\\sinh(x)}\\]\\n  \\[\\cosh^2(x) -\\sinh^2(x) = 1\\]\\n  \\[1-{{\rm tanh}}^2(x)={{\rm sech}}^2(x)\\]\\n  \\[{{\rm coth}}^2(x)-1={{\rm cosech}}^2(x)\\]\\n  \\[\\sinh(x\\pm y)=\\sinh(x)\\ \\cosh(y)\\ \\pm\\ \\cosh(x)\\ \\sinh(y)\\]\\n  \\[\\cosh(x\\pm y)=\\cosh(x)\\ \\cosh(y)\\ \\pm\\ \\sinh(x)\\ \\sinh(y)\\]\\n  \\[\\sinh(2x)=2\\,\\sinh(x)\\cosh(x)\\]\\n  \\[\\cosh(2x)=\\cosh^2(x)+\\sinh^2(x)\\]\\n  \\[\\cosh^2(x)={{\\cosh(2x)+1}\\over 2}\\]\\n  \\[\\sinh^2(x)={{\\cosh(2x)-1}\\over 2}\\]';

$string['hyp_inverse_functions_name'] = 'Funciones hiperbólicas inversas';
$string['hyp_inverse_functions_fact'] = '\\[\\cosh^{-1}(x)=\\ln\\left(x+\\sqrt{x^2-1}\\right) \\quad \\mbox{ para } x\\geq 1\\]\\n \\\[\\sinh^{-1}(x)=\\ln\\left(x+\\sqrt{x^2+1}\\right)\\]\\n \\\[\\tanh^{-1}(x) = \\frac{1}{2}\\ln\\left({1+x\\over 1-x}\\right) \\quad \\mbox{ para } -1< x < 1\\]';

$string['calc_diff_standard_derivatives_name'] = 'Derivadas estándar';
$string['calc_diff_standard_derivatives_fact'] = 'La siguiente tabla muestra las derivadas de algunas funciones estándar. Es útil aprender estas derivadas estándar ya que se utilizan con frecuencia en cálculo.\\n\\n|\\(f(x)\\)|\\(f\'(x)\\)|\\n|--- |--- |\\n|\\(k\\), constante|\\(0\\)|\\n|\\(x^n\\), cualquier constante \\(n\\)|\\(nx^{n-1}\\)|\\n|\\(e^x\\)|\\(e^x\\)|\\n|\\(\\ln(x)=\\log_{\\rm e}(x)\\)|\\(\\frac{1}{x}\\)|\\n|\\(\\sin(x)\\)|\\(\\cos(x)\\)|\\n|\\(\\cos(x)\\)|\\(-\\sin(x)\\)|\\n|\\(\\tan(x) = \\frac{\\sin(x)}{\\cos(x)}\\)|\\(\\sec^2(x)\\)|\\n|\\(cosec(x)=\\frac{1}{\\sin(x)}\\)|\\(-cosec(x)\\cot(x)\\)|\\n|\\(\\sec(x)=\\frac{1}{\\cos(x)}\\)|\\(\\sec(x)\\tan(x)\\)|\\n|\\(\\cot(x)=\\frac{\\cos(x)}{\\sin(x)}\\)|\\(-cosec^2(x)\\)|\\n|\\(\\cosh(x)\\)|\\(\\sinh(x)\\)|\\n|\\(\\sinh(x)\\)|\\(\\cosh(x)\\)|\\n|\\(\\tanh(x)\\)|\\(sech^2(x)\\)|\\n|\\(sech(x)\\)|\\(-sech(x)\\tanh(x)\\)|\\n|\\(cosech(x)\\)|\\(-cosech(x)\\coth(x)\\)|\\n|\\(coth(x)\\)|\\(-cosech^2(x)\\)|\\n\\n \\[ \\frac{d}{dx}\\left(\\sin^{-1}(x)\\right) =  \\frac{1}{\\sqrt{1-x^2}}\\]\\n \\[ \\frac{d}{dx}\\left(\\cos^{-1}(x)\\right) =  \\frac{-1}{\\sqrt{1-x^2}}\\]\\n \\[ \\frac{d}{dx}\\left(\\tan^{-1}(x)\\right) =  \\frac{1}{1+x^2}\\]\\n \\[ \\frac{d}{dx}\\left(\\cosh^{-1}(x)\\right) =  \\frac{1}{\\sqrt{x^2-1}}\\]\\n \\[ \\frac{d}{dx}\\left(\\sinh^{-1}(x)\\right) =  \\frac{1}{\\sqrt{x^2+1}}\\]\\n \\[ \\frac{d}{dx}\\left(\\tanh^{-1}(x)\\right) =  \\frac{1}{1-x^2}\\]\\n';

$string['calc_diff_linearity_rule_name'] = 'La regla de linealidad para la diferenciación';
$string['calc_diff_linearity_rule_fact'] = '\\[{{\\rm d}\\,\\over {{\\rm d}}x}\\big(af(x)+bg(x)\\big)=a{{\\rm d}f(x)\\over {{\\rm d}}x}+b{{\\rm d}g(x)\\over {{\\rm d}}x}\\quad a,b {{\\rm\\  constante.}\\].';

$string['calc_product_rule_name'] = 'La regla del producto';
$string['calc_product_rule_fact'] = 'La siguiente regla permite diferenciar funciones que se multiplican entre sí. Suponga que deseamos diferenciar \\(f(x)g(x)\\) con respecto a \\(x\\).\\n\\[ \\frac{{\\mathrm{d}}}{\\mathrm{d}{x}} \\big(f(x)g(x)\\big) = f(x) \\cdot \\frac{{\\mathrm{d}} g(x)}{\\mathrm{d}{x}}  + g(x)\\cdot \\frac{{\\mathrm{d}} f(x)}{\\mathrm{d}{x}},\\] o, usando notación alternativa, \\[ (f(x)g(x))\' = f\'(x)g(x)+f(x)g\'(x). \\].';

$string['calc_quotient_rule_name'] = 'La regla del cociente';
$string['calc_quotient_rule_fact'] = 'La regla del cociente para la diferenciación establece que para dos funciones diferenciables cualquiera \\(f(x)\\) y \\(g(x)\\),\\n \\[\\frac{d}{dx}\\left(\\frac{f(x)}{g(x)}\\right)=\\frac{g(x)\\cdot\\frac{df(x)}{dx}\\ \\ -\\ \\ f(x)\\cdot \\frac{dg(x)}{dx}}{g(x)^2}. \\].';

$string['calc_chain_rule_name'] = 'La regla de la cadena';
$string['calc_chain_rule_fact'] = 'La siguiente regla permite encontrar la derivada de una composición de dos funciones.\\nSuponga que tenemos una función \\(f(g(x))\\), entonces definiendo \\(u=g(x)\\), la derivada con respecto a \\(x\\) está dada por:\\n\\[\\frac{df(g(x))}{dx} = \\frac{dg(x)}{dx}\\cdot\\frac{df(u)}{du}.\\]\\nAlternativamente, podemos escribir:\\n\\[\\frac{df(x)}{dx} = f\'(g(x))\\cdot g\'(x).\\]\\n';

$string['calc_rules_name'] = 'Reglas de cálculo';
$string['calc_rules_fact']  = '\\<b>La regla del producto\\</b><br />La siguiente regla permite diferenciar funciones que se multiplican entre sí. Suponga que deseamos diferenciar \\(f(x)g(x)\\) con respecto a \\(x\\).\\n\\[ \\frac{{\\mathrm{d}}}{\\mathrm{d}{x}} \\big(f(x)g(x)\\big) = f(x) \\cdot \\frac{{\\mathrm{d}} g(x)}{\\mathrm{d}{x}}  + g(x)\\cdot \\frac{{\\mathrm{d}} f(x)}{\\mathrm{d}{x}},\\] o, usando notación alternativa, \\[ (f(x)g(x))\' = f\'(x)g(x)+f(x)g\'(x). \\]\\n\\<b>La regla del cociente\\</b><br />La regla del cociente para la diferenciación establece que para dos funciones diferenciables cualquiera \\(f(x)\\) y \\(g(x)\\),\\n\\[\\frac{d}{dx}\\left(\\frac{f(x)}{g(x)}\\right)=\\frac{g(x)\\cdot\\frac{df(x)}{dx}\\ \\ -\\ \\ f(x)\\cdot \\frac{dg(x)}{dx}}{g(x)^2}. \\]\\n\\<b>La regla de la cadena\\</b><br />La siguiente regla permite encontrar la derivada de una composición de dos funciones.\\nSuponga que tenemos una función \\(f(g(x))\\), entonces definiendo \\(u=g(x)\\), la derivada con respecto a \\(x\\) está dada por:\\n\\[\\frac{df(g(x))}{dx} = \\frac{dg(x)}{dx}\\cdot\\frac{df(u)}{du}.\\]\\nAlternativamente, podemos escribir:\\n\\[\\frac{df(x)}{dx} = f\'(g(x))\\cdot g\'(x).\\]\\n';

$string['calc_int_standard_integrals_name'] = 'Integrales estándar';
$string['calc_int_standard_integrals_fact'] = '\\n\\n\\[\\int k\\ dx = kx +c, \\mbox{ donde k es constante.}\\]\\n\\[\\int x^n\\ dx  = \\frac{x^{n+1}}{n+1}+c, \\quad (n\\ne -1)\\]\\n\\[\\int x^{-1}\\ dx = \\int {\\frac{1}{x}}\\ dx = \\ln(|x|)+c = \\ln(k|x|) = \\left\\{\\matrix{\\ln(x)+c & x>0\\cr\\n\\ln(-x)+c & x<0\\cr}\\right.\\]\\n\\n|\\(f(x)\\)|\\(\\int f(x)\\ dx\\)|||\\n|--- |--- |--- |\\n|\\(e^x\\)|\\(e^x+c\\)|||\\n|\\(\\cos(x)\\)|\\(\\sin(x)+c\\)|||\\n|\\(\\sin(x)\\)|\\(-\\cos(x)+c\\)|||\\n|\\(\\tan(x)\\)|\\(\\ln(\\sec(x))+c\\)|\\(-\\frac{\\pi}{2} < x < \\frac{\\pi}{2}\\)|\\n|\\(\\sec x\\)|\\(\\ln (\\sec(x)+\\tan(x))+c\\quad\\)|\\( -{\\pi\\over 2}< x < {\\frac{\\pi}{2}}\\||\\n|\\(\\mbox{cosec}(x)\\)|\\(\\ln (\\mbox{cose}c(x)-\\cot(x))+c\\quad\\)   |\\(0 < x < \\pi\\)|\\ncot\\,\\,x\\)|\\(\\ln(\\sin(x))+c\\)|\\(0< x< \\pi\\)|\\n|\\(\\cosh(x)\\)|\\(\\sinh(x)+c\\)|||\\n|\\(\\sinh(x)\\)|\\(\\cosh(x) + c\\)|||\\n|\\(\\tanh(x)\\)|\\(\\ln(\\cosh(x))+c\\)|||\\n|\\(\\mbox{coth}(x)\\)|\\(\\ln(\\sinh(x))+c \\)|\\(x>0\\)|\\n|\\({1\\over x^2+a^2}\\)|\\({1\\over a}\\tan^{-1}{x\\over a}+c\\)|\\(a>0\\)|\\n|\\({1\\over x^2-a^2}\\)|\\({1\\over 2a}\\ln{x-a\\over x+a}+c\\)|\\(|x|>a>0\\)|\\n|\\({1\\over a^2-x^2}\\)|\\({1\\over 2a}\\ln{a+x\\over a-x}+c\\)|\\(|x|)\\)\\)\\)|\\n|\\(\\frac{1}{\\sqrt{x^2+a^2}}\\)|\\(\\sinh^{-1}\\left(\\frac{x}{a}\\right) + c\\)|\\(a>0\\)|\\n|\\({1\\over \\sqrt{x^2-a^2}}\\)|\\(\\cosh^{-1}\\left(\\frac{x}{a}\\right) + c\\)|\\(x\\geq a > 0\\)|\\n|\\({1\\over \\sqrt{x^2+k}}\\)|\\(\\ln (x+\\sqrt{x^2+k})+c\\)|||\\n|\\({1\\over \\sqrt{a^2-x^2}}\\)|\\(\\sin^{-1}\\left(\\frac{x}{a}\\right)+c\\)|\\(-a\\leq x\\leq a\\)|\\n';

$string['calc_int_linearity_rule_name'] = 'La regla de linealidad para la integración';
$string['calc_int_linearity_rule_fact'] = '\\[\\int \\left(af(x)+bg(x)\\right){{\\rm d}}x = a\\int\\!\\!f(x)\\,{{\\rm d}}x\\n\\,\\+\\,b\\int \\!\\!g(x)\\,{{\\rm d}}x, \\quad (a,b \\,\\, {{\rm constante.}})\\n\\]';

$string['calc_int_methods_substitution_name'] = 'Integración por sustitución';
$string['calc_int_methods_substitution_fact'] = '\\[\\n\\int f(u){{\\rm d}}u\\over {{\\rm d}}x}{{\\rm d}}x=\\int f(u){{\\rm d}}u\\n\\quad\\hbox{y}\\quad \\int_a^bf(u){{\\rm d}}u\\over {{\\rm d}}x}\\,{{\\rm\\nd}}x = \\int_{u(a)}^{u(b)}f(u){{\\rm d}}u.\\n\\]';

$string['calc_int_methods_parts_name'] = 'Integración por partes';
$string['calc_int_methods_parts_fact'] = '\\[\\n\\int_a^b u{{\\rm d}}v\\over {{\\rm d}}x}{{\\rm d}}x=\\left[uv\\right]_a^b-\\n\\int_a^b{{\\rm d}}u\\over {{\\rm d}}x}v\\,{{\\rm d}}x\\]\\no alternativamente: \\\[\\int_a^bf(x)g(x)\\,{{\\rm d}}x=\\left[f(x)\\,\\int\\ng(x){{\\rm d}}x\\right]_a^b -\\int_a^b{{\\rm d}}f\\over {{\\rm\\nd}}x}\\left\\{\\int g(x){{\\rm d}}x\\right\\}\\,{{\\rm d}}x.\\]';

$string['calc_int_methods_parts_indefinite_name'] = 'Integración por partes';
$string['calc_int_methods_parts_indefinite_fact'] = '\\[\\n\\int u{{\\rm d}}v\\over {{\\rm d}}x}{{\\rm d}}x=uv-\\n\\int{{\\rm d}}u\\over {{\\rm d}}x}v\\,{{\\rm d}}x\\]\\no alternativamente: \\\[\\int f(x)g(x)\\,{{\\rm d}}x=f(x)\\,\\int\\ng(x){{\\rm d}}x -\\int {{\\rm d}}f\\over {{\\rm d}}x}\\left\\{\\int g(x){{\\rm d}}x\\right\\}\\,{{\\rm d}}x.\\]';

$string['Illegal_singleton_power'] = 'Esta entrada requiere un valor numérico presentado en una de las siguientes formas: <code>{$a->forms}</code>';
$string['Illegal_singleton_floats'] = 'Esta entrada no acepta números decimales en el formato dado. Esta entrada requiere un valor numérico presentado en una de las siguientes formas: <code>{$a->forms}</code>';
$string['Illegal_singleton_integer'] = 'Esta entrada no acepta valores enteros. Esta entrada requiere un valor numérico presentado en una de las siguientes formas: <code>{$a->forms}</code>';

$string['castext_debug_header_key'] = 'Nombre de la variable';
$string['castext_debug_header_value_simp'] = 'Valor simplificado';
$string['castext_debug_header_value_no_simp'] = 'Valor';
$string['castext_debug_header_disp_simp'] = 'Valor mostrado simplificado';
$string['castext_debug_header_disp_no_simp'] = 'Valor mostrado';
$string['castext_debug_no_vars'] = '¡Esta pregunta no tiene variables de pregunta para depurar!';

$string['castext_error_header'] = 'Falló la representación del contenido de texto.';
$string['castext_error_unevaluated'] = 'Este contenido de texto nunca fue evaluado.';
