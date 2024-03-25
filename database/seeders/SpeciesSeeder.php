<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Species;

class SpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Species::create([
            'code' => 'PHDK',
            'name' => 'PHDEAK',
            'species_groups' => 1,
            'roy_class' => 'SECOND',
            'comm_gr' => 'Commercial',
            'dip' => 'Dip',
        ]);

        Species::create([
            'code' => 'CHBG',
            'name' => 'CHHOETEAL_BANGKOUNEANGO',
            'species_groups' => 2,
            'roy_class' => 'SECOND',
            'comm_gr' => 'Commercial',
            'dip' => 'Dip',
        ]);

        Species::create([
            'code' => 'CHBR',
            'name' => 'CHHOETEAL_BRENG',
            'species_groups' => 2,
            'roy_class' => 'SECOND',
            'comm_gr' => 'Commercial',
            'dip' => 'Dip',
        ]);

        Species::create([
            'code' => 'CHTR',
            'name' => 'CHHOETEAL_CHHNGAR',
            'species_groups' => 2,
            'roy_class' => 'SECOND',
            'comm_gr' => 'Commercial',
            'dip' => 'Dip',
        ]);

        Species::create([
            'code' => 'CHMI',
            'name' => 'CHHOETEAL_MOSAU',
            'species_groups' => 2,
            'roy_class' => 'SECOND',
            'comm_gr' => 'Commercial',
            'dip' => 'Dip',
        ]);

        Species::create([
            'code' => 'CHRH',
            'name' => 'CHORCHONG',
            'species_groups' => 3,
            'roy_class' => 'SECOND',
            'comm_gr' => 'Commercial',
            'dip' => 'Dip',
        ]);

        Species::create([
            'code' => 'CRMS',
            'name' => 'CHRASMAS',
            'species_groups' => 3,
            'roy_class' => 'SECOND',
            'comm_gr' => 'Commercial',
            'dip' => 'Dip',
        ]);

        Species::create([
            'code' => 'KKMS',
            'name' => 'KOKI_MOSAU',
            'species_groups' => 3,
            'roy_class' => 'FIRST',
            'comm_gr' => 'Commercial',
            'dip' => 'Dip',
        ]);

        Species::create([
            'code' => 'KKPN',
            'name' => 'KOKI_PHNONG_KAMNHAN',
            'species_groups' => 3,
            'roy_class' => 'SECOND',
            'comm_gr' => 'Commercial',
            'dip' => 'Dip',
        ]);

        Species::create([
            'code' => 'LMBI',
            'name' => 'LUMBOR',
            'species_groups' => 3,
            'roy_class' => 'SECOND',
            'comm_gr' => 'Commercial',
            'dip' => 'Dip',
        ]);

        Species::create([
            'code' => 'PCEK',
            'name' => 'PHCEK',
            'species_groups' => 3,
            'roy_class' => 'FIRST',
            'comm_gr' => 'Commercial',
            'dip' => 'Dip',
        ]);

        Species::create([
            'code' => 'TBEG',
            'name' => 'TBENG',
            'species_groups' => 3,
            'roy_class' => 'SECOND',
            'comm_gr' => 'Commercial',
            'dip' => 'Dip',
        ]);

        Species::create([
            'code' => 'KHOV',
            'name' => 'KCHOV_KAMLENG',
            'species_groups' => 4,
            'roy_class' => 'SECOND',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Dip',
        ]);

        Species::create([
            'code' => 'KKDK',
            'name' => 'KOKI_DEK',
            'species_groups' => 4,
            'roy_class' => 'FIRST',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Dip',
        ]);

        Species::create([
            'code' => 'KKKS',
            'name' => 'KOKI_KHASAC',
            'species_groups' => 4,
            'roy_class' => 'SECOND',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Dip',
        ]);

        Species::create([
            'code' => 'KKTM',
            'name' => 'KOKI_THMOR',
            'species_groups' => 4,
            'roy_class' => 'FIRST',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Dip',
        ]);

        Species::create([
            'code' => 'PPEL',
            'name' => 'POPEL',
            'species_groups' => 4,
            'roy_class' => 'FIRST',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Dip',
        ]);

        Species::create([
            'code' => 'RINM',
            'name' => 'RAING_PHNOM',
            'species_groups' => 4,
            'roy_class' => 'FIRST',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Dip',
        ]);

        Species::create([
            'code' => 'TRLT',
            'name' => 'TRORLAT',
            'species_groups' => 4,
            'roy_class' => 'SECOND',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Dip',
        ]);

        Species::create([
            'code' => 'ANKM',
            'name' => 'ANGKOT_KHMAU',
            'species_groups' => 5,
            'roy_class' => 'LUX',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'ATTT',
            'name' => 'ATITH_NEANG_PHOR_EK',
            'species_groups' => 5,
            'roy_class' => 'SECOND',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'BENG',
            'name' => 'BENG',
            'species_groups' => 5,
            'roy_class' => 'LUX',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'BSNK',
            'name' => 'BOSNEAK',
            'species_groups' => 5,
            'roy_class' => 'FIRST',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHBK',
            'name' => 'CHAM_BAK',
            'species_groups' => 5,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHKM',
            'name' => 'CHHOEU_KHMAV_NEANG_KHMAV',
            'species_groups' => 5,
            'roy_class' => 'LUX',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHKO',
            'name' => 'CHOEUNG_KO',
            'species_groups' => 5,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHKR',
            'name' => 'CHAN_KRASNA',
            'species_groups' => 5,
            'roy_class' => 'THIRD',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHLK',
            'name' => 'CHHLIK',
            'species_groups' => 5,
            'roy_class' => 'FIRST',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHMC',
            'name' => 'CHHAM_CHHA',
            'species_groups' => 5,
            'roy_class' => 'SECOND',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHTP',
            'name' => 'CHAN_TOUM_PEANG',
            'species_groups' => 5,
            'roy_class' => 'THIRD',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'DCSP',
            'name' => 'DONCHERM_',
            'species_groups' => 5,
            'roy_class' => 'FIRST',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'DYKL',
            'name' => 'DEY_KHLA',
            'species_groups' => 5,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'HUDN',
            'name' => 'HOUN_DAN_MOREASPREOUPHNOM',
            'species_groups' => 5,
            'roy_class' => 'LUX',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KMPR',
            'name' => 'KOMPENG_REACH',
            'species_groups' => 5,
            'roy_class' => 'THIRD',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KRAY',
            'name' => 'KRAY',
            'species_groups' => 5,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KREL',
            'name' => 'KROEL',
            'species_groups' => 5,
            'roy_class' => 'LUX',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KRKO',
            'name' => 'KRORKORS',
            'species_groups' => 5,
            'roy_class' => 'FIRST',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KRPM',
            'name' => 'KRORNHOUNG',
            'species_groups' => 5,
            'roy_class' => 'LUX',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KRYS',
            'name' => 'KRAY_SAR',
            'species_groups' => 5,
            'roy_class' => 'THIRD',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'MASK',
            'name' => 'MEYSAK',
            'species_groups' => 5,
            'roy_class' => 'FIRST',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'NNON',
            'name' => 'NEANG_NOUN',
            'species_groups' => 5,
            'roy_class' => 'LUX',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PRDL',
            'name' => 'PRAM_DOMLENG',
            'species_groups' => 5,
            'roy_class' => 'THIRD',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PRLO',
            'name' => 'PRO_LOUP',
            'species_groups' => 5,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PRNG',
            'name' => 'PRING_KRORB_BEK',
            'species_groups' => 5,
            'roy_class' => 'THIRD',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SKRM',
            'name' => 'SOKROM',
            'species_groups' => 5,
            'roy_class' => 'FIRST',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SMPN',
            'name' => 'SAM_PONG',
            'species_groups' => 5,
            'roy_class' => 'THIRD',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SRAL',
            'name' => 'SRAL',
            'species_groups' => 5,
            'roy_class' => 'SECOND',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SRKR',
            'name' => 'SROL_KRAHAM',
            'species_groups' => 5,
            'roy_class' => 'SECOND',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SRLO',
            'name' => 'SRORLAO',
            'species_groups' => 5,
            'roy_class' => 'FIRST',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SROL',
            'name' => 'SROL_SAR',
            'species_groups' => 5,
            'roy_class' => 'SECOND',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SWPR',
            'name' => 'SVAY_PREY',
            'species_groups' => 5,
            'roy_class' => 'THIRD',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SYCR',
            'name' => 'SVAY_CHAM_REANG',
            'species_groups' => 5,
            'roy_class' => 'THIRD',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TAUR',
            'name' => 'TAOUR',
            'species_groups' => 5,
            'roy_class' => 'THIRD',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TEPI',
            'name' => 'TEP_PHIROU',
            'species_groups' => 5,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'THNR',
            'name' => 'THNONG_KROHORM',
            'species_groups' => 5,
            'roy_class' => 'LUX',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'THNS',
            'name' => 'THNONG_SOR',
            'species_groups' => 5,
            'roy_class' => 'LUX',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TRTM',
            'name' => 'TRORP_TOM',
            'species_groups' => 5,
            'roy_class' => 'THIRD',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TRYG',
            'name' => 'TROR_YING',
            'species_groups' => 5,
            'roy_class' => 'LUX',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TTRV',
            'name' => 'TATRAV',
            'species_groups' => 5,
            'roy_class' => 'LUX',
            'comm_gr' => 'Commercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'ANKN',
            'name' => 'ANGKANH',
            'species_groups' => 6,
            'roy_class' => 'LUX',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'ANKT',
            'name' => 'ANGKAT_TMAAT',
            'species_groups' => 6,
            'roy_class' => 'FIRST',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'ANOM',
            'name' => 'ANGKRANG_PHNOM',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'ATNG',
            'name' => 'ATEANG_ROTEANG',
            'species_groups' => 6,
            'roy_class' => 'THIRD',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'BADM',
            'name' => 'BAK_DERM',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'BAKG',
            'name' => 'BANGKANG',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'BDNG',
            'name' => 'BAKDORNG',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'BELY',
            'name' => 'BELOY',
            'species_groups' => 6,
            'roy_class' => 'FIRST',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'BKSV',
            'name' => 'BANGKEOU_SVA',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'BNKO',
            'name' => 'BAG_KHEOU',
            'species_groups' => 6,
            'roy_class' => 'THIRD',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'BYPV',
            'name' => 'BAY_POU_VAING',
            'species_groups' => 6,
            'roy_class' => 'THIRD',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CASA',
            'name' => 'KHCHOENG',
            'species_groups' => 6,
            'roy_class' => 'THIRD',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CCHB',
            'name' => 'CHOEUNG_CHAB',
            'species_groups' => 6,
            'roy_class' => 'LUX',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHMK',
            'name' => 'CHAMRIEK',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHNY',
            'name' => 'CHORNY',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHPL',
            'name' => 'CHHOE_PHLOEUNG',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHRK',
            'name' => 'CHRAKENG',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHRM',
            'name' => 'CHANG_KONG_ROMEANG',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHRS',
            'name' => 'CHREIS',
            'species_groups' => 6,
            'roy_class' => 'LUX',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHUT',
            'name' => 'CHORNG_UOR_THMAT',
            'species_groups' => 6,
            'roy_class' => 'THIRD',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CKTM',
            'name' => 'CHEK_TUM',
            'species_groups' => 6,
            'roy_class' => 'THIRD',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CREY',
            'name' => 'CHREY',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'DKOR',
            'name' => 'DONGKOR',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'DOKM',
            'name' => 'DOK_MEY',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'HISN',
            'name' => 'HAISANH_NGAYSANG_CHANSAR',
            'species_groups' => 6,
            'roy_class' => 'LUX',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KAOM',
            'name' => 'KANGSENGPHNOM',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KCAS',
            'name' => 'KCHAS',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KDAG',
            'name' => 'KANN_DEANG',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KDCH',
            'name' => 'KDURCH',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KDOL',
            'name' => 'KDOL',
            'species_groups' => 6,
            'roy_class' => 'THIRD',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KES',
            'name' => 'KES',
            'species_groups' => 6,
            'roy_class' => 'FIRST',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KKCM',
            'name' => 'KONG_KANGCHHMOL',
            'species_groups' => 6,
            'roy_class' => 'THIRD',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KKGN',
            'name' => 'KONG_KANGNHY',
            'species_groups' => 6,
            'roy_class' => 'THIRD',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KKOM',
            'name' => 'KONG_KANGPHNOM',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KNDL',
            'name' => 'KANNDOL',
            'species_groups' => 6,
            'roy_class' => 'THIRD',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KNPR',
            'name' => 'KHNOR_PREY',
            'species_groups' => 6,
            'roy_class' => 'THIRD',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KRAG',
            'name' => 'KRANG',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KRAS',
            'name' => 'KREAS',
            'species_groups' => 6,
            'roy_class' => 'THIRD',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KRBO',
            'name' => 'KRORBAO',
            'species_groups' => 6,
            'roy_class' => 'THIRD',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KRLA',
            'name' => 'KRORLANH',
            'species_groups' => 6,
            'roy_class' => 'FIRST',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KRON',
            'name' => 'KRONG',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KTOM',
            'name' => 'KHTOM',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KWAV',
            'name' => 'KHVAO',
            'species_groups' => 6,
            'roy_class' => 'SECOND',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'LGNG',
            'name' => 'LO_NGIENG',
            'species_groups' => 6,
            'roy_class' => 'THIRD',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'MAKG',
            'name' => 'MAK_BREING',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'MAKP',
            'name' => 'MAK_PRANG',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'MAKU',
            'name' => 'MAK_KLOEU',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'MNPR',
            'name' => 'MEAN_PREY',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'NENS',
            'name' => 'NEANG_SAR',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PANG',
            'name' => 'PANG',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PHNV',
            'name' => 'PHNHEAV',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PHON',
            'name' => 'PHAONG',
            'species_groups' => 6,
            'roy_class' => 'THIRD',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PHUT',
            'name' => 'PROR_HOUT',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PLON',
            'name' => 'PLONG',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PNAG',
            'name' => 'PHNEANG',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PNGS',
            'name' => 'PHNGEAS',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'POBY',
            'name' => 'POPUOL_BAY',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'POCV',
            'name' => 'PON_SVAR',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'POKH',
            'name' => 'POPEA_KHE',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PONR',
            'name' => 'PONG_RO',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PPTH',
            'name' => 'POPULTHMOR',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PPUL',
            'name' => 'PHNEL_POPOUL',
            'species_groups' => 6,
            'roy_class' => 'FIRST',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PRPN',
            'name' => 'PREAS_PHNOV_SOMBOK_KROHOM',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PRUS',
            'name' => 'PROUS',
            'species_groups' => 6,
            'roy_class' => 'THIRD',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PYPK',
            'name' => 'PHKAI_PROEK',
            'species_groups' => 6,
            'roy_class' => 'FIRST',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'RAIT',
            'name' => 'RAING_TOEK',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'ROKA',
            'name' => 'ROKA',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'RUNG',
            'name' => 'ROUNG',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SABL',
            'name' => 'SAMBOUR_LOVENG',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SARG',
            'name' => 'SAM_RONG',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SBMS',
            'name' => 'SAMBOUR_MEAS',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SDAV',
            'name' => 'SDAV',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SDEY',
            'name' => 'SDEY',
            'species_groups' => 6,
            'roy_class' => 'FIRST',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SLEN',
            'name' => 'SLENG',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SMCH',
            'name' => 'SMACH',
            'species_groups' => 6,
            'roy_class' => 'THIRD',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SME',
            'name' => 'SME',
            'species_groups' => 6,
            'roy_class' => 'FIRST',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SMKB',
            'name' => 'SMA_KRABEY',
            'species_groups' => 6,
            'roy_class' => 'THIRD',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SNAY',
            'name' => 'SNAY',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SNOL',
            'name' => 'SNUOL',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SOUY',
            'name' => 'SOURY',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SPOR',
            'name' => 'SOM_POR',
            'species_groups' => 6,
            'roy_class' => 'FIRST',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SPPY',
            'name' => 'SPEOU_PREY',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SPTK',
            'name' => 'SPEOU_TEK',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SRKM',
            'name' => 'SRAKOM',
            'species_groups' => 6,
            'roy_class' => 'SECOND',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SVAK',
            'name' => 'SVAY_SVAK',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SVCT',
            'name' => 'SVAY_CHANTI',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SVPT',
            'name' => 'SVAY_PONGTRONG',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TKOV',
            'name' => 'TKOV',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TLOK',
            'name' => 'THLOK',
            'species_groups' => 6,
            'roy_class' => 'THIRD',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TOLP',
            'name' => 'TOUNLORP',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TPOG',
            'name' => 'TOM_POUNG',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TRAG',
            'name' => 'TRANG',
            'species_groups' => 6,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TREN',
            'name' => 'TRA_MENG',
            'species_groups' => 6,
            'roy_class' => 'THIRD',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TRMN',
            'name' => 'TRORMOUNG',
            'species_groups' => 6,
            'roy_class' => 'THIRD',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TRSK',
            'name' => 'TRORMOUNGSEK',
            'species_groups' => 6,
            'roy_class' => 'FIRST',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'WYNG',
            'name' => 'VOR_YONG',
            'species_groups' => 6,
            'roy_class' => 'FIRST',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'ACSA',
            'name' => 'ACH_SAT',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'ADCH',
            'name' => 'ACHDERK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'AKSL',
            'name' => 'ANGKEA_SEL',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'AMBB',
            'name' => 'AMBENG_BEK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'AMCN',
            'name' => 'AMBENG_CHAN',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'AMPI',
            'name' => 'AMPIL_TOEUK_PREY',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'ANCH',
            'name' => 'ANGKOCH',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'ANKB',
            'name' => 'ANGKEA_BOS',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'ANRD',
            'name' => 'ANGRE_DEK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'APEN',
            'name' => 'APHEAN',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'ATES',
            'name' => 'ATES',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'ATSR',
            'name' => 'ANNTUNG_SOR',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'BAKK',
            'name' => 'BANGKONG_KENGKONG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'BAKP',
            'name' => 'BAKPAO',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'BBOK',
            'name' => 'BOR_BORK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'BOPR',
            'name' => 'BO_PROEUK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'BRCH',
            'name' => 'BROR_CHOK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'BTIL',
            'name' => 'BATPHTIL',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CABB',
            'name' => 'CHAM_BAK_BARAING',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHCK',
            'name' => 'CHHOENG_CHKER',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHEK',
            'name' => 'CHANG_ENG_SEK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHHA',
            'name' => 'CHHAR',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHHU',
            'name' => 'CHHOM_POU_PREY',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHKG',
            'name' => 'CHEUNG_KRORVAING',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHKP',
            'name' => 'CHUNGKONG_PHON',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHKU',
            'name' => 'CHEUNG_KRAPEU',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHLS',
            'name' => 'CHORNLOS',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHNA',
            'name' => 'CHANG_NANG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHNO',
            'name' => 'CHNOK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHOV',
            'name' => 'CHOV',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHPS',
            'name' => 'CHHOETEAL_PREUS',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CHTU',
            'name' => 'CHNOK_TROU',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'CTES',
            'name' => 'CHORNTESPLOUK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'DAKD',
            'name' => 'DANG_KEAP_KDAM',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'DGPR',
            'name' => 'DANGKEABPROEUS',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'DKPO',
            'name' => 'DOKPO',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'DNKY',
            'name' => 'DOUNKAY',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'DRDV',
            'name' => 'DORNG_DAV',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'DYSP',
            'name' => 'DEY_SAMPOCH',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'EPSH',
            'name' => 'EYSEIPHSAM_SRACH',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KACL',
            'name' => 'KACHEAL',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KAKU',
            'name' => 'KAKHUCH',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KANA',
            'name' => 'KANA',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KANE',
            'name' => 'KANER',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KANT',
            'name' => 'KANTOUT_PREY',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KATG',
            'name' => 'KATOUNG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KAYK',
            'name' => 'KA_YOUK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KBAL_KRORLORNG',
            'name' => 'KBAL_KRORLORNG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KBDA',
            'name' => 'KANCHOEU_BEY_DACH',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KBDK',
            'name' => 'KBAL_DERK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KBKK',
            'name' => 'KROBAO_KHEK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KCHP',
            'name' => 'KA_CHIEP',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KDCE',
            'name' => 'KANDAB_CHANG_ET',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KDCK',
            'name' => 'KDOR_COMBROK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KHMA',
            'name' => 'KHANNMA',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KHNH',
            'name' => 'KHNHE',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KHOS',
            'name' => 'KHOS',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KHTN',
            'name' => 'KHTING',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KHVG',
            'name' => 'KHVENG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KKAL',
            'name' => 'KALKAL',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KKKK',
            'name' => 'KALAP',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KKLG',
            'name' => 'KBAL_KRORLORNG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KLIG',
            'name' => 'KLING',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KLNG',
            'name' => 'KLOUNG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KLPO',
            'name' => 'KLENG_POR',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KMPT',
            'name' => 'KOM_PERT',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KNAL',
            'name' => 'KNALL',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KNAY',
            'name' => 'KNAY_MORN',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KODK',
            'name' => 'KORNDORK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KOKH',
            'name' => 'KON_KHMOM',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KOMT',
            'name' => 'KOKTMAT',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KOMY',
            'name' => 'KO_MOUY',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KORK',
            'name' => 'KORK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KOTT',
            'name' => 'KORTHET',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KRAK',
            'name' => 'KRORCHORK_ANDERK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KREG',
            'name' => 'KROENG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KREM',
            'name' => 'KROR_EM',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KRMN',
            'name' => 'KROR_MOURN',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KROH',
            'name' => 'KROCH_PREY',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KRSR',
            'name' => 'KRORNG_SOEUR',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KRUS',
            'name' => 'KHOES_REOUS',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KRVN',
            'name' => 'KRORVANN',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KTIT',
            'name' => 'KTITH',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'LORT',
            'name' => 'LORT',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'LORV',
            'name' => 'LOR_VEA',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'LOVG',
            'name' => 'LORVING',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'LRLT',
            'name' => 'LORLOT',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'MADN',
            'name' => 'MADEHN_',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'MDAS',
            'name' => 'MADEHN_MEAS',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'MMAG',
            'name' => 'MOR_MANG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'MTYK',
            'name' => 'MLOUTRAYOUK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'NGOK',
            'name' => 'NGOK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'NHAM',
            'name' => 'NHAM',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'NIV',
            'name' => 'NIV',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'ONLK',
            'name' => 'ONLOK_PHOR_EM',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PAGA',
            'name' => 'PA_NGAB',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PAGS',
            'name' => 'PA_NGES',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PECH',
            'name' => 'PECH_CHANGVA',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PHLG',
            'name' => 'PHLANG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PHMA',
            'name' => 'PHNERK_CHMA',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PHNO',
            'name' => 'PHNOM_PHNERNG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PHOR',
            'name' => 'PHOR',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PLNG',
            'name' => 'PLOV_NEANG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PLOG',
            'name' => 'PLUOUNG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PLOK',
            'name' => 'PLONG_KEOV',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PLOR',
            'name' => 'PLOR',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PLPH',
            'name' => 'PLOV_SOMPOUCH',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PMVG',
            'name' => 'PROMOY_VIENG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PNKP',
            'name' => 'PHNEK_PREAP',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PNOM',
            'name' => 'PON_ORMBORK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'POCH',
            'name' => 'POUCH',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'POPL',
            'name' => 'PO_PLEAR',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'POUN',
            'name' => 'POUN',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PPPR',
            'name' => 'POPLEA_PRUES',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PPVK',
            'name' => 'POPOULVAK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PREL',
            'name' => 'PREAL',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PROM',
            'name' => 'PROMAT_KHLAKMOM',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'PROM',
            'name' => 'PROUM',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'RANG',
            'name' => 'RAING',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'ROCG',
            'name' => 'ROM_CHORNG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'RODL',
            'name' => 'ROMDOUL',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'ROML',
            'name' => 'ROMLEANG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'ROTY',
            'name' => 'ROMENGTHA_NGE0Y',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'ROVN',
            'name' => 'ROVIENG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'RPCK',
            'name' => 'ROMPEAT_CHROUK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SADA',
            'name' => 'SANDA',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SAHA',
            'name' => 'SANG_HA',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SAND',
            'name' => 'SANDAN',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SANK',
            'name' => 'SANG_KE',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SAVP',
            'name' => 'SANGVA_PICH',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SBTS',
            'name' => 'SAMBOUR_TES',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SEMN',
            'name' => 'SEMORN__ROL',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SKPL',
            'name' => 'SLAKRORPOUL',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SLCH',
            'name' => 'SLA_KCHEY',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SLET',
            'name' => 'SLOEK_LO_ET',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SLNG',
            'name' => 'SOM_LEANG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SOPI',
            'name' => 'SOPHY',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SREG',
            'name' => 'CHHKER_SRERNG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'SRMO',
            'name' => 'SRORMOR',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TAPL',
            'name' => 'TAPIL',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TBOT',
            'name' => 'TABORT',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TENG',
            'name' => 'TENG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'THME',
            'name' => 'THMEAS',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'THNO',
            'name' => 'THNOT_PRENG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'THTR',
            'name' => 'THMENH_TREY',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TMAK',
            'name' => 'TLERM_ANNDERK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TNIV',
            'name' => 'TAONIV',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TOUK',
            'name' => 'TOUK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TRBL',
            'name' => 'TROR_ORL',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TRCU',
            'name' => 'TRA_BEK_CHOU',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TREL',
            'name' => 'TREAL',
            'species_groups' => 7,
            'roy_class' => 'FIRST',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TROG',
            'name' => 'TRORNG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TRSK',
            'name' => 'TRORSEK_TRAMKANG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TRYA',
            'name' => 'TROR_YAK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TRYG',
            'name' => 'TROR_YORNG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'TTPY',
            'name' => 'TOTIM_PREY',
            'species_groups' => 7,
            'roy_class' => 'SECOND',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'UNKN',
            'name' => 'UNKNOWN',
            'species_groups' => 7,
            'roy_class' => 'UNKN',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'VEAY',
            'name' => 'VEAY',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'VOEG',
            'name' => 'VOENG',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'YEAM',
            'name' => 'YEAM',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'YOUK',
            'name' => 'YOUK',
            'species_groups' => 7,
            'roy_class' => 'NONCLASS',
            'comm_gr' => 'NonCommercial',
            'dip' => 'Non_Dip',
        ]);

        Species::create([
            'code' => 'KHLG',
            'name' => 'KHLONG',
            'species_groups' => 2,
            'roy_class' => 'SECOND',
            'comm_gr' => 'Commercial',
            'dip' => 'Dip',
        ]);

        Species::create([
            'code' => 'TRAC',
            'name' => 'TRACH',
            'species_groups' => 2,
            'roy_class' => 'SECOND',
            'comm_gr' => 'Commercial',
            'dip' => 'Dip',
        ]);
    }
}
