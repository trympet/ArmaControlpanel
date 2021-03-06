<?php

class AdministrationController extends BaseController
{
    public function GetIndex()
    {
        if ( ! Auth::user()->can('see_administration'))
            return Redirect::to('backend#backend/dashboard/index');

        return View::make('backend.administration.index');
    }
	
	 public function GetUpdateArma()
    {
		if ( ! Auth::user()->can('see_administration'))
            return Redirect::to('backend#backend/dashboard/index');
		
        $data['profile'] = Auth::user();

        return View::make('backend.administration.update_arma', $data);
    }

	public function PostUpdateArma()
    {
		header('Content-Encoding: none;');

        set_time_limit(0);

        $handle = popen( $ServerController->steamCmdExe . " +login anonymous +force_install_dir \"" . $ServerController->arma3path . "\" +app_update 233780 validate +quit", "r");

        if (ob_get_level() == 0) 
            ob_start();

        while(!feof($handle)) {

            $buffer = fgets($handle);
            $buffer = trim(htmlspecialchars($buffer));

            echo $buffer . "<br />";
            echo str_pad('', 4096);    

            ob_flush();
            flush();
            sleep(1);
        }

        pclose($handle);
        ob_end_flush();
		
    }

    public function GetParameters()
    {
        if ( ! Auth::user()->can('see_parameters'))
            return Redirect::to('backend#backend/dashboard/index');
        
        $data['profile'] = Auth::user();
        $data['armapath'] = DB::select('select armapath from parameters', array(1));

        return View::make('backend.administration.parameters', $data);
    }
}
