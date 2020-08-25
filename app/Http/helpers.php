<?php
function rs($length = 10) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function upload($new_file , $prev_file=null)
{

    if ($prev_file &&  file_exists($prev_file)){
        \File::delete($prev_file);
    }
    $relative_path = "storage/app/public/images";
    $file_name = rs() .'.'. $new_file->getClientOriginalExtension();
    $new_file->move( base_path($relative_path) ,$file_name);
    return 'storage/images/' . $file_name;

}

 function translate_section_type ($word)
 {
     switch ($word){
         case 'features' :return 'خدمات';break ;
         case 'tabs' :return 'مجموع تب';break ;
         case 'prices' :return 'قیمت';break ;
         case 'cards' :return 'کارت ها';break ;
         case 'faq' :return 'پرسش و پاسخ';break ;
         case 'clients' :return 'مشتریان';break ;
         case 'posts' :return 'پست ها';break ;
         default :return $word;
     }

 }


