<?php

/**
 * Product form.
 *
 * @package    simple-site
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductForm extends BaseProductForm {

    public function configure() {
        
        // labels
        $this->getWidgetSchema()->setLabels(array(
            'product_category_id' => 'Categoria',
            'name' => 'nombre',
            'description_short' => 'Descripcion corta',
            'description_long' => 'Descripcion larga',
            'price' => 'Precio',
            'image' => 'Imagen'
        ));
        
        // adding light rich text editor
        $this->widgetSchema['description_long']->setAttribute('class', 'rich-text-area');

        // Image setup
        $this->widgetSchema['image'] = new sfWidgetFormInputFileEditable(array(
                    'file_src' => '/' . basename(sfConfig::get('sf_upload_dir')) . '/' . $this->getObject()->getImage(),
                    'is_image' => true,
                    'edit_mode' => strlen($this->getObject()->getImage()) > 0,
                    'template' => '<div>%file%<br/>
                        %input%
                        %delete% %delete_label%</div>'
                ));

        $this->validatorSchema['image'] = new sfValidatorFile(array(
                    'required' => false,
                    'mime_types' => 'web_images'
                ));
        $this->validatorSchema['image_delete'] = new sfValidatorPass();
    }

    protected function doSave($con = null) {
        $upload = $this->getValue('image');

        if ($upload) {
            
            /* Image */
            $filename = sha1($upload->getOriginalName() . microtime() . rand()) . $upload->getExtension($upload->getOriginalExtension());
            $filepath = sfConfig::get('sf_upload_dir') . '/' . $filename;

            $oldfilepath = sfConfig::get('sf_upload_dir') . '/' . $this->getObject()->getImage();
            if (file_exists($oldfilepath)) {
                unlink($oldfilepath);
            }
            $upload->save($filepath);
            
            /* Thumbnail */
            $thumbnailpath = sfConfig::get('sf_thumbnail_dir') . '/' . $filename;
            $oldthumbnailpath = sfConfig::get('sf_thumbnail_dir') . '/' . $this->getObject()->getImage();
            if (file_exists($oldthumbnailpath)) {
                unlink($oldthumbnailpath);
            }
            $thumbnail = new sfThumbnail(150, 150, true, true, 75, 'sfGDAdapter');
            $thumbnail->loadFile($filepath);
            $thumbnail->save($thumbnailpath);
        }

        $delete = $this->getValue('image_delete');
        if ($delete) {
            
            /* Image */
            $filename = $this->getObject()->getImage();
            $filepath = sfConfig::get('sf_upload_dir') . '/' . $filename;
            @unlink($filepath);
            
            /* Thumbnail */
            $thumbnailpath = sfConfig::get('sf_thumbnail_dir').'/'.$filename;
            @unlink($thumbnailpath);
            
            
            $this->getObject()->setImage(null);
        }

        return parent::doSave($con);
    }

    public function updateObject($values = null) {
        $object = parent::updateObject($values);
        $object->setImage(str_replace(sfConfig::get('sf_upload_dir') . '/', '', $object->getImage()));
        return $object;
    }

}
