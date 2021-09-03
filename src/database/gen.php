<?php

// require "bootstrap.php";
require "../bootstrap.php";

use Illuminate\Support\Carbon as CB;

DB::enableQueryLog();
//User create
////////////////
$user = User::create(['name' => "Admin",    'email' => "Admin@gmail.com",    'password' => password_hash("1234", PASSWORD_BCRYPT),]);
//$user = User::find(1);//->customer();
$user->employee()->create([

    'first_name' => "Admin01",
    'last_name' => "Admin",
    'gender' => 0,
    'dob' =>  CB::today(),
    'add' => "dongdok",
    'phone' => "02055555555",
    'whatsapp' => "02055555555",
    'id_card' => "09009090",
    'bank_acc' => "01010120203010012",
    'remark' => "*"

]);
//////////////////////
$user = User::create(['name' => "user01",    'email' => "user01@gmail.com",    'password' => password_hash("1234",PASSWORD_BCRYPT), ]);
//$user = User::find(1);//->customer();
$user->employee()->create([

    'first_name' => "user01",
    'last_name' => "test",
    'gender' => 0,
    'dob' =>  CB::today(),
    'add' => "Khamhuang",
    'phone' => "02055555555", 
    'whatsapp' => "02055555555",
    'id_card' => "09009090",
    'bank_acc' =>"01010120203010012",
    'remark' => "*"

]);

//User employee
////////////////
$user = User::create(['name' => "customer1",    'email' => "customer1@gmail.com",    'password' => password_hash("1234", PASSWORD_BCRYPT),]);
//$user = User::find(1);//->customer();
$user->customer()->create([

    'first_name' => "customer1",
    'last_name' => "company1",
    'gender' => 0,
    'dob' =>  CB::today(),
    'add' => "dongdok",
    'phone' => "02055555555",
    'whatsapp' => "02055555555",
    'id_card' => "09009090",
    'bank_acc' => "01010120203010012",
    'remark' => "*"

]);
////////////////
$user = User::create(['name' => "customer2",    'email' => "customer2@gmail.com",    'password' => password_hash("1234", PASSWORD_BCRYPT),]);
//$user = User::find(1);//->customer();
$user->customer()->create([

    'first_name' => "customer2",
    'last_name' => "company2",
    'gender' => 0,
    'dob' =>  CB::today(),
    'add' => "dongdok",
    'phone' => "02055555555",
    'whatsapp' => "02055555555",
    'id_card' => "09009090",
    'bank_acc' => "01010120203010012",
    'remark' => "*"

]);
//////////////////////
// ///////////////////////////////Cat & Product///////////////////////////////////////////////
//Category create
////////////////
//cate->product->pro_item->proimage

$cates = Categories::create([
    'name' => "ເເຮ່ເຫຼັກ ມາດຕະຖານ ຄຸນນະພາບ 55% ຂື້ນໄປ",
    'description' => "ຄຸນນະພາບ 55% ຂື້ນໄປ",
    'image' => "image01",
    'price' => "100",
    'type' => "ເເຮ່ເຫຼັກ" ]);

$cates = Categories::create([
    'name' => "ເເຮ່ເຫຼັກ ເມັດນ້ອຍ  (ເເຮ່ຝຸ່ນ) ຄຸນນະພາບ 47%",
    'description' => "ຄຸນນະພາບ 47%",
    'image' => "image01",
    'price' => "150",
    'type' => "ເເຮ່ຝຸ່ນ"
]);

$cates = Categories::create([
    'name' => "ເເຮ່ເຫຼັກ ເມັດນ້ອຍ  (ເເຮ່ຝຸ່ນ) ຄຸນນະພາບ 52%",
    'description' => "ຄຸນນະພາບ 52%",
    'image' => "image01",
    'price' => "200",
    'type' => "ເເຮ່ຝຸ່ນ"
]);
//////////station

$station = Stations::create([
    'name' => "ໂຮງງານ CNP ບ້ານ ນ້ຳເເລ້ງ",
    'description' => "",
    'image' => "image01",
    'district' => "ເມືອງຫຼາ",
    'province' => "ແຂວງອຸດົມໄຊ",
]);

$station = Stations::create([
    'name' => "ໂຮງງານ CNP ບ້ານ ໂພນໂຮມ",
    'description' => "",
    'image' => "image01",
    'district' => "ເມືອງໄຊ",
    'province' => "ແຂວງອຸດົມໄຊ",
]);

$station = Stations::create([
    'name' => "ໂຮງງານ CNP ບ້ານ ກໍ່ນ້ອຍ",
    'description' => "",
    'image' => "image01",
    'district' => "ເມືອງໄຊ",
    'province' => "ແຂວງອຸດົມໄຊ",
]);

$station = Stations::create([
    'name' => "ລານເກັບເເຮ່ CNP ຫຼັກ 16",
    'description' => "",
    'image' => "image01",
    'district' => "",
    'province' => "ແຂວງອຸດົມໄຊ",
]);

$station = Stations::create([
    'name' => "ລານເກັບເເຮ່ CNP ບ້ານ ນາໂຮມ",
    'description' => "",
    'image' => "image01",
    'district' => "ເມືອງນາໝໍ້",
    'province' => "ແຂວງອຸດົມໄຊ",
]);

//////////Shipper

$shipper = Shippers::create([
    'name' => "DONGFEN",
    'plate_no' => "ບກ 1982",
    'volume' => "21.31",
    'type' => "6 ລໍ້",
    'source' => "0",
    'remark' => "",
]);

$shipper = Shippers::create([
    'name' => "DONGFEN",
    'plate_no' => "ບກ 2960",
    'volume' => "17.03",
    'type' => "6 ລໍ້",
    'source' => "0",
    'remark' => "",
]);

$shipper = Shippers::create([
    'name' => "DONGFEN",
    'plate_no' => "ບກ 1562",
    'volume' => "19.72",
    'type' => "6 ລໍ້",
    'source' => "0",
    'remark' => "",
]);


$trailer = Trailers::create([
    'name' => "C1",
    'plate_no' => "ບກ 2623",
    'volume' => "21.31",
    'source' => "0",
    'remark' => "",
]);

$trailer = Trailers::create([
    'name' => "C2",
    'plate_no' => "ບກ 2538",
    'volume' => "17.03",
    'source' => "0",
    'remark' => "",
]);

$trailer = Trailers::create([
    'name' => "C3",
    'plate_no' => "ບກ 2484",
    'volume' => "19.72",
    'source' => "0",
    'remark' => "",
]);

//////delivery log

$delivery = Delivery_logs::create([
    'shipper_id' => "1",
    'employee_id' => "2",
    'from_station' => "4",
    'to_station' => "1",
    'weight_init' => "100",
    'weight_total' => "200",
    'categories_id' => "1",
    'action' => "0",
]);


$delivery = Delivery_logs::create([
    'shipper_id' => "2",
    'employee_id' => "2",
    'from_station' => "4",
    'to_station' => "2",
    'weight_init' => "100",
    'weight_total' => "150",
    'categories_id' => "1",
    'action' => "0",
]);

$delivery = Delivery_logs::create([
    'shipper_id' => "1",
    'employee_id' => "2",
    'from_station' => "5",
    'to_station' => "2",
    'weight_init' => "100",
    'weight_total' => "180",
    'categories_id' => "1",
    'action' => "0",
]);

$delivery = Delivery_logs::create([
    'shipper_id' => "1",
    'employee_id' => "2",
    'from_station' => "4",
    'to_station' => "1",
    'weight_init' => "100",
    'weight_total' => "200",
    'categories_id' => "1",
    'action' => "0",
]);


$delivery = Delivery_logs::create([
    'shipper_id' => "2",
    'employee_id' => "2",
    'from_station' => "4",
    'to_station' => "2",
    'weight_init' => "100",
    'weight_total' => "150",
    'categories_id' => "1",
    'action' => "0",
]);

$delivery = Delivery_logs::create([
    'shipper_id' => "1",
    'employee_id' => "2",
    'from_station' => "4",
    'to_station' => "3",
    'weight_init' => "100",
    'weight_total' => "180",
    'categories_id' => "2",
    'action' => "0",
]);

$delivery = Delivery_logs::create([
    'shipper_id' => "2",
    'employee_id' => "2",
    'from_station' => "4",
    'to_station' => "2",
    'weight_init' => "100",
    'weight_total' => "200",
    'categories_id' => "2",
    'action' => "0",
]);

$delivery = Delivery_logs::create([
    'shipper_id' => "2",
    'employee_id' => "2",
    'from_station' => "4",
    'to_station' => "2",
    'weight_init' => "100",
    'weight_total' => "200",
    'categories_id' => "2",
    'action' => "1",
]);

$delivery = Delivery_logs::create([
    'shipper_id' => "2",
    'employee_id' => "2",
    'from_station' => "4",
    'to_station' => "2",
    'weight_init' => "100",
    'weight_total' => "150",
    'categories_id' => "2",
    'action' => "1",
]);
// $Pro =$cates->products()->create([
//     'name' => "Color Block Crew Neck Tee",
//     'description' => "Get a put together casual look with this soft, color blocked short sleeve tee made from a must get stretch cotton blend It s a classic look that s ..",
//     'price' => 200,
//     'remark' => "*"
// ]);

//$cates->products()->products_item()->create([
// $Pro_item=$Pro->products_item()->create([
//     'style' => "Yellow 1116",
//     'color' => "Yellow",
//     'price' => 200,
//     'remark' => "*"
// ]);
// $Pro_item->Products_image()->create([
//     'image' => $Pro->id . "-0"
// ]);
// $Pro_item1 = $Pro->products_item()->create([
//     'style' => "Teal 2131",
//     'color' => "Teal",
//     'price' => 200,
//     'remark' => "*" //
// ]);
// $Pro_item1->Products_image()->create([
//     'image' => $Pro->id . "-1"
// ]);
// ///
// $Pro = $cates->products()->create([
//     'name' => "Slim Charcoal Gray Check Stretch Wool-Blend Suit Vest",
//     'description' => "The sharp, modern lines of the five button vest refine any look Pair with our matching jacket and pant for a complete suit, let it refine our crisp..",
//     'price' => 300,
//     'remark' => "*"
// ]);
// $Pro_item = $Pro->products_item()->create([
//     'style' => "Charcoal",
//     'color' => "Gray",
//     'price' => 300,
//     'remark' => "*"
// ]);
// $Pro_item->Products_image()->create([
//     'image' => $Pro->id . "-0"
// ]);
// $Pro_item->Products_image()->create([
//     'image' => $Pro->id . "-1"
// ]);
// //////////////women////
// $cates = Categories::create([
//     'name' => "Dress",
//     'description' => "Women Dress",
//     'image' => "image01",
//     'type' => "Women"
// ]);
// $Pro = $cates->products()->create([
//     'name' => "Solid Off The Shoulder Ruffle Fit And Flare Dress",
//     'description' => "Make your entrance in this chic fit and flare dress that features a sexy mini length, soft fabric and feminine ruffle accents Pair with sandals or ..",
//     'price' => 300,
//     'remark' => "*"
// ]);
// $Pro_item = $Pro->products_item()->create([
//     'style' => "red 2167",
//     'color' => "red",
//     'price' => 300,
//     'remark' => "*"
// ]);
// $Pro_item->Products_image()->create([
//     'image' => $Pro->id . "-0"
// ]);
// $Pro_item->Products_image()->create([
//     'image' => $Pro->id . "-1"
// ]);
// //
// $Pro = $cates->products()->create([
//     'name' => "Off The Shoulder Floral Embroidered Shift Dress",
//     'description' => "The easy fit and drop waist of this shift dress say casual, while bright embroidery, smooth fabric and cinched sleeves add a polished finish Wear t..",
//     'price' => 300,
//     'remark' => "*"
// ]);
// $Pro_item = $Pro->products_item()->create([
//     'style' => "Chambray Wash 1788 - 690.00 บาท",
//     'color' => "red",
//     'price' => 300,
//     'remark' => "*"
// ]);
// $Pro_item->Products_image()->create([
//     'image' => $Pro->id . "-0"
// ]);
// $Pro_item->Products_image()->create([
//     'image' => $Pro->id . "-1"
// ]);
///////////////////////////////////////////////////////////////////////////////////////
dd(DB::getQueryLog());
