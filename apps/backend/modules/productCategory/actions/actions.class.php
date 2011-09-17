<?php

/**
 * productCategory actions.
 *
 * @package    simple-site
 * @subpackage productCategory
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productCategoryActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->product_categorys = Doctrine_Core::getTable('ProductCategory')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->product_category = Doctrine_Core::getTable('ProductCategory')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->product_category);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ProductCategoryForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ProductCategoryForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($product_category = Doctrine_Core::getTable('ProductCategory')->find(array($request->getParameter('id'))), sprintf('Object product_category does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProductCategoryForm($product_category);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($product_category = Doctrine_Core::getTable('ProductCategory')->find(array($request->getParameter('id'))), sprintf('Object product_category does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProductCategoryForm($product_category);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($product_category = Doctrine_Core::getTable('ProductCategory')->find(array($request->getParameter('id'))), sprintf('Object product_category does not exist (%s).', $request->getParameter('id')));
    $product_category->delete();

    $this->redirect('productCategory/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $product_category = $form->save();

      $this->redirect('productCategory/edit?id='.$product_category->getId());
    }
  }
}
