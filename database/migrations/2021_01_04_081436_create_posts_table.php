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
            $table->string('slug');
            $table->string('title');
            $table->text('body');
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
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

// If in production use this method
// php artisan make:migration add_title_to_posts_table
// and add the column in the file manually
// and then add the file manually
// to add the table simply use:
// $table->string('title');
// to drop the column simply use:
// $table->dropColumn('title');
// php artisan migrate
// finally the changes have been made

// for faster development use
// php artisan help make:model
// php artisan make:mode Project -mc
// It creates a model for the project along with a migration and a controller.
