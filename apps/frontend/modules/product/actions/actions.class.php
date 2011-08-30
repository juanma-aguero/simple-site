<?php

/**
 * product actions.
 *
 * @package    simple-site
 * @subpackage product
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $this->categorys = Doctrine_Core::getTable('ProductCategory')
                ->createQuery('a')
                ->execute();
    }

    public function executeCategory(sfWebRequest $request) {

        $query = Doctrine_Core::getTable('Product')->createQuery('p');

        $categoryId = $request->getParameter("id");

        if ($categoryId) {
            $query->andWhere("p.product_category_id = ?", $categoryId);
        }

        $this->products = $query->execute();

        $this->categorys = Doctrine_Core::getTable('ProductCategory')
                ->createQuery('a')
                ->execute();
    }

    public function executeShow(sfWebRequest $request) {
        $this->product = Doctrine_Core::getTable('Product')->find(array($request->getParameter('id')));
        $this->forward404Unless($this->product);
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new ProductForm();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new ProductForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($product = Doctrine_Core::getTable('Product')->find(array($request->getParameter('id'))), sprintf('Object product does not exist (%s).', $request->getParameter('id')));
        $this->form = new ProductForm($product);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($product = Doctrine_Core::getTable('Product')->find(array($request->getParameter('id'))), sprintf('Object product does not exist (%s).', $request->getParameter('id')));
        $this->form = new ProductForm($product);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->forward404Unless($product = Doctrine_Core::getTable('Product')->find(array($request->getParameter('id'))), sprintf('Object product does not exist (%s).', $request->getParameter('id')));
        $product->delete();

        $this->redirect('product/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $product = $form->save();

            $this->redirect('product/edit?id=' . $product->getId());
        }
    }

}
