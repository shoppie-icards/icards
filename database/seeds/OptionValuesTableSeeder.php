<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\OptionValues as OptionValues;
class OptionValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('optionvalues::class)')->truncate();

		//linh vuc
		factory(App\OptionValues::class)::create(array(
			'option_id' =>1,
			'name'     => 'Cafe',
		));

		factory(App\OptionValues::class)::create(array(
			'option_id' =>1,
			'name'     => 'Ăn uống',
		));

		factory(App\OptionValues::class)::create(array(
			'option_id' =>1,
			'name'     => 'Mỹ phẩm',
		));

		factory(App\OptionValues::class)::create(array(
			'option_id' =>1,
			'name'     => 'Thời trang',
		));

		//quan huyen


		//1.  ha noi
		factory(App\OptionValues::class)::create(array(
			'option_id'=>2,
			'name'=>'Ba Đình',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>2,
			'name'=>'Cầu Giấy',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>2,
			'name'=>'Gia Lâm',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>2,
			'name'=>'Hà Đông',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>2,
			'name'=>'Hai Bà Trưng',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>2,
			'name'=>'Hoài Đức',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>2,
			'name'=>'Hoàn Kiếm',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>2,
			'name'=>'Hoàng Mai',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>2,
			'name'=>'Long Biên',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>2,
			'name'=>'Mê Linh',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>2,
			'name'=>'Sóc Sơn',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>2,
			'name'=>'Sơn Tây',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>2,
			'name'=>'Tây Hồ',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>2,
			'name'=>'Thanh Trì',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>2,
			'name'=>'Thanh Xuân',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>2,
			'name'=>'Từ Liêm',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>2,
			'name'=>'Ứng Hòa',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>2,
			'name'=>'Đông Anh',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>2,
			'name'=>'Đống Đa',
		));

		//3. TP Ho Chi Minh
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Bình Chánh',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Bình Tân',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Bình Thạnh',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Cần Giờ',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Củ Chi',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Gò vấp',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Hóc Môn',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'KDC Trung Sơn (Bình Chánh)',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Nhà Bè',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Phú Nhuận',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Quận 1',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Quận 2',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Quận 3',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Quận 4',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Quận 5',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Quận 6',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Quận 7',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Quận 8',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Quận 9',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Quận 10',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Quận 11',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Quận 12',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Tân Bình',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Tân Phú',
		));
		factory(App\OptionValues::class)::create(array(
			'option_id'=>3,
			'name'=>'Thủ Đức',
		));

    }
}
