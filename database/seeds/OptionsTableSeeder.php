<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Options as Options;
class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options::class)')->truncate();
		factory(App\Options::class)::create(array(
			'name'     => 'Lĩnh vực',
		));
		
		//thinh thanh pho
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Hà Nội',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'TP. Hồ Chí Minh',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'An Giang',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Bà Rịa Vũng Tàu',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Bắc Giang',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Bắc Kạn',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Bạc Liêu',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Bắc Ninh',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Bến Tre',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Bình Dương',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Bình Phước',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Bình Thuận',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Bình Định',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Cà Mau',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Cần Thơ',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Cao Bằng',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Ðà Nẵng',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Ðắc Lắc',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Ðắk Nông',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Ðồng Nai',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Ðồng Tháp',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Ðiện Biên',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Gia Lai',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Hà Giang',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Hà Nam',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Hà Tây',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Hà Tĩnh',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Hải Dương',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Hải Phòng',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Hậu Giang',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Hoà Bình',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Huế',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Hưng Yên',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Khánh Hoà',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Kiên Giang',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Kon Tum',
		));
		factory(App\factory(App\Options::class)::class)::create(array(
			'name'     => 'Lai Châu',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Lâm Ðồng',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Lạng Sơn',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Lào Cai',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Long An',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Nam Ðịnh',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Nghệ An',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Ninh Bình',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Ninh Thuận',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Phú Thọ',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Phú Yên',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Quảng Bình',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Quảng Nam',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Quảng Ngãi',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Quảng Ninh',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Quảng Trị',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Sóc Trăng',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Sơn La',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Tây Ninh',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Thái Bình',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Thái Nguyên',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Thanh Hóa',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Tiền Giang',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Trà Vinh',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Tuyên Quang',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Vĩnh Long',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Vĩnh Phúc',
		));
		factory(App\Options::class)::create(array(
			'name'     => 'Yên Bái',
		));
    }
}
