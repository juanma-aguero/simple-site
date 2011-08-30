<?php

/**
 * itemCategory actions.
 *
 * @package    simple-site
 * @subpackage itemCategory
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class itemCategoryActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->item_categorys = Doctrine_Core::getTable('ItemCategory')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->item_category = Doctrine_Core::getTable('ItemCategory')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->item_category);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ItemCategoryForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ItemCategoryForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($item_category = Doctrine_Core::getTable('ItemCategory')->find(array($request->getParameter('id'))), sprintf('Object item_category does not exist (%s).', $request->getParameter('id')));
    $this->form = new ItemCategoryForm($item_category);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($item_category = Doctrine_Core::getTable('ItemCategory')->find(array($request->getParameter('id'))), sprintf('Object item_category does not exist (%s).', $request->getParameter('id')));
    $this->form = new ItemCategoryForm($item_category);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($item_category = Doctrine_Core::getTable('ItemCategory')->find(array($request->getParameter('id'))), sprintf('Object item_category does not exist (%s).', $request->getParameter('id')));
    $item_category->delete();

    $this->redirect('itemCategory/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $item_category = $form->save();

      $this->redirect('itemCategory/edit?id='.$item_category->getId());
    }
  }
}
