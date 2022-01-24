<?php 

namespace GfExamplePlugin;

/**
 * Class GravityFormsRegistrationForm
 * @package GfExamplePlugin
 */
class GravityFormsRegistrationForm extends Singleton
{

    /**
     * GravityFormsRegistrationForm constructor.
     */
    protected function __construct()
    {
       //$registration_form_id = get_field('register_form_id', 'option');
       $registration_form_id = 2;
       
       add_action('gform_after_submission', [$this, 'gform_after_submission_function', 10, 2]);
    }
        

    function gform_after_submission_function($entry, $form) {
        \GFCommon::log_debug(__METHOD__ . '(): running.');
        \GFCommon::log_debug(__METHOD__ . '(): The Entry => ' . print_r($entry, true));
    }

}
