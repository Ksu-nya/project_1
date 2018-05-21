<? 

    include('db_fns.php');

    $view = empty($_GET['view']) ? 'index' : $_GET['view'];
    
    switch($view)
    {
        case('index'):            
        break;
        
        case('services'):
             $services = get_services();
        break;
        
        case('catalog'):
            $images = get_catalog();
        break;
        
        case('information'):
            $information = get_information();
        break;
        
        case('inf_item'):
            $id = $_GET['id'];
            $inf_item = get_inf_item($id);
        break;
    }

	include($_SERVER['DOCUMENT_ROOT'].'/views/layouts/art.php');

?>