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
            $userHandle = $_POST['userHandle'];
            $userPassword = $_POST['userPassword'];
            if(password::verify($userPassword, $model->getHash($_POST['userHandle'])) == 0){
                $error[] = 'Usuario o contraseña incorrectos';
                $data['userHandle'] = $userHandle;
                View::renderpartial('header', $data);
                View::render('register', $data, $error);
                View::renderpartial('footer', $data);
            }
            else{
                $userID = $model->getUserId($userHandle);
                Session::set('currentUserHandle', $userHandle);
                Session::set('currentUserID', $userID);
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