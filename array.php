<?php 
$arr=array(
		'a',
		'b',
		'c'
		);
$arr2=array(
		'd',
		'e',
		'f'
		);
$arr3=array(
			'g',
			'h',
			'i'
			);
$data = array();
foreach ($arr as $key => $row){
	$data[$key]['thumb'] = $row;
	$data[$key]['image'] = $arr2[$key];
	$data[$key]['desc'] = $arr3[$key];
}
print_r($data);


// newarray =array(
// 			[0]=>array(
// 					'thumb'=>'a'
// 					'image'=>d,
// 					),
// 			[1]=>array(
// 					'thumb'=>'b'
// 					'image'=>e,
// 					),
// 			[2]=>array(
// 					'thumb'=>'c'
// 					'image'=>f,
// 					)
// 			)