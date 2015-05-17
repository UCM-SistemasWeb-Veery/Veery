<?php  namespace controllers\auth;

use controllers\auth\passwordController as password,
        \core\session,
        \core\view;
class AuthController extends \core\controller {

    public function login(){
        if(Session::get('loggedin')){
            View::renderpartial('header');
            View::render('index');
            View::renderpartial('footer');
        }

        $model = new \models\authModel();

        $data['title'] = 'Login';

        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            if(password::verify($password, $model->getHash($_POST['username'])) == 0){
                $error[] = 'Usuario o contraseña incorrectos';
            }
            else{
                Session::set('loggedin', true);
                View::renderpartial('header');
                View::render('index');
                View::renderpartial('footer');
            }
        }
    }

    public function logout(){
        Session::destroy();
        //Url::previous();
    }
}