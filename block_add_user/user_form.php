<?php

//moodleform is defined in formslib.php
require_once("$CFG->libdir/formslib.php");
 
class simplehtml_form extends moodleform {
    //Add elements to form
    public function definition() {
        global $CFG,$DB;
 
        $mform = $this->_form; // Don't forget the underscore! 
        $content_type=$DB->get_record('add_user',array('text_type'));
        $mform->addElement('text', 'email', get_string('email')); // Add elements to your form
        $mform->setType('email', PARAM_NOTAGS);                   //Set type of element
        $mform->setDefault('email', 'Please enter email');        //Default value
            ...
    }
    
      /**
     * Validate submitted form data, recipient in this case, and returns list of errors if it fails.
     *
     * @param      array  $data   The data fields submitted from the form.
     * @param      array  $files  Files submitted from the form (not used)
     *
     * @return     array  List of errors to be displayed on the form if validation fails.
     */
    public function validation($data, $files) {
        $errors = parent::validation($data, $files);
 
    //check what type of data is submitting
        if($data[])
    if (empty($data['recipient'])) {
            $errors['recipient'] = get_string('err_email', 'form');
        }

        return $errors;
    }

}
}