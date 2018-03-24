<?php
/**
*block-base of the standard text block
*block_list only for list block.
*/
class block_add_user extends block_base {
	function init() {
	$this->title = get_string('add_user', 'block_add_user');
	}//function init

	function get_content() {
		global $USER, $CFG, $DB, $OUTPUT, $PAGE;	
		if ($this->content !== NULL) {
			return $this->content;
		}//if
		$this->content = new stdClass;
		$redirect_to=$CFG->wwwroot"/blocks/add_user/user_form.php";
		$attributes=array('class'=>"add_user",'id'=>'addUser','href'=>$redirect_to);
		$display_text=get_string('description','block_add_user');
		$this->content->text = html_writer::nonempty_tag('a',$display_text,$attributes);

		return $this->content;
	}//function get_content

	/**
     * Defines where the block can be added
     *
     * @return array
     */
    public function applicable_formats() {
        return array(
            'course-view'    => true,
            'site'           => true,
            'mod'            => false,
            'my'             => false
        );
    }

    /**
     * Allow block instance configuration
     * This line tells Moodle that the block has a settings.php file.
     * @return bool
     */
    public function has_config() {
        return true;
    }


}//block_base