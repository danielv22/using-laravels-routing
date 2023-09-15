# 👣 First steps in Laravel - Routing 🛣️ and blade 🖼️.

Create a new route called "`/paises`" in a new project by using ***Framwork Laravel***. The route has to redirect a view that receives the following array:

```php
[
    'countries' => [
        'colombia' => [
            'capital' => 'Bogotá',
            'currency' => 'COP',
            'population' => 50880000,
            'description' => 'Colombia es un país del extremo norte de Sudamérica. Su paisaje cuenta con bosques tropicales,
                las montañas de los Andes y varias plantaciones de café. En Bogotá, su capital a gran altura,
                el distrito Zona Rosa es famoso por sus restaurantes y tiendas.'
        ],
        'mexico' => [
            'capital' => 'Ciudad de México',
            'currency' => 'MXN',
            'population' => 128900000,
            'description' => 'México es un país entre los Estados Unidos y América Central, conocido por las playas en el Pacífico
                el golfo de México, y su diverso paisaje de montañas, desiertos y selvas. Las ruinas antiguas, como
                Teotihuacán y la ciudad maya de Chichén Itzá, se distribuyen por el país, al igual que las ciudades
                de la época colonial española. En la capital Ciudad de México, las elegantes tiendas, los famosos museos
                y los restaurantes gourmet son parte de la vida moderna.'
        ],
        'estados_unidos' => [
            'capital' => 'Washington D.C',
            'currency' => 'USD',
            'population' => 329500000,
            'description' => 'Estados Unidos es un país de 50 estados que ocupa una extensa franja de América del Norte,
                con Alaska en el noroeste y Hawái que extiende la presencia del país en el océano
                Pacífico. Entre las principales ciudades de la costa del Atlántico, se encuentran Nueva York,
                un centro global financiero y cultural, y la capital Washington D. C. Chicago, metrópolis
                del medio oeste, es famosa por su influencia arquitectónica y, en la costa oeste,
                Hollywood, Los Ángeles, es famosa por la industria cinematográfica.'
        ]
    ],
    'records_to_show' => 2,
    'lower_population' => 100000000,
    'order_by' => 'currency',
    'order' => 'ASC'
]
```

| 💡: More countries could added to do a more complete exercise.                  |
| --------------------------------------------------------------------------------| 

In the Blade template, it may show a table with the received countries, as appears below:

<table>
    <thead>
        <tr>
            <td>País</td>
            <td>Capital</td>
            <td>Moneda</td>
            <td>Población</td>
            <td>Descripción</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Colombia</td>
            <td>Bogotá</td>
            <td>COP</td>
            <td>50’880.000</td>
            <td>Colombia es un país del
                extremo norte de Sudamérica.
                Su paisaje cuenta con bosques
                tropicales, las montañas de los
                Andes y varias plantaciones de
                café. En Bogotá, su capital a
                gran altura, el distrito Zona
                Rosa es famoso por sus
                restaurantes y tiendas.</td>
        </tr>
    </tbody>
</table>

And like this, so on. You should pay special attention to the format of the data (display numbers with a million separator and period, for instance). In the Blade template you must
template to validate that all data is received correctly.

In addition to displaying the information, the table must show only the number of records that are received in the key "records_to_show", that have a minimum population that is found in the key "lower_population". Finally, the order of the records must be determined by the field found in the "order_by" key by using the sorting rule indicated in "order".

The application must have styles from an external CSS library, such as bootstrap.

Exercise proposed by [ccasta23](https://github.com/ccasta23) 