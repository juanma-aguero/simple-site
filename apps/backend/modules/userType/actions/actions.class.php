<?php

/**
 * userType actions.
 *
 * @package    simple-site
 * @subpackage userType
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userTypeActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->user_types = Doctrine_Core::getTable('UserType')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->user_type = Doctrine_Core::getTable('UserType')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->user_type);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new UserTypeForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new UserTypeForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($user_type = Doctrine_Core::getTable('UserType')->find(array($request->getParameter('id'))), sprintf('Object user_type does not exist (%s).', $request->getParameter('id')));
    $this->form = new UserTypeForm($user_type);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($user_type = Doctrine_Core::getTable('UserType')->find(array($request->getParameter('id'))), sprintf('Object user_type does not exist (%s).', $request->getParameter('id')));
    $this->form = new UserTypeForm($user_type);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($user_type = Doctrine_Core::getTable('UserType')->find(array($request->getParameter('id'))), sprintf('Object user_type does not exist (%s).', $request->getParameter('id')));
    $user_type->delete();

    $this->redirect('userType/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $user_type = $form->save();

      $this->redirect('userType/edit?id='.$user_type->getId());
    }
  }
}
