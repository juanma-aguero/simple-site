<?php

/**
 * home actions.
 *
 * @package    simple-site
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        
    }

    public function executeLogin(sfWebRequest $request) {
        
    }

    public function executeLogout(sfWebRequest $request) {

        $this->getUser()->setAuthenticated(false);
        $this->getUser()->shutdown();
        return $this->redirect("home/index");
    }

    public function executeValidateLogin(sfWebRequest $request) {

        $username = $request->getParameter('username');
        $password = $request->getParameter('password');
        
        $query = Doctrine_Core::getTable('User')->createQuery('u');
        $query->andWhere("u.username = ?", "$username");
        $query->andWhere("u.password = ?", "$password");

        $usuarios = $query->execute();
        
        $valid = false;
        
        if( $usuarios->count() > 0 ) $valid = true;

        if ($valid) {
            $this->getUser()->setAuthenticated(true);
            $this->redirect("home/index");
        }else{
            return $this->redirect("home/login");
        }
    }

}
