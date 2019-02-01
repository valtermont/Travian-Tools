<?php

use Illuminate\Database\Seeder;

class UnitsSeeder extends Seeder
{

    public function run()
    {
        $data=array(
            array('id'=>'r01','tribe'=>'Roman','tribe_id'=>'1','name'=>'Legionnaire','type'=>'H','upkeep'=>'1','carry'=>'50','speed'=>'6','offense'=>'40','offense_max'=>'52.4','defense_inf'=>'35','defense_inf_max'=>'46.6','defense_cav'=>'50','defense_cav_max'=>'63.9','cost'=>'400','cost_wood'=>'120','cost_clay'=>'100','cost_iron'=>'150','cost_crop'=>'30','time'=>'0','image'=>'r01'),
            array('id'=>'r02','tribe'=>'Roman','tribe_id'=>'1','name'=>'Praetorian','type'=>'D','upkeep'=>'1','carry'=>'20','speed'=>'5','offense'=>'30','offense_max'=>'40.9','defense_inf'=>'65','defense_inf_max'=>'81.1','defense_cav'=>'35','defense_cav_max'=>'46.6','cost'=>'460','cost_wood'=>'100','cost_clay'=>'130','cost_iron'=>'160','cost_crop'=>'70','time'=>'0','image'=>'r02'),
            array('id'=>'r03','tribe'=>'Roman','tribe_id'=>'1','name'=>'Imperian','type'=>'O','upkeep'=>'1','carry'=>'50','speed'=>'7','offense'=>'70','offense_max'=>'86.9','defense_inf'=>'40','defense_inf_max'=>'52.4','defense_cav'=>'25','defense_cav_max'=>'35.1','cost'=>'600','cost_wood'=>'150','cost_clay'=>'160','cost_iron'=>'210','cost_crop'=>'80','time'=>'0','image'=>'r03'),
            array('id'=>'r04','tribe'=>'Roman','tribe_id'=>'1','name'=>'Equites Legati','type'=>'S','upkeep'=>'2','carry'=>'0','speed'=>'16','offense'=>'0','offense_max'=>'12.7','defense_inf'=>'20','defense_inf_max'=>'35.7','defense_cav'=>'10','defense_cav_max'=>'24.2','cost'=>'360','cost_wood'=>'140','cost_clay'=>'160','cost_iron'=>'20','cost_crop'=>'40','time'=>'0','image'=>'r04'),
            array('id'=>'r05','tribe'=>'Roman','tribe_id'=>'1','name'=>'Equites Imperatoris','type'=>'O','upkeep'=>'3','carry'=>'100','speed'=>'14','offense'=>'120','offense_max'=>'157.1','defense_inf'=>'65','defense_inf_max'=>'93.9','defense_cav'=>'50','defense_cav_max'=>'76.6','cost'=>'1410','cost_wood'=>'550','cost_clay'=>'440','cost_iron'=>'320','cost_crop'=>'100','time'=>'0','image'=>'r05'),
            array('id'=>'r06','tribe'=>'Roman','tribe_id'=>'1','name'=>'Equites Caesaris','type'=>'H','upkeep'=>'4','carry'=>'70','speed'=>'10','offense'=>'180','offense_max'=>'232.4','defense_inf'=>'80','defense_inf_max'=>'117.5','defense_cav'=>'105','defense_cav_max'=>'146.2','cost'=>'2170','cost_wood'=>'550','cost_clay'=>'640','cost_iron'=>'800','cost_crop'=>'180','time'=>'0','image'=>'r06'),
            array('id'=>'r07','tribe'=>'Roman','tribe_id'=>'1','name'=>'Battering Ram','type'=>'O','upkeep'=>'3','carry'=>'0','speed'=>'4','offense'=>'60','offense_max'=>'88.1','defense_inf'=>'30','defense_inf_max'=>'53.6','defense_cav'=>'75','defense_cav_max'=>'105.3','cost'=>'1830','cost_wood'=>'900','cost_clay'=>'360','cost_iron'=>'500','cost_crop'=>'70','time'=>'0','image'=>'r07'),
            array('id'=>'r08','tribe'=>'Roman','tribe_id'=>'1','name'=>'Fire Catapult','type'=>'O','upkeep'=>'6','carry'=>'0','speed'=>'3','offense'=>'75','offense_max'=>'124.5','defense_inf'=>'60','defense_inf_max'=>'107.2','defense_cav'=>'10','defense_cav_max'=>'49.7','cost'=>'2990','cost_wood'=>'950','cost_clay'=>'1350','cost_iron'=>'600','cost_crop'=>'90','time'=>'0','image'=>'r08'),
            array('id'=>'r09','tribe'=>'Roman','tribe_id'=>'1','name'=>'Senator','type'=>'O','upkeep'=>'5','carry'=>'0','speed'=>'4','offense'=>'50','offense_max'=>'50','defense_inf'=>'40','defense_inf_max'=>'40','defense_cav'=>'30','defense_cav_max'=>'30','cost'=>'140450','cost_wood'=>'30750','cost_clay'=>'27200','cost_iron'=>'45000','cost_crop'=>'37500','time'=>'0','image'=>'r09'),
            array('id'=>'r10','tribe'=>'Roman','tribe_id'=>'1','name'=>'Settler','type'=>'D','upkeep'=>'1','carry'=>'3000','speed'=>'5','offense'=>'0','offense_max'=>'0','defense_inf'=>'80','defense_inf_max'=>'80','defense_cav'=>'80','defense_cav_max'=>'80','cost'=>'19000','cost_wood'=>'4600','cost_clay'=>'4200','cost_iron'=>'5800','cost_crop'=>'4400','time'=>'0','image'=>'r10'),
            array('id'=>'t01','tribe'=>'Teuton','tribe_id'=>'2','name'=>'Maceman','type'=>'O','upkeep'=>'1','carry'=>'60','speed'=>'7','offense'=>'40','offense_max'=>'52.4','defense_inf'=>'20','defense_inf_max'=>'29.4','defense_cav'=>'5','defense_cav_max'=>'12.1','cost'=>'250','cost_wood'=>'95','cost_clay'=>'75','cost_iron'=>'40','cost_crop'=>'40','time'=>'0','image'=>'t01'),
            array('id'=>'t02','tribe'=>'Teuton','tribe_id'=>'2','name'=>'Spearman','type'=>'D','upkeep'=>'1','carry'=>'40','speed'=>'7','offense'=>'10','offense_max'=>'17.9','defense_inf'=>'35','defense_inf_max'=>'46.6','defense_cav'=>'60','defense_cav_max'=>'75.4','cost'=>'340','cost_wood'=>'145','cost_clay'=>'70','cost_iron'=>'85','cost_crop'=>'40','time'=>'0','image'=>'t02'),
            array('id'=>'t03','tribe'=>'Teuton','tribe_id'=>'2','name'=>'Axeman','type'=>'O','upkeep'=>'1','carry'=>'50','speed'=>'6','offense'=>'60','offense_max'=>'75.4','defense_inf'=>'30','defense_inf_max'=>'40.9','defense_cav'=>'30','defense_cav_max'=>'40.9','cost'=>'490','cost_wood'=>'130','cost_clay'=>'120','cost_iron'=>'170','cost_crop'=>'70','time'=>'0','image'=>'t03'),
            array('id'=>'t04','tribe'=>'Teuton','tribe_id'=>'2','name'=>'Scout','type'=>'S','upkeep'=>'1','carry'=>'0','speed'=>'9','offense'=>'0','offense_max'=>'6.4','defense_inf'=>'10','defense_inf_max'=>'17.9','defense_cav'=>'5','defense_cav_max'=>'12.1','cost'=>'360','cost_wood'=>'160','cost_clay'=>'100','cost_iron'=>'50','cost_crop'=>'50','time'=>'0','image'=>'t04'),
            array('id'=>'t05','tribe'=>'Teuton','tribe_id'=>'2','name'=>'Paladin','type'=>'D','upkeep'=>'2','carry'=>'110','speed'=>'10','offense'=>'55','offense_max'=>'76','defense_inf'=>'100','defense_inf_max'=>'127.7','defense_cav'=>'40','defense_cav_max'=>'58.7','cost'=>'1005','cost_wood'=>'370','cost_clay'=>'270','cost_iron'=>'290','cost_crop'=>'75','time'=>'0','image'=>'t05'),
            array('id'=>'t06','tribe'=>'Teuton','tribe_id'=>'2','name'=>'Teutonic Knight','type'=>'O','upkeep'=>'3','carry'=>'80','speed'=>'9','offense'=>'150','offense_max'=>'191.6','defense_inf'=>'50','defense_inf_max'=>'76.6','defense_cav'=>'75','defense_cav_max'=>'105.3','cost'=>'1525','cost_wood'=>'450','cost_clay'=>'515','cost_iron'=>'480','cost_crop'=>'80','time'=>'0','image'=>'t06'),
            array('id'=>'t07','tribe'=>'Teuton','tribe_id'=>'2','name'=>'Ram','type'=>'O','upkeep'=>'3','carry'=>'0','speed'=>'4','offense'=>'65','offense_max'=>'93.9','defense_inf'=>'30','defense_inf_max'=>'53.6','defense_cav'=>'80','defense_cav_max'=>'111.1','cost'=>'1720','cost_wood'=>'1000','cost_clay'=>'300','cost_iron'=>'350','cost_crop'=>'70','time'=>'0','image'=>'t07'),
            array('id'=>'t08','tribe'=>'Teuton','tribe_id'=>'2','name'=>'Catapult','type'=>'O','upkeep'=>'6','carry'=>'0','speed'=>'3','offense'=>'50','offense_max'=>'95.7','defense_inf'=>'60','defense_inf_max'=>'107.2','defense_cav'=>'10','defense_cav_max'=>'49.7','cost'=>'2760','cost_wood'=>'900','cost_clay'=>'1200','cost_iron'=>'600','cost_crop'=>'60','time'=>'0','image'=>'t08'),
            array('id'=>'t09','tribe'=>'Teuton','tribe_id'=>'2','name'=>'Chief','type'=>'O','upkeep'=>'4','carry'=>'0','speed'=>'4','offense'=>'40','offense_max'=>'40','defense_inf'=>'60','defense_inf_max'=>'60','defense_cav'=>'40','defense_cav_max'=>'40','cost'=>'114300','cost_wood'=>'35500','cost_clay'=>'26600','cost_iron'=>'25000','cost_crop'=>'27200','time'=>'0','image'=>'t09'),
            array('id'=>'t10','tribe'=>'Teuton','tribe_id'=>'2','name'=>'Settler','type'=>'D','upkeep'=>'1','carry'=>'3000','speed'=>'5','offense'=>'10','offense_max'=>'10','defense_inf'=>'80','defense_inf_max'=>'80','defense_cav'=>'80','defense_cav_max'=>'80','cost'=>'20000','cost_wood'=>'5800','cost_clay'=>'4400','cost_iron'=>'4600','cost_crop'=>'5200','time'=>'0','image'=>'t10'),
            array('id'=>'g01','tribe'=>'Gaul','tribe_id'=>'3','name'=>'Phalanx','type'=>'D','upkeep'=>'1','carry'=>'35','speed'=>'7','offense'=>'15','offense_max'=>'23.6','defense_inf'=>'40','defense_inf_max'=>'52.4','defense_cav'=>'50','defense_cav_max'=>'63.9','cost'=>'315','cost_wood'=>'100','cost_clay'=>'130','cost_iron'=>'55','cost_crop'=>'30','time'=>'0','image'=>'g01'),
            array('id'=>'g02','tribe'=>'Gaul','tribe_id'=>'3','name'=>'Swordsman','type'=>'O','upkeep'=>'1','carry'=>'45','speed'=>'6','offense'=>'65','offense_max'=>'81.1','defense_inf'=>'35','defense_inf_max'=>'46.6','defense_cav'=>'20','defense_cav_max'=>'29.4','cost'=>'535','cost_wood'=>'140','cost_clay'=>'150','cost_iron'=>'185','cost_crop'=>'60','time'=>'0','image'=>'g02'),
            array('id'=>'g03','tribe'=>'Gaul','tribe_id'=>'3','name'=>'Pathfinder','type'=>'S','upkeep'=>'2','carry'=>'0','speed'=>'17','offense'=>'0','offense_max'=>'12.7','defense_inf'=>'20','defense_inf_max'=>'35.7','defense_cav'=>'10','defense_cav_max'=>'24.2','cost'=>'380','cost_wood'=>'170','cost_clay'=>'150','cost_iron'=>'20','cost_crop'=>'40','time'=>'0','image'=>'g03'),
            array('id'=>'g04','tribe'=>'Gaul','tribe_id'=>'3','name'=>'Theutates Thunder','type'=>'O','upkeep'=>'2','carry'=>'75','speed'=>'19','offense'=>'90','offense_max'=>'116.2','defense_inf'=>'25','defense_inf_max'=>'41.5','defense_cav'=>'40','defense_cav_max'=>'58.7','cost'=>'1090','cost_wood'=>'350','cost_clay'=>'450','cost_iron'=>'230','cost_crop'=>'60','time'=>'0','image'=>'g04'),
            array('id'=>'g05','tribe'=>'Gaul','tribe_id'=>'3','name'=>'Druidrider','type'=>'D','upkeep'=>'2','carry'=>'35','speed'=>'16','offense'=>'45','offense_max'=>'64.5','defense_inf'=>'115','defense_inf_max'=>'145','defense_cav'=>'55','defense_cav_max'=>'76','cost'=>'1090','cost_wood'=>'360','cost_clay'=>'330','cost_iron'=>'280','cost_crop'=>'120','time'=>'0','image'=>'g05'),
            array('id'=>'g06','tribe'=>'Gaul','tribe_id'=>'3','name'=>'Haeduan','type'=>'H','upkeep'=>'3','carry'=>'65','speed'=>'13','offense'=>'140','offense_max'=>'180.1','defense_inf'=>'60','defense_inf_max'=>'88.1','defense_cav'=>'165','defense_cav_max'=>'208.8','cost'=>'1965','cost_wood'=>'500','cost_clay'=>'620','cost_iron'=>'675','cost_crop'=>'170','time'=>'0','image'=>'g06'),
            array('id'=>'g07','tribe'=>'Gaul','tribe_id'=>'3','name'=>'Ram','type'=>'O','upkeep'=>'3','carry'=>'0','speed'=>'4','offense'=>'50','offense_max'=>'76.6','defense_inf'=>'30','defense_inf_max'=>'53.6','defense_cav'=>'105','defense_cav_max'=>'139.8','cost'=>'1910','cost_wood'=>'950','cost_clay'=>'555','cost_iron'=>'330','cost_crop'=>'75','time'=>'0','image'=>'g07'),
            array('id'=>'g08','tribe'=>'Gaul','tribe_id'=>'3','name'=>'Trebuchet','type'=>'O','upkeep'=>'6','carry'=>'0','speed'=>'3','offense'=>'70','offense_max'=>'118.7','defense_inf'=>'45','defense_inf_max'=>'90','defense_cav'=>'10','defense_cav_max'=>'49.7','cost'=>'3130','cost_wood'=>'960','cost_clay'=>'1450','cost_iron'=>'630','cost_crop'=>'90','time'=>'0','image'=>'g08'),
            array('id'=>'g09','tribe'=>'Gaul','tribe_id'=>'3','name'=>'Chieftain','type'=>'O','upkeep'=>'4','carry'=>'0','speed'=>'5','offense'=>'40','offense_max'=>'40','defense_inf'=>'50','defense_inf_max'=>'50','defense_cav'=>'50','defense_cav_max'=>'50','cost'=>'144650','cost_wood'=>'30750','cost_clay'=>'45400','cost_iron'=>'31000','cost_crop'=>'37500','time'=>'0','image'=>'g09'),
            array('id'=>'g10','tribe'=>'Gaul','tribe_id'=>'3','name'=>'Settler','type'=>'D','upkeep'=>'1','carry'=>'3000','speed'=>'5','offense'=>'0','offense_max'=>'0','defense_inf'=>'80','defense_inf_max'=>'80','defense_cav'=>'80','defense_cav_max'=>'80','cost'=>'18100','cost_wood'=>'4400','cost_clay'=>'5600','cost_iron'=>'4200','cost_crop'=>'3900','time'=>'0','image'=>'g10'),
            array('id'=>'a01','tribe'=>'Nature','tribe_id'=>'4','name'=>'Rat','type'=>'S','upkeep'=>'1','carry'=>'0','speed'=>'20','offense'=>'10','offense_max'=>'10','defense_inf'=>'25','defense_inf_max'=>'25','defense_cav'=>'20','defense_cav_max'=>'20','cost'=>'100','cost_wood'=>'0','cost_clay'=>'0','cost_iron'=>'0','cost_crop'=>'100','time'=>'0','image'=>'a01'),
            array('id'=>'a02','tribe'=>'Nature','tribe_id'=>'4','name'=>'Spider','type'=>'S','upkeep'=>'1','carry'=>'0','speed'=>'20','offense'=>'20','offense_max'=>'20','defense_inf'=>'35','defense_inf_max'=>'35','defense_cav'=>'40','defense_cav_max'=>'40','cost'=>'0','cost_wood'=>'0','cost_clay'=>'0','cost_iron'=>'0','cost_crop'=>'0','time'=>'0','image'=>'a02'),
            array('id'=>'a03','tribe'=>'Nature','tribe_id'=>'4','name'=>'Serpent','type'=>'S','upkeep'=>'1','carry'=>'0','speed'=>'20','offense'=>'60','offense_max'=>'60','defense_inf'=>'40','defense_inf_max'=>'40','defense_cav'=>'60','defense_cav_max'=>'60','cost'=>'0','cost_wood'=>'0','cost_clay'=>'0','cost_iron'=>'0','cost_crop'=>'0','time'=>'0','image'=>'a03'),
            array('id'=>'a04','tribe'=>'Nature','tribe_id'=>'4','name'=>'Bat','type'=>'S','upkeep'=>'1','carry'=>'0','speed'=>'20','offense'=>'80','offense_max'=>'80','defense_inf'=>'66','defense_inf_max'=>'66','defense_cav'=>'50','defense_cav_max'=>'50','cost'=>'0','cost_wood'=>'0','cost_clay'=>'0','cost_iron'=>'0','cost_crop'=>'0','time'=>'0','image'=>'a04'),
            array('id'=>'a05','tribe'=>'Nature','tribe_id'=>'4','name'=>'Wild boar','type'=>'S','upkeep'=>'2','carry'=>'0','speed'=>'20','offense'=>'50','offense_max'=>'50','defense_inf'=>'70','defense_inf_max'=>'70','defense_cav'=>'33','defense_cav_max'=>'33','cost'=>'0','cost_wood'=>'0','cost_clay'=>'0','cost_iron'=>'0','cost_crop'=>'0','time'=>'0','image'=>'a05'),
            array('id'=>'a06','tribe'=>'Nature','tribe_id'=>'4','name'=>'Wolf','type'=>'S','upkeep'=>'2','carry'=>'0','speed'=>'20','offense'=>'100','offense_max'=>'100','defense_inf'=>'80','defense_inf_max'=>'80','defense_cav'=>'70','defense_cav_max'=>'70','cost'=>'0','cost_wood'=>'0','cost_clay'=>'0','cost_iron'=>'0','cost_crop'=>'0','time'=>'0','image'=>'a06'),
            array('id'=>'a07','tribe'=>'Nature','tribe_id'=>'4','name'=>'Bear','type'=>'S','upkeep'=>'3','carry'=>'0','speed'=>'20','offense'=>'250','offense_max'=>'250','defense_inf'=>'140','defense_inf_max'=>'140','defense_cav'=>'200','defense_cav_max'=>'200','cost'=>'0','cost_wood'=>'0','cost_clay'=>'0','cost_iron'=>'0','cost_crop'=>'0','time'=>'0','image'=>'a07'),
            array('id'=>'a08','tribe'=>'Nature','tribe_id'=>'4','name'=>'Crocodile','type'=>'S','upkeep'=>'3','carry'=>'0','speed'=>'20','offense'=>'450','offense_max'=>'450','defense_inf'=>'380','defense_inf_max'=>'380','defense_cav'=>'240','defense_cav_max'=>'240','cost'=>'0','cost_wood'=>'0','cost_clay'=>'0','cost_iron'=>'0','cost_crop'=>'0','time'=>'0','image'=>'a08'),
            array('id'=>'a09','tribe'=>'Nature','tribe_id'=>'4','name'=>'Tiger','type'=>'S','upkeep'=>'3','carry'=>'0','speed'=>'20','offense'=>'200','offense_max'=>'200','defense_inf'=>'170','defense_inf_max'=>'170','defense_cav'=>'250','defense_cav_max'=>'250','cost'=>'0','cost_wood'=>'0','cost_clay'=>'0','cost_iron'=>'0','cost_crop'=>'0','time'=>'0','image'=>'a09'),
            array('id'=>'a10','tribe'=>'Nature','tribe_id'=>'4','name'=>'Elephant','type'=>'S','upkeep'=>'5','carry'=>'0','speed'=>'20','offense'=>'600','offense_max'=>'600','defense_inf'=>'440','defense_inf_max'=>'440','defense_cav'=>'520','defense_cav_max'=>'520','cost'=>'0','cost_wood'=>'0','cost_clay'=>'0','cost_iron'=>'0','cost_crop'=>'0','time'=>'0','image'=>'a10'),
            array('id'=>'n01','tribe'=>'Natar','tribe_id'=>'5','name'=>'Pikeman','type'=>'S','upkeep'=>'1','carry'=>'0','speed'=>'6','offense'=>'20','offense_max'=>'20','defense_inf'=>'35','defense_inf_max'=>'35','defense_cav'=>'50','defense_cav_max'=>'50','cost'=>'0','cost_wood'=>'0','cost_clay'=>'0','cost_iron'=>'0','cost_crop'=>'0','time'=>'0','image'=>'n01'),
            array('id'=>'n02','tribe'=>'Natar','tribe_id'=>'5','name'=>'Thorned Warrior','type'=>'S','upkeep'=>'1','carry'=>'0','speed'=>'7','offense'=>'65','offense_max'=>'65','defense_inf'=>'30','defense_inf_max'=>'30','defense_cav'=>'10','defense_cav_max'=>'10','cost'=>'0','cost_wood'=>'0','cost_clay'=>'0','cost_iron'=>'0','cost_crop'=>'0','time'=>'0','image'=>'n02'),
            array('id'=>'n03','tribe'=>'Natar','tribe_id'=>'5','name'=>'Guardsman','type'=>'S','upkeep'=>'1','carry'=>'0','speed'=>'6','offense'=>'100','offense_max'=>'100','defense_inf'=>'90','defense_inf_max'=>'90','defense_cav'=>'75','defense_cav_max'=>'75','cost'=>'0','cost_wood'=>'0','cost_clay'=>'0','cost_iron'=>'0','cost_crop'=>'0','time'=>'0','image'=>'n03'),
            array('id'=>'n04','tribe'=>'Natar','tribe_id'=>'5','name'=>'Birds Of Prey','type'=>'S','upkeep'=>'1','carry'=>'0','speed'=>'25','offense'=>'0','offense_max'=>'0','defense_inf'=>'10','defense_inf_max'=>'10','defense_cav'=>'0','defense_cav_max'=>'0','cost'=>'0','cost_wood'=>'0','cost_clay'=>'0','cost_iron'=>'0','cost_crop'=>'0','time'=>'0','image'=>'n04'),
            array('id'=>'n05','tribe'=>'Natar','tribe_id'=>'5','name'=>'Axerider','type'=>'S','upkeep'=>'2','carry'=>'0','speed'=>'14','offense'=>'155','offense_max'=>'155','defense_inf'=>'80','defense_inf_max'=>'80','defense_cav'=>'50','defense_cav_max'=>'50','cost'=>'0','cost_wood'=>'0','cost_clay'=>'0','cost_iron'=>'0','cost_crop'=>'0','time'=>'0','image'=>'n05'),
            array('id'=>'n06','tribe'=>'Natar','tribe_id'=>'5','name'=>'Natarian Knight','type'=>'S','upkeep'=>'3','carry'=>'0','speed'=>'12','offense'=>'170','offense_max'=>'170','defense_inf'=>'140','defense_inf_max'=>'140','defense_cav'=>'80','defense_cav_max'=>'80','cost'=>'0','cost_wood'=>'0','cost_clay'=>'0','cost_iron'=>'0','cost_crop'=>'0','time'=>'0','image'=>'n06'),
            array('id'=>'n07','tribe'=>'Natar','tribe_id'=>'5','name'=>'Warelephant','type'=>'S','upkeep'=>'4','carry'=>'0','speed'=>'5','offense'=>'250','offense_max'=>'250','defense_inf'=>'120','defense_inf_max'=>'120','defense_cav'=>'150','defense_cav_max'=>'150','cost'=>'0','cost_wood'=>'0','cost_clay'=>'0','cost_iron'=>'0','cost_crop'=>'0','time'=>'0','image'=>'n07'),
            array('id'=>'n08','tribe'=>'Natar','tribe_id'=>'5','name'=>'Ballista','type'=>'S','upkeep'=>'5','carry'=>'0','speed'=>'3','offense'=>'60','offense_max'=>'60','defense_inf'=>'45','defense_inf_max'=>'45','defense_cav'=>'10','defense_cav_max'=>'10','cost'=>'0','cost_wood'=>'0','cost_clay'=>'0','cost_iron'=>'0','cost_crop'=>'0','time'=>'0','image'=>'n08'),
            array('id'=>'n09','tribe'=>'Natar','tribe_id'=>'5','name'=>'Natarian Emperor','type'=>'S','upkeep'=>'1','carry'=>'0','speed'=>'5','offense'=>'80','offense_max'=>'80','defense_inf'=>'50','defense_inf_max'=>'50','defense_cav'=>'50','defense_cav_max'=>'50','cost'=>'0','cost_wood'=>'0','cost_clay'=>'0','cost_iron'=>'0','cost_crop'=>'0','time'=>'0','image'=>'n09'),
            array('id'=>'n10','tribe'=>'Natar','tribe_id'=>'5','name'=>'Settler','type'=>'S','upkeep'=>'1','carry'=>'0','speed'=>'5','offense'=>'30','offense_max'=>'30','defense_inf'=>'40','defense_inf_max'=>'40','defense_cav'=>'40','defense_cav_max'=>'40','cost'=>'0','cost_wood'=>'0','cost_clay'=>'0','cost_iron'=>'0','cost_crop'=>'0','time'=>'0','image'=>'n10'),
            array('id'=>'e01','tribe'=>'Egyptian','tribe_id'=>'6','name'=>'Slave Militia','type'=>'D','upkeep'=>'1','carry'=>'15','speed'=>'7','offense'=>'10','offense_max'=>'17.9','defense_inf'=>'30','defense_inf_max'=>'40.9','defense_cav'=>'20','defense_cav_max'=>'29.4','cost'=>'150','cost_wood'=>'45','cost_clay'=>'60','cost_iron'=>'30','cost_crop'=>'15','time'=>'0','image'=>'e01'),
            array('id'=>'e02','tribe'=>'Egyptian','tribe_id'=>'6','name'=>'Ash Warden','type'=>'D','upkeep'=>'1','carry'=>'50','speed'=>'6','offense'=>'30','offense_max'=>'40.9','defense_inf'=>'55','defense_inf_max'=>'69.6','defense_cav'=>'40','defense_cav_max'=>'52.4','cost'=>'420','cost_wood'=>'115','cost_clay'=>'100','cost_iron'=>'145','cost_crop'=>'60','time'=>'0','image'=>'e02'),
            array('id'=>'e03','tribe'=>'Egyptian','tribe_id'=>'6','name'=>'Khopesh Warrior','type'=>'O','upkeep'=>'1','carry'=>'45','speed'=>'7','offense'=>'65','offense_max'=>'81.1','defense_inf'=>'50','defense_inf_max'=>'63.9','defense_cav'=>'20','defense_cav_max'=>'29.4','cost'=>'650','cost_wood'=>'170','cost_clay'=>'180','cost_iron'=>'220','cost_crop'=>'80','time'=>'0','image'=>'e03'),
            array('id'=>'e04','tribe'=>'Egyptian','tribe_id'=>'6','name'=>'Sopdu Explorer','type'=>'S','upkeep'=>'2','carry'=>'0','speed'=>'16','offense'=>'0','offense_max'=>'12.7','defense_inf'=>'20','defense_inf_max'=>'35.7','defense_cav'=>'10','defense_cav_max'=>'24.2','cost'=>'380','cost_wood'=>'170','cost_clay'=>'150','cost_iron'=>'20','cost_crop'=>'40','time'=>'0','image'=>'e04'),
            array('id'=>'e05','tribe'=>'Egyptian','tribe_id'=>'6','name'=>'Anhur Guard','type'=>'D','upkeep'=>'2','carry'=>'50','speed'=>'15','offense'=>'50','offense_max'=>'70.2','defense_inf'=>'110','defense_inf_max'=>'139.2','defense_cav'=>'50','defense_cav_max'=>'70.2','cost'=>'1090','cost_wood'=>'360','cost_clay'=>'330','cost_iron'=>'280','cost_crop'=>'120','time'=>'0','image'=>'e05'),
            array('id'=>'e06','tribe'=>'Egyptian','tribe_id'=>'6','name'=>'Resheph Chariot','type'=>'H','upkeep'=>'3','carry'=>'70','speed'=>'10','offense'=>'110','offense_max'=>'145.6','defense_inf'=>'120','defense_inf_max'=>'157.1','defense_cav'=>'150','defense_cav_max'=>'191.6','cost'=>'1800','cost_wood'=>'450','cost_clay'=>'560','cost_iron'=>'610','cost_crop'=>'180','time'=>'0','image'=>'e06'),
            array('id'=>'e07','tribe'=>'Egyptian','tribe_id'=>'6','name'=>'Ram','type'=>'O','upkeep'=>'3','carry'=>'0','speed'=>'4','offense'=>'55','offense_max'=>'82.4','defense_inf'=>'30','defense_inf_max'=>'53.6','defense_cav'=>'95','defense_cav_max'=>'128.3','cost'=>'1990','cost_wood'=>'995','cost_clay'=>'575','cost_iron'=>'340','cost_crop'=>'80','time'=>'0','image'=>'e07'),
            array('id'=>'e08','tribe'=>'Egyptian','tribe_id'=>'6','name'=>'Stone Catapult','type'=>'O','upkeep'=>'6','carry'=>'0','speed'=>'3','offense'=>'65','offense_max'=>'113','defense_inf'=>'55','defense_inf_max'=>'101.5','defense_cav'=>'10','defense_cav_max'=>'49.7','cost'=>'3250','cost_wood'=>'980','cost_clay'=>'1510','cost_iron'=>'660','cost_crop'=>'100','time'=>'0','image'=>'e08'),
            array('id'=>'e09','tribe'=>'Egyptian','tribe_id'=>'6','name'=>'Nomarch','type'=>'O','upkeep'=>'4','carry'=>'0','speed'=>'4','offense'=>'40','offense_max'=>'40','defense_inf'=>'50','defense_inf_max'=>'50','defense_cav'=>'50','defense_cav_max'=>'50','cost'=>'160000','cost_wood'=>'34000','cost_clay'=>'50000','cost_iron'=>'34000','cost_crop'=>'42000','time'=>'0','image'=>'e09'),
            array('id'=>'e10','tribe'=>'Egyptian','tribe_id'=>'6','name'=>'Settler','type'=>'D','upkeep'=>'1','carry'=>'3000','speed'=>'5','offense'=>'0','offense_max'=>'0','defense_inf'=>'80','defense_inf_max'=>'80','defense_cav'=>'80','defense_cav_max'=>'80','cost'=>'19000','cost_wood'=>'4560','cost_clay'=>'5890','cost_iron'=>'4370','cost_crop'=>'4180','time'=>'0','image'=>'e10'),
            array('id'=>'h01','tribe'=>'Hun','tribe_id'=>'7','name'=>'Mercenary','type'=>'H','upkeep'=>'1','carry'=>'30','speed'=>'6','offense'=>'35','offense_max'=>'46.6','defense_inf'=>'40','defense_inf_max'=>'52.4','defense_cav'=>'30','defense_cav_max'=>'40.9','cost'=>'290','cost_wood'=>'130','cost_clay'=>'80','cost_iron'=>'40','cost_crop'=>'40','time'=>'0','image'=>'h01'),
            array('id'=>'h02','tribe'=>'Hun','tribe_id'=>'7','name'=>'Bowman','type'=>'O','upkeep'=>'1','carry'=>'10','speed'=>'6','offense'=>'50','offense_max'=>'63.9','defense_inf'=>'30','defense_inf_max'=>'40.9','defense_cav'=>'10','defense_cav_max'=>'17.9','cost'=>'370','cost_wood'=>'140','cost_clay'=>'110','cost_iron'=>'60','cost_crop'=>'60','time'=>'0','image'=>'h02'),
            array('id'=>'h03','tribe'=>'Hun','tribe_id'=>'7','name'=>'Spotter','type'=>'S','upkeep'=>'2','carry'=>'10','speed'=>'19','offense'=>'0','offense_max'=>'12.7','defense_inf'=>'20','defense_inf_max'=>'35.7','defense_cav'=>'10','defense_cav_max'=>'24.2','cost'=>'380','cost_wood'=>'170','cost_clay'=>'150','cost_iron'=>'20','cost_crop'=>'40','time'=>'0','image'=>'h03'),
            array('id'=>'h04','tribe'=>'Hun','tribe_id'=>'7','name'=>'Steppe Rider','type'=>'O','upkeep'=>'2','carry'=>'15','speed'=>'16','offense'=>'120','offense_max'=>'150.7','defense_inf'=>'30','defense_inf_max'=>'47.2','defense_cav'=>'15','defense_cav_max'=>'30','cost'=>'895','cost_wood'=>'290','cost_clay'=>'370','cost_iron'=>'190','cost_crop'=>'45','time'=>'0','image'=>'h04'),
            array('id'=>'h05','tribe'=>'Hun','tribe_id'=>'7','name'=>'Marksman','type'=>'H','upkeep'=>'2','carry'=>'70','speed'=>'16','offense'=>'115','offense_max'=>'145','defense_inf'=>'80','defense_inf_max'=>'104.7','defense_cav'=>'70','defense_cav_max'=>'93.2','cost'=>'1050','cost_wood'=>'320','cost_clay'=>'350','cost_iron'=>'330','cost_crop'=>'50','time'=>'0','image'=>'h05'),
            array('id'=>'h06','tribe'=>'Hun','tribe_id'=>'7','name'=>'Marauder','type'=>'O','upkeep'=>'3','carry'=>'40','speed'=>'14','offense'=>'180','offense_max'=>'226.1','defense_inf'=>'60','defense_inf_max'=>'88.1','defense_cav'=>'40','defense_cav_max'=>'65.1','cost'=>'1760','cost_wood'=>'450','cost_clay'=>'560','cost_iron'=>'610','cost_crop'=>'140','time'=>'0','image'=>'h06'),
            array('id'=>'h07','tribe'=>'Hun','tribe_id'=>'7','name'=>'Ram','type'=>'O','upkeep'=>'3','carry'=>'90','speed'=>'4','offense'=>'65','offense_max'=>'93.9','defense_inf'=>'30','defense_inf_max'=>'53.6','defense_cav'=>'90','defense_cav_max'=>'122.6','cost'=>'1820','cost_wood'=>'1060','cost_clay'=>'330','cost_iron'=>'360','cost_crop'=>'70','time'=>'0','image'=>'h07'),
            array('id'=>'h08','tribe'=>'Hun','tribe_id'=>'7','name'=>'Catapult','type'=>'O','upkeep'=>'6','carry'=>'10','speed'=>'3','offense'=>'45','offense_max'=>'90','defense_inf'=>'55','defense_inf_max'=>'101.5','defense_cav'=>'10','defense_cav_max'=>'49.7','cost'=>'2910','cost_wood'=>'950','cost_clay'=>'1280','cost_iron'=>'620','cost_crop'=>'60','time'=>'0','image'=>'h08'),
            array('id'=>'h09','tribe'=>'Hun','tribe_id'=>'7','name'=>'Logades','type'=>'O','upkeep'=>'4','carry'=>'50','speed'=>'5','offense'=>'40','offense_max'=>'40','defense_inf'=>'50','defense_inf_max'=>'50','defense_cav'=>'50','defense_cav_max'=>'50','cost'=>'117600','cost_wood'=>'37200','cost_clay'=>'27600','cost_iron'=>'25200','cost_crop'=>'27600','time'=>'0','image'=>'h09'),
            array('id'=>'h10','tribe'=>'Hun','tribe_id'=>'7','name'=>'Settler','type'=>'D','upkeep'=>'1','carry'=>'80','speed'=>'5','offense'=>'0','offense_max'=>'0','defense_inf'=>'80','defense_inf_max'=>'80','defense_cav'=>'80','defense_cav_max'=>'80','cost'=>'20900','cost_wood'=>'6100','cost_clay'=>'4600','cost_iron'=>'4800','cost_crop'=>'5400','time'=>'0','image'=>'h10')            
        );
        DB::table('units')->insert($data);
    }
}