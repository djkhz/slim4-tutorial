<?php

require "../bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;
    // dd("test");
//   $tables = DB::select('SHOW TABLES');
//   dd($tables);
//  foreach ($tables as $table) {
// // //     Capsule::schema()->drop($table->Tables_in_pos);
//     echo 'Table ' . $table->Tables_in__cnp_db . ' Droped. <br>';
// } 
// $tables = DB::select('SHOW TABLES');
// // dd($tables);
// foreach ($tables as $table) {
//     // Capsule::schema()->drop($table->Tables_in_cnp_db);
//     // dd($table->Tables_in_cnp_db);
//     // echo $table->Tables_in_cnp_db;
//     echo 'Table ' . $table->Tables_in_cnp_db. ' Droped. <br>';
//     // echo 'Table ' . $table->Tables_in__cnp_db . ' Droped. <br>';
// }
// // public function down()
// //     {
// //         Schema::disableForeignKeyConstraints();
// //         Schema::table('services', function(Blueprint $table){
// //             $table->dropForeign(['animal_type_id']);
// //         });

// //         Schema::dropIfExists('services');
// //         Schema::enableForeignKeyConstraints();

// //     }


// Capsule::schema()->dropIfExists('orderdetails');

// Capsule::schema()->dropIfExists('orders');

// Capsule::schema()->dropIfExists('transactions');

// Capsule::schema()->dropIfExists('products');

// Capsule::schema()->dropIfExists('delivery_logs');

// Capsule::schema()->dropIfExists('stations');

// Capsule::schema()->dropIfExists('categories');

// Capsule::schema()->dropIfExists('shippers');

// Capsule::schema()->dropIfExists('customers');

// Capsule::schema()->dropIfExists('users');


Capsule::schema()->create('users', function ($table) {

    $table->increments('id');

    $table->string('name');

    $table->string('email')->unique();

    $table->string('password');

    $table->string('userimage')->nullable();

    $table->string('token')->nullable();

    $table->boolean('activate')->default('0');

    $table->integer('role')->default('0');

    $table->rememberToken();

    $table->timestamps();
});

Capsule::schema()->create('customers', function ($table) {

    $table->increments('id');

    $table->integer('user_id')->unsigned();

    $table->string('first_name');

    $table->string('last_name');

    $table->boolean('gender')->nullable();

    $table->date('dob')->nullable();

    $table->string('add')->nullable();

    $table->string('phone')->nullable();

    $table->string('whatsapp')->nullable();

    $table->string('id_card')->nullable();

    $table->string('bank_acc')->nullable();

    $table->string('remark')->nullable();

    $table->timestamps();

    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
});

Capsule::schema()->create('employees', function ($table) {

    $table->increments('id');

    $table->integer('user_id')->unsigned();

    $table->string('first_name');

    $table->string('last_name');

    $table->boolean('gender')->nullable();

    $table->date('dob')->nullable();

    $table->string('add')->nullable();

    $table->string('phone')->nullable();

    $table->string('whatsapp')->nullable();

    $table->string('id_card')->nullable();

    $table->string('bank_acc')->nullable();

    $table->string('remark')->nullable();

    $table->timestamps();

    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
});


Capsule::schema()->create('categories', function ($table) {

    $table->increments('id');

    $table->string('name')->unique();

    $table->string('description')->nullable();

    $table->string('image')->nullable();

    $table->double('price')->nullable()->default('0');

    $table->string('type');

    $table->timestamps();
});


Capsule::schema()->create('shippers', function ($table) {

    $table->increments('id');

    // $table->integer('categories_id')->unsigned();

    $table->string('name');

    $table->string('plate_no')->unique();

    $table->double('volume');

    $table->string('type');

    $table->boolean('source')->default('0'); //internal or external

    // $table->integer('visited')->default('0');

    $table->string('remark');

    $table->timestamps();

    // $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
});

Capsule::schema()->create('trailers', function ($table) {

    $table->increments('id');

    $table->string('name');

    $table->string('plate_no')->unique();

    $table->double('volume');

    $table->boolean('source')->default('0'); //internal or external

    // $table->integer('visited')->default('0');

    $table->string('remark');

    $table->timestamps();

    // $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
});
Capsule::schema()->create('products', function ($table) {

    $table->increments('id');

    $table->integer('categories_id')->unsigned();

    $table->string('name');

    $table->string('description')->nullable();

    $table->double('price');

    $table->double('volume');
    
    //$table->dateTime('date');

    // $table->integer('visited')->default('0');

    $table->string('remark');

    $table->integer('user_id');

    $table->integer('station_id');

    $table->timestamps();

    $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
});

Capsule::schema()->create('stations', function ($table) {

    $table->increments('id');

    $table->string('name');

    $table->string('description')->nullable();

    $table->string('image')->nullable();

    $table->double('price')->nullable()->default('0');

    $table->string('district');

    $table->string('province');

    $table->timestamps();
});

Capsule::schema()->create('delivery_logs', function ($table) {

    $table->increments('id');

    $table->integer('shipper_id')->unsigned()->nullable();

    $table->integer('trailer_id')->unsigned()->nullable();

    $table->integer('employee_id')->unsigned()->nullable();

    $table->integer('from_station')->unsigned()->nullable();

    $table->integer('to_station')->unsigned()->nullable();

    $table->double('weight_init')->unsigned();

    $table->double('weight_total')->unsigned();

    $table->double('weight_mineral')->storedAs('weight_total - weight_init');
// virtualAs
    $table->integer('categories_id')->unsigned()->nullable();

    // $table->double('weight_mineral')->storedAs('weight_total-weight_init');
    $table->boolean('action')->default('0')->nullable();

    $table->timestamps();

    $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');

    $table->foreign('shipper_id')->references('id')->on('shippers')->onDelete('cascade');

    $table->foreign('trailer_id')->references('id')->on('trailers')->onDelete('cascade');

    $table->foreign('from_station')->references('id')->on('stations')->onDelete('cascade');

    $table->foreign('to_station')->references('id')->on('stations')->onDelete('cascade');

    $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
});

Capsule::schema()->create('orders', function ($table) {

    $table->increments('id');

    $table->integer('customer_id')->unsigned()->nullable();

    $table->integer('delivery_logs_id')->unsigned()->nullable();

    $table->integer('employee_id')->unsigned()->nullable();

    $table->integer('shipper_id')->unsigned()->nullable();

    $table->boolean('payment_type');

    //$table->dateTime('date');

    // $table->boolean('registered');

    $table->integer('status');

    $table->integer('total');

    $table->timestamps();

    $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');

    $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');

    $table->foreign('delivery_logs_id')->references('id')->on('delivery_logs')->onDelete('cascade');

    //$table->timestamps();
});
// Capsule::schema()->create('products_items', function ($table) {

//     $table->increments('id');

//     $table->integer('products_id')->unsigned();

//     //$table->integer('products_images_id')->unsigned();

//     $table->string('style');

//     $table->string('color');

//     $table->integer('price');
    
//     $table->string('remark')->nullable();
//     //$table->dateTime('date');

//     $table->timestamps();

//     $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');

//    // $table->foreign('products_image_id')->references('id')->on('products_image')->onDelete('cascade');

// });

// Capsule::schema()->create('products_images', function ($table) {

//     $table->increments('id');

//     $table->integer('products_items_id')->unsigned();;

//     $table->string('image');

//     $table->timestamps();

//     $table->foreign('products_items_id')->references('id')->on('products_items')->onDelete('cascade');
// });

Capsule::schema()->create('transactions', function ($table) {

    $table->increments('id');

    $table->integer('customer_id')->unsigned();

    $table->boolean('action')->default('0');

    $table->double('credit')->default('0');

    $table->double('debit')->default('0');

    $table->double('balance');

    $table->string('currency')->nullable();

    $table->string('remark')->nullable();

    $table->timestamps();

    $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
});

Capsule::schema()->create('orderdetails', function ($table) {

    $table->increments('id');

    $table->integer('orders_id')->unsigned();

    $table->integer('categorie_id')->unsigned();

    $table->double('price');

    $table->double('quantity');

    //$table->dateTime('date');

    $table->string('remark')->nullable();

    $table->timestamps();

    $table->foreign('orders_id')->references('id')->on('orders')->onDelete('cascade');

    $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');

    // $table->foreign('products_items_id')->references('id')->on('products_items')->onDelete('cascade');
});


// select `delivery_logs`.`action` AS `action`,`delivery_logs`.`categories_id` AS `categories_id`,`delivery_logs`.`to_station` AS `to_station`,sum(`delivery_logs`.`weight_mineral`) AS `total` from `delivery_logs` group by `delivery_logs`.`categories_id`,`delivery_logs`.`to_station`,`delivery_logs`.`action`