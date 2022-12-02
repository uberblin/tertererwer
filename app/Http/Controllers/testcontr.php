<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class testcontr extends Controller 
{ 

private $posts;
		
		public function __construct()
		{
			$this->posts = [
				1 => [
					'title'  => 'Тайтл страницы 1',
					
					'author' => 'Автор страницы 1',
					'date'   => 'Дата публикации страницы 1',
					'teaser' => 'Короткое описание страницы 1',
					'text'   => 'Полный текст страницы 1',
				],
				2 => [
					'title'  => 'Тайтл страницы 2',
					'author' => 'Автор страницы 2',
					'date'   => 'Дата публикации страницы 2',
					'teaser' => 'Короткое описание страницы 2',
					'text'   => 'Полный текст страницы 2',
				],
				3 => [
					'title'  => 'Тайтл страницы 3',
					'author' => 'Автор страницы 3',
					'date'   => 'Дата публикации страницы 3',
					'teaser' => 'Короткое описание страницы 3',
					'text'   => 'Полный текст страницы 3',
				],
				4 => [
					'title'  => 'Тайтл страницы 4',
					'author' => 'Автор страницы 4',
					'date'   => 'Дата публикации страницы 4',
					'teaser' => 'Короткое описание страницы 4',
					'text'   => 'Полный текст страницы 4',
				],
				5 => [
					'title'  => 'Тайтл страницы 5',
					'author' => 'Автор страницы 5',
					'date'   => 'Дата публикации страницы 5',
					'teaser' => 'Короткое описание страницы 5',
					'text'   => 'Полный текст страницы 5',
				],
			];
			return wiev('test.test_detail', 
				["link"=>$links, "rr"=>$this->post,  "id"=>$id, 
				"uu"=>$this->post[$id]]);
		}
	





	public function showmass()
	{
      $links = [
		[
			'text' => 'text1',
			'href' => 'href1',
			'active' => 0
		],
		[
			'text' => 'text2',
			'href' => 'href2',
			'active' => 0
		],
		[
			'text' => 'text3',
			'href' => 'href3',
			'active' => 0
		],
	];
                return view('test.test', ["link"=>$links]);
	}

}
//	public function show() 
//	{
//		return view('test.test');
//	} 

//
//	public function showTwo() 
//	{ 
//		return view('test.test', ['name' => 'OLEG', 'surname' => 'YO']);
//	}


//	public function show1() 
//	{ 
//		return view('test.test', ['var1' => '0', 'var2' => '0', 'var3' => '0']);
//	}


//	public function show2() 
//	{ 
//		return view('test.test', ['name' => 'oleg', 'age' => '20', 'salary' => '100000', 't' => 'color:orange;']);
//	}


//	public function showmass()
//	{
//		return view('test.test', ['name' => ['Igor'], 'age'=>['42'], 'salary'=>['26000']]);
//	}


	// public function showmass()
//html/<p>страна:  {{ ($location['country']) ?? 'Россия' }} </p>
//<p>город:  {{ ($location['city']) ?? 'Москва' }} </p>/
	//{
	//	return view('test.test', ['location' =>['country' => 'ere', 'city'=>'rere']]);
	//}

   /* public function showmass() {
    	$str='<b>строка</b>';
	
		return view('test.test', ['e'=>$str]);
	}*/
	// public function showmass() {
    //	$age=99;
	
	//	return view('test.test', ['age'=>$age]);
	//}