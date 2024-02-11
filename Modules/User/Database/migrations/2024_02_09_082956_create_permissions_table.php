<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Spatie\Permission\PermissionRegistrar;

return new class extends Migration {

    public function up(): void {

        // $tableNames = config('permission.table_names');
        // $columnNames = config('permission.column_names');
        // $teams = config('permission.teams');        

        // Schema::create($tableNames['permissions'], function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table -> string('name');
        //     $table -> string('guard_name');
        //     $table->timestamps();

        //     $table->unique(['name', 'guard_name']);
        // });

        // Schema::create($tableNames['roles'], function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table -> string('name');
        //     $table -> string('guard_name');
        //     $table->timestamps();

        //     $table->unique(['name', 'guard_name']);
        // });

    }

    public function down(): void {

        Schema::dropIfExists('permissions');
        Schema::dropIfExists('roles');
    }
};
