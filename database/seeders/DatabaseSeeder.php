<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Products;
use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        self::seedProductos();
		$this->command->info('Tabla productos inicializada con datos!');
        
    }

    private function seedProductos()
    {
        DB::table('products')->delete();
        foreach( $this->arrayProductos as $productos ) {
            $p = new Products();
            $p->product_name = $productos['product_name'];
            $p->product_genre = $productos['product_genre'];
            $p->product_type = $productos['product_type'];
            $p->product_price = $productos['product_price'];
            $p->product_avail = $productos['product_avail'];
            $p->product_stock = $productos['product_stock'];
            $p->product_desc_short = $productos['product_desc_short'];
            $p->product_desc_long = $productos['product_desc_long'];
            $p->product_size = $productos['product_size'];
            $p->product_color = $productos['product_color'];
            $p->save();
      }
    }

    private $arrayProductos = array(
		array(
            'product_name' => 'Blusa Corta Boleros Para Mujer ARKITECT 15185',
			'product_genre' => 'female',
            'product_type' => 'casual',
            'product_price' => '29.994',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Blusa fondo entero de tirantes delgados',
            'product_desc_long' => 'Blusa fondo entero de tirantes delgados y boleros a la altura del pecho y en mangas. Silueta semi ajustada.',
            'product_size' => 'M',
            'product_color' => 'black',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5212487-800-auto?width=800&height=auto&aspect=true'
		),
		array(
            'product_name' => 'Blusa En Tiras Para Mujer ARKITECT 44758',
			'product_genre' => 'female',
            'product_type' => 'casual',
            'product_price' => '23.994',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Blusa de tirantes delgados con escote en V',
            'product_desc_long' => 'Blusa de tirantes delgados con escote en V, silueta holgada y forro en la misma tela.',
            'product_size' => 'S',
            'product_color' => 'white',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5212411-800-auto?width=800&height=auto&aspect=true'
		),
		array(
            'product_name' => 'Blusa Basica Semicontrol Th Moda Femenina Ref 7000',
			'product_genre' => 'female',
            'product_type' => 'sport',
            'product_price' => '20.000',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'En th Moda Femenina fabricamos nuestra propia tela',
            'product_desc_long' => 'En th Moda Femenina fabricamos nuestra propia tela, con caracteristicas de semicontrol, absorbe humedad, se ajusta a la horma de tu cuerpo, es versatil, colores vibrantes y perduran en el tiempo, la tela no genera philips (motas). Nuestra manufactura es 100% Colombiana, nuestras prendas estan compuestas por 92% spandex y 8% nylon.',
            'product_size' => 'L',
            'product_color' => 'yellow',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5276668-800-auto?width=800&height=auto&aspect=true'

		),
		array(
            'product_name' => 'Blusa Corta Con Bolero Mujer ARKITECT 12302',
			'product_genre' => 'female',
            'product_type' => 'formal',
            'product_price' => '29.994',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Blusa fondo entero cuello en V',
            'product_desc_long' => 'Blusa fondo entero cuello en V, manga corta en bolero y tela texturizada.',
            'product_size' => 'M',
            'product_color' => 'blue',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5212283-800-auto?width=800&height=auto&aspect=true'

		),
		array(
            'product_name' => 'Blusa Manga Larga Para Mujer PEOPLE 03521',
			'product_genre' => 'female',
            'product_type' => 'casual',
            'product_price' => '59.990',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Blusa manga larga, tipo camisa ideal para',
            'product_desc_long' => 'Blusa manga larga, tipo camisa ideal para llevarla con un jean y tenis de tu preferencia.',
            'product_size' => 'L',
            'product_color' => 'black',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5249193-800-auto?width=800&height=auto&aspect=true'
        ),
        array(
            'product_name' => 'BLUSA TELA CRAQUELADO VIP MARCA EXCLUSIVA Y17539',
			'product_genre' => 'female',
            'product_type' => 'formal',
            'product_price' => '89.990',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'BLUSA TELA CRAQUELADO, CUELLO ALTO',
            'product_desc_long' => 'LUSA TELA CRAQUELADO, CUELLO ALTO CON ARANDELA, AMARRADO EN CINTURA',
            'product_size' => 'M',
            'product_color' => 'white',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5364033-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'Blusa Básica cuello halter Fiory 2561',
			'product_genre' => 'female',
            'product_type' => 'sport',
            'product_price' => '19.900',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Blusa Básica cuello',
            'product_desc_long' => 'Blusa Básica cuello halter Fiory 2561 elaborada en viscosa',
            'product_size' => 'S',
            'product_color' => 'black',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/1942486-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'Blusa Manga Corta Para Mujer PEOPLE 18785',
			'product_genre' => 'female',
            'product_type' => 'casual',
            'product_price' => '39.990',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Te recomendamos lavar la prenda a mano o a máquina',
            'product_desc_long' => 'Te recomendamos lavar la prenda a mano o a máquina, no la dejes en remojo y lávala separada de colores oscuros. Para secarla, no la retuerzas, sécala a la sombra y colgada. Plancha a temperatura baja.',
            'product_size' => 'M',
            'product_color' => 'blue',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5248476-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'CAMISAS SIN MANGA EJOM GEF 717115',
			'product_genre' => 'female',
            'product_type' => 'casual',
            'product_price' => '69.990',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'LAVADO ÚNICAMENTE A MANO TEMPERATURA MÁXIMA DE LAVADO',
            'product_desc_long' => 'LAVADO ÚNICAMENTE A MANO TEMPERATURA MÁXIMA DE LAVADO, 30 °C LAVAR POR EL REVES LAVAR CON COLORES SIMILARES NO REMOJAR SE PERMITE SOLAMENTE BLANQUEADOR A BASE DE OXÍGENO/SIN CLORO NO SECAR EN MÁQUINA SECADO EXTENDIDO EN SUPERFICIE HORIZONTAL NO RETORCER NI EXPRIMIR DAR FORMA MIENTRAS ESTÁ HÚMEDO PLANCHAR A UNA TEMPERATURA MÁXIMA DE LA BASE DE 110 °C',
            'product_size' => 'L',
            'product_color' => 'white',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5736574-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'CAMISAS MANGA LARGA FIT SHIRT GEF 717116',
			'product_genre' => 'female',
            'product_type' => 'formal',
            'product_price' => '79.990',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Camisa-Manga larga con puño-Cuello',
            'product_desc_long' => 'Camisa-Manga larga con puño-Cuello y perilla en frente con botones-Tejido plano Algodón con elastano-Silueta semi ajustad',
            'product_size' => 'L',
            'product_color' => 'blue',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5736383-800-auto?width=800&height=auto&aspect=true'
		),
        //hombre
        array(
            'product_name' => 'Camiseta Polo Jersey Hombre ARKITECT 38000',
			'product_genre' => 'male',
            'product_type' => 'casual',
            'product_price' => '29.990',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Camiseta manga corta cuello redondo en colores sólidos',
            'product_desc_long' => 'Camiseta manga corta cuello redondo en colores sólidos, en tejido de punto, elaborada en 100% algodón el cual proporciona suavidad y frescura. Ideal para combinar con jeans, sneakers y mantener un look relajado y juvenil.',
            'product_size' => 'L',
            'product_color' => 'blue',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5465036-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'Camiseta Cuello Redondo Hombre PEOPLE 79807',
			'product_genre' => 'male',
            'product_type' => 'sport',
            'product_price' => '12.990',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Camiseta manga corta cuello redondo en colores sólidos',
            'product_desc_long' => 'Camiseta manga corta cuello redondo en colores sólidos, en tejido de punto, elaborada en 100% algodón el cual proporciona suavidad y frescura. Ideal para combinar con jeans, sneakers y mantener un look relajado y juvenil',
            'product_size' => 'M',
            'product_color' => 'black',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5463899-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'Camiseta Polo Para Hombre ARKITECT 20885',
			'product_genre' => 'male',
            'product_type' => 'casual',
            'product_price' => '26.990',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Camiseta tipo polo básica, perfecta para un look casual en tus actividades diarias',
            'product_desc_long' => 'Camiseta tipo polo básica, perfecta para un look casual en tus actividades diarias, puedes combinarla con cualquier tipo de prenda. Rib en cuello y puños de la manga. Camiseta manga corta y perilla con botones. El tejido es suave y liviano. Silueta estándar',
            'product_size' => 'L',
            'product_color' => 'blue',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/6077588-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'Camiseta Bordada ARKITECT 44181',
			'product_genre' => 'male',
            'product_type' => 'casual',
            'product_price' => '29.990',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Camiseta manga corta cuello en V',
            'product_desc_long' => 'Camiseta manga corta cuello en V y detalle de bordado pequeño. Silueta amplia.',
            'product_size' => 'S',
            'product_color' => 'blue',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5549811-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'CAMISETA MANGA CORTA LEVI´S 197728',
			'product_genre' => 'male',
            'product_type' => 'casual',
            'product_price' => '52.430',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Nuestras Camisetas y Jeans fueron hechos el uno para el otro',
            'product_desc_long' => 'Nuestras Camisetas y Jeans fueron hechos el uno para el otro. Esta camiseta es suave y cómoda, hecha con corte relajado y estampado vintage al frente. Combínala con tu mejor look Levi´s.',
            'product_size' => 'M',
            'product_color' => 'white',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/4747715-1600-auto?width=1600&height=auto&aspect=true'
		),
        array(
            'product_name' => 'Camiseta Manga Corta Hombre PEOPLE 44999',
			'product_genre' => 'male',
            'product_type' => 'casual',
            'product_price' => '14.994',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Camiseta manga corta',
            'product_desc_long' => 'Camiseta manga corta cuello y detalle estampado',
            'product_size' => 'L',
            'product_color' => 'blue',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5546037-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'Camisa Para Hombre ARKITECT AKC2328',
			'product_genre' => 'male',
            'product_type' => 'formal',
            'product_price' => '89.990',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Camisa , perilla con botones ',
            'product_desc_long' => 'Camisa , perilla con botones , sesgos horizontales parte superior en contraste',
            'product_size' => 'L',
            'product_color' => 'white',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5327461-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'Polo Slim Puntos',
			'product_genre' => 'male',
            'product_type' => 'casual',
            'product_price' => '39.900',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Exclusiva camiseta tipo polo elaborada en tela algodón con diseño de puntos',
            'product_desc_long' => 'Exclusiva camiseta tipo polo elaborada en tela algodón con diseño de puntos. Slim fit. Con cuello y puños en tejido unicolor. Pechera con botones. Abertura lateral en la parte inferior. La prenda es ligeramente más larga por la espalda.',
            'product_size' => 'L',
            'product_color' => 'black',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/6025955-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'CAMISETA POLO ARKITECT AKB3570',
			'product_genre' => 'male',
            'product_type' => 'casual',
            'product_price' => ' 29.994',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Camiseta polo',
            'product_desc_long' => 'Camiseta polo con perilla',
            'product_size' => 'M',
            'product_color' => 'white',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5354359-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'Camiseta Cuello En V Hombre PEOPLE 79808',
			'product_genre' => 'male',
            'product_type' => 'casual',
            'product_price' => '12.990',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Camiseta manga corta fondo entero en tejido de punto elaborada en 100% algodón',
            'product_desc_long' => 'Camiseta manga corta fondo entero en tejido de punto elaborada en 100% algodón, con cuello en V, una prenda fresca y combinable con todo, Disfruta de un ajuste cómodo y relajado con mayor tranquilidad. Su forma clásica hacen esta prenda sea mucho más versátil.',
            'product_size' => 'M',
            'product_color' => 'blue',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5463759-800-auto?width=800&height=auto&aspect=true'
		),
        //calzado mujer
        array(
            'product_name' => 'Sandalias Wmns Para Mujer NIKE AR4498 Sandalias Wmns Para Mujer NIKE AR4498',
			'product_genre' => 'female',
            'product_type' => 'casual',
            'product_price' => '139.993',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Sandalia abollonada',
            'product_desc_long' => 'Sandalia abollonada , suela con diseño, cinta en sintetico con logo',
            'product_size' => '8',
            'product_color' => 'black',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5508163-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'Tenis Caminar Mujer Newfeel By Decathlon Pw 100',
			'product_genre' => 'female',
            'product_type' => 'sport',
            'product_price' => '50.000',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Tus salidas ocasionales de marcha deportiva.',
            'product_desc_long' => 'Descubre la marcha deportiva al mejor precio, con el concepto exclusivo de flexibilidad Flex-H*.',
            'product_size' => '6',
            'product_color' => 'white',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/1893897-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'Tenis Deportivos Para Mujer FILA WSHOLLAND',
			'product_genre' => 'female',
            'product_type' => 'sport',
            'product_price' => '104.993',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Tus salidas ocasionales de marcha deportiva',
            'product_desc_long' => 'Descubre la marcha deportiva al mejor precio, con el concepto exclusivo de flexibilidad',
            'product_size' => '12',
            'product_color' => 'black',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5419701-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'TENIS DEPORTIVO MUJER FILA WSBUCKY',
			'product_genre' => 'female',
            'product_type' => 'sport',
            'product_price' => '118.993',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Tennis deportivo',
            'product_desc_long' => 'Descubre la marcha deportiva al mejor precio',
            'product_size' => '10',
            'product_color' => 'black',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5395357-1600-auto?width=1600&height=auto&aspect=true'
		),
        array(
            'product_name' => 'Botin Para Mujer ARKITECT 1601',
			'product_genre' => 'female',
            'product_type' => 'formal',
            'product_price' => '89.990',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Botin resorte',
            'product_desc_long' => 'Botin resorte, horma puntuda',
            'product_size' => '6',
            'product_color' => 'black',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5549995-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'Tenis Deportivo Para Mujer NIKE BQ3201',
			'product_genre' => 'female',
            'product_type' => 'sport',
            'product_price' => '209.993',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Tenis clasico nike, con zona porosa frontal',
            'product_desc_long' => 'Tenis clasico nike, con zona porosa frontal, lengüeta enmallada con jareta para mejor ajuste.',
            'product_size' => '12',
            'product_color' => 'black',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5654579-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'Botin negro para mujer olezia',
			'product_genre' => 'female',
            'product_type' => 'formal',
            'product_price' => '199.900',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Estos zapatos son utilizados por su comodidad y elegancia',
            'product_desc_long' => 'Estos zapatos son utilizados por su comodidad y elegancia. Gracias a la versatilidad del producto y sus diferentes estilos permiten que la mujer de hoy pueda llevarlos con todas las combinaciones que desee. Son predilectos en climas templados y fríos además de encontrarlos con plataformas, tacones medios, en diferentes texturas y con decoraciones referentes de vanguardia y última tendencia.',
            'product_size' => '12',
            'product_color' => 'black',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5964101-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'Tenis Deportivos Para Mujer NIKE AQ7488',
			'product_genre' => 'female',
            'product_type' => 'sport',
            'product_price' => '209.993',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Tenis con soporte para mejor amarre',
            'product_desc_long' => 'Tenis con soporte para mejor amarre, recubridora, reata en contrafuerte, diseño en contrastre en capella.',
            'product_size' => '14',
            'product_color' => 'black',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5182816-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'Tenis Deportivos Para Mujer FILA WSRENNER',
			'product_genre' => 'female',
            'product_type' => 'sport',
            'product_price' => '118.993',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Tennis deportivo',
            'product_desc_long' => 'Tenis con soporte para mejor amarre',
            'product_size' => '12',
            'product_color' => 'black',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5183113-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'TENIS DEPORTIVO MUJER FILA WSCHEADLE',
			'product_genre' => 'female',
            'product_type' => 'sport',
            'product_price' => '118.993',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Tennis deportivo.',
            'product_desc_long' => 'Tenis con soporte para mejor amarre',
            'product_size' => '6',
            'product_color' => 'blue',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/4939995-800-auto?width=800&height=auto&aspect=true'
		),
        //calzado hombre
        array(
            'product_name' => 'CALZADO MASCULINO VIBRANTE VELEZ 1019290',
			'product_genre' => 'male',
            'product_type' => 'casual',
            'product_price' => '309.900',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Tenis masculino en Cuero',
            'product_desc_long' => 'Tenis masculino en Cuero Encerado punta Ovalada, uso 24 horas',
            'product_size' => '14',
            'product_color' => 'black',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/4668822-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'Tenis Deportivos Para Hombre NIKE 831533',
			'product_genre' => 'male',
            'product_type' => 'sport',
            'product_price' => '209.993',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Tennis deportivo',
            'product_desc_long' => 'Tennis deportivo suela firme .',
            'product_size' => '16',
            'product_color' => 'blue',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5209315-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'Sandalia hombre rider street RIDER 11578',
			'product_genre' => 'male',
            'product_type' => 'sport',
            'product_price' => '22.900',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Comodas, Flexibles, Alta duracion',
            'product_desc_long' => 'Comodas, Flexibles, Alta duracion, Diversidad en diseños y colores',
            'product_size' => '12',
            'product_color' => 'black',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/485'
		),
        array(
            'product_name' => 'TENIS DEPORTIVOS HOMBRE FILA RENNER',
			'product_genre' => 'male',
            'product_type' => 'sport',
            'product_price' => ' 118.993',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Tennis',
            'product_desc_long' => 'Tennis deportivo.',
            'product_size' => '16',
            'product_color' => 'black',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/4874451-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'Tenis Deportivos Para Hombre FILA BARTON',
			'product_genre' => 'male',
            'product_type' => 'sport',
            'product_price' => '118.993',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Tennis',
            'product_desc_long' => 'Tennis deportivo.',
            'product_size' => '12',
            'product_color' => 'black',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5209915-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'Zapato Hombre Tellenzi M918',
			'product_genre' => 'male',
            'product_type' => 'formal',
            'product_price' => '73.099',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Calzado Para hombre de amarrar elaborado en sintético',
            'product_desc_long' => 'Calzado Para hombre de amarrar elaborado en sintético , forro en sintético , costuras al tono, suela en t.r. producto nacional de excelente calidad diseño y confort',
            'product_size' => '14',
            'product_color' => 'black',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/3647107-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'Tenis Hombre Negro Tellenzi 1895',
			'product_genre' => 'male',
            'product_type' => 'sport',
            'product_price' => '72.242',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Tennis hombre  elaborado en texti',
            'product_desc_long' => 'Tennis hombre  elaborado en textil*sintetico,resorte en capellada, forro en textil, suela en t.r. producto nacional de excelente calidad diseño y confort.',
            'product_size' => '6',
            'product_color' => 'black',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/4538367-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'TENIS DEPORTIVOS HOMBRE NIKE AO5377',
			'product_genre' => 'male',
            'product_type' => 'sport',
            'product_price' => '244.993',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Tennis deportivo',
            'product_desc_long' => 'Tennis deportivo suela firme',
            'product_size' => '12',
            'product_color' => 'black',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5594513-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'TENIS DEPORTIVOS HOMBRE FILA BUCKY',
			'product_genre' => 'male',
            'product_type' => 'sport',
            'product_price' => '84.995',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Tennis',
            'product_desc_long' => 'Tennis deportivo.',
            'product_size' => '14',
            'product_color' => 'blue',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/5594442-800-auto?width=800&height=auto&aspect=true'
		),
        array(
            'product_name' => 'TENIS DEPORTIVOS HOMBRE FILA HOLLAND',
			'product_genre' => 'male',
            'product_type' => 'sport',
            'product_price' => '104.993',
            'product_avail' => true,
            'product_stock' => '10',
            'product_desc_short' => 'Tennis',
            'product_desc_long' => 'Tennis deportivo.',
            'product_size' => '12',
            'product_color' => 'black',
            'product_pic1' => 'https://exitocol.vtexassets.com/arquivos/ids/4935376-800-auto?width=800&height=auto&aspect=true'
		)
	);
}
