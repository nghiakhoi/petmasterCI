<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "ctrangchu";
$route['404_override'] = 'ctrangchu';


$route['trang-chu.html'] = 'ctrangchu';
$route['trang-chu-mobile.html'] = 'ctrangchumobile';
$route['san-pham-in-an.html'] = 'ctrangchu/loaisptheocha';
//$route['danh-muc/([a-zA-Z0-9-_]+)-([0-9]+).html'] = 'ctrangchu/loaisptheocha/$2';
$route['danh-muc-mobile/([a-zA-Z0-9-_]+)-([0-9]+).html'] = 'ctrangchumobile/loaisptheochamobile/$2';
$route['danh-muc-con/([a-zA-Z0-9-_]+)-([0-9]+).html'] = 'ctrangchu/loaisptheocon/$2';
$route['danh-muc-con-mobile/([a-zA-Z0-9-_]+)-([0-9]+).html'] = 'ctrangchumobile/loaisptheoconmobile/$2';
$route['danh-muc-sub-con/([a-zA-Z0-9-_]+)-([0-9]+).html'] = 'ctrangchu/loaisptheosubcon/$2';
$route['danh-muc-sub-con-mobile/([a-zA-Z0-9-_]+)-([0-9]+).html'] = 'ctrangchumobile/loaisptheosubconmobile/$2';
$route['sp/([a-zA-Z0-9-_]+)-([0-9]+).html'] = 'ctrangchu/chitiet/$2';
$route['dealmobile/([a-zA-Z0-9-_]+)-([0-9]+).html'] = 'ctrangchumobile/chitietmobile/$2';
$route['dang-ky-thanh-vien.html'] = 'ctrangchu/dangky';
$route['thong-tin-khach-hang.html'] = 'ctrangchu/thongtinkhachhang';
$route['dang-xuat.html'] = 'verify/logoutuser';
$route['dang-xuat1.html'] = 'verify/logoutuser1';
$route['dat-hang/([0-9]+).html'] = 'cgiohangno/add/$1';
$route['dat-hang-new/([0-9]+).html'] = 'cgiohangno/addnew/$1';
$route['dat-hang-mobile/([0-9]+).html'] = 'cgiohangnomobile/add/$1';
$route['trang-chu.html/([0-9]+)'] = 'ctrangchu/index/$1';
$route['trang-chu-mobile.html/([0-9]+)'] = 'ctrangchumobile/index/$1';
$route['moi-nhat.html'] = 'ctrangchu/newest';
$route['moi-nhat.html/([0-9]+)'] = 'ctrangchu/newest/index/$1';
$route['hot-nhat.html'] = 'ctrangchu/hot';
$route['hot-nhat.html/([0-9]+)'] = 'ctrangchu/hot/index/$1';
$route['ban-chay-nhat.html'] = 'ctrangchu/banchaynhat';
$route['ban-chay-nhat.html/([0-9]+)'] = 'ctrangchu/banchaynhat/index/$1';
$route['danh-muc-tin-tuc.html'] = 'ctrangchu/trangtintuc';
$route['danh-muc-tin-tuc.html/([0-9]+)'] = 'ctrangchu/trangtintuc/index/$1';
$route['tin-tuc/([a-zA-Z0-9-_]+)-([0-9]+).html'] = 'ctrangchu/chitiettintuc/$2';
$route['in-an/([a-zA-Z0-9-_]+)-([0-9]+).html'] = 'ctrangchu/chitietinan/$2';
$route['danh-muc/([a-zA-Z0-9-_]+)-([0-9]+).html'] = 'ctrangchu/loaisptheochabyid/$2';
$route['dich-vu-khac/([a-zA-Z0-9-_]+)-([0-9]+).html'] = 'ctrangchu/dichvukhac/$2';
$route['danh-muc-tin-tuc/([a-zA-Z0-9-_]+)-([0-9]+).html'] = 'ctrangchu/danhmuctintuc/$2';
$route['danh-muc-tin-tuc/([a-zA-Z0-9-_]+)-([0-9]+).html/index/(:num)'] = 'ctrangchu/danhmuctintuc/$2/index/$3';
$route['danh-muc-tin-tuc/([a-zA-Z0-9-_]+)-([0-9]+).html/index'] = 'ctrangchu/danhmuctintuc/$2';
$route['lien-he.html'] = 'ctrangchu/lienhe';
$route['gia-cong-thanh-pham.html'] = 'ctrangchu/giacong';
$route['che-do-giao-hang.html'] = 'ctrangchu/chedogiaohang';
$route['thank-you.html'] = 'ctrangchu/thankyou';
$route['loi-yeu-cau.html'] = 'ctrangchu/loiyeucau';

/* End of file routes.php */
/* Location: ./application/config/routes.php */