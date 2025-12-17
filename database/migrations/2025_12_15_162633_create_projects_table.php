<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('technology');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};


// <?php

// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Schema;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Database\Migrations\Migration;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::create('skills', function (Blueprint $table) {
//             $table->id();
//             $table->string('name')->unique();
//             $table->string('sub_skills',200)->nullable();
//             $table->string('image',150)->nullable();
//             $table->timestamps();
//         });

//         DB::table('skills')->unique()->insert([
//             [
//                 'name'=>'Backend',
//                 'sub_skills'=>'PHP, Laravel, SQl',
//                 'image'=>'⚙️',
//                 'created_at'=>row(),
//                 'updated_at'=>now(),
//             ],
//             [
//                 'name'=>'Design',
//                 'sub_skills'=>'Figma, Canva',
//                 'image'=>'🎨',
//                 'created_at'=>now(),
//                 'updated_at'=>now(),
//             ],
//         ]);





//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::dropIfExists('skills');
//     }
// };
