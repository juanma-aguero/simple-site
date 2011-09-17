<?php

/**
 * productLine actions.
 *
 * @package    simple-site
 * @subpackage productLine
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productLineActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->product_lines = Doctrine_Core::getTable('ProductLine')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->product_line = Doctrine_Core::getTable('ProductLine')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->product_line);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ProductLineForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ProductLineForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($product_line = Doctrine_Core::getTable('ProductLine')->find(array($request->getParameter('id'))), sprintf('Object product_line does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProductLineForm($product_line);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($product_line = Doctrine_Core::getTable('ProductLine')->find(array($request->getParameter('id'))), sprintf('Object product_line does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProductLineForm($product_line);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($product_line = Doctrine_Core::getTable('ProductLine')->find(array($request->getParameter('id'))), sprintf('Object product_line does not exist (%s).', $request->getParameter('id')));
    $product_line->delete();

    $this->redirect('productLine/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $product_line = $form->save();

      $this->redirect('productLine/edit?id='.$product_line->getId());
    }
  }
}
