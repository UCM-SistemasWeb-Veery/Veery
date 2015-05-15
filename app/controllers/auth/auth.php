<?php namespace controllers\auth;
use auth\password,
        \core\session,
        helpers\url,
        \core\view;
class Auth extends \core\controller {
    public function login(){
        if(Session::get('loggedin')){
            Url::previous();
        }

        $model = new \models\admin\auth();

        $data['title'] = 'Login';

        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            if(\helpers\password::verify($password, $model->getHash($_POST['username'])) == 0){
                $error[] = 'Usuario o contraseña incorrectos';
            }
            else{
                Session::set('loggedin', true);
                Url::previous();
            }
        }
        View::renderadmintemplate('loginheader', $data);
        View::render('admin/login', $data, $error);
        View::renderadmintemplate('footer', $data);
    }

    public function logout(){
        Session::destroy();
        Url::redirect('admin/login');
    }
}