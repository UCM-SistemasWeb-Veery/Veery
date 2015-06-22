<?php  namespace controllers\auth;

use controllers\auth\passwordController as password,
        \core\session as Session,
        \core\url as Url,
        \core\view as View;
class AuthController extends \core\controller {
    private $_model;

    public function __construct(){
        parent::__construct();
        $this->_model = new \models\authModel();
    }
    public function login(){
        if(Session::get('loggedin')){
            Url::previous();
        }

        $data['title'] = 'Login';

        if(isset($_POST['submit'])){
            $userHandle = $_POST['userHandle'];
            $userPassword = $_POST['userPassword'];
            if(password::verify($userPassword, $this->_model->getHash($_POST['userHandle'])) == 0){
                $error[] = 'Usuario o contraseña incorrectos';
                $data['userHandle'] = $userHandle;
                View::renderpartial('header', $data);
                View::render('register', $data, $error);
                View::renderpartial('footer', $data);
            }
            else{
                if(!$this->_model->isActive($userHandle)){
                    $error[] = 'Su cuenta aún no está activa. Por favor, revise su correo electrónico.';
                    $data['userHandle'] = $userHandle;
                    View::renderpartial('header', $data);
                    View::render('register', $data, $error);
                    View::renderpartial('footer', $data);
                    //Url::redirect('register', $error);
                }
                else{
                    $userID = $this->_model->getUserId($userHandle);
                    Session::set('currentUserHandle', $userHandle);
                    Session::set('currentUserID', $userID);
                    Session::set('loggedin', true);
                    Url::redirect();
                }
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
        Url::redirect();
    }
}