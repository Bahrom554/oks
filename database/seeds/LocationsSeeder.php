<?php

use App\Helpers\Helper;
use App\Models\District;
use App\Models\Region;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $regions = array(
            0 =>
                array(
                    'name_uz' => 'Андижон вилояти',
                    'name_ru' => 'Андижанская область',
                    'code' => 1703,
                ),
            1 =>
                array(
                    'name_uz' => 'Бухоро вилояти',
                    'name_ru' => 'Бухарская область',
                    'code' => 1706,
                ),
            2 =>
                array(
                    'name_uz' => 'Жиззах вилояти',
                    'name_ru' => 'Джизакская область',
                    'code' => 1708,
                ),
            3 =>
                array(
                    'name_uz' => 'Қашқадарё вилояти',
                    'name_ru' => 'Кашкадарьинская область',
                    'code' => 1710,
                ),
            4 =>
                array(
                    'name_uz' => 'Навоий вилояти',
                    'name_ru' => 'Навоийская область',
                    'code' => 1712,
                ),
            5 =>
                array(
                    'name_uz' => 'Наманган вилояти',
                    'name_ru' => 'Наманганская область',
                    'code' => 1714,
                ),
            6 =>
                array(
                    'name_uz' => 'Самарқанд вилояти',
                    'name_ru' => 'Самаркандская область',
                    'code' => 1718,
                ),
            7 =>
                array(
                    'name_uz' => 'Сурхондарё вилояти',
                    'name_ru' => 'Сурхандаринская область',
                    'code' => 1722,
                ),
            8 =>
                array(
                    'name_uz' => 'Сирдарё вилояти',
                    'name_ru' => 'Сирдаринская область',
                    'code' => 1724,
                ),
            9 =>
                array(
                    'name_uz' => 'Тошкент шаҳри',
                    'name_ru' => 'Город Ташкент',
                    'code' => 1726,
                ),
            10 =>
                array(
                    'name_uz' => 'Тошкент вилояти',
                    'name_ru' => 'Ташкентская область',
                    'code' => 1727,
                ),
            11 =>
                array(
                    'name_uz' => 'Фарғона вилояти',
                    'name_ru' => 'Ферганская область',
                    'code' => 1730,
                ),
            12 =>
                array(
                    'name_uz' => 'Хоразм вилояти',
                    'name_ru' => 'Харезмская область',
                    'code' => 1733,
                ),
            13 =>
                array(
                    'name_uz' => 'Қорақалпоғистон Республикаси',
                    'name_ru' => 'Каракалпакстан',
                    'code' => 1735,
                ),
        );
        $districts = array(
            0 =>
                array(
                    'name_uz' => 'Хонобод',
                    'name_ru' => 'г. Ханабад',
                    'code' => 1703408,
                    'parent_code' => 1703,
                ),
            1 =>
                array(
                    'name_uz' => 'Андижон',
                    'name_ru' => 'г. Андижан',
                    'code' => 1703401,
                    'parent_code' => 1703,
                ),
            2 =>
                array(
                    'name_uz' => 'Андижон тумани',
                    'name_ru' => 'Андижанский район',
                    'code' => 1703203,
                    'parent_code' => 1703,
                ),
            3 =>
                array(
                    'name_uz' => 'Балиқчи тумани',
                    'name_ru' => 'Балыкчинский район',
                    'code' => 1703206,
                    'parent_code' => 1703,
                ),
            4 =>
                array(
                    'name_uz' => 'Бўстон тумани',
                    'name_ru' => 'Бустонский район',
                    'code' => 1703209,
                    'parent_code' => 1703,
                ),
            5 =>
                array(
                    'name_uz' => 'Бўз тумани',
                    'name_ru' => 'Бозский район',
                    'code' => 1703209,
                    'parent_code' => 1703,
                ),
            6 =>
                array(
                    'name_uz' => 'Булоқбоши тумани',
                    'name_ru' => 'Булакбашинский район',
                    'code' => 1703210,
                    'parent_code' => 1703,
                ),
            7 =>
                array(
                    'name_uz' => 'Жалақудуқ тумани',
                    'name_ru' => 'Джалалкудукский район',
                    'code' => 1703211,
                    'parent_code' => 1703,
                ),
            8 =>
                array(
                    'name_uz' => 'Избоскан тумани',
                    'name_ru' => 'Избасканский район',
                    'code' => 1703214,
                    'parent_code' => 1703,
                ),
            9 =>
                array(
                    'name_uz' => 'Улуғнор тумани',
                    'name_ru' => 'Улугноpский район',
                    'code' => 1703217,
                    'parent_code' => 1703,
                ),
            10 =>
                array(
                    'name_uz' => 'Қўрғонтепа тумани',
                    'name_ru' => 'Кургантепинский район',
                    'code' => 1703220,
                    'parent_code' => 1703,
                ),
            11 =>
                array(
                    'name_uz' => 'Асака тумани',
                    'name_ru' => 'Асакинский район',
                    'code' => 1703224,
                    'parent_code' => 1703,
                ),
            12 =>
                array(
                    'name_uz' => 'Мархамат тумани',
                    'name_ru' => 'Мархаматский район',
                    'code' => 1703227,
                    'parent_code' => 1703,
                ),
            13 =>
                array(
                    'name_uz' => 'Олтинкўл тумани',
                    'name_ru' => 'Алтынкульский район',
                    'code' => 1703202,
                    'parent_code' => 1703,
                ),
            14 =>
                array(
                    'name_uz' => 'Шахрихон тумани',
                    'name_ru' => 'Шахриханский район',
                    'code' => 1703230,
                    'parent_code' => 1703,
                ),
            15 =>
                array(
                    'name_uz' => 'Пахтаобод тумани',
                    'name_ru' => 'Пахтаабадский район',
                    'code' => 1703232,
                    'parent_code' => 1703,
                ),
            16 =>
                array(
                    'name_uz' => 'Хўжаобод тумани',
                    'name_ru' => 'Ходжаабадский район',
                    'code' => 1703236,
                    'parent_code' => 1703,
                ),
            17 =>
                array(
                    'name_uz' => 'Бухоро',
                    'name_ru' => 'г. Бухара',
                    'code' => 1706401,
                    'parent_code' => 1706,
                ),
            18 =>
                array(
                    'name_uz' => 'Когон',
                    'name_ru' => 'г. Каган',
                    'code' => 1706403,
                    'parent_code' => 1706,
                ),
            19 =>
                array(
                    'name_uz' => 'Олот тумани',
                    'name_ru' => 'Алатский район',
                    'code' => 1706204,
                    'parent_code' => 1706,
                ),
            20 =>
                array(
                    'name_uz' => 'Бухоро тумани',
                    'name_ru' => 'Бухарский район',
                    'code' => 1706207,
                    'parent_code' => 1706,
                ),
            21 =>
                array(
                    'name_uz' => 'Вобкент тумани',
                    'name_ru' => 'Вабкентский район',
                    'code' => 1706212,
                    'parent_code' => 1706,
                ),
            22 =>
                array(
                    'name_uz' => 'Ғиждувон тумани',
                    'name_ru' => 'Гиждуванский район',
                    'code' => 1706215,
                    'parent_code' => 1706,
                ),
            23 =>
                array(
                    'name_uz' => 'Когон тумани',
                    'name_ru' => 'Каганский район',
                    'code' => 1706219,
                    'parent_code' => 1706,
                ),
            24 =>
                array(
                    'name_uz' => 'Қоракўл тумани',
                    'name_ru' => 'Каракульский район',
                    'code' => 1706230,
                    'parent_code' => 1706,
                ),
            25 =>
                array(
                    'name_uz' => 'Қоровулбозор тумани',
                    'name_ru' => 'Караулбазарский район',
                    'code' => 1706232,
                    'parent_code' => 1706,
                ),
            26 =>
                array(
                    'name_uz' => 'Пешку тумани',
                    'name_ru' => 'Пешкунский район',
                    'code' => 1706240,
                    'parent_code' => 1706,
                ),
            27 =>
                array(
                    'name_uz' => 'Ромитан тумани',
                    'name_ru' => 'Ромитанский район',
                    'code' => 1706242,
                    'parent_code' => 1706,
                ),
            28 =>
                array(
                    'name_uz' => 'Жондор тумани',
                    'name_ru' => 'Жондоpский район',
                    'code' => 1706246,
                    'parent_code' => 1706,
                ),
            29 =>
                array(
                    'name_uz' => 'Шофиркон тумани',
                    'name_ru' => 'Шафирканский район',
                    'code' => 1706258,
                    'parent_code' => 1706,
                ),
            30 =>
                array(
                    'name_uz' => 'Жиззах',
                    'name_ru' => 'г. Джизак',
                    'code' => 1708401,
                    'parent_code' => 1708,
                ),
            31 =>
                array(
                    'name_uz' => 'Арнасой тумани',
                    'name_ru' => 'Арнасайский район',
                    'code' => 1708201,
                    'parent_code' => 1708,
                ),
            32 =>
                array(
                    'name_uz' => 'Бахмал тумани',
                    'name_ru' => 'Бахмальский район',
                    'code' => 1708204,
                    'parent_code' => 1708,
                ),
            33 =>
                array(
                    'name_uz' => 'Ғаллаорол тумани',
                    'name_ru' => 'Галляаральский район',
                    'code' => 1708209,
                    'parent_code' => 1708,
                ),
            34 =>
                array(
                    'name_uz' => 'Шароф Рашидов тумани',
                    'name_ru' => 'Шароф Рашидовский район',
                    'code' => 1708212,
                    'parent_code' => 1708,
                ),
            35 =>
                array(
                    'name_uz' => 'Дўстлик тумани',
                    'name_ru' => 'Дустликский район',
                    'code' => 1708215,
                    'parent_code' => 1708,
                ),
            36 =>
                array(
                    'name_uz' => 'Зомин тумани',
                    'name_ru' => 'Зааминский район',
                    'code' => 1708218,
                    'parent_code' => 1708,
                ),
            37 =>
                array(
                    'name_uz' => 'Зарбдор тумани',
                    'name_ru' => 'Зарбдарский район',
                    'code' => 1708220,
                    'parent_code' => 1708,
                ),
            38 =>
                array(
                    'name_uz' => 'Зафаробод тумани',
                    'name_ru' => 'Зафарабадский район',
                    'code' => 1708225,
                    'parent_code' => 1708,
                ),
            39 =>
                array(
                    'name_uz' => 'Мирзачўл тумани',
                    'name_ru' => 'Мирзачульский район',
                    'code' => 1708223,
                    'parent_code' => 1708,
                ),
            40 =>
                array(
                    'name_uz' => 'Пахтакор тумани',
                    'name_ru' => 'Пахтакорский район',
                    'code' => 1708228,
                    'parent_code' => 1708,
                ),
            41 =>
                array(
                    'name_uz' => 'Фориш тумани',
                    'name_ru' => 'Фаришский район',
                    'code' => 1708235,
                    'parent_code' => 1708,
                ),
            42 =>
                array(
                    'name_uz' => 'Янгиобод тумани',
                    'name_ru' => 'Янгиободский район',
                    'code' => 1708237,
                    'parent_code' => 1708,
                ),
            43 =>
                array(
                    'name_uz' => 'Қарши',
                    'name_ru' => 'г. Карши',
                    'code' => 1710401,
                    'parent_code' => 1710,
                ),
            44 =>
                array(
                    'name_uz' => 'Қарши тумани',
                    'name_ru' => 'Каршинский район',
                    'code' => 1710224,
                    'parent_code' => 1710,
                ),
            45 =>
                array(
                    'name_uz' => 'Миришкор тумани',
                    'name_ru' => 'Миришкорский район',
                    'code' => 1710233,
                    'parent_code' => 1710,
                ),
            46 =>
                array(
                    'name_uz' => 'Ғузор тумани',
                    'name_ru' => 'Гузарский район',
                    'code' => 1710207,
                    'parent_code' => 1710,
                ),
            47 =>
                array(
                    'name_uz' => 'Деҳқонобод тумани',
                    'name_ru' => 'Дехканабадский район',
                    'code' => 1710212,
                    'parent_code' => 1710,
                ),
            48 =>
                array(
                    'name_uz' => 'Қамаши тумани',
                    'name_ru' => 'Камашинский район',
                    'code' => 1710220,
                    'parent_code' => 1710,
                ),
            49 =>
                array(
                    'name_uz' => 'Косон тумани',
                    'name_ru' => 'Касанский район',
                    'code' => 1710229,
                    'parent_code' => 1710,
                ),
            50 =>
                array(
                    'name_uz' => 'Китоб тумани',
                    'name_ru' => 'Китабский район',
                    'code' => 1710232,
                    'parent_code' => 1710,
                ),
            51 =>
                array(
                    'name_uz' => 'Муборак тумани',
                    'name_ru' => 'Мубарекский район',
                    'code' => 1710234,
                    'parent_code' => 1710,
                ),
            52 =>
                array(
                    'name_uz' => 'Нишон тумани',
                    'name_ru' => 'Нишанский район',
                    'code' => 1710235,
                    'parent_code' => 1710,
                ),
            53 =>
                array(
                    'name_uz' => 'Касби тумани',
                    'name_ru' => 'Касбинский район',
                    'code' => 1710237,
                    'parent_code' => 1710,
                ),
            54 =>
                array(
                    'name_uz' => 'Чироқчи тумани',
                    'name_ru' => 'Чиракчинский район',
                    'code' => 1710242,
                    'parent_code' => 1710,
                ),
            55 =>
                array(
                    'name_uz' => 'Шаҳрисабз тумани',
                    'name_ru' => 'Шахрисабзский район',
                    'code' => 1710245,
                    'parent_code' => 1710,
                ),
            56 =>
                array(
                    'name_uz' => 'Яккабоғ тумани',
                    'name_ru' => 'Яккабагский район',
                    'code' => 1710250,
                    'parent_code' => 1710,
                ),
            57 =>
                array(
                    'name_uz' => 'Зарафшон',
                    'name_ru' => 'г. Заpафшан',
                    'code' => 1712408,
                    'parent_code' => 1712,
                ),
            58 =>
                array(
                    'name_uz' => 'Қизилтепа тумани',
                    'name_ru' => 'Кызылтепинский район',
                    'code' => 1712216,
                    'parent_code' => 1712,
                ),
            59 =>
                array(
                    'name_uz' => 'Навбаҳор тумани',
                    'name_ru' => 'Навбахорский район',
                    'code' => 1712230,
                    'parent_code' => 1712,
                ),
            60 =>
                array(
                    'name_uz' => 'Навоий',
                    'name_ru' => 'г. Навои',
                    'code' => 1712401,
                    'parent_code' => 1712,
                ),
            61 =>
                array(
                    'name_uz' => 'Ғозғон',
                    'name_ru' => 'Газган',
                    'code' => 1712412,
                    'parent_code' => 1712,
                ),
            62 =>
                array(
                    'name_uz' => 'Нурота тумани',
                    'name_ru' => 'Нуратинский район',
                    'code' => 1712238,
                    'parent_code' => 1712,
                ),
            63 =>
                array(
                    'name_uz' => 'Конимех тумани',
                    'name_ru' => 'Канимехский район',
                    'code' => 1712211,
                    'parent_code' => 1712,
                ),
            64 =>
                array(
                    'name_uz' => 'Томди тумани',
                    'name_ru' => 'Тамдынский район',
                    'code' => 1712244,
                    'parent_code' => 1712,
                ),
            65 =>
                array(
                    'name_uz' => 'Хатирчи тумани',
                    'name_ru' => 'Хатырчинский район',
                    'code' => 1712251,
                    'parent_code' => 1712,
                ),
            66 =>
                array(
                    'name_uz' => 'Учқудуқ тумани',
                    'name_ru' => 'Учкудукский район',
                    'code' => 1712248,
                    'parent_code' => 1712,
                ),
            67 =>
                array(
                    'name_uz' => 'Кармана тумани',
                    'name_ru' => 'Карманинский район',
                    'code' => 1712234,
                    'parent_code' => 1712,
                ),
            68 =>
                array(
                    'name_uz' => 'Наманган',
                    'name_ru' => 'г. Наманган',
                    'code' => 1714401,
                    'parent_code' => 1714,
                ),
            69 =>
                array(
                    'name_uz' => 'Мингбулоқ тумани',
                    'name_ru' => 'Мингбулакский pайон',
                    'code' => 1714204,
                    'parent_code' => 1714,
                ),
            70 =>
                array(
                    'name_uz' => 'Косонсой тумани',
                    'name_ru' => 'Касансайский район',
                    'code' => 1714207,
                    'parent_code' => 1714,
                ),
            71 =>
                array(
                    'name_uz' => 'Наманган тумани',
                    'name_ru' => 'Наманганский район',
                    'code' => 1714212,
                    'parent_code' => 1714,
                ),
            72 =>
                array(
                    'name_uz' => 'Поп тумани',
                    'name_ru' => 'Папский район',
                    'code' => 1714219,
                    'parent_code' => 1714,
                ),
            73 =>
                array(
                    'name_uz' => 'Тўрақўрғон тумани',
                    'name_ru' => 'Туракурганский район',
                    'code' => 1714224,
                    'parent_code' => 1714,
                ),
            74 =>
                array(
                    'name_uz' => 'Уйчи тумани',
                    'name_ru' => 'Уйчинский район',
                    'code' => 1714229,
                    'parent_code' => 1714,
                ),
            75 =>
                array(
                    'name_uz' => 'Чортоқ тумани',
                    'name_ru' => 'Чартакский район',
                    'code' => 1714236,
                    'parent_code' => 1714,
                ),
            76 =>
                array(
                    'name_uz' => 'Янгиқўрғон тумани',
                    'name_ru' => 'Янгикурганский район',
                    'code' => 1714242,
                    'parent_code' => 1714,
                ),
            77 =>
                array(
                    'name_uz' => 'Норин тумани',
                    'name_ru' => 'Нарынский район',
                    'code' => 1714216,
                    'parent_code' => 1714,
                ),
            78 =>
                array(
                    'name_uz' => 'Учқўрғон тумани',
                    'name_ru' => 'Учкурганский район',
                    'code' => 1714234,
                    'parent_code' => 1714,
                ),
            79 =>
                array(
                    'name_uz' => 'Чуст тумани',
                    'name_ru' => 'Чустский район',
                    'code' => 1714237,
                    'parent_code' => 1714,
                ),
            80 =>
                array(
                    'name_uz' => 'Самарқанд',
                    'name_ru' => 'г. Самарканд',
                    'code' => 1718401,
                    'parent_code' => 1718,
                ),
            81 =>
                array(
                    'name_uz' => 'Каттақўрғон',
                    'name_ru' => 'г. Каттакурган',
                    'code' => 1718406,
                    'parent_code' => 1718,
                ),
            82 =>
                array(
                    'name_uz' => 'Оқдарё тумани',
                    'name_ru' => 'Акдарьинский район',
                    'code' => 1718203,
                    'parent_code' => 1718,
                ),
            83 =>
                array(
                    'name_uz' => 'Булунғур тумани',
                    'name_ru' => 'Булунгурский район',
                    'code' => 1718206,
                    'parent_code' => 1718,
                ),
            84 =>
                array(
                    'name_uz' => 'Жомбой тумани',
                    'name_ru' => 'Джамбайский район',
                    'code' => 1718209,
                    'parent_code' => 1718,
                ),
            85 =>
                array(
                    'name_uz' => 'Иштихон тумани',
                    'name_ru' => 'Иштыханский район',
                    'code' => 1718212,
                    'parent_code' => 1718,
                ),
            86 =>
                array(
                    'name_uz' => 'Каттақўрғон тумани',
                    'name_ru' => 'Каттакурганский район',
                    'code' => 1718215,
                    'parent_code' => 1718,
                ),
            87 =>
                array(
                    'name_uz' => 'Қўшработ тумани',
                    'name_ru' => 'Кошрабадский район',
                    'code' => 1718216,
                    'parent_code' => 1718,
                ),
            88 =>
                array(
                    'name_uz' => 'Нарпай тумани',
                    'name_ru' => 'Нарпайский район',
                    'code' => 1718218,
                    'parent_code' => 1718,
                ),
            89 =>
                array(
                    'name_uz' => 'Паяриқ тумани',
                    'name_ru' => 'Пайарыкский район',
                    'code' => 1718224,
                    'parent_code' => 1718,
                ),
            90 =>
                array(
                    'name_uz' => 'Пастдарғом тумани',
                    'name_ru' => 'Пастдаргомский район',
                    'code' => 1718227,
                    'parent_code' => 1718,
                ),
            91 =>
                array(
                    'name_uz' => 'Пахтачи тумани',
                    'name_ru' => 'Пахтачийский район',
                    'code' => 1718230,
                    'parent_code' => 1718,
                ),
            92 =>
                array(
                    'name_uz' => 'Самарқанд тумани',
                    'name_ru' => 'Самаркандский район',
                    'code' => 1718233,
                    'parent_code' => 1718,
                ),
            93 =>
                array(
                    'name_uz' => 'Нуробод тумани',
                    'name_ru' => 'Нурабадский район',
                    'code' => 1718235,
                    'parent_code' => 1718,
                ),
            94 =>
                array(
                    'name_uz' => 'Ургут тумани',
                    'name_ru' => 'Ургутский район',
                    'code' => 1718236,
                    'parent_code' => 1718,
                ),
            95 =>
                array(
                    'name_uz' => 'Тайлоқ тумани',
                    'name_ru' => 'Тайлякский район',
                    'code' => 1718238,
                    'parent_code' => 1718,
                ),
            96 =>
                array(
                    'name_uz' => 'Термиз',
                    'name_ru' => 'г. Термез',
                    'code' => 1722401,
                    'parent_code' => 1722,
                ),
            97 =>
                array(
                    'name_uz' => 'Олтинсой тумани',
                    'name_ru' => 'Алтынсайский район',
                    'code' => 1722201,
                    'parent_code' => 1722,
                ),
            98 =>
                array(
                    'name_uz' => 'Бойсун тумани',
                    'name_ru' => 'Байсунский район',
                    'code' => 1722204,
                    'parent_code' => 1722,
                ),
            99 =>
                array(
                    'name_uz' => 'Музработ тумани',
                    'name_ru' => 'Музрабадский район',
                    'code' => 1722207,
                    'parent_code' => 1722,
                ),
            100 =>
                array(
                    'name_uz' => 'Денов тумани',
                    'name_ru' => 'Денауский район',
                    'code' => 1722210,
                    'parent_code' => 1722,
                ),
            101 =>
                array(
                    'name_uz' => 'Жарқўрғон тумани',
                    'name_ru' => 'Джаркурганский район',
                    'code' => 1722212,
                    'parent_code' => 1722,
                ),
            102 =>
                array(
                    'name_uz' => 'Қумқўрғон тумани',
                    'name_ru' => 'Кумкурганский район',
                    'code' => 1722214,
                    'parent_code' => 1722,
                ),
            103 =>
                array(
                    'name_uz' => 'Қизириқ тумани',
                    'name_ru' => 'Кизирикский район',
                    'code' => 1722215,
                    'parent_code' => 1722,
                ),
            104 =>
                array(
                    'name_uz' => 'Сариосиё тумани',
                    'name_ru' => 'Сариасийский район',
                    'code' => 1722217,
                    'parent_code' => 1722,
                ),
            105 =>
                array(
                    'name_uz' => 'Термиз тумани',
                    'name_ru' => 'Термезский район',
                    'code' => 1722220,
                    'parent_code' => 1722,
                ),
            106 =>
                array(
                    'name_uz' => 'Узун тумани',
                    'name_ru' => 'Узунский район',
                    'code' => 1722221,
                    'parent_code' => 1722,
                ),
            107 =>
                array(
                    'name_uz' => 'Шўрчи тумани',
                    'name_ru' => 'Шурчинский район',
                    'code' => 1722226,
                    'parent_code' => 1722,
                ),
            108 =>
                array(
                    'name_uz' => 'Шеробод тумани',
                    'name_ru' => 'Шерабадский район',
                    'code' => 1722223,
                    'parent_code' => 1722,
                ),
            109 =>
                array(
                    'name_uz' => 'Ангор тумани',
                    'name_ru' => 'Ангорский район',
                    'code' => 1722202,
                    'parent_code' => 1722,
                ),
            110 =>
                array(
                    'name_uz' => 'Гулистон',
                    'name_ru' => 'г. Гулистан',
                    'code' => 1724401,
                    'parent_code' => 1724,
                ),
            111 =>
                array(
                    'name_uz' => 'Ширин',
                    'name_ru' => 'г. Шиpин',
                    'code' => 1724410,
                    'parent_code' => 1724,
                ),
            112 =>
                array(
                    'name_uz' => 'Янгиер',
                    'name_ru' => 'г. Янгиеp',
                    'code' => 1724413,
                    'parent_code' => 1724,
                ),
            113 =>
                array(
                    'name_uz' => 'Гулистон тумани',
                    'name_ru' => 'Гулистанский район',
                    'code' => 1724220,
                    'parent_code' => 1724,
                ),
            114 =>
                array(
                    'name_uz' => 'Боёвут тумани',
                    'name_ru' => 'Баяутский район',
                    'code' => 1724212,
                    'parent_code' => 1724,
                ),
            115 =>
                array(
                    'name_uz' => 'Сайхунобод тумани',
                    'name_ru' => 'Сайхунабадский район',
                    'code' => 1724216,
                    'parent_code' => 1724,
                ),
            116 =>
                array(
                    'name_uz' => 'Сардоба тумани',
                    'name_ru' => 'Сардабинский район',
                    'code' => 1724226,
                    'parent_code' => 1724,
                ),
            117 =>
                array(
                    'name_uz' => 'Мирзаобод тумани',
                    'name_ru' => 'Мирзаабадский район',
                    'code' => 1724228,
                    'parent_code' => 1724,
                ),
            118 =>
                array(
                    'name_uz' => 'Ховос тумани',
                    'name_ru' => 'Хавастский район',
                    'code' => 1724235,
                    'parent_code' => 1724,
                ),
            119 =>
                array(
                    'name_uz' => 'Оқолтин тумани',
                    'name_ru' => 'Акалтынский район',
                    'code' => 1724206,
                    'parent_code' => 1724,
                ),
            120 =>
                array(
                    'name_uz' => 'Сирдарё тумани',
                    'name_ru' => 'Сырдарьинский район',
                    'code' => 1724231,
                    'parent_code' => 1724,
                ),
            121 =>
                array(
                    'name_uz' => 'Шайхонтохур тумани',
                    'name_ru' => 'Шайхантахурский район',
                    'code' => 1726277,
                    'parent_code' => 1726,
                ),
            122 =>
                array(
                    'name_uz' => 'Учтепа тумани',
                    'name_ru' => 'Учтепинский район',
                    'code' => 1726262,
                    'parent_code' => 1726,
                ),
            123 =>
                array(
                    'name_uz' => 'Чилонзор тумани',
                    'name_ru' => 'Чиланзарский район',
                    'code' => 1726294,
                    'parent_code' => 1726,
                ),
            124 =>
                array(
                    'name_uz' => 'Миробод тумани',
                    'name_ru' => 'Мирабадский район',
                    'code' => 1726273,
                    'parent_code' => 1726,
                ),
            125 =>
                array(
                    'name_uz' => 'Мирзо Улуғбек тумани',
                    'name_ru' => 'Мирзо-Улугбекский район',
                    'code' => 1726269,
                    'parent_code' => 1726,
                ),
            126 =>
                array(
                    'name_uz' => 'Яккасарой тумани',
                    'name_ru' => 'Яккасарайский район',
                    'code' => 1726287,
                    'parent_code' => 1726,
                ),
            127 =>
                array(
                    'name_uz' => 'Олмазор тумани',
                    'name_ru' => 'Олмазор район',
                    'code' => 1726280,
                    'parent_code' => 1726,
                ),
            128 =>
                array(
                    'name_uz' => 'Яшнобод тумани',
                    'name_ru' => 'Яшнаабадский район',
                    'code' => 1726290,
                    'parent_code' => 1726,
                ),
            129 =>
                array(
                    'name_uz' => 'Сирғали тумани',
                    'name_ru' => 'Сергелийский район',
                    'code' => 1726283,
                    'parent_code' => 1726,
                ),
            130 =>
                array(
                    'name_uz' => 'Бектемир тумани',
                    'name_ru' => 'Бектемирский район',
                    'code' => 1726264,
                    'parent_code' => 1726,
                ),
            131 =>
                array(
                    'name_uz' => 'Юнусобод тумани',
                    'name_ru' => 'Юнусабадский район',
                    'code' => 1726266,
                    'parent_code' => 1726,
                ),
            132 =>
                array(
                    'name_uz' => 'Олмалиқ',
                    'name_ru' => 'г. Алмалык',
                    'code' => 1727404,
                    'parent_code' => 1727,
                ),
            133 =>
                array(
                    'name_uz' => 'Ангрен',
                    'name_ru' => 'г. Ангрен',
                    'code' => 1727407,
                    'parent_code' => 1727,
                ),
            134 =>
                array(
                    'name_uz' => 'Оҳангарон',
                    'name_ru' => 'г.Ахангаран',
                    'code' => 1727415,
                    'parent_code' => 1727,
                ),
            135 =>
                array(
                    'name_uz' => 'Бекобод',
                    'name_ru' => 'г. Бекабад',
                    'code' => 1727413,
                    'parent_code' => 1727,
                ),
            136 =>
                array(
                    'name_uz' => 'Чирчиқ',
                    'name_ru' => 'г. Чиpчик',
                    'code' => 1727419,
                    'parent_code' => 1727,
                ),
            137 =>
                array(
                    'name_uz' => 'Янгийўл',
                    'name_ru' => 'г.Янгиюль',
                    'code' => 1727424,
                    'parent_code' => 1727,
                ),
            138 =>
                array(
                    'name_uz' => 'Оҳангарон тумани',
                    'name_ru' => 'Ахангаранский район',
                    'code' => 1727212,
                    'parent_code' => 1727,
                ),
            139 =>
                array(
                    'name_uz' => 'Бекобод тумани',
                    'name_ru' => 'Бекабадский район',
                    'code' => 1727220,
                    'parent_code' => 1727,
                ),
            140 =>
                array(
                    'name_uz' => 'Оққўрғон тумани',
                    'name_ru' => 'Аккурганский район',
                    'code' => 1727206,
                    'parent_code' => 1727,
                ),
            141 =>
                array(
                    'name_uz' => 'Бўстонлиқ тумани',
                    'name_ru' => 'Бостанлыкский район',
                    'code' => 1727224,
                    'parent_code' => 1727,
                ),
            142 =>
                array(
                    'name_uz' => 'Бўка тумани',
                    'name_ru' => 'Букинский район',
                    'code' => 1727228,
                    'parent_code' => 1727,
                ),
            143 =>
                array(
                    'name_uz' => 'Юқоричирчиқ тумани',
                    'name_ru' => 'Юкоричирчикский район',
                    'code' => 1727239,
                    'parent_code' => 1727,
                ),
            144 =>
                array(
                    'name_uz' => 'Қуйичирчиқ тумани',
                    'name_ru' => 'Куйичирчикский район',
                    'code' => 1727233,
                    'parent_code' => 1727,
                ),
            145 =>
                array(
                    'name_uz' => 'Зангиота тумани',
                    'name_ru' => 'Зангиатинский район',
                    'code' => 1727237,
                    'parent_code' => 1727,
                ),
            146 =>
                array(
                    'name_uz' => 'Қибрай тумани',
                    'name_ru' => 'Кибрайский район',
                    'code' => 1727248,
                    'parent_code' => 1727,
                ),
            147 =>
                array(
                    'name_uz' => 'Паркент тумани',
                    'name_ru' => 'Паркентский район',
                    'code' => 1727249,
                    'parent_code' => 1727,
                ),
            148 =>
                array(
                    'name_uz' => 'Пскент тумани',
                    'name_ru' => 'Пскентский район',
                    'code' => 1727250,
                    'parent_code' => 1727,
                ),
            149 =>
                array(
                    'name_uz' => 'Ўртачирчиқ тумани',
                    'name_ru' => 'Уртачирчикский район',
                    'code' => 1727253,
                    'parent_code' => 1727,
                ),
            150 =>
                array(
                    'name_uz' => 'Тошкент тумани',
                    'name_ru' => 'Ташкентский район',
                    'code' => 1727265,
                    'parent_code' => 1727,
                ),
            151 =>
                array(
                    'name_uz' => 'Чиноз тумани',
                    'name_ru' => 'Чиназский район',
                    'code' => 1727256,
                    'parent_code' => 1727,
                ),
            152 =>
                array(
                    'name_uz' => 'Янгийўл тумани',
                    'name_ru' => 'Янгиюльский район',
                    'code' => 1727259,
                    'parent_code' => 1727,
                ),
            153 =>
                array(
                    'name_uz' => 'Фарғона',
                    'name_ru' => 'г. Фергана',
                    'code' => 1730401,
                    'parent_code' => 1730,
                ),
            154 =>
                array(
                    'name_uz' => 'Қўқон',
                    'name_ru' => 'г. Коканд',
                    'code' => 1730405,
                    'parent_code' => 1730,
                ),
            155 =>
                array(
                    'name_uz' => 'Қувасой',
                    'name_ru' => 'г. Кувасай',
                    'code' => 1730408,
                    'parent_code' => 1730,
                ),
            156 =>
                array(
                    'name_uz' => 'Марғилон',
                    'name_ru' => 'г. Маpгилан',
                    'code' => 1730412,
                    'parent_code' => 1730,
                ),
            157 =>
                array(
                    'name_uz' => 'Олтиариқ тумани',
                    'name_ru' => 'Алтыарыкский район',
                    'code' => 1730203,
                    'parent_code' => 1730,
                ),
            158 =>
                array(
                    'name_uz' => 'Боғдод тумани',
                    'name_ru' => 'Багдадский район',
                    'code' => 1730209,
                    'parent_code' => 1730,
                ),
            159 =>
                array(
                    'name_uz' => 'Бувайда тумани',
                    'name_ru' => 'Бувайдинский район',
                    'code' => 1730212,
                    'parent_code' => 1730,
                ),
            160 =>
                array(
                    'name_uz' => 'Бешариқ тумани',
                    'name_ru' => 'Бешарыкский район',
                    'code' => 1730215,
                    'parent_code' => 1730,
                ),
            161 =>
                array(
                    'name_uz' => 'Қува тумани',
                    'name_ru' => 'Кувинский район',
                    'code' => 1730218,
                    'parent_code' => 1730,
                ),
            162 =>
                array(
                    'name_uz' => 'Учкўприк тумани',
                    'name_ru' => 'Учкуприкский район',
                    'code' => 1730221,
                    'parent_code' => 1730,
                ),
            163 =>
                array(
                    'name_uz' => 'Риштон тумани',
                    'name_ru' => 'Риштанский район',
                    'code' => 1730224,
                    'parent_code' => 1730,
                ),
            164 =>
                array(
                    'name_uz' => 'Сўх тумани',
                    'name_ru' => 'Сохский район',
                    'code' => 1730226,
                    'parent_code' => 1730,
                ),
            165 =>
                array(
                    'name_uz' => 'Тошлоқ тумани',
                    'name_ru' => 'Ташлакский район',
                    'code' => 1730227,
                    'parent_code' => 1730,
                ),
            166 =>
                array(
                    'name_uz' => 'Ўзбекистон тумани',
                    'name_ru' => 'Узбекистанский район',
                    'code' => 1730230,
                    'parent_code' => 1730,
                ),
            167 =>
                array(
                    'name_uz' => 'Фарғона тумани',
                    'name_ru' => 'Ферганский район',
                    'code' => 1730233,
                    'parent_code' => 1730,
                ),
            168 =>
                array(
                    'name_uz' => 'Данғара тумани',
                    'name_ru' => 'Дангаринский район',
                    'code' => 1730236,
                    'parent_code' => 1730,
                ),
            169 =>
                array(
                    'name_uz' => 'Фурқат тумани',
                    'name_ru' => 'Фуркатский район',
                    'code' => 1730238,
                    'parent_code' => 1730,
                ),
            170 =>
                array(
                    'name_uz' => 'Ёзёвон тумани',
                    'name_ru' => 'Язъяванский район',
                    'code' => 1730242,
                    'parent_code' => 1730,
                ),
            171 =>
                array(
                    'name_uz' => 'Урганч',
                    'name_ru' => 'г. Ургенч',
                    'code' => 1733401,
                    'parent_code' => 1733,
                ),
            172 =>
                array(
                    'name_uz' => 'Боғот тумани',
                    'name_ru' => 'Багатский район',
                    'code' => 1733204,
                    'parent_code' => 1733,
                ),
            173 =>
                array(
                    'name_uz' => 'Гурлан тумани',
                    'name_ru' => 'Гурленский район',
                    'code' => 1733208,
                    'parent_code' => 1733,
                ),
            174 =>
                array(
                    'name_uz' => 'Қўшкўпир тумани',
                    'name_ru' => 'Кошкупырский район',
                    'code' => 1733212,
                    'parent_code' => 1733,
                ),
            175 =>
                array(
                    'name_uz' => 'Урганч тумани',
                    'name_ru' => 'Ургенчский район',
                    'code' => 1733217,
                    'parent_code' => 1733,
                ),
            176 =>
                array(
                    'name_uz' => 'Хазорасп тумани',
                    'name_ru' => 'Хазараспский район',
                    'code' => 1733220,
                    'parent_code' => 1733,
                ),
            177 =>
                array(
                    'name_uz' => 'Хонқа тумани',
                    'name_ru' => 'Ханкинский район',
                    'code' => 1733223,
                    'parent_code' => 1733,
                ),
            178 =>
                array(
                    'name_uz' => 'Шовот тумани',
                    'name_ru' => 'Шаватский район',
                    'code' => 1733230,
                    'parent_code' => 1733,
                ),
            179 =>
                array(
                    'name_uz' => 'Янгиариқ тумани',
                    'name_ru' => 'Янгиарыкский район',
                    'code' => 1733233,
                    'parent_code' => 1733,
                ),
            180 =>
                array(
                    'name_uz' => 'Янгибозор тумани',
                    'name_ru' => 'Янгибазарский район',
                    'code' => 1733236,
                    'parent_code' => 1733,
                ),
            181 =>
                array(
                    'name_uz' => 'Хива тумани',
                    'name_ru' => 'Хивинский район',
                    'code' => 1733226,
                    'parent_code' => 1733,
                ),
            182 =>
                array(
                    'name_uz' => 'Нукус',
                    'name_ru' => 'г. Нукус',
                    'code' => 1735401,
                    'parent_code' => 1735,
                ),
            183 =>
                array(
                    'name_uz' => 'Амударё тумани',
                    'name_ru' => 'Амударьинский район',
                    'code' => 1735204,
                    'parent_code' => 1735,
                ),
            184 =>
                array(
                    'name_uz' => 'Беруний тумани',
                    'name_ru' => 'Берунийский район',
                    'code' => 1735207,
                    'parent_code' => 1735,
                ),
            185 =>
                array(
                    'name_uz' => 'Бўзатов тумани',
                    'name_ru' => 'Бозатауский район',
                    'code' => 1735209,
                    'parent_code' => 1735,
                ),
            186 =>
                array(
                    'name_uz' => 'Қораўзак тумани',
                    'name_ru' => 'Караузякский район',
                    'code' => 1735211,
                    'parent_code' => 1735,
                ),
            187 =>
                array(
                    'name_uz' => 'Кегейли тумани',
                    'name_ru' => 'Кегейлийский район',
                    'code' => 1735212,
                    'parent_code' => 1735,
                ),
            188 =>
                array(
                    'name_uz' => 'Қўнғирот тумани',
                    'name_ru' => 'Кунградский район',
                    'code' => 1735215,
                    'parent_code' => 1735,
                ),
            189 =>
                array(
                    'name_uz' => 'Қанликўл тумани',
                    'name_ru' => 'Канлыкульский район',
                    'code' => 1735218,
                    'parent_code' => 1735,
                ),
            190 =>
                array(
                    'name_uz' => 'Мўйноқ тумани',
                    'name_ru' => 'Муйнакский район',
                    'code' => 1735222,
                    'parent_code' => 1735,
                ),
            191 =>
                array(
                    'name_uz' => 'Тахтакўпир тумани',
                    'name_ru' => 'Тахтакупырский район',
                    'code' => 1735230,
                    'parent_code' => 1735,
                ),
            192 =>
                array(
                    'name_uz' => 'Тўрткўл тумани',
                    'name_ru' => 'Турткульский район',
                    'code' => 1735233,
                    'parent_code' => 1735,
                ),
            193 =>
                array(
                    'name_uz' => 'Хўжайли тумани',
                    'name_ru' => 'Ходжейлийский район',
                    'code' => 1735236,
                    'parent_code' => 1735,
                ),
            194 =>
                array(
                    'name_uz' => 'Чимбой тумани',
                    'name_ru' => 'Чимбайский район',
                    'code' => 1735240,
                    'parent_code' => 1735,
                ),
            195 =>
                array(
                    'name_uz' => 'Шуманай тумани',
                    'name_ru' => 'Шуманайский район',
                    'code' => 1735243,
                    'parent_code' => 1735,
                ),
            196 =>
                array(
                    'name_uz' => 'Элликқалъа тумани',
                    'name_ru' => 'Элликкалинский район',
                    'code' => 1735250,
                    'parent_code' => 1735,
                ),
            197 =>
                array(
                    'name_uz' => 'Нукус тумани',
                    'name_ru' => 'Нукусский район',
                    'code' => 1735225,
                    'parent_code' => 1735,
                ),
            198 =>
                array(
                    'name_uz' => 'Қўштепа тумани',
                    'name_ru' => 'Куштепинский район',
                    'code' => 1730206,
                    'parent_code' => 1730,
                ),
            199 =>
                array(
                    'name_uz' => 'Нурафшон',
                    'name_ru' => 'г.Нурафшан',
                    'code' => 1727401,
                    'parent_code' => 1727,
                ),
            200 =>
                array(
                    'name_uz' => 'Шаҳрисабз тумани',
                    'name_ru' => 'город Шахрисабз',
                    'code' => 1710405,
                    'parent_code' => 1710,
                ),
            201 =>
                array(
                    'name_uz' => 'Хива',
                    'name_ru' => 'город Хива',
                    'code' => 1733406,
                    'parent_code' => 1733,
                ),
            202 =>
                array(
                    'name_uz' => 'Тахиатош тумани',
                    'name_ru' => 'Тахиаташский район',
                    'code' => 1735228,
                    'parent_code' => 1735,
                ),
        );

        DB::beginTransaction();
        try {
            foreach ($regions as $region) {
                $model = \App\Models\Region::create([
                    'name_uz' => $region['name_uz'],
                    'name_ru' => $region['name_ru'],
                    'name_en' => $region['name_uz'],
                    'code' => $region['code'],
                ]);
            }
            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            throw new DomainException($exception->getMessage(), $exception->getCode());
        }

        DB::beginTransaction();
        try {

            foreach ($districts as $district) {
                $parent = Region::where('code', '=', $district['parent_code'])->first();
                $model = District::create([
                    'name_uz' => $district['name_uz'],
                    'name_ru' => $district['name_ru'],
                    'name_en' => $district['name_uz'],
                    'code' => $district['code'],
                    'parent_code' => $district['parent_code'],
                    'region_id' => $parent->id,
                ]);
            }
            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            throw new DomainException($exception->getMessage(), $exception->getCode());
        }
    }
}
