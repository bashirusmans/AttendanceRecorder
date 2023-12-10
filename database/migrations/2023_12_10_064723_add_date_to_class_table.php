<?php

// database/migrations/xxxx_xx_xx_xxxxxx_add_date_to_class_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDateToClassTable extends Migration
{
    public function up()
    {
        Schema::table('class', function (Blueprint $table) {
            $table->date('date')->after('credit_hours')->nullable();
        });
    }

    public function down()
    {
        Schema::table('class', function (Blueprint $table) {
            $table->dropColumn('date');
        });
    }
}

