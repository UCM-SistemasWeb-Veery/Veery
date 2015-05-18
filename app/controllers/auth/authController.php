<?php  namespace controllers\auth;

use controllers\auth\passwordController as password,
        \core\session as Session,
        \core\url as Url,
        \core\view as View;
class AuthController extends \core\controller {

    public function login(){
        if(Session::get('loggedin')){
            Url::previous();
        }

        $model = new \models\authModel();

        $data['title'] = 'Login';

        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            if(password::verify($password, $model->getHash($_POST['username'])) == 0){
                $error[] = 'Usuario o contraseña incorrectos';
                $data['username'] = $username;
                View::renderpartial('header', $data);
                View::render('register', $data, $error);
                View::renderpartial('footer', $data);
            }
            else{
                Session::set('loggedin', true);
                Url::previous();
            }
        }
    }
    public function register(){
        $data['title'] = 'Register';
        View::renderpartial('header', $data);
        View::render('register', $data);
        View::renderpartial('footer', $data);
    }

    public function logout(){
        Session::destroy();
        Url::previous();
    }
}