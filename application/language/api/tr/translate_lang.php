<?php

$lang['aaa']="asdaskdalksdlka";






// FORM VALİDATİON
$lang['form_validation_required']		= "<strong> {field} </strong>  alanının doldurulması zorunludur.";
$lang['form_validation_isset']			= "<strong> {field} </strong>  alanına bir veri girilmelidir.";
$lang['form_validation_valid_email']		= "<strong> {field} </strong>  alanına geçerli bir eposta adresi girilmelidir.";
$lang['form_validation_valid_emails']		= "<strong> {field} </strong>  alanına girdiğiniz tüm eposta adresleri geçerli olmalıdır.";
$lang['form_validation_valid_url']		= "<strong> {field} </strong>  alanına geçerli bir internet adresi girilmelidir.";
$lang['form_validation_valid_ip']		= "<strong> {field} </strong>  alanına geçerli bir IP adresi girmelisiniz.";
$lang['form_validation_min_length']		=  "<strong> {field} </strong>  alanına en az {param} karakter girilmelidir.";
$lang['form_validation_max_length']		= "<strong> {field} </strong>  alanına en fazla {param} karakter girilmelidir.";
$lang['form_validation_exact_length']		= "<strong> {field} </strong>  alanına tam olarak {param} karakter girilmelidir.";
$lang['form_validation_alpha']			= "<strong> {field} </strong>  alanına sadece alfabedeki karakterler girilmelidir.";
$lang['form_validation_alpha_numeric']		= "<strong> {field} </strong>  alanına sadece alfa-nümerik karakterler girilmelidir.";
$lang['form_validation_alpha_numeric_spaces']	= 'The <strong> {field} </strong>  field may only contain alpha-numeric characters and spaces.';
$lang['form_validation_alpha_dash']		= "<strong> {field} </strong>  alanına sadece alfa-nümerik karakterler, altçizgi ve kesikli çizgi girilmelidir.";
$lang['form_validation_numeric']		= "<strong> {field} </strong>  alanına sadece sayı(lar) girilmelidir.";
$lang['form_validation_is_numeric']		= "<strong> {field} </strong>  alanına sadece sayı(lar) girilmelidir.";
$lang['form_validation_integer']		= "<strong> {field} </strong>  alanına sadece tam sayı girilmelidir.";
$lang['form_validation_regex_match']		= "<strong> {field} </strong>  alanına uygun formatta veri girmelisiniz.";
$lang['form_validation_matches']		= "<strong> {field} </strong>  alanındaki veri {param} alanındaki veri ile eşleşmiyor.";
$lang['form_validation_differs']		= 'The <strong> {field} </strong>  field must differ from the {param} field.';
$lang['form_validation_is_unique'] 		= "<strong> {field} </strong>  alanına eşsiz bir değer girmelisiniz.";
$lang['form_validation_is_natural']		= "<strong> {field} </strong>  alanına sadece sayı(lar) girilmelidir.";
$lang['form_validation_is_natural_no_zero']	= "<strong> {field} </strong>  alanına sadece sıfırdan büyük sayı girilmelidir.";
$lang['form_validation_decimal']		= "<strong> {field} </strong>  alanına sadece ondalık sayı girilmelidir.";
$lang['form_validation_less_than']		= "<strong> {field} </strong>  alanına sadece {param} sayısından küçük değer girilmelidir.";
$lang['form_validation_less_than_equal_to']	= ' <strong> {field} </strong>  alanı {param}\'e eşit veya daha küçük bir sayı içermelidir.';
$lang['form_validation_greater_than']		= "<strong> {field} </strong>  alanına sadece {param} sayısından büyük değer girilmelidir.";
$lang['form_validation_greater_than_equal_to']	= "{field} alanı, {param}'e eşit veya daha büyük bir sayı içermelidir.";
$lang['form_validation_error_message_not_set']	= "Unable to access an error message corresponding to your field name <strong> {field} </strong> .";
$lang['form_validation_in_list']		= "The <strong> {field} </strong>  field must be one of: {param}.";

// UPLOAD VALİDATİON
$lang['upload_userfile_not_set'] = 'userfile isimli bir post değişkeni bulunamadı.';
$lang['upload_file_exceeds_limit'] = 'Yüklemeye çalıştığınız dosyanın boyutu PHP konfigürasyonundaki izin verilen yüklenebilecek maksimum dosya boyutunu aşıyor.';
$lang['upload_file_exceeds_form_limit'] = 'Yüklemek istediğiniz dosya formda tanımlanmış limiti aşıyor.';
$lang['upload_file_partial'] = 'Yüklemeye çalıştığınız dosyanın tamamı yüklenemedi.';
$lang['upload_no_temp_directory'] = 'Geçici dosya dizini bulunamadı.';
$lang['upload_unable_to_write_file'] = 'Dosya sabit diske yazılamadı.';
$lang['upload_stopped_by_extension'] = 'Dosya yüklenmesi EXTENSION tarafından durduruldu.';
$lang['upload_no_file_selected'] = 'Yüklemek için dosya seçmediniz.';
$lang['upload_invalid_filetype'] = 'Seçtiğiniz dosya türünün yüklenmesine izin verilmiyor.';
$lang['upload_invalid_filesize'] = 'Yüklemeye çalıştığınız dosyanın boyutu izin verilen dosya boyutunu aşıyor.';
$lang['upload_invalid_dimensions'] = 'Yüklemeye çalıştığınız resim dosyasının eni ve boyu, izin verilen maksimum en ve boy uzunluklarını aşıyor.';
$lang['upload_destination_error'] = 'Yüklediğiniz dosyayı kopyalanacağı klasöre taşırken bir hata oluştu.';
$lang['upload_no_filepath'] = 'Yüklenilmek istenen dosya yolu geçersiz.';
$lang['upload_no_file_types'] = 'İzin verilen dosya türlerini belirlemediniz.';
$lang['upload_bad_filename'] = 'Yüklemeye çalıştığınız dosyayla aynı isme sahip bir dosya sunucuda zaten var.';
$lang['upload_not_writable'] = 'Yüklemeye çalıştığınız klasöre yazma izniniz yok.';