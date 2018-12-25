<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTypesTable extends Migration
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path')->comment('relation path');
            $table->string('name')->comment('name of type');
            $table->boolean('is_bottom')->default(0)->comment('1表示沒有下一層了');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('item_types')->insert(
            [
                ['id' => 1, 'path' => '/1', 'name' => '水晶類'],
                ['id' => 2, 'path' => '/1/2', 'name' => '水晶粉'],
                ['id' => 3, 'path' => '/1/3', 'name' => '筆刷類'],
                ['id' => 4, 'path' => '/1/4', 'name' => '液體類'],
                ['id' => 5, 'path' => '/1/5', 'name' => '工具類'],
                ['id' => 6, 'path' => '/6', 'name' => '凝膠類'],
                ['id' => 7, 'path' => '/6/7', 'name' => '底層/上層/功能膠'],
                ['id' => 8, 'path' => '/6/8', 'name' => '建構/延甲凝膠'],
                ['id' => 9, 'path' => '/6/9', 'name' => '彩色凝膠（罐裝）'],
                ['id' => 10, 'path' => '/6/10', 'name' => '彩色甲油膠'],
                ['id' => 11, 'path' => '/6/11', 'name' => '彩繪凝膠'],
                ['id' => 12, 'path' => '/6/12', 'name' => '其他功能膠'],
                ['id' => 13, 'path' => '/6/13', 'name' => '3D粉雕類'],
                ['id' => 14, 'path' => '/6/14', 'name' => 'LED燈'],
                ['id' => 15, 'path' => '/6/15', 'name' => '筆刷類'],
                ['id' => 16, 'path' => '/6/16', 'name' => '液體類'],
                ['id' => 17, 'path' => '/6/17', 'name' => '工具類'],
                ['id' => 18, 'path' => '/6/18', 'name' => '套組'],
                ['id' => 19, 'path' => '/19', 'name' => '磨頭類'],
                ['id' => 20, 'path' => '/19/20', 'name' => '磨甲機'],
                ['id' => 21, 'path' => '/19/21', 'name' => '手部磨頭'],
                ['id' => 22, 'path' => '/19/22', 'name' => '足部磨頭'],
                ['id' => 23, 'path' => '/19/23', 'name' => '磨頭組合'],
                ['id' => 24, 'path' => '/19/24', 'name' => '工具類'],
                ['id' => 25, 'path' => '/25', 'name' => '進口貼紙'],
                ['id' => 26, 'path' => '/25/26', 'name' => 'Sha-Nail 寫真貼紙'],
                ['id' => 27, 'path' => '/25/27', 'name' => 'Tsumekira超薄貼紙'],
                ['id' => 28, 'path' => '/25/28', 'name' => '藍rish工藝'],
                ['id' => 29, 'path' => '/25/29', 'name' => 'Amaily'],
                ['id' => 30, 'path' => '/25/30', 'name' => '箔紙/星空貼'],
                ['id' => 31, 'path' => '/25/31', 'name' => '其他貼紙'],
                ['id' => 32, 'path' => '/25/32', 'name' => '工具'],
                ['id' => 33, 'path' => '/33', 'name' => '手足保養'],
                ['id' => 34, 'path' => '/33/34', 'name' => '指緣軟化劑'],
                ['id' => 35, 'path' => '/33/35', 'name' => '化妝水/乳液'],
                ['id' => 36, 'path' => '/33/36', 'name' => '指緣油/修護系列'],
                ['id' => 37, 'path' => '/33/37', 'name' => '功能型指甲油'],
                ['id' => 38, 'path' => '/33/38', 'name' => '指甲油'],
                ['id' => 39, 'path' => '/33/39', 'name' => '液體類'],
                ['id' => 40, 'path' => '/33/40', 'name' => '脫毛系列'],
                ['id' => 41, 'path' => '/33/41', 'name' => '其他'],
                ['id' => 42, 'path' => '/42', 'name' => '飾品水鑽'],
                ['id' => 43, 'path' => '/42/43', 'name' => '水鑽/飾品'],
                ['id' => 44, 'path' => '/42/44', 'name' => '其他/工具'],
                ['id' => 45, 'path' => '/45', 'name' => '亮片亮粉'],
                ['id' => 46, 'path' => '/45/46', 'name' => '亮片/亮粉'],
                ['id' => 47, 'path' => '/45/47', 'name' => '京都石'],
                ['id' => 48, 'path' => '/45/48', 'name' => '其他'],
                ['id' => 49, 'path' => '/49', 'name' => '工具雜貨'],
                ['id' => 50, 'path' => '/49/50', 'name' => '甘皮剪/推棒'],
                ['id' => 51, 'path' => '/49/51', 'name' => '甲片/甲片架'],
                ['id' => 52, 'path' => '/49/52', 'name' => '圍裙'],
                ['id' => 53, 'path' => '/49/53', 'name' => '液體類'],
                ['id' => 54, 'path' => '/49/54', 'name' => '筆刷類'],
                ['id' => 55, 'path' => '/49/55', 'name' => '磨棒類'],
                ['id' => 56, 'path' => '/49/56', 'name' => '其他'],
                ['id' => 57, 'path' => '/57', 'name' => '飾品手工藝'],
                ['id' => 58, 'path' => '/57/58', 'name' => '手工藝用凝膠'],
                ['id' => 59, 'path' => '/57/59', 'name' => 'UV/LED燈'],
                ['id' => 60, 'path' => '/57/60', 'name' => '貼紙'],
                ['id' => 61, 'path' => '/57/61', 'name' => '軟膜'],
                ['id' => 62, 'path' => '/57/62', 'name' => '著色劑'],
                ['id' => 63, 'path' => '/57/63', 'name' => '配件'],
                ['id' => 64, 'path' => '/57/64', 'name' => '工具'],
                ['id' => 65, 'path' => '/57/65', 'name' => '書籍'],
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_types');
    }
}
