<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class obraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('obras')->insert([
            [
                'Nombre'=>'Ubú sin cuernos',
                'Director'=>'Abel Gonzalez Melo',
                'Descripcion'=>'Luego de recorrer el mundo entero, Ubú, el mítico personaje creado por Alfred Jarry, llega junto a su madre y su coronel a “la tierra más hermosa que ojos humanos hayan visto”. Sin perder tiempo pacta con los pobladores y aprovecha el descontento generalizado para urdir una trampa y derrocar al rey. Así, con el apoyo popular se erige en gobernante de esta isla a la que nombra “Uba”, en homenaje a sí mismo...'
            ],
            [
                'Nombre'=>'Juego de niñas',
                'Director'=>'Adrian Novella',
                'Descripcion'=>'Juego donde se muestran los miedos y las expectativas de los padres a la hora de dejar a sus hijos en la escuela. También los miedos que tienen estos niños -transmitido en ocasiones por los padres- de no sentir la aprobación de sus compañeros, de sus padres o sus profesores. Y también, el miedo que sienten estos últimos a causa de la sobreprotección, cada vez más desmesurada, hacia los niños. En definitiva, una situación en la que la falta de comunicación entre padres, hijos y profesores puede convertirse en malas acciones o puede quedar nada más que en un juego que se ha mal entendido.'
            ],
            [
                'Nombre'=>'La condesa Sancha',
                'Director'=>'Aizpea Goenaga',
                'Descripcion'=>'En el 1082, el rey Sancho Ramírez de Navarra y Aragón, nombra a su hermana, la condesa Sancha, obispo de las diócesis de Pamplona y Monjardín. Este hecho histórico oculto y apenas mencionado en las enciclopedias de historia, es el punto de partida para tratar, desde un punto de vista de género, el poder, la iglesia, el patriarcado, los intereses políticos, las intrigas y, sobre todo, la soledad de una mujer que lucha por tener el lugar que busca'
            ],
            [
                'Nombre'=>'La memoria de los chimpancés',
                'Director'=>'Africa Hurtado',
                'Descripcion'=>'En agosto y a esas horas, el calor es tan insoportable que el único lugar donde disfrutar de unos grados menos son unas escaleras medio derruidas, donde dos viejas amigas, Manuela y Gloria, se reunen como cada tarde desde hace más de cincuenta años. Ambas ancianas pasan sus horas anhelando la luz que tenían sus días de juventud y tolerando las heridas que el paso del tiempo y la pérdida de sus seres queridos han producido en sus vidas. Ya casi no queda nadie.'
            ],
            [
                'Nombre'=>'Neveras',
                'Director'=>'Alda Lozano',
                'Descripcion'=>'Mónica e Isabel no han tenido mucha suerte con sus elecciones sentimentales. Por eso llevan juntas, mano a mano, troceando y congelando a todos sus amantes. Ahora que de Mónica solo queda una cabeza parlante en el congelador parece que van a ser capaces de reconciliarse.'
            ],
            [
                'Nombre'=>'Las Pulgas de Oxana',
                'Director'=>'Aldana Lozano',
                'Descripcion'=>'María se quedó viuda y dejó de hablar, inspirándose en Oxana Malaya, la niña ucraniana que fue criada por los perros de su jardín. Ahora congela cocido en tupperwares y ladra. Su sobrina Cristina juega al golf en su dormitorio. Nerea, su asistente social, ve corbatas donde no las hay. Alerta. Salvajes vocacionales se acercan y salpica la sangre. Cuando las pulgas más íntimas atacan se cumplen los deseos más silenciosos... '
            ],
            [
                'Nombre'=>'Ser un Hombre',
                'Director'=>'Alejandro Butron',
                'Descripcion'=>'Pepe no está contento con la forma de ser de su Jorge, su hijo, que se encuentra en plena pubertad. Esperaba que fuera futbolista profesional y se comportara como "un verdadero hombre", teniendo en cuenta el ejemplo que ve en casa. Y es que Pepe es un macho, se reafirma continuamente como tal y está dispuesto a enderezar cuanto antes el camino de Jorge, como continuamente le conminan sus amigos del bar. Pero, ¿qué hace a Pepe pensar de la forma en que lo hace?'
            ],
            [
                'Nombre'=>'Billete de IDA',
                'Director'=>'Amala Fernandez',
                'Descripcion'=>'Una mujer se suicida en las vías del tren, sólo lleva encima una carta que un antiguo novio la escribió hace veinte años. Puede que sea una casualidad o puede que no pero a partir de ese momento su planificada vida empezará a tambalearse.'
            ],
            [
                'Nombre'=>'La ventana Abierta',
                'Director'=>'Ana Graciani',
                'Descripcion'=>'Rubén llega al pueblo en medio de un potente viento de levante, viene a ver a Merche, la mujer con la que mantiene una relación amorosa, que han fraguado por Internet, ya que solo se han visto una vez. Merche no está en casa, así que a Rubén le recibe su hija Vera, una adolescente descarada y madura para su edad'
            ],
            
        ]);
    }
}
