<?php  namespace VaahCms\Themes\BlogTheme\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ExtendController extends Controller
{

    //----------------------------------------------------------
    public function __construct()
    {
    }
    //----------------------------------------------------------
    public static function topLeftMenu()
    {
        $links = [];

        $response['status'] = 'success';
        $response['data'] = $links;

        return $response;

    }
    //----------------------------------------------------------
    public static function topRightUserMenu()
    {
        $links = [];

        $response['status'] = 'success';
        $response['data'] = $links;

        return $response;
    }
    //----------------------------------------------------------
    public static function sidebarMenu()
    {
        $links = [];

        $links[0] = [
            'link' => route('vh.backend.blogtheme'),
            'icon' => 'paint-brush',
            'label'=> 'BlogTheme'
        ];

        $response['status'] = 'success';
        $response['data'] = $links;

        return $response;
    }
    //----------------------------------------------------------

}
