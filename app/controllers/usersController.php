<?php namespace controllers;

use \core\view as View,
    \core\session as Session,
    \core\controller as Controller,
    \core\url as Url,
    controllers\auth\passwordController as password;

class UsersController extends Controller{
    private $_model;

    public function __construct(){
        parent::__construct();
        $this->_model = new \models\userModel();
    }

    public function view($slug) {
        $data['user'] = $this->_model->getUser($slug);
        $data['follower'] = false;
        if($this->_model->isFollowing($data['user'][0]->userID, Session::get('currentUserID'))){
            $data['follower'] = true;
        }
        $data['title'] = $data['user'][0]->userName.' '.$data['user'][0]->userLastName;
        $data['posts'] = $this->_model->getUserPosts($data['user'][0]->userID);
        $artistID = $this->_model->isArtist($data['user'][0]->userID);
        if($artistID){
            $data['artist']['albums'] = $this->_model->getAlbums($artistID);
            $data['artist']['videos'] = $this->_model->getVideos($artistID);
            $data['artist']['streams'] = $this->_model->getStreams($artistID);
        }

        $data['js'] = "";
        View::renderpartial('header', $data);
        View::render('user/view', $data);
        View::renderpartial('footer', $data);
    }

    public function create() {

        if(isset($_POST['submit'])){

            $userHandle = $_POST['userHandle'];

            $userEmail = $_POST['userEmail'];

            if(!$this->_model->uniqueUser($userHandle, $userEmail)){


                $data['title'] = 'Registro';
                var_dump($this->_model->uniqueUser($userHandle, $userEmail));
                $error[] = "El usuario ya existe.";
                //View::renderpartial('header', $data);
                Url::redirect('register');
                //View::renderpartial('footer', $data);

            }

            $user = array(
                    'userHandle' => $userHandle,
                    'userPassword' => password::make($_POST['password']),
                    'userEmail' => $userEmail,
                    'userHash' => password::make($userHandle)
            );

            $this->_model->createUser($user);

            $data['message'][0] = 'Your account has been created. Please verify your email to complete registration.';
            View::renderpartial('header', $data);
            View::render('register', $data);
            View::renderpartial('footer', $data);

        }
    }

    public function verify($userEmail, $userHash)
    {

        $data['title'] = 'Complete registration';
        Session::set('loggedin', true);
        if(isset($_POST['submit'])){
            $userName = $_POST['userName'];
            $userLastName = $_POST['userLastName'];
            //$userDoB = $_POST['userDoB'];
            $userBio = $_POST['userBio'];
            $userSlug = Url::generateSlug(strtolower($userName).'-'.strtolower($userLastName));
            $userProfilePicture = 'img/profilePictures/'.$_FILES['userProfilePicture']['name'];
            move_uploaded_file($_FILES['userProfilePicture']['tmp_name'], $userProfilePicture);
            $userHeader = 'img/headerPictures/'.$_FILES['userHeader']['name'];
            move_uploaded_file($_FILES['userHeader']['tmp_name'], $userHeader);

            $user = array(
                    'userName' => $userName,
                    'userLastName' => $userLastName,
                    'userBio' => $userBio,
                    'userSlug' => $userSlug,
                    'userProfilePicture' => $userProfilePicture,
                    'userHeader' => $userHeader,
            );
            $data['user'] = $this->_model->getUserByEmail($userEmail);
            $where = array('userID' => $data['user'][0]->userID);
            $this->_model->verifyUser($user, $where);
            Url::redirect('users/'.$userSlug);
           /* if($username == ''){
                $error[] = 'Username is required.';
            }
            if($password == ''){
                $error[] = 'Password is required.';
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error[] = 'El email no es válido.';
            }
            if(!$error){
                $postdata = array(
                    'username' => $username,
                    'password' => \helpers\password::make($password),
                    'email' => $email
                );
                $this->_model->verifyUser();
                Session::set('message', 'User Added');
                Url::redirect('admin/users');
            }*/
        }

        $data['user'] = $this->_model->getUserByEmail($userEmail);

        View::renderpartial('header', $data);
        View::render('complete-registration', $data);
        View::renderpartial('footer', $data);
     }
}