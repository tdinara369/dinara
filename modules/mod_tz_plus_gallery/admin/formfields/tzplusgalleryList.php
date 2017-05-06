<?php
/**
 * Created by PhpStorm.
 * User: TuanMap
 * Date: 30/10/2015
 * Time: 10:30 AM
 */
defined('JPATH_BASE') or die;

JFormHelper::loadFieldClass('list');

class JFormFieldTzPlusGalleryList extends JFormFieldList
{
    protected $head = false;
    protected $type = 'TzList';
    protected $tzbol = true;

    protected function  getInput()
    {
        $element = $this->element;
        $doc = JFactory::getDocument();
        $doc->addStyleDeclaration('

        ');



            $doc->addScriptDeclaration('
//            (function($){
                jQuery(document).ready(function(){
                    jQuery(\'#' . $this->id . '\').on(\'change\',function(){
                        var value_' . $this->fieldname . ' = jQuery(this).val();
                        jQuery(\'.tz_type_' . $this->fieldname . '\').each(function(){
                            if(jQuery(this).hasClass(value_' . $element["name"] . ')){
                                jQuery(this).parents(\'.control-group\').first().css("display","block");
                            }else{
                                jQuery(this).parents(\'.control-group\').first().css("display","none");
                            }
                        });
                    });
                        jQuery(\'#' . $this->id . '\').trigger(\'change\');
                });
//            })(jQuery);
            ');

        return parent::getInput();
    }

}