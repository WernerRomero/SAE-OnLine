<!Doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <?php include 'inc/head_common.inc'; ?>
        <link rel="stylesheet" href="css/tema-inicio.css">

        <title>SAE-OnLine</title>
    </head>
    <body>
        <?php include 'inc/header.inc'; ?>

        <div class="container inicio">
            <div class="row">
                <!-- Menu Lateral -->
                <div class="col-xs-12 col-sm-4">
                    <!-- Contenidos -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Contenidos</h3>
                        </div>
                        <!-- Inicio de las Unidades -->
                        <div class="panel-body">
                            <!-- Panel Unidades Eléctricas -->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Unidades Eléctricas</div>
                                    <div class="panel-body">
                                        <div class="list-group">
                                            <details>
                                                <summary class="list-group-item list-group-item-success">
                                                    Propiedad Eléctrica de los Materiales
                                                </summary>
                                                <div class="list-group">
                                                    <a href="#Materiales_Conductores" class="list-group-item list-group-item-success       ">Materiales Conductores</a>
                                                    <a href="#Materiales_Semi-conductores" class="list-group-item list-group-item-info     ">Materiales Semi-conductores</a>
                                                    <a href="#Materiales_Super-Conductores" class="list-group-item list-group-item-warning ">Materiales Super-Conductores</a>
                                                    <a href="#Materiales_Aislantes" class="list-group-item list-group-item-danger          ">Materiales Aislantes</a>
                                                    <a href="#Conductividad" class="list-group-item list-group-item-success                ">Conductividad</a>
                                                    <a href="#Resistividad" class="list-group-item list-group-item-info                    ">Resistividad</a>
                                                </div>
                                            </details>
                                            <a href="#Ley_de_Ohm" class="list-group-item list-group-item-info                              ">Resistencia Eléctrica. Ley Ohm</a>
                                            <a href="#Corriente_Alterna" class="list-group-item list-group-item-warning                    ">Corriente Alterna</a>
                                            <a href="#Corriente_Directa" class="list-group-item list-group-item-danger                     ">Corriente Directa</a>
                                        </div>
                                    </div>
                                </div>
                            <!--  Panel Componentes Electronicos -->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Componentes Eléctronicos</div>
                                    <div class="panel-body">
                                        <div class="list-group">
                                            <a href="#Resistores" class="list-group-item list-group-item-success                           ">Resistores</a>
                                            <a href="#Capacitores" class="list-group-item list-group-item-info                             ">Capacitores</a>
                                            <a href="#Bobina" class="list-group-item list-group-item-warning                               ">Bobinas</a>
                                            <a href="#Transformador" class="list-group-item list-group-item-danger                         ">El Transformador</a>
                                        </div>
                                    </div>
                                </div>
                            <!--  Panel Circuitos con Diodo -->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Circuitos con Diodo</div>
                                    <div class="panel-body">
                                        <div class="list-group">
                                            <a href="#Diodo" class="list-group-item list-group-item-success                               ">Diodo de uso Común</a>
                                            <a href="#DiodoR" class="list-group-item list-group-item-info                                 ">Rectificadores</a>
                                            <a href="#Zener" class="list-group-item list-group-item-warning                               ">El diodo Zener</a>
                                            <a href="#Led" class="list-group-item list-group-item-danger                                  ">Diodo LED</a>
                                            <a href="#Varicap" class="list-group-item list-group-item-success                             " >Diodo Varicap</a>
                                            <a href="#Fotodiodo" class="list-group-item list-group-item-info                              ">Fotodiodo</a>
                                        </div>
                                    </div>
                                </div>

                            <!--  El Transistor -->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">El Transitor</div>
                                    <div class="panel-body">
                                        <div class="list-group">
                                            <a href="#El_transistor" class="list-group-item list-group-item-success                       ">El Transitor</a>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>

                <!-- Contenido -->
                <div class="col-xs-12 col-sm-8">
                    <!-- Propiedad electrica de los materiales -->
                        <div class="panel-body">
                            <div class="panel panel-primary">
                                <div class="panel-heading text-center">Propiedad Eléctrica de los Materiales</div>
                                <div class="panel-body">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item text-center list-group-item-success " name="Materiales_Conductores">Materiales Conductores</a>
                                            <h4>Conductor Electrico</h4>
                                            <p> Un conductor eléctrico es un material que ofrece poca resistencia al movimiento de carga eléctrica. </p>
                                            <br>
                                            <div class="img-center"><img src="img/conductor.jpg" alt="Conductor"></div>
                                            <p>
                                                Son materiales cuya resistencia al paso de la electricidad es muy baja. 
                                                Los mejores conductores eléctricos son metales como: <mark>el cobre, el oro, el hierro y el aluminio, y sus aleaciones,</mark>
                                                aunque existen otros materiales no metálicos que también poseen la propiedad de conducir la electricidad, 
                                                como el grafito o las disoluciones y soluciones salinas (por ejemplo, el agua de mar) o 
                                                cualquier material en estado de plasma. 
                                            </p>
                                            <br>
                                            <div class="img-center"><img src="img/conductor1.jpg" alt="Conductor"></div>
                                            <p>
                                                Los Materiales conductores suelen utilizarse para el transporte de energía eléctrica, 
                                                así como para cualquier instalación de uso doméstico o industrial,
                                                el mejor conductor es el cobre (en forma de cables de uno o varios hilos). 
                                                Aunque la plata es el mejor conductor, pero debido a su precio elevado no se usa con tanta frecuencia. 
                                                También se puede usar el aluminio, metal que si bien tiene una conductividad eléctrica del orden del 60% 
                                                de la del cobre, es sin embargo un material tres veces más ligero, por lo que su empleo está más indicado
                                                en líneas aéreas que en la transmisión de energía eléctrica en las redes de alta tensión.
                                                A diferencia de lo que mucha gente cree, el oro es levemente peor conductor que el cobre; 
                                                sin embargo, se utiliza en bornes de baterías y conectores eléctricos debido a su durabilidad y 
                                                “resistencia” a la corrosión.
                                            </p>
                                            <br>
                                            <div class="img-center"><img src="img/conductor2.jpg" alt="Conductor"></div>
                                            <br>
                                            <h5> Aplicaciones de los conductores </h5>
                                            <ol>
                                                <li>Conducir la electricidad de un punto a otro (pasar electrones a través del conductor; los electrones fluyen debido a la diferencia de potencial).</li>
                                                <li>Crear campos electromagnéticos al constituir bobinas y electroimanes.</li>
                                                <li>Modificar la tensión al constituir transformadores.</li>
                                            </ol>
                                        <a href="#" class="list-group-item text-center list-group-item-info " name="Materiales_Semi-conductores">Materiales Semi-conductores</a>
                                            <h4>Semi-conductor Eléctrico</h4>
                                            <p>
                                                Semiconductor es un elemento que se comporta como un conductor o como un aislante dependiendo de diversos factores, 
                                                como por ejemplo el campo eléctrico o magnético, la presión, la radiación que le incide,
                                                o la temperatura del ambiente en el que se encuentre.
                                            </p>
                                            <br>
                                            <div class="img-center"><img src="img/semiconductor.jpg" alt="Semiconductor"></div>
                                            <p>
                                                Los semiconductores son materiales cuya conductancia eléctrica puede ser controlada de forma permanente o 
                                                dinámica variando su estado desde conductor a aislante.
                                            </p>
                                            <br>
                                            <div class="img-center"><img src="img/semiconductor1.jpg" alt="Semiconductor"></div>
                                            <br>
                                            <h5> Elementos Semiconductores </h5>
                                            <ol>
                                                <li>Diamante (C)</li>
                                                <li>Silicio (Si)</li>
                                                <li>Germanio (Ge)</li>
                                            </ol>
                                        <a href="#" class="list-group-item text-center list-group-item-warning" name="Materiales_Super-Conductores">Materiales Super-Conductores</a>
                                            <h4>Super-conductores o Superconductividad</h4>
                                            <p>
                                                Un superconductor es un material que no opone resistencia al flujo de corriente eléctrica por él.
                                            </p>
                                            <br>
                                            <div class="img-center"><img src="img/superconductor.jpg" alt="Semiconductor"></div>

                                            <p>
                                                La superconductividad es una propiedad presente en muchos metales y 
                                                algunas cerámicas, que aparece a bajas temperaturas,
                                                caracterizada por la pérdida de resistividad a partir de cierta temperatura característica de cada material, 
                                                denominada temperatura crítica. 
                                            </p>
                                            <br>
                                            <div class="img-center"><img src="img/superconductor1.jpg" alt="Semiconductor"></div>
                                        <a href="#" class="list-group-item text-center list-group-item-danger" name="Materiales_Aislantes">Materiales Aislantes</a>
                                            <h4>Aislantes Eléctrico</h4>
                                            <p>
                                                Es un material con escasa capacidad de conducción de la electricidad, 
                                                utilizado para separar conductores eléctricos evitando un cortocircuito y 
                                                para mantener alejadas del usuario determinadas partes de los sistemas eléctricos que de tocarse accidentalmente 
                                                cuando se encuentran en tensión pueden producir una descarga.
                                            </p>
                                            <br>
                                            <div class="img-center"><img src="img/aislante.jpg" alt="Semiconductor"><img src="img/aislante1.jpg" alt="Semiconductor"><img src="img/aislante2.jpg" alt="Semiconductor"></div>
                                        <a href="#" class="list-group-item text-center list-group-item-success" name="Conductividad">Conductividad</a>
                                            <h4>Conductividad Eléctrica</h4>
                                            <p>
                                                La conductividad eléctrica es la medida de la capacidad (o de la aptitud) de un material para dejar pasar 
                                                (o dejar circular) libremente la corriente eléctrica. La conductividad depende de la estructura atómica y 
                                                molecular del material. Los metales son buenos conductores porque tienen una estructura con muchos electrones 
                                                con vínculos débiles, y esto permite su movimiento. La conductividad también depende de otros factores 
                                                físicos del propio material, y de la temperatura.
                                            </p>
                                            <div class="img-center"><img src="img/conductividad.png" alt="Conductividad"></div>
                                            <br>
                                            <p>
                                                La conductividad es la inversa de la resistividad; por tanto, 
                                                sigma = <mark style="font-weight: bold; font-size: 18px; background-color: #fff";> σ=1/ρ </mark>, 
                                                y su unidad es el S/m (siemens por metro) o Ω−1·m−1. 
                                                Usualmente, la magnitud de la conductividad (σ) es la proporcionalidad entre 
                                                el campo eléctrico <mark style="font-weight: bold; font-size: 18px; background-color: #fff;">E</mark> 
                                                y la densidad de corriente de conducción 
                                                <mark style="font-weight: bold; font-size: 18px; background-color: #fff;">J</mark>: 
                                                <mark style="font-weight: bold; font-size: 18px; background-color: #fff";>J=σE</mark>
                                            </p>
                                            <br>
                                            <div class="img-center"><img src="img/conductividad1.jpg" alt="Conductividad"></div>
                                            <br>
                                            <h5>Conductividad en medios líquidos</h5>
                                            <p>
                                                La conductividad electrolítica en medios líquidos (Disolución) está relacionada con la presencia de sales en solución, 
                                                cuya disociación genera iones positivos y negativos capaces de transportar la energía eléctrica si se somete el líquido 
                                                a un campo eléctrico. Estos conductores iónicos se denominan electrolitos o conductores electrolíticos.
                                            </p>

                                            <br>
                                            <h5>Conductividad en medios sólidos</h5>
                                            <p>
                                                Según la teoría de bandas de energía en sólidos cristalinos, son materiales conductores aquellos en los que 
                                                las bandas de valencia y conducción se superponen, formándose una nube de electrones libres causante 
                                                de la corriente al someter al material a un campo eléctrico. Estos medios conductores se denominan conductores eléctricos.                                                
                                            </p>
                                            <p>
                                                La Comisión Electrotécnica Internacional definió como patrón de la conductividad eléctrica:
                                                <mark>Un hilo de cobre de 1 metro de longitud y un gramo de masa, que da una resistencia de 0,15388 Ω a 20 °C</mark> 
                                                al que asignó una conductividad eléctrica de 100 % IACS (International Annealed Cooper Standard, 
                                                Estándar Internacional de Cobre Recocido). A toda aleación de cobre con una conductividad mayor que 100 % IACS 
                                                se le denomina de alta conductividad (H.C. por sus siglas inglesas).
                                            </p>
                                        <a href="#" class="list-group-item text-center list-group-item-info " name="Resistividad">Resistividad</a>
                                            <h4>Resistividad Eléctrica</h4>
                                            <p>
                                                La resistividad: Es la resistencia eléctrica específica de cada material para oponerse al paso de una corriente eléctrica. 
                                                Se designa por la letra griega rho minúscula (ρ) y se mide en ohmios metro (Ω•m)
                                            </p>
                                            <div class="img-center"><img src="img/resistividad.jpg" alt="Resistividad"></div>
                                            <p>
                                                <mark style="font-weight: bold; font-size: 18px; background-color: #fff;">ρ=R(S/L)</mark> <br>
                                                En donde  <mark style="font-weight: bold; font-size: 18px; background-color: #fff;">R</mark>  
                                                es la resistencia en ohms,  <mark style="font-weight: bold; font-size: 18px; background-color: #fff;">S</mark>  
                                                la sección transversal en m² y  <mark style="font-weight: bold; font-size: 18px; background-color: #fff;">l</mark>  
                                                la longitud en m. 
                                                Su valor describe el comportamiento de un material frente al paso de corriente eléctrica, 
                                                por lo que da una idea de lo buen o mal conductor que es. Un valor alto de resistividad indica 
                                                que el material es mal conductor mientras que uno bajo indicará que es un buen conductor.j
                                            </p>
                                            <div class="img-center"><img src="img/resistividad1.jpg" alt="Resistividad"></div>
                                        <a href="#" class="list-group-item text-center list-group-item-success " name="Ley_de_Ohm">Ley de Ohm</a>
                                           <br>
                                           <p>
                                                La ley de Ohm, postulada por el físico y matemático alemán Georg Simon Ohm, 
                                                es una ley de la electricidad. Establece que la intensidad de la corriente 
                                                <mark style="font-weight: bold; font-size: 18px; background-color: #fff;">I</mark> que circula por un 
                                                conductor es proporcional a la diferencia de potencial 
                                                <mark style="font-weight: bold; font-size: 18px; background-color: #fff;">V</mark> 
                                                que aparece entre los extremos del citado conductor. 
                                                Ohm completó la ley introduciendo la noción de resistencia eléctrica 
                                                <mark style="font-weight: bold; font-size: 18px; background-color: #fff;">R</mark>; 
                                                esta es el coeficiente de proporcionalidad que aparece en la relación entre 
                                                <mark style="font-weight: bold; font-size: 18px; background-color: #fff;">I</mark> y 
                                                <mark style="font-weight: bold; font-size: 18px; background-color: #fff;">V</mark>
                                            </p>
                                            <div class="img-center"><img src="img/ley_de_ohm.jpg" alt="Ley de Ohm"></div>
                                            <br>
                                            <p>
                                                La Ley de Ohm, postulada por el físico y matemático alemán Georg Simon Ohm, 
                                                es una de las leyes fundamentales de la electrodinámica, 
                                                estrechamente vinculada a los valores de las unidades básicas presentes en 
                                                cualquier circuito eléctrico como son:
                                                <br>
                                                <ol>
                                                    <li>Tensión o voltaje "V", en volt (V).</li>
                                                    <li>Intensidad de la corriente "  I ", en ampere (A).</li>
                                                    <li>Resistencia "R" en ohm (Ω) de la carga o consumidor conectado al circuito.</li>
                                                </ol>
                                            </p>
                                            <div class="img-center"><img src="img/ley_de_ohm1.jpg" alt="Ley de Ohm"></div>
                                            <br>
                                        <a href="#" class="list-group-item text-center list-group-item-danger" name="Corriente_Alterna">Corriente Alterna </a>
                                            <h4>Corriente Alterna</h4>
                                            <p>
                                                Se denomina corriente alterna (abreviada CA en español y AC en inglés,
                                                de alternating current) a la corriente eléctrica en la que la magnitud 
                                                y el sentido varían cíclicamente. La forma de oscilación de la corriente
                                                alterna más comúnmente utilizada es la de una oscilación senoidal, puesto
                                                que se consigue una transmisión más eficiente de la energía. Sin embargo,
                                                en ciertas aplicaciones se utilizan otras formas de oscilación periódicas,
                                                tales como la triangular o la cuadrada.
                                            </p>
                                            <br>
                                            <div class="img-center"><img src="img/alterna.png" alt="Corriente Alterna">
                                                <img src="img/alternacion.gif" alt="Corriente Alterna"></div>
                                            <br>
                                            <p>
                                                Utilizada genéricamente, la CA se refiere a la forma en la cual la electricidad
                                                llega a los hogares y a las industrias. Sin embargo, las señales de audio y de 
                                                radio transmitidas por los cables eléctricos, son también ejemplos de corriente 
                                                alterna. En estos usos, el fin más importante suele ser la transmisión y 
                                                recuperación de la información codificada (o modulada) sobre la señal de la CA.                                                
                                            </p>
                                            <br>
                                            <p>
                                                <h5>VENTAJAS DE LA CORRIENTE ALTERNA</h5>
                                                <br>
                                                <ol>
                                                    <li>Generadores y motores mas baratos y eficientes, y menos complejos</li>
                                                    <li>Posibilidad de transformar su tensión de manera simple y barata 
                                                      (transformadores)</li>
                                                    <li>Posibilidad de transporte de grandes cantidades de energía a 
                                                        largas distancias con un mínimo de sección de conductores ( a alta tensión)</li>
                                                    <li>Posibilidad de motores muy simples, (como el motor de inducción asíncrono 
                                                        de rotor en cortocircuito)</li>
                                                    <li>Desaparición o minimización de algunos fenómenos eléctricos indeseables 
                                                        (magnetización en las maquinas, y polarizaciones y corrosiones electrolíticas 
                                                        en pares metálicos)</li>
                                                </ol>
                                            </p>
                                        <a href="#" class="list-group-item text-center list-group-item-success" name="Corriente_Directa">Corriente Directa o Continua </a>
                                            <h4>Corriente Directa</h4>
                                            <p>
                                                La corriente continua (CC en español, en inglés DC, de Direct Current) se refiere al 
                                                flujo continuo de carga electrica a través de un conductor entre dos puntos de distinto 
                                                potencial, que no cambia de sentido con el tiempo. A diferencia de la corriente alterna 
                                                (CA en español, AC en inglés, de Alternating Current), en la corriente continua las 
                                                cargas eléctricas circulan siempre en la misma dirección. Aunque comúnmente se identifica 
                                                la corriente continua con una corriente constante, es continua toda corriente que mantenga 
                                                siempre la misma polaridad, así disminuya su intensidad conforme se va consumiendo la 
                                                carga (por ejemplo cuando se descarga una batería eléctrica).
                                                <br>
                                                <br>
                                                También se dice corriente continua cuando los electrones se mueven siempre en el mismo 
                                                sentido, el flujo se denomina corriente continua y va (por convenio) del polo positivo 
                                                al negativo
                                            </p>

                                             <div class="img-center">
                                                <img src="img/continua.png" alt="Corriente Directa">
                                                <img src="img/Corriente continua.gif" alt="Corriente Continua">
                                            </div>

                                             <p>
                                                 Fuentes suministradoras de corriente directa o continua. Las baterías comúnmente 
                                                 utilizadas en los coches y todo tipo de vehículo motorizado. 
                                                 Pilas de amplio uso, lo mismo en linternas que en aparatos y dispositivos eléctricos y electrónicos.
                                             </p>

                                             <div class="img-center">
                                                <img src="img/bateria.jpg" alt="Baterias">
                                                <img src="img/baterias.jpg" alt="Baterias">
                                            </div>

                                            <h5>VENTAJAS DE LA CORRIENTE CONTINUA</h5>
                                            <ol>
                                                <li>Se puede almacenar en baterías</li>
                                                <li>Mucho menos peligrosa que la corriente alterna</li>
                                            </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Resistencia Electrica -->
                        <div class="panel-body">
                            <div class="panel panel-primary">
                                <div class="panel-heading text-center">Componentes Electronicos</div>
                                <div class="panel-body">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item text-center list-group-item-info " name="Resistores">Resistores</a>
                                            <h4>Resistor</h4>
                                            <p>
                                                Se denomina resistor al componente electrónico diseñado para introducir una 
                                                resistencia eléctrica determinada entre dos puntos de un circuito eléctrico.
                                                En el propio argot eléctrico y electrónico, son conocidos simplemente como resistencias.
                                                En otros casos, como en las planchas, calentadores, etc., se emplean resistencias 
                                                para producir calor aprovechando el efecto Joule.
                                                <br>
                                                Es un material formado por carbón y otros elementos resistivos para disminuir la 
                                                corriente que pasa. Se opone al paso de la corriente. La corriente máxima y diferencia 
                                                de potencial máxima en un resistor viene condicionada por la máxima potencia que pueda disipar su cuerpo.                                    
                                            </p>
                                            <div class="img-center">
                                                <img src="img/resistor.png" alt="Resistor">
                                                <img src="img/simbolo.png" alt="Simbolo">
                                                <img src="img/resistencia.png" alt="Simbolo">
                                            </div>
                                            <p>
                                                Existen resistores de valor manualmente ajustable, llamados potenciómetros, 
                                                reostatos o simplemente resistencias variables. También se producen dispositivos 
                                                cuya resistencia varía en función de parámetros externos, como los termistores, 
                                                que son resistores que varían con la temperatura; los varistores que dependen de la 
                                                tensión a la cual son sometidos, o las fotorresistencias que lo hacen de acuerdo a la luz recibida.
                                            </p>
                                           <h5>Código de Colores</h5>
                                           <p>
                                               Para caracterizar un resistor hacen falta tres valores: resistencia eléctrica, disipación máxima y 
                                               precisión o tolerancia. Estos valores se indican normalmente en el encapsulado dependiendo del tipo 
                                               de éste; para el tipo de encapsulado axial, el que se observa en las fotografías, dichos valores 
                                               van rotulados con un código de franjas de colores.
                                               <br>
                                               Estos valores se indican con un conjunto de rayas de colores sobre el cuerpo del elemento. Son tres, 
                                               cuatro o cinco rayas; dejando la raya de tolerancia (normalmente plateada o dorada) a la derecha, se 
                                               leen de izquierda a derecha. La última raya indica la tolerancia (precisión). De las restantes, la última 
                                               es el multiplicador y las otras indican las cifras significativas del valor de la resistencia.
                                               <br>
                                               El valor de la resistencia eléctrica se obtiene leyendo las cifras como un número de una, dos o tres cifras;
                                               se multiplica por el multiplicador y se obtiene el resultado en Ohmios (Ω). El coeficiente de temperatura 
                                               únicamente se aplica en resistencias de alta precisión o tolerancia menor del 1%.
                                           </p>
                                           <div class="codcolor"><img src="img/codigoC.gif" alt="Código de Colores" width="80%"  ></div>
                                           <h5>Como leer el valor de un Resistor</h5>
                                           <p>
                                              En una resistencia tenemos generalmente 4 líneas de colores, aunque podemos encontrar algunas que 
                                              contenga 5 líneas (4 de colores y 1 que indica tolerancia).
                                              <br>
                                              <li>Vamos a tomar como ejemplo la más general, las de 4 líneas.</li>
                                              <li>Con la banda correspondiente a la tolerancia a la derecha, leemos las bandas restantes 
                                              de izquierda a derecha, como sigue.</li>
                                              <li>Las primeras dos bandas conforman un número entero de dos cifras</li>
                                            <br>
                                              <li>La primera línea representa el dígito de las decenas.</li>
                                              <li>La segunda línea representa el dígito de las unidades.</li>
                                            <br>
                                              Luego:
                                            <br>
                                              La tercera línea representa la potencia de 10 por la cual se multiplica el número.
                                              El resultado numerico se expresa en Ohms.
                                            <br>
                                             <h5>Por ejemplo:</h5>
                                            <ul>
                                              <li>Observamos la primera línea: verde= 5</li>
                                            
                                              <li>Observamos la segunda línea: amarillo= 4</li>
                                           
                                             <li>Observamos la tercera línea: rojo= 2 o 100</li>
                                            </ul>

                                              Unimos los valores de las primeras dos líneas y multiplicamos por el valor de la tercera
                                              54 X 10^2 = 5400Ω o 5,4 kΩ y este es el valor de la resistencia expresada en Ohmios
                                           </p>
                                        <a href="#" class="list-group-item text-center list-group-item-warning" name="Capacitores">Capacitor</a>
                                            <h4>Condensador o Capacitor</h4>
                                            <p>
                                                Un condensador eléctrico o capacitor es un dispositivo pasivo, utilizado en electricidad 
                                                y electrónica, capaz de almacenar energía sustentando un campo eléctrico.
                                                Está formado por un par de superficies conductoras, generalmente en forma de láminas o 
                                                placas, en situación de influencia total (esto es, que todas las líneas de campo eléctrico 
                                                que parten de una van a parar a la otra) separadas por un material dieléctrico o por el vacío.
                                                Las placas, sometidas a una diferencia de potencial, adquieren una determinada carga eléctrica, 
                                                positiva en una de ellas y negativa en la otra, siendo nula la variación de carga total.
                                                <br>
                                                Aunque desde el punto de vista físico un condensador no almacena carga ni corriente eléctrica, 
                                                sino simplemente energía mecánica latente; al ser introducido en un circuito se comporta en la 
                                                práctica como un elemento "capaz" de almacenar la energía eléctrica que recibe durante el periodo 
                                                de carga, la misma energía que cede después durante el periodo de descarga.
                                            </p>
                                            <div class="img-center"><img src="img/capacitor.jpg" alt="Condensador"><img src="img/simbolo capacitor.jpg" alt="Capacitor"></div>
                                            <h5>Diferencia entre un condensador o capacitor y una bateria</h5>
                                            <p>
                                                Un capacitor o condensador se asemeja mucho a una batería, pues al igual que ésta su función 
                                                principal es almacenar energía eléctrica, pero de forma diferente.
                                                <br>
                                                <br>
                                                En una batería a plena carga, la disponibilidad de energía se obtiene por medio de una reacción 
                                                química que ocurre en su interior cuando le conectamos algún dispositivo consumidor de electricidad.
                                                <br>
                                                <br>
                                                Antes de agotar la carga, el tiempo de actividad de una batería depende de los siguientes factores:
                                                
                                                <li>Capacidad en ampere-hora (A-h) o miliampere-hora (mA-h) que posea para almacenar energía eléctrica.</li>
                                                <li>Consumo en watt o en miliwatt del consumidor de corriente eléctrica que tenga conectado.</li>
                                                <li>Tiempo que mantengamos el consumidor conectado a la misma.</li>
                                                <br>
                                                En el caso de las baterías “recargables”, una vez agotada la carga se puede recuperar de nuevo conectándola 
                                                a un cargador de corriente directa apropiado para cada tipo específico. En dependencia del tamaño, 
                                                voltaje o tensión de trabajo y capacidad en A-h que ésta posea, la recuperación de la carga puede demorar 
                                                entre una y varias horas.
                                                <br>
                                                <br>
                                                El capacitor constituye un componente pasivo que, a diferencia de la batería, se carga de forma 
                                                instantánea en cuanto la conectamos a una fuente de energía eléctrica, pero no la retiene por mucho tiempo. 
                                                Su descarga se produce también de forma instantánea cuando se encuentra conectado en un circuito eléctrico 
                                                o electrónico energizado con corriente. Una vez que se encuentra cargado, si éste no se emplea de inmediato 
                                                se autodescarga en unos pocos minutos.
                                                <br>
                                                En resumen, la función de un capacitor es almacenar cargas eléctricas de forma instantánea y liberarla 
                                                de la misma forma en el preciso momento que se requiera.
                                                <h5>Tipos de Condensadores</h5>
                                            </p>
                                            <div class="img-center">
                                                <img src="img/tipos de condensador.jpg" alt="Tipos de Condensdores">
                                                <img src="img/condensador moderno.png" alt="Condensadores Modernos">
                                            </div>
                                        <a href="#" class="list-group-item text-center list-group-item-danger" name="Bobina">Bobina</a>
                                            <h4>Bobinas</h4>
                                            <p>
                                                Un inductor, bobina o reactor es un componente pasivo de un circuito eléctrico que, 
                                                debido al fenómeno de la autoinducción, almacena energía en forma de campo magnético.
                                                <br>
                                                Un inductor está constituido normalmente por una bobina de conductor, típicamente 
                                                alambre o hilo de cobre esmaltado. Existen inductores con núcleo de aire o con 
                                                núcleo hecho de material ferroso (por ejemplo, acero magnético), para incrementar 
                                                su capacidad de magnetismo.
                                                <br>
                                                <br>
                                                Los inductores también pueden estar construidos en circuitos integrados, usando 
                                                el mismo proceso utilizado para realizar microprocesadores. En estos casos se usa, 
                                                comúnmente, el aluminio como material conductor. Sin embargo, es raro que se construyan 
                                                inductores dentro de los circuitos integrados; es mucho más práctico usar un circuito 
                                                llamado "girador" que, mediante un amplificador operacional, hace que un condensador 
                                                se comporte como si fuese un inductor.
                                            </p>
                                            <div class="img-center"><img src="img/bobina.jpg" alt="bobinas"><img src="img/simbolo bobina.jpg" alt="bobinas"></div>
                                            <p>
                                                <ul>
                                                    <h5>El inductor consta de las siguientes partes:</h5>
                                                    <li>Devanado inductor: Es el conjunto de espiras destinado a producir el 
                                                        flujo magnético, al ser recorrido por la corriente eléctrica.</li>
                                                     <li>Culata: Es una pieza de sustancia ferromagnética, no rodeada 
                                                        por devanados, y destinada a unir los polos de la máquina.</li>
                                                    <li>Pieza polar: Es la parte del circuito magnético situada entre la 
                                                        culata y el entrehierro, incluyendo el núcleo y la expansión polar.</li>
                                                    <li>Núcleo: Es la parte del circuito magnético rodeada por el devanado inductor.</li>
                                                    <li>Expansión polar: Es la parte de la pieza polar próxima al inducido y que bordea al entrehierro.</li>
                                                    <li>Polo auxiliar o de conmutación: Es un polo magnético suplementario, provisto o no, de devanados y 
                                                        destinado a mejorar la conmutación. Suelen emplearse en las máquinas de mediana y gran potencia.</li>
                                                </ul>
                                                <h4>Tipos de Bobinas</h4>
                                                    <h5>Fijas</h5>
                                                    <br>
                                                    Con núcleo de aire
                                                    <br>
                                                    El conductor se arrolla sobre un soporte hueco y posteriormente se retira este quedando con un 
                                                    aspecto parecido al de un muelle. Se utiliza en frecuencias elevadas.
                                                    Estas bobinas pueden tener tomas intermedias, en este caso se pueden considerar como 2 o 
                                                    más bobinas arrolladas sobre un mismo soporte y conectadas en serie. 
                                                    <br>
                                                    <br>
                                                    Con núcleo sólido
                                                    <br>
                                                    Poseen valores de inductancia más altos que los anteriores debido a su nivel 
                                                    elevado de permeabilidad magnética. El núcleo suele ser de un material ferromagnético. 
                                                    Los más usados son la ferrita y el ferroxcube. Cuando se manejan potencias considerables
                                                    y las frecuencias que se desean eliminar son bajas se utilizan núcleos parecidos a los de 
                                                    los transformadores (en fuentes de alimentación sobre todo).
                                                    <br>
                                                    <br>
                                                    <h5>Variables</h5>
                                                    <br>
                                                    También se fabrican bobinas ajustables. Normalmente la variación de inductancia se produce 
                                                    por desplazamiento del núcleo.
                                                    Las bobinas blindadas pueden ser variables o fijas, consisten encerrar la bobina dentro de 
                                                    una cubierta metálica cilíndrica o cuadrada, cuya misión es limitar el flujo electromagnético 
                                                    creado por la propia bobina y que puede afectar negativamente a los componentes cercanos a la misma.
                                            <div class="img-center"><img src="img/bobinas.jpg" alt="bobinas"><img src="img/bobinas1.jpg" alt="bobinas"></div>
                                            </p>
                                        <a href="#" class="list-group-item text-center list-group-item-success"name="Transformador">El Transformador</a>
                                            <h4>El Transdormador</h4>
                                            <p>
                                                Se denomina transformador a un dispositivo eléctrico que permite aumentar o disminuir la 
                                                tensión en un circuito eléctrico de corriente alterna, manteniendo la potencia. 
                                                La potencia que ingresa al equipo, en el caso de un transformador ideal (esto es, sin pérdidas), 
                                                es igual a la que se obtiene a la salida. Las máquinas reales presentan un pequeño porcentaje 
                                                de pérdidas, dependiendo de su diseño y tamaño, entre otros factores.
                                                <br>
                                                <br>
                                                El transformador es un dispositivo que convierte la energía eléctrica alterna de un cierto 
                                                nivel de tensión, en energía alterna de otro nivel de tensión, basándose en el fenómeno de 
                                                la inducción electromagnética. Está constituido por dos bobinas de material conductor, 
                                                devanadas sobre un núcleo cerrado de material ferromagnético, pero aisladas entre sí 
                                                eléctricamente. La única conexión entre las bobinas la constituye el flujo magnético 
                                                común que se establece en el núcleo. El núcleo, generalmente, es fabricado bien sea de 
                                                hierro o de láminas apiladas de acero eléctrico, aleación apropiada para optimizar el flujo magnético.
                                            </p>
                                            <div class="img-center"><img src="img/transformador.jpg" alt="Transformador"><img src="img/simbolo transformador.png" alt="Simbolo del Transformador"></div>
                                            <p>
                                                <h5>Transformadores Trifasicos</h5>
                                                Existen muchos tipos de transformadores, entre los cuales el transformador trifásico tiene una importancia indudable. 
                                                Este tipo de transformador se ocupa tanto en generación cerca de los generadores 
                                                para elevar la insuficiente tensión de estos, así como también en transmisión 
                                                por líneas de transmisión y en distribución en donde se transporta la energía 
                                                eléctrica a voltajes menores hacia casas, comercio e industria. 
                                                Todos los transformadores desde la generadora hasta la entrada de nuestros hogares o 
                                                industrias son transformadores trifásicos.
                                                <br>
                                                <br>
                                                Un transformador trifásico consta de tres fases desplazadas en 120 grados, en sistemas 
                                                equilibrados tienen igual magnitud. Una fase consiste en un polo positivo y negativo por 
                                                el que circula una corriente alterna. No es necesario decir que un transformador no funciona 
                                                con corriente continua, puesto que para que exista un voltaje V debe haber una variación del 
                                                flujo. V = N dΦ/dt donde N es el número de espiras del lado de alta o baja tensión del transformador.
                                                El término dΦ/dt es una derivada del flujo, o en términos simples la variación del flujo magnético.
                                            </p>
                                            <p>
                                                <h4>Tipos de Transformadores</h4>
                                                <h5>Transformador elevador/reductor de tensión</h5>
                                                Son empleados por empresas de generación eléctrica en las subestaciones de la red de transporte de 
                                                energía eléctrica, con el fin de disminuir las pérdidas por efecto Joule. Debido a la resistencia 
                                                de los conductores, conviene transportar la energía eléctrica a tensiones elevadas, lo que origina 
                                                la necesidad de reducir nuevamente dichas tensiones para adaptarlas a las de utilización. La mayoría 
                                                de los dispositivos electrónicos en hogares hacen uso de transformadores reductores conectados a un 
                                                circuito rectificador de onda completa para producir el nivel de tensión de corriente directa que necesitan. 
                                                Este es el caso de las fuentes de alimentación de equipos de audio, video y computación.
                                                <br>
                                                <h5>Transformadores variables</h5>
                                                También llamados "Variacs", toman una línea de tensión fija (en la entrada) y proveen de tensión de salida variable ajustable, dentro de dos valores.
                                                <br>
                                                <h5>Transformador de aislamiento</h5>
                                                Proporciona aislamiento galvánico entre el primario y el secundario, de manera que consigue una alimentación o señal "flotante". Suele tener una relación 1:1 entre las tensiones del primario y secundario. Se utiliza principalmente como medida de protección, en equipos que trabajan directamente con la tensión de red y también para acoplar señales procedentes de sensores lejanos, en equipos de electromedicina y donde se necesitan tensiones flotantes.
                                                <br>
                                                <h5>Transformador de alimentación</h5>
                                                Pueden tener una o varias bobinas secundarias y proporcionan las tensiones necesarias para el funcionamiento del equipo. A veces incorpora un fusible que corta su circuito primario cuando el transformador alcanza una temperatura excesiva, evitando que éste se queme, con la emisión de humos y gases que conlleva el riesgo de incendio. Estos fusibles no suelen ser reemplazables, de modo que hay que sustituir todo el transformador.
                                                <br>
                                                <h5>Transformador trifásico</h5>
                                                Tienen tres bobinados en su primario y tres en su secundario. Pueden adoptar forma de estrella (Y) (con hilo de neutro o no) o delta -triángulo- (Δ) y las combinaciones entre ellas: Δ-Δ, Δ-Y, Y-Δ y Y-Y. Hay que tener en cuenta que aún con relaciones 1:1, al pasar de Δ a Y o viceversa, las tensiones de fase varían.
                                                <br>
                                                Delta estrella: Se usa especialmente en distribución (baja tensión) con delta en alta y estrella en baja con neutro accesible. Esto permite que la onda sinusoidal de tercera armónica se mantenga circulando por la delta, pero no se transmita a las estrella.
                                            </p>
                                            <div class="img-center"><img src="img/transformador1.jpg" alt="Transformador">
                                                 <img src="img/tipos de transformador.jpg" alt="Tipos de Transformador"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Diodos -->
                        <div class="panel-body">
                            <div class="panel panel-primary">
                                <div class="panel-heading text-center">Circuito Con diodo</div>
                                <div class="panel-body">
                                    <div class="list-group">
                                        <a href="#" class="text-center list-group-item list-group-item-info " name="Diodo">Diodo de Uso Común</a>
                                            <h4>Diodo Común</h4>
                                            <p>
                                                Un diodo es un componente electrónico de dos terminales que permite la circulación de la corriente 
                                                eléctrica a través de él en un solo sentido. Este término generalmente se usa para referirse al diodo 
                                                semiconductor, el más común en la actualidad; consta de una pieza de cristal semiconductor conectada 
                                                a dos terminales eléctricos. El diodo de vacío (que actualmente ya no se usa, excepto para tecnologías 
                                                de alta potencia) es un tubo de vacío con dos electrodos: una lámina como ánodo, y un cátodo.
                                            </p>
                                            <p>
                                                El diodo semiconductor se forma uniendo los materiales tipo N y tipo P, los cuales deben estar 
                                                construidos a partir del mismo material base, el cual puede ser Ge o Si. En el momento en que 
                                                dos materiales son unidos (uno tipo N y el otro tipo P), los electrones y los huecos que están en, 
                                                o cerca de, la región de "unión", se combinan y esto da como resultado una carencia de portadores 
                                                (tanto como mayoritarios como minoritarios) en la región cercana a la unión. Esta región de iones 
                                                negativos y positivos descubiertos recibe el nombre de Región de Agotamiento por la ausencia de portadores.
                                            </p>
                                            <div class="img-center"><img src="img/diodo comun.png" alt="diodo comun">
                                                    <img src="img/simbolo diodo.png" alt="Simbolo Diodo ">
                                                    <img src="img/diodoC.jpg" alt="Diodo "></div>
                                        <a href="#" class=" text-center list-group-item list-group-item-warning" name="DiodoR">Diodo Rectificador</a>
                                            <h4>Diodo Rectificador</h4>
                                            <p>
                                                Un diodo rectificador es uno de los dispositivos de la familia de los diodos más sencillos. 
                                                El nombre diodo rectificador” procede de su aplicación, la cual consiste en separar los ciclos 
                                                positivos de una señal de corriente alterna.
                                            </p>
                                            <p>
                                                Un diodo es un dispositivo semiconductor que permite el paso de la corriente 
                                                eléctrica en una única dirección con características similares a un interruptor. De forma simplificada, 
                                                la curva característica de un diodo (I-V) consta de dos regiones: por debajo de cierta diferencia de 
                                                potencial, se comporta como un circuito abierto (no conduce), y por encima de ella como un circuito 
                                                cerrado con una resistencia eléctrica muy pequeña. Debido a este comportamiento, se les suele denominar
                                                rectificadores, ya que son dispositivos capaces de suprimir la parte negativa de cualquier señal, como 
                                                paso inicial para convertir una corriente alterna en corriente continua.
                                            </p>
                                            <p>
                                                Su construcción está basada en la unión PN siendo su principal aplicación como rectificadores. 
                                                Este tipo de diodos (normalmente de silicio) soportan elevadas temperaturas (hasta 200ºC en la unión), 
                                                siendo su resistencia muy baja y la corriente en tensión inversa muy pequeña.
                                            </p>
                                            <p>
                                                El diodo más antiguo y utilizado es el diodo rectificador que conduce en un sentido, 
                                                pero se opone a la circulación de corriente en el sentido opuesto.
                                            </p>
                                            <p>
                                                Se utiliza para obtener respuestas rápidas y es muy útil para la detección de averías.
                                            </p>
                                            <p>
                                                Una vez que el diodo entra en conducción se considera que la tensión aumenta linealmente 
                                                con la corriente La curva del diodo se aproxima a una recta que pasa por 0,7 V y tiene una 
                                                pendiente cuyo valor es la inversa de la resistencia interna.
                                            </p>
                                            <h4>Diodo Rectificador de Media Onda</h4>
                                            <p>
                                                Para comprender mejor la forma en que funciona un semiconductor diodo, es necesario 
                                                recordar primero que la corriente alterna (C.A.) circula por el circuito eléctrico 
                                                formando una sinusoide, en la que medio ciclo posee polaridad positiva mientras y el 
                                                otro medio ciclo posee polaridad negativa. Es decir, cuando una corriente alterna 
                                                circula por un circuito eléctrico cerrado su polaridad cambia constantemente tantas 
                                                veces como ciclos o hertz por segundo de frecuencia posea. En el caso de la corriente 
                                                alterna que llega a nuestros hogares la frecuencia puede ser de 50 o de 60 ciclos en 
                                                dependencia del sistema que haya adoptado cada país en cuestión. En Europa la frecuencia 
                                                adoptada es de 50 ciclos y de 60 ciclos en la mayor parte de los países de América.
                                            </p>
                                            <div class="img-center"><img src="img/media onda.gif" alt="Diodo de Media honda"></div>
                                            <p>
                                                Animación de un circuito rectificador simple de media onda, compuesto por un solo diodo.
                                            </p>
                                            <p>
                                                En la animación de arriba se puede apreciar que en el proceso de rectificación de la 
                                                corriente alterna (C.A.) utilizando un solo diodo, durante un primer medio ciclo negativo 
                                                los electrones circularán por el circuito atravesando primero el diodo y a continuación 
                                                el consumidor o carga eléctrica, representado por una resistencia (R). En ese instante, 
                                                en los extremos de la resistencia se podrá detectar una corriente directa "pulsante" que 
                                                responde a ese medio ciclo. En el medio ciclo siguiente (esta vez positivo), los electrones 
                                                cambiarán su sentido de circulación y no podrán atravesar ni la resistencia, ni el 
                                                semiconductor diodo, porque en ese instante el camino estará bloqueado por el terminal 
                                                positivo del diodo y no habrá circulación de corriente por el circuito. A continuación y 
                                                durante el medio ciclo siguiente negativo, de nuevo el diodo vuelve a permitir el paso 
                                                de los electrones, para bloquearlo nuevamente al cambiar la corriente el sentido de 
                                                circulación y así sucesivamente mientras se continúe suministrándole corriente al diodo.
                                            </p>
                                            <h4>Diodo Rectificador de Onda Completa</h4>
                                            <p>
                                                Cuando un circuito eléctrico o electrónico requiere de una corriente directa que no sea 
                                                pulsante, sino mucho más lineal que la que permite un simple rectificador de media onda, 
                                                es posible combinar de dos a cuatro diodos rectificadores de forma tal que la resultante 
                                                sea una corriente directa (C.D.) con menos oscilaciones residuales.
                                            </p>
                                            <div class="img-center"><img src="img/onda.gif" alt="Onda Completa"></div>
                                            <p>
                                                La estructura más usual para obtener un puente rectificador de "onda completa" es 
                                                la compuesta por cuatro diodos conectados de forma conveniente. Sin embargo, en algunos 
                                                casos se obtiene un efecto similar conectando solamente dos diodos, empleando como fuente 
                                                de suministro de corriente alterna (C.A.) un transformador con una derivación en el centro 
                                                del enrollado secundario. Esa derivacióncentral permite alimentar por igual a cada uno de 
                                                los diodos gracias a su simetría en contrafase que hace  posible  que el punto medio del 
                                                enrollado sea siempre el polo negativo mientras el polo positivo cambia en  sus  extremos 
                                                cada medio ciclo de frecuencia alterna de la corriente aplicada al circuito.  Sin  
                                                embargo,  a la  salida  del circuito rectificador se obtiene una corriente directa (C.D.) 
                                                de onda completa. 
                                            </p>
                                            <div class="img-center"><img src="img/ondaA.gif" alt="Onda Completa"></div>
                                            <p>
                                                Animación del funcionamiento de un circuito rectificador de corriente alterna de 
                                                onda completa compuesto por dos diodos de silicio.
                                            </p>
                                            <p>
                                                Un puente rectificador de cuatro diodos funciona de la siguiente forma: como se puede 
                                                observar en la parte (A) de la ilustración, durante el primer medio ciclo negativo (–) 
                                                de la corriente que proporciona la fuente de suministro alterna (C.A.) conectada al 
                                                puente rectificador, los electrones atraviesan primero el diodo (1), seguidamente el 
                                                consumidor (R) y después el diodo (2) para completar así la circulación de la corriente de 
                                                electrones por una mitad del circuito correspondiente al puente rectificador.
                                            </p>
                                            <div class="img-center"><img src="img/puente.gif" alt="Puente"></div>
                                            <p>
                                                Como aclaración, al llegar los electrones en su recorrido al punto de conexión (a), no 
                                                pueden atravesar el diodo (4) porque, de acuerdo con la colocación que éste ocupa en el 
                                                circuito, bloqueará o impedirá la circulación de los electrones en ese sentido.
                                            </p>
                                            <p>
                                                Una vez que los electrones continúan su recorrido, al llegar al punto de conexión (b), 
                                                tampoco pueden atravesar el diodo (4), porque la corriente de electrones nunca circula en 
                                                dirección a su propio encuentro (de forma similar a como ocurre con la corriente de agua 
                                                en un río), sino que siempre se mueve en dirección al polo opuesto de la fuente de suministro 
                                                que le proporciona la energía eléctrica, o sea, el polo positivo de la corriente alterna (C.A.) en este caso.
                                            </p>
                                            <p>
                                                En la parte (B) de la ilustración podemos ver que la corriente alterna cambia la polaridad y, 
                                                por tanto, el sentido de circulación de los electrones. En esta ocasión, los electrones 
                                                atraviesan primeramente el diodo (3), a continuación atraviesan el consumidor (R) y, 
                                                por último, el diodo (4) para retornar a la fuente de suministro eléctrico y completar 
                                                así el circuito. De forma similar a lo ocurrido en el ciclo anterior, ahora el diodo (1) 
                                                es el encargado de bloquearle el paso a los electrones para que se puedan dirigir en 
                                                dirección al consumidor (R), mientras que el diodo (2) tampoco pueden atravesarlo los electrones, 
                                                porque no pueden ir a su propio encuentro, tal como ocurre en el medio ciclo anterior.
                                            </p>
                                            <div class="img-center"><img src="img/puenteA.gif" alt="Puente"></div>
                                        <a href="#" class="list-group-item list-group-item-danger text-center " name="Zener">Diodo Zener</a>
                                            <h4>Diodo Zener</h4>
                                            <p>
                                                El diodo Zener es un diodo de cromo que se ha construido para que funcione en 
                                                las zonas de rupturas, recibe ese nombre por su inventor, el Dr. Clarence Melvin Zener. 
                                                El diodo Zener es la parte esencial de los reguladores de tensión casi constantes con 
                                                independencia de que se presenten grandes variaciones de la tensión de red, de la resistencia de carga y temperatura.
                                            <br>
                                                Su principal aplicación es como regulador de tensión; es decir, como circuito que 
                                                mantiene la tensión de salida casi constante, independientemente de las variaciones 
                                                que se presenten en la línea de entrada o del consumo de corriente de las cargas 
                                                conectadas en la salida del circuito.
                                            </p>
                                            <p>
                                                Si a un diodo Zener se le aplica una corriente eléctrica del ánodo al cátodo (polarización directa) 
                                                toma las características de un diodo rectificador básico(la mayoría de casos), pero si se le 
                                                suministra corriente eléctrica de cátodo a ánodo (polarización inversa), el diodo solo dejara pasar una tensión constante.
                                            </p>
                                            <p>
                                                El diodo zéner tiene la propiedad de mantener constante la tensión aplicada, aun cuando la corriente sufra 
                                                cambios. Para que el diodo zener pueda realizar esta función, debe polarizarse de manera inversa.
                                            </p>
                                                <br>
                                            <p>
                                                En conclusión: el diodo Zener debe ser polarizado al revés para que adopte su característica de regulador de tensión.
                                            </p>
                                            <div class="img-center"><img src="img/zener.jpg" alt="Diodo Zener"><img src="img/zenerS.jpg" alt="Diodo Zener"></div>
                                        <a href="#" class="list-group-item text-center list-group-item-success" name="Led">Diodo Led</a>
                                            <h4>Diodo Led</h4>
                                            <p>
                                                El LED (Light-Emitting Diode: Diodo Emisor de Luz), es un dispositivo semiconductor que 
                                                emite luz incoherente de espectro reducido cuando se polariza de forma directa la unión 
                                                PN en la cual circula por él una corriente eléctrica . Este fenómeno es una forma de 
                                                electroluminiscencia, el LED es un tipo especial de diodo que trabaja como un diodo común, 
                                                pero que al ser atravesado por la corriente eléctrica, emite luz . Este dispositivo 
                                                semiconductor está comúnmente encapsulado en una cubierta de plástico de mayor resistencia 
                                                que las de vidrio que usualmente se emplean en las lámparas incandescentes. Aunque el plástico 
                                                puede estar coloreado, es sólo por razones estéticas, ya que ello no influye en el color de la 
                                                luz emitida. Usualmente un LED es una fuente de luz compuesta con diferentes partes, razón 
                                                por la cual el patrón de intensidad de la luz emitida puede ser bastante complejo.
                                            </p>
                                            <p>
                                                Para obtener una buena intensidad luminosa debe escogerse bien la corriente que atraviesa 
                                                el LED y evitar que este se pueda dañar; para ello, hay que tener en cuenta que el voltaje 
                                                de operación va desde 1,8 hasta 3,8 voltios aproximadamente (lo que está relacionado con 
                                                el material de fabricación y el color de la luz que emite) y la gama de intensidades que 
                                                debe circular por él varía según su aplicación. Los Valores típicos de corriente directa 
                                                de polarización de un LED están comprendidos entre los 10 y 20 miliamperios (mA) en los 
                                                diodos de color rojo y de entre los 20 y 40 miliamperios (mA) para los otros LED. Los diodos
                                                 LED tienen enormes ventajas sobre las lámparas indicadoras comunes, como su bajo consumo 
                                                 de energía, su mantenimiento casi nulo y con una vida aproximada de 100,000 horas. Para 
                                                 la protección del LED en caso haya picos inesperados que puedan dañarlo. Se coloca en 
                                                 paralelo y en sentido opuesto un diodo de silicio común.
                                            </p>
                                            <div class="img-center"><img src="img/led.jpg" alt="Led"><img src="img/leds.png" alt="Led">
                                                <img src="img/led3.jpg" alt="Led"></div>
                                            <p>
                                                La excelente variedad de colores en que se producen los ledes ha permitido el desarrollo de nuevas 
                                                pantallas electrónicas de texto monocromáticas, bicolores, tricolores y RGB (pantallas a todo color) 
                                                con la habilidad de reproducción de vídeo para fines publicitarios, informativos o para señalización.
                                            </p>
                                           <h5>Desventajas</h5>
                                            <p>
                                                Según un estudio reciente parece ser que los ledes que emiten una frecuencia de luz muy azul, 
                                                pueden ser dañinos para la vista y provocar contaminación lumínica.4 Los ledes con la potencia 
                                                suficiente para la iluminación de interiores son relativamente caros y requieren una corriente 
                                                eléctrica más precisa, por su sistema electrónico para funcionar con voltaje alterno, y 
                                                requieren de disipadores de calor cada vez más eficientes en comparación con las bombillas 
                                                fluorescentes de potencia equiparable.
                                            </p>
                                            <div class="img-center"><img src="img/led2.jpg" alt="Led"></div>
                                            <h5>Funcionaiento</h5>
                                            <p>
                                                Cuando un led se encuentra en polarización directa, los electrones pueden recombinarse con 
                                                los huecos en el dispositivo, liberando energía en forma de fotones. Este efecto es llamado 
                                                electroluminiscencia y el color de la luz (correspondiente a la energía del fotón) se determina 
                                                a partir de la banda de energía del semiconductor. Por lo general, el área de un led es muy 
                                                pequeña (menor a 1 mm2), y se pueden usar componentes ópticos integrados para formar su patrón de radiación.
                                            </p>
                                            <h5>Aplicación</h5>
                                            <p>
                                                Los ledes en la actualidad se pueden acondicionar o incorporarse en un porcentaje mayor al 
                                                90 % a todas las tecnologías de iluminación actuales, casas, oficinas, industrias, edificios, 
                                                restaurantes, arenas, teatros, plazas comerciales, gasolineras, calles y avenidas, estadios 
                                                (en algunos casos por las dimensiones del estadio no es posible porque quedarían espacios oscuros), 
                                                conciertos, discotecas, casinos, hoteles, carreteras, luces de tráfico o de semáforos, señalizaciones 
                                                viales, universidades, colegios, escuelas, estacionamientos, aeropuertos, sistemas híbridos, 
                                                celulares, pantallas de casa o domésticas, monitores, cámaras de vigilancia, supermercados, en 
                                                transportes (bicicletas, motocicletas, automóviles, camiones tráiler, etc.), en linternas de mano, 
                                                para crear pantallas electrónicas de led (tanto informativas como publicitarias) y para cuestiones 
                                                arquitectónicas especiales o de arte culturales. Todas estas aplicaciones se dan gracias a su diseño compacto.
                                            </p>
                                        <a href="#" class="text-center list-group-item list-group-item-info" name="Varicap">Diodo Varicap</a>
                                            <h4>Diodo Varicap</h4>
                                            <p>
                                                El diodo Varicap conocido como diodo de capacidad variable o varactor, es un diodo que aprovecha 
                                                determinadas técnicas constructivas para comportarse, ante variaciones de la tensión aplicada, como 
                                                un capacitor (o condensador) variable. Polarizado en inversa, este dispositivo electrónico presenta 
                                                características que son de suma utilidad en circuitos sintonizados (L-C), donde son necesarios los cambios de capacidad.
                                            </p>
                                            <p>
                                                Cuando un diodo Varicap es polarizado en inversa, la barrera de potencial o juntura que forman los 
                                                materiales N y P a partir del punto de unión de las junturas se produce una capacitancia. Visto en 
                                                forma metafórica y práctica, es el equivalente a dos placas de un capacitor que van separándose a 
                                                medida que la tensión de alimentación se incrementa. Este incremento de tensión provoca una disminución 
                                                de la capacidad equivalente final en los terminales del diodo (a mayor distancia entre placas, menor capacidad final).
                                            </p>
                                            <p>
                                                Para poder medir la capacitancia de estos diodos se puede recurrir a la formula de MBR
                                            </p>
                                            <p>
                                                Cd = C/[ raíz cuadrada de (1+2|Vd|)] =pF
                                            </p>
                                            <p>
                                                donde C = capacitancia del diodo con polarización inversa (Farads)
                                            </p>
                                            <p>
                                                Vd= magnitud del voltaje de polarización inversa del diodo (Volts) como esta entre barras el valor siempre es positivo
                                            </p>
                                            <p>
                                                Cd= C
                                            </p>
                                            <div class="img-center"><img src="img/varicapS.png" alt="Simbolo">
                                                <img src="img/varicap1.jpg" alt="Varicap"></div>
                                        <a href="#" class="text-center list-group-item list-group-item-warning"name="Fotodiodo">Fotodiodo</a>
                                            <h4>Fotodiodo</h4>
                                            <p>
                                                Un fotodiodo es un semiconductor construido con una unión PN, sensible a la incidencia de la luz visible o infrarroja. 
                                                Para que su funcionamiento sea correcto se polariza inversamente, con lo que se producirá una cierta circulación de 
                                                corriente cuando sea excitado por la luz. Debido a su construcción, los fotodiodos se comportan como células fotovoltaicas, 
                                                es decir, en ausencia de luz exterior generan una tensión muy pequeña con el positivo en el ánodo y el negativo en el 
                                                cátodo. Esta corriente presente en ausencia de luz recibe el nombre de corriente de oscuridad.
                                            </p>
                                            <div class="img-center"><img src="img/fotodiodo.jpg" alt="Fotodiodo"><img src="img/fotodiodoS.png" alt="Simbolo"></div>
                                            <p>
                                                Un fotodiodo es una unión PN o estructura P-I-N. Cuando un haz de luz de suficiente energía incide en el diodo, 
                                                excita un electrón dándole movimiento y crea un hueco con carga positiva. Si la absorción ocurre en la zona de 
                                                agotamiento de la unión, o a una distancia de difusión de él, estos portadores son retirados de la unión por 
                                                el campo de la zona de agotamiento, produciendo una fotocorriente.
                                                <br>
                                                Los diodos tienen un sentido normal de circulación de corriente, que se llama polarización directa. En ese 
                                                sentido el diodo deja pasar la corriente eléctrica y prácticamente no lo permite en el inverso. En el fotodiodo 
                                                la corriente (que varía con los cambios de la luz) es la que circula en sentido inverso al permitido por la 
                                                juntura del diodo. Es decir, para su funcionamiento el fotodiodo es polarizado de manera inversa. Se producirá 
                                                un aumento de la circulación de corriente cuando el diodo es excitado por la luz.
                                            </p>
                                            <h5>Uso</h5>
                                            <p>
                                                <li>A diferencia del LDR , el fotodiodo responde a los cambios de oscuridad a iluminación y viceversa 
                                                    con mucha más velocidad, y puede utilizarse en circuitos con tiempo de respuesta más pequeño.</li>
                                                <li>Se usa en los lectores de CD, recuperando la información grabada en el surco del Cd trans
                                                    formando la luz del haz láser reflejada en el mismo en impulsos eléctricos para ser procesados 
                                                    por el sistema y obtener como resultado los datos grabados.</li>
                                                <li>Usados en fibra óptica</li>
                                                <li>El fotodiodo se puede utilizar como dispositivo detector de luz, pues convierte la luz en 
                                                    electricidad y esta variación de electricidad es la que se utiliza para informar que hubo 
                                                    un cambio en el nivel de iluminación sobre el fotodiodo.</li>
                                            </p>
                                            <p>
                                                Si el fotodiodo quedara conectado, de manera que por él circule la corriente en el sentido de 
                                                la flecha (polarizado en sentido directo), la luz que lo incide no tendría efecto sobre él y se 
                                                comportaría como un diodo semiconductor normal.
                                                <br>
                                                La mayoría de los fotodiodos vienen equipados con un lente que concentra la cantidad de luz que 
                                                lo incide, de manera que su reacción a la luz sea más evidente.
                                                <br>
                                                A diferencia del LDR o fotorresistencia, el fotodiodo responde a los cambios de oscuridad a 
                                                iluminación y viceversa con mucha más velocidad, y puede utilizarse en circuitos con 
                                                tiempo de respuesta más pequeño.
                                                <br>
                                                Si se combina un fotodiodo con una transistor bipolar, colocando el fotodiodo entre el 
                                                colector y la base del transistor (con el cátodo del diodo apuntado al colector del transistor), 
                                                se obtiene el circuito equivalente de un fototransistor.
                                                <br>
                                                <div class="img-center"><img src="img/fotodiodo1.jpg" alt="Fotodiodo"><img src="IMG/fotodiodo2.jpg" alt="Fotodiodo"></div>
                                            </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- El transistor -->
                        <div class="panel-body">
                            <div class="panel panel-primary">
                                <div class="panel-heading text-center">Circuito Con diodo</div>
                                <div class="panel-body">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item text-center list-group-item-info " name="El_transistor">El transistor</a>
                                            <h4>El transistor</h4>
                                            <p>
                                                El transistor es un dispositivo electrónico semiconductor utilizado para entregar una señal de salida 
                                                en respuesta a una señal de entrada. Cumple funciones de amplificador, oscilador, conmutador o rectificador. 
                                                El término «transistor» es la contracción en inglés de transfer resistor («resistencia de transferencia»). 
                                                Actualmente se encuentran prácticamente en todos los aparatos electrónicos de uso diario: radios, televisores, 
                                                reproductores de audio y video, relojes de cuarzo, computadoras, lámparas fluorescentes, 
                                                tomógrafos, teléfonos celulares, entre otros.
                                            </p>
                                            <div class="img-center"><img src="img/transistor.jpg" alt="Transistor"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>






        <?php include 'inc/footer.inc'; ?>
        <?php include 'inc/footer_common.inc'; ?>
    </body>
</html>