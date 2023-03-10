<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Models\Proveedor;
use \App\Models\lineaPedidos;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nombre',40);
            $table->string('marca',40);
            $table->string('modelo',40);
            $table->string('descripcion',100);
            $table->integer('precio');
            $table->integer('stock');
            // proveedor puede tener muchos productos
            $table->foreignIdFor(Proveedor::class)
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            // productos N a N con linea_pedido
            /*$table->foreignIdFor(linea_pedido::class)
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');*/
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
        Schema::dropIfExists('productos');
    }
};
