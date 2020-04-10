<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("media");
            $table->text("description");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("categorie_id");
            $table->timestamps();
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("categorie_id")->references("id")->on("categories")->onDelete("cascade");
        });

        //  c'est une table de jointure qui aurait pu s'appeler post_user mais on l'appelle likes :
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("post_id");
            $table->unique(["user_id", "post_id"]);
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("post_id")->references("id")->on("posts")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
