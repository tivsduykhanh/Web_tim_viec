<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHososTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosos', function (Blueprint $table) {
            $table->id();
            $table->string('tenhoso');
            $table->string('imghoso');
            $table->string('hoten');
            $table->string('sdt');
            $table->string('email');
            $table->date('ngaysinh');
            $table->string('diachi');
            $table->longText('gioithieu');
<<<<<<< HEAD
            $table->longText('kynang');
            $table->longText('hocvan');
            $table->longText('kinhnghiem');
            $table->longText('hoatdong');
=======
            $table->text('kynang');
            $table->text('hocvan');
            $table->text('kinhnghiem');
            $table->text('hoatdong');
>>>>>>> 7b205d17fd2792194514ca89701f9c014d07c5e2
            $table->string('id_nguoitimviec');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hosos');
    }
}
