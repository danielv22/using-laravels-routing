<?php
include_once "../storage/utilities.php";

use Illuminate\Support\Facades\Route;
use Storage\Utilities;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/paises', function () {
    $info = [
        'countries' => [
            'colombia' => [
                'capital' => 'Bogotá',
                'currency' => 'COP',
                'population' => '50880000',
                'description' => 'Colombia es un país del extremo norte de Sudamérica. Su paisaje cuenta con bosques tropicales,
                    las montañas de los Andes y varias plantaciones de café. En Bogotá, su capital a gran altura,
                    el distrito Zona Rosa es famoso por sus restaurantes y tiendas.'
            ],
            'mexico' => [
                'capital' => 'Ciudad de México',
                'currency' => 'MXN',
                'population' => '128900000',
                'description' => 'México es un país entre los Estados Unidos y América Central, conocido por las playas en el Pacífico
                    el golfo de México, y su diverso paisaje de montañas, desiertos y selvas. Las ruinas antiguas, como
                    Teotihuacán y la ciudad maya de Chichén Itzá, se distribuyen por el país, al igual que las ciudades
                    de la época colonial española. En la capital Ciudad de México, las elegantes tiendas, los famosos museos
                    y los restaurantes gourmet son parte de la vida moderna.'
            ],
            'estados_unidos' => [
                'capital' => 'Washington D.C',
                'currency' => 'USD',
                'population' => '329500000',
                'description' => 'Estados Unidos es un país de 50 estados que ocupa una extensa franja de América del Norte,
                    con Alaska en el noroeste y Hawái que extiende la presencia del país en el océano
                    Pacífico. Entre las principales ciudades de la costa del Atlántico, se encuentran Nueva York,
                    un centro global financiero y cultural, y la capital Washington D. C. Chicago, metrópolis
                    del medio oeste, es famosa por su influencia arquitectónica y, en la costa oeste,
                    Hollywood, Los Ángeles, es famosa por la industria cinematográfica.'
            ],
            'canada' => [
                'capital' => 'Ottawa',
                'currency' => 'CAD',
                'population' => '39566248',
                'description' => 'Canadá es una nación diversa, tolerante, pacífica y acogedora, conocida por
                    su naturaleza y su impresionante belleza natural. Es un país vasto y variado,
                    un lugar que vale la pena conocer por sus aventuras y sofisticada cultura. Las
                    ciudades multiculturales y vibrantes de Canadá contrastan con la naturaleza
                    virgen que las rodea. Canadá se localiza en la parte alta de Norteamérica,
                    arriba de Estados Unidos. Al oeste colinda con el Océano Pacífico y al este con
                    el Océano Atlántico. Estados Unidos colinda al sur y el Océano Ártico al norte.
                    Canadá ocupa casi la mitad de Norteamérica.'
            ],
            'hawai' => [
                'capital' => 'Honolulu',
                'currency' => 'USD',
                'population' => '1211537',
                'description' => 'Hawaii es un archipiélago situado en medio del Océano Pacífico que conforma
                    uno de los estados insulares de los Estados Unidos. Este conjunto de islas
                    representa uno de los destinos turísticos más importantes de la Polinesia. Su
                    capital es Honoloulu, que es, a su vez, la ciudad más grande y poblada de toda la
                    isla (ubicada en la isla de Oahu). A su vez, Hawaii es el nombre que recibe la
                    isla más grande de este archipiélago; seguida en orden de importancia, por Niihau,
                    Lanai, Maui, Kahoolawe, Molokai y Oahu.'
            ],
            'bahamas' => [
                'capital' => 'Nasáu',
                'currency' => 'BSD',
                'population' => '407906',
                'description' => 'Constituido por más de 700 islas (de las cuales 24 están habitadas), cayos e
                    islotes en el océano Atlántico, está ubicado al norte de Cuba, Haití y República
                    Dominicana, noroeste de Islas Turcas y Caicos, al sureste del estado estadounidense
                    de Florida y al este de los Cayos de la Florida. Geográficamente las islas Bahamas
                    forman, junto con las Islas Turcas y Caicos, el archipiélago de las Lucayas, también
                    denominado por extensión Bahamas. Las Islas Turcas y Caicos​ (en inglés, Turks and
                    Caicos Islands) son un territorio británico de ultramar dependiente del Reino Unido.
                    Fueron administradas por Jamaica hasta el año de 1962 y luego pasaron a la administración
                    de las islas Bahamas hasta 1973. En 1982 el Reino Unido le concedió la independencia a las
                    islas, sin embargo, las islas prefirieron seguir como un territorio dependiente del Reino Unido.'
            ],
            'islas_turcas_y_caicos' => [
                'capital' => 'Cockburn Town',
                'currency' => 'USD',
                'population' => '55926',
                'description' => 'En nombre de las islas Turcas proviene de un cactus autóctono, la cabeza del turco
                    (Melocactus intortus), cuya parte superior escarlata se asemeja a un fez. El nombre
                    Caicos puede derivar de caya hico, una frase que significa "cadena de islas" en el idioma
                    del pueblo indígena lucayo (arahuaco). Las Islas Turcas y Caicos están al sureste de Mayaguana
                    en las Bahamas y al norte de la isla de La Española, donde se encuentran Haití y la República
                    Dominicana, en aguas del océano Atlántico. Cockburn Town, la capital, está a unos 1042 kilómetros
                    al este-sureste de Miami en los Estados Unidos. Las islas tienen una superficie total de 948 km².'
            ]
        ],
        'records_to_show' => 2,
        'lower_population' => 100000000,
        'order_by' => 'currency',
        'order' => 'asc'
    ];

    $ordered_countries = Utilities::orderAsocArrayByAnyKey($info);

    return view('listCountries', $ordered_countries);
});