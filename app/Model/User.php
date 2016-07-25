<?php 
App::uses('AuthComponent','Controller/Component');

class User extends AppModel
{
	public $AvatarUploadDir = 'img/avatsrs';
	public $validate = array(

		'username'=>array(
			'notBlank'=>array(
				'rule'=>array('notBlank'),
				'message'=>'usename lhoong được để trống',
				'allowEmpty' => false,
				),
			'between' => array( 
                'rule' => array('between', 5, 15), 
                'required' => true, 
                'message' => 'username phải có số kí tự từ 5-15 kí tự'
            ),
            'unique' => array(
                'rule'    => array('isUniqueUsername'),
                'message' => 'username đã tồn tại'
            ),
            'alphaNumericDashUnderscore' => array(
                'rule'    => array('alphaNumericDashUnderscore'),
                'message' => 'username có thể chứa các kí tự, số và dấu gạch chân'
            ),
			),

			'password'=>array(
				'required' => array(
	                'rule' => array('notBlank'),
	                'message' => 'phải điền mật khẩu'
            	),
				'minlength' => array(
					'rule' => array('minlength','6'),
					'mesage' => 'mật khẩu phải ít nhất là 6 kí tự'
					),
				),

			'password_confirm'=>array(
				'required'=>array(
					'rule'=>array('notBlank'),
					'message'=>'vui lòng xác nhận lại mật khẩu'
					),
				'equaltofield'=>array(
					'rule'=>array('equaltofield','password'),
					'message'=>'xác nhận mật khẩu không trùng khớp'
					),
				),

			'email'=>array(
				'required'=>array(
					'rule'=>array('email',true),
					'message'=>'định dạng email không đúng'
					),
				'unique'=>array(
					'rule'=>array('IsUniqueEmail'),
					'message'=>'email đã tồn tại'
					),
				'between'=>array(
					'rule'=>array('between',6,60),
					'message'=>'email phải từ 6 đến 60 kí tự'
					),
				),

			'role'=>array(
				'valid'=>array(
					'rule'=>array('inlist',array('superadmin','admin','member')),
					'message'=>'bạn phải chọn cấp độ thành viên',
					'allowEmpty'=>false,
					),
				),

			'password_update' => array(
            'min_length' => array(
                'rule' => array('minLength', '6'),   
                'message' => 'mật khẩu phải chứa ít nhất là 6 kí tự',
                'allowEmpty' => true,
                'required' => false
            )
	        ),
	        'password_confirm_update' => array(
	             'equaltofield' => array(
	                'rule' => array('equaltofield','password_update'),
	                'message' => 'xác nhận mật khẩu sai',
	                'required' => false,
	            ),
	        ),
		);

	function isUniqueUsername($check){
		$username = $this->find(
			'first',
			array(
				'fields' => array(
					'User.id',
					'User.username'
				),
				'conditions' => array(
					'User.username' => $check['username']
				)
			)
		);

		if(!empty($username)){
            if($this->data[$this->alias]['id'] == $username['User']['id']){
                return true; 
            }else{
                return false; 
            }
        }else{
            return true; 
        }
	    }

	function isUniqueEmail($check) {
 
        $email = $this->find(
            'first',
            array(
                'fields' => array(
                    'User.id'
                ),
                'conditions' => array(
                    'User.email' => $check['email']
                )
            )
        );
 
        if(!empty($email)){
            if($this->data[$this->alias]['id'] == $email['User']['id']){
                return true; 
            }else{
                return false; 
            }
        }else{
            return true; 
        }
    }
     
    public function alphaNumericDashUnderscore($check) {
        // $data array is passed using the form field name as the key
        // have to extract the value to make the function generic
        $value = array_values($check);
        $value = $value[0];
 
        return preg_match('/^[a-zA-Z0-9_ \-]*$/', $value);
    }
     
    public function equaltofield($check,$otherfield) 
    { 
        //get name of field 
        $fname = ''; 
        foreach ($check as $key => $value){ 
            $fname = $key; 
            break; 
        } 
        return $this->data[$this->name][$otherfield] === $this->data[$this->name][$fname]; 
    } 
 
    /**
     * Before Save
     * @param array $options
     * @return boolean
     */
     public function beforeSave($options = array()) {
        // hash our password
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		
		// if we get a new password, hash it
		if (isset($this->data[$this->alias]['password_update'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password_update']);
		}
	
		// fallback to our parent
		return parent::beforeSave($options);
    }

}
?>