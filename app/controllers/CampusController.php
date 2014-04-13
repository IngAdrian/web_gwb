<?php

class CampusController extends BaseController {

	public function index()
	{
		 // Verificamos que el usuario no esté autenticado
        if (Auth::check())
        {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return Redirect::to('campus/home');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return View::make('campus.index');
	}

	 /**
     * Valida los datos del usuario.
     */
    public function postLogin()
    {
        // validate the info, create rules for the inputs
        // Guardamos en un arreglo los datos del usuario.
        $rules = array(
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );

        $messages = array(
            
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules, $messages);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {
            // create our user data for the authentication
            $userdata = array(
                'email'     => Input::get('email'),
                'password'  => Input::get('password')
            );

            // attempt to do the login
            // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
            if (Auth::attempt($userdata,Input::get('remember-me', 0))) {
                // De ser datos válidos nos mandara a la bienvenida
                return Redirect::to('campus/home');           
            }       
            // validation not successful, send back to form 
            // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
            return Redirect::to('login')
                    ->with('error_login', 'Tus datos son incorrectos.')                 
                    ->withInput();

        }
 
    }

    /**
     * Muestra el formulario de login mostrando un mensaje de que cerró sesión.
     */

    public function logOut()
    {
        Auth::logout();
        return Redirect::to('campus')
                    ->with('mensaje_error', '¡Has cerrado sesión correctamente!.');
    }

}
