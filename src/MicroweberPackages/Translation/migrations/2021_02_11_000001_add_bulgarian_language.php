<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use \Illuminate\Support\Facades\DB;

class AddBulgarianLanguage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('translations')) {

            $file = dirname(__DIR__) .  '/resources/lang_xlsx/bg_BG.xlsx';

            $import = new \MicroweberPackages\Translation\TranslationXlsxImport();
            return $import->import($file);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}