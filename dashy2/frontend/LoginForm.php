<?php
//Based on http://www.yiiframework.com/wiki/490/creating-a-simple-crud-app-with-yii2-revised-12-20-2013/#hh11
namespace frontend\models;
use Yii;
use yii\base\Model;

class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;
    private $_user = false;
}
Then add some validation rules:

public function rules()
{
    return [
        // username and password are both required
        [['username', 'password'], 'required'],
        // password is validated by validatePassword()
        ['password', 'validatePassword'],
        // rememberMe must be a boolean value
        ['rememberMe', 'boolean'],
    ];
}

//There's three methods we'll want to define, validatePassword() (Since we declared it as a password validator), login() (So we can login), and getUser(), which will retrieve our user identity for us.
//We can start by defining getUser(), which will call our identities findByUsername() method and return it if it is found.

private function getUser()
{
    if ($this->_user === false) {
        $this->_user = User::findByUsername($this->username);
    }
    return $this->_user;
}

//Next we'll define our validator, which will retrieve our user via getUser(), and validate the password against our identities validatePassword() method.
public function validatePassword()
{
    $user = $this->getUser();
    if (!$user || !$user->validatePassword($this->password)) {
        $this->addError('password', 'Incorrect username or password.');
    }
}

//Finally, we have our login() method which will run our validators and create our session. The biggest thing to note here is that our Yii::$app->user->{attribute}'s are now set via Yii::$app->user->login($attributes). Anything in our getUser() method will be populated into our session, which is a nice improvement over Yii 1.

public function login()
{
    if ($this->validate()) {
        return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
    } else {
        return false;
    }
}
>?