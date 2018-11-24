<?php include("./include/lib.php");
    $this->load->helper('url');
    if($log == 'error')
    {
        alertLogin($test);
        back();
    }
    else if($log == 'success')
    {
        redirect('auth/gomain');
    }
?>