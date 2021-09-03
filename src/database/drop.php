<?php

require "../bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;

// //  $tables = DB::select('SHOW TABLES');
// //  dd($tablesx)
// //  foreach ($tables as $table) {
// // // //     Capsule::schema()->drop($table->Tables_in_pos);
// // // //     echo 'Table ' . $table->Tables_in_pos . ' Droped. <br>';
// //} 
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


Capsule::schema()->dropIfExists('orderdetails');

Capsule::schema()->dropIfExists('orders');

Capsule::schema()->dropIfExists('transactions');

Capsule::schema()->dropIfExists('products');

Capsule::schema()->dropIfExists('delivery_logs');

Capsule::schema()->dropIfExists('stations');

Capsule::schema()->dropIfExists('categories');

Capsule::schema()->dropIfExists('shippers');

Capsule::schema()->dropIfExists('trailers');

Capsule::schema()->dropIfExists('customers');

Capsule::schema()->dropIfExists('employees');

Capsule::schema()->dropIfExists('users');

