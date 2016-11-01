<?php
require_once('class/bcode128.class.php');


$code = isset($_REQUEST['code']) ? htmlspecialchars(trim($_REQUEST['code'])): '';
$options=array(
		'type'=>'A', //设定编码类型 不传递为自动判断
		'dpi'=>300, //设定DPI 72-300
		'width'=>400, //设定生成图片的宽度
		'height'=>200, //设定生成图片的高度
		'margin'=>'10', //边距 传递 1个参数时同时设定四周  传递 2个参数时 为左右,上下 传递4个参数时，为 左,下,右,上
		'img_type'=>'png', //输出图片类型 png jpg gif 
		'color'=>'#000', //输出颜色
		'out_file'=>'out_file/1.png', //输出的文件路径
		'top_text'=>'',
		'top_size'=>20,
		'top_margin'=>10,
		'top_font'=>'font/microhei.ttc',
		//'top_color'=>'#000', //顶部文字颜色
		'bottom_text'=>$code,
		'bottom_size'=>20,
		'bottom_margin'=>10,
		'bottom_font'=>'font/Arial.ttf',
		//'bottom_color'=>'#330000', //底部文字颜色
		 );
$font = new bcode128($code,$options);


$font->img();